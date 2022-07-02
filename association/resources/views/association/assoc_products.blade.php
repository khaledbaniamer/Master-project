@extends('master')

@section('content')
<section class="hero-wrap hero-wrap-2 mb-4" style="background-image: url({{asset('style/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>Edit Association <i class="fa fa-chevron-right"></i></span></p>
          <h2 class="mb-0 bread">Edit Association</h2>
        </div>
      </div>
    </div>
  </section>

  <h2 class="mt-4">Products</h2>
  <a class="btn btn-primary" href="/admin/add_product">Add New</a>
<!--Table-->
<table class="table table-hover table-fixed">

  <!--Table head-->
  <thead >
    <tr style="color: brown">
      <th class="p-3 text-center">#</th>
      <th class="p-3 text-center">Image</th>
      <th class="p-3 text-center">Title</th>
      <th class="p-3 text-center">price</th>
      <th class="p-3 text-center">Created Date</th>
      <th class="p-3 text-center">Action</th>

    </tr>
  </thead>
  <!--Table head-->

  <!--Table body-->
  <tbody>
    <tr>
      <th class="text-center p-3">4</th>
      <td class="text-center p-3">Jerry</td>
      <td class="text-center p-3">Horwitz</td>
      <td class="text-center p-3">Italy</td>

      <td class="text-center p-3">41</td>
      <td class="text-center p-3">
          <a class="m-3" href="/admin/update_product"><i class="fa-solid fa-pen-to-square" style="font-size: 20px ;color:rgb(77, 235, 77)"></i></i></a>
          <a class="m-3" href=""><i class="fa-solid fa-eye" style="font-size: 20px ; color:rgba(50, 55, 116, 0.715)"></i></a>
          <a class="m-3" href=""><i class="fa-solid fa-trash-can" style="font-size: 20px ;color:red"></i></a>
      </td>
    </tr>
   
  </tbody>
  <!--Table body-->

</table>
@endsection