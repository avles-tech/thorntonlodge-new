@extends('layout.admin')
@section('contitle')
    <title>{{$pagetitle}}</title>
    <!-- Datatables -->
    <link href="/Adminassets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/Adminassets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="/Adminassets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="/Adminassets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="/Adminassets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{asset('/Adminassets/css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" rel="stylesheet">
    <script src="/Adminassets/js/telerik-jquery.min.js"></script>
    <!-- Switchery -->
    <link href="/Adminassets/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
@endsection
@section('content')
    <!-- /page content -->
    <div class="right_col" role="main">
        <div class="">
            @include('inc.messages')
            <div class="page-title">
                <div class="title_left">
                    <h3>Gallery Categories</h3>
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
                @if($tagviewid ==0)
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Add New Gallery Category <small></small></h2>
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
                                    {!! Form::open(['action' => 'GalleryTagController@store', 'class' => 'form-horizontal form-label-left','role' => 'form', 'method' => 'POST','enctype'=>'multipart/form-data']) !!}
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Title <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="name" class="form-control col-md-7 col-xs-12 testword" value="" name="title" placeholder="Category Name" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Slug <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="slug" name="slug" value="" required="required" placeholder="Category Slug ..." onClick="getSlugValue()" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Order <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="number" name="order" value="1" required  placeholder="Category Order ..." class="col-xs-12 col-sm-12" />
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Upload Cover Image <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="images" type="file" id="id-input-file-2" accept="image/x-png,image/jpeg,image/JPG,image" />
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
                                                Save & Changes
                                            </button>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                                </div>

                            </div>
                        </div>
                    </div>
                @endif
                @if($tagviewid >0)
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Edit {{ $tagscategory->name }} Category</h2>
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
                                    {!! Form::open(['action' => ['GalleryTagController@update',$tagscategory->id], 'class' => 'form-horizontal form-label-left','role' => 'form', 'method' => 'POST','enctype'=>'multipart/form-data']) !!}
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Title <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="name" class="form-control col-md-7 col-xs-12 testword" value="{{ $tagscategory->title }}" name="title" placeholder="Category Name" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Slug <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="slug" name="slug" value="{{ $tagscategory->slug }}" required="required" placeholder="Category Slug ..." onClick="getSlugValue()" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Order <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="number" name="order" value="1" required  placeholder="{{ $tagscategory->order }}" class="col-xs-12 col-sm-12" />
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Upload Cover Image <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <div class="fallback col-sm-12 text-center" >
                                                    <img class="well" id="myImg" style="width:185px;height:185px;" src="/Uploads/gallery_cover_images/{{$tagscategory->image}}" class="img-responsive" alt="{{$tagscategory->title}}">
                                                </div>
                                            </div>
                                            <input name="image_new" type="file" id="id-input-file-2" accept="image/x-png,image/jpeg,image/JPG,image" />
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <a href="/gallerytagSection" class="btn btn-danger">
                                                <i class="ace-icon fa fa-times"></i>
                                                Cancel
                                            </a>
                                            <button type="reset" class="btn btn-warning">
                                                <i class="ace-icon fa fa-refresh"></i>
                                                Reset
                                            </button>
                                            {{Form::hidden('_method', 'PUT')}}
                                            <button type="submit" class="btn btn-success">
                                                <i class="ace-icon fa fa-check icon-on-right"></i>
                                                Save & Changes
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
                            <h2>Gallery Categories List</h2>
                            <ul class="nav navbar-right panel_toolbox">

                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <p class="text-muted font-13 m-b-30">
                            </p>
                            <div class="clearfix">
                                <a href="/gallerytagSection" class="btn btn-space btn-info"><i class="ace-icon fa fa-refresh bigger-80"></i> Reload</a>
                                <a title="Delete" data-toggle="modal" data-target=".bs-deleteall-modal-sm" class="btn btn-space btn-danger" href="#">
                                    <i class="ace-icon fa fa-trash-o bigger-150"></i>&nbsp; Bulk Delete
                                </a>
                                <hr/>
                            </div>
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Slug</th>
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
                                            <td>
                                                <a href="/Uploads/gallery_cover_images/{{$tag->image}}" data-rel="colorbox">
                                                    <img width="100px" height="70px" alt="{{$tag->image}}" src="/Uploads/gallery_cover_images/{{$tag->image}}" />
                                                </a>
                                            </td>
                                            <td><div class="truncate-ellipsis-title">{{ $tag->title }}</div></td>
                                            <td><div class="truncate-ellipsis-title">{{$tag->slug}}</div></td>
                                            <td>{{ $tag->created_at }}</td>
                                            <td>{{ $tag->updated_at }}</td>
                                            <td>
                                                <div class="action_button">
                                                    <a  title="View" class="label label-info lbl_pad" target="_blank" href="/gallery-tag-{{$tag->slug}}">
                                                        <i class="ace-icon fa fa-eye bigger-130"></i>
                                                    </a>
                                                    <a  title="Edit" class="label label-success lbl_pad" href="/gallerytagSection/{{$tag->id}}/edit">
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
                                        No Gallery category results found!
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
                                            <p style="color:red;">Note: This will be delete all project information/data used by this category/tag...</p>
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
                                            <p style="color:red;">Note: This will be delete all project information/data as well...</p>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script type="text/javascript">
        function delete_data(id,title) {
            var getid='ID: '+id;
            var tagname='Title: '+title;
            //:set the element values
            document.getElementById("tagname").innerHTML = tagname;
            document.getElementById("tagid").innerHTML = getid;
            //:Delete item
            $( ".id-btn-delete" ).on('click', function(e) {
                location.href = '/gallerytagSection/'+id+'/delete';
            });
        }
        function delete_all_data() {
            location.href = '/gallerytagSection/delete/bulk-delete';
        }

    </script>
    <script language="javascript">
        function getSlugValue() {
            var str = document.getElementsByName('title')[0].value;
            var i = 0, strLength = str.length;
            for(i; i < strLength; i++) {
                str=str.replace(/[^\w-]+/g,'-')
            }
            document.getElementById("slug").value = str.toLowerCase();

        }
    </script>
    <script type="text/javascript">
        jQuery(function($) {
            if(!ace.vars['touch']) {
                $('#id-input-file-1 , #id-input-file-2').ace_file_input({
                    no_file:'No File ...',
                    btn_choose:'Choose',
                    btn_change:'Change',
                    droppable:false,
                    onchange:null,
                    thumbnail:false //| true | large
                    //whitelist:'gif|png|jpg|jpeg'
                    //blacklist:'exe|php'
                    //onchange:''
                    //
                });
            }
        });
    </script>
    <script src="/Adminassets/js/ace-elements.min.js"></script>
    <script src="/Adminassets/js/ace.min.js"></script>
@endsection



























