<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->insert(
            [
                [
                    "id" => 1,
                    "name" => "Admin",
                    "email" => "Admin@gmail.com",
                    "password" => Hash::make('password'),
                    "gender" => "Male",
                    "date_of_birth" => Carbon::create('2000', '10', '01'),
                    "country" => "Argentina",
                    "role" => "Admin"
                ],
                
                [
                    "id" => 2,
                    "name" => "Customer",
                    "email" => "Customer@gmail.com",
                    "password" => Hash::make('password'),
                    "gender" => "Female",
                    "date_of_birth" => Carbon::create('2005', '05', '12'),
                    "country" => "France",
                    "role" => "Customer"
                ],

               
                
            ]
        );
    }
}
