<?php

namespace App\Http\Controllers;

use App\Meal;
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
        return view('admin.new-orders');
    }

    public function pastOrders()
    {
        return view('admin.past-orders');
    }

    public function users()
    {
        return view('admin.users');
    }

    public function toAddMeal()
    {
        return view('admin.add-meal');
    }

    public function addMeal(Request $request)
    {
        //dd($this->storeDrink($request));

        Meal::create([
            'breakfast_name' => $request->breakfast_name,
            'breakfast' => $this->storeBreakfast($request),
            'lunch_name' => $request->lunch_name,
            'lunch' => $this->storeLunch($request),
            'dinner_name' => $request->dinner_name,
            'dinner' => $this->storeDinner($request),
            'drink_name' => $request->dinner_name,
            'drink' => $this->storeDrink($request)
        ]);

        return redirect()->back()->withInput();
    }

    public function storeBreakfast($request)
    {
        $path = null;

        if($request->hasFile('breakfast'))
        {
            $image = $request->file('breakfast');
            $ext = $image->getClientOriginalExtension();
            $path = $image->storeAs('Meals' , $request->breakfast_name.'.'.$ext);
        }

        return asset($path);
    }

    public function storeLunch($request)
    {
        $path = null;

        if($request->hasFile('lunch'))
        {
            $image = $request->file('lunch');
            $ext = $image->getClientOriginalExtension();
            $path = $image->storeAs('Meals' , $request->lunch_name.'.'.$ext);
        }

        return asset($path);
    }

    public function storeDinner($request)
    {
        $path = null;

        if($request->hasFile('dinner'))
        {
            $image = $request->file('dinner');
            $ext = $image->getClientOriginalExtension();
            $path = $image->storeAs('Meals' , $request->dinner_name.'.'.$ext);
        }

        return asset($path);
    }

    public function storeDrink($request)
    {
        $path = null;

        if($request->hasFile('drink'))
        {
            $image = $request->file('drink');
            $ext = $image->getClientOriginalExtension();
            $path = $image->storeAs('Meals' , $request->drink_name.'.'.$ext);
        }

        return asset($path);
    }

}
