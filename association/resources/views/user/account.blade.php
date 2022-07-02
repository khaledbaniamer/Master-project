@extends('master')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('style/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>Account <i class="fa fa-chevron-right"></i></span></p>
          <h2 class="mb-0 bread">Account</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-5">


<div class="container">
    <h1>Edit Profile</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
              {{ $message }}
            </div>
        @endif

        <h3>Personal info</h3>
        
        <form class="form-horizontal" role="form" action="account" method="POST">
          @csrf
          <input type="hidden" value="{{$user->id}}" name="user_id">
          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{{$user->user_name}}" name="user_name">
            </div>
            @error('user_name')
              <div style="color: #ff0000;">{{$message}}</div>
            @enderror
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Location:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{{$user->user_location}}" name="user_address" >
            </div>
            @error('user_address')
              <div style="color: #ff0000;">{{$message}}</div>
            @enderror 

          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{{$user->user_email}}" name="user_email">
            </div>

            @error('user_email')
              <div style="color: #ff0000;">{{$message}}</div>
            @enderror 
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Phone:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{{$user->user_phone}}" name="user_phone">
            </div>

            @error('user_phone')
              <div style="color: #ff0000;">{{$message}}</div>
            @enderror 
          </div>
        
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="{{$password}}" name="user_password">
            </div>
            @error('user_password')
            <div style="color: #ff0000;">{{$message}}</div>
          @enderror 
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="{{$password}}" name="confirm_user_password">
            </div>

            @error('confirm_user_password')
              <div style="color: #ff0000;">{{$message}}</div>
            @enderror 

            @if ($message = Session::get('match'))
            <div style="color: #ff0000;">{{$message}}</div>
            @endif
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
</section>
@endsection