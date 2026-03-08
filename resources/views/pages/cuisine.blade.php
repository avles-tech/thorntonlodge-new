@extends('layout.main')
@section('con_title')
    <title>{{$page_title}}</title>
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="Abstract" content="{{$Abstract}}" />
@endsection
@section('extra_css')
    <link href='/css/lightbox/lightgallery.css' rel='stylesheet' type='text/css'>
    <style>
        .hero-cuisine {
            background: linear-gradient(rgba(44, 62, 80, 0.6), rgba(44, 62, 80, 0.7)), url(/images/slider/bbq1.jpg) no-repeat center center;
            background-size: cover;
            background-position: center bottom;
            min-height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            background-attachment: fixed;
        }
        
        .hero-cuisine h1 {
            font-size: 56px;
            font-weight: 600;
            margin-bottom: 20px;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.3);
        }
        
        .cuisine-intro {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.08);
            margin-bottom: 50px;
            text-align: center;
        }
        
        .cuisine-intro p {
            font-size: 18px;
            line-height: 1.8;
            color: #555;
            margin-bottom: 0;
        }
        
        .gallery-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            margin-bottom: 30px;
            height: 100%;
        }
        
        .gallery-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 50px rgba(0,0,0,0.15);
        }
        
        .gallery-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: all 0.5s ease;
        }
        
        .gallery-card:hover img {
            transform: scale(1.05);
        }
        
        .menu-button {
            display: inline-block;
            background: linear-gradient(135deg, #7BA5C7 0%, #6B94B5 100%);
            color: white;
            padding: 18px 40px;
            border-radius: 50px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(123, 165, 199, 0.4);
            margin-top: 20px;
            cursor: pointer;
        }
        
        .menu-button:hover {
            background: linear-gradient(135deg, #6B94B5 0%, #5A8A9A 100%);
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(123, 165, 199, 0.5);
            color: white;
            text-decoration: none;
        }
        
        .menu-button span {
            font-weight: bold;
        }
        
        .menu-button i {
            margin-right: 10px;
        }
    </style>
@endsection
@section('content')
    <!-- Hero Section -->
    <section class="hero-cuisine banner scroll-animate parallax-hero">
        <div class="container" style="max-width: 1600px; padding: 0 40px;">
            <div class="hero-content">
                <h1>Our Cuisine</h1>
                <p style="font-size: 20px; max-width: 700px; margin: 20px auto 0; line-height: 1.8;">
                    Delicious, freshly prepared meals tailored to our residents' preferences and dietary needs
                </p>
            </div>
        </div>
    </section>
    
    <!-- Main Content Section -->
    <section style="background: #ffffff; padding: 100px 0;">
        <div class="container-fluid" style="max-width: 1600px; padding: 0 20px;">
            <div class="modern-section-title scroll-animate">
                <div class="title-tag">DINING</div>
                <h3>Our Food & Dining Experience</h3>
                <div class="title-underline"></div>
            </div>
            
            <div class="cuisine-intro scroll-animate">
                <p>The menu is decided after close consultation with the Residents. All food is freshly prepared every day by a very dedicated chef who takes great pride in the preparation. All dietary needs are met with alternative choices.</p>
            </div>
            
            <div class="row">
                <!-- Row 1 -->
                <div class="col-lg-4 col-md-6 mb-4 scroll-animate-zoom scroll-animate-delay-1">
                    <div class="gallery-card">
                        <img src="/images/cuisine/TL_4598.jpg" alt="Cuisine at Thornton Lodge" class="img-fluid">
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4 scroll-animate-zoom scroll-animate-delay-2">
                    <div class="gallery-card">
                        <img src="/images/cuisine/TL_4602.jpg" alt="Cuisine at Thornton Lodge" class="img-fluid">
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4 scroll-animate-zoom scroll-animate-delay-3">
                    <div class="gallery-card">
                        <img src="/images/cuisine/TL_4631.jpg" alt="Cuisine at Thornton Lodge" class="img-fluid">
                    </div>
                </div>
                
                <!-- Row 2 -->
                <div class="col-lg-4 col-md-6 mb-4 scroll-animate-zoom scroll-animate-delay-1">
                    <div class="gallery-card">
                        <img src="/images/cuisine/TL_4636.jpg" alt="Cuisine at Thornton Lodge" class="img-fluid">
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4 scroll-animate-zoom scroll-animate-delay-2">
                    <div class="gallery-card">
                        <img src="/images/cuisine/TL_4649.jpg" alt="Cuisine at Thornton Lodge" class="img-fluid">
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4 scroll-animate-zoom scroll-animate-delay-3">
                    <div class="gallery-card">
                        <img src="/images/cuisine/TL_4659.jpg" alt="Cuisine at Thornton Lodge" class="img-fluid">
                    </div>
                </div>
                
                <!-- Row 3 - BBQ -->
                <div class="col-lg-4 col-md-6 mb-4 scroll-animate-zoom scroll-animate-delay-1">
                    <div class="gallery-card">
                        <img src="/images/cuisine/bbq1.jpg" alt="BBQ at Thornton Lodge" class="img-fluid">
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4 scroll-animate-zoom scroll-animate-delay-2">
                    <div class="gallery-card">
                        <img src="/images/cuisine/bbq3.jpg" alt="BBQ at Thornton Lodge" class="img-fluid">
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4 scroll-animate-zoom scroll-animate-delay-3">
                    <div class="gallery-card">
                        <img src="/images/cuisine/bbq6.jpg" alt="BBQ at Thornton Lodge" class="img-fluid">
                    </div>
                </div>
            </div>
            
            <div class="text-center scroll-animate" style="margin-top: 20px;">
                <a href="javascript:void(0);" onclick="window.open('{{ $menu_pdf_path }}', '_blank', 'width=1000,height=600');" class="menu-button ripple">
                    <i class="fa fa-file-pdf-o"></i>View <span>Menu of the Year</span>
                </a>
            </div>
        </div>
    </section>
    
    <!-- Special Events Section -->
    <section style="background: linear-gradient(135deg, #F0F7FA 0%, #E8F4F8 100%); padding: 80px 0;">
        <div class="container" style="max-width: 1200px;">
            <div class="modern-section-title scroll-animate">
                <div class="title-tag">EVENTS</div>
                <h3>Special Dining Events</h3>
                <div class="title-underline"></div>
            </div>
            
            <div class="row">
                <div class="col-md-6 mb-4 scroll-animate-left">
                    <div style="background: white; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.08); overflow: hidden; height: 100%;">
                        <img src="/images/cuisine/bbq8.jpg" alt="BBQ Event" style="width: 100%; height: 250px; object-fit: cover;">
                        <div style="padding: 30px;">
                            <h3 style="font-size: 24px; font-weight: 700; color: #2C3E50; margin-bottom: 15px;">Summer BBQ Events</h3>
                            <p style="font-size: 16px; line-height: 1.7; color: #555; margin-bottom: 0;">
                                We regularly host special BBQ events during the summer months, providing a wonderful opportunity for residents to enjoy outdoor dining and socialize in our gardens.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 mb-4 scroll-animate-right">
                    <div style="background: white; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.08); overflow: hidden; height: 100%;">
                        <img src="/images/cuisine/bbq5.jpg" alt="Special Dining" style="width: 100%; height: 250px; object-fit: cover;">
                        <div style="padding: 30px;">
                            <h3 style="font-size: 24px; font-weight: 700; color: #2C3E50; margin-bottom: 15px;">Holiday Celebrations</h3>
                            <p style="font-size: 16px; line-height: 1.7; color: #555; margin-bottom: 0;">
                                Throughout the year, we celebrate holidays and special occasions with themed dining events, featuring festive menus and a warm, communal atmosphere.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('extra_script')
    <script src="/js/lightbox/jquery.min.js"></script>
    <script src="/js/lightbox/picturefill.min.js"></script>
    <script src="/js/lightbox/lightgallery-all.min.js"></script>
    <script src="/lib/jquery.mousewheel.min.js"></script>
@endsection