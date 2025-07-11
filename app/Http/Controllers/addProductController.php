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
if ($request->hasFile('image')) {
    $file = $request->file('image');
    $filename = time().'_'.$file->getClientOriginalName();
    $file->move(public_path('uploads'), $filename);
    $newProuduct->imagepath = 'uploads/' . $filename;
}


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

   public function UpdateProduct(Request $request, $id)
{
    $request->validate([
        'name' => 'required|max:50',
        'price' => 'required|numeric',
        'quantity' => 'required|integer',
        'descraption' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $product = product::findOrFail($id);
    $product->name = $request->name;
    $product->price = $request->price;
    $product->quantity = $request->quantity;
    $product->descraption = $request->descraption;
    $product->category_id = $request->category_id;


    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('uploads'), $imageName);
        $product->imagepath = 'uploads/' . $imageName;
    }

    $product->save();

    return redirect('/addproduct')->with('success', 'Product updated successfully.');
}

    }
