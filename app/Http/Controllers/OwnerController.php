<?php

namespace App\Http\Controllers;

use App\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OwnerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    public function index()
    {

        $onwers = Owner::all();
        return view('Owner.index', ['owners' => $onwers]);
    }

    public function show($id)
    {
        $owner = Owner::findOrFail($id);
        return view('Owner.show', compact('owner'));
    }

    public function create()
    {
        return view('Owner.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | string',
            'father-name' => 'required | string',
            'email' => 'required | email | unique:owners,email',
            'phone_number' => 'required | numeric | digits:11 | starts_with:09',
            'national_code' => 'required | numeric | digits:10 | unique:owners,national_code',
            'birth_date' => 'required | date',
            'address' => 'required | string',
            'post_code' => 'required | numeric | digits:10 | unique:owners,post_code'
        ]);
        Auth::user()->owners()->create($request->except('_token'));
        return redirect()->route('Owner.index');
    }

    public function edit(Owner $owner)
    {
        return view('Owner.edit', compact('owner'));
    }

    public function update(Request $request,  Owner $owner)
    {
        $request->validate([
            'name' => 'required | string',
            'father-name' => 'required | string',
            'email' => 'required | email ',
            'phone_number' => 'required | numeric | digits:11 | starts_with:09',
            'national_code' => 'required | numeric | digits:10 ',
            'birth_date' => 'required | date',
            'address' => 'required | string',
            'post_code' => 'required | numeric | digits:10 '
        ]);
        $owner->update($request->except('_token'));
        return redirect()->route('Owner.index');
    }


    public function delete($id)
    {
        Owner::destroy($id);
        return redirect()->route('Owner.index');
    }
}
