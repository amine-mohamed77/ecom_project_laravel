<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;

class addProductController extends Controller
{
    public function addProduct() {
        $allCategories = category::all();
        return view('products.addproduct', ['allCategories' => $allCategories]);
    }

    public function StroeProduct(Request $request) {
        $request->validate([
            'name' => 'required|max:10|unique:products',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            'descraption' => 'required',
        ]);

        $newProduct = new product();
        $newProduct->name = $request->name;
        $newProduct->price = $request->price;
        $newProduct->quantity = $request->quantity;
        $newProduct->descraption = $request->descraption;
        $newProduct->imagepath = $request->imagepath ?? '';
        $newProduct->category_id = $request->category_id;
        $newProduct->save();

        return redirect('/addproduct')->with('success', 'Product added successfully');
    }

    public function removeproduct($id) {
        $product = product::findOrFail($id);
        $product->delete();
        return redirect('/proudcts')->with('success', 'Product deleted');
    }

    public function EditProduct($id) {
        $product = product::findOrFail($id);
        $allCategories = category::all();
        return view('products.editproduct', [
            'product' => $product,
            'allCategories' => $allCategories
        ]);
    }

    public function UpdateProduct(Request $request, $id) {
        $request->validate([
            'name' => 'required|max:10|unique:products,name,'.$id,
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            'descraption' => 'required',
        ]);

        $product = product::findOrFail($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->descraption = $request->descraption;
        $product->imagepath = $request->imagepath ?? '';
        $product->category_id = $request->category_id;
        $product->save();
        return redirect('/proudcts')->with('success', 'Product updated successfully');
    }
}
