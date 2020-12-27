<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CustomerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $customers = Customer::all();
        return view('Customer.index', compact('customers'));
    }

    public function create()
    {
        return view('Customer.create');
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

        Auth::user()->customers()->create($request->except('_token'));

        return redirect()->route('Customer.index');
    }

    public function edit(Customer $customer)
    {
        return view('Customer.edit', compact('customer'));
    }

    public function update(Request $request,  Customer $customer)
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
        $customer->update($request->except('_token'));
        return redirect()->route('Customer.index');
    }

    public function delete($id)
    {
        Customer::destroy($id);
        return redirect()->back();
    }
}
