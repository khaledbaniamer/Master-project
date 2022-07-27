@extends('master')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('style/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>History Order <i class="fa fa-chevron-right"></i></span></p>
          <h2 class="mb-0 bread">History Order</h2>
        </div>
      </div>
    </div>
  </section>


   <!--Table-->
   <table class="table table-hover table-fixed my-4">
<h2 class="m-4">Order List</h2>

  <!--Table head-->
  <thead >
    <tr >
      <th class="p-3 text-center" style="color: brown">Order #</th>
      <th class="p-3 text-center" style="color: brown">Total price</th>
      <th class="p-3 text-center" style="color: brown">Qauntity</th>
      <th class="p-3 text-center" style="color: brown">Order Date</th>
      <th class="p-3 text-center" style="color: brown">Action</th>

    </tr>
  </thead>
        
  <tbody>
    
    @foreach ($orders as $order)
    <tr>
        <td class="p-3 text-center">{{$order->id}}</td>
        <td class="p-3 text-center">{{$order->order_total_amount}} JOD</td>    
        <td class="p-3 text-center">{{$order->total_quantity}}</td>    
        <td class="p-3 text-center">{{$order->created_at}}</td>        
        <td class="p-3 text-center">
            <a href="order_detials/{{$order->id}}" class="btn btn-primary">Show More</a>
        </td>    
    </tr>
    @endforeach

     
    </tbody>
    <!--Table body-->
  
  </table>

  

@endsection