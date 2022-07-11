<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardTeacherController;
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

Route::get('/login', [LoginController::class, "index"])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, "authenticate"]);
Route::post('/logout', [LoginController::class, "logout"]);

Route::get('/register', [RegisterController::class, "index"])->middleware('guest');
Route::post('/register', [RegisterController::class, "store"]);

Route::group(['middleware' => ['auth', 'checkrole:guru']], function () {
    Route::get('/dashboard-guru', [DashboardTeacherController::class, "index"])->name('dashboard.guru');
    Route::get('/profil-guru', [DashboardTeacherController::class, "profile"]);
    Route::get('/kehadiran-guru', [DashboardTeacherController::class, "attendances"]);
    Route::post('/attend', [DashboardTeacherController::class, "store"]);
});

Route::group(['middleware' => ['auth', 'checkrole:siswa']], function () {
    Route::get('/', [DashboardController::class, "index"])->name('dashboard.siswa');
    Route::get('/profil-siswa', [DashboardController::class, "profile"]);
    Route::get('/kehadiran-siswa', [DashboardController::class, "attendances"]);
    Route::post('/attend', [DashboardController::class, "store"]);
});

Route::group(['middleware' => ['auth', 'checkrole:admin']], function () {
    Route::get('/dashboard-admin', [DashboardAdminController::class, "index"])->name('dashboard.admin');
    Route::get('/edit-siswa', [DashboardAdminController::class, "editStudents"]);
    Route::get('/edit-guru', [DashboardAdminController::class, "editTeachers"]);
});
