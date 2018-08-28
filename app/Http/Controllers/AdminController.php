<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function addMeal()
    {
        return view('admin.add-meal');
    }
}
