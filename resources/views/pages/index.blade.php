@extends('layout.main')
@section('con_title')
    <title>{{$page_title}}</title>
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="Abstract" content="{{$Abstract}}" />
@endsection
@section('extra_css')
    <style type="text/css">
        .main-content {
            background: url(../images/banner.jpg) no-repeat center;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            -ms-background-size: cover;
            min-height: 20em;
            position: relative;
        }

        .btn-cus:hover{
            background: #34abcb !important;
        }
        </style>
    <style type="text/css">
        @-ms-viewport { width: device-width; }
        @media only screen and (min-device-width: 800px) { html { } }
        * { padding: 0; margin: 0; }
        html { height: 100%; }
        body { height: 100%; }
        div#container_view { height: 75%; min-height: 75%; width: 100%;}
        div#tourDIV {
            height:100%;
            overflow:hidden;
            width:100%;
            float: left;
        }
        div#tourrightDIV{
            height:100%;
            width: 50%;
            float: right;

        }
        div#panoDIV {
            height:100%;
            position:relative;
            overflow:hidden;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -o-user-select: none;
            user-select: none;
        }


        @media only screen and (max-width: 767px) {
            div#tourDIV {
                width:100%;
                float: none;
                margin-top:-16px !important;
                position: absolute;
                height:100%;


            }

            div#tourrightDIV{

                height:100%;
                position: relative;
                overflow:hidden;
                top:80%;
                width: 100%;
                float: none !important;
                background: rgba(0,0,0,0,0.5);
                left:-15px;

            }


            .move-footer{
                position: relative;
                /*
                position: relative;
                margin-top:230px; */

            }
        }

    </style>
    <!--[if !IE]><!-->
    <script type="text/javascript" src="Thornton-Lodge-360data/lib/jquery-2.1.1.min.js"></script>
    <!--<![endif]-->
    <!--[if lte IE 8]>
    <script type="text/javascript" src="Thornton-Lodge-360data/lib/jquery-1.11.1.min.js"></script>
    <![endif]-->
    <!--[if gt IE 8]>
    <script type="text/javascript" src="Thornton-Lodge-360data/lib/jquery-2.1.1.min.js"></script>
    <![endif]-->


    <link type="text/css" href="Thornton-Lodge-360data/lib/jquery-ui-1.11.1/jquery-ui.min.css" rel="stylesheet" />
    <script type="text/javascript" src="Thornton-Lodge-360data/lib/jquery-ui-1.11.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="Thornton-Lodge-360data/lib/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="Thornton-Lodge-360data/lib/Kolor/KolorTools.min.js"></script>
    <script type="text/javascript" src="Thornton-Lodge-360data/graphics/KolorBootstrap.js"></script>



    <style type="text/css">
        div#panoDIV.cursorMoveMode {
            cursor: move;
            cursor: url(Thornton-Lodge-360data/graphics/cursors_move_html5.cur), move;
        }
        div#panoDIV.cursorDragMode {
            cursor: grab;
            cursor: -moz-grab;
            cursor: -webkit-grab;
            cursor: url(Thornton-Lodge-360data/graphics/cursors_drag_html5.cur), default;
        }
    </style>

    <script type="text/javascript">

        function readDeviceOrientation() {
            // window.innerHeight is not supported by IE
            var winH = window.innerHeight ? window.innerHeight : jQuery(window).height();
            var winW = window.innerWidth ? window.innerWidth : jQuery(window).width();
            //force height for iframe usage
            if(!winH || winH == 0){
                winH = '100%';
            }
            // set the height of the document
            jQuery('html').css('height', winH);
            // scroll to top
            //window.scrollTo(0,0);
        }
        jQuery( document ).ready(function() {
            if (/(iphone|ipod|ipad|android|iemobile|webos|fennec|blackberry|kindle|series60|playbook|opera\smini|opera\smobi|opera\stablet|symbianos|palmsource|palmos|blazer|windows\sce|windows\sphone|wp7|bolt|doris|dorothy|gobrowser|iris|maemo|minimo|netfront|semc-browser|skyfire|teashark|teleca|uzardweb|avantgo|docomo|kddi|ddipocket|polaris|eudoraweb|opwv|plink|plucker|pie|xiino|benq|playbook|bb|cricket|dell|bb10|nintendo|up.browser|playstation|tear|mib|obigo|midp|mobile|tablet)/.test(navigator.userAgent.toLowerCase())) {
                if(/iphone/.test(navigator.userAgent.toLowerCase()) && window.self === window.top){
                    jQuery('body').css('height', '100.18%');
                }
                // add event listener on resize event (for orientation change)
                if (window.addEventListener) {
                    window.addEventListener("load", readDeviceOrientation);
                    window.addEventListener("resize", readDeviceOrientation);
                    window.addEventListener("orientationchange", readDeviceOrientation);
                }
                //initial execution
                setTimeout(function(){readDeviceOrientation();},10);
            }
        });


        function accessWebVr(curScene, curTime){

            unloadPlayer();

            eventUnloadPlugins();

            loadPlayer(true, curScene, curTime);
        }
        function accessStdVr(curScene, curTime){

            unloadPlayer();

            resetValuesForPlugins();

            loadPlayer(false, curScene, curTime);
        }
        function loadPlayer(isWebVr, curScene, curTime) {
            if (isWebVr) {
                embedpano({
                    id:"krpanoSWFObject"
                    ,xml:"Thornton-Lodge-360data/Thornton-Lodge-360_vr.xml"
                    ,target:"panoDIV"
                    ,passQueryParameters:true
                    ,bgcolor:"#000000"
                    ,html5:"only+webgl"
                    ,focus: false
                    ,vars:{skipintro:true,norotation:true,startscene:curScene,starttime:curTime }
                });
            } else {

                var isBot = /bot|googlebot|crawler|spider|robot|crawling/i.test(navigator.userAgent);
                embedpano({
                    id:"krpanoSWFObject"

                    ,xml:"Thornton-Lodge-360data/Thornton-Lodge-360.xml"

                    ,target:"panoDIV"
                    ,passQueryParameters:true
                    ,bgcolor:"#000000"
                    ,focus: false
                    ,html5:isBot ? "always" : "only"
                    ,vars:{startscene:curScene,starttime:curTime}

                });
            }
            //apply focus on the visit if not embedded into an iframe
            // if(top.location === self.location){
            //     kpanotour.Focus.applyFocus();
            // }
        }
        function unloadPlayer(){
            if(jQuery('#krpanoSWFObject')){
                removepano('krpanoSWFObject');
            }

        }
        var currentPanotourPlayer = null;
        function getCurrentTourPlayer() {
            if (currentPanotourPlayer == null) {
                currentPanotourPlayer = document.getElementById('krpanoSWFObject');
            }
            return currentPanotourPlayer;
        }
        function isVRModeRequested() {
            var querystr = window.location.search.substring(1);
            var params = querystr.split('&');
            for (var i=0; i<params.length; i++){
                if (params[i].toLowerCase() == "vr"){
                    return true;
                }
            }
            return false;
        }
    </script>
@endsection
@section('content')
    <section class="banner" style="margin-top: -33px;">
        <div class="container">
            <!-- snow balls -->
            <!--
            <div class="hero">
                <div class="snow">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1536" preserveAspectRatio="xMidYMax slice">
                        <g fill="#756f6f" fill-opacity=".25" transform="translate(55 42)">
                            <g id="snow-bottom-layer">
                                <ellipse cx="6" cy="1009.5" rx="6" ry="5.5"/>
                                <ellipse cx="138" cy="1110.5" rx="6" ry="5.5"/>
                                <ellipse cx="398" cy="1055.5" rx="6" ry="5.5"/>
                                <ellipse cx="719" cy="1284.5" rx="6" ry="5.5"/>
                                <ellipse cx="760" cy="1155.5" rx="6" ry="5.5"/>
                                <ellipse cx="635" cy="1459.5" rx="6" ry="5.5"/>
                                <ellipse cx="478" cy="1335.5" rx="6" ry="5.5"/>
                                <ellipse cx="322" cy="1414.5" rx="6" ry="5.5"/>
                                <ellipse cx="247" cy="1234.5" rx="6" ry="5.5"/>
                                <ellipse cx="154" cy="1425.5" rx="6" ry="5.5"/>
                                <ellipse cx="731" cy="773.5" rx="6" ry="5.5"/>
                                <ellipse cx="599" cy="874.5" rx="6" ry="5.5"/>
                                <ellipse cx="339" cy="819.5" rx="6" ry="5.5"/>
                                <ellipse cx="239" cy="1004.5" rx="6" ry="5.5"/>
                                <ellipse cx="113" cy="863.5" rx="6" ry="5.5"/>
                                <ellipse cx="102" cy="1223.5" rx="6" ry="5.5"/>
                                <ellipse cx="395" cy="1155.5" rx="6" ry="5.5"/>
                                <ellipse cx="826" cy="943.5" rx="6" ry="5.5"/>
                                <ellipse cx="626" cy="1054.5" rx="6" ry="5.5"/>
                                <ellipse cx="887" cy="1366.5" rx="6" ry="5.5"/>
                                <ellipse cx="6" cy="241.5" rx="6" ry="5.5"/>
                                <ellipse cx="138" cy="342.5" rx="6" ry="5.5"/>
                                <ellipse cx="398" cy="287.5" rx="6" ry="5.5"/>
                                <ellipse cx="719" cy="516.5" rx="6" ry="5.5"/>
                                <ellipse cx="760" cy="387.5" rx="6" ry="5.5"/>
                                <ellipse cx="635" cy="691.5" rx="6" ry="5.5"/>
                                <ellipse cx="478" cy="567.5" rx="6" ry="5.5"/>
                                <ellipse cx="322" cy="646.5" rx="6" ry="5.5"/>
                                <ellipse cx="247" cy="466.5" rx="6" ry="5.5"/>
                                <ellipse cx="154" cy="657.5" rx="6" ry="5.5"/>
                                <ellipse cx="731" cy="5.5" rx="6" ry="5.5"/>
                                <ellipse cx="599" cy="106.5" rx="6" ry="5.5"/>
                                <ellipse cx="339" cy="51.5" rx="6" ry="5.5"/>
                                <ellipse cx="239" cy="236.5" rx="6" ry="5.5"/>
                                <ellipse cx="113" cy="95.5" rx="6" ry="5.5"/>
                                <ellipse cx="102" cy="455.5" rx="6" ry="5.5"/>
                                <ellipse cx="395" cy="387.5" rx="6" ry="5.5"/>
                                <ellipse cx="826" cy="175.5" rx="6" ry="5.5"/>
                                <ellipse cx="626" cy="286.5" rx="6" ry="5.5"/>
                                <ellipse cx="887" cy="598.5" rx="6" ry="5.5"/>
                            </g>
                        </g>
                        <g fill="#756f6f" fill-opacity=".15" transform="translate(65 63)">
                            <g id="snow-top-layer">
                                <circle cx="8" cy="776" r="8"/>
                                <circle cx="189" cy="925" r="8"/>
                                <circle cx="548" cy="844" r="8"/>
                                <circle cx="685" cy="1115" r="8"/>
                                <circle cx="858" cy="909" r="8"/>
                                <circle cx="874" cy="1438" r="8" transform="rotate(180 874 1438)"/>
                                <circle cx="657" cy="1256" r="8" transform="rotate(180 657 1256)"/>
                                <circle cx="443" cy="1372" r="8" transform="rotate(180 443 1372)"/>
                                <circle cx="339" cy="1107" r="8" transform="rotate(180 339 1107)"/>
                                <circle cx="24" cy="1305" r="8" transform="rotate(180 24 1305)"/>
                                <circle cx="8" cy="8" r="8"/>
                                <circle cx="189" cy="157" r="8"/>
                                <circle cx="548" cy="76" r="8"/>
                                <circle cx="685" cy="347" r="8"/>
                                <circle cx="858" cy="141" r="8"/>
                                <circle cx="874" cy="670" r="8" transform="rotate(180 874 670)"/>
                                <circle cx="657" cy="488" r="8" transform="rotate(180 657 488)"/>
                                <circle cx="443" cy="604" r="8" transform="rotate(180 443 604)"/>
                                <circle cx="339" cy="339" r="8" transform="rotate(180 339 339)"/>
                                <circle cx="24" cy="537" r="8" transform="rotate(180 24 537)"/>
                            </g>
                        </g>
                    </svg>
                </div>
            </div> -->

            <div class="row banner-grids">
                <div class="col-lg-6 banner-info-w3ls">
                    <!--<h2 class="head-first">Vision For Your Care Life</h2>-->
                    <h3 class="mb-3" style="font-weight: 500">Welcome to<br/>THORNTON LODGE</h3>
                    <p class="mb-5" style="color:#2e2e2e;"> Thornton Lodge is a Residential Care Home for Adults and Older People with Mental Health Illness, registered under the Health and Social Care Act 2008 by the Care Quality Commission. It was opened in 1987 and has continued to grow in number, quality of care and improved services.</p>
                    <a href="{{ route('about') }}" class="btn btn-cus">Read More</a>
                </div>
                <!--<div class="col-lg-6 banner-image">
                    <div class="img-effect">
                        <img src="/images/img.jpg" alt="Home Image" style="width:70%; margin-top:45px;" class="img-fluid image1 image-home">
                    </div>
                </div>-->
            </div>
        </div>
    </section>
    <!-- //banner -->
    </div>
    
    <!--/ab -->
</br>
    <h3 class="tittle"><span class="sub-tittle">Introduction to Thornton Lodge</span></h3>
    <video width="50%" controls loop muted style="display: block; margin: 20px auto;" poster="{{ asset('images/THORNTON_LODGE_THUMBNAIL.png') }}">
        <source src="{{ asset('videos/THORNTON_LODGE_PROMO_VIDEO_4K.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

</br>
<h3 class="tittle"><span class="sub-tittle">A note from Joe, our Chairman and founder.</span></h3>
<video width="50%" controls loop muted style="display: block; margin: 20px auto;" poster="{{ asset('images/THORNTON_LODGE_JOE.png') }}">
    <source src="{{ asset('videos/THORNTON_LODGE_JOE.mp4') }}" type="video/mp4">
    Your browser does not support the video tag.
</video>

</br>
    <section class="about py-lg-5 py-md-5 py-5">
        <div class="container">
            <div class="inner-sec-w3pvt py-lg-5 py-3">
                <h3 class="tittle"><span class="sub-tittle">ABOUT</span></h3>
                <h3 class="tittle title-move  text-center my-lg-5 my-3">A calm, cheerful and relaxed family-like environment pervades throughout the Home.</h3>
                <div class="feature-grids row mt-3 mb-lg-5 mb-3 text-center">
                    <div class="col-lg-8" data-aos="fade-up">
                        <div class="bottom-gd px-3">
                            <span class="fa fa-lightbulb-o" aria-hidden="true"></span>
                            <h3 class="my-4"> Helpful Advice</h3>
                            <p>Please provide details of possible placement as well as the service user’s needs. To discuss facilities, fees, arrange a visit or if you just want a quick chat with any of our management staff, please give us a call on 0208 684 1056 or alternatively you can email us at <a>admin@thorntonlodgecare.com</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="fade-up">
                        <div class="bottom-gd2-active px-6">
                            <span class="fa fa-star-o" aria-hidden="true"></span>
                            <h3 class="my-4"> Our Values</h3>
                            <p>We strive to keep a homely and family like environment where service users can exercise their rights, independence and individuality.</p>
                        </div>
                    </div>
                </div>

                <!-- testimonials -->
                <div class="testimonials py-md-2 py-0" style="margin-top: -20px;">
                    <div class="container py-xl-2 py-lg-3">
                        <h3 class="tittle"><span class="sub-tittle">Testimonials</span></h3>
                        <h3 class="tittle title-move  text-center mb-lg-5 mb-3">&nbsp;</h3>
                        <div class="">
                            <div class="row">
                                @if(count($testimonials)>0)
                                    @foreach($testimonials as $testimonial)
                                        <div class="col-lg-12 col-sm-12" style="margin-bottom: 30px;">
                                            <p class="sub-test"><span class="fa fa-quote-left" aria-hidden="true"></span>{{ $testimonial->comment }}</p>
                                        </div>
                                    @endforeach
                                @else
                                    <p class="noresult"><i class="fa fa-info-circle"></i> No testimonial results found</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //testimonials -->
                
                <!-- COVID19 -->
                {{-- <div class="testimonials py-md-2 py-0">
                    <div class="container py-xl-5 py-lg-3">
                        <h3 class="tittle"><span class="sub-tittle">COVID-19 Update</span></h3>
                        <h3 class="tittle title-move  text-center mb-lg-5 mb-3">&nbsp;</h3>
                        <div class="">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12" style="margin-bottom: 30px;">
                                    <p class="sub-test">Thornton Lodge prides itself on maintaining its rigorous infection control and prevention programme and has undertaken extensive measures, including the installation of new automatic sanitiser stations at both entrances, a temperature imaging camera at our main entrance and temperature monitoring checks, to mitigate any risk from Covid-19 coming into the home. The safety and wellbeing of our Residents is paramount and we are taking all necessary measures within our ability to ensure our residents have, and will continue to remain safe at Thornton Lodge.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- //COVID19 -->

                <!-- services -->
                <div class="fetured-info">
                    <h3 class="tittle"><span class="sub-tittle">WHO WE ARE</span></h3>
                    <div class="container">
                        <div class="row fetured-sec mt-lg-5 mt-3">
                            <div class="col-lg-4 p-0">
                                <div class="img-effect">
                                    <img src="/images/img1.jpg" alt="Front Image" class="img-fluid image1">
                                </div>
                            </div>
                            <div class="col-lg-8 serv_bottom feature-grids">
                                <div class="featured-left text-left">
                                    <div class="bottom-gd fea active" data-aos="fade-left">
                                        <h3 class="tittle title-move" style="margin-top:0px">Thornton Lodge</h3>
                                        <p class="text-justify">THORNTON LODGE is a Residential Home for Adults and Older People with Mental Health Problems and is located in the prime area of Thornton Heath, accessible within a 5-minute walk to the main railway station, whilst a network of public transport is within a stone’s throw which gives access to Central London and Croydon town centre.</p><br/>
                                        <p class="text-justify">Overlooking the front of the property there is an array of services and amenities; newsagents, grocery shop, laundry, dentists, doctors' practice, chemist, library and restaurant.</p><br/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 serv_bottom feature-grids">
                                <div class="featured-left text-left">
                                    <div class="bottom-gd fea active" data-aos="fade-left">
                                        <p class="text-justify" style="font-size:15px;">Thornton Lodge is a Residential Home registered under the Health and Social Care Act 2008 by the Care Quality Commission. </p><br/>

                                        <p class="text-justify" style="font-size:15px;">The Home is visited between regular intervals, both announced and unannounced by the Care Quality Commission. We are proud to highlight that our inspections are overall rated as “Good”. Our reports are all publicly available to read via the Care Quality Commission’s website.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- report -->
                        <div class="testimonials py-md-5 py-0" style="margin-top: -30px;">
                            <h3 class="tittle"><span class="sub-tittle">Report from CQC</span></h3>
                            <br/>
                            <div class="container py-xl-1 py-lg-1">
                                <div class="">
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-12">
                                            <script type="text/javascript" src="//www.cqc.org.uk/sites/all/modules/custom/cqc_widget/widget.js?data-id=1-414373614&data-host=www.cqc.org.uk&type=location"></script>
                                        </div>
                                        <div class="col-lg-6 col-sm-12">
                                            <iframe style="border: 2px solid gray; padding:3px;" width="100%" height="262" src="https://www.youtube.com/embed/oxCXNURV3DM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- //treport -->

                        <h3 class="tittle"><span class="sub-tittle">AVAILABILITY</span></h3>
                        <br/>
                        <div class="row mid-slide">
                            @if(count($rooms)>0)
                                @foreach($rooms as $room)
                                    <div class="col-lg-4 featured-content">
                                        <img src="/Uploads/room_cover_images/{{ $room->cover_image }}" alt="{{ $room->title }}" class="img-fluid image1">
                                        <span class="money">Available</span>
                                        <!--/Property_info-->
                                        <div class="property-info-list">
                                            <div class="footer-properties">
                                                <a href="{{ route('contact') }}" ><span class="year text-right"> Enquire Now</span></a>
                                                <a class="admin" href="#">{{ $room->title }}</a>
                                            </div>
                                            <p>{{ $room->excerpt }}</p>
                                        </div>
                                        <!--//Property_info-->
                                    </div>
                                @endforeach
                                
                            @else
                                <p class="noresult"><i class="fa fa-info-circle"></i> No room results found</p>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="text-center" style="margin-top:20px;">
                                    <a href="{{ route('vacancies') }}" class="btn btn-info btn-lg" style="background: #6ecfe9;padding-left:45px; border: none; border-radius: 0; padding-right:45px; ">See More Rooms</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- //services -->
    </section>
    <!-- //ab -->

    <!--/counter-->
    <section class="stats room-status" >
        <div class="container">
            <div class="row text-center">
                <div class="col col-back-div-left">
                    <div class="counter">
                        <h3 class="timer count-title text-right count-number">{{ $room_info->beds }}</h3>
                        <p class="count-text text-right">Total Number of beds</p>
                    </div>
                </div>
                <div class="col col-back-div-right">
                    <div class="counter">
                        <h3 class="timer count-title count-number text-left">{{ $count_room }}</h3>
                        <p class="count-text text-left">Total number of vacancies</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//counter-->
    <div id="container_view" class="middle-tem-insidel pt-lg-5" style="margin-top: -48px">
        <div id="tourDIV">
            <div id="panoDIV">
                <noscript> You must activate javascript to visualize the Virtual Tour : Thornton Lodge VR (Virtual tour generated by Panotour).</noscript>
            </div>

            <script type="text/javascript" src="Thornton-Lodge-360data/Thornton-Lodge-360.js"></script>
            <script type="text/javascript">
                if (isVRModeRequested()){
                    accessWebVr();
                }else{
                    accessStdVr();
                }
            </script>
        </div>
        <!--
        <div id="tourrightDIV">
            <div class="middle-tem-insidel" >
                <div class="progress-info">
                    <div class="left-build-main-temps" style="width: 100% !important;">
                        <h3 class="tittle text-left my-lg-5 my-3" style="margin-left:15px"><span class="sub-tittle">Our Services</span></h3>

                        <ul class="tic-info list-unstyled">
                            <li class="progress-tittle">
                                <span class="fa fa-hotel"></span> Accommodation
                            </li>
                            <li class="progress-tittle">
                                <span class="fa fa-plus-circle"></span> Admission Criteria
                            </li>
                            <li class="progress-tittle">
                                <span class="fa fa-thumbs-o-up"></span> Facilities
                            </li>
                            <li class="progress-tittle">
                                <span class="fa fa-bar-chart-o"></span> Activities & Events
                            </li>
                            <li class="progress-tittle">
                                <span class="fa fa-hospital-o"></span> Principal of Care
                            </li>
                            <li class="progress-tittle">
                                <span class="fa fa-bullseye"></span> Staff Training
                            </li>
                        </ul>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!--//middle section -->
        </div>
    </div>
    <!-- middle section -->
    <!--//middle section -->




    <!--//portfolio-->
    <!-- /hand-crafted --
    <section class="hand-crafted py-5">
        <div class="container py-lg-5">
            <div class="row accord-info">
                <div class="col-lg-6 pl-md-5">

                    <h3 class="mb-md-5 tittle">This is Our Responsibility To Give Good Property</h3>

                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis.Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.</p>
                    <p class="mt-3">Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.
                    <p>
                </div>
                <div class="col-lg-6 banner-image">
                    <div class="img-effect">
                        <img src="images/img3.jpg" alt="" class="img-fluid image1">
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- //hand-crafted -->
@endsection
@section('extra_script')

@endsection