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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/login', [MainController::class, "getLogin"])->name("login.index");
Route::post('/login', [MainController::class, "postLogin"])->name("login.post");
Route::get('/logout', [MainController::class, "logout"])->name("logout.index");
Route::get('/register', [MainController::class, "getSignup"])->name("signup.index");
Route::post('/register', [MainController::class, "postSignup"])->name("signup.post");

Route::get('/forum/x', function () {
    return view('ForumKomen');
});

Route::get('/artikel/admin', function () {
    return view('ArtikelAdmin');
});

Route::get('/forum', [MainController::class, "getForum"])->name("forumindex.index");

Route::get('/artikel/add', function () {
    return view('addartikel');
});

Route::get('/artikel/x/edit', function () {
    return view('editartikel');
});

Route::get('/forum/add', function () {
    return view('ThreadForum');
});


// require __DIR__.'/auth.php';
