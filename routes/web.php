<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\peoplecontroller;

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

Route::get("Repko/305432/people",[peoplecontroller::class,'index']);
Route::get("Repko/305432/people/{id}",[peoplecontroller::class,'show']);
Route::get("Repko/305432/people/create",[peoplecontroller::class,'create']);
Route::get("Repko/305432/people/update/{id}",[peoplecontroller::class,'update']);
Route::get("Repko/305432/people/delete/{id}",[peoplecontroller::class,'destroy']);
