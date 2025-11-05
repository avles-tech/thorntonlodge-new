@extends('layout.app')
@section('contitle')
    <title>{{$pagetitle}}</title>
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="Abstract" content="{{$Abstract}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{ asset('/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/plugins/colorbox/colorbox.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/styles/sermons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/styles/sermons_responsive.css')}}">
    <link href="/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/styles/owl.carousel.css')}}">
    <!-- Default Theme -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/styles/owl.theme.css')}}">
    <style>
        #owl-demo .item{
            background: #ffffff;
            padding: 20px;
            height: 55px;
            margin: 10px;
            color: #444444;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            text-align: center;
            font-size:5px !important;
            border: 1px solid #d2d2d2;
        }
        #owl-demo .a:hover{
            color: #dc5c28 !important;
        }
        #owl-demo .item:hover{
            background: #f0f0f0;
        }

        .customNavigation{
            text-align: center;
        }
        .customNavigation a{
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }
    </style>
@endsection
@section('content')
    <div class="home">
        <div class="home_background" style="background-image:url(/images/project_banner.jpg)"></div>
        <div class="home_content">
            <div class="container">
                <div class="row">
                    <div class="col footer_col d-flex flex-row align-items-center justify-content-start">
                        <div class="breadcrumbs">
                            <div class="home_title">
                                <div class="banner_border">
                                    <div class="banner-bg">
                                        <span class="banner_title">PROJECTS</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="logo_left_border"></div>
                        <p class="banner_sub-1">{{ $banner_subtext }}</p>
                    </div>
                    <div class="logo_bottom_border"></div>
                    <p class="banner_sub-2"><i class="fa fa-crosshairs" aria-hidden="true"></i> {{ $banner_subtext }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs -->
    <ul class="breadcrumb">
        <li><a href="/"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
        <li><a href="/our-projects">Projects</a></li>
        <li class="active">Search: {{$tagname}}</li>
    </ul>
    <!-- ##### Breadcrumb Area End ##### -->
        <div class="container">
    <div class="row">
        <div class="col-12">
            <p>&nbsp;<br/><br/></p>
            <h4>Search keyword: {{$tagname}}</h4>
            <hr/>
        </div>
    </div>
        </div>
    <!-- ##### Project Area Start ##### -->
    <div class="sermons">
        <div class="container">

            <div class="row sermons_row" style="margin-top:-55px;">
            @if(count($projects))
                @foreach($projects as $k=>$project)
                    <?php $getcategory=App\project_tag::where('id',$project->tag_id)->first(); ?>
                    <!-- Sermon -->
                        <div class="col-lg-4 sermon_col">
                            <div class="card">
                                <a href="/project/{{$project->slug}}"><img style="width:100%; height:236px;" src="/Uploads/project_cover_images/thumbnail/{{ $project->cover_image }}" alt="{{ $project->title }}"></a>
                                <div class="card-body text-center">
                                    <div class="card-title sermon_title"><a href="/project/{{$project->slug}}">{{ $project->title }}</a></div>
                                    <div class="card-text sermon_info_container">
                                        <div class="sermon_info">
                                            <div class="sermon_info_title">Project Type: </div>
                                            <ul class="sermon_info_list">
                                                <li><a href="/project-tag-{{  $getcategory->slug}}">{{ $getcategory->title }}</a></li>
                                            </ul>
                                            <div class="sermon_info">
                                                <p class="ptext-2">{{ $project->excerpt }}</p>
                                            </div>
                                        </div>
                                        <div class="sermon_links">
                                           <a href="/project/{{$project->slug}}" class="btn btn-dark"><i class="fa fa-eye" aria-hidden="true"></i> View Project info</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="noresult"><i class="fa fa-info-circle"></i> No Results found<br/>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
                    <p>Go back, or return to <a href="/" class="btn-link"> PR ARCHITECTURE</a> home page to choose a new page.
                        Please report any broken links to our team.</p>
                @endif
            </div>

        </div>
    </div>
    <div class="blog-category">
        <div class="container">
            <div class="">
                <h5>Projects Categories</h5>
                <!--<i class="fa fa-tags" aria-hidden="true"></i> Tags -->
            </div>
            <hr style="margin-bottom:-5px;margin-top:5px">
            <div id="owl-demo" class="owl-carousel owl-theme">
                @if(count($tags)>0)
                    <a href="/our-projects"><div class="item"><h6><i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i> All Categories</h6></div></a>
                    @foreach($tags as $tag)
                        <a href="/project-tag-{{$tag->slug}}"><div class="item"><h6><i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i> {{ $tag->title }}</h6></div></a>
                    @endforeach
                @else
                    <p class="noresult"><i class="fa fa-info-circle"></i> No Results found</p>
                @endif
            </div>
            <hr style="margin-top:-5px">
            <!--
            <div class="customNavigation">
                <a class="btn prev">Previous</a>
                <a class="btn next">Next</a>
            </div>-->
        </div>
    </div>

@endsection
@section('extra_script')
    <script src="{{asset('/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('/styles/bootstrap4/popper.js')}}"></script>
    <script src="{{asset('/styles/bootstrap4/bootstrap.min.js')}}"></script>
    <script src="{{asset('/plugins/easing/easing.js')}}"></script>
    <script src="{{asset('/plugins/parallax-js-master/parallax.min.js')}}"></script>
    <script src="{{asset('/plugins/colorbox/jquery.colorbox-min.js')}}"></script>
    <script src="{{asset('/js/blog.js')}}"></script>
    <script src="{{asset('/js/owl.carousel.min.js')}}"></script>
    <script>
        $(document).ready(function() {

            var owl = $("#owl-demo");

            owl.owlCarousel({
                items : 4, //10 items above 1000px browser width
                itemsDesktop : [1000,5], //5 items between 1000px and 901px
                itemsDesktopSmall : [900,3], // betweem 900px and 601px
                itemsTablet: [600,2], //2 items between 600 and 0
                itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
            });
            owl.trigger('owl.play',5000); //owl.play event accept autoPlay speed as second parameter

            // Custom Navigation Events
            $(".next").click(function(){
                owl.trigger('owl.next');
            })
            $(".prev").click(function(){
                owl.trigger('owl.prev');
            })

        });
    </script>
    <script src="{{asset('/plugins/colorbox/jquery.colorbox-min.js')}}"></script>
    <!--<script src="/js/custom.js"></script> -->
@endsection