<?php

namespace App\Http\Controllers;

use App\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OwnerController extends Controller
{
    public function index()
    {
    }

    public function show($id)
    {
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
        return redirect('/home');
    }

    public function edit($id)
    {
        # code...
    }

    public function update()
    {
        # code...
    }
}
