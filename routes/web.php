<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\category;
use App\Models\product;
use App\Http\Controllers\firstController;
use App\Http\Controllers\addProductController;
use Illuminate\Http\Request;
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

Route::get('/',[firstController::class ,'Mainpage'] );

Route::get('/proudcts/{catid?}',[firstController::class ,'GetcategoryProducts'] );

Route::get('/category', [firstController::class ,'GetallCategorywithProduct']);

Route::get('/addproduct', [addProductController::class , 'addProduct']);


Route::post('/storeproduct', function($request){
$newProuduct = new product();
$newProuduct -> name = $request -> name ;
$newProuduct -> price = $request -> price ;
$newProuduct -> quantity = $request -> quantity ;
$newProuduct -> descraption = $request -> descraption ;

$newProuduct ->save();

return redirect('/addprouuct');
});


