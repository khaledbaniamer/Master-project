@extends('admin.admin_master')

@section('admin_content')
<hr>
<h2>Add new Admin</h2>
<div class="container" >
<form style="width: 60%" action="add_admin" method="POST">

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
        {{ $message }}
        </div>

    @elseif($message = Session::get('fail'))
        <div class="alert alert-danger">
        {{ $message }}
        </div>
    @endif


    @csrf
    <div class="mt-3">
      <label class="form-label">Admin Name</label>
      <input type="text" class="form-control" placeholder="Enter Admin Name ..." name="admin_name" value="{{old('admin_name')}}">
    </div>

    @error('admin_name')
        <div style="color: #ff0000;">{{$message}}</div>
    @enderror

    <div class="mt-3">
      <label class="form-label">Admin Email</label>
      <input type="email" step=".01" class="form-control" placeholder="Enter Admin Email ..." name="admin_email" value="{{old('admin_email')}}">
    </div>

    @error('admin_email')
        <div style="color: #ff0000;">{{$message}}</div>
    @enderror

    <div class="mt-3">
      <label class="form-label">Admin Phone</label>
      <input type="text" class="form-control" placeholder="Enter Admin Phone ..." name="admin_phone"
      value="{{old('admin_phone')}}">
    </div>

    @error('admin_phone')
        <div style="color: #ff0000;">{{$message}}</div>
    @enderror

    <div class="mt-3">
      <label class="form-label">Admin Password</label>
      <input type="password" class="form-control" placeholder="8 character long ( 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character )"name="admin_password" value="{{old('admin_password')}}">
    </div>

    @error('admin_password')
     <div style="color: #ff0000;">{{ 'Your password must be more than 8 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character.' }}</div>
    @enderror

    <div class="mt-3">
      <label class="form-label">Confirm Admin Password</label>
      <input type="password" class="form-control" placeholder="8 character long ( 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character )" name="confirm_admin_password" value="{{old('confirm_admin_password')}}">
    </div>

    @error('confirm_admin_password')
        <div style="color: #ff0000;">{{$message}}</div>
    @enderror

    @if ($message = Session::get('match'))
        <div style="color: #ff0000;">
        {{ $message }}
        </div>
    @endif

    <button type="submit" class="btn btn-primary">Add</button>
</form>
</div>
@endsection