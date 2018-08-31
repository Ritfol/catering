<?php

namespace App\Http\Controllers;

use App\Meal;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $meal = Meal::first();

        return view('homepage.homepage')->with('meal' , $meal);
    }
}
