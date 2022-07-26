<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add_cart(Request $request)
    {
        if (session()->has('id')) {
            $user_id = session()->get('id');
            $cart=Cart::where('user_id',$user_id)->Where('prod_id', $request->product_id)->first();
            if ($cart) {
                $cart->prod_quantity =  $cart->prod_quantity + $request->quntity;
                
                $cart->update();
                return redirect(url()->previous()."#$request->product_id");
            }else{

                $product_id = $request->product_id;
                $cart = new Cart();
                $cart->prod_id =$product_id;
                $cart->user_id =session()->get('id');
                $cart->prod_quantity = $request->quntity;
                $cart->	prod_price = $request->product_price;
    
                $cart->save();
                return redirect(url()->previous()."#$request->product_id");
            }
        }else{
            return redirect('/login');
        }
    }

    public function checkout()
    {
        if(session()->has('id')){
            $id = session()->get('id');
            $user = User::find($id);
            $cart = Cart::where('user_id',session()->get('id'))->get();
            $total = 0;
            foreach ($cart as $product) {
                $total += $product->prod_quantity * $product->prod_price;
            }
            // dd($total);
            return view('products/checkout' , ['user'=>$user , 'total'=>$total]);
        }else{
            return redirect('/login');
        }
    }

    // public function add_cart_product(Request $request)
    // {
    //     if (session()->has('id')) {
    //         $user_id = session()->get('id');
    //         $cart=Cart::where('user_id',$user_id)->Where('prod_id', $request->product_id)->first();
    //         if ($cart) {
    //             $cart->prod_quantity =  $cart->prod_quantity + $request->quntity;
                
    //             $cart->update();
    //             return redirect(url()->previous()."#$request->product_id");
    //         }else{

    //             $product_id = $request->product_id;
    //             $cart = new Cart();
    //             $cart->prod_id =$product_id;
    //             $cart->user_id =session()->get('id');
    //             $cart->prod_quantity = $request->quntity;
    //             $cart->	prod_price = $request->product_price;
    
    //             $cart->save();
    //             return redirect(url()->previous()."#$request->product_id");
    //         }
    //     }else{
    //         return redirect('/login');
    //     }
    // }
}
