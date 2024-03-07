<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function store(Request $request)
    {

        $answers =[];

        foreach($request->all() as $key => $value) {
            if (strpos($key, 'question_') === 0) {
                $question_number = substr($key, strlen('question_')) + 1; 
                $answers[$question_number] = $value;
            } else {
                var_dump($value);
            }
        }

        foreach($answers as $question_number => $answer) {
            var_dump("$question_number: $answer");
        }
    }
}
