<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firstController;
use App\Http\Controllers\addProductController;

Route::get('/', [firstController::class, 'Mainpage']);
Route::get('/proudcts/{catid?}', [firstController::class, 'GetcategoryProducts']);
Route::get('/category', [firstController::class, 'GetallCategorywithProduct']);

Route::get('/addproduct', [addProductController::class, 'addProduct']);
Route::post('/storeproduct', [addProductController::class, 'StroeProduct']);
Route::get('/removeproduct/{id}', [addProductController::class, 'removeproduct']);
Route::get('/editproduct/{id}', [addProductController::class, 'EditProduct']);
Route::post('/updateproduct/{id}', [addProductController::class, 'UpdateProduct']);

// Reviews
Route::get('/reviews', [firstController::class, 'reviews']);
Route::post('/storereviews', [firstController::class, 'storereviews'])->name('storereviews');
Route::get('/search', [firstController::class, 'search'])->name('search.products');


