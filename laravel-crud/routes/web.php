<?php

use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/tables',[TableController::class,'show']);//utilizando DB::
Route::get('/tables2',[TableController::class,'show2']);//enviando directo tipo json
Route::get('/tables3',[TableController::class,'show3']);// enviando mediante response()->json()
Route::get('/intervalo',[TableController::class,'intervalo']);


//ESTO ES DATOS DE BD DENDISTAS
Route::get('/dentistas/{id}',[TableController::class,'dentistas']);

Route::get('/', function () {
    return view('welcome');
});
