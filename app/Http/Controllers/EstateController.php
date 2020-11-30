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
        $estates = Estate::all();
        return view('Estate.index', compact('estates'));
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
        //dd($request->toArray());
        $request->validate(
            [
                'title' => 'required | string',
                'description' => 'required | string',
                'price' => 'required | numeric',
                'rent_price' => 'required | numeric',
                'usage' => 'required | string',
                'area' => 'required | numeric',
                'Address' => 'required',
                'img_link' => 'required',

            ]
        );
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
