<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::create([
            'name' => 'Zakayo Haule',
            'phone_number' => '0687738624',
            'email' => 'z@z.com',
            'password' => bcrypt('123456'),
            'role' => 'customer',
            'verified' => 1
        ]);

        \App\Customer::create([
            'user_id' => $user->id,
            'location' => 'Posta',
            'description' => 'PPF Tower Floor 14 Room No. 12',
            'enabled' => 1
        ]);
    }
}
