@extends('layout.main')
@section('con_title')
    <title>{{$page_title}}</title>
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="Abstract" content="{{$Abstract}}" />
@endsection
@section('extra_css')
    <style>
        .hero-job-vacancy {
            background: linear-gradient(rgba(44, 62, 80, 0.6), rgba(44, 62, 80, 0.7)), url(/images/slider/contact.jpg) no-repeat center center;
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
        
        .hero-job-vacancy h1 {
            font-size: 56px;
            font-weight: 600;
            margin-bottom: 20px;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.3);
        }
        
        .job-vacancy-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.08);
            height: 100%;
            transition: all 0.3s ease;
        }
        
        .job-vacancy-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(0,0,0,0.15);
        }
        
        .job-vacancy-card h5 {
            color: #7BA5C7;
            font-weight: 700;
            margin-bottom: 10px;
            font-size: 18px;
        }
        
        .job-vacancy-card p {
            font-size: 16px;
            color: #555;
            margin-bottom: 25px;
            line-height: 1.7;
        }
        
        .job-vacancy-card a {
            color: #7BA5C7;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .job-vacancy-card a:hover {
            color: #F4C4A0;
        }
        
        .contact-info-card {
            background: linear-gradient(135deg, #F0F7FA 0%, #E8F4F8 100%);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.08);
            margin-bottom: 30px;
            height: 100%;
            border-left: 6px solid #7BA5C7;
        }
    </style>
@endsection
@section('content')
    <!-- Hero Section -->
    <section class="hero-job-vacancy banner scroll-animate parallax-hero">
        <div class="container" style="max-width: 1600px; padding: 0 40px;">
            <div class="hero-content">
                <h1>Job Vacancies</h1>
                <p style="font-size: 20px; max-width: 700px; margin: 20px auto 0; line-height: 1.8;">
                    Join our dedicated team and make a positive difference in the lives of our residents
                </p>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section style="background: #ffffff; padding: 100px 0;">
        <div class="container-fluid" style="max-width: 1600px; padding: 0 20px;">
            <div class="modern-section-title scroll-animate">
                <div class="title-tag">CAREERS</div>
                <h3>Work With Us</h3>
                <div class="title-underline"></div>
            </div>
            
            <div class="row">
                <div class="col-lg-7 mb-4 scroll-animate-left">
                    <div class="job-vacancy-card">
                        <h3 style="color: #2C3E50; font-weight: 700; margin-bottom: 25px; font-size: 28px;">Join Our Team</h3>
                        
                        <p style="font-size: 18px; line-height: 1.8; margin-bottom: 30px;">
                            If you are looking to enquire about a career at Thornton Lodge, please get in touch using the contact information provided.
                        </p>
                        
                        <p style="font-size: 17px; line-height: 1.8; margin-bottom: 30px;">
                            At Thornton Lodge, we're committed to providing exceptional care for our residents. We value compassion, dedication, and a person-centered approach in all our team members.
                        </p>
                        
                        <div class="contact-info-card">
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <h5><i class="fa fa-envelope" style="margin-right: 10px;"></i>Email</h5>
                                    <p style="color: #7BA5C7; font-weight: 600;"><a href="mailto:admin@thorntonlodgecare.com">admin@thorntonlodgecare.com</a></p>
                                </div>
                                
                                <div class="col-md-4 mb-4">
                                    <h5><i class="fa fa-phone" style="margin-right: 10px;"></i>Phone</h5>
                                    <p>0208 – 684 –1056</p>
                                </div>
                                
                                <div class="col-md-4 mb-4">
                                    <h5><i class="fa fa-map-marker" style="margin-right: 10px;"></i>Address</h5>
                                    <p>105 Brigstock Road,<br/>
                                    Thornton Heath<br/>
                                    Surrey, CR7 71L</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-5 mb-4 scroll-animate-right">
                    <div style="background: white; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.08); height: 100%; overflow: hidden;">
                        <div style="padding: 30px;">
                            <h3 style="color: #7BA5C7; font-weight: 700; margin-bottom: 25px; font-size: 24px;">Benefits of Working With Us</h3>
                            
                            <ul style="list-style-type: none; padding-left: 5px; margin-bottom: 30px;">
                                <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                    <i class="fa fa-check-circle" style="color: #7BA5C7; position: absolute; left: 0; top: 3px; font-size: 18px;"></i>
                                    <span style="font-size: 16px; color: #555; line-height: 1.6;">Supportive work environment</span>
                                </li>
                                <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                    <i class="fa fa-check-circle" style="color: #7BA5C7; position: absolute; left: 0; top: 3px; font-size: 18px;"></i>
                                    <span style="font-size: 16px; color: #555; line-height: 1.6;">Ongoing training and development</span>
                                </li>
                                <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                    <i class="fa fa-check-circle" style="color: #7BA5C7; position: absolute; left: 0; top: 3px; font-size: 18px;"></i>
                                    <span style="font-size: 16px; color: #555; line-height: 1.6;">Competitive compensation packages</span>
                                </li>
                                <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                    <i class="fa fa-check-circle" style="color: #7BA5C7; position: absolute; left: 0; top: 3px; font-size: 18px;"></i>
                                    <span style="font-size: 16px; color: #555; line-height: 1.6;">Career advancement opportunities</span>
                                </li>
                                <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                    <i class="fa fa-check-circle" style="color: #7BA5C7; position: absolute; left: 0; top: 3px; font-size: 18px;"></i>
                                    <span style="font-size: 16px; color: #555; line-height: 1.6;">Recognition for your contributions</span>
                                </li>
                            </ul>
                            
                            <div style="background: linear-gradient(135deg, #7BA5C7 0%, #6B94B5 100%); padding: 20px; color: white; border-radius: 15px; margin-top: 20px; box-shadow: 0 6px 20px rgba(123, 165, 199, 0.35);">
                                <h4 style="margin-bottom: 10px; color: white; font-size: 18px; font-weight: 600;">
                                    <i class="fa fa-users" style="margin-right: 10px;"></i>Join Our Team
                                </h4>
                                <p style="margin-bottom: 0; font-size: 15px; line-height: 1.6;">
                                    We welcome applications from candidates who share our values and commitment to exceptional care.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('extra_script')
@endsection