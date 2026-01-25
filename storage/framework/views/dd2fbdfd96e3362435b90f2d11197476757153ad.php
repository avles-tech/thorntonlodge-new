<!--footer -->
<style>
/* Footer Consistent Styling */
footer {
    background: linear-gradient(135deg, #2C3E50 0%, #34495E 100%);
    color: #ffffff;
}

/* FORCE ALL FOOTER H3 TO BE WHITE - MAXIMUM SPECIFICITY */
footer h3,
footer h3 *,
.footer-title-w3pvt h3,
.footer-grid_section_1its h3,
.footer_1its h3,
.move-footer h3,
footer .footer-title-w3pvt h3,
footer .footer-grid_section_1its h3,
footer div h3,
footer div div h3,
footer [data-aos] h3,
.footer-grid_section_1its:last-child h3,
.footer-grid_section_1its:nth-child(4) h3,
.col-lg-3 h3,
.col-lg-4 h3,
div[data-aos="fade-left"] h3 {
    color: #ffffff !important;
    background-color: transparent !important;
    text-shadow: none !important;
    -webkit-text-fill-color: #ffffff !important;
}

.footer-title-w3pvt h3 {
    color: #ffffff !important;
    font-size: 20px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 25px;
    padding-bottom: 15px;
    border-bottom: 2px solid #7BA5C7;
    display: inline-block;
    -webkit-text-fill-color: #ffffff !important;
}

.footer-grid_section_1its {
    margin-bottom: 30px;
}

/* Quick Links Styling */
.links {
    padding-left: 0;
    list-style: none;
}

.links li {
    margin-bottom: 12px;
}

.links li a {
    color: rgba(255, 255, 255, 0.8);
    text-decoration: none;
    font-size: 15px;
    transition: all 0.3s ease;
    display: inline-block;
    position: relative;
    padding-left: 20px;
}

.links li a:before {
    content: "→";
    position: absolute;
    left: 0;
    color: #7BA5C7;
    transition: all 0.3s ease;
}

.links li a:hover {
    color: #7BA5C7;
    padding-left: 25px;
}

.links li a:hover:before {
    left: 5px;
}

/* Contact Info Styling */
.footer-text p {
    color: rgba(255, 255, 255, 0.8);
    font-size: 15px;
    margin-bottom: 15px;
    line-height: 1.8;
}

.footer-text p i {
    color: #7BA5C7;
    margin-right: 10px;
    width: 20px;
    text-align: center;
}

.footer-text p a {
    color: rgba(255, 255, 255, 0.8);
    text-decoration: none;
    transition: all 0.3s ease;
}

.footer-text p a:hover {
    color: #7BA5C7;
}

/* Social Links */
.social_section_1info {
    list-style: none;
    padding-left: 0;
    margin-top: 20px;
}

.social_section_1info li a {
    color: #ffffff;
    text-decoration: none;
    font-size: 15px;
    font-weight: 600;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

.social_section_1info li a .fa-linkedin {
    background: #0077B5;
    width: 36px;
    height: 36px;
    border-radius: 4px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    color: white;
    transition: all 0.3s ease;
}

.social_section_1info li a:hover .fa-linkedin {
    background: #006399;
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0, 119, 181, 0.4);
}

.social_section_1info li a:hover {
    color: #7BA5C7;
}

.social_section_1info li a:hover {
    background: #6B94B5;
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(123, 165, 199, 0.4);
}

/* Logo Section */
.extra-logo img {
    margin-bottom: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    max-width: 50%;
    height: auto;
}

/* Copyright Section */
.cpy-right {
    background: #1a252f;
    color: rgba(255, 255, 255, 0.7);
}

.cpy-right p {
    margin: 0;
    font-size: 14px;
}

.cpy-right a {
    color: #7BA5C7;
    text-decoration: none;
    transition: all 0.3s ease;
}

.cpy-right a:hover {
    color: #ffffff;
}

/* Back to Top Button */
.move-top {
    display: inline-block;
}

.move-top a {
    background: #7BA5C7;
    color: white;
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(123, 165, 199, 0.3);
}

.move-top a:hover {
    background: #6B94B5;
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(123, 165, 199, 0.5);
}

/* Responsive Footer Adjustments */
@media (max-width: 991px) {
    .footer-grid_section_1its {
        margin-bottom: 40px;
    }
}

@media (max-width: 767px) {
    .extra-logo img {
        width: 60% !important;
    }
    
    .footer-title-w3pvt h3 {
        font-size: 18px;
    }
}
</style>
<footer>
    <div class="footer_1its py-5 move-footer">
        <div class="container-fluid py-md-4" style="max-width: 1600px; padding-left: 60px; padding-right: 0px;">
            <div class="row footer-top mb-md-5 mb-4">
                <div class="col-lg-2 col-md-6 col-sm-12 footer-grid_section_1its" data-aos="fade-right">
                    <div class="footer-title-w3pvt">
                        <h3 style="color: #ffffff !important;">About Us</h3>
                    </div>
                    <div class="extra-logo">
                        <img src="/images/footlogo.png" style="width:100%; height: auto;" alt="Foot logo" />
                        <img src="/images/RedCrierlogo.jpg" style="width:100%; height: auto;" alt="Red Crier logo" />
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-grid_section_1its">
                    <div class="footer-title-w3pvt">
                        <h3 style="color: #ffffff !important;">Quick Links</h3>
                    </div>
                    <ul class="links">
                        <li><a href="<?php echo e(route('accommodation')); ?>">Accommodation</a></li>
                        <li><a href="<?php echo e(route('admission')); ?>">Admission Criteria</a></li>
                        <li><a href="<?php echo e(route('facilities')); ?>">Facilities</a></li>
                        <li><a href="<?php echo e(route('activities')); ?>">Events</a></li>
                        <li><a href="<?php echo e(route('principal')); ?>">Principal of Care</a></li>
                        <li><a href="<?php echo e(route('privacy_policy')); ?>">Privacy Policy</a></li>
                        <li><a href="<?php echo e(route('gallery')); ?>">Gallery</a></li>
                        <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
                        <li><a href="<?php echo e(route('sitemap')); ?>">Sitemap</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 footer-grid_section_1its">
                    <div class="footer-title-w3pvt">
                        <h3 style="color: #ffffff !important;">Contact Us</h3>
                    </div>
                    <div class="footer-text">
                        <p><i class="fa fa-map-marker"></i> 105 Brigstock Road, Thornton Heath Surrey, CR7 7JL</p>
                        <p><i class="fa fa-phone"></i> 020 8684 1056</p>
                        <p><i class="fa fa-envelope"></i> <a href="mailto:admin@thorntonlodgecare.com">admin@thorntonlodgecare.com</a></p>
                        <p><i class="fa fa-fax"></i> 020 8689 5885</p>
                        <ul class="social_section_1info">
                            <li class="linkedin"><a href="https://www.linkedin.com/in/joe-juwaheer-1a096a8a/?originalSubdomain=uk" style="white-space: nowrap;"><span class="fa fa-linkedin"></span> LinkedIn</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-grid_section_1its ml-lg-auto" data-aos="fade-left">
                    <div class="footer-title-w3pvt">
                        <h3 style="color: #ffffff !important; background-color: transparent !important; text-shadow: none !important; -webkit-text-fill-color: #ffffff !important; opacity: 1 !important;">Our Services</h3>
                    </div>
                    <ul class="links">
                        <li><a href="<?php echo e(route('accommodation')); ?>">Accommodation</a></li>
                        <li><a href="<?php echo e(route('admission')); ?>">Admission Criteria</a></li>
                        <li><a href="<?php echo e(route('facilities')); ?>">Facilities</a></li>
                        <li><a href="<?php echo e(route('activities')); ?>">Activities & Events</a></li>
                        <li><a href="<?php echo e(route('principal')); ?>">Principal of Care</a></li>
                        <li><a href="<?php echo e(route('staff_training')); ?>">Staff Training</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-grid_section text-center" style="margin-bottom:-95px !important;">
            </div>
            <!--
            <div class="footer-grid_section my-lg-5 text-center" style="margin-bottom:-95px;">
                <div class="footer-title-w3pvt mb-4">
                    <h3>Recent Rooms Updates</h3>
                </div>
                <ul class="d-flex list-unstyled foot-bottom-last">
                    <li class="mr-2">
                        <a href="<?php echo e(route('vacancies')); ?>"> <img src="/images/1.jpg" alt="" class="img-fluid image1"></a></li>
                    <li class="mr-2">
                        <a href="<?php echo e(route('vacancies')); ?>"> <img src="/images/2.jpg" alt="" class="img-fluid image1"></a></li>
                    <li class="mr-2">
                        <a href="<?php echo e(route('vacancies')); ?>"> <img src="/images/3.jpg" alt="" class="img-fluid image1"></a></li>
                    <li class="mr-2">
                        <a href="<?php echo e(route('vacancies')); ?>"> <img src="/images/4.jpg" alt="" class="img-fluid image1"></a></li>
                    <li>
                        <a href="<?php echo e(route('vacancies')); ?>"> <img src="/images/5.jpg" alt="" class="img-fluid image1"></a></li>
                </ul>
            </div>-->
        </div>
    </div>
</footer>
<!-- //footer -->
<!-- copyright -->
<div class="cpy-right text-center py-4">
    <div class="move-top text-center mb-3">
        <a href="#home" class="move-top">
            <span class="fa fa-angle-up" aria-hidden="true"></span>
        </a>
    </div>
    <p class="copy-w3layouts">Thornton Lodge © <?php echo e(date('Y')); ?>. All Rights Reserved. | Website developed by <a href="http://adameveandapple.co.uk/">AdamEve&Apple</a></p>
</div>
<!-- //copyright --><?php /**PATH /var/www/resources/views/inc/footer.blade.php ENDPATH**/ ?>