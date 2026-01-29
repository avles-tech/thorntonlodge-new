@extends('layout.main')
@section('con_title')
    <title>{{$page_title}}</title>
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="Abstract" content="{{$Abstract}}" />
@endsection
@section('extra_css')
    <style type="text/css">
        /* St. Christopher's Page Styles */
        .certificate-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 15px;
            overflow: hidden;
        }
        
        .certificate-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }
        
        .palliative-feature {
            background: white;
            border-radius: 15px;
            padding: 35px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            border-top: 5px solid #7BA5C7;
        }
        
        .palliative-feature:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(0,0,0,0.2) !important;
        }
        
        .palliative-icon {
            background: linear-gradient(135deg, #7BA5C7 0%, #4080B8 100%);
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            box-shadow: 0 6px 20px rgba(110, 207, 233, 0.4);
        }
    </style>
@endsection
@section('content')
    <!-- Modern Hero Banner with Parallax Effect -->
    <section class="banner scroll-animate parallax-hero" style="background: linear-gradient(rgba(44, 62, 80, 0.7), rgba(44, 62, 80, 0.7)), url(/images/slider/St.\ Christophers.jpg) no-repeat center; background-size: cover; padding: 160px 0 120px 0; position: relative; overflow: hidden; background-attachment: fixed;">
        <!-- Decorative Elements -->
        <div class="float-animation" style="position: absolute; top: -50px; right: -50px; width: 400px; height: 400px; background: rgba(255,255,255,0.08); border-radius: 50%; filter: blur(80px);"></div>
        <div class="float-animation" style="position: absolute; bottom: -100px; left: -100px; width: 500px; height: 500px; background: rgba(80, 149, 205, 0.1); border-radius: 50%; filter: blur(100px); animation-delay: 1s;"></div>

        <div class="container" style="position: relative; z-index: 2;">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10 text-center hero-content">
                    <!-- Main Heading -->
                    <h1 style="font-size: 52px; font-weight: 700; color: white; margin-bottom: 30px; line-height: 1.2; text-shadow: 2px 2px 10px rgba(0,0,0,0.5);">
                        St. Christopher's
                    </h1>

                    <!-- Subheading -->
                    <p style="font-size: 24px; color: white; font-weight: 400; margin-bottom: 20px; text-shadow: 1px 1px 8px rgba(0,0,0,0.4); max-width: 800px; margin-left: auto; margin-right: auto; line-height: 1.6;">
                        End of Life Care with Dignity and Compassion
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Section - White Background -->
    <section style="background: #ffffff; padding: 100px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Modern Section Title -->
                    <div class="modern-section-title scroll-animate" style="margin-bottom: 60px;">
                        <div class="title-tag">Palliative Care</div>
                        <h3>End of Life Care Program</h3>
                        <div class="title-underline"></div>
                    </div>
                </div>
            </div>
            
            <div class="row align-items-center">
                <div class="col-lg-8 scroll-animate-left">
                    <div class="content-box" style="padding: 20px;">
                        <p style="font-size: 16px; line-height: 1.9; color: #555; margin-bottom: 20px;">
                            Thornton Lodge aims at promoting quality of life for older, enabling Residents to die in comfort and with dignity towards the very end of their life. The Palliative Care programme in place at Thornton Lodge ensures Residents who are nearing the end of their life experience a peaceful state of mind and place; for both themselves and their families and our Carers.
                        </p>
                        <p style="font-size: 16px; line-height: 1.9; color: #555; margin-bottom: 20px;">
                            Our Resident's quality of life is delivered and met by respecting their wishes, preferences, choices and considering religious and cultural beliefs through holistic person centred care, and by focusing on important health care areas such as improving the quality of life of the Resident and their families. Thornton Lodge will support Residents and their families to identify needs, priorities, and preferences; ensuring appropriate support for Carers and providing a co-ordinated, seamless service.
                        </p>
                        <p style="font-size: 16px; line-height: 1.9; color: #555;">
                            Supporting integrated pathways are found to improve care and dignify at the end of a Resident's life. This supports professionals involved with the Resident's care, providing a high quality service in the last days of life, and after death, to ascertain and respond to the educational needs of health care professionals, promoting and developing support for Residents as defined by themselves and their families.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 scroll-animate-right">
                    <div class="img-effect" style="border-radius: 15px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.15); transform: rotate(-2deg); transition: transform 0.3s ease;">
                        <img src="/images/accomensation.jpg" alt="St. Christopher's Care" class="img-fluid" style="width: 100%; display: block; transform: rotate(2deg) scale(1.1);">
                    </div>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-12 scroll-animate-zoom">
                    <div style="background: linear-gradient(135deg, #F0F7FA 0%, #E8F4F8 100%); padding: 30px; border-radius: 15px; box-shadow: 0 8px 30px rgba(0,0,0,0.08); border-left: 5px solid #7BA5C7;">
                        <p style="font-size: 18px; line-height: 1.8; color: #555; font-weight: 400; font-style: italic; margin: 0;">
                            Person Centred Care is an ongoing process that will support Residents to achieve personal goals and incentives, by encouraging them to be involved in their own end of life care; raising self-worth and fulfilment towards the last days of life.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Core Features Section - Light Blue Background -->
    <section style="background: linear-gradient(135deg, #F0F7FA 0%, #E8F4F8 100%); padding: 100px 0;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Modern Section Title -->
                    <div class="modern-section-title scroll-animate">
                        <div class="title-tag">Our Approach</div>
                        <h3>Palliative Care Principles</h3>
                        <div class="title-underline"></div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-4">
                <div class="col-md-4 scroll-animate-zoom scroll-animate-delay-1" style="margin-bottom: 30px;">
                    <div class="palliative-feature ripple">
                        <div class="palliative-icon">
                            <span class="fa fa-heart-o" aria-hidden="true" style="font-size: 35px; color: white;"></span>
                        </div>
                        <h3 style="font-size: 22px; font-weight: 600; margin-bottom: 15px; text-align: center; color: #333;">Compassionate Care</h3>
                        <p style="font-size: 15px; line-height: 1.8; color: #555; text-align: center;">
                            We provide compassionate care that treats each resident with dignity, respect, and empathy during their final journey.
                        </p>
                    </div>
                </div>
                
                <div class="col-md-4 scroll-animate-zoom scroll-animate-delay-2" style="margin-bottom: 30px;">
                    <div class="palliative-feature ripple">
                        <div class="palliative-icon">
                            <span class="fa fa-users" aria-hidden="true" style="font-size: 35px; color: white;"></span>
                        </div>
                        <h3 style="font-size: 22px; font-weight: 600; margin-bottom: 15px; text-align: center; color: #333;">Family Support</h3>
                        <p style="font-size: 15px; line-height: 1.8; color: #555; text-align: center;">
                            We extend our support to families, providing guidance and comfort during difficult times.
                        </p>
                    </div>
                </div>
                
                <div class="col-md-4 scroll-animate-zoom scroll-animate-delay-3" style="margin-bottom: 30px;">
                    <div class="palliative-feature ripple">
                        <div class="palliative-icon">
                            <span class="fa fa-leaf" aria-hidden="true" style="font-size: 35px; color: white;"></span>
                        </div>
                        <h3 style="font-size: 22px; font-weight: 600; margin-bottom: 15px; text-align: center; color: #333;">Peaceful Environment</h3>
                        <p style="font-size: 15px; line-height: 1.8; color: #555; text-align: center;">
                            We create a calm, peaceful atmosphere that promotes comfort and serenity for residents in their final days.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- St. Christopher's Certificate Section -->
    <section style="background: #ffffff; padding: 100px 0;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Modern Section Title -->
                    <div class="modern-section-title scroll-animate">
                        <div class="title-tag">Certification</div>
                        <h3>More than just a hospice</h3>
                        <div class="title-underline"></div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 mt-5 scroll-animate-zoom">
                    <div class="certificate-card">
                        <div class="text-center" style="background: white; padding: 40px; border-radius: 15px; box-shadow: 0 8px 30px rgba(0,0,0,0.1);">
                            <img src="/images/St Christopher's Certificate-edited.jpg" alt="St Christopher's Certificate" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-12 scroll-animate">
                    <div class="text-center">
                        <a href="{{ route('contact') }}" class="ripple" style="display: inline-block; background: #7BA5C7; color: white; padding: 16px 45px; border-radius: 50px; text-decoration: none; font-weight: 600; font-size: 18px; box-shadow: 0 8px 25px rgba(123, 165, 199, 0.4); transition: all 0.3s ease;">
                            <i class="fa fa-phone" style="margin-right: 10px;"></i>Contact Us for More Information
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('extra_script')
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
});

// Parallax effect for hero
window.addEventListener('scroll', function() {
    const scrolled = window.pageYOffset;
    const parallax = document.querySelector('.parallax-hero');
    if (parallax) {
        parallax.style.backgroundPositionY = scrolled * 0.4 + 'px';
    }
});
</script>
@endsection