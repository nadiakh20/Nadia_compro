<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LoginController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

// Route::resource() ; get, post,update,delete (untuk membuat method crud)
Route::resource('latihan', \App\Http\Controllers\LatihanController::class);
Route::get('penjumlahan', [\App\Http\Controllers\LatihanController::class, 'penjumlahan'])->name('penjumlahan');
Route::get('pengurangan', [\App\Http\Controllers\LatihanController::class, 'pengurangan'])->name('pengurangan');
Route::get('pembagian', [\App\Http\Controllers\LatihanController::class, 'pembagian'])->name('pembagian');
Route::get('perkalian', [\App\Http\Controllers\LatihanController::class, 'perkalian'])->name('perkalian');
Route::post('store_perkalian', [\App\Http\Controllers\LatihanController::class, 'storePerkalian'])->name('store_perkalian');
Route::post('store_penjumlahan', [\App\Http\Controllers\LatihanController::class, 'storePenjumlahan'])->name('store_penjumlahan');
Route::post('store_pengurangan', [\App\Http\Controllers\LatihanController::class, 'storePengurangan'])->name('store_pengurangan');
Route::post('store_pembagian', [\App\Http\Controllers\LatihanController::class, 'storePembagian'])->name('store_pembagian');

Route::resource('home', \App\Http\Controllers\HomeController::class);

// admin disini
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [LoginController::class, 'index'])->name("login");

    Route::post('/', [LoginController::class, 'loginPost'])->name("login.post");

Route::middleware('auth')->group(function () {

    Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
    Route::resource('user', \App\Http\Controllers\UserController::class);
    Route::resource('profile', \App\Http\Controllers\ProfileController::class);
    Route::resource('experience', \App\Http\Controllers\ExperienceController::class);
    Route::resource('education', \App\Http\Controllers\EducationController::class);
    Route::resource('setting', \App\Http\Controllers\SettingController::class);

    Route::post('/logout', [LoginController::class, 'logout'])->name("logout");
    });
});
