@extends('admin.admin_master')

@section('admin_content')
<hr>
<h2>Add New Association</h2>
<div class="container" >
<form style="width: 50%">
    <div class="mb-3">
      <label class="form-label">Association Name</label>
      <input type="text" class="form-control" placeholder="Enter Association Name ..." name="assoc_name">
    </div>
    <div class="mb-3">
      <label class="form-label">Association Address</label>
      <input type="text" step=".01" class="form-control" placeholder="Enter Association Address ..." name="assoc_address">
    </div>
    <div class="mb-3">
      <label class="form-label">Association Phone</label>
      <input type="text" class="form-control" placeholder="Enter Association Phone ..." name="assoc_phone">
    </div>

    <div class="mb-3">
        <label class="form-label">Association Email</label>
        <input type="email" class="form-control" placeholder="Enter Association Email ..." name="assoc_email">
    </div>

    <div class="mb-3">
        <label class="form-label">Association Date</label>
        <input type="text" class="form-control" placeholder="Enter Association Date ..." name="assoc_date">
    </div>

    <div class="mb-3">
        <label class="form-label">Association Image</label>
        <input type="file" class="form-control" placeholder="Enter Association Date ..." name="assoc_image">
    </div>
   
    <div class="mb-3">
      <label class="form-label">Association Description</label>
      <textarea class = "form-control" rows = "3" name="prod_description" placeholder = "Association Description" name="assoc_description"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Add</button>
</form>
</div>
@endsection