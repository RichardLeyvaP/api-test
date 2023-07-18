<?php

use App\Http\Controllers\MesaController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\UserController;
use App\Models\Mesa;
use App\Models\Pedido;
use Illuminate\Support\Facades\Route;

Route::apiResource('/user',UserController::class);
// Route::delete('/user/{id}',[UserController::class,'delete']);
// Route::patch('/user/{id}',[UserController::class,'update']);
// Route::get('/user/{id}',[UserController::class,'show']);
// Route::get('/user',[UserController::class,'index']);
// Route::post('/user',[UserController::class,'store']);
Route::get('/pedidos',[PedidoController::class,'mostrar']);

Route::apiResource('/mesa',MesaController::class);
Route::apiResource('/pedido',PedidoController::class);



Route::get('/api',function(){
    return response()->json([
        'success' => 'true'
    ]);
});
