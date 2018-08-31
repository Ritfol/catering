<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [ 'user_id' , 'breakfast' , 'lunch' , 'dinner' , 'drink' , 'date' ,'price', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
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
}
