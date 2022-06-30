@extends('admin.admin_master')

@section('admin_content')
<hr>
<h2>Add New Product</h2>
<div class="container" >
<form style="width: 50%" action="add_product" method="POST">
  @csrf
    <div class="mt-3">
      <label class="form-label">Product Title</label>
      <input type="text" class="form-control" placeholder="Enter Product Title ..." name="prod_name">
    </div>
    @error('prod_name')
      <div style="color: #ff0000;">{{$message}}</div>
    @enderror

    <div class="mt-3">
      <label class="form-label">Product Price</label>
      <input type="number" step=".01" class="form-control" placeholder="Enter Product Price ..." name="prod_price">
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
            <option value="">test</option>
        </select>
    </div>

    @error('prod_category')
      <div style="color: #ff0000;">{{$message}}</div>
    @enderror

    <div class="mt-3">
        <label class="form-label">Product Assciation</label>
        <select class="form-control" name="prod_assoc" id="">
            <option value="">test</option>
        </select>
    </div>

    @error('prod_assoc')
       <div style="color: #ff0000;">{{$message}}</div>
    @enderror

    <div class="mt-3">
      <label class="form-label">Product Description</label>
      <textarea class = "form-control" rows = "3" name="prod_description" placeholder = "product Description"></textarea>
    </div>

    @error('prod_description')
      <div style="color: #ff0000;">{{$message}}</div>
     @enderror
    
    <button type="submit" class="btn btn-primary">Add</button>
</form>
</div>
@endsection