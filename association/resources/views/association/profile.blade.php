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
              <h2 style="font-size:38px"><strong>Irbid Association</strong></h2>
            </div>
            <div class="col-md-3">
              <div class="button" style="float:right;">
                <a href="#" class="btn btn-primary">Edit Profile</a>
              </div>
            </div>
            </div>
          </div>
    
          <div class="row" style="margin-top:20px;">
            <div class="col-md-3"> <!-- Image -->
              <a href="#"> <img class="rounded-circle" src="images/kamal.jpg" alt="Kamal" style="width:200px;height:200px"></a>
            </div>
    
            <div class="col-md-6"> <!-- Rank & Qualifications -->
              <h5 style="color:#b7472a">Location :<small>Irbed Downtown , cima-st </small></h5>
              <p>PhD (On study at BUET), M.Sc. in research on ICT(UPC, Spain), M.Sc. in research on ICT(UCL, Belgium).</p>
              <p>Address: Namapara, Trishal, Mymensingh</p>
            </div>
    
            <div class="col-md-3 text-center"> <!-- Phone & Social -->
              <span class="number" style="font-size:18px">Phone:<strong>+8801732226402</strong></span>
              <div class="button" style="padding-top:18px">
                <a href="mailto:ahmkctg@yahoo.com" class="btn btn-primary btn-block">Send Email</a>
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
                  <p>AHM Kamal got B.Sc. and M.Sc. on Computer Science and Engineering from SUST, Bagladesh in 2004 and 2005 respectively. After graduation he served as a Lecturer at the Department of Computer Science and Engineering (CSE) in Institute of Science, Trade and Technology, Bangladesh. In 2009, he joined in a Public University, Jessore University of Science and Technology, as a Lecture at the CSE Department. He then promoted as an Assistant Professor by 2012. In 2015, Mr. Subrata changed his professional place and recruited as an Assistant Professor at the Department of Computer Science and Engineering in Jatiya Kabi Kazi Nazrul Islam University, Bangladesh and serving to date.</p>
              </div>
            </div>
          </div>
    <!-- End:Biography -->

    </div> <!--End of Container-->
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
</section>

<section>
    <h3 class="m-5 text-center" style="color: #b7472a">Products</h3>
    <div class="container mt-5">
    <div class="row">

        <div class="col-md-4 d-flex">
            <div class="product ftco-animate">
                <div class="img d-flex align-items-center justify-content-center" style="background-image: url({{asset('style/images/prod-9.jpg')}});">
                    <div class="desc">
                        <p class="meta-prod d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                        </p>
                    </div>
                </div>
                <div class="text text-center">
                    <span class="category">Whiskey</span>
                    <h2>Screwball</h2>
                    <span class="price">$69.00</span>
                </div>
            </div>
        </div>

        <div class="col-md-4 d-flex">
            <div class="product ftco-animate">
                <div class="img d-flex align-items-center justify-content-center" style="background-image: url({{asset('style/images/prod-9.jpg')}});">
                    <div class="desc">
                        <p class="meta-prod d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                        </p>
                    </div>
                </div>
                <div class="text text-center">
                    <span class="category">Whiskey</span>
                    <h2>Screwball</h2>
                    <span class="price">$69.00</span>
                </div>
            </div>
        </div>

        <div class="col-md-4 d-flex">
            <div class="product ftco-animate">
                <div class="img d-flex align-items-center justify-content-center" style="background-image: url({{asset('style/images/prod-9.jpg')}});">
                    <div class="desc">
                        <p class="meta-prod d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                        </p>
                    </div>
                </div>
                <div class="text text-center">
                    <span class="category">Whiskey</span>
                    <h2>Screwball</h2>
                    <span class="price">$69.00</span>
                </div>
            </div>
        </div>

        <div class="col-md-4 d-flex">
            <div class="product ftco-animate">
                <div class="img d-flex align-items-center justify-content-center" style="background-image: url({{asset('style/images/prod-9.jpg')}});">
                    <div class="desc">
                        <p class="meta-prod d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                        </p>
                    </div>
                </div>
                <div class="text text-center">
                    <span class="category">Whiskey</span>
                    <h2>Screwball</h2>
                    <span class="price">$69.00</span>
                </div>
            </div>
        </div>

        <div class="col-md-4 d-flex">
            <div class="product ftco-animate">
                <div class="img d-flex align-items-center justify-content-center" style="background-image: url({{asset('style/images/prod-9.jpg')}});">
                    <div class="desc">
                        <p class="meta-prod d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                        </p>
                    </div>
                </div>
                <div class="text text-center">
                    <span class="category">Whiskey</span>
                    <h2>Screwball</h2>
                    <span class="price">$69.00</span>
                </div>
            </div>
        </div>

        <div class="col-md-4 d-flex">
            <div class="product ftco-animate">
                <div class="img d-flex align-items-center justify-content-center" style="background-image: url({{asset('style/images/prod-9.jpg')}});">
                    <div class="desc">
                        <p class="meta-prod d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                        </p>
                    </div>
                </div>
                <div class="text text-center">
                    <span class="category">Whiskey</span>
                    <h2>Screwball</h2>
                    <span class="price">$69.00</span>
                </div>
            </div>
        </div>

    </div>
</div>
</section>

@endsection