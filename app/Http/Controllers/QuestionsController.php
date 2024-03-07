<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function store(Request $request)
    {
        var_dump($request->all());
        // make the answers by looping through the request data and creating a new Answer for each question and also get the question to get the ID
        foreach($request->all() as $key => $value) {
            $question = Question::where('id', $value)->first();
            // Answer::create([
            //     'question_id' => $question->id,
            //     'answer' => $value,
            //     'user_id' => auth()->user()->id
            // ]);
        }
    }
}
