<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firstController;
use App\Http\Controllers\addProductController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [firstController::class, 'Mainpage']);
Route::get('/proudcts/{catid?}', [firstController::class, 'GetcategoryProducts']);
Route::get('/category', [firstController::class, 'GetallCategorywithProduct']);


Route::middleware('auth')->group(function () {
    Route::get('/addproduct', [addProductController::class, 'addProduct']);
    Route::post('/storeproduct', [addProductController::class, 'StoreProduct'])->name('storeproduct');

    Route::get('/removeproduct/{id}', [addProductController::class, 'removeproduct']);
    Route::get('/editproduct/{id}', [addProductController::class, 'EditProduct']);
    Route::post('/updateproduct/{id}', [addProductController::class, 'UpdateProduct']);
});


Route::get('/reviews', [firstController::class, 'reviews']);
Route::post('/storereviews', [firstController::class, 'storereviews'])->name('storereviews');
Route::get('/search', [firstController::class, 'search'])->name('search.products');

// Laravel Auth
Auth::routes();

Route::get('/home', function () {
    return redirect('/');
});

Route::get('/productstable', [firstController::class, 'productTable'])->name('products.table');
Route::resource('products', App\Http\Controllers\ProductController::class);
