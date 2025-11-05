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
            <img src="/images/slider/Principals.jpg" style="width: 100%; "/>
            <h3 class="bottom-left">Principals</h3>
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
                                <img style="border-radius: 50%" src="/images/img6.jpg" alt="philosopher" class="img-fluid image1">
                            </div>
                        </div>
                        <div class="col-lg-8 serv_bottom feature-grids">
                            <div class="featured-left text-left">
                                <div class="bottom-gd px-9 py-lg-0">
                                    <h5>Complaints</h5>
                                    <p>All complaints should be addressed to the manager of the home either verbally or in written form. Alternatively you can make a complaint directly to the Care Quality Commission at:</p><br/>

                                    Care Quality Commission
                                    <br/>Citygate
                                    <br/>Gallowgate
                                    <br/>Newcastle upon Tyne
                                    <br/>NE1 4PA

                                    <p>You can also contact them by phone:</p>

                                    <p>03000 616161</p>

                                    <p>Or emails: enquiries@cqc.org.uk</p>
                                    <br/>
                                    <h5>Health Care</h5>
                                    <p>Residential Care Homes are not Nursing Homes and medical and nursing treatment is not allowed to be given by care home staff. Nevertheless care, within the concept of family care, is given as appropriate to the needs of the service user. In this respect the Home will liase with doctors and community nurses to ensure that the correct care is given with follow up with other agencies In many cases Care Homes will look after service users who become ill, sometimes for a prolonged period. The determining factors depend on the gravity of the illness. When the care necessary is beyond the scope of the Residential Home it may be more appropriate for the service user to be cared for in a Nursing Home in which case the Care Home will give every assistance to make the transfer as smooth as possible.</p>
                                    <br/>
                                    <h5>Medicines</h5>
                                    <p>Where service users prefer to retain responsibility for medicines and the provider is satisfied that they are competent to do so the service user will monitor their own medicines althougth a  supervision will be retained by the Manager of the Home.</p>
                                    <br/>
                                    <h5>Choice Of Doctor</h5>
                                    <p>Service users are not required to change their doctor for the convenience of the care home. However, it must be recognised that doctors work within a geographical area and a move into residential care may necessitate a change of doctor for a service user. Where this occurs the resident will helped to select a new doctor.</p>
                                    <br/><br/>
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