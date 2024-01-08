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

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('course',\App\Http\Controllers\CourseController::class);

Route::get('/',[\App\Http\Controllers\IndexController::class,'index']);
//Route::post('/import',[\App\Http\Controllers\UserController::class,'import'])->name('import');
//Route::get('/export-users',[\App\Http\Controllers\UserController::class,'exportUsers'])->name('export-users');
