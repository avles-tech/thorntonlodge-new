@extends('layout.main')
@section('con_title')
    <title>{{$page_title}}</title>
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="Abstract" content="{{$Abstract}}" />
@endsection
@section('extra_css')
    <style>
        .hero-vacancy {
            background: linear-gradient(rgba(44, 62, 80, 0.6), rgba(44, 62, 80, 0.7)), url(/images/slider/THORNTON\ LODGE_6371.jpg) no-repeat center center;
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
        
        .hero-vacancy h1 {
            font-size: 56px;
            font-weight: 600;
            margin-bottom: 20px;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.3);
        }
        
        .room-counter-box {
            background: linear-gradient(135deg, #7BA5C7 0%, #6B94B5 100%);
            border-radius: 20px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(123, 165, 199, 0.3);
            color: white;
            margin-bottom: 30px;
        }
        
        .room-counter-box h3 {
            font-size: 52px;
            font-weight: 700;
            margin-bottom: 10px;
            color: white;
        }
        
        .room-counter-box p {
            font-size: 16px;
            font-weight: 500;
            margin: 0;
            color: rgba(255, 255, 255, 0.9);
        }
        
        .room-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            margin-bottom: 30px;
            height: 100%;
        }
        
        .room-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(123, 165, 199, 0.2);
        }
        
        .room-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        
        .room-card-content {
            padding: 25px;
        }
        
        .room-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: linear-gradient(135deg, #7BA5C7 0%, #6B94B5 100%);
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            font-weight: 700;
            font-size: 13px;
            box-shadow: 0 4px 15px rgba(123, 165, 199, 0.4);
        }
        
        .room-card-content h4 {
            font-size: 22px;
            font-weight: 700;
            color: #2C3E50;
            margin-bottom: 15px;
        }
        
        .room-card-content p {
            font-size: 15px;
            color: #666;
            line-height: 1.7;
            margin-bottom: 20px;
        }
        
        .enquire-btn {
            display: inline-block;
            background: linear-gradient(135deg, #7BA5C7 0%, #6B94B5 100%);
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(123, 165, 199, 0.3);
        }
        
        .enquire-btn:hover {
            background: linear-gradient(135deg, #6B94B5 0%, #5A8A9A 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(123, 165, 199, 0.4);
            color: white;
            text-decoration: none;
        }
        
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }
        
        .pagination .page-item .page-link {
            border: none;
            border-radius: 50%;
            margin: 0 5px;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #F0F7FA;
            color: #7BA5C7;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .pagination .page-item.active .page-link,
        .pagination .page-item .page-link:hover {
            background: linear-gradient(135deg, #7BA5C7 0%, #6B94B5 100%);
            color: white;
            box-shadow: 0 6px 20px rgba(123, 165, 199, 0.3);
        }
    </style>
@endsection
@section('content')
    <!-- Hero Section -->
    <section class="hero-vacancy banner scroll-animate parallax-hero">
        <div class="container" style="max-width: 1600px; padding: 0 40px;">
            <div class="hero-content">
                <h1>Bed Availability</h1>
                <p style="font-size: 20px; max-width: 700px; margin: 20px auto 0; line-height: 1.8;">
                    Explore our available rooms and find a comfortable place to call home
                </p>
            </div>
        </div>
    </section>
    
    <!-- Stats Counter Section -->
    <section style="background: #ffffff; padding: 100px 0 50px 0;">
        <div class="container" style="max-width: 1200px;">
            <div class="row">
                <div class="col-lg-6 mb-4 scroll-animate-left">
                    <div class="room-counter-box ripple">
                        <div style="margin-bottom: 15px;">
                            <i class="fa fa-bed" style="font-size: 36px;"></i>
                        </div>
                        <h3 class="counter-number" data-count="{{ $room_info->beds }}">{{ $room_info->beds }}</h3>
                        <p>Total Number of Beds</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4 scroll-animate-right">
                    <div class="room-counter-box ripple" style="background: linear-gradient(135deg, #F4C4A0 0%, #E67E22 100%);">
                        <div style="margin-bottom: 15px;">
                            <i class="fa fa-check-circle" style="font-size: 36px;"></i>
                        </div>
                        <h3 class="counter-number" data-count="{{ $count_room }}">{{ $count_room }}</h3>
                        <p>Total Number of Vacancies</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Available Rooms Section -->
    <section style="background: #ffffff; padding: 0 0 100px 0;">
        <div class="container-fluid" style="max-width: 1600px; padding: 0 20px;">
            <div class="modern-section-title scroll-animate">
                <div class="title-tag">AVAILABILITY</div>
                <h3>Available Rooms</h3>
                <div class="title-underline"></div>
            </div>
            
            <div class="row">
                @if(count($rooms)>0)
                    @foreach($rooms as $room)
                        <div class="col-lg-4 col-md-6 mb-4 scroll-animate-zoom">
                            <div class="room-card ripple">
                                <div style="position: relative;">
                                    <img src="/Uploads/room_cover_images/{{ $room->cover_image }}" alt="{{ $room->title }}">
                                    <span class="room-badge">Available</span>
                                </div>
                                <div class="room-card-content">
                                    <h4>{{ $room->title }}</h4>
                                    <p>{{ $room->excerpt }}</p>
                                    <a href="{{ route('contact') }}" class="enquire-btn ripple">
                                        <i class="fa fa-envelope" style="margin-right: 8px;"></i>Enquire Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12 text-center">
                        <div style="background: #F0F7FA; padding: 30px; border-radius: 15px;">
                            <i class="fa fa-info-circle" style="font-size: 32px; color: #7BA5C7; margin-bottom: 15px;"></i>
                            <p style="font-size: 18px; color: #2C3E50;">No room results found</p>
                        </div>
                    </div>
                @endif
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="text-center scroll-animate" style="margin-top: 20px;">
                        {{ $rooms->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('extra_script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animated Counter
        const counters = document.querySelectorAll('.counter-number');
        let counterAnimated = false;
        
        const counterObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting && !counterAnimated) {
                    counterAnimated = true;
                    counters.forEach(counter => {
                        const target = parseInt(counter.getAttribute('data-count'));
                        const duration = 2000;
                        const step = target / (duration / 16);
                        let current = 0;
                        
                        const updateCounter = () => {
                            current += step;
                            if (current < target) {
                                counter.textContent = Math.floor(current);
                                requestAnimationFrame(updateCounter);
                            } else {
                                counter.textContent = target;
                            }
                        };
                        
                        updateCounter();
                    });
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(counter => {
            counterObserver.observe(counter.parentElement);
        });
    });
</script>
@endsection