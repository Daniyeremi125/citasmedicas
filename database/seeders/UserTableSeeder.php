<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Danny',
            'email' => 'dani1234@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // password
            
            'cedula' => '74718767',
            'address' => 'Av.JULIO C TELLO ',
            'phone' => '987557478',
            'role' => 'admin',
        ]);
        User::factory()
            ->count(50)
            ->create();
    }
}