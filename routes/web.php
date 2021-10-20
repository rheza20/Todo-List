<?php

use App\Http\Controllers\todocontroller;
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

Route::get('/', [todocontroller::class, "tampiltodo"]);
Route::post('/todo',[todocontroller::class, "tambahtodo"]);
Route::get('/todo/delete/{id}',[todocontroller::class, "hapustodo"]);
Route::get('/todo/update/{id}',[todocontroller::class, "updatetodo"]);
