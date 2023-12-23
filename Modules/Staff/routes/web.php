<?php

use Illuminate\Support\Facades\Route;
use Modules\Staff\app\Http\Controllers\ProfileController;
use Modules\Staff\app\Http\Controllers\AuthController;
use Modules\Staff\app\Http\Controllers\UserCvController;

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

Route::group([
    'prefix' => 'staff',
    'middleware'=>'auth.staff',
    'as' => 'staff.'
], function () {
    Route::get('/', [ProfileController::class, 'index'])->name('home');

    Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('update');
    Route::resource('profile', ProfileController::class)->names('profile');
    Route::resource('cv', UserCvController::class)->names('cv');

    Route::get('/experience', function () {
        return view('staff::experience');
    })->name('experience.index');

    Route::get('/education', function () {
        return view('staff::education');
    })->name('education.index');

    Route::get('/skill', function () {
        return view('staff::skill');
    })->name('skill.index');

    Route::get('/personal_information', function () {
        return view('staff::personal_information');
    })->name('personal_information.index');
});
Route::group([
    'prefix' => 'staff',
    'as' => 'staff.'
], function () {
    Route::get('login',[AuthController::class,'login'])->name('login');
    Route::post('postLogin',[AuthController::class,'postLogin'])->name('postLogin');
    // Register
    Route::get('register',[AuthController::class,'register'])->name('register');
    Route::post('postRegister',[AuthController::class,'postRegister'])->name('postRegister');
});
