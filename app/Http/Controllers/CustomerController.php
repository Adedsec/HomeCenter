<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;


class CustomerController extends Controller
{

    public function index()
    {
        $customers = Customer::all();
        return view('Customer.index', compact('customers'));
    }


    public function show($id)
    {
    }

    public function create()
    {
        return view('Customer.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function update()
    {
    }
}
