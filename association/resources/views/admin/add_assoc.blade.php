@extends('admin.admin_master')

@section('admin_content')
<hr>
<h2>Add New Association</h2>
<div class="container" >

<form style="width: 50%" action="add_assoc" method="POST" enctype="multipart/form-data">
  @csrf

  @if ($message = Session::get('success'))
    <div class="alert alert-success">
    {{ $message }}
    </div>
  @endif


    <div class="mt-3">
      <label class="form-label">Association Name</label>
      <input type="text" class="form-control" placeholder="Enter Association Name ..." name="assoc_name">
    </div>

    @error('assoc_name')
     <div style="color: #ff0000;">{{$message}}</div>
    @enderror

    <div class="mt-3">
      <label class="form-label">Association Address</label>
      <input type="text" step=".01" class="form-control" placeholder="Enter Association Address ..." name="assoc_address">
    </div>

    @error('assoc_address')
      <div style="color: #ff0000;">{{$message}}</div>
    @enderror

    <div class="mt-3">
      <label class="form-label">Association Phone</label>
      <input type="text" class="form-control" placeholder="Enter Association Phone ..." name="assoc_phone">
    </div>

    @error('assoc_phone')
      <div style="color: #ff0000;">{{$message}}</div>
    @enderror
    
    <div class="mt-3">
      <label class="form-label">Association Email</label>
      <input type="email" class="form-control" placeholder="Enter Association Email ..." name="assoc_email">
    </div>
    @error('assoc_email')
      <div style="color: #ff0000;">{{$message}}</div>
    @enderror
    
    <div class="mt-3">
      <label class="form-label">Association Date</label>
      <input type="text" min="1960" max="2022" class="form-control" placeholder="Enter Association Date ..." name="assoc_date">
    </div>
    @error('assoc_date')
      <div style="color: #ff0000;">{{$message}}</div>
    @enderror
    
    
    <div class="mt-3">
      <label class="form-label">Association Manager</label>
      <select name="assoc_managers" class="form-control" id="">
        <option value="" disabled selected>Choose Manager</option>
        @foreach ($managers as $manger)
        <option value="{{$manger->id}}">{{$manger->manager_name}}</option>
        @endforeach
      </select>
    </div>
    
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
      <textarea type="text"   class = "form-control"placeholder = "Association Description" name="assoc_description"></textarea>
    </div>
    @error('assoc_description')
      <div style="color: #ff0000;">{{$message}}</div>
    @enderror
    
    <button type="submit" class="btn btn-primary">Add</button>
</form>
</div>
@endsection