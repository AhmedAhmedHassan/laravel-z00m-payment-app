<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        // Create Admin
        $admin=User::create([
            'first_name' =>'admin',
            'middle_name' => 'admin',
            'last_name' => 'admin',
            'email' => 'admin@example.com',
            'phone' => '+201007655720',
            'gender' => 'male',
            'is_phone_active' => '1',   
            'date_of_birth' => '1995/04/06',    
            'password' => Hash::make('admin'),
            'registration_ip' => 'localhost',
            'user_agent' => 'server',
            'email_verified_at' =>now(),
            'created_at' => now(),
        ])->assignRole('admin');
       
        // Create Normal User
        $user=User::create([
            'first_name' =>'user',
            'middle_name' => 'user',
            'last_name' => 'user',
            'email' => 'user@example.com',
            'phone' => '+201115672544',
            'gender' => 'male',
            'is_phone_active' => '1',   
            'date_of_birth' => '1995/07/27',    
            'password' => Hash::make('user'),
            'registration_ip' => 'localhost',
            'user_agent' => 'server',
            'email_verified_at' =>now(),
            'created_at' => now(),
        ])->assignRole('user');
    }
}
