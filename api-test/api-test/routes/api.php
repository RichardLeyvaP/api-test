<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/user',[UserController::class,'index']);

Route::get('/api',function(){
    return response()->json([
        'success' => 'true'
    ]);
});
