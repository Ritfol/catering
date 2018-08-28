<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $fillable = ['breakfast' , 'lunch' , 'dinner' , 'drink' , 'breakfast_name' , 'lunch_name' , 'dinner_name' , 'drink_name'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
