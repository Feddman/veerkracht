<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public static function averageScore($category, $questionNum, $user) {
        $totalScore = 0;
        
        foreach ($user->answers as $key => $answer) {
            if ($answer->question->category === $category && $answer->user_id === $user->id) {
                $totalScore = $totalScore + $answer->score;
            }
        }

        $averageScore = $totalScore / $questionNum;

        return round($averageScore, 2);
    }
}
