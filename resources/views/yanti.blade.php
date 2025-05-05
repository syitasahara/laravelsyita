@extends('layoutyanti')

@section('content')
<div class="home-container">
    <!-- bagian awal -->
    <section class="hero-section">
        <div class="hero-content">
            <h1>Selamat Datang di Dunia Yanti!</h1>
            <p class="tagline">Mari mengenal aku dengan lebih banyak warna dan cerita</p>
            <div class="cta-group">
                <a href="#about" class="cta-button">Jelajahi Sekarang</a>
                <a href="#" class="cta-button-secondary">Lihat Galeri</a>
            </div>
        </div>
        <div class="hero-image">
            <img src="/img/image_yanti.jpg" alt="Yanti Aisyah" class="profile-img">
            <div class="shape-decoration"></div>
        </div>
    </section>

    <!--interaksi -->
    <section class="features-section">
        <div class="section-header">
            <h2 class="section-title">Mengapa Berinteraksi dengan Yanti?</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">💡</div>
                <h3>Problem Solver</h3>
                <p>Memberikan solusi out of the box buat masalahmu eaa</p>
                <div class="feature-wave"></div>
            </div>
            <div class="feature-card">
                <div class="feature-icon">👂</div>
                <h3>Pendengar Empatik</h3>
                <p>Selalu siap mendengarkan dengan hati dan memberikan respons yang tulus (someone to talk)</p>
                <div class="feature-wave"></div>
            </div>
            <div class="feature-card">
                <div class="feature-icon">☕</div>
                <h3>Coffee Enthusiast</h3>
                <p>Bisa jadi temen ngopii walaupun pesennya matcha</p>
                <div class="feature-wave"></div>
            </div>
        </div>
    </section>

    <!-- tentang saya -->
    <section id="about" class="about-section">
        <div class="about-image">
            <img src="/img/img_2.jpg" alt="Tentang Yanti" class="about-img">
            <div class="floating-dots"></div>
        </div>
        <div class="about-content">
            <h2 class="section-title">Hai, Aku Yanti!</h2>
            <p class="highlight-text">Mahasiswi S1 Teknik Informatika di Universitas Negeri Surabaya yang sedang jatuh cinta dengan dunia kopi dan pemrograman (wkwk)</p>
            <p>Selain berkutat dengan kode,saya suka menjelajahi kedai kopi di Surabaya sambil mencari inspirasi biar nggak stress mikirin tugas.</p>
            <div class="stats-container">
                <div class="stat-item">
                    <span class="stat-number">100+</span>
                    <span class="stat-label">Cangkir Kopi</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">∞</span>
                    <span class="stat-label">Ide Kreatif</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">24/7</span>
                    <span class="stat-label">Semangat Belajar</span>
                </div>
            </div>
            <a href="/biodatayanti" class="cta-button-outline">Kenali Saya Lebih Dalam →</a>
        </div>
    </section>
</div>
@endsection

@section('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    
    :root {
        --primary: #4361ee;
        --secondary: #3f37c9;
        --accent: #f72585;
        --light: #f8f9fa;
        --dark: #212529;
        --gradient: linear-gradient(135deg, #4361ee 0%, #3f37c9 50%, #f72585 100%);
    }
    
    .home-container {
        font-family: 'Poppins', sans-serif;
        color: var(--dark);
        line-height: 1.7;
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        overflow-x: hidden;
    }

    h1, h2, h3, h4 {
        font-weight: 700;
        line-height: 1.3;
    }

    .section-title {
        position: relative;
        display: inline-block;
        margin-bottom: 30px;
        font-size: 2.2rem;
        background: var(--gradient);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .section-title::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -10px;
        width: 50%;
        height: 4px;
        background: var(--gradient);
        border-radius: 2px;
    }

    .section-subtitle {
        color: #6c757d;
        font-size: 1.1rem;
        margin-bottom: 40px;
        text-align: center;
    }

    /* Button Styles */
    .cta-button, .cta-button-secondary, .cta-button-outline {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 12px 30px;
        border-radius: 50px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        margin-top: 15px;
        font-size: 1rem;
        border: none;
        cursor: pointer;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .cta-button {
        background: var(--gradient);
        color: white;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .cta-button::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #3f37c9 0%, #f72585 100%);
        z-index: -1;
        transition: opacity 0.4s ease;
        opacity: 0;
    }

    .cta-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(67, 97, 238, 0.3);
    }

    .cta-button:hover::after {
        opacity: 1;
    }

    .cta-button-secondary {
        background: white;
        color: var(--primary);
        border: 2px solid var(--primary);
        margin-left: 15px;
    }

    .cta-button-secondary:hover {
        background: var(--primary);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(67, 97, 238, 0.2);
    }

    .cta-button-outline {
        background: transparent;
        color: var(--primary);
        border: 2px solid var(--primary);
        position: relative;
        overflow: hidden;
    }

    .cta-button-outline:hover {
        color: white;
        transform: translateY(-3px);
    }

    .cta-button-outline::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: var(--gradient);
        transition: all 0.4s ease;
        z-index: -1;
    }

    .cta-button-outline:hover::before {
        left: 0;
    }

    .cta-group {
        display: flex;
        align-items: center;
        margin-top: 30px;
    }

    /* bagian awal */
    .hero-section {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 80px 0;
        gap: 60px;
        position: relative;
    }

    .hero-content {
        flex: 1;
        z-index: 2;
    }

    .hero-content h1 {
        font-size: 3.2rem;
        margin-bottom: 20px;
        line-height: 1.2;
        background: var(--gradient);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .tagline {
        font-size: 1.3rem;
        color: #495057;
        margin-bottom: 30px;
        font-weight: 300;
    }

    .hero-image {
        flex: 1;
        position: relative;
        z-index: 1;
    }

    .profile-img {
        max-width: 100%;
        border-radius: 20px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        position: relative;
        z-index: 2;
        transform: perspective(1000px) rotateY(-10deg);
        transition: transform 0.5s ease;
    }

    .hero-image:hover .profile-img {
        transform: perspective(1000px) rotateY(0deg);
    }

    .shape-decoration {
        position: absolute;
        top: -30px;
        right: -30px;
        width: 400px;
        height: 400px;
        background: linear-gradient(135deg, rgba(67, 97, 238, 0.1) 0%, rgba(63, 55, 201, 0.1) 50%, rgba(247, 37, 133, 0.1) 100%);
        border-radius: 30px;
        z-index: 1;
        animation: float 6s ease-in-out infinite;
    }

    /* interaksi */
    .features-section {
        padding: 100px 0;
        background: linear-gradient(to bottom, #f8f9fa 0%, white 100%);
        margin: 60px 0;
        position: relative;
        overflow: hidden;
    }

    .features-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 10px;
        background: var(--gradient);
    }

    .section-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        padding: 0 20px;
    }

    .feature-card {
        background: white;
        padding: 40px 30px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(0, 0, 0, 0.03);
    }

    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    }

    .feature-icon {
        font-size: 3rem;
        margin-bottom: 25px;
        display: inline-block;
        transition: transform 0.3s ease;
    }

    .feature-card:hover .feature-icon {
        transform: scale(1.2);
    }

    .feature-card h3 {
        font-size: 1.5rem;
        margin-bottom: 15px;
        color: var(--dark);
    }

    .feature-card p {
        color: #6c757d;
        font-size: 1rem;
    }

    .feature-wave {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: var(--gradient);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.4s ease;
    }

    .feature-card:hover .feature-wave {
        transform: scaleX(1);
    }

    /* tentang saya */
    .about-section {
        display: flex;
        align-items: center;
        gap: 60px;
        padding: 80px 0;
        position: relative;
    }

    .about-image {
        flex: 1;
        position: relative;
    }

    .about-img {
        max-width: 100%;
        border-radius: 20px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        transition: transform 0.5s ease;
    }

    .about-image:hover .about-img {
        transform: scale(1.03);
    }

    .floating-dots {
        position: absolute;
        top: -20px;
        left: -20px;
        width: 150px;
        height: 150px;
        background-image: radial-gradient(#4361ee 2px, transparent 2px);
        background-size: 20px 20px;
        z-index: -1;
        opacity: 0.3;
        animation: float 4s ease-in-out infinite alternate;
    }

    .about-content {
        flex: 1;
    }

    .highlight-text {
        font-size: 1.1rem;
        background: rgba(67, 97, 238, 0.1);
        padding: 15px;
        border-radius: 10px;
        border-left: 4px solid var(--primary);
        margin-bottom: 25px;
    }

    .stats-container {
        display: flex;
        justify-content: space-between;
        margin: 30px 0;
        flex-wrap: wrap;
    }

    .stat-item {
        text-align: center;
        padding: 15px;
        min-width: 100px;
    }

    .stat-number {
        display: block;
        font-size: 2rem;
        font-weight: 700;
        color: var(--primary);
        margin-bottom: 5px;
    }

    .stat-label {
        font-size: 0.9rem;
        color: #6c757d;
    }

    /* animasi */
    @keyframes float {
        0% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-15px);
        }
        100% {
            transform: translateY(0px);
        }
    }

    /* Respon design */
    @media (max-width: 992px) {
        .hero-content h1 {
            font-size: 2.8rem;
        }
        
        .hero-section, .about-section {
            gap: 40px;
        }
    }

    @media (max-width: 768px) {
        .hero-section, .about-section {
            flex-direction: column;
            text-align: center;
        }
        
        .hero-content h1 {
            font-size: 2.5rem;
        }
        
        .section-title {
            font-size: 2rem;
        }
        
        .cta-group {
            justify-content: center;
        }
        
        .shape-decoration {
            width: 300px;
            height: 300px;
            right: -20px;
        }
        
        .about-image {
            margin-bottom: 40px;
        }
        
        .section-title::after {
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
        }
    }

    @media (max-width: 576px) {
        .hero-content h1 {
            font-size: 2.2rem;
        }
        
        .tagline {
            font-size: 1.1rem;
        }
        
        .cta-group {
            flex-direction: column;
        }
        
        .cta-button-secondary {
            margin-left: 0;
            margin-top: 15px;
        }
        
        .stats-container {
            flex-direction: column;
            align-items: center;
        }
        
        .stat-item {
            margin-bottom: 15px;
        }
    }
</style>
@endsection