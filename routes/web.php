<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
// use App\Models\category;
// use App\Models\product;
use App\Http\Controllers\firstController;
use App\Http\Controllers\addProductController;
use Illuminate\Http\Request;

Route::get('/', [firstController::class, 'Mainpage']);
Route::get('/proudcts/{catid?}', [firstController::class, 'GetcategoryProducts']);
Route::get('/category', [firstController::class, 'GetallCategorywithProduct']);
Route::get('/addproduct', [addProductController::class, 'addProduct']);

Route::post('/storeproduct', [addProductController::class, 'StroeProduct']);


