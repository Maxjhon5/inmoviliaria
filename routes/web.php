<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequerimientoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('requerimiento/create', [RequerimientoController::class,'create']);
Route::post('requerimiento/create',  [RequerimientoController::class, 'store']);
Route::get('requerimiento/show', [RequerimientoController::class,'show']);
