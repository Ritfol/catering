<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [ 'user_id' , 'breakfast' , 'lunch' , 'dinner' , 'drink' , 'date' ,'price', 'status'];

    public function getDateAttribute()
    {
        return Carbon::parse($this->attributes['date'])->toFormattedDateString();
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function customer($order)
    {

        return Customer::where('user_id' , $order->user->id)->first();
    }

    public function getNumberOfMeals($order)
    {
        $no_of_meals = 0;

        if ($order->breakfast)
        {
            $no_of_meals += 1;
        }
        if ($order->lunch)
        {
            $no_of_meals += 1;
        }
        if ($order->dinner)
        {
            $no_of_meals += 1;
        }
        if ($order->drink)
        {
            $no_of_meals += 1;
        }

        return $no_of_meals;
    }

    public function getMealsBought($order)
    {
        $meals_bought = '';

        if ($order->breakfast)
        {
            $meals_bought .= "Breakfast";
        }
        if ($order->lunch)
        {
            if($order->breakfast)
                $meals_bought .= ", Lunch";
            else
                $meals_bought .= "Lunch";
        }
        if ($order->dinner)
        {
            if($order->breakfast or $order->lunch)
                $meals_bought .= ", Dinner";
            else
                $meals_bought .= "Dinner";
        }
        if ($order->drink)
        {
            if($order->breakfast or $order->lunch or $order->dinner)
                $meals_bought .= ", Drink";
            else
                $meals_bought .= "Drink";
        }

        return $meals_bought;
    }
}
