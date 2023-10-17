<!-- Content Wrapper. Contains page content -->
<!-- <div class="content-wrapper"> -->
<!-- Content Header (Page header) -->
<!-- <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2"> -->
<!-- <div class="col-sm-12">
                          <h1 style="color: green;">Product Form

                              <a href="{{route('product.store')}}" class="btn btn-primary float-right">Product List</a>
                          </h1>
                      </div> -->

<!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">General Form</li> -->
<!-- </ol>
                </div>
            </div> -->
</div><!-- /.container-fluid -->
</section>


<!-- <div class="container float-right ">
        <div class="row ">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-header">
                        <div class="card-body">
                            <h1 style="color: green;">Product list
                                <a href="{{route('product.create')}}" class="btn btn-success float-right">Add Product</a>
                            </h1>

                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>S.N</th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                <?php $i = 1; ?>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$product->Name}}</td>
                                    <td>{{$product->Quantity}}</td>
                                    <td>{{$product->Price}}</td>
                                    <td>{{$product->Description}}</td>
                                    <td><img src="/image/{{$product->Image}}" height="50" width="50" alt=""></td>
                                    <td>
                                        <a href="{{route('product.edit',$product->id)}}" class="btn btn-primary btn-sm">Edit</a>

                                        <form action="{{route('product.destroy',$product->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="delete" class="btn btn-danger btn-sm">Delete</button>
                                        </form>


                                    </td>

                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

@include('backend.header')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Product table</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Product table</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with minimal features & hover style</h3>

                            <a href="{{route('product.create')}}" class="btn btn-primary float-right">Add Product</a>
                        </div>
                        <!-- /.card-header -->

                        <!-- For Updated -->
                        @if($msg = Session::get('update'))
                        <div class="alert alert-primary">
                            <p>{{$msg}}</p>
                        </div>
                        @endif

                        <!-- For Deleted -->
                        @if($msg = Session::get('delete'))
                        <div class="alert alert-success">
                            <p>{{$msg}}</p>
                        </div>
                        @endif

                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>S.N</th>
                                        <th>Product Name</th>
                                        <th>Qantity</th>
                                        <th>Price</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php $i = 1; ?>
                                        @foreach($products as $product)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$product->Name}}</td>
                                        <td>{{$product->Quantity}}</td>
                                        <td>{{$product->Price}}</td>
                                        <td>{{$product->Description}}</td>
                                        <td><img src="Image/{{$product->Image}}" height="50" width="50" alt=""></td>
                                        <td>

                                            <form action="{{route('product.destroy',$product->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('product.edit',$product->id)}}" class="btn btn-primary btn-sm">Edit</a>

                                                <button type="delete" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                            @endforeach
                                    </tr>
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
<!-- /.content-wrapper -->
@include('backend.footer')