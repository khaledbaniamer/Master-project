<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // public function __construct()
    // {
        
    //     $this->middleware(function ($request, $next) {
    //         // fetch session and use it in entire class with constructor
            
    //         // $cart_products = Cart::all();
            
    //         $cart = Cart::where('user_id',session()->get('id'))->get();
           
    //         view()->share('cart_products',$cart);
            
            
    //         return $next($request);
    //         });

    // }

}
