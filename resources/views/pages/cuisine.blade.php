@extends('layout.main')
@section('con_title')
    <title>{{$page_title}}</title>
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="Abstract" content="{{$Abstract}}" />
@endsection
@section('extra_css')
    <!-- Additional Css -->
    <link href='/css/lightbox/lightgallery.css' rel='stylesheet' type='text/css'>
    <link href='/js/lightbox/jquery.min.js' rel='stylesheet' type='text/css'>
    <style>
        .menu-container {
            text-align: center;
        }

        .menu-link {
            display: inline-block;
            font-size: 16px;
            color: #6ecfe9;
            text-decoration: none;
            border: 2px solid #6ecfe9;
            padding: 10px 15px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .menu-link span {
            font-weight: bold;
        }

        .menu-link:hover {
            background-color: #6ecfe9;
            color: #fff;
        }



    </style>
@endsection
@section('content')
    <section class="about" style="margin-top: -378px;">
        <div class="container-2">
            <img src="/images/slider/bbq1.jpg" style="width: 100%; "/>
            <h3 class="bottom-left">Cuisine</h3>
        </div>
    </section>

    <section class="about py-lg-5 py-md-5 py-5">
        <div class="container">
            <div class="gallery">
                <div class="row">
                    <p>The menu is decided after close consultation with the Residents. All food is freshly prepared every day by a very dedicated chef who takes great pride in the preparation. All dietary needs are met with alternative choices.</p>
                </div>
                <div class="row mid-slide">
                    <div class="demo-gallery">
                        <ul class="lightgallery list-unstyled row">

                            <!--
                            <li class="col-xs-6 col-sm-4 col-lg-4 featured-content" data-responsive="/images/cuisine/TL_4594.jpg 375, /images/cuisine/TL_4594.jpg 480, /images/cuisine/TL_4594.jpg 800" data-src="/images/cuisine/TL_4594.jpg" data-sub-html="<p>Sample Description</p>">
                                <a href="">
                                    <img class="img-responsive" src="/images/cuisine/TL_4594.jpg" style="height: 250px;">
                                </a>
                                <h6>Sample Description</h6>
                            </li>-->

                            <li class="col-xs-6 col-sm-4 col-lg-4 featured-content" data-responsive="/images/cuisine/TL_4598.jpg 375, /images/cuisine/TL_4598.jpg 480, /images/cuisine/TL_4598.jpg 800" data-src="/images/cuisine/TL_4598.jpg" data-sub-html="<p>Sample Description</p>">
                                <a href="">
                                    <img class="img-responsive" src="/images/cuisine/TL_4598.jpg" style="height: 250px;">
                                </a>
                                <!--<h6>Sample Description</h6>-->
                            </li>

                            <li class="col-xs-6 col-sm-4 col-lg-4 featured-content" data-responsive="/images/cuisine/TL_4602.jpg 375, /images/cuisine/TL_4602.jpg 480, /images/cuisine/TL_4602.jpg 800" data-src="/images/cuisine/TL_4602.jpg" data-sub-html="<p>Sample Description</p>">
                                <a href="">
                                    <img class="img-responsive" src="/images/cuisine/TL_4602.jpg" style="height: 250px;">
                                </a>
                                <!--<h6>Sample Description</h6>-->
                            </li>

                            <!--
                            <li class="col-xs-6 col-sm-4 col-lg-4 featured-content" data-responsive="/images/cuisine/TL_4615.jpg 375, /images/cuisine/TL_4615.jpg 480, /images/cuisine/TL_4615.jpg 800" data-src="/images/cuisine/TL_4615.jpg" data-sub-html="<p>Sample Description</p>">
                                <a href="">
                                    <img class="img-responsive" src="/images/cuisine/TL_4615.jpg" style="height: 250px;">
                                </a>
                                <h6>Sample Description</h6>
                            </li>

                            <li class="col-xs-6 col-sm-4 col-lg-4 featured-content" data-responsive="/images/cuisine/TL_4621.jpg 375, /images/cuisine/TL_4621.jpg 480, /images/cuisine/TL_4621.jpg 800" data-src="/images/cuisine/TL_4621.jpg" data-sub-html="<p>Sample Description</p>">
                                <a href="">
                                    <img class="img-responsive" src="/images/cuisine/TL_4621.jpg" style="height: 250px;">
                                </a>
                                <h6>Sample Description</h6>
                            </li>

                            <li class="col-xs-6 col-sm-4 col-lg-4 featured-content" data-responsive="/images/cuisine/TL_4627.jpg 375, /images/cuisine/TL_4627.jpg 480, /images/cuisine/TL_4627.jpg 800" data-src="/images/cuisine/TL_4627.jpg" data-sub-html="<p>Sample Description</p>">
                                <a href="">
                                    <img class="img-responsive" src="/images/cuisine/TL_4627.jpg" style="height: 250px;">
                                </a>
                                <h6>Sample Description</h6>
                            </li>-->

                            <li class="col-xs-6 col-sm-4 col-lg-4 featured-content" data-responsive="/images/cuisine/TL_4631.jpg 375, /images/cuisine/TL_4631.jpg 480, /images/cuisine/TL_4631.jpg 800" data-src="/images/cuisine/TL_4631.jpg" data-sub-html="<p>Sample Description</p>">
                                <a href="">
                                    <img class="img-responsive" src="/images/cuisine/TL_4631.jpg" style="height: 250px;">
                                </a>
                                <!--<h6>Sample Description</h6>-->
                            </li>

                            <li class="col-xs-6 col-sm-4 col-lg-4 featured-content" data-responsive="/images/cuisine/TL_4636.jpg 375, /images/cuisine/TL_4636.jpg 480, /images/cuisine/TL_4636.jpg 800" data-src="/images/cuisine/TL_4636.jpg" data-sub-html="<p>Sample Description</p>">
                                <a href="">
                                    <img class="img-responsive" src="/images/cuisine/TL_4636.jpg" style="height: 250px;">
                                </a>
                                <!--<h6>Sample Description</h6>-->
                            </li>

                            {{-- <li class="col-xs-6 col-sm-4 col-lg-4 featured-content" data-responsive="/images/cuisine/TL_4644.jpg 375, /images/cuisine/TL_4644.jpg 480, /images/cuisine/TL_4644.jpg 800" data-src="/images/cuisine/TL_4644.jpg" data-sub-html="<p>Sample Description</p>">
                                <a href="">
                                    <img class="img-responsive" src="/images/cuisine/TL_4644.jpg" style="height: 250px;">
                                </a>
                                <!--<h6>Sample Description</h6>-->
                            </li> --}}

                            <li class="col-xs-6 col-sm-4 col-lg-4 featured-content" data-responsive="/images/cuisine/TL_4649.jpg 375, /images/cuisine/TL_4649.jpg 480, /images/cuisine/TL_4649.jpg 800" data-src="/images/cuisine/TL_4649.jpg" data-sub-html="<p>Sample Description</p>">
                                <a href="">
                                    <img class="img-responsive" src="/images/cuisine/TL_4649.jpg" style="height: 250px;">
                                </a>
                                <!--<h6>Sample Description</h6>-->
                            </li>
                            <!--
                            <li class="col-xs-6 col-sm-4 col-lg-4 featured-content" data-responsive="/images/cuisine/TL_4651.jpg 375, /images/cuisine/TL_4651.jpg 480, /images/cuisine/TL_4651.jpg 800" data-src="/images/cuisine/TL_4651.jpg" data-sub-html="<p>Sample Description</p>">
                                <a href="">
                                    <img class="img-responsive" src="/images/cuisine/TL_4651.jpg" style="height: 250px;">
                                </a>
                                <h6>Sample Description</h6>
                            </li>-->

                            <li class="col-xs-6 col-sm-4 col-lg-4 featured-content" data-responsive="/images/cuisine/TL_4659.jpg 375, /images/cuisine/TL_4659.jpg 480, /images/cuisine/TL_4659.jpg 800" data-src="/images/cuisine/TL_4659.jpg" data-sub-html="<p>Sample Description</p>">
                                <a href="">
                                    <img class="img-responsive" src="/images/cuisine/TL_4659.jpg" style="height: 250px;">
                                </a>
                                <!--<h6>Sample Description</h6>-->
                            </li>

                            <li class="col-xs-6 col-sm-4 col-lg-4 featured-content" data-responsive="/images/cuisine/bbq1.jpg 375, /images/cuisine/bbq1.jpg 480, /images/cuisine/bbq1.jpg 800" data-src="/images/cuisine/bbq1.jpg" data-sub-html="<p>Sample Description</p>">
                                <a href="">
                                    <img class="img-responsive" src="/images/cuisine/bbq1.jpg" style="height: 250px;">
                                </a>
                                <!--<h6>Sample Description</h6>-->
                            </li>

                            <li class="col-xs-6 col-sm-4 col-lg-4 featured-content" data-responsive="/images/cuisine/bbq2.jpg 375, /images/cuisine/bbq2.jpg 480, /images/cuisine/bbq2.jpg 800" data-src="/images/cuisine/bbq2.jpg" data-sub-html="<p>Sample Description</p>">
                                <a href="">
                                    <img class="img-responsive" src="/images/cuisine/bbq2.jpg" style="height: 250px;">
                                </a>
                                <!--<h6>Sample Description</h6>-->
                            </li>

                            <li class="col-xs-6 col-sm-4 col-lg-4 featured-content" data-responsive="/images/cuisine/bbq3.jpg 375, /images/cuisine/bbq3.jpg 480, /images/cuisine/bbq3.jpg 800" data-src="/images/cuisine/bbq3.jpg" data-sub-html="<p>Sample Description</p>">
                                <a href="">
                                    <img class="img-responsive" src="/images/cuisine/bbq3.jpg" style="height: 250px;">
                                </a>
                                <!--<h6>Sample Description</h6>-->
                            </li>


                            <li class="col-xs-6 col-sm-4 col-lg-4 featured-content" data-responsive="/images/cuisine/bbq4.jpg 375, /images/cuisine/bbq4.jpg 480, /images/cuisine/bbq4.jpg 800" data-src="/images/cuisine/bbq4.jpg" data-sub-html="<p>Sample Description</p>">
                                <a href="">
                                    <img class="img-responsive" src="/images/cuisine/bbq4.jpg" style="height: 250px;">
                                </a>
                                <!--<h6>Sample Description</h6>-->
                            </li>

                            <li class="col-xs-6 col-sm-4 col-lg-4 featured-content" data-responsive="/images/cuisine/bbq5.jpg 375, /images/cuisine/bbq5.jpg 480, /images/cuisine/bbq5.jpg 800" data-src="/images/cuisine/bbq5.jpg" data-sub-html="<p>Sample Description</p>">
                                <a href="">
                                    <img class="img-responsive" src="/images/cuisine/bbq5.jpg" style="height: 250px;">
                                </a>
                                <!--<h6>Sample Description</h6>-->
                            </li>

                            <li class="col-xs-6 col-sm-4 col-lg-4 featured-content" data-responsive="/images/cuisine/bbq6.jpg 375, /images/cuisine/bbq6.jpg 480, /images/cuisine/bbq6.jpg 800" data-src="/images/cuisine/bbq6.jpg" data-sub-html="<p>Sample Description</p>">
                                <a href="">
                                    <img class="img-responsive" src="/images/cuisine/bbq6.jpg" style="height: 250px;">
                                </a>
                                <!--<h6>Sample Description</h6>-->
                            </li>

                            <li class="col-xs-6 col-sm-4 col-lg-4 featured-content" data-responsive="/images/cuisine/bbq7.jpg 375, /images/cuisine/bbq7.jpg 480, /images/cuisine/bbq7.jpg 800" data-src="/images/cuisine/bbq7.jpg" data-sub-html="<p>Sample Description</p>">
                                <a href="">
                                    <img class="img-responsive" src="/images/cuisine/bbq7.jpg" style="height: 250px;">
                                </a>
                                <!--<h6>Sample Description</h6>-->
                            </li>

                            <li class="col-xs-6 col-sm-4 col-lg-4 featured-content" data-responsive="/images/cuisine/bbq8.jpg 375, /images/cuisine/bbq8.jpg 480, /images/cuisine/bbq8.jpg 800" data-src="/images/cuisine/bbq8.jpg" data-sub-html="<p>Sample Description</p>">
                                <a href="">
                                    <img class="img-responsive" src="/images/cuisine/bbq8.jpg" style="height: 250px;">
                                </a>
                                <!--<h6>Sample Description</h6>-->
                            </li>

                            <li class="col-xs-6 col-sm-4 col-lg-4 featured-content" data-responsive="/images/cuisine/bbq9.jpg 375, /images/cuisine/bbq9.jpg 480, /images/cuisine/bbq9.jpg 800" data-src="/images/cuisine/bbq9.jpg" data-sub-html="<p>Sample Description</p>">
                                <a href="">
                                    <img class="img-responsive" src="/images/cuisine/bbq9.jpg" style="height: 250px;">
                                </a>
                                <!--<h6>Sample Description</h6>-->
                            </li>

                            

                            <!--
                            <li class="col-xs-6 col-sm-4 col-lg-4 featured-content" data-responsive="/images/cuisine/TL_4665.jpg 375, /images/cuisine/TL_4665.jpg 480, /images/cuisine/TL_4665.jpg 800" data-src="/images/cuisine/TL_4665.jpg" data-sub-html="<p>Sample Description</p>">
                                <a href="">
                                    <img class="img-responsive" src="/images/cuisine/TL_4665.jpg" style="height: 250px;">
                                </a>
                                <h6>Sample Description</h6>
                            </li>
                            -->

                        </ul>
                    </div>
                </div>

                <div class="menu-container">
                    <a href="javascript:void(0);" onclick="window.open('/Uploads/menu_of_the_year/MenuOfTheYear.pdf', '_blank', 'width=1000,height=600');" class="menu-link">Click here to see <span>Menu of the year</span></a>
                </div>
                
            </div>
        </div>
    </section>

@endsection
@section('extra_script')
    <script type="text/javascript">
        $(document).ready(function(){
            $('.lightgallery').lightGallery();
        });
    </script>
    <script src="/js/lightbox/picturefill.min.js"></script>
    <script src="/js/lightbox/lightgallery-all.min.js"></script>
    <script src="/lib/jquery.mousewheel.min.js"></script>


@endsection