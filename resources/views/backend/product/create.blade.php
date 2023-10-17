      @include('backend.header')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
              <div class="container-fluid">
                  <div class="row mb-2">
                      <div class="col-sm-12">
                          <h1 style="color: green;">General Form

                              <a href="{{route('product.store')}}" class="btn btn-primary float-right">Product List</a>
                          </h1>
                      </div>
                      <div class="col-sm-6">
                          <ol class="breadcrumb float-sm-right">
                              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">General Form</li> -->
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
                                  <h3 style="height: 20px;" class="card-title">Product form</h3>
                              </div>
                          </div>
                          <!-- /.card-header -->
                          <!-- form start -->

                          @if($msg = Session::get('success'))
                          <div class="alert alert-danger">
                              <p>{{$msg}}</p>
                          </div>
                          @endif

                          <!-- error ko lagi -->
                          @if ($errors->any())
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                          @endif

                          <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                              @csrf

                              <div class="form-group">
                                  <label for="exampleInputName">Product Name</label>
                                  <input type="text" class="form-control" value="{{old('Name')}}" name="Name" placeholder="Enter name">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputQuantity">Quantity</label>
                                  <input type="text" class="form-control" value="{{old('Quantity')}}" name="Quantity" placeholder="Quantity">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPrice">Price</label>
                                  <input type="text" class="form-control" value="{{old('Price')}}" name="Price" placeholder="Price">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputDescription">Description</label>
                                  <textarea name="Description" class="form-control" id="" cols="30" rows="10" placeholder="Descriotion"></textarea>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputImage">Image</label>
                                  <input type="file" class="form-control" name="Image" placeholder="image" height="100" width="100" alt="">
                              </div>


                              <!-- /.card-body -->

                              <div class="card-footer">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                          </form>
                      </div>
                      <!-- /.card -->

                      @include('backend.footer')