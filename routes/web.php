<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\ResultsController;
use App\Models\Question;

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

Route::get('/results/{id}', [ResultsController::class, 'index'])->name('results.index');

Route::get('/profielcheck', function () {
    $questions = Question::all();
    return view('/profielcheck')->with('questions', $questions);
});

Route::post('/profielcheck/store', [QuestionsController::class, 'store'])
->name('profielcheck.store');

Route::get('/plattegrond', function () {
    return view('plattegrond');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
