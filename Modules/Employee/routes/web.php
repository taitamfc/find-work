<?php

use Illuminate\Support\Facades\Route;
use Modules\Employee\app\Http\Controllers\EmployeeController;
use Modules\Employee\app\Http\Controllers\AuthController;
use Modules\Employee\app\Http\Controllers\ProfileController;

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
	'prefix' => 'employee',
	'as' => 'employee.'
], function () {
	Route::get('login',[AuthController::class,'login'])->name('login');
	Route::post('postLogin',[AuthController::class,'postLogin'])->name('postLogin');
	// Register
	Route::get('register',[AuthController::class,'register'])->name('register');
	Route::post('postRegister',[AuthController::class,'postRegister'])->name('postRegister');
});
Route::group([
	'prefix' => 'employee',
	'middleware' => ['auth.employee']
], function () {
	Route::get('/', [ProfileController::class,'index'])->name('employee.profile.index');
	Route::post('/update/{id}', [ProfileController::class,'update'])->name('employee.profile.update');
});


