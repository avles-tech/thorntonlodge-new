@extends('layout.main')
@section('con_title')
    <title>{{$page_title}}</title>
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="Abstract" content="{{$Abstract}}" />
@endsection
@section('extra_css')
    <!-- Additional Css -->
@endsection
@section('content')
    <section class="about" style="margin-top: -300px;">
        <div class="container-2">
            <img src="/images/slider/THORNTON LODGE_6430.jpg" style="width: 100%; "/>
            <h3 class="bottom-left">Accommodation</h3>
        </div>
    </section>

    <section class="about py-lg-1 py-md-5 py-1">
        <div class="container">
            <div class="inner-sec-w3pvt py-lg-1 py-1">
                <!-- services -->
                <div class="fetured-info pt-lg-1">
                    <div class="row fetured-sec mt-lg-5 mt-3">
                        <div class="col-lg-8 serv_bottom feature-grids">
                            <div class="featured-left text-left">
                                <div class="bottom-gd px-9 py-lg-0">
                                    <p>Thornton Lodge offers accommodation for 45 residents and proudly offers all single rooms, some of which are ensuite.
                                    <br/><br/>The facilities include 2 large dining areas, 4 ground floor sitting areas, 2 conservatories and small diner / lounge on the first floor for those service users who may feel happier to stay nearer to their bedrooms.
                                    <br/><br/>There are 2 passenger lifts for those who are unable to use the stairs.
                                    <br/><br/>All the rooms have wash basins, help line system, fire prevention devices and electric points in line with the Registered Authorities.
                                    <br/><br/>The decoration is individualised and furniture is of good and practicable standard. Any item of significance value may be brought in by a service user as it helps bring in homeliness and provides a sense of familiarity.
                                    </p><p><br/>Visit our <a href="{{ route('gallery') }}"> Gallery </a> to view our home.</p>
                                    <br/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-4">
                            <div class="custom-circle">
                                <img  src="/images/accomensation.jpg" alt="philosopher" style="width:321px !important; height:321px !important;" class="img-fluid image1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="tittle"><span class="sub-tittle">AVAILABILITY ROOMS</span></h3>
            <br/>
            <div class="row mid-slide">
                @if(count($rooms)>0)
                    @foreach($rooms as $room)
                        <div class="col-lg-4 featured-content">
                            <img src="/Uploads/room_cover_images/{{ $room->cover_image }}" alt="{{ $room->title }}" class="img-fluid image1">
                            <span class="money">Available</span>
                            <!--/Property_info-->
                            <div class="property-info-list">
                                <div class="footer-properties">
                                    <a href="{{ route('contact') }}" ><span class="year text-right"> Enquire Now</span></a>
                                    <a class="admin" href="#">{{ $room->title }}</a>
                                </div>
                                <p>{{ $room->excerpt }}</p>
                            </div>
                            <!--//Property_info-->
                        </div>
                    @endforeach
                @else
                    <p class="noresult"><i class="fa fa-info-circle"></i> No room results found</p>
                @endif
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="text-center" style="margin-top:20px;">
                        <a href="{{ route('vacancies') }}" class="btn btn-info btn-lg" style="background: #6ecfe9;padding-left:45px; border: none; border-radius: 0; padding-right:45px; ">See More Rooms</a>
                    </div>
                </div>
            </div>
            <!-- //services -->
        </div>


    </section>
    <!-- //ab -->
    <!--/counter-->
    <section class="stats room-status" style="margin-top:90px">
        <div class="container">
            <div class="row text-center">
                <div class="col col-back-div-left">
                    <div class="counter">
                        <h3 class="timer count-title text-right count-number">{{ $room_info->beds }}</h3>
                        <p class="count-text text-right">Total Number of beds</p>
                    </div>
                </div>
                <div class="col col-back-div-right">
                    <div class="counter">
                        <h3 class="timer count-title count-number text-left">{{ $count_room }}</h3>
                        <p class="count-text text-left">Total number of vacancies</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//counter-->

@endsection
@section('extra_script')
@endsection