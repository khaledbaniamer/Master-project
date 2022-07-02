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

<section>

    <div class="container" >
    <h2>Add New Association</h2>
    <a class="btn btn-primary" href="/assoc_products/{{$assoc->id}}">Products</a>
<form style="width: 50%" action="update_assoc" method="POST" enctype="multipart/form-data">
  @csrf
<input type="hidden" value="{{$assoc->id}}" name="assoc_id" />
  @if ($message = Session::get('success'))
    <div class="alert alert-success">
    {{ $message }}
    </div>

  @endif


    <div class="mt-3">
      <label class="form-label">Association Name</label>
      <input type="text" class="form-control" placeholder="Enter Association Name ..." name="assoc_name" value="{{$assoc->assoc_name}}">
    </div>

    @error('assoc_name')
     <div style="color: #ff0000;">{{$message}}</div>
    @enderror

    <div class="mt-3">
      <label class="form-label">Association Address</label>
      <input type="text" step=".01" class="form-control" placeholder="Enter Association Address ..." name="assoc_address" value="{{$assoc->assoc_location}}">
    </div>

    @error('assoc_address')
      <div style="color: #ff0000;">{{$message}}</div>
    @enderror

    <div class="mt-3">
      <label class="form-label">Association Phone</label>
      <input type="text" class="form-control" placeholder="Enter Association Phone ..." name="assoc_phone" value="{{$assoc->assoc_phone}}">
    </div>

    @error('assoc_phone')
      <div style="color: #ff0000;">{{$message}}</div>
    @enderror
    
    <div class="mt-3">
      <label class="form-label">Association Email</label>
      <input type="email" class="form-control" placeholder="Enter Association Email ..." name="assoc_email" value="{{$assoc->assoc_email}}">
    </div>
    @error('assoc_email')
      <div style="color: #ff0000;">{{$message}}</div>
    @enderror
    
    <div class="mt-3">
      <label class="form-label">Association Date</label>
      <input type="text" min="1960" max="2022" class="form-control" placeholder="Enter Association Date ..." name="assoc_date"  value="{{$assoc->assoc_date}}">
    </div>
    @error('assoc_date')
      <div style="color: #ff0000;">{{$message}}</div>
    @enderror
    
    
    {{-- <div class="mt-3">
      <label class="form-label">Association Manager</label>
      <select name="assoc_managers" class="form-control" id="">
        <option value="" disabled selected>Choose Manager</option>
        @foreach ($managers as $manger)
        @if ($manger->id == $assoc->assoc_manager_id)
        <option value="{{$manger->id}}" selected>{{$manger->manager_name}}</option>
        @endif
        @if ($manger->id != $assoc->assoc_manager_id)
            
        <option value="{{$manger->id}}">{{$manger->manager_name}}</option>
        @endif
        @endforeach
      </select>
    </div> --}}
    
    @error('assoc_managers')
      <div style="color: #ff0000;">{{$message}}</div>
    @enderror
    
    <div class="mt-3">
      <label class="form-label">Association Image</label>
      <input type="file" class="form-control"  name="assoc_image">
    </div>
    @error('assoc_image')
      <div style="color: #ff0000;">{{$message}}</div>
    @enderror
    
    <div class="mt-3">
      <label class="form-label">Association Description</label>
      <textarea type="text"   class = "form-control"placeholder = "Association Description" name="assoc_description">{{$assoc->assoc_description}}</textarea>
    </div>
    @error('assoc_description')
      <div style="color: #ff0000;">{{$message}}</div>
    @enderror

    <div class="mt-3 mb-3">
        <img src="{{asset($assoc->assoc_image)}}" alt="" width="100px" height="100px">
    </div>
    
    <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
</section>

  @endsection