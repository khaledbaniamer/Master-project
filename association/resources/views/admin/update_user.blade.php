@extends('admin.admin_master')

@section('admin_content')
<hr>
<h2>Update User</h2>
<div class="container" >
<form style="width: 50%" action="update_user" method="POST">
  @if ($message = Session::get('success'))
  <div class="alert alert-success">
    {{ $message }}
    </div>
  @endif
  @csrf
  <input type="hidden" value="{{$user->id}}" name="user_id">
    <div class="mt-3">
      <label class="form-label">User Name</label>
      <input type="text" class="form-control" placeholder="Enter User Name ..." name="user_name" value="{{$user->user_name}}">
    </div>

    @error('user_name')
      <div style="color: #ff0000;">{{$message}}</div>
    @enderror
    
    <div class="mt-3">
      <label class="form-label">User Email</label>
      <input type="email" step=".01" class="form-control" placeholder="Enter User Email ..." name="user_email" value="{{$user->user_email}}">
    </div>

    @error('user_email')
      <div style="color: #ff0000;">{{$message}}</div>
    @enderror
    
    <div class="mt-3">
      <label class="form-label">User Address</label>
      <input type="text" class="form-control" placeholder="Enter User Address ..." name="user_address" value="{{$user->user_location}}">
    </div>

    @error('user_address')
      <div style="color: #ff0000;">{{$message}}</div>
    @enderror
    
    <div class="mt-3">
      <label class="form-label">User Phone</label>
      <input type="text" class="form-control" placeholder="Enter User Phone ..." name="user_phone" value="{{$user->user_phone}}">
    </div>

    @error('user_phone')
      <div style="color: #ff0000;">{{$message}}</div>
    @enderror
    
    <div class="mt-3">
      <label class="form-label">User Password</label>
      <input type="password" class="form-control" placeholder="Enter User Password ..." name="user_password" value="{{$pass}}">
    </div>

    @error('user_password')
      <div style="color: #ff0000;">{{$message}}</div>
    @enderror
    
    <div class="mt-3">
      <label class="form-label">User Password</label>
      <input type="password" class="form-control" placeholder="Enter User Password ..." name="confirm_user_password" value="{{$pass}}">
    </div>
    @error('confirm_user_password')
      <div style="color: #ff0000;">{{$message}}</div>
    @enderror

    @if ($message = Session::get('match'))
      <div style="color: #ff0000;">
      {{ $message }}
      </div>
  @endif

    <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection