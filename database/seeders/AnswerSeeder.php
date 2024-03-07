<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Answer::create([
        //     'user_id' => 1,
        //     'question_id' => 1,
        //     'score' => 6,
        // ]);

        // For each user, for each question create an answer with a random score between 1 and 10
        foreach (range(1, 5) as $userId) {
            foreach (range(1, 44) as $questionId) {
                Answer::create([
                    'user_id' => $userId,
                    'question_id' => $questionId,
                    'score' => rand(1, 10),
                ]);
            }
        }
    }
}
