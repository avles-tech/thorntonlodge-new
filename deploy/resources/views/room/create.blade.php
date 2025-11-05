@extends('layout.admin')
@section('contitle')
    <title>{{$pagetitle}}</title>
    <!-- Bootstrap -->
    <link href="{{asset('/Adminassets/css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" rel="stylesheet">
    <script src="/Adminassets/js/telerik-jquery.min.js"></script>
    <!-- Switchery -->
    <link href="/Adminassets/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
@endsection
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        @include('inc.messages')
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Add Room</h3>
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
            {!! Form::open(['action' => 'RoomController@store', 'class' => 'form-horizontal form-label-left','role' => 'form', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Room Information</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Room Title</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" required name="title" value=""  placeholder="Room title ..." class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Tile Slug</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" id="slug" name="slug" value="" required onclick="getSlugValue()" placeholder="Title Slug ..." class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Room Cover Image</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <div class="form-group">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input name="cover_image" accept="image/x-png,image/gif,image/jpeg" type="file" id="id-input-file-4" />
                                            </div>
                                        </div>
                                        <label>
                                            <input type="checkbox" checked name="file-format" id="id-file-format" class="ace" />
                                            <span class="lbl"> Allow only images</span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="x_panel">

                        <div class="x_content">
                            <br />
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Room Status</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="form-control" name="status" id="form-field-select-3" data-placeholder="Choose Status...">
                                        <option value="DRAFT" selected>DRAFT</option>
                                        <option value="PUBLISHED">PUBLISHED</option>
                                        <option value="PENDING">PENDING</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Room Content Excerpt</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="form-group">
                                <textarea name="description" class="form-control" rows="6" required placeholder="Excerpt text ..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Room Content</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="form-group">
                                {{ Form::textarea('body','',['id'=>'article-ckeditor', 'required','placeholder'=>'About Project Content ...', 'class'=>'col-xs-12 col-sm-12', 'row'=>'9'])}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>SEO info</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">SEO Title</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" required id="seotl" name="seotitle" value="" required onclick="getSlugValue()" placeholder="SEO Title ..." class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Keywords</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" name="keywords" class="form-control" id="form-field-tags" value="" placeholder="Keywords ..." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Meta Description</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <textarea name="meta_description" maxlength="150" class="form-control" row="10" placeholder="SEO Meta description ..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="x_content">
                            <div class="ln_solid"></div>
                            <div class="form-group text-center">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                    <a href="/roomSection" class="btn btn-danger">
                                        <i class="ace-icon fa fa-arrow-left"></i>
                                        Back
                                    </a>
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
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <!-- /page content -->
    <hr/>
@endsection
@section('extra_script')
    @include('inc.script')
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );

    </script>
    <script language="javascript">
        function getSlugValue() {
            var str = document.getElementsByName('title')[0].value;
            document.getElementById("seotl").value = str;
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
                $('#id-input-file-4').ace_file_input({
                    style: 'well',
                    btn_choose: 'Drop files here or click to choose',
                    btn_change: null,
                    no_icon: 'ace-icon fa fa-cloud-upload',
                    droppable: true,
                    thumbnail: 'small'//large | fit
                    //,icon_remove:null//set null, to hide remove/reset button

                    ,
                    preview_error : function(filename, error_code) {
                        //name of the file that failed
                        //error_code values
                        //1 = 'FILE_LOAD_FAILED',
                        //2 = 'IMAGE_LOAD_FAILED',
                        //3 = 'THUMBNAIL_FAILED'
                        //alert(error_code);
                    }

                }).on('change', function(){
                    //console.log($(this).data('ace_input_files'));
                    //console.log($(this).data('ace_input_method'));
                });

            }
        });
    </script>

    <script src="/Adminassets/js/ace-elements.min.js"></script>
    <script src="/Adminassets/js/ace.min.js"></script>
    <!-- Switchery -->
    <script src="/Adminassets/vendors/switchery/dist/switchery.min.js"></script>
@endsection

