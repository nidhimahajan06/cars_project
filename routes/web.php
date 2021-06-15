<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('choose');
});
Route::post('store',[PostController::class,'store']);
Route::get('store',[PostController::class,'store']);
Route::post('show',[PostController::class,'show']);
Route::get('show',[PostController::class,'show']);
Route::get('showlist',[PostController::class,'showlist']);
Route::get('bigimage/{id}',[PostController::class,'bigImage'])->name('bigimage');
Route::get('rating/{id}', [App\Http\Controllers\HomeController::class, 'rating'])->name('rating');

