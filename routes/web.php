<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\DashboardController;


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



Route::get('/film', function () {
    return view('film.index', [
        "title" => "Film"
    ]);
});

Route::get('/feedback/info', function () {
    return view('feedback.index', [
        "title" => "Feedback"
    ]);
});

Route::get('/contactus', function () {
    return view('feedback.contactus', [
        "title" => "Contact us"
    ]);
});

Route::get('/about', function () {
    return view('aboutus', [
        "title" => "About us"
    ]);
});

Route::get('/login', function () {
    return view('user.login', [
        "title" => "Login"
    ]);
})->name('login');

Route::get('/signup', function () {
    return view('user.signup', [
        "title" => "Signup"
    ]);
});

Route::group(['middleware' => ['auth', 'ceklevel:Admin']], function () {

    Route::get('/dashboard', function () {
        return view('dashboard', [
            "title" => "Dashboard"
        ]);
    });
});

Route::group(['middleware' => ['auth', 'ceklevel:Customer']], function () {

    Route::get('/', function () {
        return view('film.index', [
            "title" => "Movies"
        ]);
    });

    Route::get('/transaction', function () {
        return view('film.show', [
            "title" => "Transaction"
        ]);
    });
});


// User
Route::get('/user', [UserController::class, 'index']);

Route::get('/user/create', [UserController::class, 'create']);
Route::post('/postLogin', [UserController::class, 'postLogin']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/regis', [UserController::class, 'regis']);
Route::post('/regis', [UserController::class, 'postRegis']);
Route::post('/user/create', [UserController::class, 'store']);

Route::get('/user/edit/{id}', [UserController::class, 'edit']);
Route::post('/user/edit/{id}', [UserController::class, 'update']);

Route::get('/user/delete/{id}', [UserController::class, 'destroy']);

// Film
Route::get('/film', [FilmController::class, 'index']);

Route::get('/film/create', [FilmController::class, 'create']);
Route::post('/film/create', [FilmController::class, 'store']);

Route::get('/film/edit/{id}', [FilmController::class, 'edit']);
Route::post('/film/edit/{id}', [FilmController::class, 'update']);

Route::get('/film/delete/{id}', [FilmController::class, 'destroy']);

// Tampilan Movie
Route::get('/', [MoviesController::class, 'index'])->name('film.index');
Route::get('/{movie:title}', [MoviesController::class, 'show'])->name('film.show');

// Transaction
Route::get('/transaction', [TransactionController::class, 'index']);
Route::get('/transaction/create', [TransactionController::class, 'create']);
Route::post('/transaction/create', [TransactionController::class, 'store']);
Route::get('/transaction/delete/{id}', [TransactionController::class, 'destroy']);

Route::get('/user/myticket', [TransactionController::class, 'myticket'])->name('user.myticket'); //Myticket

//  Feedback
Route::get('/feedback/info', [FeedbackController::class, 'index']);
Route::get('/contactus', [FeedbackController::class, 'create']);
Route::post('/contactus', [FeedbackController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index']);