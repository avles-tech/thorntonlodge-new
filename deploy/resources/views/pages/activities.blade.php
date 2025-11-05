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
            <img src="/images/slider/activity.jpg" style="width: 100%; "/>
            <h3 class="bottom-left">Activities</h3>
        </div>
    </section>

    <section class="about py-lg-1 py-md-5 py-1">
        <div class="container">
            <div class="inner-sec-w3pvt py-lg-1 py-1">
                <!-- services -->
                <div class="fetured-info pt-lg-1">
                    <div class="row fetured-sec mt-lg-5 mt-3">
                        <div class="col-lg-4 p-4">
                            <div class="custom-circle">
                                <img style="border-radius: 50%" src="/images/activity_cir.jpg" alt="philosopher" class="img-fluid image1">
                            </div>
                        </div>
                        <div class="col-lg-8 serv_bottom feature-grids">
                            <div class="featured-left text-left">
                                <div class="bottom-gd px-9 py-lg-0">
                                    <p>The Home encourages all the service users to participate in planned activities of their choice, which have a beneficial effect in promoting self-confidence and esteem.</p><br/>

                                    <p>Activities vary and can include setting tables, watering plants, helping with the home chores, gardening, going out for a walk, discussing the news of the day and engaging in reminiscence therapy, playing games and participating in musical quiz’. Because everyday is not alike, so the individual
                                        mood fluctuates, activity is promoted, but not forced.</p>
                                    <br/>

                                    <p><strong>Other special events are on during the year such as:</strong></p>
                                    <div style="margin-left:55px;">
                                        <ul class="space-text">
                                            <li>Organised visits to places of interests</li>
                                            <li>Barbecue</li>
                                            <li>Birthday Parties</li>
                                            <li>Going to Cinema and Theatre</li>
                                        </ul>
                                    </div>
                                    <br/>
                                    <p>Whilst it is encouraged for Residents to participate in activities, their wish not to is never disputed.</p>
                                    <br/><br/>
                                    <p>Thornton Lodge prides itself on celebrating an ethnically diverse work-force. Our carers hail from many different countries and rich cultural backgrounds and some of the languages spoken at Thornton lodge include, English, Mauritian Creole, Polish, Lithuanian, Tamil, Romanian, Arabic, Hindi and Urdu.</p>
                                    <br/><br/>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="fetured-info pt-lg-1">
                    <div class="row fetured-sec mt-lg-5 mt-3">
                        <div class="col-lg-4 p-4">
                            <div class="custom-circle">
                                <img style="border-radius: 50%" src="/images/tuck_shop.jpg" alt="philosopher" class="img-fluid image1">
                            </div>
                        </div>
                        <div class="col-lg-8 serv_bottom feature-grids">
                            <div class="featured-left text-left">
                                <div class="bottom-gd px-9 py-lg-0">

                                    <br/><br/>

                                    <p>Thornton Lodge now operates it's own internal Tuck Shop for the benefit of it's Residents. </p><br/>
                                    <p> The Tuck Shop functions as a non-profit entity and acts as a means for those Residents whom cannot access to the community, and helps promote independence and choice. The Tuck Shop offers good such as toilettries, toothbrushes, shower gels, shampoos, drinks snacks and so on. The Home also actively works alongside it's Residents to ensure we and providing them with their choice of essentials and treats. <p>
                                    <p> The Tuck Shop is open on Fridays from 11am - 12pm</p>
                                    
                                </div>
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