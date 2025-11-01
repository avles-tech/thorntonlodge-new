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
                    <h3>Room Preference</h3>
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
            {!! Form::open(['action' => ['RoomInfoController@update','1'], 'class' => 'form-horizontal form-label-left','role' => 'form', 'method' => 'POST']) !!}
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
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Total Number of beds</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" required name="bed" value="{{ $room_info->beds }}" required onclick="getSlugValue()" placeholder="SEO Title ..." class="form-control" />
                                    <input type="hidden" name="vacancies" class="form-control" id="form-field-tags" value="{{ $room_info->vacancies }}" placeholder="Keywords ..." />

                                </div>
                            </div>
                            <!--
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Total number of vacancies</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                </div>
                            </div>
                            -->
                        </div>
                        <div class="x_content">
                            <div class="ln_solid"></div>
                            <div class="form-group text-center">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
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
    <script src="/Adminassets/js/ace-elements.min.js"></script>
    <script src="/Adminassets/js/ace.min.js"></script>
    <!-- Switchery -->
    <script src="/Adminassets/vendors/switchery/dist/switchery.min.js"></script>
@endsection

