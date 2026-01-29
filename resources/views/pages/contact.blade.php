@extends('layout.main')
@section('con_title')
    <title>{{$page_title}}</title>
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="Abstract" content="{{$Abstract}}" />
@endsection
@section('extra_css')
    <style type="text/css">
        /* Contact Page Styles */
        .contact-form-wrapper {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .contact-info-card {
            background: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            border-top: 5px solid #7BA5C7;
        }
        
        .contact-info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(0,0,0,0.2) !important;
        }
        
        .contact-info-icon {
            background: linear-gradient(135deg, #7BA5C7 0%, #4080B8 100%);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            box-shadow: 0 6px 20px rgba(110, 207, 233, 0.4);
        }
        
        .map-container {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .map-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(0,0,0,0.2) !important;
        }
        
        .form-control {
            border-radius: 10px;
            padding: 12px 15px;
            border: 1px solid #e1e1e1;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: #7BA5C7;
            box-shadow: 0 0 15px rgba(123, 165, 199, 0.2);
        }
        
        .btn-contact {
            background: linear-gradient(135deg, #7BA5C7 0%, #4080B8 100%);
            color: white;
            border: none;
            padding: 14px 30px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(123, 165, 199, 0.4);
            cursor: pointer;
        }
        
        .btn-contact:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(123, 165, 199, 0.6);
        }
    </style>
@endsection
@section('content')
    <!-- Modern Hero Banner with Parallax -->
    <section class="banner scroll-animate parallax-hero" style="background: linear-gradient(rgba(44, 62, 80, 0.7), rgba(44, 62, 80, 0.7)), url(/images/slider/contact.jpg) no-repeat center; background-size: cover; padding: 160px 0 120px 0; position: relative; overflow: hidden; background-attachment: fixed;">
        <!-- Decorative Elements -->
        <div class="float-animation" style="position: absolute; top: -50px; right: -50px; width: 400px; height: 400px; background: rgba(255,255,255,0.08); border-radius: 50%; filter: blur(80px);"></div>
        <div class="float-animation" style="position: absolute; bottom: -100px; left: -100px; width: 500px; height: 500px; background: rgba(80, 149, 205, 0.1); border-radius: 50%; filter: blur(100px); animation-delay: 1s;"></div>

        <div class="container" style="position: relative; z-index: 2;">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10 text-center hero-content">
                    <!-- Main Heading -->
                    <h1 style="font-size: 52px; font-weight: 700; color: white; margin-bottom: 30px; line-height: 1.2; text-shadow: 2px 2px 10px rgba(0,0,0,0.5);">
                        Contact Us
                    </h1>

                    <!-- Subheading -->
                    <p style="font-size: 24px; color: white; font-weight: 400; margin-bottom: 20px; text-shadow: 1px 1px 8px rgba(0,0,0,0.4); max-width: 800px; margin-left: auto; margin-right: auto; line-height: 1.6;">
                        We're Here to Help You
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section style="background: linear-gradient(135deg, #F0F7FA 0%, #E8F4F8 100%); padding: 100px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Modern Section Title -->
                    <div class="modern-section-title scroll-animate" style="margin-bottom: 60px;">
                        <div class="title-tag">Get in Touch</div>
                        <h3>Keep in Touch</h3>
                        <div class="title-underline"></div>
                        <p class="mt-4" style="max-width: 800px; margin: 0 auto; font-size: 18px; line-height: 1.8; color: #555;">
                            If you have any further inquiry, please don't hesitate to contact us via telephone or email.<br/>
                            We'll get in touch with you as soon as possible.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6 col-md-12 scroll-animate-left" style="margin-bottom: 30px;">
                    <div class="contact-form-wrapper">
                        <h4 style="color: #333; margin-bottom: 25px; font-weight: 600;">Send Us a Message</h4>
                        <form name="contactform" method="post" action="">
                            <div class="row">
                                <div class="col-md-6" style="margin-bottom: 20px;">
                                    <label style="font-weight: 500; color: #555; margin-bottom: 8px;">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" name="name" required>
                                </div>
                                <div class="col-md-6" style="margin-bottom: 20px;">
                                    <label style="font-weight: 500; color: #555; margin-bottom: 8px;">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" name="email" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6" style="margin-bottom: 20px;">
                                    <label style="font-weight: 500; color: #555; margin-bottom: 8px;">Phone</label>
                                    <input type="text" class="form-control" id="phone" placeholder="Your Phone Number" name="phone">
                                </div>
                                <div class="col-md-6" style="margin-bottom: 20px;">
                                    <label style="font-weight: 500; color: #555; margin-bottom: 8px;">Subject</label>
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
                                </div>
                            </div>
                            <div class="form-group" style="margin-bottom: 30px;">
                                <label style="font-weight: 500; color: #555; margin-bottom: 8px;">How can we help?</label>
                                <textarea name="issues" class="form-control" id="iq" placeholder="Your Message" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn-contact ripple" style="width:100%;">
                                <i class="fa fa-paper-plane" style="margin-right: 8px;"></i>Send Message
                            </button>
                        </form>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-12 scroll-animate-right" style="margin-bottom: 25px;">
                            <div class="map-container">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d126.8637920945285!2d-0.10812242206223635!3d51.397098377371634!2m2!1f161.46785960841507!2f45!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x487606da4f44ac9b%3A0xd60a5ca793dd2238!2sThornton+Lodge!5e1!3m2!1sen!2slk!4v1549779263421" width="100%" height="250" style="border:0; display: block;" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-12 scroll-animate-right" style="margin-bottom: 25px;">
                            <div class="map-container">
                                <iframe src="https://www.google.com/maps/embed?pb=!4v1549779214998!6m8!1m7!1sxAGlPvNphANYUbWsQ6kVnA!2m2!1d51.39601662900881!2d-0.1075412197037692!3f161.46785960841507!4f-7.836956159933578!5f0.7820865974627469" width="100%" height="250" style="border:0; display: block;" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Information Cards -->
    <section style="background: white; padding: 80px 0 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 scroll-animate-zoom scroll-animate-delay-1" style="margin-bottom: 30px;">
                    <div class="contact-info-card ripple">
                        <div class="contact-info-icon">
                            <i class="fa fa-map-marker" style="font-size: 28px; color: white;"></i>
                        </div>
                        <h4 style="font-size: 22px; font-weight: 600; margin-bottom: 15px; color: #333;">Our Location</h4>
                        <p style="font-size: 15px; line-height: 1.8; color: #555; margin-bottom: 5px;">
                            Thornton Lodge<br>
                            47 Thornton Road<br>
                            Thornton Heath<br>
                            Surrey CR7 6BA
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 scroll-animate-zoom scroll-animate-delay-2" style="margin-bottom: 30px;">
                    <div class="contact-info-card ripple">
                        <div class="contact-info-icon">
                            <i class="fa fa-phone" style="font-size: 28px; color: white;"></i>
                        </div>
                        <h4 style="font-size: 22px; font-weight: 600; margin-bottom: 15px; color: #333;">Phone & Fax</h4>
                        <p style="font-size: 15px; line-height: 1.8; color: #555; margin-bottom: 5px;">
                            Tel: 0208 - 684 - 1056<br>
                            Fax: 0208 - 684 - 3294
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-12 scroll-animate-zoom scroll-animate-delay-3" style="margin-bottom: 30px;">
                    <div class="contact-info-card ripple">
                        <div class="contact-info-icon">
                            <i class="fa fa-envelope" style="font-size: 28px; color: white;"></i>
                        </div>
                        <h4 style="font-size: 22px; font-weight: 600; margin-bottom: 15px; color: #333;">Email Us</h4>
                        <p style="font-size: 15px; line-height: 1.8; color: #555; margin-bottom: 5px;">
                            <a href="mailto:admin@thorntonlodgecare.com" style="color: #7BA5C7; text-decoration: none;">admin@thorntonlodgecare.com</a>
                        </p>
                        <p style="font-size: 15px; line-height: 1.8; color: #555; margin-top: 10px;">
                            For any enquiries regarding placement, viewings, fee charges, or if you just wish to come in for a chat, please contact us.
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