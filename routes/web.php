<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();
//Create
Route::get('/course/create', [App\Http\Controllers\CoursesController::class, 'create']);
Route::post('/course', [App\Http\Controllers\CoursesController::class, 'store']);

//Read
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Update
Route::get('/course/{course}', [App\Http\Controllers\CoursesController::class, 'edit']);

//Delete
