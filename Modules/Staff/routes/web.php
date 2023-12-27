<?php

use Illuminate\Support\Facades\Route;
use Modules\Staff\app\Http\Controllers\ProfileController;
use Modules\Staff\app\Http\Controllers\AuthController;
use Modules\Staff\app\Http\Controllers\UserCvController;
use Modules\Staff\app\Http\Controllers\UserExperienceController;
use Modules\Staff\app\Http\Controllers\UserEducationController;
use Modules\Staff\app\Http\Controllers\UserSkillController;

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
    Route::get('/', [ProfileController::class, 'index'])->name('home1');
    Route::get('/', function () {
        return view('staff::index1');
    })->name('home');

    Route::get('/job-favorite', function () {
        return view('staff::job-favorite.index');
    })->name('job-favorite');

    Route::get('/job-applied', function () {
        return view('staff::job-applied.index');
    })->name('job-applied');

    Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('update');
    Route::resource('profile', ProfileController::class)->names('profile');
    Route::resource('cv', UserCvController::class)->names('cv');
    Route::resource('experience', UserExperienceController::class)->names('experience');
    Route::resource('education', UserEducationController::class)->names('education');
    Route::resource('skill', UserSkillController::class)->names('skill');
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
