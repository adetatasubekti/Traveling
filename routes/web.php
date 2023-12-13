<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TicketController;
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
// Route::get('/home', function () {
//     // echo '<h1>Hello Word</h1>';
//     // echo '<h2 style= "text-align: center"><u>Welcome to laravel, ade</u></h2>';
//     return view('home');
// });
Route::get('/home',[App\Http\Controllers\PostController::class, 'home']);

Route::get('/guru', function () {
    // echo '<h1>Hello Word</h1>';
    // echo '<h2 style= "text-align: center"><u>Welcome to laravel, ade</u></h2>';
    return view('guru');
});
// Route::get('/home', function () {
//     // echo '<h1>Hello Word</h1>';
//     // echo '<h2 style= "text-align: center"><u>Welcome to laravel, ade</u></h2>';
//     return view('home');
// });
Route::get('/siswa', function () {
    // echo '<h1>Hello Word</h1>';
    // echo '<h2 style= "text-align: center"><u>Welcome to laravel, ade</u></h2>';
    return view('siswa');
});
Route::get('/blog', function () {
    // echo '<h1>Hello Word</h1>';
    // echo '<h2 style= "text-align: center"><u>Welcome to laravel, ade</u></h2>';
    return view('blog');
});

Route::resource('/posts', \App\Http\Controllers\PostController::class);
Route::group(['middleware' => 'guest'], function() {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function (){
    Route::get('/home1', [HomeController::class, 'index']);
    Route::delete('/logot', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
// Route::get('/tickets/create', [TicketController::class, 'create'])->name('tickets.create');
// Route::post('/tickets/store', [TicketController::class, 'store'])->name('tickets.store');
Route::get('/search', [App\Http\Controllers\PostController::class, 'search']);








