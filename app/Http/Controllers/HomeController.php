<?php

namespace App\Http\Controllers;

use App\Category;
use Auth;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('main');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userHasOrder = $this->getUsersHasOrder();
        $customerAvgAge = $this->CustomersAvgAge();
        $customerAvgAge =  $customerAvgAge[0]->Average;
        $totalAmount = $this->getTotalOrdersAmount(Auth::user()->id);
        return view('home', compact('userHasOrder', 'customerAvgAge', 'totalAmount'));
    }


    private function getTotalOrdersAmount($user_id)
    {
        $result  = DB::select('SELECT `userOrdersTotalPrice`(?) AS `total`', [$user_id]);
        return $result;
    }

    private function getUsersHasOrder()
    {
        $result  = DB::select('CALL `usersThatHasOrder`()');
        return $result;
    }

    private function CustomersAvgAge()
    {
        $result  = DB::select('SELECT `CustomersAvgAge`() AS `Average`');
        return $result;
    }

    public function main()
    {
        $categories = Category::all();
        return view('main', compact('categories'));
    }
}
