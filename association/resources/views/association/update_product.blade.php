@extends('master')

@section('content')
<section class="hero-wrap hero-wrap-2 mb-4" style="background-image: url({{asset('style/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>Add New Product <i class="fa fa-chevron-right"></i></span></p>
          <h2 class="mb-0 bread">Add New Product</h2>
        </div>
      </div>
    </div>
  </section>

<div class="container mt-5" >
    <form style="width: 50%" action="/update_product" method="POST" enctype="multipart/form-data">
        <h2>Add New Product</h2>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
        {{ $message }}
        </div>
      @endif
  @csrf
  <input type="hidden" value="{{$product->id}}" name="product_id">
  <input type="hidden" value="{{$product->assoc_id}}" name="prod_assoc">
    <div class="mt-3">
      <label class="form-label">Product Title</label>
      <input type="text" class="form-control" placeholder="Enter Product Title ..." name="prod_name" value="{{$product->prod_name}}">
    </div>
    @error('prod_name')
      <div style="color: #ff0000;">{{$message}}</div>
    @enderror

    <div class="mt-3">
      <label class="form-label">Product Price</label>
      <input type="number" step=".01" class="form-control" placeholder="Enter Product Price ..." name="prod_price" value="{{$product->prod_price}}">
    </div>

    @error('prod_price')
      <div style="color: #ff0000;">{{$message}}</div>
    @enderror

    <div class="mt-3">
      <label class="form-label">Product Image</label>
      <input type="file" class="form-control"  name="prod_image">
    </div>

    @error('prod_image')
      <div style="color: #ff0000;">{{$message}}</div>
    @enderror

    <div class="mt-3">
        <label class="form-label">Product Category</label>
        <select class="form-control" name="prod_category" id="">
            @foreach ($categories as $category)
            @if ($product->category_id == $category->id)
            <option value="{{$product->category_id}}">{{$category->category_name}}</option>
             @else   
            <option value="{{$category->id}}">{{$category->category_name}}</option>
            @endif    
            @endforeach
        </select>
    </div>

    @error('prod_category')
      <div style="color: #ff0000;">{{$message}}</div>
    @enderror


    <div class="mt-3">
      <label class="form-label">Product Description</label>
      <textarea class = "form-control" rows = "3" name="prod_description" placeholder = "product Description">{{$product->prod_description}}</textarea>
    </div>

    @error('prod_description')
      <div style="color: #ff0000;">{{$message}}</div>
     @enderror
     <div class="mt-3">
        <img src="{{url($product->prod_image)}}" alt="" width="100px" height="100px">
      </div>
    
    <button type="submit" class="btn btn-primary my-4">Update</button>
</form>
</div>
@endsection