<?php

namespace App\Http\Controllers;

use App\Meal;
use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        //dd(Carbon::now()->toDateString());

        $meal = Meal::first();

        //dd($meal->breakfast);

        return view('customer.dashboard')->with('meal' , $meal);
    }

    public function order( Request $request)
    {
        //dd($request->price);

        Order::create([
            'user_id' => auth()->user()->id,
            'breakfast' => array_key_exists('breakfast_checkbox' , $request->order) ? true : false,
            'lunch' => array_key_exists('lunch_checkbox' , $request->order) ? true : false,
            'dinner' => array_key_exists('dinner_checkbox' , $request->order) ? true : false,
            'drink' => array_key_exists('drink_checkbox' , $request->order) ? true : false,
            'price' => $request->price,
            'date' => Carbon::now()->toDateString(),
            'status' => 0
        ]);

        return redirect()->route('customer.dashboard');
    }

    public function toConfirm(Request $request)
    {
        $meal = Meal::first();
        $price = $this->totalPrice($request , $meal);

        return view('customer.confirm-order')->with(['order' => $request->except('_token') , 'meal' => $meal , 'price' => $price]);
    }

    public function pastOrders()
    {
        $orders = auth()->user()->orders;

        //dd($orders);
        return view('customer.past-orders')->with('orders' , $orders);
    }

    public function totalPrice($request , $meal)
    {
        $price = 0;

        if ($request->breakfast_checkbox)
        {
            $price += $meal->breakfast_price;
        }
        if ($request->lunch_checkbox)
        {
            $price += $meal->lunch_price;
        }
        if ($request->dinner_checkbox)
        {
            $price += $meal->dinner_price;
        }
        if ($request->drink_checkbox)
        {
            $price += $meal->drink_price;
        }

        return $price;
    }
}
