@extends('layout')

@section('content')
<div class="container my-5">
    <!-- Hero Section -->
    <div class="hero-section text-center mb-5">
        <div class="hero-content p-5 rounded-4" style="background: linear-gradient(135deg, #6a3ea1 0%, #845ec2 100%);">
            <h1 class="display-4 fw-bold text-white mb-3 animate__animated animate__fadeInDown">Connect With Me</h1>
            <p class="lead text-white-50 mb-4 animate__animated animate__fadeIn animate__delay-1s">Let's stay connected with my platforms</p>
            <div class="social-scroll-indicator animate__animated animate__fadeIn animate__delay-2s">
                <i class="fas fa-chevron-down text-white"></i>
            </div>
        </div>
    </div>
    
    <!-- Social Platforms -->
    <div class="row g-4 mb-5">
        <!-- Instagram -->
        <div class="col-md-4">
            <div class="social-platform-card instagram-card h-100">
                <div class="platform-header d-flex align-items-center p-4">
                    <div class="platform-icon me-3">
                        <i class="fab fa-instagram"></i>
                    </div>
                    <div>
                        <h3 class="platform-name mb-0">Instagram</h3>
                        <p class="platform-username mb-0">@syitashr</p>
                    </div>
                </div>
                <div class="platform-body p-4">
                    <p class="platform-description">Follow my daily life, creative projects, and special moments through photos and stories.</p>
                    <a href="https://instagram.com/syitashr" target="_blank" class="btn btn-instagram w-100">
                        <i class="fab fa-instagram me-2"></i> Follow
                    </a>
                </div>
                <div class="platform-footer p-3 text-center">
                    <small>Updated daily</small>
                </div>
            </div>
        </div>
        
        <!-- TikTok -->
        <div class="col-md-4">
            <div class="social-platform-card tiktok-card h-100">
                <div class="platform-header d-flex align-items-center p-4">
                    <div class="platform-icon me-3">
                        <i class="fab fa-tiktok"></i>
                    </div>
                    <div>
                        <h3 class="platform-name mb-0">TikTok</h3>
                        <p class="platform-username mb-0">@itss.syitaa</p>
                    </div>
                </div>
                <div class="platform-body p-4">
                    <p class="platform-description">Check out my fun, creative short videos covering various topics and trends.</p>
                    <a href="https://tiktok.com/@itss.syitaa" target="_blank" class="btn btn-tiktok w-100">
                        <i class="fab fa-tiktok me-2"></i> Follow
                    </a>
                </div>
                <div class="platform-footer p-3 text-center">
                    <small>New videos</small>
                </div>
            </div>
        </div>
        
        <!-- WhatsApp -->
        <div class="col-md-4">
            <div class="social-platform-card whatsapp-card h-100">
                <div class="platform-header d-flex align-items-center p-4">
                    <div class="platform-icon me-3">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div>
                        <h3 class="platform-name mb-0">WhatsApp</h3>
                        <p class="platform-username mb-0">+62 812-3456-7890</p>
                    </div>
                </div>
                <div class="platform-body p-4">
                    <p class="platform-description">Available for collaborations, questions, or just to say hello!</p>
                    <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-whatsapp w-100">
                        <i class="fab fa-whatsapp me-2"></i> Message Me
                    </a>
                </div>
                <div class="platform-footer p-3 text-center">
                    <small>Usually replies within hours</small>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Instagram Highlights -->
    <div class="instagram-highlights mb-5">
        <div class="section-header d-flex justify-content-between align-items-center mb-4">
            <h2 class="section-title">
                <i class="fab fa-instagram me-2"></i> Instagram Highlights
            </h2>
            <a href="https://instagram.com/syitashr" target="_blank" class="view-all-link">
                View All <i class="fas fa-arrow-right ms-1"></i>
            </a>
        </div>
        
        <div class="highlight-grid">
            <div class="row g-3">
                <!-- Highlight 1 -->
                <div class="col-md-4 col-6">
                    <div class="highlight-card">
                        <img src="{{ asset('img/feeds_1.png') }}" alt="Instagram post" class="highlight-image">
                        <div class="highlight-overlay">
                            <div class="highlight-content">
                                <div class="highlight-stats">
                                    <span class="me-3"><i class="fas fa-heart"></i> 175</span>
                                    <span><i class="fas fa-comment"></i> 0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Highlight 2 -->
                <div class="col-md-4 col-6">
                    <div class="highlight-card">
                        <img src="{{ asset('img/feeds_2.png') }}" alt="Instagram post" class="highlight-image">
                        <div class="highlight-overlay">
                            <div class="highlight-content">
                                <div class="highlight-stats">
                                    <span class="me-3"><i class="fas fa-heart"></i> 128</span>
                                    <span><i class="fas fa-comment"></i> 2</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Highlight 3 -->
                <div class="col-md-4 col-6">
                    <div class="highlight-card">
                        <img src="{{ asset('img/feeds_3.png') }}" alt="Instagram post" class="highlight-image">
                        <div class="highlight-overlay">
                            <div class="highlight-content">
                                <div class="highlight-stats">
                                    <span class="me-3"><i class="fas fa-heart"></i> 171</span>
                                    <span><i class="fas fa-comment"></i> 10</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    /* Modern Color Palette */
    :root {
        --primary: #6a3ea1;
        --primary-light: #9d71d0;
        --primary-dark: #4a2a74;
        --secondary: #845ec2;
        --light-purple: #b39cd0;
        --accent: #593196;
        
        /* Social Colors */
        --instagram: #e1306c;
        --tiktok: #000000;
        --whatsapp: #25d366;
        
        /* Text Colors */
        --text-dark: #2c2c2c;
        --text-muted: #6c757d;
        --text-light: #f8f9fa;
        
        /* Backgrounds */
        --bg-light: #f8f6fb;
        --bg-card: #ffffff;
    }
    
    /* Base Styles */
    body {
        font-family: 'Poppins', sans-serif;
        background-color: var(--bg-light);
        color: var(--text-dark);
    }
    
    h1, h2, h3, h4, h5, h6 {
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
    }
    
    /* Hero Section */
    .hero-section {
        position: relative;
        overflow: hidden;
    }
    
    .hero-content {
        position: relative;
        overflow: hidden;
    }
    
    .hero-content::before {
        content: "";
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
        transform: rotate(30deg);
    }
    
    .social-scroll-indicator {
        animation: bounce 2s infinite;
    }
    
    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-10px);
        }
        60% {
            transform: translateY(-5px);
        }
    }
    
    /* Social Platform Cards */
    .social-platform-card {
        background-color: var(--bg-card);
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        border: none;
        display: flex;
        flex-direction: column;
    }
    
    .social-platform-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }
    
    .platform-header {
        padding: 1.5rem;
        color: white;
    }
    
    .platform-icon {
        font-size: 1.75rem;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: rgba(255,255,255,0.2);
    }
    
    .platform-name {
        font-size: 1.25rem;
        font-weight: 600;
    }
    
    .platform-username {
        font-size: 0.9rem;
        opacity: 0.9;
    }
    
    .platform-body {
        flex: 1;
        padding: 1.5rem;
    }
    
    .platform-description {
        color: var(--text-muted);
        margin-bottom: 1.5rem;
    }
    
    .platform-stats {
        margin-bottom: 1.5rem;
    }
    
    .stat-item {
        flex: 1;
    }
    
    .stat-number {
        font-weight: 700;
        font-size: 1.1rem;
        color: var(--text-dark);
    }
    
    .stat-label {
        font-size: 0.75rem;
        color: var(--text-muted);
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .platform-footer {
        background-color: rgba(0,0,0,0.03);
        font-size: 0.75rem;
        color: var(--text-muted);
    }
    
    /* Platform Specific Styles */
    .instagram-card .platform-header {
        background: linear-gradient(45deg, #405de6, #5851db, #833ab4, #c13584, #e1306c, #fd1d1d);
    }
    
    .tiktok-card .platform-header {
        background: linear-gradient(45deg, #000000, #25f4ee, #fe2c55, #000000);
        background-size: 300% 300%;
        animation: gradient 5s ease infinite;
    }
    
    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }
    
    .whatsapp-card .platform-header {
        background: linear-gradient(45deg, #075e54, #128c7e, #25d366);
    }
    
    /* Buttons */
    .btn {
        font-weight: 500;
        padding: 0.5rem 1rem;
        border-radius: 8px;
        transition: all 0.3s ease;
    }
    
    .btn-instagram {
        background-color: var(--instagram);
        color: white;
        border: none;
    }
    
    .btn-instagram:hover {
        background-color: #c13584;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(225, 48, 108, 0.3);
    }
    
    .btn-tiktok {
        background-color: var(--tiktok);
        color: white;
        border: none;
    }
    
    .btn-tiktok:hover {
        background-color: #333;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }
    
    .btn-whatsapp {
        background-color: var(--whatsapp);
        color: white;
        border: none;
    }
    
    .btn-whatsapp:hover {
        background-color: #128c7e;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(37, 211, 102, 0.3);
    }
    
    /* Instagram Highlights */
    .section-header {
        margin-bottom: 1.5rem;
    }
    
    .section-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: var(--text-dark);
    }
    
    .view-all-link {
        color: var(--primary);
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .view-all-link:hover {
        color: var(--primary-dark);
        transform: translateX(3px);
    }
    
    .highlight-card {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        aspect-ratio: 1/1;
    }
    
    .highlight-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    
    .highlight-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .highlight-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0) 60%);
        opacity: 0;
        transition: all 0.3s ease;
        display: flex;
        align-items: flex-end;
    }
    
    .highlight-card:hover .highlight-overlay {
        opacity: 1;
    }
    
    .highlight-content {
        width: 100%;
        padding: 1rem;
    }
    
    .highlight-stats {
        color: white;
        font-size: 0.9rem;
    }
    
    /* Contact CTA */
    .contact-cta {
        position: relative;
        overflow: hidden;
    }
    
    .contact-cta::before {
        content: "";
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
        transform: rotate(30deg);
    }
    
    /* Responsive Adjustments */
    @media (max-width: 767.98px) {
        .hero-content {
            padding: 3rem 1.5rem;
        }
        
        .section-title {
            font-size: 1.25rem;
        }
        
        .platform-header, .platform-body {
            padding: 1rem;
        }
        
        .stat-number {
            font-size: 1rem;
        }
    }
</style>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animate elements on scroll
        const animateOnScroll = function() {
            const elements = document.querySelectorAll('.social-platform-card, .highlight-card, .contact-cta');
            
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.2;
                
                if(elementPosition < screenPosition) {
                    element.classList.add('animate__animated', 'animate__fadeInUp');
                }
            });
        };
        
        // Run once on load
        animateOnScroll();
        
        // Run on scroll
        window.addEventListener('scroll', animateOnScroll);
        
        // Add hover effect to platform cards
        const platformCards = document.querySelectorAll('.social-platform-card');
        
        platformCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
                this.style.boxShadow = '0 20px 40px rgba(0,0,0,0.15)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(-5px)';
                this.style.boxShadow = '0 15px 30px rgba(0,0,0,0.1)';
            });
        });
        
        // Smooth scroll to social platforms
        const scrollIndicator = document.querySelector('.social-scroll-indicator');
        
        if(scrollIndicator) {
            scrollIndicator.addEventListener('click', function() {
                const socialSection = document.querySelector('.social-platform-card');
                socialSection.scrollIntoView({ behavior: 'smooth' });
            });
        }
    });
</script>
@endsection