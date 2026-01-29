@extends('layout.main')
@section('con_title')
    <title>{{$page_title}}</title>
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="Abstract" content="{{$Abstract}}" />
@endsection
@section('extra_css')
    <style>
        .hero-principal {
            background: linear-gradient(rgba(44, 62, 80, 0.6), rgba(44, 62, 80, 0.7)), url(/images/slider/Principals.jpg) no-repeat center center;
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
        
        .hero-principal h1 {
            font-size: 56px;
            font-weight: 600;
            margin-bottom: 20px;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.3);
        }
        
        .principal-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.08);
            height: 100%;
            transition: all 0.3s ease;
        }
        
        .principal-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(0,0,0,0.15);
        }
        
        .principal-card h4 {
            color: #7BA5C7;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .principal-card p {
            font-size: 17px;
            line-height: 1.8;
            color: #555;
            margin-bottom: 20px;
        }
        
        .principal-image {
            width: 100%;
            height: 350px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 50px rgba(0,0,0,0.15);
        }
        
        .principal-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 20px;
        }
        
        .contact-info-box {
            background: linear-gradient(135deg, #F0F7FA 0%, #E8F4F8 100%);
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 30px;
            border-left: 6px solid #7BA5C7;
        }
        
        .contact-info-box p {
            margin-bottom: 5px;
            font-size: 16px;
            color: #555;
        }
        
        .feature-box {
            background: white;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            border-bottom: 4px solid #7BA5C7;
        }
        
        .feature-box h4 {
            color: #2C3E50;
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 15px;
        }
        
        .feature-box p {
            font-size: 16px;
            color: #555;
            line-height: 1.7;
            margin-bottom: 0;
        }
    </style>
@endsection
@section('content')
    <!-- Hero Section -->
    <section class="hero-principal banner scroll-animate parallax-hero">
        <div class="container" style="max-width: 1600px; padding: 0 40px;">
            <div class="hero-content">
                <h1>Principles of Care</h1>
                <p style="font-size: 20px; max-width: 700px; margin: 20px auto 0; line-height: 1.8;">
                    Our guiding principles and policies that ensure high-quality care for all residents
                </p>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section style="background: #ffffff; padding: 100px 0;">
        <div class="container-fluid" style="max-width: 1600px; padding: 0 20px;">
            <div class="modern-section-title scroll-animate">
                <div class="title-tag">PRINCIPLES</div>
                <h3>Our Care Principles</h3>
                <div class="title-underline"></div>
            </div>
            
            <div class="row align-items-center">
                <div class="col-lg-4 mb-4 scroll-animate-left">
                    <div class="principal-image float-animation">
                        <img src="/images/img6.jpg" alt="Principles of Care">
                    </div>
                </div>
                <div class="col-lg-8 mb-4 scroll-animate-right">
                    <div class="principal-card">
                        <div class="contact-info-box">
                            <h4 style="margin-bottom: 20px;">Complaints Procedure</h4>
                            <p>All complaints should be addressed to the manager of the home either verbally or in written form. Alternatively you can make a complaint directly to the Care Quality Commission at:</p>
                            <p style="margin-top: 15px;">
                                <strong>Care Quality Commission</strong><br>
                                Citygate<br>
                                Gallowgate<br>
                                Newcastle upon Tyne<br>
                                NE1 4PA
                            </p>
                            <p>You can also contact them by phone: <strong>03000 616161</strong></p>
                            <p>Or emails: <a href="mailto:enquiries@cqc.org.uk" style="color: #7BA5C7; text-decoration: none;">enquiries@cqc.org.uk</a></p>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="feature-box">
                                    <h4>Health Care</h4>
                                    <p>Residential Care Homes are not Nursing Homes and medical and nursing treatment is not allowed to be given by care home staff. Nevertheless care, within the concept of family care, is given as appropriate to the needs of the service user. In this respect the Home will liase with doctors and community nurses to ensure that the correct care is given with follow up with other agencies.</p>
                                    <p>In many cases Care Homes will look after service users who become ill, sometimes for a prolonged period. The determining factors depend on the gravity of the illness. When the care necessary is beyond the scope of the Residential Home it may be more appropriate for the service user to be cared for in a Nursing Home in which case the Care Home will give every assistance to make the transfer as smooth as possible.</p>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-4">
                                <div class="feature-box">
                                    <h4>Medicines</h4>
                                    <p>Where service users prefer to retain responsibility for medicines and the provider is satisfied that they are competent to do so the service user will monitor their own medicines althougth a supervision will be retained by the Manager of the Home.</p>
                                </div>
                                
                                <div class="feature-box">
                                    <h4>Choice Of Doctor</h4>
                                    <p>Service users are not required to change their doctor for the convenience of the care home. However, it must be recognised that doctors work within a geographical area and a move into residential care may necessitate a change of doctor for a service user. Where this occurs the resident will helped to select a new doctor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Values Section -->
    <section style="background: linear-gradient(135deg, #F0F7FA 0%, #E8F4F8 100%); padding: 80px 0;">
        <div class="container" style="max-width: 1200px;">
            <div class="modern-section-title scroll-animate">
                <div class="title-tag">VALUES</div>
                <h3>Our Core Values</h3>
                <div class="title-underline"></div>
            </div>
            
            <div class="row">
                <div class="col-md-4 mb-4 scroll-animate-zoom scroll-animate-delay-1">
                    <div style="background: white; border-radius: 15px; padding: 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); text-align: center; height: 100%;">
                        <i class="fa fa-heart" style="font-size: 40px; color: #7BA5C7; margin-bottom: 20px;"></i>
                        <h3 style="font-size: 22px; font-weight: 700; color: #2C3E50; margin-bottom: 15px;">Compassion</h3>
                        <p style="font-size: 16px; line-height: 1.7; color: #555; margin-bottom: 0;">
                            We provide care with kindness, empathy and respect, recognizing each resident's unique needs and dignity.
                        </p>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4 scroll-animate-zoom scroll-animate-delay-2">
                    <div style="background: white; border-radius: 15px; padding: 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); text-align: center; height: 100%;">
                        <i class="fa fa-star" style="font-size: 40px; color: #7BA5C7; margin-bottom: 20px;"></i>
                        <h3 style="font-size: 22px; font-weight: 700; color: #2C3E50; margin-bottom: 15px;">Excellence</h3>
                        <p style="font-size: 16px; line-height: 1.7; color: #555; margin-bottom: 0;">
                            We strive for the highest standards in care, continuously improving our services to ensure the best possible outcomes.
                        </p>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4 scroll-animate-zoom scroll-animate-delay-3">
                    <div style="background: white; border-radius: 15px; padding: 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); text-align: center; height: 100%;">
                        <i class="fa fa-users" style="font-size: 40px; color: #7BA5C7; margin-bottom: 20px;"></i>
                        <h3 style="font-size: 22px; font-weight: 700; color: #2C3E50; margin-bottom: 15px;">Community</h3>
                        <p style="font-size: 16px; line-height: 1.7; color: #555; margin-bottom: 0;">
                            We create a warm, family-like environment where residents feel at home and part of a supportive community.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('extra_script')
@endsection