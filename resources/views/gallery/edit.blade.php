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
                    <h3>Edit Project Image</h3>
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
            {!! Form::open(['action' => ['GalleryController@update',$image->id], 'class' => 'form-horizontal form-label-left','role' => 'form', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
            <div class="row">
                <!--
                <div class="col-md-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Project Information</h2>
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
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Name</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <select class="form-control" name="category_id" id="gallery_name" onchange="get_type()" data-placeholder="Choose gallery...">
                                                @if(count($tags)>0)
                                                    @foreach($tags as $k=> $tag)
                                                        <option value="{{ $tag->id }}" <?php if($image->tag_id ==$tag->id){ echo 'selected';} ?> >{{ $tag->title }}</option>
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
                </div> -->
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
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Image Title</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" name="title" value="{{ $image->title }}" placeholder="Image Title ..." class="form-control" />
                                </div>
                            </div>
                            <br />
                            <div class="form-group">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <div class="form-group">
                                                    <div class="fallback col-sm-12 text-center" >
                                                        <img class="well" id="myImg" style="width:185px;height:185px;" src="/Uploads/gallery_images/{{$image->image}}" class="img-responsive" alt="{{$image->title}}">
                                                    </div>
                                                </div>
                                                <input name="image" type="file" id="id-input-file-2" accept="image/x-png,image/jpeg,image/JPG,image" />
                                            </div>
                                        </div>
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
                                    {{Form::hidden('_method', 'PUT')}}
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


