@extends ('backend.main')
@section ('content')


  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Categories</h1>
              <button><a href="/product/create">Add Product</a></button>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Product List</li>

              </ol>
            </div>
            @if(session()->has('message'))
            <div class="alert alert-success">
              {{session()->get('message')}}

            </div>
        
        @endif
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
            
              <!-- /.card -->
  
              <div class="card">
         
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>id</th>
                      <th>name</th>
                      <th>stock</th>
                      <th>price</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)

                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}
                            </td>
                            <td>{{$product->stock}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->created_at}}</td>
                            <td>
                                <button><a href="/product/{{$product->id}}">More</a></button>
                                <button><a href="/product/edit/{{$product->id}}">Edit</a></button>
                                <button><a href="/product/delete/{{$product->id}}">Delete</a></button>
                            </td>
                        </tr>
                        @endforeach
                   
                   
                    </tbody>
             
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>


@endsection