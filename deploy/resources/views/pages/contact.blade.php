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
    <div class="container-2" id="top_banner" style="margin-top: -95px;">
        <img class="loading" src="/images/loading.gif" data-src="/images/slider/contact.jpg" style="width:100%; height: 100vh "/>
        <h3 class="bottom-left">Contact</h3>
    </div>

    <!--/contact -->
    <section class="ab-info-main py-md-2 py-5">
        <div class="container">
            <div class="inner-sec-w3pvt py-lg-2">
                <h3 class="tittle text-center mb-lg-5 mb-3 inner-tittle">Keep in touch</h3>
                <p class="text-center px-lg-1" style="margin-top:-25px; margin-bottom:35px;" data-aos="fade-up">If you have any further inquiry, please don't hesitate to contact us via telephone or email. <br/>We'll get in touch with you as soon as possible.</p>
                <div class="contact-form mt-md-2">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="contact-form-inner mx-auto text-left">
                                <form name="contactform"  method="post" action="">
                                    <div class="row">
                                        <div class="col-lg-12 con-gd">
                                            <div class="form-group">
                                                <label class="mad-color">Name</label>
                                                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                                            </div>
                                            <div class="form-group">
                                                <label class="mad-color">Email</label>
                                                <input type="email" class="form-control" id="name" placeholder="Enter Email" name="email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 con-gd">

                                            <div class="form-group">
                                                <label class="mad-color">Phone No.</label>
                                                <input type="text" class="form-control" id="phone" placeholder="Enter Phone no." name="phone">
                                            </div>
                                            <div class="form-group">
                                                <label class="mad-color">Subject</label>
                                                <input type="text" class="form-control" id="name" placeholder="Subject" name="subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="mad-color">How can we help?</label>
                                        <textarea name="issues" class="form-control" id="iq" placeholder="Enter Your Message Here"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-info" style="width:100%;">Submit</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-12 map-border" style="margin-top: 30px;">
                                    <iframe style="" src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d126.8637920945285!2d-0.10812242206223635!3d51.397098377371634!2m2!1f161.46785960841507!2f45!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x487606da4f44ac9b%3A0xd60a5ca793dd2238!2sThornton+Lodge!5e1!3m2!1sen!2slk!4v1549779263421" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                                <div class="col-12 map-border">
                                    <iframe style="" src="https://www.google.com/maps/embed?pb=!4v1549779214998!6m8!1m7!1sxAGlPvNphANYUbWsQ6kVnA!2m2!1d51.39601662900881!2d-0.1075412197037692!3f161.46785960841507!4f-7.836956159933578!5f0.7820865974627469" width="100%" height="280" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-1 serv_bottom feature-grids" style="margin-top:25px; margin-bottom:25px; ">
                            <div class="featured-left text-left">
                                <div class="bottom-gd">
                                    <h5>ENQUIRIES</h5>
                                    <p>For any enquiries regarding placement, viewings, fee charges, or if you just wish to come in for a chat, please telephone on our main line <br/>0208 – 684 –1056 </p>
                                    <br/><p>Calls may be directed to any of our management team as listed above.</p>
                                    <p>Alternatively, you can reach us via email on:</p>
                                    <p style="color: deepskyblue"><a>admin@thorntonlodgecare.com</a></a>
                                    </p>
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
    <script>
        window.addEventListener('load', function(){
            var allimages= document.getElementsByTagName('img');
            for (var i=0; i<allimages.length; i++) {
                if (allimages[i].getAttribute('data-src')) {
                    allimages[i].setAttribute('src', allimages[i].getAttribute('data-src'));
                    document.getElementById("top_banner").style.marginTop = "-195px";
                    break;
                }
            }
        }, false)
    </script>
@endsection