@extends('layout.main')
@section('con_title')
    <title>{{$page_title}}</title>
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="Abstract" content="{{$Abstract}}" />
@endsection
@section('extra_css')
    <style>
        .hero-activities {
            background: linear-gradient(rgba(44, 62, 80, 0.6), rgba(44, 62, 80, 0.7)), url(/images/slider/activity.jpg) no-repeat center center;
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
        
        .hero-activities h1 {
            font-size: 56px;
            font-weight: 600;
            margin-bottom: 20px;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.3);
        }
        
        .activities-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.08);
            height: 100%;
            transition: all 0.3s ease;
        }
        
        .activities-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(0,0,0,0.15);
        }
        
        .activities-card p {
            font-size: 17px;
            line-height: 1.8;
            color: #555;
            margin-bottom: 15px;
        }
        
        .activities-card ul {
            margin-bottom: 25px;
        }
        
        .activities-card ul li {
            font-size: 16px;
            color: #555;
            margin-bottom: 8px;
            line-height: 1.7;
        }
        
        .activities-image {
            width: 100%;
            height: 300px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 50px rgba(0,0,0,0.15);
        }
        
        .activities-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 20px;
        }
    </style>
@endsection
@section('content')
    <!-- Hero Section -->
    <section class="hero-activities banner scroll-animate parallax-hero">
        <div class="container" style="max-width: 1600px; padding: 0 40px;">
            <div class="hero-content">
                <h1>Activities</h1>
                <p style="font-size: 20px; max-width: 700px; margin: 20px auto 0; line-height: 1.8;">
                    Engaging and enjoyable experiences that promote wellbeing and social interaction
                </p>
            </div>
        </div>
    </section>

    <!-- Main Activities Section -->
    <section style="background: #ffffff; padding: 100px 0;">
        <div class="container-fluid" style="max-width: 1600px; padding: 0 20px;">
            <div class="modern-section-title scroll-animate">
                <div class="title-tag">ENGAGE & ENJOY</div>
                <h3>Activities & Events</h3>
                <div class="title-underline"></div>
            </div>
            
            <div class="row align-items-center">
                <div class="col-lg-4 mb-4 scroll-animate-left">
                    <div class="activities-image float-animation">
                        <img src="/images/activity_cir.jpg" alt="Activities at Thornton Lodge">
                    </div>
                </div>
                <div class="col-lg-8 mb-4 scroll-animate-right">
                    <div class="activities-card">
                        <h3 style="color: #7BA5C7; font-weight: 700; margin-bottom: 25px; font-size: 28px;">Resident Activities</h3>
                        <p>The Home encourages all the service users to participate in planned activities of their choice, which have a beneficial effect in promoting self-confidence and esteem.</p>
                        
                        <p>Activities vary and can include setting tables, watering plants, helping with the home chores, gardening, going out for a walk, discussing the news of the day and engaging in reminiscence therapy, playing games and participating in musical quiz'. Because everyday is not alike, so the individual mood fluctuates, activity is promoted, but not forced.</p>
                        
                        <p><strong>Other special events are on during the year such as:</strong></p>
                        <ul class="space-text" style="list-style-type: none; padding-left: 15px;">
                            <li><i class="fa fa-check-circle" style="color: #7BA5C7; margin-right: 10px;"></i>Organised visits to places of interests</li>
                            <li><i class="fa fa-check-circle" style="color: #7BA5C7; margin-right: 10px;"></i>Barbecue</li>
                            <li><i class="fa fa-check-circle" style="color: #7BA5C7; margin-right: 10px;"></i>Birthday Parties</li>
                            <li><i class="fa fa-check-circle" style="color: #7BA5C7; margin-right: 10px;"></i>Going to Cinema and Theatre</li>
                        </ul>
                        
                        <p>Whilst it is encouraged for Residents to participate in activities, their wish not to is never disputed.</p>
                        
                        <p>Thornton Lodge prides itself on celebrating an ethnically diverse work-force. Our carers hail from many different countries and rich cultural backgrounds and some of the languages spoken at Thornton lodge include, English, Mauritian Creole, Polish, Lithuanian, Tamil, Romanian, Arabic, Hindi and Urdu.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Tuck Shop Section -->
    <section style="background: linear-gradient(135deg, #F0F7FA 0%, #E8F4F8 100%); padding: 100px 0;">
        <div class="container-fluid" style="max-width: 1600px; padding: 0 20px;">
            <div class="modern-section-title scroll-animate">
                <div class="title-tag">CONVENIENCE</div>
                <h3>Tuck Shop</h3>
                <div class="title-underline"></div>
            </div>
            
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 scroll-animate-left">
                    <div class="activities-card">
                        <h3 style="color: #7BA5C7; font-weight: 700; margin-bottom: 25px; font-size: 28px;">Our Resident Tuck Shop</h3>
                        <p>Thornton Lodge now operates its own internal Tuck Shop for the benefit of its Residents.</p>
                        
                        <p>The Tuck Shop functions as a non-profit entity and acts as a means for those Residents who cannot access the community, and helps promote independence and choice. The Tuck Shop offers goods such as toiletries, toothbrushes, shower gels, shampoos, drinks, snacks and so on.</p>
                        
                        <p>The Home also actively works alongside its Residents to ensure we are providing them with their choice of essentials and treats.</p>
                        
                        <div style="background: linear-gradient(135deg, #7BA5C7 0%, #6B94B5 100%); padding: 20px; color: white; border-radius: 15px; margin-top: 30px; box-shadow: 0 6px 20px rgba(123, 165, 199, 0.35);">
                            <h4 style="margin-bottom: 10px; color: white; font-weight: 600; font-size: 20px;"><i class="fa fa-clock-o" style="margin-right: 10px;"></i>Opening Hours</h4>
                            <p style="margin: 0; color: white; font-size: 16px;">The Tuck Shop is open on Fridays from 11am - 12pm</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 scroll-animate-right">
                    <div class="activities-image float-animation">
                        <img src="/images/tuck_shop.jpg" alt="Tuck Shop at Thornton Lodge">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('extra_script')
@endsection