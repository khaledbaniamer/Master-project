@extends('master')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('style/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span> Order Detials<i class="fa fa-chevron-right"></i></span></p>
          <h2 class="mb-0 bread">Order Detials</h2>
        </div>
      </div>
    </div>
  </section>


   <!--Table-->

   <table class="table table-hover table-fixed my-4">
<h2 class="m-4">Order List</h2>

<div class="mx-5 my-2">
    <p>Order Number : {{$order->id}}</p>
</div>
<div class="mx-5 my-2">
    <p>Order Date :{{$order->created_at}}</p>
</div>
<div class="mx-5 my-2">
    <p>Total Price :{{$order->order_total_amount}} JOD</p>
</div>
  <!--Table head-->
  <thead >

    <tr >
      <th class="p-3 text-center" style="color: brown">Image</th>
      <th class="p-3 text-center" style="color: brown">Products</th>
      <th class="p-3 text-center" style="color: brown">Price</th>
      <th class="p-3 text-center" style="color: brown">Qauntity</th>
      <th class="p-3 text-center" style="color: brown">Sub Total</th>
      

    </tr>
    
  </thead>

  <tbody>

    @foreach ($products_order as $product)
    <tr>
        <td class="p-3 text-center">
            <img src="{{asset($product->prod_image)}}" width="120px" height="120px">
        </td>
        <td class="p-3 text-center">{{$product->prod_name}} JOD</td>    
        <td class="p-3 text-center">{{$product->prod_price}}</td>    
        <td class="p-3 text-center">{{$product->prod_quantity}}</td>        
        <td class="p-3 text-center">{{$product->prod_price * $product->prod_quantity}} JOD</td>    
    </tr>
    @endforeach

     
    </tbody>
    <!--Table body-->
  
  </table>

  

@endsection