<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Estate;
use App\Order;
use Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $orders = Order::all();
        return view('Order.index', compact('orders'));
    }

    public function show(Order $order)
    {
        $estate = Estate::findOrFail($order->estate_id);
        $owner = $estate->owner;
        $customer = Customer::findOrFail($order->customer_id);
        return view('Order.show', compact('order', 'estate', 'owner', 'customer'));
    }

    public function create(Estate $estate)
    {

        $estate = $estate->load(['owner', 'user']);
        $customers = Customer::all();
        return view('Order.add', compact('estate', 'customers'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $estate = Estate::findOrFail($request->get('estate'))->load('owner');
        $owner = $estate->owner;
        $customer = Customer::findOrFail($request->get('customer'));
        $order = Auth::user()->orders()->create([
            'estate_id' => $estate->id,
            'customer_id' => $customer->id,
            'owner_id' => $owner->id
        ]);
        $estate->status = 1;
        $estate->save();
        return view('Order.show', compact('order', 'estate', 'owner', 'customer'));
    }

    public function delete(Order $order)
    {
        $estate  = Estate::findOrFail($order->estate_id);
        //dd($estate);
        $estate->status = 0;
        $estate->save();
        Order::destroy($order->id);
        return redirect()->route('Order.index');
    }
}
