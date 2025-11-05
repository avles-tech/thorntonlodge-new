@extends('layout.admin')
@section('contitle')
  <title>{{$pagetitle}}</title>
@endsection
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Thornton Lodge User Profile</h3>
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
                            <h2>Admin information <small></small></h2>
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
                                {!! Form::open(['action' => ['DashboardController@updateUser',1],'class'=>'form-horizontal form-label-left','novalidate', 'method' => 'POST']) !!}
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Username <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" readonly value="{{Auth::user()->name}}" name="name" placeholder="both name(s) e.g Jon Doe" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="email" id="email" name="email" value="{{Auth::user()->email}}" required="required" readonly class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="password" class="control-label col-md-3">Password</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="password" type="password" readonly class="form-control col-md-12 col-xs-12" data-validate-length="6,8" name="password" required Placeholder='Password'>
                                        </div>
                                    </div>
                                    <div class="item form-group" id="pwd_confirm" style="display:none">
                                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="password-confirm"  type="password" class="form-control col-md-12 col-xs-12"  data-validate-linked="password" name="password_confirmation" required Placeholder='Confirmation Password'>
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button type="button" id="edit_btn" class="btn btn-success">Edit Profile</button>
                                            <button style="display:none" type="reset" id="reset_btn" class="btn btn-primary">Reset</button>
                                            {{Form::hidden('_method', 'PUT')}}
                                            {{ Form::submit('Submit',['class'=>'btn btn-success','style'=>'display:none', 'id'=>'submit_btn' ,'name'=>'Save changes'])}}
                                            <button style="display:none" type="reset" class="btn btn-danger" id="cancel_btn">Cancel</button>
                                        </div>
                                    </div>
                                {!! Form::close() !!}
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /page content -->
   <hr/>
    <script>
        //:Edit button Event
        document.getElementById('edit_btn').onclick = function() {
            document.getElementById('name').readOnly = false;
            document.getElementById('email').readOnly = false;
            document.getElementById('password').readOnly = false;
            var edit_btn=document.getElementById('edit_btn');
            var submit_btn=document.getElementById('submit_btn');
            var cancel_btn=document.getElementById('cancel_btn');
            var reset_btn=document.getElementById('reset_btn');
            var pwdConfirm=document.getElementById('pwd_confirm');

            //:Hide the button
            edit_btn.style.display='none';

            //: Show the button
            submit_btn.style.display='';
            cancel_btn.style.display='';
            reset_btn.style.display='';
            pwdConfirm.style.display='';
        };

        //:Cancel button Event
        document.getElementById('cancel_btn').onclick = function() {
            document.getElementById('name').readOnly = true;
            document.getElementById('email').readOnly = true;
            document.getElementById('password').readOnly = true;
            var edit_btn=document.getElementById('edit_btn');
            var submit_btn=document.getElementById('submit_btn');
            var cancel_btn=document.getElementById('cancel_btn');
            var reset_btn=document.getElementById('reset_btn');
            var pwdConfirm=document.getElementById('pwd_confirm');

            //:Hide the button
            edit_btn.style.display='';

            //: Show the button
            submit_btn.style.display='none';
            cancel_btn.style.display='none';
            reset_btn.style.display='none';
            pwdConfirm.style.display='none';
        };
    </script>
    @endsection
@section('extra_script')
    @include('inc.script')
    <!-- Skycons -->
    <script src="/Adminassets/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="/Adminassets/vendors/Flot/jquery.flot.js"></script>
    <script src="/Adminassets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="/Adminassets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="/Adminassets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="/Adminassets/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="/Adminassets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="/Adminassets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/Adminassets/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="/Adminassets/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="/Adminassets/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="/Adminassets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="/Adminassets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/Adminassets/vendors/moment/min/moment.min.js"></script>
    <script src="/Adminassets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
@endsection