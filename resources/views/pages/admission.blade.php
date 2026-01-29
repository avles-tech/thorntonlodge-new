@extends('layout.main')
@section('con_title')
    <title>{{$page_title}}</title>
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="Abstract" content="{{$Abstract}}" />
@endsection
@section('extra_css')
    <style>
        .hero-admission {
            background: linear-gradient(rgba(44, 62, 80, 0.6), rgba(44, 62, 80, 0.7)), url(/images/slider/FLOWERS11.jpg) no-repeat center center;
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
        
        .hero-admission h1 {
            font-size: 56px;
            font-weight: 600;
            margin-bottom: 20px;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.3);
        }
        
        .admission-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.08);
            height: 100%;
            transition: all 0.3s ease;
        }
        
        .admission-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(0,0,0,0.15);
        }
        
        .admission-card p {
            font-size: 17px;
            line-height: 1.8;
            color: #555;
            margin-bottom: 20px;
        }
        
        .admission-card ol {
            margin-bottom: 30px;
            padding-left: 20px;
        }
        
        .admission-card ol li {
            font-size: 16px;
            color: #555;
            margin-bottom: 12px;
            line-height: 1.7;
            padding-left: 10px;
        }
        
        .admission-image {
            width: 100%;
            height: 350px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 50px rgba(0,0,0,0.15);
        }
        
        .admission-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 20px;
        }
    </style>
@endsection
@section('content')
    <!-- Hero Section -->
    <section class="hero-admission banner scroll-animate parallax-hero">
        <div class="container" style="max-width: 1600px; padding: 0 40px;">
            <div class="hero-content">
                <h1>Admission Criteria</h1>
                <p style="font-size: 20px; max-width: 700px; margin: 20px auto 0; line-height: 1.8;">
                    Understanding our admission process and who we can provide care for
                </p>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section style="background: #ffffff; padding: 100px 0;">
        <div class="container-fluid" style="max-width: 1600px; padding: 0 20px;">
            <div class="modern-section-title scroll-animate">
                <div class="title-tag">ADMISSIONS</div>
                <h3>Who We Care For</h3>
                <div class="title-underline"></div>
            </div>
            
            <div class="row align-items-center">
                <div class="col-lg-4 mb-4 scroll-animate-left">
                    <div class="admission-image float-animation">
                        <img src="/images/admistion.jpg" alt="Admission at Thornton Lodge">
                    </div>
                </div>
                <div class="col-lg-8 mb-4 scroll-animate-right">
                    <div class="admission-card">
                        <h3 style="color: #7BA5C7; font-weight: 700; margin-bottom: 25px; font-size: 28px;">Our Admission Criteria</h3>
                        <p>Thornton Lodge is a Home for adults and Older people with mental health problems and is able to accept referrals and placements of service users with mental illnesses of the following categories:</p>
                        
                        <ol>
                            <li>Functional psychotic conditions, namely schizophrenia, chronic depression and paranoid illness.</li>
                            <li>Organic disorders without major behavioural difficulties such as ex-alcoholic disorders with cognitive impairment.</li>
                            <li>Obsessional and anxiety provoking disorders.</li>
                            <li>Behavioural problems as a result of bizarre thoughts, patterns, eg: unexpected outbursts of anger.</li>
                            <li>Mental health problems and coping difficulties.</li>
                            <li>Early onset stages of Dementia (dependent on assessment.)</li>
                        </ol>
                        
                        <div style="background: #f8f9fa; border-radius: 15px; padding: 25px; border-left: 6px solid #7BA5C7; margin-bottom: 30px;">
                            <h4 style="color: #2C3E50; font-size: 20px; font-weight: 600; margin-bottom: 15px;">Limitations</h4>
                            <p style="margin-bottom: 0;">The Home is not able to provide care for those service users suffering from advanced dementia and dementia resulting from trauma or brain injury e.g. road accidents. The home is equally not able to accommodate those service users who have dependencies in the use of wheelchair and are unable to assist themselves to independent transfer i.e. getting in and out of bath or bed. The home does not directly provide nursing care.</p>
                        </div>
                        
                        <p>As Thornton Lodge strives to provide a homely and safe environment for its permanent service users, we do not accept emergency/unplanned admission or respite care.</p>
                        
                        <p>Any prospective service user generally comes for one day's assessment prior to formally being accepted for admission. This gives a chance for the prospective service user and their relatives to view the place, observe the conditions of care in the Home and finally provides the chance of making appropriate choice and decision prior to agreement on the placement. Similarly it provides the Home the opportunity to see whether such placement will fit in with the Home community and the care environment. Overnight stays are also possible.</p>
                        
                        <p>Planned reviews are carried out over a span of time to assess the suitability of the placement. To form a larger and more therapeutic community from diverse backgrounds and conditions, the Home accepts residents from different Boroughs. Because each Borough has its own admission contract, this home specifies that besides entering into their own specific contracts Thornton Lodge incorporates its own contractual terms and conditions which are given full endorsement. To ensure a satisfactory continuity of care a planned assessment and review are carried out at mutually planned period.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Call to Action Section -->
    <section style="background: linear-gradient(135deg, #F0F7FA 0%, #E8F4F8 100%); padding: 80px 0;">
        <div class="container" style="max-width: 1200px;">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 scroll-animate-left">
                    <h3 style="font-size: 32px; font-weight: 700; color: #2C3E50; margin-bottom: 15px;">Interested in Learning More?</h3>
                    <p style="font-size: 18px; color: #555; line-height: 1.7; margin-bottom: 0;">
                        Contact us today to discuss our admission process or to arrange a visit to our care home.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-right text-center scroll-animate-right">
                    <a href="{{ route('contact') }}" class="ripple" style="display: inline-block; background: white; color: #7BA5C7; padding: 18px 40px; border-radius: 50px; font-weight: 700; text-decoration: none; box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1); transition: all 0.3s ease; font-size: 16px;">
                        <i class="fa fa-envelope" style="margin-right: 10px;"></i>Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('extra_script')
@endsection