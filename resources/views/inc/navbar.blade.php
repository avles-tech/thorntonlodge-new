<style>
/* Clean Minimal Navbar */
.clean-navbar {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    background: white;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

.clean-navbar-container {
    max-width: 1600px;
    margin: 0 auto;
    padding: 0 40px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 80px;
}

.clean-logo {
    height: 55px;
    width: auto;
    transition: all 0.3s ease;
}

.clean-logo:hover {
    transform: scale(1.05);
}

/* Logo Container with Established Badge */
.logo-container {
    display: flex;
    align-items: center;
    gap: 15px;
}

.established-badge {
    background: linear-gradient(135deg, #7BA5C7 0%, #6B94B5 100%);
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.5px;
    box-shadow: 0 4px 12px rgba(123, 165, 199, 0.25);
    white-space: nowrap;
}

@media (max-width: 768px) {
    .established-badge {
        font-size: 11px;
        padding: 6px 12px;
    }
}

.clean-nav-menu {
    display: flex;
    align-items: center;
    gap: 28px;
    list-style: none;
    margin: 0;
    padding: 0;
}

.clean-nav-item {
    position: relative;
}

.clean-nav-link {
    color: #2C3E50 !important;
    text-decoration: none;
    font-size: 16px;
    font-weight: 600;
    transition: color 0.3s ease;
    display: flex;
    align-items: center;
    gap: 6px;
}

.clean-nav-link:hover {
    color: #7BA5C7 !important;
}

.clean-nav-item.active .clean-nav-link {
    color: #7BA5C7 !important;
}

/* Dropdown Arrow */
.dropdown-arrow {
    font-size: 13px;
    transition: transform 0.3s ease;
}

.clean-nav-item:hover .dropdown-arrow {
    transform: rotate(180deg);
}

/* Dropdown Menu - Simple and Clean */
.clean-dropdown {
    position: absolute;
    top: 100%;
    left: 0;
    background: white;
    min-width: 240px;
    padding: 12px 0;
    border-radius: 12px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.12);
    opacity: 0;
    visibility: hidden;
    transform: translateY(-10px);
    transition: all 0.3s ease;
    margin-top: 15px;
    border: 1px solid #f0f0f0;
}

.clean-nav-item:hover .clean-dropdown {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.clean-dropdown-item {
    padding: 15px 24px;
    color: #2C3E50;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 12px;
    transition: all 0.2s ease;
    font-size: 16px;
    font-weight: 500;
    line-height: 1.5;
}

.clean-dropdown-item i {
    color: #7BA5C7;
    font-size: 17px;
    width: 22px;
}

.clean-dropdown-item:hover {
    background: #F8F4EE;
    color: #7BA5C7;
    padding-left: 28px;
}

/* CTA Button */
.clean-cta-button {
    background: linear-gradient(135deg, #7BA5C7 0%, #6B94B5 100%) !important;
    color: white !important;
    padding: 12px 26px !important;
    border-radius: 50px;
    font-weight: 700;
    font-size: 15px;
    border: none !important;
    transition: all 0.3s ease;
    text-decoration: none !important;
    letter-spacing: 0.3px;
    box-shadow: 0 4px 15px rgba(123, 165, 199, 0.3);
}

.clean-cta-button:hover {
    background: linear-gradient(135deg, #6B94B5 0%, #5A8A9A 100%) !important;
    color: white !important;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(123, 165, 199, 0.4);
}


/* Mobile Toggle */
.clean-mobile-toggle {
    display: none;
    background: none;
    border: none;
    font-size: 24px;
    color: #333;
    cursor: pointer;
    padding: 8px;
}

/* Mobile Responsive */
@media (max-width: 991px) {
    .clean-navbar-container {
        padding: 0 20px;
        height: 70px;
    }

    .clean-logo {
        height: 45px;
    }

    .logo-container {
        gap: 10px;
    }

    .clean-mobile-toggle {
        display: block;
    }

    .clean-nav-menu {
        position: fixed;
        top: 70px;
        left: 0;
        right: 0;
        background: white;
        flex-direction: column;
        align-items: stretch;
        gap: 0;
        padding: 20px 0;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        transform: translateY(-100%);
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        max-height: calc(100vh - 70px);
        overflow-y: auto;
    }

    .clean-nav-menu.active {
        transform: translateY(0);
        opacity: 1;
        visibility: visible;
    }

    .clean-nav-item {
        padding: 0;
        border-bottom: 1px solid #f0f0f0;
    }

    .clean-nav-link {
        padding: 18px 25px;
        font-size: 16px;
    }

    .clean-dropdown {
        position: static;
        opacity: 0;
        visibility: hidden;
        transform: none;
        box-shadow: none;
        padding: 0;
        margin-top: 0;
        display: none;
        background: #F8F4EE;
        border-radius: 0;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
    }

    .clean-nav-item.mobile-dropdown-open .clean-dropdown {
        display: block;
        opacity: 1;
        visibility: visible;
        max-height: 500px;
    }

    .clean-dropdown-item {
        padding: 14px 25px 14px 45px;
        font-size: 15px;
    }

    .clean-dropdown-item:hover {
        padding-left: 48px;
    }

    .clean-cta-button {
        margin: 10px 25px;
        text-align: center;
        display: block;
        font-size: 15px;
    }

    /* Mobile dropdown toggle */
    .dropdown-arrow {
        float: right;
    }
}

@media (max-width: 480px) {
    .established-badge {
        display: none;
    }
}

/* Page Progress Bar */
.page-progress {
    position: fixed;
    top: 0;
    left: 0;
    height: 3px;
    background: linear-gradient(90deg, #7BA5C7 0%, #E8B4A0 100%);
    z-index: 1001;
    transition: width 0.1s ease;
}

/* Floating Actions */
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
    width: 55px;
    height: 55px;
    border-radius: 50%;
    background: linear-gradient(135deg, #7BA5C7 0%, #6B94B5 100%);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    box-shadow: 0 4px 15px rgba(123, 165, 199, 0.3);
    transition: all 0.3s ease;
    font-size: 22px;
    position: relative;
}

.floating-btn:hover {
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 6px 20px rgba(123, 165, 199, 0.5);
    color: white;
}

/* Back to Top - Original Blue */
.floating-btn:not(.whatsapp):not(.calendar):not(.phone) {
    background: linear-gradient(135deg, #7BA5C7 0%, #6B94B5 100%);
    box-shadow: 0 4px 15px rgba(123, 165, 199, 0.3);
}

.floating-btn:not(.whatsapp):not(.calendar):not(.phone):hover {
    box-shadow: 0 6px 20px rgba(123, 165, 199, 0.5);
}

.floating-btn::before {
    content: attr(data-tooltip);
    position: absolute;
    right: 70px;
    background: #333;
    color: white;
    padding: 10px 16px;
    border-radius: 8px;
    font-size: 14px;
    white-space: nowrap;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
    font-weight: 600;
}

.floating-btn:hover::before {
    opacity: 1;
    visibility: visible;
    right: 75px;
}
</style>

<!-- Page Progress Bar -->
<div class="page-progress" id="pageProgress"></div>

<header class="clean-navbar" id="mainNavbar">
    <div class="clean-navbar-container">
        <!-- Logo with Established Badge -->
        <div class="logo-container">
            <a href="{{ route('home') }}">
                <img src="/images/ThorntonLodgeLogo.jpg" alt="Thornton Lodge" class="clean-logo">
            </a>
            <span class="established-badge">EST. 1987</span>
        </div>

        <!-- Mobile Toggle -->
        <button class="clean-mobile-toggle" onclick="document.querySelector('.clean-nav-menu').classList.toggle('active')">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Navigation and Call Button Container -->
        <div style="display: flex; align-items: center; gap: 0;">
            <!-- Navigation Menu -->
            <ul class="clean-nav-menu">
                <li class="clean-nav-item active">
                    <a href="{{ route('home') }}" class="clean-nav-link">HOME</a>
                </li>

                <li class="clean-nav-item">
                    <a href="{{ route('about') }}" class="clean-nav-link">
                        ABOUT
                        <span class="dropdown-arrow">▼</span>
                    </a>
                    <div class="clean-dropdown">
                        <a href="{{ route('about') }}" class="clean-dropdown-item">
                            <i class="fa fa-info-circle"></i>Who We Are
                        </a>
                        <a href="{{ route('testimonial') }}" class="clean-dropdown-item">
                            <i class="fa fa-quote-left"></i>Testimonials
                        </a>
                        <a href="{{ route('team') }}" class="clean-dropdown-item">
                            <i class="fa fa-users"></i>Team
                        </a>
                        <a href="{{ route('job_vacancy') }}" class="clean-dropdown-item">
                            <i class="fa fa-briefcase"></i>Job Vacancies
                        </a>
                    </div>
                </li>

                <li class="clean-nav-item">
                    <a href="{{ route('accommodation') }}" class="clean-nav-link">
                        THE LODGE
                        <span class="dropdown-arrow">▼</span>
                    </a>
                    <div class="clean-dropdown">
                        <a href="{{ route('accommodation') }}" class="clean-dropdown-item">
                            <i class="fa fa-hotel"></i>Accommodation
                        </a>
                        <a href="{{ route('admission') }}" class="clean-dropdown-item">
                            <i class="fa fa-plus-circle"></i>Admission Criteria
                        </a>
                        <a href="{{ route('facilities') }}" class="clean-dropdown-item">
                            <i class="fa fa-thumbs-o-up"></i>Facilities
                        </a>
                        <a href="{{ route('cuisine') }}" class="clean-dropdown-item">
                            <i class="fa fa-cutlery"></i>Cuisine
                        </a>
                        <a href="{{ route('activities') }}" class="clean-dropdown-item">
                            <i class="fa fa-bar-chart-o"></i>Activities & Events
                        </a>
                        <a href="{{ route('principal') }}" class="clean-dropdown-item">
                            <i class="fa fa-hospital-o"></i>Principal of Care
                        </a>
                        <a href="{{ route('staff_training') }}" class="clean-dropdown-item">
                            <i class="fa fa-graduation-cap"></i>Staff Training
                        </a>
                    </div>
                </li>

                <li class="clean-nav-item">
                    <a href="{{ route('vacancies') }}" class="clean-nav-link">BED AVAILABILITY</a>
                </li>

                <li class="clean-nav-item">
                    <a href="{{ route('gallery') }}" class="clean-nav-link">GALLERY</a>
                </li>

                <li class="clean-nav-item">
                    <a href="{{ route('contact') }}" class="clean-nav-link clean-cta-button">CONTACT US</a>
                </li>
            </ul>
        </div>
    </div>
</header>

<!-- Floating Quick Actions -->
<div class="floating-actions">
    <a href="#" onclick="window.scrollTo({top: 0, behavior: 'smooth'}); return false;" class="floating-btn" data-tooltip="Back to Top" id="backToTop" style="display: none;">
        <i class="fa fa-arrow-up"></i>
    </a>
</div>

<!-- Spacer to prevent content from going under fixed navbar -->
<div style="height: 80px;"></div>

<!-- JavaScript for Scroll Effects -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('mainNavbar');
    const pageProgress = document.getElementById('pageProgress');
    const backToTopBtn = document.getElementById('backToTop');
    
    // Page progress bar
    window.addEventListener('scroll', function() {
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
    const menuItems = document.querySelectorAll('.clean-nav-item');
    
    menuItems.forEach(item => {
        const link = item.querySelector('.clean-nav-link');
        if (link && link.getAttribute('href') === currentPath) {
            menuItems.forEach(i => i.classList.remove('active'));
            item.classList.add('active');
        }
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', function(e) {
        const menu = document.querySelector('.clean-nav-menu');
        const toggle = document.querySelector('.clean-mobile-toggle');
        
        if (menu.classList.contains('active') && !menu.contains(e.target) && !toggle.contains(e.target)) {
            menu.classList.remove('active');
        }
    });

    // Mobile dropdown toggle
    if (window.innerWidth <= 991) {
        const dropdownToggles = document.querySelectorAll('.clean-nav-item .clean-nav-link .dropdown-arrow');
        
        dropdownToggles.forEach(arrow => {
            arrow.parentElement.addEventListener('click', function(e) {
                e.preventDefault();
                const parentItem = this.closest('.clean-nav-item');
                const wasOpen = parentItem.classList.contains('mobile-dropdown-open');
                
                // Close all other dropdowns
                document.querySelectorAll('.clean-nav-item').forEach(item => {
                    item.classList.remove('mobile-dropdown-open');
                });
                
                // Toggle current dropdown
                if (!wasOpen) {
                    parentItem.classList.add('mobile-dropdown-open');
                }
            });
        });
    }
});
</script>

<!-- mian-content -->
<div class="main-content">