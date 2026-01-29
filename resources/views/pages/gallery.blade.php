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
        /* Gallery Page Styles */
        .gallery-item {
            margin-bottom: 30px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            cursor: pointer;
        }
        
        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(0,0,0,0.2) !important;
        }
        
        .gallery-item img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            transition: all 0.5s ease;
            display: block;
        }
        
        .gallery-item:hover img {
            transform: scale(1.05);
        }
        
        .gallery-item-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0) 100%);
            padding: 20px 15px;
            color: white;
            transition: all 0.3s ease;
        }
        
        .gallery-item:hover .gallery-item-caption {
            padding-bottom: 30px;
        }
        
        .gallery-item-title {
            font-size: 18px;
            font-weight: 600;
            margin: 0;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
        }
        
        .gallery-filter {
            margin-bottom: 40px;
            text-align: center;
        }
        
        .filter-button {
            background: white;
            color: #333;
            border: 1px solid #e1e1e1;
            padding: 10px 25px;
            margin: 0 5px 10px;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }
        
        .filter-button:hover, 
        .filter-button.active {
            background: linear-gradient(135deg, #7BA5C7 0%, #4080B8 100%);
            color: white;
            border-color: transparent;
            box-shadow: 0 8px 25px rgba(123, 165, 199, 0.4);
        }
        
        .gallery-masonry {
            column-count: 3;
            column-gap: 25px;
        }
        
        .gallery-masonry .gallery-item {
            display: inline-block;
            width: 100%;
            margin-bottom: 25px;
        }
        
        @media (max-width: 991px) {
            .gallery-masonry {
                column-count: 2;
            }
        }
        
        @media (max-width: 576px) {
            .gallery-masonry {
                column-count: 1;
            }
        }
    </style>
@endsection
@section('content')
    <!-- Modern Hero Banner with Parallax -->
    <section class="banner scroll-animate parallax-hero" style="background: linear-gradient(rgba(44, 62, 80, 0.7), rgba(44, 62, 80, 0.7)), url(/images/slider/THORNTON\ LODGE_6425.jpg) no-repeat center; background-size: cover; padding: 160px 0 120px 0; position: relative; overflow: hidden; background-attachment: fixed;">
        <!-- Decorative Elements -->
        <div class="float-animation" style="position: absolute; top: -50px; right: -50px; width: 400px; height: 400px; background: rgba(255,255,255,0.08); border-radius: 50%; filter: blur(80px);"></div>
        <div class="float-animation" style="position: absolute; bottom: -100px; left: -100px; width: 500px; height: 500px; background: rgba(80, 149, 205, 0.1); border-radius: 50%; filter: blur(100px); animation-delay: 1s;"></div>

        <div class="container" style="position: relative; z-index: 2;">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10 text-center hero-content">
                    <!-- Main Heading -->
                    <h1 style="font-size: 52px; font-weight: 700; color: white; margin-bottom: 30px; line-height: 1.2; text-shadow: 2px 2px 10px rgba(0,0,0,0.5);">
                        Our Gallery
                    </h1>

                    <!-- Subheading -->
                    <p style="font-size: 24px; color: white; font-weight: 400; margin-bottom: 20px; text-shadow: 1px 1px 8px rgba(0,0,0,0.4); max-width: 800px; margin-left: auto; margin-right: auto; line-height: 1.6;">
                        Explore Life at Thornton Lodge
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section style="background: linear-gradient(135deg, #F0F7FA 0%, #E8F4F8 100%); padding: 100px 0;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Modern Section Title -->
                    <div class="modern-section-title scroll-animate" style="margin-bottom: 60px;">
                        <div class="title-tag">Our Pictures</div>
                        <h3>Photo Gallery</h3>
                        <div class="title-underline"></div>
                        <p class="mt-4" style="max-width: 800px; margin: 0 auto; font-size: 18px; line-height: 1.8; color: #555;">
                            Browse through our collection of images showcasing our facilities, activities, and everyday life at Thornton Lodge.
                        </p>
                    </div>
                </div>
            </div>
            
            @if(count($galleries) > 0)
            <!-- Gallery Filter Buttons -->
            <div class="gallery-filter scroll-animate">
                <button class="filter-button active" data-filter="all">All</button>
                <button class="filter-button" data-filter="facilities">Facilities</button>
                <button class="filter-button" data-filter="activities">Activities</button>
                <button class="filter-button" data-filter="events">Events</button>
                <button class="filter-button" data-filter="residents">Residents</button>
            </div>
            
            <!-- Gallery Grid -->
            <div class="row">
                <div class="col-12">
                    <div class="demo-gallery">
                        <div class="lightgallery gallery-masonry">
                            @foreach($galleries as $gallery)
                            <div class="gallery-item scroll-animate-zoom filter-all filter-facilities">
                                <a href="/Uploads/gallery_images/{{ $gallery->image }}" data-sub-html="<h4>{{ $gallery->title }}</h4>">
                                    <img src="/Uploads/gallery_images/{{ $gallery->image }}" alt="{{ $gallery->title }}">
                                    <div class="gallery-item-caption">
                                        <h5 class="gallery-item-title">{{ $gallery->title }}</h5>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="row">
                <div class="col-12 text-center">
                    <div class="alert" style="background: white; padding: 30px; border-radius: 15px; box-shadow: 0 8px 30px rgba(0,0,0,0.1);">
                        <i class="fa fa-info-circle" style="font-size: 50px; color: #7BA5C7; margin-bottom: 20px;"></i>
                        <h4 style="color: #333;">No Gallery Images Found</h4>
                        <p style="color: #666;">We're currently updating our gallery. Please check back soon for new photos.</p>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </section>
@endsection
@section('extra_script')
<script src="/js/lightbox/jquery.min.js"></script>
<script src="/js/lightbox/picturefill.min.js"></script>
<script src="/js/lightbox/lightgallery-all.min.js"></script>
<script src="/lib/jquery.mousewheel.min.js"></script>
<script>
// Initialize LightGallery
$(document).ready(function() {
    $('.lightgallery').lightGallery({
        selector: '.gallery-item a',
        thumbnail: true,
        animateThumb: true,
        showThumbByDefault: false
    });
    
    // Filter gallery items
    $('.filter-button').click(function() {
        var filterValue = $(this).data('filter');
        
        $('.filter-button').removeClass('active');
        $(this).addClass('active');
        
        if (filterValue == 'all') {
            $('.gallery-item').show();
        } else {
            $('.gallery-item').hide();
            $('.filter-' + filterValue).show();
        }
    });
});

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