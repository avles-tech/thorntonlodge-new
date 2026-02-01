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
            padding: 15px 15px 20px;
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
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
            justify-content: center;
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
                if ($staff->category == 'Home Manager') return 3;
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
                                <div class="team-card" style="cursor: pointer;" data-toggle="modal" data-target="#staffModal{{ $k }}">
                                    <div class="team-image-container">
                                        <img src="{{ asset('Uploads/staff_images/'.$staff->image) }}" alt="{{ $staff->name }}" class="team-image">
                                    </div>
                                    <div class="team-content">
                                        <h4 class="team-name">{{ $staff->name }}</h4>
                                        <div class="team-qualification">{{ $staff->qualification }}</div>
                                    </div>
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
                                <div class="team-card" style="cursor: pointer;" data-toggle="modal" data-target="#staffModal{{ $k }}">
                                    <div class="team-image-container">
                                        <img src="{{ asset('Uploads/staff_images/'.$staff->image) }}" alt="{{ $staff->name }}" class="team-image">
                                    </div>
                                    <div class="team-content">
                                        <h4 class="team-name">{{ $staff->name }}</h4>
                                        <div class="team-qualification">{{ $staff->qualification }}</div>
                                    </div>
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
                
                <!-- Home Manager Section -->
                <div>
                    <h4 class="text-center mb-3" style="color: #7BA5C7; font-size: 18px; font-weight: 600;">Home Manager</h4>
                    <div class="row justify-content-center">
                        <?php
                        $count = 0;
                        foreach($staffs as $k => $staff) {
                            if($staff->category == 'Home Manager') {
                                $count++;
                        ?>
                            <div class="col-md-4">
                                <div class="team-card" style="cursor: pointer;" data-toggle="modal" data-target="#staffModal{{ $k }}">
                                    <div class="team-image-container">
                                        <img src="{{ asset('Uploads/staff_images/'.$staff->image) }}" alt="{{ $staff->name }}" class="team-image">
                                    </div>
                                    <div class="team-content">
                                        <h4 class="team-name">{{ $staff->name }}</h4>
                                        <div class="team-qualification">{{ $staff->qualification }}</div>
                                    </div>
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
                            <div class="team-card" style="cursor: pointer;" data-toggle="modal" data-target="#staffModal{{ $k }}">
                                <div class="team-image-container">
                                    <img src="{{ $staff->image ? asset('Uploads/staff_images/'.$staff->image) : asset('Uploads/staff_images/default-user.png') }}" alt="{{ $staff->name }}" class="team-image">
                                </div>
                                <div class="team-content">
                                    <h4 class="team-name">{{ $staff->name }}</h4>
                                    <div class="team-qualification">{{ $staff->qualification }}</div>
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
            <div class="team-section scroll-animate-zoom" style="margin-bottom: 60px;">
                <h3 class="team-category-title">Maintenance Team</h3>
                <div class="staff-grid">
                    @foreach($orderedStaffs as $k => $staff)
                        @if($staff->category == 'Maintenance Team')
                            <div class="team-card" style="cursor: pointer;" data-toggle="modal" data-target="#staffModal{{ $k }}">
                                <div class="team-image-container">
                                    <img src="{{ $staff->image ? asset('Uploads/staff_images/'.$staff->image) : asset('Uploads/staff_images/default-user.png') }}" alt="{{ $staff->name }}" class="team-image">
                                </div>
                                <div class="team-content">
                                    <h4 class="team-name">{{ $staff->name }}</h4>
                                    <div class="team-qualification">{{ $staff->qualification }}</div>
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
                                <h5 style="font-weight: 600; color: #2C3E50; cursor: pointer;" data-toggle="modal" data-target="#staffModal{{ $k }}">
                                    {{ $staff->name }}
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