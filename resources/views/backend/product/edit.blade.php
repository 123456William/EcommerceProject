      @include('backend.header')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
              <div class="container-fluid">
                  <div class="row mb-2">
                      <div class="col-sm-12">
                          <h1 style="color: green;">Product Form

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
                                  <h3 style="height: 20px;" class="card-title"></h3>
                              </div>
                          </div>
                              <!-- /.card-header -->
                              <!-- form start -->
                              <form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  @method('PUT')
                                  <div class="form-group">
                                      <label for="exampleInputName">Name</label>
                                      <input type="text" value="{{$product->Name}}" class="form-control" name="Name" placeholder="Enter name">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputQuantity">Quantity</label>
                                      <input type="text" value="{{$product->Quantity}}" class="form-control" name="Quantity" placeholder="quantity">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPrice">Price</label>
                                      <input type="text" value="{{$product->Price}}" class="form-control" name="Price" placeholder="price">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputDescription">Description</label>
                                      <textarea name="Description" value="{{$product->Description}}" class="form-control" id="" cols="30" rows="10"></textarea>
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputImage">Image</label>
                                      <input type="file" value="{{$product->Image}}" class="form-control" name="Image" placeholder="image">
                                  </div>

                                  <!-- /.card-body -->

                                  <div class="card-footer">
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                              </form>
                          </div>
                          <!-- /.card -->

                          @include('backend.footer')