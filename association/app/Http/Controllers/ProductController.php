<?php

namespace App\Http\Controllers;

use App\Models\Association;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add_product(Request $request)
    {
        $request->validate([
            'prod_name'=>'required|max:100',
            'prod_price'=>'required',
            'prod_image'=>'required',
            'prod_category'=>'required',
            'prod_assoc'=>'required',
            'prod_description'=>'required',
        ]);

        return redirect('/admin/add_product');
    }

    // user side 
    public function show_all_product()
    {
        $associations = Association::all();
        $products = Product::all();
        $categories = Category::all();
        return view('products/product' , ['products'=>$products , 'categories'=>$categories , 'assoc'=>$associations]);
    }

    public function single_product($id)
    {
        $product = Product::find($id);
        $assoc_id = $product->assoc_id;
        $category_id = $product->category_id; 
        $assoc = Association::find($assoc_id);
        $category = Category::find($category_id);
        return view('products/single_product' , ['product'=>$product , 'assoc'=>$assoc , 'category'=>$category]);
    }
}
