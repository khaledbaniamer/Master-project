@extends('admin.admin_master')

@section('admin_content')
<hr>
<h2>Update Product</h2>
<div class="container" >
<form style="width: 50%">
    <div class="mb-3">
      <label class="form-label">Product Title</label>
      <input type="text" class="form-control" placeholder="Enter Product Title ..." name="prod_name">
    </div>
    <div class="mb-3">
      <label class="form-label">Product Price</label>
      <input type="number" step=".01" class="form-control" placeholder="Enter Product Title ..." name="prod_price">
    </div>
    <div class="mb-3">
      <label class="form-label">Product Image</label>
      <input type="file" class="form-control" placeholder="Enter Product Title ..." name="prod_image">
    </div>
    <div class="mb-3">
        <label class="form-label">Product Category</label>
        <select class="form-control" name="prod_category" id="">
            <option value="">test</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Product Assciation</label>
        <select class="form-control" name="prod_assoc" id="">
            <option value="">test</option>
        </select>
    </div>
    <div class="mb-3">
      <label class="form-label">Product Description</label>
      <textarea class = "form-control" rows = "3" name="prod_description" placeholder = "product Description"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Add</button>
</form>
</div>
@endsection