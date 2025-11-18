
<?php $__env->startSection('con_title'); ?>
    <title><?php echo e($page_title); ?></title>
    <meta name="description" content="<?php echo e($description); ?>">
    <meta name="keywords" content="<?php echo e($keywords); ?>" />
    <meta name="Abstract" content="<?php echo e($Abstract); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('extra_css'); ?>
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
        
        /* Parallax Hero */
        .parallax-hero {
            position: relative;
            overflow: hidden;
        }
        
        .parallax-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 120%;
            background-attachment: fixed;
            transform: translateZ(0);
            will-change: transform;
        }
        
        /* Modern Section Title Styles */
        .modern-section-title {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }
        
        .modern-section-title .title-tag {
            display: inline-block;
            background: linear-gradient(135deg, #6ecfe9 0%, #5ab8d9 100%);
            color: white;
            padding: 8px 28px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(110, 207, 233, 0.4);
        }
        
        .modern-section-title h3 {
            font-size: 42px;
            font-weight: 800;
            color: #1a1a1a;
            margin: 0;
            letter-spacing: -1px;
            line-height: 1.2;
        }
        
        .modern-section-title .title-underline {
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, transparent 0%, #6ecfe9 50%, transparent 100%);
            margin: 25px auto 0;
            border-radius: 2px;
        }
        
        .modern-section-title.alt .title-tag {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .modern-section-title.alt .title-underline {
            background: linear-gradient(90deg, transparent 0%, #667eea 50%, transparent 100%);
        }
        
        /* Testimonial Carousel */
        .testimonial-carousel {
            position: relative;
            overflow: hidden;
        }
        
        .testimonial-track {
            display: flex;
            transition: transform 0.5s ease;
        }
        
        .testimonial-slide {
            min-width: 100%;
            padding: 0 15px;
        }
        
        .carousel-controls {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }
        
        .carousel-btn {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: white;
            border: 2px solid #6ecfe9;
            color: #6ecfe9;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }
        
        .carousel-btn:hover {
            background: #6ecfe9;
            color: white;
            transform: scale(1.1);
        }
        
        .carousel-indicators {
            display: flex;
            gap: 8px;
            justify-content: center;
            margin-top: 20px;
        }
        
        .indicator-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: rgba(110, 207, 233, 0.3);
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .indicator-dot.active {
            background: #6ecfe9;
            width: 30px;
            border-radius: 5px;
        }
        
        /* Interactive Timeline */
        .timeline {
            position: relative;
            max-width: 1000px;
            margin: 60px auto;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 4px;
            height: 100%;
            background: linear-gradient(180deg, #6ecfe9 0%, #667eea 100%);
        }
        
        .timeline-item {
            position: relative;
            margin-bottom: 50px;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }
        
        .timeline-item.show {
            opacity: 1;
            transform: translateY(0);
        }
        
        .timeline-item:nth-child(odd) .timeline-content {
            margin-right: calc(50% + 40px);
            text-align: right;
        }
        
        .timeline-item:nth-child(even) .timeline-content {
            margin-left: calc(50% + 40px);
        }
        
        .timeline-year {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            background: white;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 18px;
            color: #6ecfe9;
            box-shadow: 0 0 0 8px rgba(110, 207, 233, 0.2);
            z-index: 2;
        }
        
        .timeline-content {
            background: white;
            padding: 25px 30px;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        
        .timeline-content:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }
        
        .timeline-content h4 {
            font-size: 20px;
            font-weight: 700;
            color: #333;
            margin-bottom: 10px;
        }
        
        .timeline-content p {
            color: #666;
            line-height: 1.6;
            margin: 0;
        }
        
        /* Animated Counter */
        .counter-number {
            font-size: 48px;
            font-weight: 700;
            color: white;
            margin-bottom: 10px;
            display: inline-block;
        }
        
        /* Ripple Effect */
        .ripple {
            position: relative;
            overflow: hidden;
        }
        
        .ripple::after {
            content: '';
            position: absolute;
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            transform: scale(0);
            opacity: 0;
        }
        
        .ripple:active::after {
            animation: ripple-effect 0.6s ease-out;
        }
        
        @keyframes  ripple-effect {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
        
        /* Video Play Button Overlay */
        .video-wrapper {
            position: relative;
            cursor: pointer;
        }
        
        .video-play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80px;
            height: 80px;
            background: rgba(110, 207, 233, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            color: white;
            transition: all 0.3s ease;
            pointer-events: none;
        }
        
        .video-wrapper:hover .video-play-button {
            transform: translate(-50%, -50%) scale(1.1);
            background: rgba(110, 207, 233, 1);
        }
        
        .video-wrapper video:not([controls]) + .video-play-button {
            display: flex;
        }
        
        .video-wrapper video[controls] + .video-play-button {
            display: none;
        }
        
        /* Floating Animation */
        @keyframes  float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
        
        .float-animation {
            animation: float 3s ease-in-out infinite;
        }
        
        @media (max-width: 768px) {
            .modern-section-title h3 {
                font-size: 32px;
            }
            
            .timeline::before {
                left: 30px;
            }
            
            .timeline-item:nth-child(odd) .timeline-content,
            .timeline-item:nth-child(even) .timeline-content {
                margin-left: 80px;
                margin-right: 0;
                text-align: left;
            }
            
            .timeline-year {
                left: 30px;
                width: 60px;
                height: 60px;
                font-size: 14px;
            }
        }
    </style>
    <style type="text/css">
        @-ms-viewport { width: device-width; }
        @media  only screen and (min-device-width: 800px) { html { } }
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

        @media  only screen and (max-width: 767px) {
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
            var winH = window.innerHeight ? window.innerHeight : jQuery(window).height();
            var winW = window.innerWidth ? window.innerWidth : jQuery(window).width();
            if(!winH || winH == 0){
                winH = '100%';
            }
            jQuery('html').css('height', winH);
        }
        jQuery( document ).ready(function() {
            if (/(iphone|ipod|ipad|android|iemobile|webos|fennec|blackberry|kindle|series60|playbook|opera\smini|opera\smobi|opera\stablet|symbianos|palmsource|palmos|blazer|windows\sce|windows\sphone|wp7|bolt|doris|dorothy|gobrowser|iris|maemo|minimo|netfront|semc-browser|skyfire|teashark|teleca|uzardweb|avantgo|docomo|kddi|ddipocket|polaris|eudoraweb|opwv|plink|plucker|pie|xiino|benq|playbook|bb|cricket|dell|bb10|nintendo|up.browser|playstation|tear|mib|obigo|midp|mobile|tablet)/.test(navigator.userAgent.toLowerCase())) {
                if(/iphone/.test(navigator.userAgent.toLowerCase()) && window.self === window.top){
                    jQuery('body').css('height', '100.18%');
                }
                if (window.addEventListener) {
                    window.addEventListener("load", readDeviceOrientation);
                    window.addEventListener("resize", readDeviceOrientation);
                    window.addEventListener("orientationchange", readDeviceOrientation);
                }
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
                    id:"krpanoSWFObject",
                    xml:"Thornton-Lodge-360data/Thornton-Lodge-360_vr.xml",
                    target:"panoDIV",
                    passQueryParameters:true,
                    bgcolor:"#000000",
                    html5:"only+webgl",
                    focus: false,
                    vars:{skipintro:true,norotation:true,startscene:curScene,starttime:curTime }
                });
            } else {
                var isBot = /bot|googlebot|crawler|spider|robot|crawling/i.test(navigator.userAgent);
                embedpano({
                    id:"krpanoSWFObject",
                    xml:"Thornton-Lodge-360data/Thornton-Lodge-360.xml",
                    target:"panoDIV",
                    passQueryParameters:true,
                    bgcolor:"#000000",
                    focus: false,
                    html5:isBot ? "always" : "only",
                    vars:{startscene:curScene,starttime:curTime}
                });
            }
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Modern Hero Banner with Parallax - Full Width Text on Background -->
    <section class="banner scroll-animate parallax-hero" style="background: linear-gradient(rgba(102, 126, 234, 0.75), rgba(118, 75, 162, 0.85)), url(../images/banner.jpg) no-repeat center center; background-size: cover; padding: 120px 0 140px 0; position: relative; overflow: hidden; min-height: 100vh; display: flex; align-items: center; background-attachment: fixed;">
        <!-- Decorative Elements -->
        <div class="float-animation" style="position: absolute; top: -50px; right: -50px; width: 400px; height: 400px; background: rgba(255,255,255,0.08); border-radius: 50%; filter: blur(80px);"></div>
        <div class="float-animation" style="position: absolute; bottom: -100px; left: -100px; width: 500px; height: 500px; background: rgba(110, 207, 233, 0.1); border-radius: 50%; filter: blur(100px); animation-delay: 1s;"></div>

        <div class="container" style="position: relative; z-index: 2;">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12 text-center scroll-animate-zoom">
                    <!-- Badge -->
                    <div style="display: inline-block; background: rgba(255, 255, 255, 0.2); backdrop-filter: blur(10px); color: white; padding: 12px 35px; border-radius: 50px; font-size: 14px; font-weight: 700; margin-bottom: 35px; box-shadow: 0 6px 25px rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); letter-spacing: 1.5px; text-transform: uppercase;">
                        <i class="fa fa-check-circle" style="margin-right: 10px;"></i>CQC Registered Care Home
                    </div>

                    <!-- Main Heading -->
                    <h1 style="font-size: 68px; font-weight: 900; color: white; margin-bottom: 35px; line-height: 1.2; text-shadow: 0 6px 30px rgba(0,0,0,0.5); letter-spacing: -2px;">
                        Welcome to<br/>
                        <span style="font-size: 80px; background: linear-gradient(135deg, #6ecfe9 0%, #ffffff 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; text-shadow: none; display: inline-block;">THORNTON LODGE</span>
                    </h1>

                    <!-- Subheading -->
                    <p style="font-size: 26px; color: white; font-weight: 600; margin-bottom: 40px; text-shadow: 0 3px 15px rgba(0,0,0,0.3); max-width: 950px; margin-left: auto; margin-right: auto; line-height: 1.5;">
                        Quality Residential Care for Adults and Older People with Mental Health Needs
                    </p>

                    <!-- Description -->
                    <p style="color: rgba(255, 255, 255, 0.95); line-height: 1.9; font-size: 19px; margin-bottom: 55px; max-width: 1100px; margin-left: auto; margin-right: auto; text-shadow: 0 2px 10px rgba(0,0,0,0.3); font-weight: 400;">
                        Thornton Lodge is a Residential Care Home for Adults and Older People with Mental Health Illness, registered under the Health and Social Care Act 2008 by the Care Quality Commission. Established in 1987, we have continued to grow in excellence, providing high-quality care and improved services.
                    </p>

                    <!-- Key Features -->
                    <div class="row justify-content-center" style="margin: 60px 0;">
                        <div class="col-lg-3 col-md-4 col-sm-6 scroll-animate-delay-1" style="margin-bottom: 25px;">
                            <div class="ripple" style="background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(15px); padding: 35px 30px; border-radius: 20px; height: 100%; border: 1px solid rgba(255, 255, 255, 0.25); transition: all 0.3s ease; box-shadow: 0 8px 30px rgba(0,0,0,0.2); cursor: pointer;">
                                <div style="background: rgba(255, 255, 255, 0.25); width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; box-shadow: 0 6px 20px rgba(0,0,0,0.2);">
                                    <i class="fa fa-calendar" style="color: white; font-size: 36px;"></i>
                                </div>
                                <h4 style="font-size: 22px; font-weight: 700; color: white; margin-bottom: 12px; text-shadow: 0 2px 8px rgba(0,0,0,0.2);">Since 1987</h4>
                                <p style="color: rgba(255, 255, 255, 0.9); font-size: 15px; margin: 0; line-height: 1.6; text-shadow: 0 1px 5px rgba(0,0,0,0.2);">Over 35 years of trusted care</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 scroll-animate-delay-2" style="margin-bottom: 25px;">
                            <div class="ripple" style="background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(15px); padding: 35px 30px; border-radius: 20px; height: 100%; border: 1px solid rgba(255, 255, 255, 0.25); transition: all 0.3s ease; box-shadow: 0 8px 30px rgba(0,0,0,0.2); cursor: pointer;">
                                <div style="background: rgba(255, 255, 255, 0.25); width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; box-shadow: 0 6px 20px rgba(0,0,0,0.2);">
                                    <i class="fa fa-shield" style="color: white; font-size: 36px;"></i>
                                </div>
                                <h4 style="font-size: 22px; font-weight: 700; color: white; margin-bottom: 12px; text-shadow: 0 2px 8px rgba(0,0,0,0.2);">CQC Registered</h4>
                                <p style="color: rgba(255, 255, 255, 0.9); font-size: 15px; margin: 0; line-height: 1.6; text-shadow: 0 1px 5px rgba(0,0,0,0.2);">Regulated & inspected care</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 scroll-animate-delay-3" style="margin-bottom: 25px;">
                            <div class="ripple" style="background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(15px); padding: 35px 30px; border-radius: 20px; height: 100%; border: 1px solid rgba(255, 255, 255, 0.25); transition: all 0.3s ease; box-shadow: 0 8px 30px rgba(0,0,0,0.2); cursor: pointer;">
                                <div style="background: rgba(255, 255, 255, 0.25); width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; box-shadow: 0 6px 20px rgba(0,0,0,0.2);">
                                    <i class="fa fa-heart" style="color: white; font-size: 36px;"></i>
                                </div>
                                <h4 style="font-size: 22px; font-weight: 700; color: white; margin-bottom: 12px; text-shadow: 0 2px 8px rgba(0,0,0,0.2);">Specialist Care</h4>
                                <p style="color: rgba(255, 255, 255, 0.9); font-size: 15px; margin: 0; line-height: 1.6; text-shadow: 0 1px 5px rgba(0,0,0,0.2);">Mental health support</p>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div style="margin-top: 55px;">
                        <a href="<?php echo e(route('about')); ?>" class="ripple" style="display: inline-block; background: white; color: #667eea; padding: 20px 50px; border-radius: 50px; text-decoration: none; font-weight: 700; font-size: 17px; margin: 0 12px 15px 12px; box-shadow: 0 10px 35px rgba(0, 0, 0, 0.3); transition: all 0.3s ease; text-transform: uppercase; letter-spacing: 1px;">
                            <i class="fa fa-info-circle" style="margin-right: 12px;"></i>Learn More About Us
                        </a>
                        <a href="<?php echo e(route('contact')); ?>" class="ripple" style="display: inline-block; background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(10px); color: white; padding: 20px 50px; border-radius: 50px; text-decoration: none; font-weight: 700; font-size: 17px; margin: 0 12px 15px 12px; box-shadow: 0 6px 25px rgba(0, 0, 0, 0.25); border: 2px solid rgba(255, 255, 255, 0.4); transition: all 0.3s ease; text-transform: uppercase; letter-spacing: 1px;">
                            <i class="fa fa-phone" style="margin-right: 12px;"></i>Contact Us Today
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner -->
    </div>
    
    <!--/Video Section -->
    <section style="background: linear-gradient(to bottom, #ffffff 0%, #f8f9fa 100%); padding: 80px 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="scroll-animate-zoom" style="background: white; padding: 60px 50px; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.12); margin-bottom: 60px;">
                        <!-- Modern Section Title -->
                        <div class="modern-section-title">
                            <div class="title-tag">Introduction</div>
                            <h3>Introduction to Thornton Lodge</h3>
                            <div class="title-underline"></div>
                        </div>
                        
                        <div class="video-wrapper" style="position: relative; border-radius: 15px; overflow: hidden; box-shadow: 0 8px 30px rgba(0,0,0,0.2);">
                            <video width="100%" loop muted poster="<?php echo e(asset('images/THORNTON_LODGE_THUMBNAIL.png')); ?>" onclick="this.controls=true; this.play();">
                                <source src="<?php echo e(asset('videos/THORNTON_LODGE_PROMO_VIDEO_4K.mp4')); ?>" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="video-play-button">
                                <i class="fa fa-play"></i>
                            </div>
                        </div>
                    </div>

                    <div class="scroll-animate-zoom" style="background: white; padding: 60px 50px; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.12);">
                        <!-- Modern Section Title -->
                        <div class="modern-section-title alt">
                            <div class="title-tag">From Our Founder</div>
                            <h3>A note from Joe, our Chairman and founder</h3>
                            <div class="title-underline"></div>
                        </div>
                        
                        <div class="video-wrapper" style="position: relative; border-radius: 15px; overflow: hidden; box-shadow: 0 8px 30px rgba(0,0,0,0.2);">
                            <video width="100%" loop muted poster="<?php echo e(asset('images/THORNTON_LODGE_JOE.png')); ?>" onclick="this.controls=true; this.play();">
                                <source src="<?php echo e(asset('videos/THORNTON_LODGE_JOE.mp4')); ?>" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="video-play-button">
                                <i class="fa fa-play"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Interactive Timeline -->
    <section style="background: #f8f9fa; padding: 80px 0;">
        <div class="container">
            <!-- Modern Section Title -->
            <div class="modern-section-title scroll-animate">
                <div class="title-tag">Our Journey</div>
                <h3>35+ Years of Excellence</h3>
                <div class="title-underline"></div>
            </div>

            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-year">1987</div>
                    <div class="timeline-content">
                        <h4>Foundation</h4>
                        <p>Thornton Lodge was established to provide quality residential care for adults with mental health needs.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">2000</div>
                    <div class="timeline-content">
                        <h4>Facility Expansion</h4>
                        <p>Major renovations and expansion to accommodate more residents with enhanced facilities.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">2008</div>
                    <div class="timeline-content">
                        <h4>CQC Registration</h4>
                        <p>Officially registered under the Health and Social Care Act 2008 by the Care Quality Commission.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">2015</div>
                    <div class="timeline-content">
                        <h4>"Good" Rating Achieved</h4>
                        <p>Received "Good" rating from CQC, recognizing our commitment to quality care standards.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">2025</div>
                    <div class="timeline-content">
                        <h4>Continued Excellence</h4>
                        <p>Over 35 years of providing compassionate, professional care to our community.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="about py-lg-5 py-md-5 py-5">
        <div class="container">
            <div class="inner-sec-w3pvt py-lg-5 py-3">
                <!-- Modern Section Title -->
                <div class="modern-section-title scroll-animate">
                    <div class="title-tag">About Us</div>
                    <h3>ABOUT</h3>
                    <div class="title-underline"></div>
                </div>
                
                <h3 class="tittle title-move text-center my-lg-4 my-3 scroll-animate" style="font-size: 26px; font-weight: 400; color: #555; line-height: 1.6; max-width: 900px; margin-left: auto; margin-right: auto;">A calm, cheerful and relaxed family-like environment pervades throughout the Home.</h3>
                
                <div class="feature-grids row mt-5 mb-lg-5 mb-3 text-center">
                    <div class="col-lg-8 col-md-12 scroll-animate-left" data-aos="fade-up" style="margin-bottom: 25px;">
                        <div class="bottom-gd ripple" style="background: white; padding: 45px 35px; border-radius: 15px; box-shadow: 0 8px 30px rgba(0,0,0,0.12); transition: transform 0.3s ease, box-shadow 0.3s ease; height: 100%; border-top: 5px solid #6ecfe9; cursor: pointer;">
                            <div style="background: linear-gradient(135deg, #6ecfe9 0%, #5ab8d9 100%); width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; box-shadow: 0 6px 20px rgba(110, 207, 233, 0.4);">
                                <span class="fa fa-lightbulb-o" aria-hidden="true" style="font-size: 40px; color: white;"></span>
                            </div>
                            <h3 class="my-4" style="font-size: 24px; font-weight: 600;">Helpful Advice</h3>
                            <p style="line-height: 1.8; font-size: 16px; color: #555;">Please provide details of possible placement as well as the service user's needs. To discuss facilities, fees, arrange a visit or if you just want a quick chat with any of our management staff, please give us a call on 0208 684 1056 or alternatively you can email us at <a style="color: #6ecfe9; text-decoration: none; font-weight: 600;">admin@thorntonlodgecare.com</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 scroll-animate-right" data-aos="fade-up" style="margin-bottom: 25px;">
                        <div class="bottom-gd2-active ripple" style="background: white; padding: 45px 35px; border-radius: 15px; box-shadow: 0 8px 30px rgba(0,0,0,0.12); transition: transform 0.3s ease, box-shadow 0.3s ease; height: 100%; border-top: 5px solid #f39c12; cursor: pointer;">
                            <div style="background: linear-gradient(135deg, #f39c12 0%, #e67e22 100%); width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; box-shadow: 0 6px 20px rgba(243, 156, 18, 0.4);">
                                <span class="fa fa-star-o" aria-hidden="true" style="font-size: 40px; color: white;"></span>
                            </div>
                            <h3 class="my-4" style="font-size: 24px; font-weight: 600;">Our Values</h3>
                            <p style="line-height: 1.8; font-size: 16px; color: #555;">We strive to keep a homely and family like environment where service users can exercise their rights, independence and individuality.</p>
                        </div>
                    </div>
                </div>

                <!-- testimonials with carousel -->
                <div class="testimonials py-md-5 py-5" style="margin-top: 50px; background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); margin-left: -15px; margin-right: -15px; padding: 70px 15px !important;">
                    <div class="container">
                        <!-- Modern Section Title -->
                        <div class="modern-section-title scroll-animate">
                            <div class="title-tag">What People Say</div>
                            <h3>TESTIMONIALS</h3>
                            <div class="title-underline"></div>
                        </div>
                        
                        <div class="testimonial-carousel">
                            <div class="row justify-content-center">
                                <?php if(count($testimonials)>0): ?>
                                    <div class="col-lg-10">
                                        <div class="testimonial-track" id="testimonialTrack">
                                            <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="testimonial-slide">
                                                    <div style="background: white; padding: 50px 45px; border-radius: 15px; box-shadow: 0 10px 40px rgba(0,0,0,0.15); position: relative; min-height: 200px; display: flex; align-items: center;">
                                                        <div style="position: absolute; top: -15px; left: 30px; background: #6ecfe9; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(110, 207, 233, 0.4);">
                                                            <span class="fa fa-quote-left" aria-hidden="true" style="color: white; font-size: 24px;"></span>
                                                        </div>
                                                        <p style="padding: 0; background: transparent; border: none; box-shadow: none; line-height: 1.9; font-size: 18px; margin: 25px 0 0 0; color: #333; text-align: center;"><?php echo e($testimonial->comment); ?></p>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                        
                                        <!-- Carousel Controls -->
                                        <div class="carousel-controls">
                                            <button class="carousel-btn" onclick="previousTestimonial()">
                                                <i class="fa fa-chevron-left"></i>
                                            </button>
                                            <button class="carousel-btn" onclick="nextTestimonial()">
                                                <i class="fa fa-chevron-right"></i>
                                            </button>
                                        </div>
                                        
                                        <!-- Indicators -->
                                        <div class="carousel-indicators" id="testimonialIndicators"></div>
                                    </div>
                                <?php else: ?>
                                    <p class="noresult"><i class="fa fa-info-circle"></i> No testimonial results found</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //testimonials -->

                <!-- services -->
                <div class="fetured-info" style="margin-top: 80px; padding: 70px 0; background: #f8f9fa;">
                    <div class="container">
                        <!-- Modern Section Title -->
                        <div class="modern-section-title alt scroll-animate">
                            <div class="title-tag">Learn About Us</div>
                            <h3>WHO WE ARE</h3>
                            <div class="title-underline"></div>
                        </div>
                        
                        <div class="row fetured-sec" style="align-items: center; margin-bottom: 50px;">
                            <div class="col-lg-5 col-md-12 scroll-animate-left" style="margin-bottom: 30px;">
                                <div class="img-effect" style="border-radius: 15px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.15); transform: rotate(-2deg); transition: transform 0.3s ease;">
                                    <img src="/images/img1.jpg" alt="Front Image" class="img-fluid image1" style="width: 100%; display: block; transform: rotate(2deg) scale(1.1);">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 serv_bottom feature-grids scroll-animate-right">
                                <div class="featured-left text-left">
                                    <div class="bottom-gd fea active" data-aos="fade-left" style="background: white; padding: 40px; border-radius: 15px; box-shadow: 0 8px 30px rgba(0,0,0,0.1);">
                                        <h3 class="tittle title-move" style="margin-top: 0; margin-bottom: 30px; font-size: 32px; color: #333;">Thornton Lodge</h3>
                                        <p class="text-justify" style="line-height: 1.9; margin-bottom: 25px; font-size: 16px; color: #555;">THORNTON LODGE is a Residential Home for Adults and Older People with Mental Health Problems and is located in the prime area of Thornton Heath, accessible within a 5-minute walk to the main railway station, whilst a network of public transport is within a stone's throw which gives access to Central London and Croydon town centre.</p>
                                        <p class="text-justify" style="line-height: 1.9; font-size: 16px; color: #555;">Overlooking the front of the property there is an array of services and amenities; newsagents, grocery shop, laundry, dentists, doctors' practice, chemist, library and restaurant.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="bottom-gd fea active scroll-animate-zoom" data-aos="fade-up" style="background: white; padding: 45px 50px; border-radius: 15px; box-shadow: 0 8px 30px rgba(0,0,0,0.1); border-left: 6px solid #6ecfe9;">
                                    <p class="text-justify" style="font-size: 16px; line-height: 1.9; margin-bottom: 25px; color: #555;">Thornton Lodge is a Residential Home registered under the Health and Social Care Act 2008 by the Care Quality Commission.</p>

                                    <p class="text-justify" style="font-size: 16px; line-height: 1.9; margin: 0; color: #555;">The Home is visited between regular intervals, both announced and unannounced by the Care Quality Commission. We are proud to highlight that our inspections are overall rated as <strong style="color: #27ae60; font-size: 18px;">"Good"</strong>. Our reports are all publicly available to read via the Care Quality Commission's website.</p>
                                </div>
                            </div>
                        </div>

                        <!-- report -->
                        <div class="testimonials py-md-5 py-0" style="margin-top: 80px;">
                            <!-- Modern Section Title -->
                            <div class="modern-section-title scroll-animate">
                                <div class="title-tag">Official Reports</div>
                                <h3>REPORT FROM CQC</h3>
                                <div class="title-underline"></div>
                            </div>
                            
                            <div class="container">
                                <div class="row" style="align-items: stretch;">
                                    <div class="col-lg-6 col-md-12 scroll-animate-left" style="margin-bottom: 30px;">
                                        <div style="background: white; padding: 25px; border-radius: 15px; box-shadow: 0 8px 30px rgba(0,0,0,0.1); height: 100%;">
                                            <script type="text/javascript" src="//www.cqc.org.uk/sites/all/modules/custom/cqc_widget/widget.js?data-id=1-414373614&data-host=www.cqc.org.uk&type=location"></script>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 scroll-animate-right" style="margin-bottom: 30px;">
                                        <div style="background: white; padding: 15px; border-radius: 15px; box-shadow: 0 8px 30px rgba(0,0,0,0.1); height: 100%;">
                                            <iframe style="border: none; border-radius: 10px; width: 100%; height: 100%; min-height: 300px;" src="https://www.youtube.com/embed/oxCXNURV3DM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- //report -->

                        <!-- Modern Section Title for Availability -->
                        <div class="modern-section-title alt scroll-animate" style="margin-top: 100px;">
                            <div class="title-tag">Room Status</div>
                            <h3>AVAILABILITY</h3>
                            <div class="title-underline"></div>
                        </div>
                        
                        <div class="row mid-slide" style="margin-bottom: 20px;">
                            <?php if(count($rooms)>0): ?>
                                <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-4 col-md-6 featured-content scroll-animate-zoom" style="margin-bottom: 40px;">
                                        <div class="ripple" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 8px 30px rgba(0,0,0,0.12); transition: transform 0.3s ease, box-shadow 0.3s ease; height: 100%; position: relative; cursor: pointer;">
                                            <div style="position: relative; overflow: hidden; height: 240px;">
                                                <img src="/Uploads/room_cover_images/<?php echo e($room->cover_image); ?>" alt="<?php echo e($room->title); ?>" class="img-fluid image1" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;">
                                            </div>
                                            <span class="money" style="position: absolute; top: 15px; right: 15px; background: #27ae60; color: white; border-radius: 25px; padding: 8px 18px; font-weight: 600; box-shadow: 0 4px 15px rgba(39, 174, 96, 0.4);">Available</span>
                                            <!--/Property_info-->
                                            <div class="property-info-list" style="padding: 25px;">
                                                <div class="footer-properties" style="margin-bottom: 15px;">
                                                    <a class="admin" href="#" style="font-weight: 700; font-size: 20px; color: #333; text-decoration: none; display: block; margin-bottom: 10px;"><?php echo e($room->title); ?></a>
                                                </div>
                                                <p style="line-height: 1.7; margin-bottom: 20px; color: #666; font-size: 15px;"><?php echo e($room->excerpt); ?></p>
                                                <a href="<?php echo e(route('contact')); ?>" class="ripple" style="display: inline-block; background: #6ecfe9; color: white; padding: 10px 25px; border-radius: 25px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(110, 207, 233, 0.3);">Enquire Now</a>
                                            </div>
                                            <!--//Property_info-->
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            <?php else: ?>
                                <p class="noresult"><i class="fa fa-info-circle"></i> No room results found</p>
                            <?php endif; ?>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="text-center scroll-animate" style="margin-top: 30px; margin-bottom: 40px;">
                                    <a href="<?php echo e(route('vacancies')); ?>" class="btn btn-info btn-lg ripple" style="background: linear-gradient(135deg, #6ecfe9 0%, #5ab8d9 100%); padding: 16px 50px; border: none; border-radius: 30px; transition: all 0.3s ease; box-shadow: 0 6px 25px rgba(110, 207, 233, 0.4); font-size: 18px; font-weight: 600; color: white; text-decoration: none; display: inline-block;">See More Rooms <i class="fa fa-arrow-right" style="margin-left: 10px;"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- //services -->
    </section>
    <!-- //ab -->

    <!--/counter with animation -->
    <section class="stats room-status scroll-animate" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 60px 0; position: relative; overflow: hidden;">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-lg-5 col-md-6 scroll-animate-left" style="margin-bottom: 30px;">
                    <div class="counter ripple" style="background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(10px); padding: 40px 30px; border-radius: 20px; box-shadow: 0 8px 32px rgba(0,0,0,0.2); border: 1px solid rgba(255, 255, 255, 0.2); cursor: pointer;">
                        <div style="background: rgba(255, 255, 255, 0.2); width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                            <i class="fa fa-bed" style="font-size: 32px; color: white;"></i>
                        </div>
                        <h3 class="counter-number" data-count="<?php echo e($room_info->beds ?? 0); ?>">0</h3>
                        <p class="count-text" style="color: rgba(255, 255, 255, 0.9); font-size: 18px; font-weight: 500; margin: 0;">Total Number of Beds</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 scroll-animate-right" style="margin-bottom: 30px;">
                    <div class="counter ripple" style="background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(10px); padding: 40px 30px; border-radius: 20px; box-shadow: 0 8px 32px rgba(0,0,0,0.2); border: 1px solid rgba(255, 255, 255, 0.2); cursor: pointer;">
                        <div style="background: rgba(255, 255, 255, 0.2); width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                            <i class="fa fa-check-circle" style="font-size: 32px; color: white;"></i>
                        </div>
                        <h3 class="counter-number" data-count="<?php echo e($count_room  ?? 0); ?>">0</h3>
                        <p class="count-text" style="color: rgba(255, 255, 255, 0.9); font-size: 18px; font-weight: 500; margin: 0;">Total Number of Vacancies</p>
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
        <div id="tourrightDIV">
            <div class="middle-tem-insidel" >
                <div class="progress-info">
                    <div class="left-build-main-temps" style="width: 100% !important;">
                        <!-- Modern Section Title -->
                        <div class="modern-section-title scroll-animate" style="text-align: left; margin-left: 15px; margin-top: 40px; margin-bottom: 40px;">
                            <div class="title-tag">What We Offer</div>
                            <h3 style="text-align: left;">OUR SERVICES</h3>
                            <div class="title-underline" style="margin-left: 0;"></div>
                        </div>

                        <ul class="tic-info list-unstyled">
                            <li class="progress-tittle scroll-animate-delay-1">
                                <span class="fa fa-hotel"></span> Accommodation
                            </li>
                            <li class="progress-tittle scroll-animate-delay-2">
                                <span class="fa fa-plus-circle"></span> Admission Criteria
                            </li>
                            <li class="progress-tittle scroll-animate-delay-3">
                                <span class="fa fa-thumbs-o-up"></span> Facilities
                            </li>
                            <li class="progress-tittle scroll-animate-delay-4">
                                <span class="fa fa-bar-chart-o"></span> Activities & Events
                            </li>
                            <li class="progress-tittle scroll-animate-delay-1">
                                <span class="fa fa-hospital-o"></span> Principal of Care
                            </li>
                            <li class="progress-tittle scroll-animate-delay-2">
                                <span class="fa fa-bullseye"></span> Staff Training
                            </li>
                        </ul>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--//middle section -->
    </div>
    <!-- middle section -->
    <!--//middle section -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('extra_script'); ?>
<style>
/* Scroll Animation Styles */
.scroll-animate {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.8s ease, transform 0.8s ease;
}

.scroll-animate.animate-active {
    opacity: 1;
    transform: translateY(0);
}

.scroll-animate-left {
    opacity: 0;
    transform: translateX(-50px);
    transition: opacity 0.8s ease, transform 0.8s ease;
}

.scroll-animate-left.animate-active {
    opacity: 1;
    transform: translateX(0);
}

.scroll-animate-right {
    opacity: 0;
    transform: translateX(50px);
    transition: opacity 0.8s ease, transform 0.8s ease;
}

.scroll-animate-right.animate-active {
    opacity: 1;
    transform: translateX(0);
}

.scroll-animate-zoom {
    opacity: 0;
    transform: scale(0.9);
    transition: opacity 0.8s ease, transform 0.8s ease;
}

.scroll-animate-zoom.animate-active {
    opacity: 1;
    transform: scale(1);
}

.scroll-animate-delay-1 {
    transition-delay: 0.1s;
}

.scroll-animate-delay-2 {
    transition-delay: 0.2s;
}

.scroll-animate-delay-3 {
    transition-delay: 0.3s;
}

.scroll-animate-delay-4 {
    transition-delay: 0.4s;
}

/* Hover effects for cards */
.bottom-gd:hover,
.bottom-gd2-active:hover,
.featured-content > div:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 50px rgba(0,0,0,0.2) !important;
}

.featured-content img:hover {
    transform: scale(1.1);
}

/* Smooth transitions */
* {
    scroll-behavior: smooth;
}

/* Hero CTA button hover effects */
.banner a:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 40px rgba(0, 0, 0, 0.4) !important;
}

/* Feature cards hover effects on hero */
.banner .row > div > div:hover {
    transform: translateY(-5px);
    background: rgba(255, 255, 255, 0.25) !important;
}

@media (max-width: 768px) {
    .banner h1 {
        font-size: 42px !important;
    }
    
    .banner h1 span {
        font-size: 52px !important;
    }
    
    .banner p:first-of-type {
        font-size: 20px !important;
    }
}
</style>

<script>
// Smooth Scroll Animation on Page Load
document.addEventListener('DOMContentLoaded', function() {
    // Create Intersection Observer for scroll animations
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver(function(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-active');
            }
        });
    }, observerOptions);

    // Observe all elements with scroll animation classes
    const animateElements = document.querySelectorAll('.scroll-animate, .scroll-animate-left, .scroll-animate-right, .scroll-animate-zoom');
    animateElements.forEach(element => {
        observer.observe(element);
    });

    // Timeline animation
    const timelineItems = document.querySelectorAll('.timeline-item');
    const timelineObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            }
        });
    }, { threshold: 0.2 });

    timelineItems.forEach(item => {
        timelineObserver.observe(item);
    });

    // Animated Counter
    const counters = document.querySelectorAll('.counter-number');
    let counterAnimated = false;
    
    const counterObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting && !counterAnimated) {
                counterAnimated = true;
                counters.forEach(counter => {
                    const target = parseInt(counter.getAttribute('data-count'));
                    const duration = 2000;
                    const step = target / (duration / 16);
                    let current = 0;
                    
                    const updateCounter = () => {
                        current += step;
                        if (current < target) {
                            counter.textContent = Math.floor(current);
                            requestAnimationFrame(updateCounter);
                        } else {
                            counter.textContent = target;
                        }
                    };
                    
                    updateCounter();
                });
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => {
        counterObserver.observe(counter.parentElement);
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href !== '#' && document.querySelector(href)) {
                e.preventDefault();
                document.querySelector(href).scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
});

// Testimonial Carousel
let currentTestimonial = 0;
const testimonialCount = document.querySelectorAll('.testimonial-slide').length;

function updateTestimonialCarousel() {
    const track = document.getElementById('testimonialTrack');
    if (track) {
        track.style.transform = `translateX(-${currentTestimonial * 100}%)`;
        updateIndicators();
    }
}

function nextTestimonial() {
    currentTestimonial = (currentTestimonial + 1) % testimonialCount;
    updateTestimonialCarousel();
}

function previousTestimonial() {
    currentTestimonial = (currentTestimonial - 1 + testimonialCount) % testimonialCount;
    updateTestimonialCarousel();
}

function goToTestimonial(index) {
    currentTestimonial = index;
    updateTestimonialCarousel();
}

function updateIndicators() {
    const indicators = document.getElementById('testimonialIndicators');
    if (indicators) {
        indicators.innerHTML = '';
        for (let i = 0; i < testimonialCount; i++) {
            const dot = document.createElement('div');
            dot.className = 'indicator-dot' + (i === currentTestimonial ? ' active' : '');
            dot.onclick = () => goToTestimonial(i);
            indicators.appendChild(dot);
        }
    }
}

// Initialize indicators
document.addEventListener('DOMContentLoaded', function() {
    updateIndicators();
    
    // Auto-rotate testimonials every 5 seconds
    if (testimonialCount > 1) {
        setInterval(nextTestimonial, 5000);
    }
});

// Parallax effect for hero
window.addEventListener('scroll', function() {
    const scrolled = window.pageYOffset;
    const parallax = document.querySelector('.parallax-hero');
    if (parallax) {
        parallax.style.backgroundPositionY = scrolled * 0.5 + 'px';
    }
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/pages/index.blade.php ENDPATH**/ ?>