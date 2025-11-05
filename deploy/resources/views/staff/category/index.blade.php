@extends('layout.admin')
@section('contitle')
    <title>{{$pagetitle}}</title>
    <!-- Datatables -->
    <link href="/Adminassets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/Adminassets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="/Adminassets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="/Adminassets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="/Adminassets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
@endsection
@section('content')
    <!-- /page content -->
    <div class="right_col" role="main">
        <div class="">
            @include('inc.messages')
            <div class="page-title">
                <div class="title_left">
                    <h3>Staff Categories</h3>
                </div>
                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                @if(isset($tagscategory))
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Update Category <small></small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="col-md-12 col-sm-12 col-xs-12 profile_left">
                                    {!! Form::open(['action' => 'StaffCategoryController@update', 'class' => 'form-horizontal form-label-left','role' => 'form', 'method' => 'POST']) !!}
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Title <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control col-md-7 col-xs-12 testword" data-validate-words="1" name="title" value="{{ $tagscategory->title }}" required="required" type="text">
                                        </div>
                                    </div>
                                    <input class="form-control col-md-7 col-xs-12 testword" data-validate-words="1" name="id" value="{{ $tagscategory->id }}" required="required" type="hidden">
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button type="reset" class="btn btn-warning">
                                                <i class="ace-icon fa fa-refresh"></i>
                                                Reset
                                            </button>
                                            <button type="submit" class="btn btn-success">
                                                <i class="ace-icon fa fa-check icon-on-right"></i>
                                                Save Changes
                                            </button>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                                </div>

                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Add New Category <small></small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="col-md-12 col-sm-12 col-xs-12 profile_left">
                                    {!! Form::open(['action' => 'StaffCategoryController@store', 'class' => 'form-horizontal form-label-left','role' => 'form', 'method' => 'POST']) !!}
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Title <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="title" class="form-control col-md-7 col-xs-12 testword" data-validate-words="1" value="" name="title" placeholder="Staff Category Title" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button type="reset" class="btn btn-warning">
                                                <i class="ace-icon fa fa-refresh"></i>
                                                Reset
                                            </button>
                                            <button type="submit" class="btn btn-success">
                                                <i class="ace-icon fa fa-check icon-on-right"></i>
                                                Save Changes
                                            </button>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                                </div>

                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Staff Categories List</h2>
                            <ul class="nav navbar-right panel_toolbox">

                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <p class="text-muted font-13 m-b-30">
                            </p>
                            <div class="clearfix">
                                <a href="/staff-category" class="btn btn-space btn-info"><i class="ace-icon fa fa-refresh bigger-80"></i> Reload</a>
                                <a title="Delete" data-toggle="modal" data-target=".bs-deleteall-modal-sm" class="btn btn-space btn-danger" href="#">
                                    <i class="ace-icon fa fa-trash-o bigger-150"></i>&nbsp; Bulk Delete
                                </a>
                                <hr/>
                            </div>
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Create Date</th>
                                    <th>Update Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($tags)>0)
                                    @foreach($tags as $k =>$tag)
                                        <tr>
                                            <td>
                                                {{ ($k+1) }}
                                            </td>
                                            <td><div class="truncate-ellipsis-title">{{ $tag->title }}</div></td>
                                            <td>{{ $tag->created_at }}</td>
                                            <td>{{ $tag->updated_at }}</td>
                                            <td>
                                                <div class="action_button">
                                                    <a  title="Edit" class="label label-success lbl_pad" href="/staff-category/edit/{{$tag->id}}">
                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                    </a>
                                                    <a title="Delete" data-toggle="modal" onclick="delete_data('{{ $tag->id }}','{{ $tag->title }}')" data-target=".bs-delete-modal-sm" class="label label-danger lbl_pad" href="#">
                                                        &nbsp;<i class="ace-icon fa fa-trash-o bigger-150"></i>&nbsp;
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <div class="alert alert-danger">
                                        <button type="button" class="close" style="color:white;" data-dismiss="alert">
                                            <i class="ace-icon fa fa-times"></i>
                                        </button>
                                        <strong>
                                            <i class="ace-icon fa fa-exclamation-triangle bigger-120"></i>
                                            OOP's!
                                        </strong>
                                        No Post category results found!
                                        <br/>
                                    </div>
                                @endif
                                </tbody>
                            </table>
                            <!-- Delete modal -->
                            <div class="modal fade bs-delete-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background: black">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                            </button>
                                            <h4 class="modal-title"><i class="ace-icon fa fa-info-circle"></i> Confirm Delete</h4>
                                        </div>
                                        <div class="modal-body">
                                            <h5 id="tagid"></h5>
                                            <h5 id="tagtitle"></h5>
                                            <h4><strong>Are you sure want to delete?</strong></h4>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                                            <button type="button" class="btn btn-danger id-btn-delete" data-dismiss="modal">Yes</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--end_delete_model -->
                            <!-- Delete modal -->
                            <div class="modal fade bs-deleteall-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background: black">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                            </button>
                                            <h4 class="modal-title"><i class="ace-icon fa fa-info-circle"></i> Confirm Delete All</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure want to delete all records?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                                            <button type="button" class="btn btn-danger" onclick="delete_all_data()" data-dismiss="modal">Yes</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--end_delete_model -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /page content -->
    <hr/>
@endsection
@section('extra_script')
    @include('inc.script')
    <!-- Datatables -->
    <script src="/Adminassets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/Adminassets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="/Adminassets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/Adminassets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="/Adminassets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="/Adminassets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/Adminassets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/Adminassets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="/Adminassets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="/Adminassets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/Adminassets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="/Adminassets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="/Adminassets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="/Adminassets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="/Adminassets/vendors/pdfmake/build/vfs_fonts.js"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>-->
    <script type="text/javascript">
        function delete_data(id,title) {
            var getid='ID: '+id;
            var tagtitle='Title: '+title;
            //:set the element values
            document.getElementById("tagtitle").innerHTML = tagtitle;
            document.getElementById("tagid").innerHTML = getid;
            //:Delete item
            $( ".id-btn-delete" ).on('click', function(e) {
                location.href = '/staff-category/'+id+'/delete';
            });
        }
        function delete_all_data() {
            location.href = '/staff-category/delete/bulk-delete';
        }

    </script>
@endsection

