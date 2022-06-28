<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard' , [MainController::class , 'dashboard'])->name('dashboard');

Route::get('/login', [MainController::class, "getLogin"])->name("login.index");
Route::post('/login', [MainController::class, "postLogin"])->name("login.post");
Route::get('/logout', [MainController::class, "logout"])->name("logout.index");
Route::get('/register', [MainController::class, "getSignup"])->name("signup.index");
Route::post('/register', [MainController::class, "postSignup"])->name("signup.post");

Route::get('/artikel/create' , [\App\Http\Controllers\artikelController::class ,'createArtikel'])->name('artikel.create');
Route::post('/artikel/create' , [\App\Http\Controllers\artikelController::class ,'postcreateArtikel'])->name('artikel.create');
Route::get('/artikel/{id}/edit' , [\App\Http\Controllers\artikelController::class , 'editArtikel'])->name('artikel.edit');
Route::post('/artikel/{id}/edit' , [\App\Http\Controllers\artikelController::class , 'posteditArtikel'])->name('artikel.edit');
Route::get('/artikel/delete/{id}' , [\App\Http\Controllers\artikelController::class , 'deleteArtikel'])->name('artikel.delete');

Route::get('/videos', [\App\Http\Controllers\videosController::class , 'videoIndex'])->name('video.index');
Route::get('/videos/{id}' , [\App\Http\Controllers\videosController::class , 'videoDetail'])->name('video.detail');

Route::get('/quiz' , [\App\Http\Controllers\QuizController::class , 'quizIndex'])->name('quiz.index');
Route::post('/quiz/result' , [\App\Http\Controllers\QuizController::class , 'quizResult'])->name('quiz.result');

Route::get('/forum/{id}', [\App\Http\Controllers\forumController::class, "detailForum"])->name("forum.detail");
Route::post('/forum/{id}', [\App\Http\Controllers\forumController::class, "addComment"])->name("comment.add");
// require __DIR__.'/auth.php';
