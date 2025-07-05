<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\category;
use App\Models\product;
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

Route::get('/', function () {

//  $result=DB::table('category')->get();

//     return view('welcome',['category'=> $result]);

    $result= category::all();

    return view('welcome',['category'=> $result]);
});



Route::get('/proudcts/{catid?}', function ($catid = null) {
    if ($catid == null) {
        // $result = DB::table('product')->get();
          $result =product::all();
    } else {
      $result = product::where('category_id', $catid)->get();
    }

    return view('proudct', ['proudcts' => $result]);
});

