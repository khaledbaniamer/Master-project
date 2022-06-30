<?php

namespace App\Http\Controllers;

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
}
