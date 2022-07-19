@extends('master')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('style/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>Login <i class="fa fa-chevron-right"></i></span></p>
          <h2 class="mb-0 bread">Login</h2>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
      <div class="col-xl-10 ftco-animate">
        <form action="login" method="POST" class="billing-form">
                        <h3 class="mb-4 billing-heading">Login</h3>
                        @csrf
              <div class="row align-items-end">
                  <div class="col-md-7">
                <div class="form-group">
                    <label for="firstname">Email</label>
                  <input type="text" class="form-control" placeholder="Ex:name@domain.com" name="email">
                </div>
                @error('email')
                  <div style="color: #ff0000;">{{$message}}</div>
                @enderror

                @if ($message = Session::get('email'))
                <div style="color: #ff0000;">{{$message}}</div>
              @endif
              </div>
              <div class="col-md-7">
                    <div class="form-group">
                        <label for="lastname">Password</label>
                    <input type="password" class="form-control" placeholder="Please Enter Password" name="password">
                    </div>
                    @error('password')
                      <div style="color: #ff0000;">{{$message}}</div>
                    @enderror

                  @if ($message = Session::get('pass'))
                     <div style="color: #ff0000;">{{$message}}</div>
                  @endif

                </div>

                <div class="col-md-7">
                  <div class="form-group">
                      <label>Login as Admin or Manager <a href="/admin_login">Click Here</a></label>

                  </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">

                    <input type="submit" class="btn btn-primary py-3 px-5" value="SignIn" >
                    </div>
                </div>
 
                    </div>
                </div>
      </form>
            </section>     

@endsection