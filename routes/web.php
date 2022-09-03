<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;

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
    Route::get("/{user:email}/edit", [UserController::class, "editProfile"])->name('dashboard.edit');
    Route::put("/update/{user:email}", [UpdateProfileInformationController::class, "updateProfile"])->name('dashboard.update');
    Route::delete("/delete/{user:email}", [UserController::class, "destroy"])->name("dashboard.delete");

    Route::prefix('student')->group(function () {
        Route::get('data', [AdminController::class, "dataStudents"])->name('dashboard.student');
        Route::get('export', [UserController::class, "exportStudent"])->name('dashboard.export.student.excel');
        Route::post('import', [UserController::class, "importStudent"])->name('dashboard.import.student.excel');
    });

    Route::prefix('teacher')->group(function () {
        Route::get('data', [AdminController::class, "dataTeachers"])->name('dashboard.teacher');
        Route::get('export', [UserController::class, "exportTeacher"])->name('dashboard.export.teacher.excel');
        Route::post('import', [UserController::class, "importTeacher"])->name('dashboard.import.teacher.excel');
    });
});

Route::group(['middleware' => ['auth']], function () {

    Route::get('/', [DashboardController::class, "index"])->name('dashboard.index');
    Route::get('/attendances', [DashboardController::class, "attendances"])->name('dashboard.attendances');
    Route::post('/attend', [DashboardController::class, "store"]);
    Route::get('/dataAttendances', [DashboardController::class, "dataAttendances"])->name('dashboard.dataAttendances');

    Route::prefix('profile')->group(function () {
        Route::get('/', [DashboardController::class, "profile"])->name('dashboard.profile');

        Route::get("/edit", [UserController::class, "editProfile"])->name('profile.edit');
        Route::put("/update", [UserController::class, "updateProfile"])->name('profile.update');

        Route::get("/edit-password", [UserController::class, "editPassword"])->name('password.edit');
        Route::put("/update-password", [UserController::class, "updatePassword"])->name('password.update');
    });
});
