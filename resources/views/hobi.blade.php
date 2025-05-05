@extends('layout')

@section('content')
<div class="container mt-5 mb-5">
    <div class="card shadow-lg border-0 rounded-lg overflow-hidden">
        <div class="card-header bg-gradient-primary text-white text-center py-4">
            <h2 class="fw-bold mb-0 display-5">Hobi & Minat</h2>
        </div>
        <div class="card-body py-5">
            <!-- Intro Section with improved typography -->
            <div class="text-center mb-5">
                <h3 class="text-primary fw-bold mb-3">Masyita Ika Sahara</h3>
                <p class="text-muted lead">Berikut adalah beberapa aktivitas yang saya sukai di waktu luang</p>
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
            </div>
            
            <!-- Hobi Section with improved card design -->
            <div class="row g-4">
                <!-- Coding -->
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm hover-card rounded-lg overflow-hidden">
                        <div class="row g-0">
                            <div class="col-md-4 bg-gradient-primary text-white text-center d-flex align-items-center justify-content-center py-4">
                                <div>
                                    <i class="fas fa-code fa-3x mb-3 pulse-icon"></i>
                                    <h5 class="fw-bold">Development</h5>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text">Saya suka menghabiskan waktu untuk belajar bahasa pemrograman baru dan membuat proyek web. Beberapa teknologi favorit saya termasuk React js dan Vite.</p>
                                    <div class="mt-3">
                                        <span class="badge bg-primary me-1 rounded-pill px-3"><i class="fab fa-react me-1"></i>React js</span>
                                        <span class="badge bg-primary me-1 rounded-pill px-3"><i class="fas fa-bolt me-1"></i>Vite</span>
                                        <span class="badge bg-primary rounded-pill px-3"><i class="fas fa-globe me-1"></i>Web Development</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Musik -->
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm hover-card rounded-lg overflow-hidden">
                        <div class="row g-0">
                            <div class="col-md-4 bg-gradient-secondary text-white text-center d-flex align-items-center justify-content-center py-4">
                                <div>
                                    <i class="fas fa-music fa-3x mb-3 pulse-icon"></i>
                                    <h5 class="fw-bold">Musik</h5>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text">Mendengarkan musik adalah cara saya untuk melepas stres. Saya suka mendengarkan berbagai genre musik dari pop hingga kpop dan seringkali mengerjakan tugas sambil mendengarkan musik.</p>
                                    <div class="mt-3">
                                        <span class="badge bg-secondary me-1 rounded-pill px-3"><i class="fas fa-star me-1"></i>Kpop</span>
                                        <span class="badge bg-secondary me-1 rounded-pill px-3"><i class="fas fa-play me-1"></i>Pop</span>
                                        <span class="badge bg-secondary rounded-pill px-3"><i class="fas fa-heart me-1"></i>Melow</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Fotografi -->
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm hover-card rounded-lg overflow-hidden">
                        <div class="row g-0">
                            <div class="col-md-4 bg-gradient-tertiary text-white text-center d-flex align-items-center justify-content-center py-4">
                                <div>
                                    <i class="fas fa-camera fa-3x mb-3 pulse-icon"></i>
                                    <h5 class="fw-bold">Fotografi</h5>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text">Saya senang mengabadikan momen-momen indah melalui fotografi. Landscape dan street photography adalah genre favorit saya dalam fotografi.</p>
                                    <div class="mt-3">
                                        <span class="badge bg-tertiary me-1 rounded-pill px-3"><i class="fas fa-mountain me-1"></i>Landscape</span>
                                        <span class="badge bg-tertiary me-1 rounded-pill px-3"><i class="fas fa-road me-1"></i>Street</span>
                                        <span class="badge bg-tertiary rounded-pill px-3"><i class="fas fa-user me-1"></i>Portrait</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Volunteer dan kepanitiaan -->
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm hover-card rounded-lg overflow-hidden">
                        <div class="row g-0">
                            <div class="col-md-4 bg-gradient-accent text-white text-center d-flex align-items-center justify-content-center py-4">
                                <div>
                                    <i class="fas fa-hands-helping fa-3x mb-3 pulse-icon"></i>
                                    <h5 class="fw-bold">Volunteer</h5>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text">Saya aktif dalam kegiatan sosial dan kepanitiaan. Saya percaya bahwa berkontribusi kepada masyarakat adalah hal yang penting dan memberikan pengalaman berharga.</p>
                                    <div class="mt-3">
                                        <span class="badge bg-accent me-1 rounded-pill px-3"><i class="fas fa-users me-1"></i>Kepanitiaan</span>
                                        <span class="badge bg-accent me-1 rounded-pill px-3"><i class="fas fa-hand-holding-heart me-1"></i>Volunteer</span>
                                        <span class="badge bg-accent rounded-pill px-3"><i class="fas fa-handshake me-1"></i>Sosial</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Section with improved layout -->
            <div class="mt-5 pt-3">
                <h3 class="text-center mb-4 fw-bold text-primary"><i class="fas fa-images me-2"></i>Galeri Aktivitas</h3>
                <div class="divider-custom mb-4">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-camera"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="gallery-item position-relative rounded-lg shadow-sm">
                            <div class="image-stack">
                                <img src="{{ asset('/img/hobi1.png') }}" alt="Coding Project 1" class="img-fluid rounded-lg w-100" style="height: 200px; object-fit: cover;">
                                <img src="{{ asset('/img/hobi1_2.png') }}" alt="Coding Project 2" class="img-fluid rounded-lg w-100 mt-3" style="height: 200px; object-fit: cover;">
                            </div>
                            <div class="gallery-overlay rounded-lg d-flex align-items-center justify-content-center">
                                <span class="badge bg-primary fs-6 px-4 py-2 rounded-pill"><i class="fas fa-code me-2"></i>Coding Project</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="gallery-item position-relative rounded-lg shadow-sm">
                            <div class="image-stack">
                                <img src="{{ asset('/img/hobi2_1.png') }}" alt="Volunteer 1" class="img-fluid rounded-lg w-100" style="height: 200px; object-fit: cover;">
                                <img src="{{ asset('/img/hobi2_2.png') }}" alt="Volunteer 2" class="img-fluid rounded-lg w-100 mt-3" style="height: 200px; object-fit: cover;">
                            </div>
                            <div class="gallery-overlay rounded-lg d-flex align-items-center justify-content-center">
                                <span class="badge bg-accent fs-6 px-4 py-2 rounded-pill"><i class="fas fa-hands-helping me-2"></i>Volunteer Time</span>
                            </div>
                        </div>
                    </div> 
                    
                    <div class="col-md-4">
                        <div class="gallery-item position-relative rounded-lg shadow-sm">
                            <div class="image-stack">
                                <img src="{{ asset('/img/hobi3.png') }}" alt="Music 1" class="img-fluid rounded-lg w-100" style="height: 200px; object-fit: cover;">
                                <img src="{{ asset('/img/hobi3_2.png') }}" alt="Music 2" class="img-fluid rounded-lg w-100 mt-3" style="height: 200px; object-fit: cover;">
                            </div>
                            <div class="gallery-overlay rounded-lg d-flex align-items-center justify-content-center">
                                <span class="badge bg-secondary fs-6 px-4 py-2 rounded-pill"><i class="fas fa-music me-2"></i>Music Session</span>
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
    /* Import Google Fonts */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap');
    
    /* Base styling */
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa;
    }
    
    h1, h2, h3, h4, h5, h6 {
        font-family: 'Montserrat', sans-serif;
    }
    
    /* Professional Purple Color Palette */
    :root {
        --primary: #6a3ea1;
        --primary-light: #9d71d0;
        --primary-dark: #4a2a74;
        --secondary: #845ec2;
        --tertiary: #b39cd0;
        --accent: #593196;
        --text-primary: #2c2c2c;
        --text-secondary: #6c757d;
        --light-bg: #f8f6fb;
    }
    
    .text-primary {
        color: var(--primary) !important;
    }
    
    /* Custom gradients with purple palette */
    .bg-gradient-primary {
        background: linear-gradient(to right, var(--primary-dark), var(--primary));
    }
    
    .bg-gradient-secondary {
        background: linear-gradient(to right, var(--secondary), #9d71d0);
    }
    
    .bg-gradient-tertiary {
        background: linear-gradient(to right, #7e57c2, var(--tertiary));
    }
    
    .bg-gradient-accent {
        background: linear-gradient(to right, var(--accent), #7b52ab);
    }
    
    .bg-primary {
        background-color: var(--primary) !important;
    }
    
    .bg-secondary {
        background-color: var(--secondary) !important;
    }
    
    .bg-tertiary {
        background-color: var(--tertiary) !important;
    }
    
    .bg-accent {
        background-color: var(--accent) !important;
    }
    
    /* Card hover effects */
    .hover-card {
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        box-shadow: 0 6px 10px rgba(106, 62, 161, 0.08);
    }
    
    .hover-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 30px rgba(106, 62, 161, 0.15) !important;
    }
    
    /* Gallery styling */
    .gallery-item {
        overflow: hidden;
        transition: all 0.4s ease;
        margin-bottom: 20px;
    }
    
    .gallery-item:hover {
        transform: translateY(-5px) scale(1.01);
        box-shadow: 0 15px 30px rgba(106, 62, 161, 0.1) !important;
    }
    
    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(74, 42, 116, 0.7);
        opacity: 0;
        transition: all 0.4s ease;
    }
    
    .gallery-item:hover .gallery-overlay {
        opacity: 1;
    }
    
    /* Badge styling */
    .badge {
        transition: all 0.3s ease;
        font-weight: 500;
        letter-spacing: 0.5px;
    }
    
    .badge:hover {
        transform: translateY(-2px) scale(1.1);
        box-shadow: 0 5px 15px rgba(106, 62, 161, 0.15);
    }
    
    /* Custom divider */
    .divider-custom {
        margin: 1.25rem 0 1.5rem;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .divider-custom .divider-custom-line {
        width: 100%;
        max-width: 7rem;
        height: 0.25rem;
        background-color: rgba(106, 62, 161, 0.2);
        border-radius: 1rem;
    }
    
    .divider-custom .divider-custom-line:first-child {
        margin-right: 1rem;
    }
    
    .divider-custom .divider-custom-line:last-child {
        margin-left: 1rem;
    }
    
    .divider-custom .divider-custom-icon {
        color: var(--primary);
        font-size: 1rem;
    }
    
    /* Pulse animation for icons */
    .pulse-icon {
        animation: pulse 2s infinite;
    }
    
    @keyframes pulse {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.1);
        }
        100% {
            transform: scale(1);
        }
    }
    
    /* Image stack effect */
    .image-stack img:first-child {
        margin-bottom: 15px;
    }
    
    .image-stack img {
        transition: all 0.4s ease;
        box-shadow: 0 5px 15px rgba(106, 62, 161, 0.08);
    }
    
    .gallery-item:hover .image-stack img {
        transform: scale(1.03);
        filter: brightness(0.85);
    }
    
    /* Custom card shadow */
    .card {
        box-shadow: 0 10px 30px rgba(106, 62, 161, 0.05);
    }
    
    /* Typography enhancements */
    .display-5 {
        font-weight: 700;
        letter-spacing: 1px;
    }
    
    .lead {
        font-weight: 400;
        font-size: 1.1rem;
    }
    
    /* Rounded elements */
    .rounded-lg {
        border-radius: 0.75rem !important;
    }
    
    /* Enhance card-body contrast */
    .card-body {
        background-color: var(--light-bg);
    }
</style>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // Animasi entrance dengan staggered effect
        const animateCSS = (element, animation, delay = 0) => {
            $(element).css('animation-delay', `${delay}s`).addClass(`animate__animated animate__${animation}`);
        }
        
        // Header animation
        animateCSS('.card-header', 'fadeIn');
        
        // Intro section animation
        animateCSS('.text-center h3', 'fadeInDown', 0.2);
        animateCSS('.text-center p', 'fadeIn', 0.4);
        animateCSS('.divider-custom', 'fadeIn', 0.6);
        
        // Cards animation with staggered delay
        $('.hover-card').each(function(index) {
            animateCSS(this, 'fadeInUp', 0.2 + (index * 0.1));
        });
        
        // Gallery animation
        animateCSS('.mt-5 h3', 'fadeIn', 0.8);
        
        $('.gallery-item').each(function(index) {
            animateCSS(this, 'zoomIn', 0.5 + (index * 0.15));
        });
        
        // Add smooth scrolling
        $('a[href*="#"]').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top - 100
            }, 500, 'linear');
        });
        
        // Hover effect pada badges
        $('.badge').hover(function() {
            $(this).css('cursor', 'pointer');
        });
        
        // Add subtle parallax effect to gallery items
        $(window).scroll(function() {
            const scrolled = $(window).scrollTop();
            $('.gallery-item').each(function() {
                const $this = $(this);
                const offsetTop = $this.offset().top;
                if (scrolled > offsetTop - 600 && scrolled < offsetTop + 600) {
                    const yPos = (scrolled - offsetTop) / 10;
                    $this.css('transform', `translateY(${yPos}px) scale(1.01)`);
                }
            });
        });
    });
</script>
@endsection