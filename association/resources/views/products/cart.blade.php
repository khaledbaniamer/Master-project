@extends('master')

@section('content')
    
<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('style/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Cart <i class="fa fa-chevron-right"></i></span></p>
          <h2 class="mb-0 bread">My Cart</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
      <div class="container">
          <div class="row">
              <div class="table-wrap">
                      <table class="table">
                        <thead class="thead-primary">
                          <tr>
                            <th>Image</th>
                            
                            <th class="text-center">Product</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">total</th>
                            <th class="text-center">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($cart_products as $product)
                          <tr class="alert" role="alert">

                              <td class="text-center">
                                  <div class="img" style="background-image: url({{asset($product->prod_image)}});"></div>
                              </td>
                            <td class="text-center">
                                <div class="email">
                                    <span>{{$product->prod_name}}</span>
                                    
                                </div>
                            </td>
                            <td>{{$product->prod_price}} JOD</td>
                            <td class="quantity" class="text-center">
                              <div class="input-group">
                            <form  method="post" action="update_cart">
                              @csrf
                              <input type="hidden" name="product_id" value="{{$product->prod_id}}">
                               <input type="text" name="quantity" class="quantity form-control input-number" value="{{$product->prod_quantity}}" min="1" max="100">
                            </div>
                        </td>
                        <td class="text-center">{{
                            $product->prod_price * $product->prod_quantity
                          }} JOD</td>
                            <td class="text-center">
                              <input class="btn btn-primary mx-2" value="update" type="submit">
                            <a  class="close"  href="delete_product_cart/{{$product->prod_id}}">
                              <span aria-hidden="true"><i class="fa fa-close"></i></span>
                            </a>
                          </form>
                          </td>
                          </tr>
                         
                          @endforeach

                          
                        </tbody>
                      </table>
                  </div>
          </div>
          <div class="row justify-content-end">
              <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
                  <div class="cart-total mb-3">
                      <h3>Cart Totals</h3>
                      <p class="d-flex">
                          <span>Subtotal</span>
                          <span>{{$total}} JOD</span>
                      </p>
                      <p class="d-flex">
                          <span>Delivery</span>
                          <span>0.00 JOD</span>
                      </p>
                      <p class="d-flex">
                          <span>Discount</span>
                          <span>0.00 JOD</span>
                      </p>
                      <hr>
                      <p class="d-flex total-price">
                          <span>Total</span>
                          <span>{{$total}} JOD</span>
                      </p>
                  </div>

                  <p class="text-center"><a href="proceed_checkout" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
              </div>
          </div>
      </div>
  </section>
@endsection