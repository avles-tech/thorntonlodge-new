<!--================Header Area =================-->
<header class="main_header_area" id="home">
    <div class="header_top_area">
        <div class="container">
            <!--
            <div class="pull-left">
                <a href="#">
                <a href="#"></a>
                <!--<a href="#"><i class="mdi mdi-clock"></i>08 AM - 10 PM</a>
            </div>-->
            <div class="pull-right">
                <a href=""><i class="fa fa-phone"></i>(020) - 8684 1056</a>
                <a href=""><i class="fa fa-envelope-o"></i>admin@thorntonlodgecare.com</a>
                <!--
                <ul class="header_social">
                    <li></li>
                    <li><a href=""></li>
                </ul>-->
            </div>
        </div>
    </div>
    <div class="main_menu_area">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand header-logo" href="<?php echo e(route('home')); ?>"><img src="/images/ThorntonLodgeLogo.jpg" alt="Logo"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li class="dropdown submenu">
                            <a href="<?php echo e(route('about')); ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo e(route('about')); ?>">Who We Are</a></li>
                                <li><a href="<?php echo e(route('testimonial')); ?>">Testimonial</a></li>
                                <li><a href="<?php echo e(route('team')); ?>">Team</a></li>
                                <li><a href="<?php echo e(route('job_vacancy')); ?>">Job Vacancies</a></li>
                            </ul>
                        </li>
                        <li class="dropdown submenu">
                            <a href="<?php echo e(route('about')); ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">The Lodge</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo e(route('accommodation')); ?>">Accommodation</a></li>
                                <li><a href="<?php echo e(route('admission')); ?>">Admission Criteria</a></li>
                                <li><a href="<?php echo e(route('facilities')); ?>">Facilities</a></li>
                                <li><a href="<?php echo e(route('cuisine')); ?>">Cuisine</a></li>
                                <li><a href="<?php echo e(route('activities')); ?>">Activities and Events</a></li>
                                <li><a href="<?php echo e(route('principal')); ?>">Principal of Care</a></li>
                                
                                <li><a href="<?php echo e(route('staff_training')); ?>">Staff Training</a></li>
                            </ul>
                        </li>

                        <li><a href="<?php echo e(route('vacancies')); ?>" class="nav-link">Bed Availability</a></li>
                        <li><a href="<?php echo e(route('gallery')); ?>" class="nav-link">Gallery</a></li>
                        <!--<li><a href="<?php echo e(route('news')); ?>" class="nav-link">News</a></li>-->
                        <li><a href="<?php echo e(route('contact')); ?>" class="nav-link">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
</header>
<!--================Header Area =================-->

<!-- mian-content -->
<div class="main-content" >

