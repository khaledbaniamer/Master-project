@extends('admin.admin_master')

@section('admin_content')
<hr>
    <h2 class="mt-4">Products</h2>
    <a class="btn btn-primary" href="/admin/add_assoc">Add New</a>
<!--Table-->
<table class="table table-hover table-fixed">

    <!--Table head-->
    <thead >
      <tr style="color: brown">
        <th class="p-3 text-center">#</th>
        <th class="p-3 text-center">Name</th>
        <th class="p-3 text-center">Address</th>
        <th class="p-3 text-center">Manager</th>
        <th class="p-3 text-center">Phone</th>
        <th class="p-3 text-center">Email</th>

      </tr>
    </thead>
    <!--Table head-->
  
    <!--Table body-->
    <tbody>
      @foreach ($associations as $assoc)
          
      
      <tr>
        <th class="text-center p-3">{{$assoc->id}}</th>
        <td class="text-center p-3">{{$assoc->assoc_name}}</td>
        <td class="text-center p-3">{{$assoc->assoc_location}}</td>
        <td class="text-center p-3">{{$assoc->manager_name}}</td>
        <td class="text-center p-3">{{$assoc->assoc_phone}}</td>

        <td class="text-center p-3">{{$assoc->assoc_email}}</td>
        <td class="text-center p-3">
            {{-- <a class="m-3" href="/admin/view_assoc"><i class="fa-solid fa-eye" style="font-size: 20px ; color:rgba(50, 55, 116, 0.715)"></i></a> --}}
            <a class="m-3" href="/admin/view_assoc"><i class="fa-solid fa-pen-to-square" style="font-size: 20px ;color:rgb(77, 235, 77)"></i></a>
            <a class="m-3" href=""><i class="fa-solid fa-trash-can" style="font-size: 20px ;color:red"></i></a>
        </td>
      </tr>
    @endforeach
  
  </table>
  <!--Table-->
@endsection