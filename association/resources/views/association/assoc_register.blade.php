@extends('master')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('style/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>Associations <i class="fa fa-chevron-right"></i></span></p>
          <h2 class="mb-0 bread">Associations Register</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
      <div class="col-xl-10 ftco-animate">
        <form action="assoc_register" method="POST" class="billing-form">
        <h3 class="mb-4 billing-heading">Association Register</h3>
        
        @csrf

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
      <input type="password" class="form-control" placeholder="8 character long ( 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character )" name="manager_password" value="{{old('manager_password')}}">
    </div>

    @error('manager_password')
     <div style="color: #ff0000;">{{ 'Your password must be more than 8 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character.' }}</div>
    @enderror

    <div class="mt-3">
      <label class="form-label">Confirm Manager Password</label>
      <input type="password" class="form-control" placeholder="8 character long ( 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character )" name="confirm_manager_password" value="{{old('confirm_manager_password')}}">
    </div>

    @error('confirm_manager_password')
        <div style="color: #ff0000;">{{$message}}</div>
    @enderror

    @if ($message = Session::get('match'))
        <div style="color: #ff0000;">
        {{ $message }}
        </div>
    @endif

    <button type="submit" class="btn btn-primary mt-5">Add</button>
      </form>
</section>     


  @endsection