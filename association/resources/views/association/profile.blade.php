@extends('master')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('style/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>Associations <i class="fa fa-chevron-right"></i></span></p>
          <h2 class="mb-0 bread">Associations</h2>
        </div>
      </div>
    </div>
  </section>


<section class="ftco-section ftco-no-pb">
    <header class="header">
        <div class="container">
          <div class="teacher-name" style="padding-top:20px;">
            <div class="row" style="margin-top:0px;">
            <div class="col-md-9">
              <h2 style="font-size:38px"><strong>{{$assoc->assoc_name}}</strong></h2>
            </div>
            @if (session()->has('manager_id'))
                
            <div class="col-md-3">
              <div class="button" style="float:right;">
                <a href="/edit_assoc/{{$assoc->id}}" class="btn btn-primary">Edit Profile</a>
              </div>
            </div>
            @endif
            </div>
          </div>
    
          <div class="row" style="margin-top:20px;">
            <div class="col-md-3"> <!-- Image -->
              <a href="#"> <img class="rounded-circle" src="{{url($assoc->assoc_image)}}" alt="Kamal" style="width:200px;height:200px"></a>
            </div>
    
            <div class="col-md-6"> <!-- Rank & Qualifications -->
              <h5 style="color:#b7472a">Location :<small>{{$assoc->assoc_location}} </small></h5>
              <p>Manager : {{$assoc->manager_name}}</p>
              <p>Email: {{$assoc->assoc_email}}</p>
            </div>
    
            <div class="col-md-3 text-center"> <!-- Phone & Social -->
              <span class="number" style="font-size:18px">Phone:<strong>{{$assoc->assoc_phone}}</strong></span>
              <div class="button" style="padding-top:18px">
                <a href="mailto:{{$assoc->assoc_email}}" class="btn btn-primary btn-block">Send Email</a>
              </div>
              <div class="social-icons" style="padding-top:18px">
                <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x" style="color:#b7472a"></i>
                  <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                </span></a>
                <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x" style="color:#b7472a"></i>
                  <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
                </span></a>
                <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x" style="color:#b7472a"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span></a>
                <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x" style="color:#b7472a"></i>
                  <i class="fa fa-slideshare fa-stack-1x fa-inverse"></i>
                </span></a>
    
              </div>
            </div>
          </div>
        </div>
      </header>
    <!--End of Header-->
    
    <!-- Main container -->
      <div class="container mt-5">
    
    <!-- Section:Biography -->
      <div class="row">
            <div class="col-md-12">
              <div class="card card-block text-xs-left">
                <h2 class="card-title" style="color:#b7472a"><i class="fa fa-user fa-fw"></i>Description</h2>
                <div style="height: 15px"></div>
                  <p>{{$assoc->assoc_description}}.</p>
              </div>
            </div>
          </div>
    <!-- End:Biography -->

    </div> <!--End of Container-->
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
</section>


<section class="container mt-5">
  <!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!--First slide-->
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).webp"
        alt="First slide">
    </div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).webp"
        alt="Second slide">
    </div>
    <!--/Second slide-->
    <!--Third slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).webp"
        alt="Third slide">
    </div>
    <!--/Third slide-->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
</section>


<section>
    <h3 class="m-5 text-center" style="color: #b7472a">Products</h3>
    <div class="container mt-5">
    <div class="row">

      @foreach ($products as $product)
          

        <div class="col-md-4 d-flex">
            <div class="product ftco-animate">
                <div class="img d-flex align-items-center justify-content-center" style="background-image: url({{asset($product->prod_image)}});">
                    <div class="desc">
                        <p class="meta-prod d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                        </p>
                    </div>
                </div>
                <div class="text text-center">
                    <span class="category">{{$product->prod_name}}</span>
                    <h2>{{$product->prod_name}}</h2>
                    <span class="price">{{$product->prod_price}}</span>
                </div>
            </div>
        </div>
        @endforeach



    </div>
</div>
</section>

@endsection