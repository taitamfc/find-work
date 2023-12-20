<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('themes')->group(function () {
    Route::get('/', function () {
        return view('website/homes/index');
    })->name('home.index');

    Route::get('/employer', function () {
        return view('website/employer/index');
    })->name('employer.index');

    Route::get('/contacts', function () {
        return view('website/contacts/index');
    })->name('contacts.index');

    Route::get('/prices', function () {
        return view('website/prices/index');
    })->name('prices.index');

    Route::get('/dashboards', function () {
        return view('website/dashboards/index');
    })->name('dashboards.index');

    Route::get('/post-job', function () {
        return view('website/dashboards/postjob/index');
    })->name('postjob.index');

    Route::get('/manage-job', function () {
        return view('website/dashboards/managejob/index');
    })->name('managejob.index');

    Route::get('/aplicants', function () {
        return view('website/dashboards/aplicants/index');
    })->name('aplicants.index');

    Route::get('/Shortlisteds', function () {
        return view('website/dashboards/Shortlisteds/index');
    })->name('Shortlisteds.index');

    Route::get('/pakages', function () {
        return view('website/dashboards/pakages/index');
    })->name('pakages.index');

    Route::get('/messages', function () {
        return view('website/dashboards/messages/index');
    })->name('messages.index');

    Route::get('/cv-manager', function () {
        return view('website/dashboards/cv-manager/index');
    })->name('cv-manager.index');

    Route::get('/resume-alerts', function () {
        return view('website/dashboards/resume-alerts/index');
    })->name('resume-alerts.index');

    Route::get('/change-password', function () {
        return view('website/dashboards/change-password/index');
    })->name('change-password.index');

    Route::get('/profile', function () {
        return view('website/dashboards/profile/index');
    })->name('profile.index');

    // Route::get('/login', function () {
    //     return view('website/auth/login');
    // })->name('auth.login');

    // Route::get('/register', function () {
    //     return view('website/auth/register');
    // })->name('auth.register');

    Route::get('login',[App\Http\Controllers\Website\AuthController::class,'login'])->name('website.login');
    Route::post('postLogin',[App\Http\Controllers\Website\AuthController::class,'postLogin'])->name('website.postLogin');
    Route::get('logout',[App\Http\Controllers\Website\AuthController::class,'Logout'])->name('website.logout');

    // Register
    Route::get('register',[App\Http\Controllers\Website\AuthController::class,'register'])->name('website.register');
    Route::post('postRegister',[App\Http\Controllers\Website\AuthController::class,'postRegister'])->name('website.postRegister');

    // Forgot password
    Route::get('/forgot',[App\Http\Controllers\Website\AuthController::class,'forgot'])->name('website.forgot');
    Route::post('/postForgot',[App\Http\Controllers\Website\AuthController::class,'postForgot'])->name('website.postForgot');
    Route::get('/resetPassword/{user}/{token}',[App\Http\Controllers\Website\AuthController::class,'getReset'])->name('website.getReset');
    Route::post('/resetPassword/{user}/{token}',[App\Http\Controllers\Website\AuthController::class,'postReset'])->name('website.postReset');
});