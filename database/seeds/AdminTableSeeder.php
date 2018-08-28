<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::create([
            'name' => 'Admin',
            'phone_number' => 123456,
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
            'role' => 'admin',
            'verified' => 1
        ]);

        \App\Admin::create([
            'user_id' => $user->id,
        ]);
    }
}