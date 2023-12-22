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

Route::group([
    'prefix' => 'staff',
    'middleware'=>'auth'
], function () {
    Route::get('/', [StaffController::class, 'index'])->name('staff.home');
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
});
Route::group(['prefix' => 'staff'], function () {
    Route::get('login',[AuthController::class,'login'])->name('staff.login');
    Route::post('postLogin',[AuthController::class,'postLogin'])->name('staff.postLogin');
    // Register
    Route::get('register',[AuthController::class,'register'])->name('staff.register');
    Route::post('postRegister',[AuthController::class,'postRegister'])->name('staff.postRegister');

});
