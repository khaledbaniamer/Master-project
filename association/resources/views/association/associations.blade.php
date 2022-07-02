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
            <li><a href="#">Irbed <span class="fa fa-chevron-right"></span></a></li>
            <li><a href="#">Amman <span class="fa fa-chevron-right"></span></a></li>
            <li><a href="#">Zarqa <span class="fa fa-chevron-right"></span></a></li>
            <li><a href="#">Other <span class="fa fa-chevron-right"></span></a></li>
        </ul>
     
      </div>
    </div>
  </div>
</div>
  <div class="container col-9 mt-5 pt-5">
    <h3 class="text-start">Associations</h3>
    @foreach ($assocs as $assoc)
        
    <div class="row">
      <div class="col-9 my-4">
        <div class="card">
          <h5 class="card-header">{{$assoc->assoc_name}}</h5>
          <div class="card-body">
            <h5 class="card-title">Manager : {{$assoc->manager_name}}</h5>
            <h5 class="card-title">Email : {{$assoc->assoc_email}}</h5>
            <h5 class="card-title">Phone : {{$assoc->assoc_phone}}</h5>
            <h5 class="card-title">Address : {{$assoc->assoc_location}}</h5>
            <p class="card-text">{{$assoc->assoc_description}}</p>
            <a href="assoc_profile/{{$assoc->id}}" class="btn btn-primary">Show Profile</a>
          </div>
        </div>
      </div>
    </div>
    @endforeach

</section>    




@endsection