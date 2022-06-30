<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

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

    public function single_category($id , Request $request)
    {
        $category = Category::find($id);

        return view('admin/update_category' , ['category'=>$category]);

    }
}
