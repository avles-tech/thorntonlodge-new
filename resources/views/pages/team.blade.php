@extends('layout.main')
@section('con_title')
    <title>{{$page_title}}</title>
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="Abstract" content="{{$Abstract}}" />
@endsection
@section('extra_css')
    <style>
        /* Team Page Styles */
        .team-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            overflow: hidden;
            transition: all 0.3s ease;
            margin-bottom: 30px;
            height: 100%;
            text-align: center;
        }
        
        .team-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 50px rgba(0,0,0,0.15);
        }
        
        .team-image-container {
            position: relative;
            overflow: hidden;
            height: 250px;
        }
        
        .team-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.5s ease;
        }
        
        .team-card:hover .team-image {
            transform: scale(1.05);
        }
        
        .team-content {
            padding: 25px;
        }
        
        .team-title {
            font-size: 13px;
            text-transform: uppercase;
            font-weight: 700;
            color: #7BA5C7;
            margin-bottom: 10px;
            letter-spacing: 1px;
        }
        
        .team-name {
            font-size: 22px;
            font-weight: 700;
            color: #2C3E50;
            margin-bottom: 10px;
        }
        
        .team-qualification {
            font-size: 14px;
            color: #777;
            margin-bottom: 15px;
        }
        
        .team-info-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #F0F7FA;
            color: #7BA5C7;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }
        
        .team-info-btn:hover {
            background: #7BA5C7;
            color: white;
            transform: scale(1.1);
        }
        
        .team-category-title {
            position: relative;
            font-size: 28px;
            font-weight: 700;
            color: #2C3E50;
            margin-bottom: 40px;
            text-align: center;
        }
        
        .team-category-title:after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, transparent 0%, #7BA5C7 50%, transparent 100%);
            border-radius: 2px;
        }
        
        .staff-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }
        
        @media (max-width: 768px) {
            .staff-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
        }
        
        .modal-header {
            border-bottom: none !important;
            padding: 20px;
            position: relative;
        }
        
        .modal-header .close {
            font-size: 24px;
            opacity: 1;
            position: absolute;
            top: 15px;
            right: 15px;
            z-index: 10;
            color: #333;
            background: #f0f0f0;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .modal-header .close span {
            line-height: 0;
        }
        
        .modal-body {
            padding: 0 30px 30px;
            text-align: center;
        }
        
        .modal-body img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        
        .modal-content {
            border-radius: 20px;
            border: none;
        }
        
        .modal-footer {
            border-top: none;
            justify-content: center;
            padding-bottom: 30px;
        }
        
        .modal-close-btn {
            background: #7BA5C7;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .modal-close-btn:hover {
            background: #5A8A9A;
            transform: translateY(-2px);
        }
        
        blockquote {
            font-style: italic;
            border-left: 5px solid #7BA5C7;
            padding-left: 20px;
            margin: 20px 0;
            color: #555;
            text-align: left;
        }
    </style>
@endsection
@section('content')
    <!-- Modern Hero Banner with Parallax -->
    <section class="banner scroll-animate parallax-hero" style="background: linear-gradient(rgba(44, 62, 80, 0.7), rgba(44, 62, 80, 0.7)), url(/images/slider/our_team.jpg) no-repeat center; background-size: cover; padding: 160px 0 120px 0; position: relative; overflow: hidden; background-attachment: fixed;">
        <!-- Decorative Elements -->
        <div class="float-animation" style="position: absolute; top: -50px; right: -50px; width: 400px; height: 400px; background: rgba(255,255,255,0.08); border-radius: 50%; filter: blur(80px);"></div>
        <div class="float-animation" style="position: absolute; bottom: -100px; left: -100px; width: 500px; height: 500px; background: rgba(80, 149, 205, 0.1); border-radius: 50%; filter: blur(100px); animation-delay: 1s;"></div>

        <div class="container" style="position: relative; z-index: 2;">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10 text-center hero-content">
                    <!-- Main Heading -->
                    <h1 style="font-size: 52px; font-weight: 700; color: white; margin-bottom: 30px; line-height: 1.2; text-shadow: 2px 2px 10px rgba(0,0,0,0.5);">
                        Our Team
                    </h1>

                    <!-- Subheading -->
                    <p style="font-size: 24px; color: white; font-weight: 400; margin-bottom: 20px; text-shadow: 1px 1px 8px rgba(0,0,0,0.4); max-width: 800px; margin-left: auto; margin-right: auto; line-height: 1.6;">
                        Meet the Professionals Behind Our Quality Care
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section style="background: linear-gradient(135deg, #F0F7FA 0%, #E8F4F8 100%); padding: 100px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Modern Section Title -->
                    <div class="modern-section-title scroll-animate" style="margin-bottom: 60px;">
                        <div class="title-tag">Meet Our Staff</div>
                        <h3>We are a team of professionals</h3>
                        <div class="title-underline"></div>
                        <p class="mt-4" style="max-width: 800px; margin: 0 auto; font-size: 18px; line-height: 1.8; color: #555;">
                            Our dedicated team members work together to provide exceptional care and create a warm, family-like environment for our residents.
                        </p>
                    </div>
                </div>
            </div>

            <?php
            $orderedStaffs = $staffs->sortBy(function ($staff) {
                if ($staff->category == 'Managing Director') return 1;
                if ($staff->category == 'Deputy Managing Director') return 2;
                if ($staff->category == 'Home Manager') return 3;
                if ($staff->category == 'Administrative Team') return 4;
                return 5;
            });
            ?>
            
            <!-- Management Team Section -->
            <div class="team-section scroll-animate-zoom" style="margin-bottom: 80px;">
                <h3 class="team-category-title">Management Team</h3>
                <div class="staff-grid">
                    @foreach($orderedStaffs as $k => $staff)
                        @if(in_array($staff->category, ['Managing Director', 'Deputy Managing Director', 'Home Manager']))
                            <div class="team-card">
                                <div class="team-image-container">
                                    <img src="{{ asset('Uploads/staff_images/'.$staff->image) }}" alt="{{ $staff->name }}" class="team-image">
                                </div>
                                <div class="team-content">
                                    <div class="team-title">{{ $staff->category }}</div>
                                    <h4 class="team-name">{{ $staff->name }}</h4>
                                    <div class="team-qualification">{{ $staff->qualification }}</div>
                                    <button class="team-info-btn" data-toggle="modal" data-target="#staffModal{{ $k }}">
                                        <i class="fa fa-info"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Staff Modal -->
                            <div class="modal fade" id="staffModal{{ $k }}" tabindex="-1" role="dialog" aria-labelledby="staffModalLabel{{ $k }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Staff Profile</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ asset('Uploads/staff_images/'.$staff->image) }}" alt="{{ $staff->name }}">
                                            <div class="team-title">{{ $staff->category }}</div>
                                            <h4 class="team-name">{{ $staff->name }}</h4>
                                            <div class="team-qualification">{{ $staff->qualification }}</div>
                                            @if($staff->bio)
                                                <blockquote>
                                                    <p>{!! nl2br(e($staff->bio)) !!}</p>
                                                </blockquote>
                                            @endif
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="modal-close-btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            
            <!-- Administrative Team Section -->
            <div class="team-section scroll-animate-zoom" style="margin-bottom: 80px;">
                <h3 class="team-category-title">Administrative Team</h3>
                <div class="staff-grid">
                    @foreach($orderedStaffs as $k => $staff)
                        @if($staff->category == 'Administrative Team')
                            <div class="team-card">
                                <div class="team-image-container">
                                    <img src="{{ $staff->image ? asset('Uploads/staff_images/'.$staff->image) : asset('Uploads/staff_images/default-user.png') }}" alt="{{ $staff->name }}" class="team-image">
                                </div>
                                <div class="team-content">
                                    <h4 class="team-name">{{ $staff->name }}</h4>
                                    <div class="team-qualification">{{ $staff->qualification }}</div>
                                    <button class="team-info-btn" data-toggle="modal" data-target="#staffModal{{ $k }}">
                                        <i class="fa fa-info"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Staff Modal -->
                            <div class="modal fade" id="staffModal{{ $k }}" tabindex="-1" role="dialog" aria-labelledby="staffModalLabel{{ $k }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Staff Profile</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ $staff->image ? asset('Uploads/staff_images/'.$staff->image) : asset('Uploads/staff_images/default-user.png') }}" alt="{{ $staff->name }}">
                                            <div class="team-title">{{ $staff->category }}</div>
                                            <h4 class="team-name">{{ $staff->name }}</h4>
                                            <div class="team-qualification">{{ $staff->qualification }}</div>
                                            @if($staff->bio)
                                                <blockquote>
                                                    <p>{!! nl2br(e($staff->bio)) !!}</p>
                                                </blockquote>
                                            @endif
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="modal-close-btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            
            <!-- Maintenance Team Section -->
            <div class="team-section scroll-animate-zoom" style="margin-bottom: 80px;">
                <h3 class="team-category-title">Maintenance Team</h3>
                <div class="staff-grid">
                    @foreach($orderedStaffs as $k => $staff)
                        @if($staff->category == 'Maintenance Team')
                            <div class="team-card">
                                <div class="team-image-container">
                                    <img src="{{ $staff->image ? asset('Uploads/staff_images/'.$staff->image) : asset('Uploads/staff_images/default-user.png') }}" alt="{{ $staff->name }}" class="team-image">
                                </div>
                                <div class="team-content">
                                    <h4 class="team-name">{{ $staff->name }}</h4>
                                    <div class="team-qualification">{{ $staff->qualification }}</div>
                                    <button class="team-info-btn" data-toggle="modal" data-target="#staffModal{{ $k }}">
                                        <i class="fa fa-info"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Staff Modal -->
                            <div class="modal fade" id="staffModal{{ $k }}" tabindex="-1" role="dialog" aria-labelledby="staffModalLabel{{ $k }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Staff Profile</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ $staff->image ? asset('Uploads/staff_images/'.$staff->image) : asset('Uploads/staff_images/default-user.png') }}" alt="{{ $staff->name }}">
                                            <div class="team-title">{{ $staff->category }}</div>
                                            <h4 class="team-name">{{ $staff->name }}</h4>
                                            <div class="team-qualification">{{ $staff->qualification }}</div>
                                            @if($staff->bio)
                                                <blockquote>
                                                    <p>{!! nl2br(e($staff->bio)) !!}</p>
                                                </blockquote>
                                            @endif
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="modal-close-btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            
            <!-- Primary Senior Care Section -->
            <div class="team-section scroll-animate-zoom" style="margin-bottom: 80px;">
                <h3 class="team-category-title">Primary Senior Care</h3>
                <div class="staff-grid">
                    @foreach($staffs as $k => $staff)
                        @if($staff->category == 'Primary Senior Care')
                            <div class="team-card">
                                <div class="team-image-container">
                                    <img src="{{ $staff->image ? asset('Uploads/staff_images/'.$staff->image) : asset('Uploads/staff_images/default-user.png') }}" alt="{{ $staff->name }}" class="team-image">
                                </div>
                                <div class="team-content">
                                    <h4 class="team-name">{{ $staff->name }}</h4>
                                    <div class="team-qualification">{{ $staff->qualification }}</div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            
            <!-- Senior Care Assistants Section -->
            <div class="team-section scroll-animate-zoom" style="margin-bottom: 80px;">
                <h3 class="team-category-title">Senior Care Assistants</h3>
                <div class="text-center" style="margin-bottom: 30px;">
                    <div style="border-radius: 20px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
                        <img src="{{ asset('Uploads/staff_images/staff1.jpg') }}" alt="Senior Care Assistants Team" style="width: 100%; max-width: 800px; display: inline-block;">
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach($staffs as $k => $staff)
                        @if($staff->category == 'Senior Care Assistants')
                            <div class="col-md-3 col-sm-6 text-center mb-3">
                                <h5 style="font-weight: 600; color: #2C3E50;">
                                    {{ $staff->name }}
                                    <button class="team-info-btn" style="width: 28px; height: 28px; font-size: 12px; vertical-align: middle;" data-toggle="modal" data-target="#staffModal{{ $k }}">
                                        <i class="fa fa-info"></i>
                                    </button>
                                </h5>
                            </div>
                            
                            <!-- Staff Modal -->
                            <div class="modal fade" id="staffModal{{ $k }}" tabindex="-1" role="dialog" aria-labelledby="staffModalLabel{{ $k }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Staff Profile</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ $staff->image ? asset('Uploads/staff_images/'.$staff->image) : asset('Uploads/staff_images/default-user.png') }}" alt="{{ $staff->name }}">
                                            <div class="team-title">{{ $staff->category }}</div>
                                            <h4 class="team-name">{{ $staff->name }}</h4>
                                            <div class="team-qualification">{{ $staff->qualification }}</div>
                                            @if($staff->bio)
                                                <blockquote>
                                                    <p>{!! nl2br(e($staff->bio)) !!}</p>
                                                </blockquote>
                                            @endif
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="modal-close-btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            
            <!-- Cook Section -->
            <div class="team-section scroll-animate-zoom">
                <h3 class="team-category-title">Culinary Team</h3>
                <div class="staff-grid">
                    @foreach($orderedStaffs as $k => $staff)
                        @if($staff->category == 'Cook')
                            <div class="team-card">
                                <div class="team-image-container">
                                    <img src="{{ $staff->image ? asset('Uploads/staff_images/'.$staff->image) : asset('Uploads/staff_images/default-user.png') }}" alt="{{ $staff->name }}" class="team-image">
                                </div>
                                <div class="team-content">
                                    <div class="team-title">Chef</div>
                                    <h4 class="team-name">{{ $staff->name }}</h4>
                                    <div class="team-qualification">{{ $staff->qualification }}</div>
                                    <button class="team-info-btn" data-toggle="modal" data-target="#staffModal{{ $k }}">
                                        <i class="fa fa-info"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Staff Modal -->
                            <div class="modal fade" id="staffModal{{ $k }}" tabindex="-1" role="dialog" aria-labelledby="staffModalLabel{{ $k }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Staff Profile</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ $staff->image ? asset('Uploads/staff_images/'.$staff->image) : asset('Uploads/staff_images/default-user.png') }}" alt="{{ $staff->name }}">
                                            <div class="team-title">{{ $staff->category }}</div>
                                            <h4 class="team-name">{{ $staff->name }}</h4>
                                            <div class="team-qualification">{{ $staff->qualification }}</div>
                                            @if($staff->bio)
                                                <blockquote>
                                                    <p>{!! nl2br(e($staff->bio)) !!}</p>
                                                </blockquote>
                                            @endif
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="modal-close-btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
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

    // Ensure modal functionality works properly
    $('.modal').on('click', '.close, .modal-close-btn', function() {
        $(this).closest('.modal').modal('hide');
    });
    
    // Add backdrop click to close
    $('.modal').on('click', function(e) {
        if ($(e.target).hasClass('modal')) {
            $(this).modal('hide');
        }
    });
    
    // Add keyboard escape to close
    $(document).on('keydown', function(e) {
        if (e.key === 'Escape') {
            $('.modal').modal('hide');
        }
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