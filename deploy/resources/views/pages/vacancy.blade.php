@extends('layout.main')
@section('con_title')
    <title>{{$page_title}}</title>
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="Abstract" content="{{$Abstract}}" />
@endsection
@section('extra_css')
@endsection
@section('content')

    <div class="container-2" id="top_banner" style="margin-top: -378px;">
        <img src="/images/slider/THORNTON LODGE_6371.jpg" style="width: 100%; "/>
        <h3 class="bottom-left">bed Availability</h3>
    </div>
    <!--/counter-->
    <section class="stats py-lg-5 py-4" style="margin-top:-47px;">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <br/><br/>
                </div>

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
    <section class="about py-lg-1 py-md-1 py-1" style="margin-top:-125px;">
        <div class="container">
            <div class="inner-sec-w3pvt py-lg-5 py-3">
                <!-- services -->
                <div class="fetured-info">
                    <h3 class="tittle text-center my-lg-4 mb-3 py-4"></h3>
                    <div class="row mid-slide">
                        @if(count($rooms)>0)
                            @foreach($rooms as $room)
                                <div class="col-lg-4 featured-content" style="margin-bottom: 20px;">
                                    <img src="/Uploads/room_cover_images/{{ $room->cover_image }}" style="height: 255px;" alt="{{ $room->title }}" class="img-fluid image1">
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
                                {{ $rooms->links() }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- //services -->
    </section>
    <!-- //ab -->
@endsection
@section('extra_script')

@endsection