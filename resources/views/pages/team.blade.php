@extends('layout.main')
@section('con_title')
    <title>{{$page_title}}</title>
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="Abstract" content="{{$Abstract}}" />
@endsection
@section('extra_css')
    <style>
        /* Banner styles */
        .hero-team {
            background: linear-gradient(rgba(44, 62, 80, 0.7), rgba(44, 62, 80, 0.7)), url(/images/slider/our_team.jpg) no-repeat center center;
            background-size: cover;
            background-position: center bottom;
            min-height: 450px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            background-attachment: fixed;
        }

        .hero-team h1 {
            font-size: 52px;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.3);
        }

        .hero-team p {
            font-size: 22px;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.8;
        }
        
        /* Team Page Styles */
        .team-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            overflow: hidden;
            transition: all 0.3s ease;
            margin-bottom: 25px;
            height: 100%;
            text-align: center;
        }
        
        .team-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 50px rgba(0,0,0,0.15);
            border: 2px solid #7BA5C7;
        }
        
        .team-image-container {
            position: relative;
            overflow: hidden;
            height: 380px;
        }
        
        .team-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center top;
            transition: all 0.5s ease;
        }
        
        .team-card:hover .team-image {
            transform: scale(1.05);
        }
        
        .team-content {
            padding: 15px 15px 50px;
            position: relative;
        }
        
        .team-title {
            font-size: 13px;
            text-transform: uppercase;
            font-weight: 700;
            color: #7BA5C7;
            margin-bottom: 5px;
            letter-spacing: 1px;
        }
        
        .team-name {
            font-size: 20px;
            font-weight: 700;
            color: #2C3E50;
            margin-bottom: 5px;
        }
        
        .team-qualification {
            font-size: 14px;
            color: #777;
            margin-bottom: 0;
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
            font-size: 26px;
            font-weight: 700;
            color: #2C3E50;
            margin-bottom: 30px;
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
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-bottom: 40px;
        }

        .staff-grid .team-card {
            width: 250px;
            flex-shrink: 0;
        }
        
        @media (max-width: 768px) {
            .staff-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
        }
        
        .modal-dialog {
            max-width: 500px;
            margin: 30px auto;
            position: relative;
            z-index: 1055;
        }

        .modal-header {
            border-bottom: none !important;
            padding: 15px 20px 10px;
            position: relative;
            z-index: 1;
        }

        .modal-header .close {
            font-size: 20px;
            opacity: 1 !important;
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 9999 !important;
            color: #333;
            background: #f0f0f0;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer !important;
            pointer-events: auto !important;
        }

        .modal-header .close:hover {
            background: #7BA5C7 !important;
            color: white !important;
        }

        .modal-header .close span {
            line-height: 0;
            pointer-events: none;
        }

        .modal-header .modal-title {
            font-size: 16px;
            font-weight: 600;
        }

        .modal-body {
            padding: 10px 25px 20px;
            text-align: center;
            max-height: calc(100vh - 200px);
            overflow-y: auto;
        }

        .modal-body img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .modal-content {
            border-radius: 20px;
            border: none;
            position: relative;
            z-index: 1055;
        }

        .modal.show {
            z-index: 1050 !important;
        }

        .modal-backdrop.show {
            z-index: 1040 !important;
        }
        
        .modal-footer {
            border-top: none;
            justify-content: center;
            padding: 10px 20px 20px;
        }

        .modal-close-btn {
            background: #7BA5C7;
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .modal-close-btn:hover {
            background: #5A8A9A;
            transform: translateY(-2px);
        }

        .modal-body .team-title {
            font-size: 12px;
        }

        .modal-body .team-name {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .modal-body .team-qualification {
            font-size: 13px;
            margin-bottom: 15px;
        }

        .modal-body blockquote {
            margin: 15px 0;
            padding-left: 15px;
            font-size: 14px;
        }
        
        blockquote {
            font-style: italic;
            border-left: 5px solid #7BA5C7;
            padding-left: 20px;
            margin: 20px 0;
            color: #555;
            text-align: left;
        }

        /* Expandable card details */
        .team-details {
            display: none;
            padding: 20px;
            background: #f8f9fa;
            border-top: 2px solid #7BA5C7;
            animation: slideDown 0.3s ease;
        }

        .team-details.show {
            display: block;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                max-height: 0;
            }
            to {
                opacity: 1;
                max-height: 500px;
            }
        }

        .team-details p {
            font-size: 14px;
            line-height: 1.7;
            color: #555;
            text-align: left;
            margin: 0;
        }

        .expand-icon {
            position: absolute;
            bottom: 15px;
            right: 15px;
            width: 30px;
            height: 30px;
            background: #7BA5C7;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            transition: all 0.3s ease;
        }

        .team-card:hover .expand-icon {
            background: #5A8A9A;
            transform: scale(1.1);
        }
    </style>
@endsection
@section('content')
    <!-- Hero Banner Section -->
    <section class="hero-team banner scroll-animate parallax-hero">
        <div class="container" style="max-width: 1600px; padding: 0 40px;">
            <div class="hero-content">
                <h1>Our Team</h1>
                <p>Meet the Professionals Behind Our Quality Care</p>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section style="background: linear-gradient(135deg, #F0F7FA 0%, #E8F4F8 100%); padding: 80px 0;">
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
                if ($staff->category == 'Deputy Manager') return 3;
                if ($staff->category == 'Administrative Team') return 4;
                return 5;
            });
            ?>
            
            <!-- Management Team Section -->
            <div class="team-section scroll-animate-zoom" style="margin-bottom: 60px;">
                <h3 class="team-category-title">Management Team</h3>
                
                <!-- Managing Director Section -->
                <div class="mb-4">
                    <h4 class="text-center mb-3" style="color: #7BA5C7; font-size: 18px; font-weight: 600;">Managing Director</h4>
                    <div class="row justify-content-center">
                        <?php
                        $count = 0;
                        foreach($staffs as $k => $staff) {
                            if($staff->category == 'Managing Director') {
                                $count++;
                        ?>
                            <div class="col-md-4">
                                <div class="team-card" style="cursor: pointer; position: relative;" onclick="toggleStaffDetails('staff{{ $k }}')">
                                    <div class="team-image-container">
                                        <img src="{{ asset('Uploads/staff_images/'.$staff->image) }}" alt="{{ $staff->name }}" class="team-image">
                                    </div>
                                    <div class="team-content">
                                        <h4 class="team-name">{{ $staff->name }}</h4>
                                        <div class="team-qualification">{{ $staff->qualification }}</div>
                                    </div>
                                    @if($staff->bio)
                                        <div class="expand-icon">
                                            <i class="fa fa-plus"></i>
                                        </div>
                                    @endif
                                    @if($staff->bio)
                                        <div class="team-details" id="staff{{ $k }}">
                                            <p><strong>{{ $staff->category }}</strong></p>
                                            <p>{!! nl2br(e($staff->bio)) !!}</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        <?php
                            }
                        }
                        // If no staff in this role, show a message
                        if($count == 0) {
                            echo '<div class="col-12 text-center"><p class="text-muted">No staff in this role</p></div>';
                        }
                        ?>
                    </div>
                </div>
                
                <!-- Deputy Managing Director Section -->
                <div class="mb-4">
                    <h4 class="text-center mb-3" style="color: #7BA5C7; font-size: 18px; font-weight: 600;">Deputy Managing Director</h4>
                    <div class="row justify-content-center">
                        <?php
                        $count = 0;
                        foreach($staffs as $k => $staff) {
                            if($staff->category == 'Deputy Managing Director') {
                                $count++;
                        ?>
                            <div class="col-md-4">
                                <div class="team-card" style="cursor: pointer; position: relative;" onclick="toggleStaffDetails('staff{{ $k }}')">
                                    <div class="team-image-container">
                                        <img src="{{ asset('Uploads/staff_images/'.$staff->image) }}" alt="{{ $staff->name }}" class="team-image">
                                    </div>
                                    <div class="team-content">
                                        <h4 class="team-name">{{ $staff->name }}</h4>
                                        <div class="team-qualification">{{ $staff->qualification }}</div>
                                    </div>
                                    @if($staff->bio)
                                        <div class="expand-icon">
                                            <i class="fa fa-plus"></i>
                                        </div>
                                    @endif
                                    @if($staff->bio)
                                        <div class="team-details" id="staff{{ $k }}">
                                            <p><strong>{{ $staff->category }}</strong></p>
                                            <p>{!! nl2br(e($staff->bio)) !!}</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        <?php
                            }
                        }
                        // If no staff in this role, show a message
                        if($count == 0) {
                            echo '<div class="col-12 text-center"><p class="text-muted">No staff in this role</p></div>';
                        }
                        ?>
                    </div>
                </div>
                
                <!-- Deputy Manager Section -->
                <div>
                    <h4 class="text-center mb-3" style="color: #7BA5C7; font-size: 18px; font-weight: 600;">Deputy Manager</h4>
                    <div class="row justify-content-center">
                        <?php
                        $count = 0;
                        foreach($staffs as $k => $staff) {
                            if($staff->category == 'Deputy Manager') {
                                $count++;
                        ?>
                            <div class="col-md-4">
                                <div class="team-card" style="cursor: pointer; position: relative;" onclick="toggleStaffDetails('staff{{ $k }}')">
                                    <div class="team-image-container">
                                        <img src="{{ asset('Uploads/staff_images/'.$staff->image) }}" alt="{{ $staff->name }}" class="team-image">
                                    </div>
                                    <div class="team-content">
                                        <h4 class="team-name">{{ $staff->name }}</h4>
                                        <div class="team-qualification">{{ $staff->qualification }}</div>
                                    </div>
                                    @if($staff->bio)
                                        <div class="expand-icon">
                                            <i class="fa fa-plus"></i>
                                        </div>
                                    @endif
                                    @if($staff->bio)
                                        <div class="team-details" id="staff{{ $k }}">
                                            <p><strong>{{ $staff->category }}</strong></p>
                                            <p>{!! nl2br(e($staff->bio)) !!}</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        <?php
                            }
                        }
                        // If no staff in this role, show a message
                        if($count == 0) {
                            echo '<div class="col-12 text-center"><p class="text-muted">No staff in this role</p></div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            
            <!-- Administrative Team Section -->
            <div class="team-section scroll-animate-zoom" style="margin-bottom: 60px;">
                <h3 class="team-category-title">Administrative Team</h3>
                <div class="staff-grid">
                    @foreach($orderedStaffs as $k => $staff)
                        @if($staff->category == 'Administrative Team')
                            <div class="team-card" style="cursor: pointer; position: relative;" onclick="toggleStaffDetails('staff{{ $k }}')">
                                <div class="team-image-container">
                                    <img src="{{ $staff->image ? asset('Uploads/staff_images/'.$staff->image) : asset('Uploads/staff_images/default-user.png') }}" alt="{{ $staff->name }}" class="team-image">
                                </div>
                                <div class="team-content">
                                    <h4 class="team-name">{{ $staff->name }}</h4>
                                    <div class="team-qualification">{{ $staff->qualification }}</div>
                                </div>
                                @if($staff->bio)
                                    <div class="expand-icon">
                                        <i class="fa fa-plus"></i>
                                    </div>
                                @endif
                                @if($staff->bio)
                                    <div class="team-details" id="staff{{ $k }}">
                                        <p><strong>{{ $staff->category }}</strong></p>
                                        <p>{!! nl2br(e($staff->bio)) !!}</p>
                                    </div>
                                @endif
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            
            <!-- Maintenance Team Section -->
            <div class="team-section scroll-animate-zoom" style="margin-bottom: 60px;">
                <h3 class="team-category-title">Maintenance Team</h3>
                <div class="staff-grid">
                    @foreach($orderedStaffs as $k => $staff)
                        @if($staff->category == 'Maintenance Team')
                            <div class="team-card" style="cursor: pointer; position: relative;" onclick="toggleStaffDetails('staff{{ $k }}')">
                                <div class="team-image-container">
                                    <img src="{{ $staff->image ? asset('Uploads/staff_images/'.$staff->image) : asset('Uploads/staff_images/default-user.png') }}" alt="{{ $staff->name }}" class="team-image">
                                </div>
                                <div class="team-content">
                                    <h4 class="team-name">{{ $staff->name }}</h4>
                                    <div class="team-qualification">{{ $staff->qualification }}</div>
                                </div>
                                @if($staff->bio)
                                    <div class="expand-icon">
                                        <i class="fa fa-plus"></i>
                                    </div>
                                @endif
                                @if($staff->bio)
                                    <div class="team-details" id="staff{{ $k }}">
                                        <p><strong>{{ $staff->category }}</strong></p>
                                        <p>{!! nl2br(e($staff->bio)) !!}</p>
                                    </div>
                                @endif
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            
            <!-- Primary Senior Care Section -->
            <div class="team-section scroll-animate-zoom" style="margin-bottom: 60px;">
                <h3 class="team-category-title">Primary Senior Care</h3>
                <div class="staff-grid">
                    @foreach($staffs as $k => $staff)
                        @if($staff->category == 'Primary Senior Care')
                            <div class="team-card" style="cursor: pointer;">
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
            <div class="team-section scroll-animate-zoom" style="margin-bottom: 60px;">
                <h3 class="team-category-title">Senior Care Assistants</h3>
                <div class="text-center" style="margin-bottom: 20px;">
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
                                </h5>
                                @if($staff->qualification)
                                    <p style="font-size: 13px; color: #777;">{{ $staff->qualification }}</p>
                                @endif
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
                        @if($staff->category == 'Culinary Team')
                            <div class="team-card" style="cursor: pointer; position: relative;" onclick="toggleStaffDetails('staff{{ $k }}')">
                                <div class="team-image-container">
                                    <img src="{{ $staff->image ? asset('Uploads/staff_images/'.$staff->image) : asset('Uploads/staff_images/default-user.png') }}" alt="{{ $staff->name }}" class="team-image">
                                </div>
                                <div class="team-content">
                                    <div class="team-title">Chef</div>
                                    <h4 class="team-name">{{ $staff->name }}</h4>
                                    <div class="team-qualification">{{ $staff->qualification }}</div>
                                </div>
                                @if($staff->bio)
                                    <div class="expand-icon">
                                        <i class="fa fa-plus"></i>
                                    </div>
                                @endif
                                @if($staff->bio)
                                    <div class="team-details" id="staff{{ $k }}">
                                        <p><strong>{{ $staff->category }}</strong></p>
                                        <p>{!! nl2br(e($staff->bio)) !!}</p>
                                    </div>
                                @endif
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

});

// Toggle staff details function
function toggleStaffDetails(staffId) {
    const detailsElement = document.getElementById(staffId);
    const expandIcon = detailsElement.previousElementSibling;

    if (detailsElement.classList.contains('show')) {
        detailsElement.classList.remove('show');
        if (expandIcon && expandIcon.classList.contains('expand-icon')) {
            expandIcon.querySelector('i').classList.remove('fa-minus');
            expandIcon.querySelector('i').classList.add('fa-plus');
        }
    } else {
        // Close all other open details
        document.querySelectorAll('.team-details.show').forEach(function(el) {
            el.classList.remove('show');
            const icon = el.previousElementSibling;
            if (icon && icon.classList.contains('expand-icon')) {
                icon.querySelector('i').classList.remove('fa-minus');
                icon.querySelector('i').classList.add('fa-plus');
            }
        });

        // Open clicked details
        detailsElement.classList.add('show');
        if (expandIcon && expandIcon.classList.contains('expand-icon')) {
            expandIcon.querySelector('i').classList.remove('fa-plus');
            expandIcon.querySelector('i').classList.add('fa-minus');
        }
    }
}

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