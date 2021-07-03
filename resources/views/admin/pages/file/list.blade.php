@extends('admin.adminmaster')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        File list 
      </div>
      <div class="card-body">
       
        <table class="table table-hover table-striped">
          <thead>
            <tr>
              <th>SL</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              {{-- <th>Address</th> --}}
              <th>Image</th>
             
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
          
          @foreach($files as $row)
            <tr>
              <td>#</td>
              <td>{{ $row->name }}</td> 
              <td>{{ $row->email }}</td> 
              <td>{{ $row->phone }}</td> 
              <td><img src="{{asset($row->image)}}" height="150px" width="150px" alt=""></td>
              {{-- <td>{{ $row->address }}</td>  --}}
            
              {{-- <td> elete</td>  --}}
              <td>
              
              <a href="" class="btn btn-primary "><b>Edit</b></a>
              <a href="#" class="btn btn-danger "><b>Delete</b></a>

              </td>
              
            </tr>
            @endforeach  
            
          </tbody>


        </table>
      </div>
    </div>

  </div>
</div>
<!-- main-panel ends -->
@endsection
