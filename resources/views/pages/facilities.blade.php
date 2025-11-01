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
    <section class="about" style="margin-top: -380px;">
        <div class="container-2">
            <img src="/images/slider/THORNTON LODGE_6365.jpg" style="width: 100%; "/>
            <h3 class="bottom-left">Facilities</h3>
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
                                    <h5>Our Facilities</h5>
                                    <div style="margin-left:55px;">
                                        <ul>
                                            <li>2 passenger lift</li>
                                            <li>3 kitchen for serivce users</li>
                                            <li>3 dining areas</li>
                                            <li>3 seperate sitting rooms</li>
                                            <li>2 indoor conservatories</li>
                                            <li>2 spacious gardens</li>
                                            <li>1 large & spacious parking area</li>
                                            <li>1 outdoor conservatory</li>
                                        </ul>
                                    </div>
                                    <br/>
                                    <h5>Community Facilites</h5>
                                    <p>A service user is entitled to the same community facilities as any normal members of the community. Services including, Doctors, health visitors and chiropodists are available and these practitioners should visit service users in privacy within the home. Service users can have access to any centres and other community facilities. Arrangements for this can be made through the local authority. Other services, hairdressers, optician, library, dentist, etc. can be arranged.  Private consultation is chargeable</p>
                                    <br/>
                                    <h5>Telephone</h5>
                                    <p>The home provides two payphone for the use of the service users.</p>
                                    <br/>
                                    <h5>Recreational Facilities</h5>
                                    <p>Recreational and occupational facilities are provided and service users are encouraged to participate. However, their choice and decision to be involved are well taken into consideration.</p>
                                    <br/>
                                    <h5>Visitors</h5>
                                    <p>Visitors will be welcome during the daytime although some residents may prefer not to receive visitors during mealtimes or early afternoon when they may wish to have a nap.</p>
                                    <br/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-4">
                            <div class="custom-circle">
                                <img style="border-radius: 50%" src="/images/img4.jpg" alt="philosopher" class="img-fluid image1">
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