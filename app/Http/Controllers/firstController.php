<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\category;
use App\Models\product;
use App\Models\Review;
use Illuminate\Pagination\Paginator;

class firstController extends Controller
{
    public function Mainpage()
    {
        $result = DB::table('categories')->get();
        return view('welcome', ['category' => $result]);
    }

    public function GetcategoryProducts($catid = null)
    {
        $result = $catid
            ? product::where('category_id', $catid)->paginate(9)
            : product::paginate(4);

        return view('proudct', ['proudcts' => $result]);
    }

    public function GetallCategorywithProduct()
    {
        return view('category', [
            'categories' => category::all(),
            'product' => product::all()
        ]);
    }

    public function reviews()
    {
        $reviews = Review::all();
        return view('reviews', ['reviews' => $reviews]);
    }

    public function storereviews(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'subject' => 'required',
            'massage' => 'required',
        ]);

        $review = new Review();
        $review->name = $request->name;
        $review->phone = $request->phone;
        $review->email = $request->email;
        $review->subject = $request->subject;
        $review->massage = $request->massage;
        $review->save();

        return redirect()->back()->with('success', 'Review added successfully.');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = product::where('name', 'LIKE', "%$query%")->paginate(9);
        return view('search_results', compact('products', 'query'));
    }

   public function productTable(Request $request)
{
    $products = Product::all();
  return view('table', ['products' => $products]);

}

public function AddproudectImages($productid){

   $product = Product::find($productid);
 return view('addproudectImages', compact('productid'));


}
}
