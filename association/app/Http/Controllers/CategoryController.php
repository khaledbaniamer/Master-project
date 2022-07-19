<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class CategoryController extends Controller
{
    public function show_category()
    {
        $categoies = Category::all();
        return view('admin/category' , ['categories'=>$categoies]);
    }


    public function add_category(Request $request)
    {
        $request->validate([
            'category_name'=>'required|max:100',
        ]);
        $validatedData = $request->validate([
            'category_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        
        $request->file('category_image')->store('public/product_images');

        $category = new Category();
        $category->category_name = $request->category_name;
        $category->category_image = $request->file('category_image')->store('storage/product_images');

        if($category->save())
        {
            return redirect('admin/add_category')->with('success' , 'Category has been added successflly');
        }else{
            return redirect('admin/add_category')->with('fail' , 'Category does not add');
        }
    }

    public function single_category($id )
    {
        $category = Category::find($id);

        return view("admin/update_category" , ['category'=>$category]);

    }

    public function update_category( Request $request)
    {
        $id = $request->category_id;
        $request->validate([
            'category_name'=>'required|max:100',
        ]);
        $validatedData = $request->validate([
            'category_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $request->file('category_image')->store('public/product_images');

        $update = Category::find($id);
        $update->category_name = $request->category_name;
        $update->category_image = $request->file('category_image')->store('storage/product_images');

        if($update->save())
        {
            return redirect("admin/update_category/$id")->with('success' , 'Category has been added successflly');
        }else{
            return redirect("admin/update_category/$id")->with('fail' , 'Category does not add');
        }
        
    }

    public function delete_category($id1)
    {
        $delete_category = Category::find($id1);
        
        if($delete_category->delete()){

            return redirect('/admin/categories')->with('delete' , 'Category has been deleted successfully');
        }
    }

    //End Admin Side 

    //user side 
    public function show_home_category()
    {
        $categoies = Category::all();
        $products = Product::latest()->take(5)->get();
        return view('/pages/index' , ['categoies'=>$categoies , 'products'=>$products]);
    }
}
