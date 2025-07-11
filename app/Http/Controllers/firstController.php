<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\category;
use App\Models\product;
use App\Models\Review;

class firstController extends Controller
{
 public   function Mainpage()
    {
        $result = DB::table('categories')->get();

        return view('welcome', ['category' => $result]);


    }

    function GetcategoryProducts($catid = null)
    {
        if ($catid == null) {
            $result = product::all();
        } else {
            $result = product::where('category_id', $catid)->get();
        }

        return view('proudct', ['proudcts' => $result]);
    }


    public function GetallCategorywithProduct()
{
    $categories = category::all();
    $products = product::all();

    return view('category', [
        'categories' => $categories,
        'product' => $products
    ]);
}

 public  function reviews()
    {
         $reviews = Review::all();
  return view('reviews' , ['reviews' => $reviews ]);
    }


}


