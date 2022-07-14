@extends('admin.admin_master')

@section('admin_content')
<hr>
    <h2 class="mt-4">Admins</h2>
    <a href="/admin/add_admin" class="btn btn-primary">Add New Admin</a>
    @if ($message = Session::get('delete'))
    <div class="alert alert-success">
    {{ $message }}
    </div>
    @endif

<!--Table-->
<table class="table table-hover table-fixed">

    <!--Table head-->
    <thead >
      <tr style="color: brown">
        <th class="p-3 text-center">#</th>
        <th class="p-3 text-center">Name</th>
        <th class="p-3 text-center">Email</th>
        <th class="p-3 text-center">Phone</th>
        <th class="p-3 text-center">Created at</th>
        <th class="p-3 text-center">Action</th>

        
      </tr>
    </thead>
    <!--Table head-->
  
    <!--Table body-->
    <tbody>
        @foreach ($admins as $admin)
            
       
      <tr>
        <th class="text-center p-3">{{$admin->id}}</th>
        <td class="text-center p-3">{{$admin->admin_name}}</td>
        <td class="text-center p-3">{{$admin->admin_email}}</td>
        <td class="text-center p-3">{{$admin->admin_phone}}</td>
        <td class="text-center p-3">{{$admin->created_at}}</td>
        <td class="text-center p-3">
            <a class="m-3" href="/admin/update_admin/{{$admin->id}}"><i class="fa-solid fa-pen-to-square" style="font-size: 20px ;color:rgb(77, 235, 77)"></i></i></a>

            <span class="text-center">
                <!-- Button HTML (to Trigger Modal) -->
                <a href="#t{{$admin->id}}" class="trigger-btn" data-toggle="modal"><i class="fa-solid fa-trash-can" style="font-size: 20px ;color:red"></i></a>
              </span>
              
              <!-- Modal HTML -->
              <div id="t{{$admin->id}}" class="modal fade">
                <div class="modal-dialog modal-confirm">
                  <div class="modal-content">
                    <div class="modal-header flex-column">						
                      <h4 class="modal-title w-100">Are you sure?</h4>	
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                      <p>Do you really want to delete these Manager? This process cannot be undone.</p>
                    </div>
                    <div class="modal-footer justify-content-center ">
                      <a href="/admin/categories" class="btn btn-secondary m-2" data-dismiss="modal">Cancel</a>
                      <a href="/admin/delete_manager/{{$admin->id}}" class="btn btn-danger m-2">Delete</a>
                    </div>
                  </div>
                </div>
              </div>
        
        </td>
    @endforeach
        
    </tr>
     
    </tbody>
    <!--Table body-->
  
  </table>
  <!--Table-->
@endsection