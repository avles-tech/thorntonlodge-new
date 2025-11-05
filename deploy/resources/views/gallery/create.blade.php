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
    <body onload="get_type()">
    <!-- page content -->
    <div class="right_col" role="main" >
        @include('inc.messages')
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Upload Gallery Image</h3>
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
            {!! Form::open(['action' => 'GalleryController@store', 'class' => 'form-horizontal form-label-left','role' => 'form', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
            <div class="row">
                <!--
                <div class="col-md-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Gallery Tag Information</h2>
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
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gallery Tag</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <select class="form-control" name="category_id" id="gallery_name" onchange="get_type()" data-placeholder="Choose gallery...">
                                                @if(count($tags)>0)
                                                    @foreach($tags as $k=> $tag)
                                                        <option value="{{ $tag->id }}" <?php if($k ==0){ echo 'selected';} ?>>{{ $tag->title }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <img id="gallery_cover__image" style="width:185px;height:125px; border:2px solid grey; padding: 5px;" src="" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <div class="col-md-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Gallery Images</h2>
                            <input type="hidden" value="0" name="category_id" />
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
                                <label class="control-label col-sm-2 col-xs-12">Image Title</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" name="title" placeholder="Image Title ..." class="form-control" />
                                </div>
                            </div>
                            <br />
                            <div class="form-group">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input name="image[]" required accept="image/x-png,image/gif,image/jpeg,image/jpg" type="file" id="id-input-file-4" multiple />
                                            </div>
                                        </div>
                                        <label>
                                            <input type="checkbox" checked name="file-format" id="id-file-format" class="ace" />
                                            <span class="lbl"> Allow only images</span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group text-center">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-2">
                                    <a href="/gallerySection" class="btn btn-danger">
                                        <i class="ace-icon fa fa-arrow-left"></i>
                                        Back
                                    </a>
                                    <button type="reset" class="btn btn-warning" onclick="get_type()">
                                        <i class="ace-icon fa fa-refresh"></i>
                                        Reset
                                    </button>
                                    <button type="submit" class="btn btn-success">
                                        <i class="ace-icon fa fa-upload"></i>
                                        Upload Now
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
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

            function get_type() {
                var e = document.getElementById("gallery_name");
                var gallery_id = e.options[e.selectedIndex].value;
                $.ajax({
                    type: 'get',
                    url: '/get_gallery_type',
                    data: {id: gallery_id},
                    success: function (result) {
                        document.getElementById("gallery_cover__image").src= '/Uploads/gallery_cover_images/thumbnail/'+result.image;
                    }
                });

            }
        </script>
        <script type="text/javascript">
            jQuery(function($) {
                if(!ace.vars['touch']) {
                    $('#id-input-file-4').ace_file_input({
                        style: 'well',
                        btn_choose: 'Drop files here or click to choose, This is the sample text',
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

@endsection

