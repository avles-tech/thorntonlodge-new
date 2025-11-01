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
                    <h3>Edit Room Information</h3>
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
            {!! Form::open(['action' => ['RoomController@update',$room->id], 'class' => 'form-horizontal form-label-left','role' => 'form', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
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
                                    <input type="text" required name="title" value="{{ $room->title }}"  placeholder="Room title ..." class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Tile Slug</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" id="slug" name="slug" value="{{ $room->slug }}" required onclick="getSlugValue()" placeholder="Title Slug ..." class="form-control" />
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
                                            <div class="fallback col-sm-12 text-center" >
                                                <img class="well" id="myImg" style="width:185px;height:185px;" src="/Uploads/room_cover_images/{{$room->cover_image}}" class="img-responsive" alt="{{$room->title}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input name="cover_image" accept="image/x-png,image/jpeg,image/jpg,image" type="file" id="id-input-file-1" />
                                            </div>
                                        </div>
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
                                        <option value="DRAFT" <?php if($room->status=="DRAFT"){ echo'selected';} ?>>DRAFT</option>
                                        <option value="PUBLISHED" <?php if($room->status=="PUBLISHED"){ echo'selected';} ?>>PUBLISHED</option>
                                        <option value="PENDING" <?php if($room->status=="PENDING"){ echo'selected';} ?>>PENDING</option>
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
                                <textarea name="description" class="form-control" rows="6" required placeholder="Excerpt text ...">{{ $room->excerpt }}</textarea>
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
                                {{ Form::textarea('body',$room->body,['id'=>'article-ckeditor','required', 'placeholder'=>'About Room Content ...', 'class'=>'form-control', 'row'=>'9'])}}
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
                                    <input type="text" id="seotl" name="seotitle" value="{{ $room->seo_title }}" required onclick="getSlugValue()" placeholder="SEO Title ..." class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Keywords</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" name="keywords" class="form-control" id="form-field-tags" value="{{ $room->keyword }}" placeholder="Keywords ..." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Meta Description</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <textarea name="meta_description" maxlength="150" class="form-control" row="10" placeholder="SEO Meta description ...">{{ $room->meta_description }}</textarea>
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
    <script src="/Adminassets/js/ace-elements.min.js"></script>
    <script src="/Adminassets/js/ace.min.js"></script><!-- page specific plugin scripts -->

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
    <!-- Switchery -->
    <script src="/Adminassets/vendors/switchery/dist/switchery.min.js"></script>
@endsection

