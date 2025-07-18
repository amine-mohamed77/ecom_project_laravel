<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;

class addProductController extends Controller
{
    // Show add product form
    public function addProduct() {
        $allCategories = Category::all();
        return view('products.addproduct', ['allCategories' => $allCategories]);
    }

    // Store new product
   public function StoreProduct(Request $request) {
        $request->validate([
            'name' => 'required|max:50|unique:products',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            'descraption' => 'required',
            'image' => 'required',
            'category_id' => 'required',
        ]);

        $newProduct = new product();
        $newProduct->name = $request->name;
        $newProduct->price = $request->price;
        $newProduct->quantity = $request->quantity;
        $newProduct->descraption = $request->descraption;
        $newProduct->category_id = $request->category_id;

        //  Handle image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $newProduct->imagepath = 'uploads/' . $filename;
        }

        $newProduct->save();

        return redirect('/addproduct')->with('success', 'Product added successfully');
    }

    // Delete product
    public function removeproduct($id) {
        $product = product::findOrFail($id);
        $product->delete();
        return redirect('/proudcts')->with('success', 'Product deleted');
    }

    // Show edit form
    public function EditProduct($id) {
        $product = product::findOrFail($id);
        $allCategories = category::all();
        return view('products.editproduct', [
            'product' => $product,
            'allCategories' => $allCategories
        ]);
    }

    // Update product
    public function UpdateProduct(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:100',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'descraption' => 'required',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required',
        ]);

        $product = product::findOrFail($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->descraption = $request->descraption;
        $product->category_id = $request->category_id;

        //  Handle image update if present
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
