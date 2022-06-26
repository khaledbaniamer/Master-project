@extends('admin.admin_master')

@section('admin_content')
<hr>
<h2>Add New Category</h2>
<div class="container" >
<form style="width: 50%">
    <div class="mb-3">
      <label class="form-label">Category Title</label>
      <input type="text" class="form-control" placeholder="Enter Product Title ..." name="prod_name">
    </div>
    <div class="mb-3">
      <label class="form-label">Category Image</label>
      <input type="file" class="form-control" placeholder="Enter Product Title ..." name="prod_image">
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
</form>
</div>
@endsection