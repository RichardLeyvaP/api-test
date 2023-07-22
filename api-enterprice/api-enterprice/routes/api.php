<?php

use App\Http\Controllers\EnterpriceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WarehouseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//Route de Enterprice
Route::get('/enterprice',[EnterpriceController::class,'index']);

//Route de Warehouse
Route::get('/warehouse',[WarehouseController::class,'index']);

//Route de Product
Route::get('/product',[WarehouseController::class,'index']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('/enterprice/{id}',[TableController::class,'dentistas']);