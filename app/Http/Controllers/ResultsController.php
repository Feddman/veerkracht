<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\User;
use Illuminate\Http\Request;

class ResultsController extends Controller
{
    public function index($user_id)
    {
        $answers = Answer::where('user_id', $user_id)->get();
        $user = User::find($user_id);

        return view('results', [
            'answers' => $answers,
            'user' => $user
        ]);
    }
}
