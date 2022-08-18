@extends('master')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('style/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Products <i class="fa fa-chevron-right"></i></span></p>
          <h2 class="mb-0 bread">Products</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    
          <div class="container-fluid">
            
              <div class="row p-3">
                <div class="col-md-2 mx-4">
                    <div class="sidebar-box ftco-animate">
                    <div class="categories">
                      <h3>Product Types</h3>
                      <ul class="p-0">
                        <li class="{{Request::is("/product") ? '' : 'active'}}"><a href="/product">All <span class="fa fa-chevron-right"></span></a></li>   
                        @foreach ($categories as $categ)  
                            <li><a href="/category/{{$categ->id}}">{{$categ->category_name}} <span class="fa fa-chevron-right"></span></a></li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
        
                  <div class="sidebar-box ftco-animate">

                  </div>
                </div>
                
                  <div class="col-md-9">
                      <div class="row mb-4">
                        
                          <div class="col-md-12 d-flex justify-content-between align-items-center">
                              <h4 class="product-select">Select Types of Products</h4>
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
                         
                      <div class="row mt-5">
                {{-- <div class="col text-center">
                  <div class="block-27">
                    <ul>
                      <li><a href="#">&lt;</a></li>
                      <li class="active"><span>1</span></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">&gt;</a></li>
                    </ul>
                  </div>
                </div> --}}
              </div>
                  </div>

              </div>
          </div>
      </section>
@endsection