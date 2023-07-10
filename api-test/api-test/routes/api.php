<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::apiResource('/user',UserController::class);
// Route::delete('/user/{id}',[UserController::class,'delete']);
// Route::patch('/user/{id}',[UserController::class,'update']);
// Route::get('/user/{id}',[UserController::class,'show']);
// Route::get('/user',[UserController::class,'index']);
// Route::post('/user',[UserController::class,'store']);


Route::get('/api',function(){
    return response()->json([
        'success' => 'true'
    ]);
});
