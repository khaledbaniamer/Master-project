<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderHistory;
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
                $cart->prod_name ="empty";
                $cart->prod_image ="empty";
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

    public function show_cart()
    {


        $cart = Cart::select('carts.*', 'products.prod_name' , 'products.prod_image')
        ->join('products', 'products.id', '=', 'carts.prod_id')->where('carts.user_id',session()->get('id'))->get();
        // dd($cart);
        $total = 0 ;
        foreach ($cart as $product_price) {
            $total += $product_price->prod_price * $product_price->prod_quantity;
        }
        
        return view('products/cart' , ['cart_products'=>$cart , 'total'=>$total]);
    }

    public function update_cart(Request $request)
    {
        $product_ids = $request->product_id;
        $product = Cart::where('prod_id',$product_ids)->where('user_id',session()->get('id'))->first();
        // dd($product);
        $product->prod_quantity = $request->quantity;
        $product->update();

        return redirect('/cart');
    }

    public function delete_cart_product($id)
    {
        $product_ids = $id;
        $product = Cart::where('prod_id',$product_ids)->where('user_id',session()->get('id'))->first();
        // dd($product);
        
        $product->delete();

        return redirect('/cart');
    }

    public function checkout_proceed()
    {
        $product = Cart::where('user_id',session()->get('id'))->get();
        // $order_history = new OrderHistory();
        // dd($product);
        $total_amount = 0;
        $total_qauntity = 0;
        foreach ($product as $pp) {
            $total_amount += $pp->prod_price * $pp->prod_quantity;
            $total_qauntity += $pp->prod_quantity;
            OrderHistory::create([
                'prod_quantity'=>$pp->prod_quantity,
                'prod_name'=>$pp->prod_name,
                'prod_image'=>$pp->prod_image,
                'prod_price'=>$pp->prod_price,
                'user_id'=>$pp->user_id,
                'prod_id'=>$pp->prod_id,
            ]);
        }
        
        $order = new Order();
        $order->order_total_amount = $total_amount;
        $order->total_quantity = $total_qauntity;
        $order->user_id = session()->get('id');
        $order->save();

        foreach ($product as $pp) {
            $pp->delete();
        }
        
        return redirect('cart');
        
    }


}
