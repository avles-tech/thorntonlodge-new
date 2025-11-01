@extends('layout.app')
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
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Services
                    </h1>
                    <p class="text-white link-nav">In our simple theory, we develop, design, construct, refurbish and operate outstanding amazing buildings . . .</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    <!-- breadcrumbs -->
    <ul class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
        <li class="active">Services</li>
    </ul>

    <!-- Start service Area -->
    <section class="post-content-area pt-90 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 posts-list" style="margin-bottom: -295px;">
                    <section class="service-area section-gap" id="service"  style="margin-top: -105px;">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-12 pb-50 header-text">
                                    <h1 class="mb-10">What we do for our clients</h1>
                                    <p>provide & committed to the long-term future of the smart environments</p>
                                </div>
                            </div>
                            <div class="section-top-border" style="margin-top: -75px;">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="/img/services/Drainage.jpg" alt="Ground Work and Substructures" class="img-fluid">
                                        <h5 style="margin-top: 10px; margin-bottom: 10px;" >Ground Work & Substructures</h5>
                                    </div>
                                    <div class="col-md-9 mt-sm-20 left-align-p">
                                        <!-- Start faq Area -->
                                        <section class="faq-area section-gap" style="margin-top: -119px;">
                                            <div class="">
                                                <div class="row faq-contents ">
                                                    <div class="col-lg-12 faq-left">
                                                        <div class="mn-accordion" id="accordion">
                                                            <!--Accordion item-->
                                                            <div class="accordion-item">
                                                                <div class="accordion-heading">
                                                                    <h3>Drainage Works</h3>
                                                                    <div class="icon">
                                                                        <i class="lnr lnr-chevron-right"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-content">
                                                                    <p>Installation of all type of underground drainage systems, All drainage works are tested and surveyed on completion.</p>
                                                                    <p style="margin-left: 20px; margin-top: -35px;">
                                                                        - Installation of shailow drainage system.<br/>
                                                                        - Installation of deep drainage system.<br/>
                                                                        - Installation of road gully.<br/>
                                                                        - Installation of Attenuation tank.<br/>
                                                                        - Installation of Soak away.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <!--Accordion item-->

                                                            <!--Accordion item-->
                                                            <div class="accordion-item">
                                                                <div class="accordion-heading">
                                                                    <h3>Enabling Works</h3>
                                                                    <div class="icon">
                                                                        <i class="lnr lnr-chevron-right"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-content">
                                                                    <p>All kind of enabling works will take over.</p>
                                                                    <p style="margin-left: 20px; margin-top: -45px;">
                                                                        - Installation of Haul Roads.<br/>
                                                                        - Installation of temporary tarmac roads.<br/>
                                                                        - Installation of S1W foot path.<br/>
                                                                        - Preparation of Pih Mat
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <!--Accordion item-->

                                                            <!--Accordion item-->
                                                            <div class="accordion-item">
                                                                <div class="accordion-heading">
                                                                    <h3>Foundation</h3>
                                                                    <div class="icon">
                                                                        <i class="lnr lnr-chevron-right"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-content">
                                                                    <p>NSK Construction provide all type of foundation works</p>
                                                                    <p style="margin-left: 20px; margin-top: -45px;">
                                                                        - Strip Foundation.<br/>
                                                                        - Pile Laps.<br/>
                                                                        - Ground Beams.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <!--Accordion item-->
                                                            <!--Accordion item-->
                                                            <div class="accordion-item">
                                                                <div class="accordion-heading">
                                                                    <h3>SiW Services</h3>
                                                                    <div class="icon">
                                                                        <i class="lnr lnr-chevron-right"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-content">
                                                                    <p>NSK Construction provide french works and way all type of services.</p>
                                                                </div>
                                                            </div>
                                                            <!--Accordion item-->
                                                            <!--Accordion item-->
                                                            <div class="accordion-item">
                                                                <div class="accordion-heading">
                                                                    <h3>Sub Structures</h3>
                                                                    <div class="icon">
                                                                        <i class="lnr lnr-chevron-right"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-content">
                                                                    <p>All Kind of Substructure works will undertake such as ...</p>
                                                                    <div class="row gallery-item pro-gallery">
                                                                            <a href="/img/services/1.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(/img/services/1.jpg); width:100px; height: 100px;"></div></a>
                                                                            <a href="/img/services/2.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(/img/services/2.jpg); width:100px; height: 100px;"></div></a>
                                                                            <a href="/img/services/3.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(/img/services/3.jpg); width:100px; height: 100px;"></div></a>
                                                                            <a href="/img/services/4.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(/img/services/4.jpg); width:100px; height: 100px;"></div></a>
                                                                            <a href="/img/services/5.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(/img/services/5.jpg); width:100px; height: 100px;"></div></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--Accordion item-->
                                                            <!--Accordion item-->
                                                            <div class="accordion-item">
                                                                <div class="accordion-heading">
                                                                    <h3>Block & Beam</h3>
                                                                    <div class="icon">
                                                                        <i class="lnr lnr-chevron-right"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-content">
                                                                    <p>NSK Construction provide block and hooving system.</p>
                                                                    <div class="row gallery-item pro-gallery">
                                                                        <a href="/img/services/6.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(/img/services/6.jpg); width:100px; height: 100px;"></div></a>
                                                                        <a href="/img/services/7.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(/img/services/7.jpg); width:100px; height: 100px;"></div></a>
                                                                        <a href="/img/services/8.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(/img/services/8.jpg); width:100px; height: 100px;"></div></a>
                                                                        <a href="/img/services/9.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(/img/services/9.jpg); width:100px; height: 100px;"></div></a>
                                                                        <a href="/img/services/10.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(/img/services/10.jpg); width:100px; height: 100px;"></div></a>
                                                                        <a href="/img/services/11.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(/img/services/11.jpg); width:100px; height: 100px;"></div></a>
                                                                        <a href="/img/services/12.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(/img/services/12.jpg); width:100px; height: 100px;"></div></a>
                                                                        <a href="/img/services/13.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(/img/services/13.jpg); width:100px; height: 100px;"></div></a>
                                                                        <a href="/img/services/14.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(/img/services/14.jpg); width:100px; height: 100px;"></div></a>
                                                                        <a href="/img/services/15.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(/img/services/15.jpg); width:100px; height: 100px;"></div></a>
                                                                        <a href="/img/services/16.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(/img/services/16.jpg); width:100px; height: 100px;"></div></a>
                                                                        <a href="/img/services/17.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(/img/services/17.jpg); width:100px; height: 100px;"></div></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--Accordion item-->
                                                            <div class="accordion-item">
                                                                <div class="accordion-heading">
                                                                    <h3>Under Pinning</h3>
                                                                    <div class="icon">
                                                                        <i class="lnr lnr-chevron-right"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-content">
                                                                    <p>All kind of underpinning works to existing structures.</p>
                                                                    <div class="row gallery-item pro-gallery">
                                                                        <a href="/img/services/18.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(/img/services/18.jpg); width:100px; height: 100px;"></div></a>
                                                                        <a href="/img/services/19.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(/img/services/19.jpg); width:100px; height: 100px;"></div></a>
                                                                        <a href="/img/services/20.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(/img/services/20.jpg); width:100px; height: 100px;"></div></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- End faq Area -->
                                    </div>
                                </div>
                            </div>
                            <div class="section-top-border" style="margin-top: -130px">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="/img/services/external.jpg" alt="External" class="img-fluid">
                                        <h5 style="margin-top: 10px; margin-bottom: 10px;" >External Works</h5>
                                    </div>
                                    <div class="col-md-9">
                                        <!-- Start faq Area -->
                                        <section class="faq-area section-gap" style="margin-top: -119px;">
                                            <div class="">
                                                <div class="row faq-contents ">
                                                    <div class="col-lg-12 faq-left">
                                                        <div class="mn-accordion" id="accordion_2">
                                                            <!--Accordion item-->
                                                            <div class="accordion-item">
                                                                <div class="accordion-heading">
                                                                    <h3>Hard LandScaping</h3>
                                                                    <div class="icon">
                                                                        <i class="lnr lnr-chevron-right"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-content">
                                                                    <p>All kind of hard landscaping works will take over.</p>
                                                                </div>
                                                            </div>
                                                            <!--Accordion item-->

                                                            <!--Accordion item-->
                                                            <div class="accordion-item">
                                                                <div class="accordion-heading">
                                                                    <h3>Soft Landscaping</h3>
                                                                    <div class="icon">
                                                                        <i class="lnr lnr-chevron-right"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-content">
                                                                    <p>All kind of soft landscaping include topsal spreading.</p>
                                                                </div>
                                                            </div>
                                                            <!--Accordion item-->

                                                            <!--Accordion item-->
                                                            <div class="accordion-item">
                                                                <div class="accordion-heading">
                                                                    <h3>Resin surface works</h3>
                                                                    <div class="icon">
                                                                        <i class="lnr lnr-chevron-right"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-content">
                                                                    <p>NSK Construction provide all type of foundation resin surface works</p>

                                                                </div>
                                                            </div>
                                                            <!--Accordion item-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- End faq Area -->
                                    </div>
                                </div>
                            </div>
                            <div class="section-top-border" style="margin-top: -130px">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="/img/services/fencing.jpg" alt="Fencing" class="img-fluid">
                                        <h5 style="margin-top: 10px; margin-bottom: 10px;" >Fencing</h5>
                                    </div>
                                    <div class="col-md-9">
                                        <!-- Start faq Area -->
                                        <section class="faq-area section-gap" style="margin-top: -119px;">
                                            <div class="">
                                                <div class="row faq-contents ">
                                                    <div class="col-lg-12 faq-left">
                                                        <div class="mn-accordion" id="accordion_3">
                                                            <!--Accordion item-->
                                                            <div class="accordion-item">
                                                                <div class="accordion-heading">
                                                                    <h3>Fencing working</h3>
                                                                    <div class="icon">
                                                                        <i class="lnr lnr-chevron-right"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-content">
                                                                    <p>All kind of hard fencing works will take over.</p>
                                                                </div>
                                                            </div>
                                                            <!--Accordion item-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- End faq Area -->
                                    </div>
                                </div>
                            </div>

                            <div class="section-top-border" style="margin-top: -130px">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="/img/services/drilling.jpg" alt="Drilling" class="img-fluid">
                                        <h5 style="margin-top: 10px; margin-bottom: 10px;" >Core drilling and concrete cutting</h5>
                                    </div>
                                    <div class="col-md-9">
                                        <!-- Start faq Area -->
                                        <section class="faq-area section-gap" style="margin-top: -119px;">
                                            <div class="">
                                                <div class="row faq-contents ">
                                                    <div class="col-lg-12 faq-left">
                                                        <div class="mn-accordion" id="accordion_4">
                                                            <!--Accordion item-->
                                                            <div class="accordion-item">
                                                                <div class="accordion-heading">
                                                                    <h3>Drilling and concrete cutting</h3>
                                                                    <div class="icon">
                                                                        <i class="lnr lnr-chevron-right"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-content">
                                                                    <p>All kind of drilling and concrete cutting works will take over.</p>
                                                                </div>
                                                            </div>
                                                            <!--Accordion item-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- End faq Area -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 sidebar-widgets">
                    <div class="widget-wrap">
                        <div class="single-sidebar-widget post-category-widget">
                            <h4 class="category-title">Our Projects</h4>
                            <ul class="cat-list">
                                @if(count($tags)>0)
                                    <?php $get_counts=App\project ::all(); ?>
                                    <li>
                                        <a href="{{ route('projects') }}" class="d-flex justify-content-between">
                                            <p>> All Categories</p>
                                            <p>{{ count($get_counts)}}</p>
                                        </a>
                                    </li>
                                    @foreach($tags as $tag)
                                            <li>
                                                <a href="/project-tag-{{$tag->slug}}" class="d-flex justify-content-between">
                                                    <p>{{ $tag->title }}</p>
                                                    <p>
                                                        <?php
                                                        $get_count=App\project ::where('tag_id',$tag->id)->get();
                                                        echo count($get_count);
                                                        ?>
                                                    </p>
                                                </a>
                                            </li>
                                        @endforeach
                                    @else
                                        <p class="noresult"><i class="fa fa-info-circle"></i> No Results found</p>
                                    @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End post-content Area -->

    <!-- Start discount-section Area -->
    <section class="discount-section-area relative section-gap" style="margin-top: px;">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row align-items-center justify-content-between no-gutters">
                <div class="col-lg-6 discount-left">
                    <h1 class="text-white">Request a call back</h1>
                    <p class="text-white">Would you like to speak with us over the phone? Just submit your valid information and we’ll be in touch shortly. You can also email us if you would prefer.</p>
                    <a href="/contact" class="header-btn">Contact Us</a>
                </div>
                <div class="col-lg-5 discount-right">
                    <h4 class="text-white">I would like to discuss:</h4>
                    <form class="booking-form" id="myForm" action="#">
                        <div class="row">
                            <div class="col-lg-12 d-flex flex-column">
                                <input name="name" placeholder="Your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" class="form-control mt-20" required="" type="text">
                            </div>
                            <div class="col-lg-6 d-flex flex-column">
                                <input name="phone" placeholder="Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" class="form-control mt-20" required="" type="text">
                            </div>
                            <div class="col-lg-6 d-flex flex-column">
                                <input name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" class="form-control mt-20" required="" type="email">
                            </div>
                            <div class="col-lg-12 flex-column">
                                <textarea rows="5" class="form-control mt-20" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                            </div>

                            <div class="col-lg-12 d-flex justify-content-end send-btn">
                                <button class="genric-btn primary mt-20 text-uppercase ">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('extra_script')
@endsection