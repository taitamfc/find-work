<?php

use Illuminate\Support\Facades\Route;
use Modules\Employee\app\Http\Controllers\EmployeeController;
use Modules\Employee\app\Http\Controllers\AuthController;
use Modules\Employee\app\Http\Controllers\ProfileController;
use Modules\Employee\app\Http\Controllers\JobController;
use Modules\Employee\app\Http\Controllers\JobapplicationController;
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
	Route::get('logout',[AuthController::class,'logout'])->name('logout');
});
Route::group([
	'prefix' => 'employee',
	'middleware' => ['auth.employee'],
	'as' => 'employee.'
], function () {

	// profile
	Route::get('/', [ProfileController::class,'index'])->name('home');
	Route::post('/update/{id}', [ProfileController::class,'update'])->name('profile.update');

	//Job
	Route::get('/job', [JobController::class,'index'])->name('job.index');
	Route::get('/job/create', [JobController::class,'create'])->name('job.create');
	Route::post('/job/store', [JobController::class,'store'])->name('job.store');
	Route::get('/job/edit/{id}', [JobController::class,'edit'])->name('job.edit');
	Route::get('/job/show/{id}', [JobController::class,'show'])->name('job.show');
	Route::post('/job/update/{id}', [JobController::class,'update'])->name('job.update');
	Route::get('/job/delete/{id}', [JobController::class,'destroy'])->name('job.delete');

	// CV apply
	Route::get('/cv', [JobapplicationController::class,'index'])->name('cv.index');
	Route::get('/cv/{id}/{cv_applyID}', [JobapplicationController::class,'show'])->name('cv.show');
	Route::put('/cv/update/{id}', [JobapplicationController::class,'update'])->name('cv.update');
	Route::post('/cv/store', [JobapplicationController::class,'store'])->name('cv.store');
	Route::get('/cv/delete/{id}', [JobapplicationController::class,'destroy'])->name('cv.delete');

});


