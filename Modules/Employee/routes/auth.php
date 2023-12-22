<?php
    Route::group([
        'prefix' => 'auth'], function () {
        Route::get('login',[Modules\Employee\app\Http\Controllers\auth\AuthController::class,'login'])->name('employee.auth.login');
        Route::post('postLogin',[Modules\Employee\app\Http\Controllers\auth\AuthController::class,'postLogin'])->name('employee.auth.postLogin');
        Route::get('logout',[Modules\Employee\app\Http\Controllers\auth\AuthController::class,'Logout'])->name('employee.auth.logout');
    
        // Register
        Route::get('register',[Modules\Employee\app\Http\Controllers\auth\AuthController::class,'register'])->name('employee.auth.register');
        Route::post('postRegister',[Modules\Employee\app\Http\Controllers\auth\AuthController::class,'postRegister'])->name('employee.auth.postRegister');
    
        // Forgot password
        // Route::get('/forgot',[AuthController::class,'forgot'])->name('website.forgot');
        // Route::post('/postForgot',[AuthController::class,'postForgot'])->name('website.postForgot');
        // Route::get('/resetPassword/{token}',[AuthController::class,'getReset'])->name('website.getReset');
        // Route::post('/resetPassword/{token}',[AuthController::class,'postReset'])->name('website.postReset');
    });