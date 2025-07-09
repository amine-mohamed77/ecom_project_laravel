<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\category;
use App\Models\product;

class firstController extends Controller
{
    function Mainpage()
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
}


