<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Answer;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function store(Request $request)
    {

        $answers =[];

        $user = User::where('email', $request->email)->first(); 

        if(!$user) {
            $user = User::create([
                'name' => $request->name,
                'last_name' => $request->lastname,
                'salutation' => $request->salutation,
                'email' => $request->email,
                'phone_number' => $request->phone_number ?? 'default value',
                'password' => bcrypt('null'),
            ]);
        } else {
            return response()->json(['message' => 'User already exists'], 404);
        }

        foreach($request->all() as $key => $value) {
            if (strpos($key, 'question_') === 0) {
                $question_number = substr($key, strlen('question_')) + 1; 
                $answers[$question_number] = $value;
            }
        }

        foreach($answers as $question_number => $answer) {
            Answer::create([
                'user_id' => $user->id,
                'question_id' => $question_number,
                'score' => $answer
            ]);
        }

        // VOOR LARS ZET HIER DE RETURN NEER
    }
}
