<?php

namespace App\Http\Controllers;

use App\Owner;
use App\Estate;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class EstateController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index($category)
    {
        if ($category == 'sell') {
            $estates = Estate::where(['type' => 'sell', 'status' => '0'])->with('categories')->orderBy('id', 'desc')->paginate(9);
        } else if ($category == 'rent') {
            $estates = Estate::where(['type' => 'rent', 'status' => '0'])->with('categories')->orderBy('id', 'desc')->paginate(9);
        } else if ($category == 'all') {
            $estates = Estate::where(['status' => '0'])->with('categories')->orderBy('id', 'desc')->paginate(9);
        } else {
            abort(404);
        }

        $categories = Category::all();
        //dd($estates);
        return view('Estate.index', compact('estates', 'categories'));
    }

    public function show($id)
    {
        $estate = Estate::findOrFail($id);
        //dump($estate);
        return view('Estate.show', compact('estate'));
    }

    public function create()
    {
        $owners = Owner::all();
        $categories = Category::all();
        //dd([$owners, $categories]);
        return view('Estate.create', compact(['owners', 'categories']));
    }

    public function store(Request $request)
    {

        $request->validate(
            [
                'type' => 'required',
                'title' => 'required | string',
                'description' => 'required | string',
                'price' => 'numeric',
                'usage' => 'required | string',
                'area' => 'required | numeric',
                'Address' => 'required',
                'build_date' => 'required | date',
                'room_count' => 'numeric',
                'Address' => 'required',
                'img_link' => 'mimes:jpg,jpeg,png|max:2048'
            ]
        );
        //dd($request->img_link->extension());
        //dd($request->toArray());
        $estate = Auth::user()->estates()->create($request->except(['_token', 'img_link']));
        if (!is_null($request->img_link)) {
            $this->savePicture($request, $estate);
        }

        $estate->categories()->attach($request->get('category_id'));
        //$estate->owner()->attach($request->get('owner_id'));
        return redirect()->route('Estate.show', $estate->id);
    }

    private function savePicture(Request $request, Estate $estate)
    {
        $file_name = $estate->id . '-' . time() . '.' . $request->img_link->extension();
        $request->img_link->move(public_path('uploads'), $file_name);
        $estate->img_link = $file_name;
        $estate->save();
    }

    public function edit(Estate $estate)
    {
        $estate = Estate::with('categories')->find($estate->id);
        //dd($estate);
        $owners = Owner::all();
        $categories  = Category::all();
        return view('Estate.edit', compact('owners', 'categories', 'estate'));
    }

    public function update(Request $request, Estate $estate)
    {
        //dd($request->all());
        $estate->elevator = 0;
        $estate->anbari = 0;
        $estate->parking = 0;
        $estate->room_count = $request->get('room_count');
        $estate->update($request->except(['_token', 'category_id', 'img_link']));
        $estate->categories()->sync($request->get('category_id'));
        return redirect()->route('Estate.show', $estate->id);
    }

    public function delete(Estate $estate)
    {

        $image =  public_path('uploads') . '\\' . $estate->img_link;
        if (File::exists($image)) File::delete($image);
        Estate::destroy($estate->id);
        return redirect()->route('Estate.index', 'all');
    }

    public function search(Request $request)
    {
        if ($request->category != "0") {
            $estates = Estate::whereStatus('0')->where('title', 'LIKE', '%' . $request->get('search') . '%')
                ->whereHas('categories', function ($query) use ($request) {
                    $query->where('categories.id', $request->get('category'));
                })->orderBy('id', 'desc')->paginate(50);
        } else {
            $estates = Estate::whereStatus('0')->where('title', 'LIKE', '%' . $request->get('search') . '%')
                ->orderBy('id', 'desc')->paginate(50);
        }

        $categories = Category::all();
        //dd($estates);
        return view('Estate.index', compact('estates', 'categories'));
    }
}
