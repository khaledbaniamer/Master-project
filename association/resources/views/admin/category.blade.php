@extends('admin.admin_master')

@section('admin_content')
<hr>
    <h2 class="mt-4">Categories</h2>
    <a class="btn btn-primary" href="/admin/add_category">Add New</a>
<!--Table-->
<table class="table table-hover table-fixed">

    <!--Table head-->
    <thead >
      <tr style="color: brown">
        <th class="p-3 text-center">#</th>
        <th class="p-3 text-center">Image</th>
        <th class="p-3 text-center">Title</th>
        <th class="p-3 text-center">Action</th>

      </tr>
    </thead>
    <!--Table head-->
  
    <!--Table body-->
    <tbody>
      @foreach ($categories as $category)
      <tr>
        <th class="text-center p-3">{{$category->id}}</th>
        <td class="text-center p-3">
          <img src="{{url($category->category_image)}}" alt="" width="100px" height="100px">
        </td>
        <td class="text-center p-3">{{$category->category_name}}</td>
        <td class="text-center p-3">
            <a class="m-3" href="/admin/update_category/{{$category->id}}"><i class="fa-solid fa-pen-to-square" style="font-size: 20px ;color:rgb(77, 235, 77)"></i></i></a>
            <a class="m-3" href=""><i class="fa-solid fa-trash-can" style="font-size: 20px ;color:red"></i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
    <!--Table body-->
  
  </table>
  <!--Table-->
@endsection