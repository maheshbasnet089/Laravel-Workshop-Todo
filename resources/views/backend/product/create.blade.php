@extends('backend.main')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Product</h3>
              </div>
              @if($errors->any())
                @foreach($errors->all() as $error)
                  <p style="color:red">{{$error}}</p>
                @endforeach
              @endif
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/category/create" method="post">
                <div class="card-body">
                    @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Name" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">price</label>
                    <input type="number" class="form-control" name='price' id="exampleInputPassword1" placeholder="Price" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">description</label>
                    <input type="text" class="form-control" name="description" id="exampleInputEmail1" placeholder="Enter Description" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" class="form-control" name="image" id="exampleInputEmail1" placeholder="Name" required>
                  </div>
    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->




          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection