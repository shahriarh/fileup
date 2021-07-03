@extends('admin.adminmaster')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Category list 
      </div>
      <div class="card-body">
       
        <table class="table table-hover table-striped">
          <thead>
            <tr>
              <th>SL</th>
              <th>Name</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
          
          @foreach($Categories as $row)
            <tr>
              <td>#</td>
              <td>{{ $row->name }}</td> 
              <td>
              
              
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit" data-whatever="@mdo">Edit</button>
              <button class="btn btn-danger">Delete</button>
              

              
              

              <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="{{route('category.list')}}">
                         @csrf
                        <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Category:</label>
                          <input type="text" class="form-control" id="recipient-name">
                        </div>
                      
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save Changes</button>
                    </div>
                  </div>
                </div>
              </div>


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
