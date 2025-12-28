<!--================Modern Header Area =================-->
<style>
/* Modern Navbar Styles with Scroll Effects */
.modern-navbar {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    background: transparent;
    backdrop-filter: none;
    box-shadow: none;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.modern-navbar.scrolled {
    background: rgba(255, 255, 255, 0.98);
    backdrop-filter: blur(10px);
    box-shadow: 0 2px 20px rgba(0,0,0,0.08);
}

.modern-topbar {
    background: linear-gradient(135deg, #5095CD 0%, #2C3E50 100%);
    padding: 10px 0;
    font-size: 14px;
    opacity: 1;
    max-height: 50px;
    transition: all 0.4s ease;
}

.modern-navbar.scrolled .modern-topbar {
    opacity: 0;
    max-height: 0;
    padding: 0;
    overflow: hidden;
}

.modern-topbar a {
    color: white;
    text-decoration: none;
    margin-left: 25px;
    transition: opacity 0.3s ease;
    font-weight: 500;
}

.modern-topbar a:hover {
    opacity: 0.8;
}

.modern-topbar i {
    margin-right: 8px;
}

.modern-navbar-main {
    padding: 15px 0;
    transition: padding 0.3s ease;
}

.modern-navbar.scrolled .modern-navbar-main {
    padding: 10px 0;
}

.modern-logo {
    height: 55px;
    width: auto;
    transition: all 0.3s ease;
}

.modern-navbar.scrolled .modern-logo {
    height: 45px;
}

.modern-logo:hover {
    transform: scale(1.05);
}

.modern-nav-menu {
    display: flex;
    align-items: center;
    gap: 5px;
    list-style: none;
    margin: 0;
    padding: 0;
}

.modern-nav-item {
    position: relative;
}

.modern-nav-link {
    color: rgba(10, 1, 1, 0.95) !important;
    text-decoration: none;
    padding: 10px 18px;
    display: block;
    font-weight: 600;
    font-size: 15px;
    transition: all 0.3s ease;
    border-radius: 8px;
    position: relative;
    text-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
}

.modern-navbar.scrolled .modern-nav-link {
    color: #333 !important;
    text-shadow: none;
}

.modern-nav-link:hover {
    color: #F39C63 !important;
    background: rgba(80, 149, 205, 0.15);
}

.modern-navbar.scrolled .modern-nav-link:hover {
    background: rgba(80, 149, 205, 0.1);
}

.modern-nav-link::after {
    content: '';
    position: absolute;
    bottom: 5px;
    left: 50%;
    transform: translateX(-50%) scaleX(0);
    width: 30px;
    height: 3px;
    background: #5095CD;
    border-radius: 2px;
    transition: transform 0.3s ease;
}

.modern-nav-link:hover::after,
.modern-nav-item.active .modern-nav-link::after {
    transform: translateX(-50%) scaleX(1);
}

.modern-nav-item.active .modern-nav-link {
    color: #5095CD !important;
}

.modern-dropdown-toggle::after {
    content: '\f107';
    font-family: FontAwesome;
    border: none;
    margin-left: 5px;
    font-size: 12px;
    transition: transform 0.3s ease;
}

.modern-nav-item:hover .modern-dropdown-toggle::after {
    transform: rotate(180deg);
}

/* Regular Dropdown Menu */
.modern-dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    background: white;
    min-width: 220px;
    padding: 10px 0;
    border-radius: 12px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.15);
    opacity: 0;
    visibility: hidden;
    transform: translateY(-10px);
    transition: all 0.3s ease;
    margin-top: 5px;
    border: 1px solid rgba(0,0,0,0.05);
}

.modern-nav-item:hover .modern-dropdown-menu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.modern-dropdown-item {
    padding: 12px 25px;
    color: #555;
    text-decoration: none;
    display: block;
    transition: all 0.2s ease;
    font-size: 14px;
    font-weight: 500;
}

.modern-dropdown-item:hover {
    background: linear-gradient(90deg, rgba(80, 149, 205, 0.1) 0%, transparent 100%);
    color: #F39C63;
    padding-left: 30px;
}

/* Mega Menu for The Lodge */
.mega-menu {
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translateX(-50%) translateY(-10px);
    background: white;
    min-width: 700px;
    padding: 30px;
    border-radius: 16px;
    box-shadow: 0 15px 50px rgba(0,0,0,0.2);
    opacity: 0;
    visibility: hidden;
    transition: all 0.4s ease;
    margin-top: 5px;
    border: 1px solid rgba(0,0,0,0.05);
}

.modern-nav-item:hover .mega-menu {
    opacity: 1;
    visibility: visible;
    transform: translateX(-50%) translateY(0);
}

.mega-menu-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
}

.mega-menu-item {
    padding: 15px 20px;
    border-radius: 10px;
    transition: all 0.3s ease;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    text-decoration: none;
    border: 1px solid transparent;
}

.mega-menu-item:hover {
    background: linear-gradient(135deg, rgba(80, 149, 205, 0.1) 0%, rgba(243, 156, 99, 0.05) 100%);
    border-color: rgba(80, 149, 205, 0.3);
    transform: translateX(5px);
}

.mega-menu-icon {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, #5095CD 0%, #4080B8 100%);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.mega-menu-icon i {
    color: white;
    font-size: 18px;
}

.mega-menu-content h4 {
    font-size: 15px;
    font-weight: 600;
    color: #333;
    margin: 0 0 5px 0;
}

.mega-menu-content p {
    font-size: 12px;
    color: #777;
    margin: 0;
    line-height: 1.4;
}

.modern-cta-button {
    background: rgba(255, 255, 255, 0.2) !important;
    backdrop-filter: blur(10px);
    color: white !important;
    padding: 10px 25px !important;
    border-radius: 25px;
    margin-left: 10px;
    font-weight: 600;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    border: 1px solid rgba(255, 255, 255, 0.3) !important;
    text-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
}

.modern-navbar.scrolled .modern-cta-button {
    background: linear-gradient(135deg, #5095CD 0%, #4080B8 100%) !important;
    border: none !important;
    box-shadow: 0 4px 15px rgba(80, 149, 205, 0.3);
    text-shadow: none;
}

.modern-cta-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(243, 156, 99, 0.4);
    background: linear-gradient(135deg, #F39C63 0%, #E67E22 100%) !important;
}

.modern-navbar.scrolled .modern-cta-button:hover {
    background: linear-gradient(135deg, #F39C63 0%, #E67E22 100%) !important;
}

.modern-cta-button::after {
    display: none;
}

/* Page Progress Bar */
.page-progress {
    position: fixed;
    top: 0;
    left: 0;
    height: 3px;
    background: linear-gradient(90deg, #5095CD 0%, #F39C63 100%);
    z-index: 1001;
    transition: width 0.1s ease;
}

.modern-mobile-toggle {
    display: none;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 8px;
    font-size: 20px;
    color: white;
    cursor: pointer;
    padding: 8px 12px;
    transition: all 0.3s ease;
}

.modern-navbar.scrolled .modern-mobile-toggle {
    background: white;
    color: #333;
    border-color: rgba(0, 0, 0, 0.1);
}

.modern-mobile-toggle:hover {
    transform: scale(1.05);
}

@media (max-width: 991px) {
    .modern-mobile-toggle {
        display: block;
    }

    .modern-nav-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: white;
        flex-direction: column;
        padding: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        border-radius: 0 0 12px 12px;
    }

    .modern-nav-menu.active {
        display: flex;
    }

    .modern-nav-link {
        color: #333 !important;
        text-shadow: none;
    }

    .modern-dropdown-menu,
    .mega-menu {
        position: static;
        box-shadow: none;
        opacity: 1;
        visibility: visible;
        transform: none;
        padding-left: 20px;
        display: none;
        background: #f8f9fa;
        margin-top: 10px;
        border-radius: 8px;
        min-width: auto;
    }

    .modern-nav-item:hover .modern-dropdown-menu,
    .modern-nav-item:hover .mega-menu {
        display: block;
    }

    .mega-menu-grid {
        grid-template-columns: 1fr;
    }

    .modern-cta-button {
        margin-left: 0;
        margin-top: 10px;
        text-align: center;
        background: linear-gradient(135deg, #5095CD 0%, #4080B8 100%) !important;
        border: none !important;
        text-shadow: none;
    }
}

/* Floating Quick Actions */
.floating-actions {
    position: fixed;
    right: 30px;
    bottom: 30px;
    display: flex;
    flex-direction: column;
    gap: 12px;
    z-index: 999;
}

.floating-btn {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 6px 25px rgba(0,0,0,0.2);
    cursor: pointer;
    transition: all 0.3s ease;
    text-decoration: none;
    color: white;
    font-size: 22px;
    animation: fadeInUp 0.5s ease forwards;
    opacity: 0;
}

.floating-btn:nth-child(1) {
    background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
    animation-delay: 0.1s;
}

.floating-btn:nth-child(2) {
    background: linear-gradient(135deg, #5095CD 0%, #4080B8 100%);
    animation-delay: 0.2s;
}

.floating-btn:nth-child(3) {
    background: linear-gradient(135deg, #F39C63 0%, #E67E22 100%);
    animation-delay: 0.3s;
}

.floating-btn:nth-child(4) {
    background: linear-gradient(135deg, #f39c12 0%, #e67e22 100%);
    animation-delay: 0.4s;
}

.floating-btn:hover {
    transform: translateY(-5px) scale(1.1);
    box-shadow: 0 10px 35px rgba(0,0,0,0.3);
}

.floating-btn i {
    animation: pulse 2s ease-in-out infinite;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes pulse {
    0%, 100% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.1);
    }
}

/* Tooltip for floating buttons */
.floating-btn::before {
    content: attr(data-tooltip);
    position: absolute;
    right: 70px;
    background: #333;
    color: white;
    padding: 8px 15px;
    border-radius: 8px;
    font-size: 13px;
    white-space: nowrap;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
    font-weight: 500;
}

.floating-btn:hover::before {
    opacity: 1;
    visibility: visible;
    right: 75px;
}

@media (max-width: 768px) {
    .floating-actions {
        right: 20px;
        bottom: 20px;
    }

    .floating-btn {
        width: 50px;
        height: 50px;
        font-size: 20px;
    }
}
</style>

<!-- Page Progress Bar -->
<div class="page-progress" id="pageProgress"></div>

<header class="modern-navbar" id="mainNavbar">
    <!-- Top Bar -->
    <div class="modern-topbar">
        <div class="container">
            <div style="display: flex; justify-content: flex-end; align-items: center;">
                <a href="tel:02086841056">
                    <i class="fa fa-phone"></i>(020) - 8684 1056
                </a>
                <a href="mailto:admin@thorntonlodgecare.com">
                    <i class="fa fa-envelope-o"></i>admin@thorntonlodgecare.com
                </a>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <div class="modern-navbar-main">
        <div class="container">
            <div style="display: flex; align-items: center; justify-content: space-between; position: relative;">
                <!-- Logo -->
                <a href="{{ route('home') }}">
                    <img src="/images/ThorntonLodgeLogo.jpg" alt="Thornton Lodge" class="modern-logo">
                </a>

                <!-- Mobile Toggle -->
                <button class="modern-mobile-toggle" onclick="document.querySelector('.modern-nav-menu').classList.toggle('active')">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Navigation Menu -->
                <ul class="modern-nav-menu">
                    <li class="modern-nav-item active">
                        <a href="{{ route('home') }}" class="modern-nav-link">Home</a>
                    </li>

                    <li class="modern-nav-item">
                        <a href="{{ route('about') }}" class="modern-nav-link modern-dropdown-toggle">About</a>
                        <div class="modern-dropdown-menu">
                            <a href="{{ route('about') }}" class="modern-dropdown-item">
                                <i class="fa fa-info-circle" style="margin-right: 8px; color: #5095CD;"></i>Who We Are
                            </a>
                            <a href="{{ route('testimonial') }}" class="modern-dropdown-item">
                                <i class="fa fa-quote-left" style="margin-right: 8px; color: #5095CD;"></i>Testimonials
                            </a>
                            <a href="{{ route('team') }}" class="modern-dropdown-item">
                                <i class="fa fa-users" style="margin-right: 8px; color: #5095CD;"></i>Team
                            </a>
                            <a href="{{ route('job_vacancy') }}" class="modern-dropdown-item">
                                <i class="fa fa-briefcase" style="margin-right: 8px; color: #5095CD;"></i>Job Vacancies
                            </a>
                        </div>
                    </li>

                    <li class="modern-nav-item">
                        <a href="{{ route('accommodation') }}" class="modern-nav-link modern-dropdown-toggle">The Lodge</a>
                        <!-- Mega Menu -->
                        <div class="mega-menu">
                            <div class="mega-menu-grid">
                                <a href="{{ route('accommodation') }}" class="mega-menu-item">
                                    <div class="mega-menu-icon">
                                        <i class="fa fa-hotel"></i>
                                    </div>
                                    <div class="mega-menu-content">
                                        <h4>Accommodation</h4>
                                        <p>Comfortable rooms designed for your wellbeing</p>
                                    </div>
                                </a>
                                <a href="{{ route('admission') }}" class="mega-menu-item">
                                    <div class="mega-menu-icon">
                                        <i class="fa fa-plus-circle"></i>
                                    </div>
                                    <div class="mega-menu-content">
                                        <h4>Admission Criteria</h4>
                                        <p>Learn about our admission process</p>
                                    </div>
                                </a>
                                <a href="{{ route('facilities') }}" class="mega-menu-item">
                                    <div class="mega-menu-icon">
                                        <i class="fa fa-thumbs-o-up"></i>
                                    </div>
                                    <div class="mega-menu-content">
                                        <h4>Facilities</h4>
                                        <p>Modern amenities for your comfort</p>
                                    </div>
                                </a>
                                <a href="{{ route('cuisine') }}" class="mega-menu-item">
                                    <div class="mega-menu-icon">
                                        <i class="fa fa-cutlery"></i>
                                    </div>
                                    <div class="mega-menu-content">
                                        <h4>Cuisine</h4>
                                        <p>Nutritious and delicious meals daily</p>
                                    </div>
                                </a>
                                <a href="{{ route('activities') }}" class="mega-menu-item">
                                    <div class="mega-menu-icon">
                                        <i class="fa fa-bar-chart-o"></i>
                                    </div>
                                    <div class="mega-menu-content">
                                        <h4>Activities & Events</h4>
                                        <p>Engaging programs and social activities</p>
                                    </div>
                                </a>
                                <a href="{{ route('principal') }}" class="mega-menu-item">
                                    <div class="mega-menu-icon">
                                        <i class="fa fa-hospital-o"></i>
                                    </div>
                                    <div class="mega-menu-content">
                                        <h4>Principal of Care</h4>
                                        <p>Our commitment to quality care</p>
                                    </div>
                                </a>
                                <a href="{{ route('staff_training') }}" class="mega-menu-item">
                                    <div class="mega-menu-icon">
                                        <i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="mega-menu-content">
                                        <h4>Staff Training</h4>
                                        <p>Highly trained and qualified staff</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="modern-nav-item">
                        <a href="{{ route('vacancies') }}" class="modern-nav-link">Bed Availability</a>
                    </li>

                    <li class="modern-nav-item">
                        <a href="{{ route('gallery') }}" class="modern-nav-link">Gallery</a>
                    </li>

                    <li class="modern-nav-item">
                        <a href="{{ route('contact') }}" class="modern-nav-link modern-cta-button">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<!-- Floating Quick Actions -->
<div class="floating-actions">
    <a href="https://wa.me/442086841056" target="_blank" class="floating-btn" data-tooltip="WhatsApp Chat">
        <i class="fa fa-whatsapp"></i>
    </a>
    <a href="{{ route('contact') }}" class="floating-btn" data-tooltip="Book a Tour">
        <i class="fa fa-calendar-check-o"></i>
    </a>
    <a href="tel:02086841056" class="floating-btn" data-tooltip="Call Now">
        <i class="fa fa-phone"></i>
    </a>
    <a href="#" onclick="window.scrollTo({top: 0, behavior: 'smooth'}); return false;" class="floating-btn" data-tooltip="Back to Top" id="backToTop" style="display: none;">
        <i class="fa fa-arrow-up"></i>
    </a>
</div>

<!-- Spacer to prevent content from going under fixed navbar -->
<div style="height: 130px;"></div>
<!--================End Modern Header Area =================-->

<!-- JavaScript for Scroll Effects -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('mainNavbar');
    const pageProgress = document.getElementById('pageProgress');
    const backToTopBtn = document.getElementById('backToTop');
    
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
        
        // Page progress bar
        const windowHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (window.scrollY / windowHeight) * 100;
        pageProgress.style.width = scrolled + '%';
        
        // Back to top button
        if (window.scrollY > 500) {
            backToTopBtn.style.display = 'flex';
        } else {
            backToTopBtn.style.display = 'none';
        }
    });
    
    // Active menu item based on current page
    const currentPath = window.location.pathname;
    const menuItems = document.querySelectorAll('.modern-nav-item');
    
    menuItems.forEach(item => {
        const link = item.querySelector('.modern-nav-link');
        if (link && link.getAttribute('href') === currentPath) {
            menuItems.forEach(i => i.classList.remove('active'));
            item.classList.add('active');
        }
    });
});
</script>

<!-- mian-content -->
<div class="main-content" >