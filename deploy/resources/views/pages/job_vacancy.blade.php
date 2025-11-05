@extends('layout.main')
@section('con_title')
    <title>{{$page_title}}</title>
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="Abstract" content="{{$Abstract}}" />
@endsection
@section('extra_css')
    <!-- Additional Css -->
    <style>
        .mad-color{
            color:#4192d4 !important;
        }
    </style>
@endsection
@section('content')
    <!-- //banner -->
    <div class="container-2" id="top_banner" style="margin-top: -190px;">
        <img class="loading" src="/images/slider/contact.jpg" style="width:100%;"/>
        <h3 class="bottom-left">Job Vacancy</h3>
    </div>

    <!--/contact -->
    <section class="ab-info-main py-md-2 py-5">
        <div class="container">
            <div class="inner-sec-w3pvt py-lg-2">
                <div class="contact-form mt-md-2">
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-1 serv_bottom feature-grids" style="margin-top:25px; margin-bottom:25px; ">
                            <div class="featured-left text-left">
                                <div class="bottom-gd">
                                    <p class="px-lg-1" style="margin-bottom:35px;" data-aos="fade-up">If you are looking to enquire about a career at Thornton Lodge, please get in touch</p>
                                    <h5><strong>Email</strong></h5>
                                    <p style="color: deepskyblue"><a>admin@thorntonlodgecare.com</a></p>
                                    <br/>

                                    <h5><strong>Phone</strong></h5>
                                    <p>0208 – 684 –1056</p>
                                    <br/>

                                    <h5><strong>Address</strong></h5>
                                    <p>105 Brigstock Road,<br/>
                                        Thornton Heath<br/>
                                        Surrey,<br/>
                                        CR7 71L</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('extra_script')
@endsection