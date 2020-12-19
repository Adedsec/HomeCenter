<?php

namespace App\Http\Controllers;

use App\Category;
use App\Estate;
use App\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EstateController extends Controller
{

    public function index($category)
    {
        if ($category == 'sell') {
            $estates = Estate::where('type', 'sell')->with('categories')->get();
        } else if ($category == 'rent') {
            $estates = Estate::where('type', 'rent')->with('categories')->get();
        } else if ($category == 'all') {
            $estates = Estate::with('categories')->get();
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
                'Address' => 'required'
            ]
        );
        //dd($request->toArray());
        $estate = Auth::user()->estates()->create($request->except('_token'));
        $estate->categories()->attach($request->get('category_id'));
        //$estate->owner()->attach($request->get('owner_id'));


    }

    public function edit()
    {
        return view('Estate.create');
    }

    public function update(Request $request)
    {
    }
}
