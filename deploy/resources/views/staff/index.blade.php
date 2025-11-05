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
                    <h3>Thornton Staffs</h3>
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
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Staff List</h2>
                            <ul class="nav navbar-right panel_toolbox">
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <p class="text-muted font-13 m-b-30">
                            </p>
                            <div class="clearfix">
                                <a href="/staff/create" class="btn btn-sm btn-success btn-space"><i class="ace-icon fa fa-plus bigger-80"></i> Add New Staff</a>
                                <a href="/staff" class="btn btn-space btn-sm  btn-info"><i class="ace-icon fa fa-refresh bigger-80"></i> Reload</a>
                                <a data-toggle="modal" data-target=".bs-deleteall-modal-sm" class="btn btn-sm  btn-space btn-danger" href="">
                                    <i class="ace-icon fa fa-trash-o bigger-150"></i>&nbsp; Bulk Delete
                                </a>
                                <hr/>
                            </div>
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Staff Category</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($staffs)>0)
                                    @foreach($staffs as $k=> $staff)
                                        <tr>
                                            <td>{{ ($k+1) }}</td>
                                            <td>
                                                <img width="70px" height="70px" alt="Staff {{ $staff->name }}" src="{{ asset((!isset($staff->image)) ? 'Uploads/staff_images/default-user.png' : 'Uploads/staff_images/'.$staff->image ) }}" />
                                            </td>
                                            <td><div class="truncate-ellipsis-title">{{ $staff->category }}</div></td>
                                            <td class="hidden-480">
                                                <div class="truncate-ellipsis-title">{{ $staff->name }}</div>
                                            </td>
                                            <td>
                                                <div class="action_button">
                                                    <a  title="Edit" class="label label-success lbl_pad" href="/staff/edit/{{$staff->id}}">
                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                    </a>
                                                    <a title="Delete" data-toggle="modal" onclick="delete_data('{{ $staff->id }}','{{ $staff->name }}')" data-target=".bs-delete-modal-sm" class="label label-danger lbl_pad" href="#">
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
                                        No Staffs results found!
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
                                            <h5 id="tagname"></h5>
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
        function delete_data(id,name) {
            var getid='ID: '+id;
            var tagname='Name: '+name;
            //:set the element values
            document.getElementById("tagname").innerHTML = tagname;
            document.getElementById("tagid").innerHTML = getid;
            //:Delete item
            $( ".id-btn-delete" ).on('click', function(e) {
                location.href = '/staff/'+id+'/delete';
            });
        }
        function delete_all_data() {
            location.href = '/staff/delete/bulk-delete';
        }

    </script>
@endsection

