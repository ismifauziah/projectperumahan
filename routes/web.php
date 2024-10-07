<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\UserController;
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


Route::get('/login', [UserController::class,'login']);
Route::post('/auth', [UserController::class,'auth']);
Route::get('/perumahan', [UserController::class,'perumahan']);
Route::get('/tentangkami', [UserController::class,'tentangkami']);
Route::get('/perumahan2',[UserController::class,'perumahan2']);
Route::get('/dashboard', [UserController::class,'dashboard']);
Route::get('/isi1', [UserController::class,'isi1']);
Route::get('/isi2', [UserController::class,'isi2']);
Route::get('/isi3', [UserController::class,'isi3']);
Route::get('/isi4', [UserController::class,'isi4']);
Route::get('/isi5', [UserController::class,'isi5']);
Route::get('/isi6', [UserController::class,'isi6']);

Route::get('/index',[ArtikelController::class, 'show']);
Route::post('/search',[ArtikelController::class, 'search']);
Route::get('/artikel/create',[ArtikelController::class, 'create']);
Route::post('/artikel/create',[ArtikelController::class, 'add']);
Route::get('/artikel/edit/{id}',[ArtikelController::class, 'edit']);
Route::post('/artikel/edit/{id}',[ArtikelController::class, 'update']);
Route::get('/artikel/delete/{id}',[ArtikelController::class, 'delete']);
