<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @yield('contitle')
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="language" content="en">
        <meta name="robots" content="index,follow,all" />
        <meta name="Author" content="Thornton Lodge" />
        <meta name="HandheldFriendly" content="True">
        <meta name="description" content="Dashboard &amp; Thornton Lodge" />
        <link rel="shortcut icon" href="/images/favicon.png">

            <!-- Bootstrap -->
            <link href="{{asset('/Adminassets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
            <!-- Font Awesome -->
            <link href="{{asset('/Adminassets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
            <!-- NProgress -->
            <link href="{{asset('/Adminassets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
            <!-- iCheck -->
            <link href="{{asset('/Adminassets/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

            <!-- Custom Theme Style -->
            <link href="{{asset('/Adminassets/css/custom.min.css')}}" rel="stylesheet">
            @yield('extra_css')
            <style>
            .truncate-ellipsis
            {
                white-space: nowrap; 
                width: 9em; 
                overflow: hidden;
                text-overflow: ellipsis;
            }
            
            .truncate-ellipsis-title
            {
                white-space: nowrap; 
                width: 9em; 
                overflow: hidden;
                text-overflow: ellipsis;
            }
            .truncate-ellipsis-title:hover{
                overflow: visible; 
                white-space: normal;
                height:auto;  /* just added this line */
            }
            hr.message-inner-separator
            {
                clear: both;
                margin-top: 10px;
                margin-bottom: 13px;
                border: 0;
                height: 1px;
                background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
                background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
                background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
                background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
            }
            .lbl_pad{
                margin-right:5px;
                padding:7px;
            }

                .btn-space{
                    margin-top:-15px;
                    margin-bottom:-25px;
                }
            </style>
    </head>
    <body class="nav-md footer_fixed">
        @include('inc.adminNavTop')
        @yield('rightNavActive')
        @yield('content')
        @include('inc.adminFooter')
        @yield('extra_script')
    </body>
</html>
