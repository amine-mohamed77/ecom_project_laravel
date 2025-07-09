<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;

class addProductController extends Controller
{
    public function addProduct() {
     $allCategories = category::all();
        return view('Products.addproduct', ['allCategories' =>   $allCategories]);
    }

    public function StroeProduct(Request $request) {
        $request->validate([
            'name' => 'required|max:10|unique:products',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            'descraption' => 'required',
        ]);

        $newProuduct = new product();
        $newProuduct->name = $request->name;
        $newProuduct->price = $request->price;
        $newProuduct->quantity = $request->quantity;
        $newProuduct->descraption = $request->descraption;
        $newProuduct->imagepath = $request->imagepath;
        $newProuduct->category_id = $request->category_id;
        $newProuduct->save();

        return redirect('/addproduct');
    }
}
