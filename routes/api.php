<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PeopleController;
use Illuminate\Http\Request;

Route::get('repko/305432/people',[PeopleController::class,'index']);
Route::post('repko/305432/people',[PeopleController::class,'create']);
Route::get('repko/305432/people/{people}',[PeopleController::class,'show']);
Route::put('repko/305432/people/{people}',[PeopleController::class,'update']);
Route::delete('repko/305432/people/{people}',[PeopleController::class,'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

