<?php

use Illuminate\Support\Facades\Route;
use Modules\Employee\app\Http\Controllers\EmployeeController;
use Modules\Employee\app\Http\Controllers\AuthController;

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




Route::group(['prefix' => 'employee'], function () {
    Route::get('login',[AuthController::class,'login'])->name('employee.auth.login');
        Route::post('postLogin',[AuthController::class,'postLogin'])->name('employee.auth.postLogin');
        // Register
        Route::get('register',[AuthController::class,'register'])->name('employee.auth.register');
        Route::post('postRegister',[AuthController::class,'postRegister'])->name('employee.auth.postRegister');
});
Route::group(['prefix' => 'employee','middleware' => ['employee']], function () {
        Route::get('/', [Modules\Employee\app\Http\Controllers\profile\ProfilesController::class,'index'])->name('employee.profile.index');
        Route::post('/update/{id}', [Modules\Employee\app\Http\Controllers\profile\ProfilesController::class,'update'])->name('employee.profile.update');
});


