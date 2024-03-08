<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        User::create([
            'name' => 'Lars',
            'last_name' => 'van Bezooijen',	
            'salutation' => 'Dhr.',
            'phone_number' => '0612345678',
            'email' => 'lars@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => true
        ]);
        User::create([
            'name' => 'Pluk',
            'last_name' => 'Zwaal',	
            'salutation' => 'Dhr.',
            'phone_number' => '0612345678',
            'email' => 'pluk@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => true
        ]);
        User::create([
            'name' => 'Silvin',
            'last_name' => 'van Haestregt',
            'salutation' => 'Dhr.',
            'phone_number' => '0612345678',
            'email' => 'silvin@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => true
        ]);
        User::create([
            'name' => 'Kelvin',
            'last_name' => 'Mies',
            'salutation' => 'Dhr.',
            'phone_number' => '0612345678',
            'email' => 'kelvin@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => true
        ]);
        User::create([
            'name' => 'Lukas',
            'last_name' => 'de Vries',
            'salutation' => 'Dhr.',
            'phone_number' => '0612345678',
            'email' => 'lukas@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => true
        ]);

    

    }
}
