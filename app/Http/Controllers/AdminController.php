<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Meal;
use App\Order;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function newOrders()
    {
        return view('admin.new-orders')->with('orders' , Order::where('date' , Carbon::now()->toDateString())->get());
    }

    public function pastOrders()
    {
        return view('admin.past-orders')->with('orders' , Order::where('date' , '<' , Carbon::now()->toDateString())->get());
    }

    public function users()
    {
        $customers = Customer::all();

        return view('admin.users')->with('customers' , $customers);
    }

    public function deliver( Order $order)
    {
        if($order->status)
        {
            $order->status = false;
            $order->save();
        }
        else
        {
            $order->status = true;
            $order->save();
        }

        return redirect()->back();
    }

    public function toAddMeal()
    {
        return view('admin.add-meal');
    }

    public function addMeal(Request $request)
    {
        //dd($request->all());

        if(count(Meal::all()) == 0)
        {
            Meal::create([
                'breakfast_name' => $request->breakfast_name,
                'breakfast' => $this->storeBreakfast($request),
                'breakfast_price' => $request->breakfast_price,
                'lunch_name' => $request->lunch_name,
                'lunch' => $this->storeLunch($request),
                'lunch_price' => $request->lunch_price,
                'dinner_name' => $request->dinner_name,
                'dinner' => $this->storeDinner($request),
                'dinner_price' => $request->dinner_price,
                'drink_name' => $request->dinner_name,
                'drink' => $this->storeDrink($request),
                'drink_price' => $request->drink_price
            ]);
        }
        else
        {
            $meal = Meal::first();

                $meal->breakfast_name = $request->breakfast_name;
                $meal->breakfast = $this->storeBreakfast($request);
                $meal->breakfast_price = $request->breakfast_price;
                $meal->lunch_name = $request->lunch_name;
                $meal->lunch = $this->storeLunch($request);
                $meal->lunch_price = $request->lunch_price;
                $meal->dinner_name = $request->dinner_name;
                $meal->dinner = $this->storeDinner($request);
                $meal->dinner_price = $request->dinner_price;
                $meal->drink_name = $request->dinner_name;
                $meal->drink = $this->storeDrink($request);
                $meal->drink_price = $request->drink_price;
                $meal->save();
        }


        return redirect()->route('admin.dashboard');
    }

    public function storeBreakfast($request)
    {
        $path = null;

        if($request->hasFile('breakfast'))
        {
            $image = $request->file('breakfast');
            $ext = $image->getClientOriginalExtension();
            $path = $image->storeAs('Meals' , 'breakfast.'.$ext);
        }

        $image->move(public_path('Meals') , storage_path($path));

        return $path;
    }

    public function storeLunch($request)
    {
        $path = null;

        if($request->hasFile('lunch'))
        {
            $image = $request->file('lunch');
            $ext = $image->getClientOriginalExtension();
            $path = $image->storeAs('Meals' , 'lunch.'.$ext);
        }

        $image->move(public_path('Meals') , storage_path($path));

        return $path;
    }

    public function storeDinner($request)
    {
        $path = null;

        if($request->hasFile('dinner'))
        {
            $image = $request->file('dinner');
            $ext = $image->getClientOriginalExtension();
            $path = $image->storeAs('Meals' , 'dinner.'.$ext);
        }

        $image->move(public_path('Meals') , storage_path($path));

        return $path;
    }

    public function storeDrink($request)
    {
        $path = null;

        if($request->hasFile('drink'))
        {
            $image = $request->file('drink');
            $ext = $image->getClientOriginalExtension();
            $path = $image->storeAs('Meals' , 'drink.'.$ext);
        }

        $image->move(public_path('Meals') , storage_path($path));

        return $path;
    }

    public function deleteUser(User $user)
    {
        Customer::where('user_id' , $user->id)->delete();
        Order::where('user_id' , $user->id)->delete();
        $user->delete();

         return redirect()->route('admin.users');
    }

}
