@extends('master')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('style/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Checkout <i class="fa fa-chevron-right"></i></span></p>
          <h2 class="mb-0 bread">Checkout</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
      <div class="container">
          <div class="row justify-content-center">
        <div class="col-xl-10 ftco-animate">
                      <form action="#" class="billing-form">
                          <h3 class="mb-4 billing-heading">Billing Details</h3>
                <div class="row align-items-end">
                <div class="col-md-12">
                  <div class="form-group">
                      <label for="firstname">Firt Name</label>
                    <input type="text" class="form-control" placeholder="" value="{{$user->user_name}}">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                      <label for="firstname">Address</label>
                    <input type="text" class="form-control" placeholder="" value="{{$user->user_location}}">
                  </div>
                </div>



                  <div class="w-100"></div>
                  <div class="col-md-6">
                  <div class="form-group">
                      <label for="phone">Phone</label>
                    <input type="text" class="form-control" placeholder="" value="{{$user->user_phone}}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="emailaddress">Email Address</label>
                    <input type="text" class="form-control" placeholder="" value="{{$user->user_email}}">
                  </div>
              </div>

              
              </div>
            </form><!-- END -->



            <div class="row mt-5 pt-3 d-flex">
                <div class="col-md-6 d-flex">
                    <div class="cart-detail cart-total p-3 p-md-4">
                        <h3 class="billing-heading mb-4">Cart Total</h3>
                        <p class="d-flex">
                                  <span>Subtotal</span>
                                  <span>{{$total}} JOD</span>
                              </p>
                              <p class="d-flex">
                                  <span>Delivery</span>
                                  <span>0.00 JOD</span>
                              </p>
                              <p class="d-flex">
                                  <span>Discount</span>
                                  <span>0.00 JOD</span>
                              </p>
                              <hr>
                              <p class="d-flex total-price">
                                  <span>Total</span>
                                  <span>{{$total}} JOD</span>
                              </p>
                              </div>
                </div>
                <div class="col-md-6">
                    <div class="cart-detail p-3 p-md-4">
                        <h3 class="billing-heading mb-4">Payment Method</h3>
                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <div class="radio">
                                             <label><input type="radio" name="optradio" class="mr-2" disabled> Direct Bank Tranfer</label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <div class="radio">
                                             <label><input type="radio" name="optradio" class="mr-2" disabled> PayPal</label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <div class="radio">
                                             <label><input type="radio" checked name="optradio" class="mr-2" aria-selected="true"> Cash </label>
                                          </div>
                                      </div>
                                  </div>

                                  <p><a href="#"class="btn btn-primary py-3 px-4">Place an order</a></p>
                              </div>
                </div>
            </div>
        </div> <!-- .col-md-8 -->
      </div>
      </div>
  </section>
@endsection