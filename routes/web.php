<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
Route::post('/attend', [DashboardController::class, "store"]);
Route::get('/', [DashboardController::class, "index"]);

Route::get('/login', [LoginController::class, "index"])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, "authenticate"]);
Route::post('/logout', [LoginController::class, "logout"]);

Route::get('/register', [RegisterController::class, "index"])->middleware('guest');
Route::post('/register', [RegisterController::class, "store"]);

Route::group(['middleware' => ['auth', 'checkrole:guru' ]], function() {
    Route::get('/dashboard-guru', [DashboardController::class, "show"])->name('dashboard-guru');
});

Route::group(['middleware' => ['auth', 'checkrole:siswa']], function (){
    Route::get('/', [DashboardController::class, "index"]);
    Route::get('/attendances', [DashboardController::class, "attendances"])->name('dashboard-siswa');
});


