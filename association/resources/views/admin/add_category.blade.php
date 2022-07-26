@extends('admin.admin_master')

@section('admin_content')
<hr>
<h2>Add New Category</h2>
<div class="container" >
<form style="width: 50%" method="POST" action="add_category" enctype="multipart/form-data">
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
      <input type="text" class="form-control" placeholder="Enter Category Title ..." name="category_name" value="{{old('category_name')}}">
    </div>

    @error('category_name')
      <div style="color: #ff0000;">{{$message}}</div>
    @enderror

    <div class="mt-3">
      <label class="form-label">Category Image</label>
      <input type="file" class="form-control"  name="category_image">
    </div>

    @error('category_image')
      <div style="color: #ff0000;">{{$message}}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Add</button>
</form>
</div>
@endsection