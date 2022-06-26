@extends('admin.admin_master')

@section('admin_content')
<hr>
    <h2 class="mt-4">Orders</h2>

<!--Table-->
<table class="table table-hover table-fixed">

    <!--Table head-->
    <thead >
      <tr style="color: brown">
        <th class="p-3 text-center">#</th>
        <th class="p-3 text-center">User</th>
        <th class="p-3 text-center">Product Quantity</th>
        <th class="p-3 text-center">Order Amount</th>
        <th class="p-3 text-center">Order Date</th>
        
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
    </tr>
     
    </tbody>
    <!--Table body-->
  
  </table>
  <!--Table-->
@endsection