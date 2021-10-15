@extends('admin.home.layout')
@section('main')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Starter Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Starter Page</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
    <div class="container-fluid">
        <div class="row">
          <!--*******************-->
          @include('admin.inc.message')
            <!--table-->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-10">
                                <h3 class="card-title">All Categories</h3>
                            </div>
                            <div class="col-2">
                                <button id="Mbtn" type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-delete">
                                    Add New
                                  </button>
                            </div>

                        </div>
                      </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name(en)</th>
                            <th>Name(ar)</th>
                            <th>Active</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                           @foreach($cats as $cat)
                            <tr>
                                <td>{{($loop->index)+1}}</td>
                                <td>{{$cat->name('en')}}</td>
                                <td>{{$cat->name('ar')}}</td>
                                <td>
                                   @if($cat->active==1)
                                     <button type="button" class="btn btn-block bg-success btn-xs" style="width:50px">opened</button>
                                    @else
                                    <button type="button" class="btn btn-block bg-danger btn-xs" style="width:50px">closed</button>
                                    @endif
                                </td>
                                <td>
                                    <button id="Mbtn" type="button" class="btn btn-default edit-btn" data-id="{{$cat->id}}" data-name-ar="{{$cat->name("ar")}}" data-name-en="{{$cat->name("en")}}" data-toggle="modal" data-target="#modal-update">
                                        <i class="fas fa-edit"></i>edit
                                    </button>
                                    <a href="{{url("dashboard/delete/$cat->id")}}" class="btn btn-app" style="min-width:40px;height:40px;">
                                        <i class="fas fa-trash-alt"></i>delete
                                    </a>
                                    <a href="{{url("dashboard/active/$cat->id")}}" class="btn btn-app" style="min-width:40px;height:40px;">
                                        <i class="fas fa-toggle-on"></i>
                                    </a>
                                </td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                      <div class="d-flex justify-content-center">
                       {{ $cats->links() }}
                      </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                </div>
            <!--table-->
            <!--*******************-->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
    <h5>Title</h5>
    <p>Sidebar content</p>
    </div>
</aside>
<!-- /.control-sidebar -->

<!--Model-->
<form id="modal_form" method="POST" action="{{url("dashboard/store")}}">
    @csrf
    <div class="modal fade show " id="modal-delete" style="display:none; padding-right: 16px;" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Add New</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">
             <div class="row">
                 <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name(ar)</label>
                        <input type="text" class="form-control" name="name_ar" placeholder="Enter email">
                      </div>
                 </div>
                </div>
             <div class="row">
                 <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Name(en)</label>
                        <input type="text" class="form-control" name="name_en" placeholder="Password">
                    </div>
                     </div>
                    </div>


            </div>
            <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit"  class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!--Model-->
</form>
<form id="form2" method="POST" action="{{url("dashboard/update")}}">
    @csrf
    <div class="modal fade show " id="modal-update" style="display:none; padding-right: 16px;" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Add New</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">
              <input  type="hidden" name="id" id="update-form-id"/>
             <div class="row">
                 <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name(ar)</label>
                        <input type="text" class="form-control" name="name_ar" id="update-form-name-ar" placeholder="Enter email">
                      </div>
                 </div>
                </div>
             <div class="row">
                 <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Name(en)</label>
                        <input type="text" class="form-control" name="name_en" id="update-form-name-en" placeholder="Password">
                    </div>
                     </div>
                    </div>
                </div>
                    <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit"  class="btn btn-primary" form="form2">Save changes</button>
            </div>
          </div>
        </div>
        <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!--Model-->
</form>
@endsection

@section('scripts')
  <script>
      $('.edit-btn').click(function(){
          let id=$(this).attr('data-id');
          let nameEn=$(this).attr('data-name-en');
          let nameAr=$(this).attr('data-name-ar');
          console.log(id,nameEn,nameAr);
          $('#update-form-id').val(id)
          $('#update-form-name-en').val(nameEn)
          document.getElementById('update-form-name-ar').value=nameAr
      })

  </script>
@endsection
