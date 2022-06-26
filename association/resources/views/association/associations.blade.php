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
  
  <section class="row">
  <div class="container-fluid mt-5 pt-5 col-2">
  <div class="row">
    <div class="">
      <div class="categories">
        <h3 class="p-4">City</h3>
        <ul class="p-0 mx-2">
            <li><a href="#">Brandy <span class="fa fa-chevron-right"></span></a></li>
            <li><a href="#">Gin <span class="fa fa-chevron-right"></span></a></li>
            <li><a href="#">Rum <span class="fa fa-chevron-right"></span></a></li>
            <li><a href="#">Tequila <span class="fa fa-chevron-right"></span></a></li>
            <li><a href="#">Vodka <span class="fa fa-chevron-right"></span></a></li>
            <li><a href="#">Whiskey <span class="fa fa-chevron-right"></span></a></li>
        </ul>
     
      </div>
    </div>
  </div>
</div>
  <div class="container col-9 mt-5 pt-5">
    <h3 class="text-start">Associations</h3>
    <div class="row">
      <div class="col-9 my-4">
        <div class="card">
          <h5 class="card-header">Featured</h5>
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>

      <div class="col-9 my-4">
        <div class="card">
          <h5 class="card-header">Featured</h5>
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>

      <div class="col-9 my-4">
        <div class="card">
          <h5 class="card-header">Featured</h5>
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>

      <div class="col-9 my-4">
        <div class="card">
          <h5 class="card-header">Featured</h5>
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>    




@endsection