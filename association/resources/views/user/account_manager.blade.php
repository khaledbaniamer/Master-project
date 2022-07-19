@extends('master')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('style/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>Manager Account <i class="fa fa-chevron-right"></i></span></p>
          <h2 class="mb-0 bread">Manager Account</h2>
        </div>
      </div>
    </div>
  </section>


<h2>Update Manager</h2>
<div class="container" >
<form style="width: 50%" action="/update_manager_account" method="POST">

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


        <input type="hidden" value="{{$manager->id}}" name="manager_id">

    <div class="mt-3">
      <label class="form-label">Manager Name</label>
      <input type="text" class="form-control" placeholder="Enter Manager Name ..." name="manager_name" value="{{$manager->manager_name}}">
    </div>

    @error('manager_name')
        <div style="color: #ff0000;">{{$message}}</div>
    @enderror

    <div class="mt-3">
      <label class="form-label">Manager Email</label>
      <input type="email" step=".01" class="form-control" placeholder="Enter Manager Email ..." name="manager_email" value="{{$manager->manager_email}}">
    </div>

    @error('manager_email')
        <div style="color: #ff0000;">{{$message}}</div>
    @enderror

    <div class="mt-3">
      <label class="form-label">Manager Phone</label>
      <input type="text" class="form-control" placeholder="Enter Manager Phone ..." name="manager_phone"
      value="{{$manager->manager_phone}}">
    </div>

    @error('manager_phone')
        <div style="color: #ff0000;">{{$message}}</div>
    @enderror

    <div class="mt-3">
      <label class="form-label">Manager Password</label>
      <input type="password" class="form-control" placeholder="Enter Manager Password ..." name="manager_password" value="{{$password}}">
    </div>

    @error('manager_password')
     <div style="color: #ff0000;">{{ 'Your password must be more than 8 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character.' }}</div>
    @enderror

    <div class="mt-3">
      <label class="form-label">Confirm Manager Password</label>
      <input type="password" class="form-control" placeholder="Enter Confirm Manager Password ..." name="confirm_manager_password" value="{{$password}}">
    </div>

    @error('confirm_manager_password')
        <div style="color: #ff0000;">{{$message}}</div>
    @enderror

    @if ($message = Session::get('match'))
        <div style="color: #ff0000;">
        {{ $message }}
        </div>
    @endif

    <button type="submit" class="btn btn-primary my-4">Update</button>
</form>
</div>
@endsection