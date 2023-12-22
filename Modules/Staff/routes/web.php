<?php

use Illuminate\Support\Facades\Route;
use Modules\Staff\app\Http\Controllers\StaffController;
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

// Route::group([], function () {
//     Route::resource('staff', StaffController::class)->names('staff');
// });
Route::group(['prefix' => 'staff'], function () {
    Route::put('/profile/{id}', [StaffController::class, 'update'])->name('staff.update');
    Route::resource('profile', StaffController::class)->names('staff.profile');
    Route::resource('cv', UserCvController::class)->names('staff.cv');

    Route::get('/experience', function () {
        return view('staff::experience');
    })->name('staff.experience.index');

    Route::get('/education', function () {
        return view('staff::education');
    })->name('staff.education.index');

    Route::get('/skill', function () {
        return view('staff::skill');
    })->name('staff.skill.index');

    Route::get('login',[AuthController::class,'login'])->name('website.login');
    Route::post('postLogin',[AuthController::class,'postLogin'])->name('website.postLogin');
    Route::get('logout',[AuthController::class,'Logout'])->name('website.logout');

    // Register
    Route::get('register',[AuthController::class,'register'])->name('website.register');
    Route::post('postRegister',[AuthController::class,'postRegister'])->name('website.postRegister');

    // Forgot password
    Route::get('/forgot',[AuthController::class,'forgot'])->name('website.forgot');
    Route::post('/postForgot',[AuthController::class,'postForgot'])->name('website.postForgot');
    Route::get('/resetPassword/{token}',[AuthController::class,'getReset'])->name('website.getReset');
    Route::post('/resetPassword/{token}',[AuthController::class,'postReset'])->name('website.postReset');
});
