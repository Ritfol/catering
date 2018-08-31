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

    public function order(Request $request)
    {
        $order = Order::create([
            'user_id' => auth()->user()->id,
            'breakfast' => $request->breakfast_checkbox ? true : false,
            'lunch' => $request->lunch_checkbox ? true : false,
            'dinner' => $request->dinner_checkbox ? true : false,
            'drink' => $request->drink_checkbox ? true : false,
            'price' => $this->totalPrice($request , Meal::first()),
            'date' => Carbon::now()->toDateString(),
            'status' => 0
        ]);

        return redirect()->route('customer.toConfirm' , $order);
    }

    public function toConfirm(Order $order)
    {
        $meal = Meal::first();

        return view('customer.confirm-order')->with(['order' => $order , 'meal' => $meal]);
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
