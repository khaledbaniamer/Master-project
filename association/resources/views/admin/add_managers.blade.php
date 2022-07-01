@extends('admin.admin_master')

@section('admin_content')
<hr>
<h2>Add new Manager</h2>
<div class="container" >
<form style="width: 50%" action="add_manager" method="POST">

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
      <label class="form-label">Manager Name</label>
      <input type="text" class="form-control" placeholder="Enter Manager Name ..." name="manager_name" value="{{old('manager_name')}}">
    </div>

    @error('manager_name')
        <div style="color: #ff0000;">{{$message}}</div>
    @enderror

    <div class="mt-3">
      <label class="form-label">Manager Email</label>
      <input type="email" step=".01" class="form-control" placeholder="Enter Manager Email ..." name="manager_email" value="{{old('manager_email')}}">
    </div>

    @error('manager_email')
        <div style="color: #ff0000;">{{$message}}</div>
    @enderror

    <div class="mt-3">
      <label class="form-label">Manager Phone</label>
      <input type="text" class="form-control" placeholder="Enter Manager Phone ..." name="manager_phone"
      value="{{old('manager_phone')}}">
    </div>

    @error('manager_phone')
        <div style="color: #ff0000;">{{$message}}</div>
    @enderror

    <div class="mt-3">
      <label class="form-label">Manager Password</label>
      <input type="password" class="form-control" placeholder="Enter Manager Password ..." name="manager_password" value="{{old('manager_password')}}">
    </div>

    @error('manager_password')
     <div style="color: #ff0000;">{{ 'Your password must be more than 8 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character.' }}</div>
    @enderror

    <div class="mt-3">
      <label class="form-label">Confirm Manager Password</label>
      <input type="password" class="form-control" placeholder="Enter Confirm Manager Password ..." name="confirm_manager_password" value="{{old('confirm_manager_password')}}">
    </div>

    @error('confirm_manager_password')
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