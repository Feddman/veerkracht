<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Faq;
use App\Models\User;
use App\Models\Question;
use App\Models\Answer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        $this->call([
            UserSeeder::class,
            QuestionSeeder::class,
            AnswerSeeder::class,
            FaqSeeder::class,
        ]); 

        // create customers
        $user = User::create([
            'name' => 'Admin',
            'last_name' => 'Smith',
            'salutation' => 'dhr',
            'phone_number' => '999999999',
            'email' => 'test@example.com',
            'password' => bcrypt('password')
        ]);

        for ($i = 0; $i < 10; $i++) { 
            User::create([
                'name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'salutation' => 'dhr',
                'phone_number' => '999999999',
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt($faker->name)
            ]);
        }

        for ($in = 1; $in < 12; $in++) { 
            for ($i = 1; $i < 44; $i++) {
                Answer::create([
                    'score' => $faker->numberBetween(1, 10),
                    'question_id' => $i,
                    'user_id' => $in,
                ]);
            }
        }

    }
}
