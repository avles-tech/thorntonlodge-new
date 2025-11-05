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
                    <h3>Edit Post</h3>
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
            {!! Form::open(['action' => ['PostController@update',$post->id], 'class' => 'form-horizontal form-label-left','role' => 'form', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Post Information</h2>
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
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Post Type</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="form-control" name="category_id" data-placeholder="Choose type...">
                                        @if(count($tags)>0)
                                            @foreach($tags as $k=> $tag)
                                                <option value="{{ $tag->id }}" <?php if($post->category_id ==$tag->id){ echo 'selected';} ?>>{{ $tag->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Post Title</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" required name="title" value="{{ $post->title }}"  placeholder="Post title ..." class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Tile Slug</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" id="slug" name="slug" value="{{ $post->slug }}" required onclick="getSlugValue()" placeholder="Title Slug ..." class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Author</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" name="author" value="{{ $post->author }}"  placeholder="Author Name ..." class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Post Cover Image</h2>
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
                                                <img class="well" id="myImg" style="width:185px;height:185px;" src="/Uploads/post_cover_images/{{$post->image}}" class="img-responsive" alt="{{$post->title}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input name="cover_image" accept="image/x-png,image/gif,image/jpeg" type="file" id="id-input-file-1" />
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
                        <div class="x_title">
                            <h2>Post Visible type</h2>
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
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Post Status</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="form-control" name="status" id="form-field-select-3" data-placeholder="Choose Status...">
                                        <option value="DRAFT" <?php if($post->status=="DRAFT"){ echo'selected';} ?>>DRAFT</option>
                                        <option value="PUBLISHED" <?php if($post->status=="PUBLISHED"){ echo'selected';} ?>>PUBLISHED</option>
                                        <option value="PENDING" <?php if($post->status=="PENDING"){ echo'selected';} ?>>PENDING</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Post Featured</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <br/>
                                    <input name="featured" class="flat"  <?php if($post->featured==1){ echo'checked';} ?> type="checkbox" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Post Body Excerpt</h2>
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
                                <textarea name="description" class="form-control" rows="6" required placeholder="Excerpt text ...">{{ $post->excerpt }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Post Body</h2>
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
                                {{ Form::textarea('body',$post->body,['id'=>'article-ckeditor','required', 'placeholder'=>'About Post Content ...', 'class'=>'form-control', 'row'=>'9'])}}
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
                                    <input type="text" id="seotl" name="seotitle" value="{{ $post->seo_title }}" required onclick="getSlugValue()" placeholder="SEO Title ..." class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Keywords</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" name="keywords" class="form-control" id="form-field-tags" value="{{ $post->keyword }}" placeholder="Keywords ..." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Meta Description</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <textarea name="meta_description" maxlength="150" class="form-control" row="10" placeholder="SEO Meta description ...">{{ $post->meta_description }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="x_content">
                            <div class="ln_solid"></div>
                            <div class="form-group text-center">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                    <a href="/postSection" class="btn btn-danger">
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

