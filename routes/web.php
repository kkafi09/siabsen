<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UpdatePasswordController;
use App\Http\Controllers\UpdateProfileInformationController;

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

Route::get('/register', [RegisterController::class, "index"])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, "store"]);

Route::group(['middleware' => ['auth', 'checkrole:admin']], function () {
    Route::get('/dashboard-admin', [AdminController::class, "index"])->name('dashboard.admin');
    Route::get('/data-student', [AdminController::class, "dataStudents"])->name('dashboard.student');
    Route::get('/data-teacher', [AdminController::class, "dataTeachers"])->name('dashboard.teacher');
});

Route::group(['middleware' => ['auth']], function () {

    Route::get('/', [DashboardController::class, "index"])->name('dashboard.index');
    Route::get('/attendances', [DashboardController::class, "attendances"])->name('dashboard.attendances');
    Route::post('/attend', [DashboardController::class, "store"]);

    Route::prefix('profile')->group(function () {
        Route::get('/', [DashboardController::class, "profile"])->name('dashboard.profile');

        Route::get("/edit", [UpdateProfileInformationController::class, "index"])->name('profile.edit');
        Route::put("/update", [UpdateProfileInformationController::class, "update"])->name('profile.update');

        Route::get("/edit-password", [UpdatePasswordController::class, "index"])->name('password.edit');
        Route::put("/update-password", [UpdatePasswordController::class, "update"])->name('password.update');
    });

});
