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

                            <a href="{{route('contactUs.index')}}" class="btn btn-primary float-right">Add Product</a>
                        </div>
                        <!-- /.card-header -->

                       

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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Comment</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php $i = 1; ?>
                                        @foreach($contacts as $contact)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$contact->Name}}</td>
                                        <td>{{$contact->Email}}</td>
                                        <td>{{$contact->Phone}}</td>
                                        <td>{{$contact->Comment}}</td>
                                       <td>
                                        <form action="{{route('contactUs.destroy',$contact->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="delete" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                       </td>
                                            
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