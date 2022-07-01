@extends('admin.admin_master')

@section('admin_content')
<hr>
<h2>Update Category</h2>
<div class="container" >
<form style="width: 50%" method="POST" action="update_category" enctype="multipart/form-data">
  @csrf

      @if ($message = Session::get('success'))
          <div class="alert alert-success">
          {{ $message }}
          </div>

      @elseif($message = Session::get('fail'))
      <div class="alert alert-danger">
        {{ $message }}
        </div>
      @endif

      <div class="mt-3">
        <label class="form-label">Category Title</label>
        <input type="hidden" class="form-control" placeholder="Enter Product Title ..." name="category_id" value="{{$category->id}}">
      </div>

      <div class="mt-3">
        <img src="{{url($category->category_image)}}" alt="" width="100px" height="100px">
      </div>

    <div class="mt-3">
      <label class="form-label">Category Title</label>
      <input type="text" class="form-control" placeholder="Enter Product Title ..." name="category_name" value="{{$category->category_name}}">
    </div>

    @error('category_name')
      <div style="color: #ff0000;">{{$message}}</div>
    @enderror

    <div class="mt-3">
      <label class="form-label">Category Image</label>
      <input type="file" class="form-control" placeholder="Enter Product Title ..." name="category_image">
    </div>

    @error('category_image')
      <div style="color: #ff0000;">{{$message}}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection