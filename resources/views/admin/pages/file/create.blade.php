@extends('admin.adminmaster')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<div id="app" class="container">
<div class="card card-sucess">
    <div class="card-header">
    <h3 class="card-title">Add File </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('fileupload.create')}}" method="post" enctype="multipart/form-data">
                @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
        </div>    
      
       
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter code">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Phone </label>
            <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter category">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Address </label>
            <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="Enter description">
        </div>
      

        <div class="form-group ">
            <span class="text-small text-info"></span>
            {{-- <label for="avatar" class="col-md-4 col-form-label text-md-right">Please Upload Product Image</label> --}}
           
                <input id="file" type="file" class="form-control @error('photo') is-invalid @enderror" name="image" >

                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
         
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