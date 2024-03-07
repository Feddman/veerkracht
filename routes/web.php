<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\QuestionsController;
use App\Models\Question;
use App\Models\User;
use App\Models\Answer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

Route::get('/profielcheck', function () {
    $questions = Question::all();
    return view('/profielcheck')->with('questions', $questions);
});

Route::post('/profielcheck/store', [QuestionsController::class, 'store'])
->name('profielcheck.store');

Route::get('/dashboard', function () {
    $answers = Answer::all();
    $users = User::all();
    return view('dashboard')->with([
        'answers' => $answers,
        'users' => $users
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
