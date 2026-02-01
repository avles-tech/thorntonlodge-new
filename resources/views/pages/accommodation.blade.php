@extends('layout.main')
@section('con_title')
    <title>{{$page_title}}</title>
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="Abstract" content="{{$Abstract}}" />
@endsection
@section('extra_css')
<style>
.hero-accommodation {
    background: linear-gradient(rgba(44, 62, 80, 0.6), rgba(44, 62, 80, 0.7)), url(/images/slider/THORNTON\ LODGE_6430.jpg) no-repeat center center;
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

.hero-accommodation h1 {
    font-size: 56px;
    font-weight: 600;
    margin-bottom: 20px;
    text-shadow: 2px 2px 10px rgba(0,0,0,0.3);
}

.modern-section-title {
    text-align: center;
    margin-bottom: 60px;
}

.modern-section-title .title-tag {
    display: inline-block;
    background: linear-gradient(135deg, #7BA5C7 0%, #6B94B5 100%);
    color: white;
    padding: 10px 32px;
    border-radius: 50px;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    margin-bottom: 20px;
    box-shadow: 0 6px 20px rgba(123, 165, 199, 0.35);
}

.modern-section-title h3 {
    font-size: 42px;
    font-weight: 700;
    color: #2C3E50;
    margin: 0;
    letter-spacing: -1px;
}

.accommodation-card {
    background: white;
    border-radius: 20px;
    padding: 50px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.08);
    height: 100%;
}

.accommodation-card p {
    font-size: 17px;
    line-height: 1.9;
    color: #555;
    margin-bottom: 20px;
}

.accommodation-card a {
    color: #7BA5C7;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
}

.accommodation-card a:hover {
    color: #F4C4A0;
}

.feature-icon-box {
    background: linear-gradient(135deg, #F0F7FA 0%, #E8F4F8 100%);
    border-radius: 15px;
    padding: 25px;
    text-align: center;
    margin-bottom: 20px;
    transition: all 0.3s ease;
}

.feature-icon-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(123, 165, 199, 0.2);
}

.feature-icon-box i {
    font-size: 40px;
    color: #7BA5C7;
    margin-bottom: 15px;
}

.feature-icon-box h5 {
    font-size: 18px;
    font-weight: 700;
    color: #2C3E50;
    margin: 0;
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
    background-image: linear-gradient(135deg, #7BA5C7 0%, #6B94B5 100%);
    background-color: #7BA5C7;
    color: white !important;
    padding: 12px 30px;
    border-radius: 50px;
    font-weight: 700;
    text-decoration: none !important;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(123, 165, 199, 0.3);
}

.enquire-btn:hover {
    background-image: linear-gradient(135deg, #6B94B5 0%, #5A8A9A 100%);
    background-color: #6B94B5;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(123, 165, 199, 0.4);
    color: white !important;
    text-decoration: none !important;
}

.image-circle {
    width: 100%;
    height: 400px;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 50px rgba(0,0,0,0.15);
}

.image-circle img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>
@endsection
@section('content')
    <!-- Hero Section -->
    <section class="hero-accommodation banner scroll-animate parallax-hero">
        <div class="container" style="max-width: 1600px; padding: 0 40px;">
            <div class="hero-content">
                <h1>Accommodation</h1>
                <p style="font-size: 20px; max-width: 700px; margin: 20px auto 0; line-height: 1.8;">
                    Comfortable, safe and welcoming living spaces designed for your wellbeing
                </p>
            </div>
        </div>
    </section>

    <!-- Main Content Section - White Background -->
    <section style="background: #ffffff; padding: 100px 0;">
        <div class="container-fluid" style="max-width: 1600px; padding: 0 20px;">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 scroll-animate-right">
                    <div class="accommodation-card">
                        <h3 style="color: #7BA5C7; font-weight: 700; margin-bottom: 30px; font-size: 32px;">Our Living Spaces</h3>
                        <p>Thornton Lodge offers accommodation for 45 residents and proudly offers all single rooms, some of which are ensuite.</p>
                        <p>The facilities include 2 large dining areas, 4 ground floor sitting areas, 2 conservatories and small diner / lounge on the first floor for those service users who may feel happier to stay nearer to their bedrooms.</p>
                        <p>There are 2 passenger lifts for those who are unable to use the stairs.</p>
                        <p>All the rooms have wash basins, help line system, fire prevention devices and electric points in line with the Registered Authorities.</p>
                        <p>The decoration is individualised and furniture is of good and practicable standard. Any item of significance value may be brought in by a service user as it helps bring in homeliness and provides a sense of familiarity.</p>
                        <p>Visit our <a href="{{ route('gallery') }}">Gallery</a> to view our home.</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 scroll-animate-left">
                    <div class="image-circle float-animation">
                        <img src="/images/accomensation.jpg" alt="Accommodation">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section - Light Blue Background -->
    <section style="background: linear-gradient(135deg, #F0F7FA 0%, #E8F4F8 100%); padding: 100px 0;">
        <div class="container-fluid" style="max-width: 1600px; padding: 0 20px;">
            <div class="modern-section-title scroll-animate">
                <div class="title-tag">FACILITIES</div>
                <h3>Key Features</h3>
                <div class="title-underline"></div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 scroll-animate-zoom scroll-animate-delay-1">
                    <div class="feature-icon-box ripple">
                        <i class="fa fa-bed"></i>
                        <h5>45 Single Rooms</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 scroll-animate-zoom scroll-animate-delay-2">
                    <div class="feature-icon-box ripple">
                        <i class="fa fa-arrows-v"></i>
                        <h5>2 Passenger Lifts</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 scroll-animate-zoom scroll-animate-delay-3">
                    <div class="feature-icon-box ripple">
                        <i class="fa fa-users"></i>
                        <h5>4 Sitting Areas</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 scroll-animate-zoom scroll-animate-delay-4">
                    <div class="feature-icon-box ripple">
                        <i class="fa fa-cutlery"></i>
                        <h5>2 Dining Areas</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Available Rooms Section - White Background -->
    @if(count($rooms)>0)
    <section style="background: #ffffff; padding: 100px 0;">
        <div class="container-fluid" style="max-width: 1600px; padding: 0 20px;">
            <div class="modern-section-title scroll-animate">
                <div class="title-tag">AVAILABILITY</div>
                <h3>Available Rooms</h3>
                <div class="title-underline"></div>
            </div>

            <div class="row">
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
            </div>

            <div class="text-center scroll-animate" style="margin-top: 40px;">
                <a href="{{ route('vacancies') }}" class="enquire-btn ripple" style="padding: 15px 50px; font-size: 16px;">
                    See More Rooms <i class="fa fa-arrow-right" style="margin-left: 10px;"></i>
                </a>
            </div>
        </div>
    </section>
    @endif
@endsection
@section('extra_script')
@endsection
