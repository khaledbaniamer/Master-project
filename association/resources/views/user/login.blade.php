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
                    <form action="#" class="billing-form">
                        <h3 class="mb-4 billing-heading">Login</h3>
              <div class="row align-items-end">
                  <div class="col-md-7">
                <div class="form-group">
                    <label for="firstname">Email</label>
                  <input type="text" class="form-control" placeholder="Enter Name">
                </div>
              </div>
              <div class="col-md-7">
                    <div class="form-group">
                        <label for="lastname">Password</label>
                    <input type="text" class="form-control" placeholder="Ex name@domain.com">
                    </div>
                </div>


                <div class="col-md-7">
                    <div class="form-group">

                    <input type="submit" class="btn btn-primary py-3 px-5" value="Signup" >
                    </div>
                </div>
 
                    </div>
                </div>

            </section>     

@endsection