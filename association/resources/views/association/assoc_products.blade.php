@extends('master')

@section('content')
<section class="hero-wrap hero-wrap-2 mb-4" style="background-image: url({{asset('style/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>Products Association <i class="fa fa-chevron-right"></i></span></p>
          <h2 class="mb-0 bread">Products Association</h2>
        </div>
      </div>
    </div>
  </section>

  <h2 class="mx-4">Products</h2>
  <a class="btn btn-primary mx-4" href="/asscoc_addNewProduct/{{$assoc}}">Add New</a>
  <!--Table-->
  <table class="table table-hover table-fixed mt-4">

    @if ($message = Session::get('delete'))
    <div class="alert alert-success m-5">
    {{ $message }}
    </div>
    @endif

  <!--Table head-->
  <thead >
    <tr >
      <th class="p-3 text-center" style="color: brown">#</th>
      <th class="p-3 text-center" style="color: brown">Image</th>
      <th class="p-3 text-center" style="color: brown">Title</th>
      <th class="p-3 text-center" style="color: brown">price</th>
      <th class="p-3 text-center" style="color: brown">Created Date</th>
      <th class="p-3 text-center" style="color: brown">Action</th>

    </tr>
  </thead>
  <!--Table head-->

  <!--Table body-->
  <tbody>
    @foreach ($products as $product)
        
    <tr>
      <th class="text-center p-3">{{$product->id}}</th>
      <td class="text-center p-3">
        <img src="{{url($product->prod_image)}}" alt="" width="100px" height="100px">
      </td>
      <td class="text-center p-3">{{$product->prod_name}}</td>
      <td class="text-center p-3">{{$product->prod_price}}</td>

      <td class="text-center p-3">{{$product->created_at}}</td>
      <td class="text-center p-3">
          <a class="m-3" href="/update_product/{{$product->id}}"><i class="fa-solid fa-pen-to-square" style="font-size: 20px ;color:rgb(77, 235, 77)"></i></i></a>
{{-- 
          <a class="m-3" href=""><i class="fa-solid fa-trash-can" style="font-size: 20px ;color:red"></i></a> --}}
          <span class="text-center">
            <!-- Button HTML (to Trigger Modal) -->
            <a href="#t{{$product->id}}" class="trigger-btn" data-toggle="modal"><i class="fa-solid fa-trash-can" style="font-size: 20px ;color:red"></i></a>
          </span>
          
          <!-- Modal HTML -->
          <div id="t{{$product->id}}" class="modal fade">
            <div class="modal-dialog modal-confirm">
              <div class="modal-content">
                <div class="modal-header flex-column">						
                  <h4 class="modal-title w-100">Are you sure?</h4>	
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <p>Do you really want to delete these Product? This process cannot be undone.</p>
                </div>
                <div class="modal-footer justify-content-center ">
                  <a href="/assoc_products/{{$product->id}}" class="btn btn-secondary m-2" data-dismiss="modal">Cancel</a>
                  <a href="/delete_product/{{$product->id}}" class="btn btn-danger m-2">Delete</a>
                </div>
              </div>
            </div>
          </div>
      </td>
    </tr>
    @endforeach
   
  </tbody>
  <!--Table body-->

</table>
@endsection