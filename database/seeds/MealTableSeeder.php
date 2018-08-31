<?php

use Illuminate\Database\Seeder;

class MealTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Meal::create([
            'breakfast_name' => 'Breakfast',
            'breakfast' => 'Meals/Breakfast.jpg',
            'breakfast_price' => 1500,
            'lunch_name' => 'Lunch',
            'lunch' => 'Meals/Lunch.jpg',
            'lunch_price' => 3000,
            'dinner_name' => 'Dinner',
            'dinner' => 'Meals/Dinner.jpg',
            'dinner_price' => 3500,
            'drink_name' => 'Drink',
            'drink' => 'Meals/Drink.jpg',
            'drink_price' => 1500
        ]);
    }
}
