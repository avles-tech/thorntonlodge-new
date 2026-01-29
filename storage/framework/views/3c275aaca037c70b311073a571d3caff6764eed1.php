<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" class="no-js">
    <head>
        <!-- meta character set -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="language" content="en">
        <meta name="robots" content="index,follow,all" />
        <!-- Author Meta -->
        <meta name="Author" content="Thornton Lodge" />
        <meta name="HandheldFriendly" content="True">
        <!-- Favicon-->
        <link rel="shortcut icon" href="/images/favicon.png">
        <!-- Site Title -->
        <?php echo $__env->yieldContent('con_title'); ?>
        <script>
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!-- //Meta tag Keywords -->
        <!-- Custom-Files -->
        <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
        <!-- Bootstrap-Core-CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" type="text/css" media="all" />
        <!-- Style-CSS -->
        <!-- font-awesome-icons -->
        <link href="<?php echo e(asset('css/font-awesome.css')); ?>" rel="stylesheet">
        <!-- //font-awesome-icons -->
        <!-- /Fonts -->
        <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
        <!-- //Fonts -->
        
        <!-- Global Styles for Modern UI -->
        <style>
            * {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }
            
            /* Scroll Animation Styles */
            .scroll-animate {
                opacity: 0;
                transform: translateY(30px);
                transition: opacity 0.8s ease, transform 0.8s ease;
            }
            
            .scroll-animate.animate-active {
                opacity: 1;
                transform: translateY(0);
            }
            
            .scroll-animate-left {
                opacity: 0;
                transform: translateX(-50px);
                transition: opacity 0.8s ease, transform 0.8s ease;
            }
            
            .scroll-animate-left.animate-active {
                opacity: 1;
                transform: translateX(0);
            }
            
            .scroll-animate-right {
                opacity: 0;
                transform: translateX(50px);
                transition: opacity 0.8s ease, transform 0.8s ease;
            }
            
            .scroll-animate-right.animate-active {
                opacity: 1;
                transform: translateX(0);
            }
            
            .scroll-animate-zoom {
                opacity: 0;
                transform: scale(0.9);
                transition: opacity 0.8s ease, transform 0.8s ease;
            }
            
            .scroll-animate-zoom.animate-active {
                opacity: 1;
                transform: scale(1);
            }
            
            .scroll-animate-delay-1 {
                transition-delay: 0.1s;
            }
            
            .scroll-animate-delay-2 {
                transition-delay: 0.2s;
            }
            
            .scroll-animate-delay-3 {
                transition-delay: 0.3s;
            }
            
            .scroll-animate-delay-4 {
                transition-delay: 0.4s;
            }
            
            /* Hover effects for cards */
            .bottom-gd:hover,
            .bottom-gd2-active:hover,
            .featured-content > div:hover {
                transform: translateY(-5px);
                box-shadow: 0 15px 50px rgba(0,0,0,0.2) !important;
            }
            
            .featured-content img:hover {
                transform: scale(1.1);
            }
            
            /* Smooth transitions */
            * {
                scroll-behavior: smooth;
            }
            
            /* Floating Animation */
            @keyframes  float {
                0%, 100% {
                    transform: translateY(0);
                }
                50% {
                    transform: translateY(-10px);
                }
            }
            
            .float-animation {
                animation: float 3s ease-in-out infinite;
            }
            
            /* Modern Section Title Styles */
            .modern-section-title {
                text-align: center;
                margin-bottom: 60px;
                position: relative;
            }
            
            .modern-section-title .title-tag {
                display: inline-block;
                background: linear-gradient(135deg, #7BA5C7 0%, #6B94B5 100%);
                color: white;
                padding: 10px 32px;
                border-radius: 50px;
                font-size: 13px;
                font-weight: 700;
                letter-spacing: 2.5px;
                text-transform: uppercase;
                margin-bottom: 20px;
                box-shadow: 0 6px 20px rgba(123, 165, 199, 0.35);
            }
            
            .modern-section-title h3 {
                font-size: 42px;
                font-weight: 800;
                color: #1a1a1a;
                margin: 0;
                letter-spacing: -1px;
                line-height: 1.2;
            }
            
            .modern-section-title .title-underline {
                width: 100px;
                height: 4px;
                background: linear-gradient(90deg, transparent 0%, #7BA5C7 50%, transparent 100%);
                margin: 25px auto 0;
                border-radius: 2px;
            }
            
            /* Ripple Effect */
            .ripple {
                position: relative;
                overflow: hidden;
            }
            
            .ripple::after {
                content: '';
                position: absolute;
                width: 100px;
                height: 100px;
                background: rgba(255, 255, 255, 0.5);
                border-radius: 50%;
                transform: scale(0);
                opacity: 0;
            }
            
            .ripple:active::after {
                animation: ripple-effect 0.6s ease-out;
            }
            
            @keyframes  ripple-effect {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
            
            @media (max-width: 768px) {
                .modern-section-title h3 {
                    font-size: 32px;
                }
            }
        </style>
        
        <?php echo $__env->yieldContent('extra_css'); ?>
        <!--
        <!-- Bootstrap -->
        <link href="css/head/css/bootstrap.min.css" rel="stylesheet">-->
        <!-- Extra plugin css -->
        <link href="css/head/css/style.css" rel="stylesheet">
        <link href="css/head/css/responsive.css" rel="stylesheet">
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142071470-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-142071470-1');
		</script>
    </head>
    <body>
        <?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <!--<script src="js/jquery-2.2.4.js"></script>-->

        <script src="js/bootstrap.min.js"></script>
        <script src="js/theme.js"></script>
        
        <!-- Global JavaScript for Animation Effects -->
        <script>
            // Smooth Scroll Animation on Page Load
            document.addEventListener('DOMContentLoaded', function() {
                // Create Intersection Observer for scroll animations
                const observerOptions = {
                    root: null,
                    rootMargin: '0px',
                    threshold: 0.1
                };
            
                const observer = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('animate-active');
                        }
                    });
                }, observerOptions);
            
                // Observe all elements with scroll animation classes
                const animateElements = document.querySelectorAll('.scroll-animate, .scroll-animate-left, .scroll-animate-right, .scroll-animate-zoom');
                animateElements.forEach(element => {
                    observer.observe(element);
                });
            
                // Parallax effect for hero
                window.addEventListener('scroll', function() {
                    const scrolled = window.pageYOffset;
                    const parallax = document.querySelector('.parallax-hero');
                    if (parallax) {
                        parallax.style.backgroundPositionY = scrolled * 0.5 + 'px';
                    }
                });
                
                // Smooth scroll for anchor links
                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function (e) {
                        const href = this.getAttribute('href');
                        if (href !== '#' && document.querySelector(href)) {
                            e.preventDefault();
                            document.querySelector(href).scrollIntoView({
                                behavior: 'smooth'
                            });
                        }
                    });
                });
            });
        </script>
        
        <?php echo $__env->yieldContent('extra_script'); ?>
    </body>
</html>
<?php /**PATH /var/www/resources/views/layout/main.blade.php ENDPATH**/ ?>