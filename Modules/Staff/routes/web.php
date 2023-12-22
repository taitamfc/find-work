<?php

use Illuminate\Support\Facades\Route;
use Modules\Staff\app\Http\Controllers\StaffController;
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
});
