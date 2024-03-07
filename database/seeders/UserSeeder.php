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
            'last_name' => 'Bezooijen',	
            'salutation' => 'van',
            'phone_number' => '0612345678',
            'email' => 'lars@gmail.com',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Pluk',
            'last_name' => 'Zwaal',	
            // 'salutation' => '',
            'phone_number' => '0612345678',
            'email' => 'pluk@gmail.com',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Silvin',
            'last_name' => 'Heastrecht',
            'salutation' => 'van',
            'phone_number' => '0612345678',
            'email' => 'silvin@gmail.com',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Kelvin',
            'last_name' => 'Mies',
            // 'salutation' => '',
            'phone_number' => '0612345678',
            'email' => 'kelvin@gmail.com',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Lukas',
            'last_name' => 'Vries',
            'salutation' => 'de',
            'phone_number' => '0612345678',
            'email' => 'lukas@gmail.com',
            'password' => bcrypt('password'),
        ]);

    

    }
}
