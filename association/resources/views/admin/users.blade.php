@extends('admin.admin_master')

@section('admin_content')
<hr>
    <h2 class="mt-4">Users</h2>
    <a href="/admin/add_user" class="btn btn-primary">Add New User</a>
<!--Table-->
<table class="table table-hover table-fixed">

    <!--Table head-->
    <thead >
      <tr style="color: brown">
        <th class="p-3 text-center">#</th>
        <th class="p-3 text-center">Name</th>
        <th class="p-3 text-center">Email</th>
        <th class="p-3 text-center">Address</th>
        <th class="p-3 text-center">Phone</th>
        <th class="p-3 text-center">Created at</th>
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
        <td class="text-center p-3"></td>
        <td class="text-center p-3"></td>
        <td class="text-center p-3"></td>
        <td class="text-center p-3">
            <a class="m-3" href="/admin/update_user"><i class="fa-solid fa-pen-to-square" style="font-size: 20px ;color:rgb(77, 235, 77)"></i></i></a>

            <a class="m-3" href=""><i class="fa-solid fa-trash-can" style="font-size: 20px ;color:red"></i></a>
        
        </td>
    </tr>
     
    </tbody>
    <!--Table body-->
  
  </table>
  <!--Table-->
@endsection