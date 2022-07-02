@extends('master')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('style/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>Signup <i class="fa fa-chevron-right"></i></span></p>
          <h2 class="mb-0 bread">Signup</h2>
        </div>
      </div>
    </div>
  </section>

  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      {{ $message }}
      </div>
  @endif
  <section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
      <div class="col-xl-10 ftco-animate">
          <form action="signup"  method="POST" class="billing-form">
            @csrf
                        <h3 class="mb-4 billing-heading">Signup</h3>
              <div class="row align-items-end">
                  <div class="col-md-7">
                <div class="form-group">
                    <label for="firstname">Name</label>
                    <input type="text" class="form-control" placeholder="Enter Name ..." name="user_name">
                </div>

              @error('user_name')
                <div style="color: #ff0000;">{{$message}}</div>
              @enderror

              </div>
              <div class="col-md-7">
                    <div class="form-group">
                        <label >Email</label>
                        <input type="email" step=".01" class="form-control" placeholder="Ex:name@domain.com" name="user_email">
                    </div>

                @error('user_email')
                  <div style="color: #ff0000;">{{$message}}</div>
                @enderror

                </div>
              <div class="col-md-7">
                    <div class="form-group">
                        <label >Address</label>
                        <input type="text" class="form-control" placeholder="Enter Address ..." name="user_address">
                    </div>
                @error('user_address')
                  <div style="color: #ff0000;">{{$message}}</div>
                @enderror 
                </div>

              <div class="col-md-7">
                    <div class="form-group">
                        <label >Phone</label>
                        <input type="text" class="form-control" placeholder="Ex:07xxxxxxxx" name="user_phone">
                    </div>
                @error('user_phone')
                  <div style="color: #ff0000;">{{$message}}</div>
                @enderror
                </div>

                <div class="col-md-7">
                    <div class="form-group">
                        <label >Password</label>
                        <input type="password" class="form-control" placeholder="8 character long ( 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character )" name="user_password">
                    </div>
                @error('user_password')
                  <div style="color: #ff0000;">{{$message}}</div>
                @enderror 
                </div>

                <div class="col-md-7">
                    <div class="form-group">
                        <label >Confirm Password</label>
                        <input type="password" class="form-control" placeholder="8 character long ( 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character )"name="confirm_user_password">
                    </div>
                    
                @error('confirm_user_password')
                  <div style="color: #ff0000;">{{$message}}</div>
                @enderror

                
                @if ($message = Session::get('match'))
                  <div style="color: #ff0000;">
                  {{ $message }}
                  </div>
                @endif
                </div>

                <div class="col-md-7">
                    <div class="form-group">

                    <input type="submit" class="btn btn-primary py-3 px-5" value="Signup" >
                    </div>
                </div>
        </form>
                    </div>
                </div>

    </section>     

@endsection