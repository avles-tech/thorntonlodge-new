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
            <img src="/images/slider/whoweare.jpg" style="width: 100%; "/>
            <h3 class="bottom-left">St. Christopher's</h3>
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
                                    <p>Thornton Lodge aims at promoting quality of life for older, enabling Residents to die in comfort and with dignity towards the very end of their life. The Palliative Care programme in place at Thornton Lodge ensures Residents who are nearing the end of their life experience a peaceful state of mind and place; for both themselves and their families and our Carers.
                                    <br/><br/>Our Resident’s quality of life is delivered and met by respecting their wishes, preferences, choices and considering religious and cultural beliefs through holistic person centred care, and by focusing on important health care areas such as improving the quality of life of the Resident and their families. Thornton Lodge will support Residents and their families to identify needs, priorities, and preferences; ensuring appropriate support for Carers and providing a co-ordinated, seamless service. Supporting integrated pathways are found to improve care and dignify at the end of a Resident’s life. This supports professionals involved with the Resident’s care, providing a high quality service in the last days of life, and after death, to ascertain and respond to the educational needs of health care professionals, promoting and developing support for Residents as defined by themselves and their families.
                                    <br/><br/>Person Centred Care is an ongoing process that will support Residents to achieve personal goals and incentives, by encouraging them to be involved in their own end of life care; raising self-worth and fulfilment towards the last days of life.
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
            <h3 class="tittle"><span class="sub-tittle">More than just a hospice</span></h3>
            <br/>

            <div class="row">
                <div class="col-12">
                    <div class="text-center" style="margin-top:20px;">
                        <img src="/images/St Christopher's Certificate-edited.jpg" alt="St Christopher's Certificate" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- //services -->
        </div>


    </section>
    <!-- //ab -->

@endsection
@section('extra_script')
@endsection