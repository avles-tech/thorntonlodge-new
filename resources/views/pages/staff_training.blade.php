@extends('layout.main')
@section('con_title')
    <title>{{$page_title}}</title>
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="Abstract" content="{{$Abstract}}" />
@endsection
@section('extra_css')
    <style>
        /* Staff Training Page Styles */
        .training-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.08);
            height: 100%;
            transition: all 0.3s ease;
            border-top: 5px solid #7BA5C7;
        }
        
        .training-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(0,0,0,0.15);
        }
        
        .training-card h4 {
            font-size: 24px;
            font-weight: 700;
            color: #2C3E50;
            margin-bottom: 20px;
        }
        
        .training-card p {
            font-size: 16px;
            line-height: 1.8;
            color: #555;
            margin-bottom: 20px;
        }
        
        .training-image {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 50px rgba(0,0,0,0.15);
            margin-bottom: 30px;
        }
        
        .training-image img {
            width: 100%;
            height: auto;
            border-radius: 20px;
            transition: transform 0.5s ease;
        }
        
        .training-image:hover img {
            transform: scale(1.05);
        }
        
        .training-list {
            list-style: none;
            padding: 0;
            margin: 0 0 30px 0;
        }
        
        .training-list li {
            position: relative;
            padding-left: 30px;
            margin-bottom: 15px;
            font-size: 16px;
            color: #555;
            line-height: 1.7;
        }
        
        .training-list li:before {
            content: "\f046";
            font-family: FontAwesome;
            position: absolute;
            left: 0;
            top: 2px;
            color: #7BA5C7;
        }
        
        .key-worker-box {
            background: linear-gradient(135deg, #F0F7FA 0%, #E8F4F8 100%);
            padding: 30px;
            border-radius: 15px;
            margin: 30px 0;
            border-left: 5px solid #7BA5C7;
        }
    </style>
@endsection
@section('content')
    <!-- Modern Hero Banner with Parallax -->
    <section class="banner scroll-animate parallax-hero" style="background: linear-gradient(rgba(44, 62, 80, 0.7), rgba(44, 62, 80, 0.7)), url(/images/slider/staff.jpg) no-repeat center; background-size: cover; padding: 160px 0 120px 0; position: relative; overflow: hidden; background-attachment: fixed;">
        <!-- Decorative Elements -->
        <div class="float-animation" style="position: absolute; top: -50px; right: -50px; width: 400px; height: 400px; background: rgba(255,255,255,0.08); border-radius: 50%; filter: blur(80px);"></div>
        <div class="float-animation" style="position: absolute; bottom: -100px; left: -100px; width: 500px; height: 500px; background: rgba(80, 149, 205, 0.1); border-radius: 50%; filter: blur(100px); animation-delay: 1s;"></div>

        <div class="container" style="position: relative; z-index: 2;">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10 text-center hero-content">
                    <!-- Main Heading -->
                    <h1 style="font-size: 52px; font-weight: 700; color: white; margin-bottom: 30px; line-height: 1.2; text-shadow: 2px 2px 10px rgba(0,0,0,0.5);">
                        Staff Training
                    </h1>

                    <!-- Subheading -->
                    <p style="font-size: 24px; color: white; font-weight: 400; margin-bottom: 20px; text-shadow: 1px 1px 8px rgba(0,0,0,0.4); max-width: 800px; margin-left: auto; margin-right: auto; line-height: 1.6;">
                        Developing Excellence in Care Through Continuous Learning
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section style="background: #ffffff; padding: 100px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Modern Section Title -->
                    <div class="modern-section-title scroll-animate" style="margin-bottom: 60px;">
                        <div class="title-tag">Our Approach</div>
                        <h3>Staff Development</h3>
                        <div class="title-underline"></div>
                    </div>
                </div>
            </div>
            
            <div class="row align-items-center">
                <div class="col-lg-5 scroll-animate-left" style="margin-bottom: 30px;">
                    <div class="training-image">
                        <img src="/images/img7.jpg" alt="Staff Training" class="img-fluid">
                    </div>
                    
                    <div class="training-image">
                        <img src="/images/RedCrierlogo.jpg" alt="Red Crier Training Solutions" class="img-fluid">
                    </div>
                </div>
                
                <div class="col-lg-7 scroll-animate-right" style="margin-bottom: 30px;">
                    <div class="training-card">
                        <h4>Our Training Philosophy</h4>
                        <p>A calm, cheerful and relaxed family-like environment pervades throughout the Home. This is very much influenced by the staff who have been embraced by the philosophy of the home's care by virtue of the time they have served, the training they have acquired and skills and knowledge gained.</p>
                        
                        <h4 style="margin-top: 30px;">Comprehensive Training Program</h4>
                        <p>Ongoing staff trainings form part of the staff contract. The Home works in partnership with Red Crier Training Solutions who offer a comprehensive package of training to all of our Staff. This includes training such as:</p>
                        
                        <ul class="training-list">
                            <li>Safeguarding Adults</li>
                            <li>Health & Safety in the Workplace</li>
                            <li>Food Hygiene & Safety</li>
                            <li>Person-Centered Care</li>
                            <li>Dementia Care</li>
                            <li>Mental Health Awareness</li>
                        </ul>
                        
                        <p>The Home also works in partnership with local health teams, CCG's, Immedicare and the NHS to offer our staff with tailored training, such as our most recent implementation of Restore 2 vital signs training.</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12 scroll-animate-zoom">
                    <div class="key-worker-box">
                        <h4 style="color: #2C3E50; margin-bottom: 20px;">Key Worker System</h4>
                        <p style="margin-bottom: 15px;">This Home operates a Key Worker System which means that, although all staff work together to meet the broad concept of care, the designated Key Worker is expected to develop an all-round knowledge of individual service users.</p>
                        
                        <p style="margin-bottom: 15px;">The single and most important role of the Key Worker is to develop a very good relationship with the service users to the extent that they have a better and more comprehensive knowledge on their likes and dislikes, to meet their physical needs, social interactions and provide psychological help. This is reflected in the service users Care Plan.</p>
                        
                        <p style="margin-bottom: 0;">To develop a healthy relationship, the Key Workers have been taught some elements of social interactive skills which are - ability to communicate well, show empathy and kindness and indeed to always be prepared to listen to what the resident has to say.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Skills Section -->
    <section style="background: linear-gradient(135deg, #F0F7FA 0%, #E8F4F8 100%); padding: 80px 0 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Modern Section Title -->
                    <div class="modern-section-title scroll-animate" style="margin-bottom: 60px;">
                        <div class="title-tag">Skills</div>
                        <h3>Core Staff Competencies</h3>
                        <div class="title-underline"></div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4 col-sm-6 scroll-animate-zoom scroll-animate-delay-1" style="margin-bottom: 30px;">
                    <div style="background: white; border-radius: 15px; padding: 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); height: 100%; transition: all 0.3s ease; text-align: center;">
                        <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #7BA5C7 0%, #4080B8 100%); border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 6px 20px rgba(123, 165, 199, 0.4);">
                            <i class="fa fa-comments" style="font-size: 35px; color: white;"></i>
                        </div>
                        <h4 style="font-size: 20px; color: #2C3E50; margin-bottom: 15px; font-weight: 700;">Communication</h4>
                        <p style="font-size: 15px; line-height: 1.7; color: #555; margin-bottom: 0;">
                            Effective communication skills to understand residents' needs and work collaboratively with colleagues.
                        </p>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 scroll-animate-zoom scroll-animate-delay-2" style="margin-bottom: 30px;">
                    <div style="background: white; border-radius: 15px; padding: 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); height: 100%; transition: all 0.3s ease; text-align: center;">
                        <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #7BA5C7 0%, #4080B8 100%); border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 6px 20px rgba(123, 165, 199, 0.4);">
                            <i class="fa fa-heart" style="font-size: 35px; color: white;"></i>
                        </div>
                        <h4 style="font-size: 20px; color: #2C3E50; margin-bottom: 15px; font-weight: 700;">Empathy & Compassion</h4>
                        <p style="font-size: 15px; line-height: 1.7; color: #555; margin-bottom: 0;">
                            Understanding the emotional needs of residents and providing supportive, compassionate care.
                        </p>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 scroll-animate-zoom scroll-animate-delay-3" style="margin-bottom: 30px;">
                    <div style="background: white; border-radius: 15px; padding: 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); height: 100%; transition: all 0.3s ease; text-align: center;">
                        <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #7BA5C7 0%, #4080B8 100%); border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 6px 20px rgba(123, 165, 199, 0.4);">
                            <i class="fa fa-shield" style="font-size: 35px; color: white;"></i>
                        </div>
                        <h4 style="font-size: 20px; color: #2C3E50; margin-bottom: 15px; font-weight: 700;">Safety & Protocol</h4>
                        <p style="font-size: 15px; line-height: 1.7; color: #555; margin-bottom: 0;">
                            Following safety procedures and maintaining high standards of care and hygiene at all times.
                        </p>
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