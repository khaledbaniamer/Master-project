@extends('master')

@section('content')
    
<div class="hero-wrap" style="background-image: url({{asset('style/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-8 ftco-animate d-flex align-items-end">
            <div class="text w-100 text-center">
              <h1 class="mb-4">Good <span>Shop</span> for Good <span>Moments</span>.</h1>
              <p><a href="/product" class="btn btn-primary py-2 px-4">Shop Now</a> <a href="/about" class="btn btn-white btn-outline-white py-2 px-4">Read more</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-intro">
      <div class="container">
          <div class="row no-gutters">
              <div class="col-md-4 d-flex">
                  <div class="intro d-lg-flex w-100 ftco-animate">
                      <div class="icon">
                          <span class="flaticon-support"></span>
                      </div>
                      <div class="text">
                          <h2>Online Support 24/7</h2>
                          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 d-flex">
                  <div class="intro color-1 d-lg-flex w-100 ftco-animate">
                      <div class="icon">
                          <span class="flaticon-cashback"></span>
                      </div>
                      <div class="text">
                          <h2>Money Back Guarantee</h2>
                          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 d-flex">
                  <div class="intro color-2 d-lg-flex w-100 ftco-animate">
                      <div class="icon">
                          <span class="flaticon-free-delivery"></span>
                      </div>
                      <div class="text">
                          <h2>Free Shipping &amp; Return</h2>
                          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

{{-- // Category Section  --}}
<section class="ftco-section ftco-no-pb">
    <div class="container">
        <h2 class="text-center m-4">Categories</h2>
        <div class="row">
            @foreach ($categoies as $category)
                
            <div class="col-md-4">
                <div class="img"><a href="/category/{{$category->id}}"><img src="{{$category->category_image}}" alt="cat" width="250px" height="400px"></a></div>
                <div class="ml-5 mt-4"><a href="/category/{{$category->id}}" class="h4 ">{{$category->category_name}} </a></div>
            </div>
            @endforeach

        </div>
</section>


  <section class="ftco-section ftco-no-pb">
          <div class="container">
              <div class="row">
                  <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url({{asset('style/images/about.jpg')}});">
                  </div>
                  <div class="col-md-6 wrap-about pl-md-5 ftco-animate py-5">
            <div class="heading-section">
                <span class="subheading">Since 2022</span>
              <h2 class="mb-4">Desire Meets A Traditional</h2>

              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>
              {{-- <p class="year">
                  <strong class="number" data-number="115">0</strong>
                  <span>Years of Experience In Business</span>
              </p> --}}
            </div>

                  </div>
              </div>
          </div>
      </section>

     

      <section class="ftco-section ">
          <div class="container">
              <div class="row justify-content-center pb-5">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Our Delightful Products</span>
          <h2>Latest Products</h2>
        </div>
      </div>
      <div class="row">
        @foreach ($products as $product)
        <div id="{{$product->id}}" class="col-md-4 d-flex">
            <div class="product ftco-animate">
                <div class="img d-flex align-items-center justify-content-center" style="background-image: url({{asset($product->prod_image)}});">
                    <div class="desc">
                        <p class="meta-prod d-flex">
                          <form action="add_cart" method="POST" class="meta-prod d-flex">
                            @csrf
                            <input type="hidden" value="{{$product->id}}" name="product_id">
                            <input type="hidden" value="1" name="quntity">
                            <input type="hidden" name="product_price" value="{{$product->prod_price}}"/>
                            

                            <button style="background-color: transparent ; border:none" type="submit" class="d-flex align-items-center justify-content-center meta-prod d-flex"> 
                             <a href="" class="d-flex align-items-center justify-content-center"> <span class="flaticon-shopping-bag"></span></a>
                            </button>
                            
                          <a href="/single/{{$product->id}}" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                          </form>
                         
                        </p>
                    </div>
                </div>
                <div class="text text-center">
                    {{-- <span class="sale">Sale</span> --}}
                    @foreach ($assoc as $assocss)
                      @if ($assocss->id == $product->assoc_id)
                      <span class="category">{{$assocss->assoc_name}}</span>
                      @endif  
                    @endforeach
                    <h2>{{$product->prod_name}}</h2>
                  <span class="price">{{$product->prod_price}} JOD</span></p>
                </div>
            </div>
        </div>
    @endforeach
                 
              </div>
              <div class="row justify-content-center">
                  <div class="col-md-4">
                      <a href="/product" class="btn btn-primary d-block">View All Products <span class="fa fa-long-arrow-right"></span></a>
                  </div>
              </div>
          </div>
      </section>

      

  <section class="ftco-section testimony-section img" style="background-image: url({{asset('style/images/bg_4.jpg')}});">
      <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <span class="subheading">Testimonial</span>
          <h2 class="mb-3">Happy Clients</h2>
        </div>
      </div>
      <div class="row ftco-animate">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel ftco-owl">
            <div class="item">
              <div class="testimony-wrap py-4">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url({{asset('style/images/person_1.jpg')}})"></div>
                      <div class="pl-3">
                          <p class="name">Roger Scott</p>
                          <span class="position">Marketing Manager</span>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url({{asset('style/images/person_2.jpg')}})"></div>
                      <div class="pl-3">
                          <p class="name">Roger Scott</p>
                          <span class="position">Marketing Manager</span>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url({{asset('style/images/person_3.jpg')}})"></div>
                      <div class="pl-3">
                          <p class="name">Roger Scott</p>
                          <span class="position">Marketing Manager</span>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url({{asset('style/images/person_1.jpg')}})"></div>
                      <div class="pl-3">
                          <p class="name">Roger Scott</p>
                          <span class="position">Marketing Manager</span>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url({{asset('style/images/person_2.jpg')}})"></div>
                      <div class="pl-3">
                          <p class="name">Roger Scott</p>
                          <span class="position">Marketing Manager</span>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


      
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Blog</span>
          <h2>Recent Blog</h2>
        </div>
      </div>
      <div class="row d-flex">
        <div class="col-lg-6 d-flex align-items-stretch ftco-animate">
            <div class="blog-entry d-flex">
                <a href="/" class="block-20 img" style="background-image: url({{asset('style/images/image_1.jpg')}});">
            </a>
            <div class="text p-4 bg-light">
                <div class="meta">
                    <p><span class="fa fa-calendar"></span> 23 April 2020</p>
                </div>
              <h3 class="heading mb-3"><a href="#">The Recipe from a Winemaker’s Restaurent</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <a href="#" class="btn-custom">Continue <span class="fa fa-long-arrow-right"></span></a>

            </div>
          </div>
        </div>
        <div class="col-lg-6 d-flex align-items-stretch ftco-animate">
            <div class="blog-entry d-flex">
                <a href="/" class="block-20 img" style="background-image: url({{asset('style/images/image_2.jpg')}});">
            </a>
            <div class="text p-4 bg-light">
                <div class="meta">
                    <p><span class="fa fa-calendar"></span> 23 April 2020</p>
                </div>
              <h3 class="heading mb-3"><a href="#">The Recipe from a Winemaker’s Restaurent</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <a href="#" class="btn-custom">Continue <span class="fa fa-long-arrow-right"></span></a>

            </div>
          </div>
        </div>
        <div class="col-lg-6 d-flex align-items-stretch ftco-animate">
            <div class="blog-entry d-flex">
                <a href="/" class="block-20 img" style="background-image: url({{asset('style/images/image_3.jpg')}});">
            </a>
            <div class="text p-4 bg-light">
                <div class="meta">
                    <p><span class="fa fa-calendar"></span> 23 April 2020</p>
                </div>
              <h3 class="heading mb-3"><a href="#">The Recipe from a Winemaker’s Restaurent</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <a href="#" class="btn-custom">Continue <span class="fa fa-long-arrow-right"></span></a>

            </div>
          </div>
        </div>
        <div class="col-lg-6 d-flex align-items-stretch ftco-animate">
            <div class="blog-entry d-flex">
                <a href="/" class="block-20 img" style="background-image: url({{asset('style/images/image_4.jpg')}});">
            </a>
            <div class="text p-4 bg-light">
                <div class="meta">
                    <p><span class="fa fa-calendar"></span> 23 April 2020</p>
                </div>
              <h3 class="heading mb-3"><a href="#">The Recipe from a Winemaker’s Restaurent</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <a href="#" class="btn-custom">Continue <span class="fa fa-long-arrow-right"></span></a>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>	
@endsection