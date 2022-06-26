@extends('admin.admin_master')

@section('admin_content')
<hr>
<h2>Update Users</h2>
<div class="container" >
<form style="width: 50%">
    <div class="mb-3">
      <label class="form-label">User Name</label>
      <input type="text" class="form-control" placeholder="Enter User Name ..." name="user_name">
    </div>
    <div class="mb-3">
      <label class="form-label">User Email</label>
      <input type="email" step=".01" class="form-control" placeholder="Enter User Email ..." name="user_email">
    </div>
    <div class="mb-3">
      <label class="form-label">User Address</label>
      <input type="text" class="form-control" placeholder="Enter User Address ..." name="user_address">
    </div>
    <div class="mb-3">
      <label class="form-label">User Phone</label>
      <input type="text" class="form-control" placeholder="Enter User Phone ..." name="user_phone">
    </div>
    <div class="mb-3">
      <label class="form-label">User Password</label>
      <input type="text" class="form-control" placeholder="Enter User Password ..." name="user_password">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection