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

Route::get('/artikel' , [\App\Http\Controllers\artikelController::class , 'indexArtikel'])->name('artikel.index');
Route::get('/artikel/all' , [\App\Http\Controllers\artikelController::class , 'indexallArtikel'])->name('artikel.all');
Route::get('/artikel/create' , [\App\Http\Controllers\artikelController::class ,'createArtikel'])->name('artikel.create');
Route::post('/artikel/create' , [\App\Http\Controllers\artikelController::class ,'postcreateArtikel'])->name('artikel.create');
Route::get('/artikel/{id}' , [\App\Http\Controllers\artikelController::class , 'detailArtikel'])->name('artikel.detail');
Route::get('/artikel/{id}/edit' , [\App\Http\Controllers\artikelController::class , 'editArtikel'])->name('artikel.edit');
Route::post('/artikel/{id}/edit' , [\App\Http\Controllers\artikelController::class , 'posteditArtikel'])->name('artikel.edit');
Route::get('/artikel/delete/{id}' , [\App\Http\Controllers\artikelController::class , 'deleteArtikel'])->name('artikel.delete');

Route::get('/videos', [\App\Http\Controllers\videosController::class , 'videoIndex'])->name('video.index');
Route::post('/videos' , [\App\Http\Controllers\videosController::class , 'videoAdd'])->name('video.add');
Route::get('/videos/{id}' , [\App\Http\Controllers\videosController::class , 'videoDetail'])->name('video.detail');
Route::post('/videos/{id}/edit' , [\App\Http\Controllers\videosController::class , 'videoEdit'])->name('video.edit');
Route::get('/videos/{id}/delete' , [\App\Http\Controllers\videosController::class , 'videoDelete'])->name('video.delete');

Route::get('/quiz' , [\App\Http\Controllers\QuizController::class , 'quizIndex'])->name('quiz.index');
Route::post('/quiz/result' , [\App\Http\Controllers\QuizController::class , 'quizResult'])->name('quiz.result');
Route::post('/quiz/add' , [\App\Http\Controllers\QuizController::class , 'quizAdd'])->name('quiz.add');
Route::get('/quiz/{id}/edit' , [\App\Http\Controllers\QuizController::class , 'quizEdit'])->name('quiz.edit');
Route::post('/quiz/{id}/edit' , [\App\Http\Controllers\QuizController::class , 'postquizEdit'])->name('quiz.edits');
Route::get('/quiz/{id}/delete' , [\App\Http\Controllers\QuizController::class , 'quizDelete'])->name('quiz.delete');

Route::get('/forum', [\App\Http\Controllers\forumController::class, "indexForum"])->name("forum.index");
Route::get('/forum/add', [\App\Http\Controllers\forumController::class , 'addForum'])->name('forum.add');
Route::post('/forum/add' , [\App\Http\Controllers\forumController::class , 'postaddForum'])->name('forum.add');
Route::get('/forum/{id}', [\App\Http\Controllers\forumController::class, "detailForum"])->name("forum.detail");
Route::post('/forum/{id}', [\App\Http\Controllers\forumController::class, "addComment"])->name("comment.add");

Route::get('/glossary' , [\App\Http\Controllers\glosariumController::class , 'glosariumIndex'])->name('glosarium.index');
Route::post('/glossary' , [\App\Http\Controllers\glosariumController::class , 'glosariumAdd'])->name('glosarium.add');
Route::post('/glossary/{id}' , [\App\Http\Controllers\glosariumController::class , 'glosariumUpdate'])->name('glosarium.update');
Route::get('/glossary/{id}/delete' , [\App\Http\Controllers\glosariumController::class , 'glosariumDelete'])->name('glosarium.delete');

Route::get('/aboutus' , [MainController::class , 'aboutus'])->name('aboutus');
Route::post('/aboutus/{id}' , [MainController::class , 'aboutusUpdate'])->name('aboutus.edit');

Route::get('/profile', [MainController::class , 'profile'])->name('profile.index');
Route::get('/profile/edit', [MainController::class , 'profileEdit'])->name('profile.edit');
Route::post('/profile/edit' , [MainController::class , 'postprofileEdit'])->name('profile.edit');

Route::get('/donation' , [\App\Http\Controllers\donationController::class , 'donation'])->name('donation');
Route::post('/donation' , [\App\Http\Controllers\donationController::class , 'donationAdd'])->name('donation');

Route::get('/search/' , [MainController::class , 'search'])->name('search');

Route::post('/landing' , [MainController::class , 'setCookie'])->name('cookie.post');
Route::get('/cookie' , [MainController::class , 'landing']);
Route::get('/getcookie' , [MainController::class , 'getCookie']);

// require __DIR__.'/auth.php';
