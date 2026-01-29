@extends('layout.main')
@section('con_title')
    <title>{{$page_title}}</title>
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="Abstract" content="{{$Abstract}}" />
@endsection
@section('extra_css')
    <style>
        .hero-facilities {
            background: linear-gradient(rgba(44, 62, 80, 0.6), rgba(44, 62, 80, 0.7)), url(/images/slider/THORNTON\ LODGE_6365.jpg) no-repeat center center;
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
        
        .hero-facilities h1 {
            font-size: 56px;
            font-weight: 600;
            margin-bottom: 20px;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.3);
        }
        
        .facilities-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.08);
            height: 100%;
            transition: all 0.3s ease;
        }
        
        .facilities-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(0,0,0,0.15);
        }
        
        .facilities-card h5 {
            color: #7BA5C7;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .facilities-card p {
            font-size: 17px;
            line-height: 1.8;
            color: #555;
            margin-bottom: 25px;
        }
        
        .facilities-card ul {
            margin-bottom: 25px;
            padding-left: 0;
            list-style-type: none;
        }
        
        .facilities-card ul li {
            font-size: 16px;
            color: #555;
            margin-bottom: 12px;
            line-height: 1.7;
            padding-left: 35px;
            position: relative;
        }
        
        .facilities-card ul li:before {
            content: "✓";
            position: absolute;
            left: 0;
            top: 0;
            color: #7BA5C7;
            font-weight: bold;
            font-size: 18px;
        }
        
        .facilities-image {
            width: 100%;
            height: 350px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 50px rgba(0,0,0,0.15);
        }
        
        .facilities-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 20px;
        }
        
        .facility-feature-box {
            background: linear-gradient(135deg, #F0F7FA 0%, #E8F4F8 100%);
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            margin-bottom: 30px;
            transition: all 0.3s ease;
            border-bottom: 4px solid #7BA5C7;
        }
        
        .facility-feature-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(123, 165, 199, 0.2);
        }
        
        .facility-feature-box i {
            font-size: 40px;
            color: #7BA5C7;
            margin-bottom: 15px;
        }
        
        .facility-feature-box h5 {
            font-size: 18px;
            font-weight: 700;
            color: #2C3E50;
            margin: 0;
        }
    </style>
@endsection
@section('content')
    <!-- Hero Section -->
    <section class="hero-facilities banner scroll-animate parallax-hero">
        <div class="container" style="max-width: 1600px; padding: 0 40px;">
            <div class="hero-content">
                <h1>Our Facilities</h1>
                <p style="font-size: 20px; max-width: 700px; margin: 20px auto 0; line-height: 1.8;">
                    Comfortable amenities and services designed for our residents' convenience and wellbeing
                </p>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section style="background: #ffffff; padding: 100px 0;">
        <div class="container-fluid" style="max-width: 1600px; padding: 0 20px;">
            <div class="modern-section-title scroll-animate">
                <div class="title-tag">AMENITIES</div>
                <h3>Facilities & Services</h3>
                <div class="title-underline"></div>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 scroll-animate-zoom scroll-animate-delay-1">
                    <div class="facility-feature-box ripple">
                        <i class="fa fa-arrows-v"></i>
                        <h5>2 Passenger Lifts</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 scroll-animate-zoom scroll-animate-delay-2">
                    <div class="facility-feature-box ripple">
                        <i class="fa fa-cutlery"></i>
                        <h5>3 Kitchens for Service Users</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 scroll-animate-zoom scroll-animate-delay-3">
                    <div class="facility-feature-box ripple">
                        <i class="fa fa-coffee"></i>
                        <h5>3 Dining Areas</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 scroll-animate-zoom scroll-animate-delay-4">
                    <div class="facility-feature-box ripple">
                        <i class="fa fa-users"></i>
                        <h5>3 Separate Sitting Rooms</h5>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 scroll-animate-zoom scroll-animate-delay-1">
                    <div class="facility-feature-box ripple">
                        <i class="fa fa-home"></i>
                        <h5>2 Indoor Conservatories</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 scroll-animate-zoom scroll-animate-delay-2">
                    <div class="facility-feature-box ripple">
                        <i class="fa fa-tree"></i>
                        <h5>2 Spacious Gardens</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 scroll-animate-zoom scroll-animate-delay-3">
                    <div class="facility-feature-box ripple">
                        <i class="fa fa-car"></i>
                        <h5>Large Parking Area</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 scroll-animate-zoom scroll-animate-delay-4">
                    <div class="facility-feature-box ripple">
                        <i class="fa fa-leaf"></i>
                        <h5>Outdoor Conservatory</h5>
                    </div>
                </div>
            </div>
            
            <div class="row align-items-center mt-5">
                <div class="col-lg-8 mb-4 scroll-animate-right">
                    <div class="facilities-card">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <h5>Community Facilities</h5>
                                <p>A service user is entitled to the same community facilities as any normal members of the community. Services including, Doctors, health visitors and chiropodists are available and these practitioners should visit service users in privacy within the home. Service users can have access to any centres and other community facilities. Arrangements for this can be made through the local authority. Other services, hairdressers, optician, library, dentist, etc. can be arranged. Private consultation is chargeable</p>
                            </div>
                            <div class="col-md-6 mb-4">
                                <h5>Telephone</h5>
                                <p>The home provides two payphones for the use of the service users.</p>
                                
                                <h5>Recreational Facilities</h5>
                                <p>Recreational and occupational facilities are provided and service users are encouraged to participate. However, their choice and decision to be involved are well taken into consideration.</p>
                            </div>
                        </div>
                        
                        <div style="background: #f8f9fa; border-radius: 15px; padding: 25px; border-left: 6px solid #7BA5C7; margin-top: 10px;">
                            <h5 style="margin-bottom: 15px;">Visitors</h5>
                            <p style="margin-bottom: 0;">Visitors will be welcome during the daytime although some residents may prefer not to receive visitors during mealtimes or early afternoon when they may wish to have a nap.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 mb-4 scroll-animate-left">
                    <div class="facilities-image float-animation">
                        <img src="/images/img4.jpg" alt="Facilities at Thornton Lodge">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('extra_script')
@endsection