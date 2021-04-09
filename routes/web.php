<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpController;

Route::get('/', [EmpController::class,'create']);

Route::post('/empread', [EmpController::class,'store']);


Route::post('/empsearch',[EmpController::class,'search']);