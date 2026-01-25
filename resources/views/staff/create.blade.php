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
                    <h3>Create Staff</h3>
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
            {!! Form::open(['action' => 'StaffController@store', 'class' => 'form-horizontal form-label-left','role' => 'form', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Profile Image</h2>
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
                                                <input name="image" accept="image/x-png,image/gif,image/jpeg" type="file" id="id-input-file-4" />
                                            </div>
                                        </div>
                                        <label>
                                            <span class="lbl"> Allowed images only (png/gif/jpeg & max 2 MB)</span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Staff Information</h2>
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
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Staff Category</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="form-control" name="staff_category_id" data-placeholder="Choose Staff Category...">
                                        @if(count($categories)>0)
                                            @foreach($categories as $k=> $category)
                                                <option value="{{ $category->id }}" <?php if($k ==0){ echo 'selected';} ?>>{{ $category->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" required name="name" value=""  placeholder="Staff Name ..." class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Qualification</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" name="qualification" value=""  placeholder="Staff qualification (optional)..." class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xs-12">
                    <div class="x_panel">
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
                                    <button type="submit" class="btn btn-success">
                                        <i class="ace-icon fa fa-check icon-on-right"></i>
                                        Save Changes
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

    <script src="/Adminassets/js/ace-elements.min.js"></script>
    <script src="/Adminassets/js/ace.min.js"></script>
    <script type="text/javascript">
        jQuery(function($) {
            if(!ace.vars['touch']) {
                $('#id-input-file-4').ace_file_input({
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