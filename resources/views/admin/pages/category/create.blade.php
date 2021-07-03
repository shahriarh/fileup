@extends('admin.adminmaster')

@section('content')

<div id="app" class="container">
<div class="card card-sucess">
    <div class="card-header">
    <h3 class="card-title">Add Category </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('category.create')}}" method="POST" enctype="multipart/form-data">
                @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
        </div>
       
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
    </div>

  
</div>



@endsection