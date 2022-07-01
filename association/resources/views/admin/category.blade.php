@extends('admin.admin_master')

@section('admin_content')
<hr>
    <h2 class="mt-4">Categories</h2>
    <a class="btn btn-primary" href="/admin/add_category">Add New</a>


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
            {{-- <a class="m-3" href="/admin/delete_category/{{$category->id}}"><i class="fa-solid fa-trash-can" style="font-size: 20px ;color:red"></i></a> --}}
            
            <span class="text-center">
              <!-- Button HTML (to Trigger Modal) -->
              <a href="#t{{$category->id}}" class="trigger-btn" data-toggle="modal"><i class="fa-solid fa-trash-can" style="font-size: 20px ;color:red"></i></a>
            </span>
            
            <!-- Modal HTML -->
            <div id="t{{$category->id}}" class="modal fade">
              <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                  <div class="modal-header flex-column">						
                    <h4 class="modal-title w-100">Are you sure?</h4>	
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                    <p>Do you really want to delete these Category? This process cannot be undone.</p>
                  </div>
                  <div class="modal-footer justify-content-center ">
                    <a href="/admin/categories" class="btn btn-secondary m-2" data-dismiss="modal">Cancel</a>
                    <a href="/admin/delete_category/{{$category->id}}" class="btn btn-danger m-2">Delete</a>
                  </div>
                </div>
              </div>
            </div>

        </td>
      </tr>
      @endforeach
    </tbody>
    <!--Table body-->
  
  </table>
  <!--Table-->
@endsection