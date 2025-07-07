<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;

class firstController extends Controller
{
    //
    function Mainpage() {

//  $result=DB::table('category')->get();

//     return view('welcome',['category'=> $result]);

    $result= category::all();

    return view('welcome',['category'=> $result]);
    }



    function GetcategoryProducts($catid = null) {
    if ($catid == null) {
        // $result = DB::table('product')->get();
          $result =product::all();
    } else {
      $result = product::where('category_id', $catid)->get();
    }

    return view('proudct', ['proudcts' => $result]);
}



function GetallCategorywithProduct() {
$categories = category::all();
$product = product::all();
return view('category',['product'=>$product , 'categories'=>$categories]);

}

}
