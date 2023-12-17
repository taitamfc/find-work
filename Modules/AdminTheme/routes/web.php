<?php

use Illuminate\Support\Facades\Route;
use Modules\AdminTheme\app\Http\Controllers\AdminThemeController;

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

Route::group([], function () {
    Route::resource('admintheme', AdminThemeController::class)->names('admintheme');
});
