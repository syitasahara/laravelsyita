@extends('layoutyanti')

@section('content')
<div class="biodata-container">
    <!-- Profil yanti -->
    <section class="profile-header">
        <div class="profile-content">
            <div class="profile-avatar">
                <div class="avatar-frame">
                    <img src="/img/img_3.jpg" alt="Yanti Aisyah" class="avatar-img">
                </div>
            </div>
            <div class="profile-info">
                <h1 class="profile-name">Yanti Aisyah</h1>
                <p class="profile-title">Mahasiswi Teknik Informatika</p>
                <p class="profile-quote">"Universitas Negeri Surabaya"</p>
            </div>
        </div>
    </section>

    <div class="biodata-sections">
        <!-- tentang saya -->
        <section class="about-section">
            <h2 class="section-title">
                <i class="fas fa-user-graduate title-icon"></i>
                Tentang Saya
            </h2>
            
            <div class="about-grid">
                <div class="about-card intro-card">
                    <h3 class="card-title">Siapa Saya?</h3>
                    <div class="card-content">
                        <p>Mahasiswi aktif Teknik Informatika di Universitas Negeri Surabaya yang bersemangat dalam pengembangan web dan eksplorasi teknologi terkini.</p>
                    </div>
                </div>
                
                <div class="about-card info-card">
                    <h3 class="card-title">Informasi Pribadi</h3>
                    <div class="card-content">
                        <ul class="info-list">
                            <li>
                                <i class="fas fa-user info-icon"></i>
                                <span>Nama Lengkap:</span>
                                <strong>Yanti Aisyah</strong>
                            </li>
                            <li>
                                <i class="fas fa-birthday-cake info-icon"></i>
                                <span>Tanggal Lahir:</span>
                                <strong>02 Januari 2005</strong>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt info-icon"></i>
                                <span>Alamat:</span>
                                <strong>Mojokerto, Jawa Timur</strong>
                            </li>
                            <li>
                                <i class="fas fa-envelope info-icon"></i>
                                <span>Email:</span>
                                <strong>aisyahyanti75@gmail.com</strong>
                            </li>
                            <li>
                                <i class="fas fa-phone info-icon"></i>
                                <span>Telepon:</span>
                                <strong>+62 815 5314 3025</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- pendidikan -->
        <section class="education-section">
            <h2 class="section-title">
                <i class="fas fa-graduation-cap title-icon"></i>
                Riwayat Pendidikan
            </h2>
            
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-period">2023 - Sekarang</div>
                        <h3 class="timeline-title">S1 Teknik Informatika</h3>
                        <p class="timeline-school">Universitas Negeri Surabaya</p>
                        <p class="timeline-description">Mahasiswi aktif dengan fokus pada pengembangan web dan mobile applications.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-period">2020 - 2023</div>
                        <h3 class="timeline-title">Teknik Komputer & Jaringan</h3>
                        <p class="timeline-school">SMK Negeri 1 Pacitan</p>
                        <p class="timeline-description">Lulus dengan nilai rata-rata 88.00. Memperoleh sertifikasi jaringan komputer.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

@section('styles')
<style>
   
    :root {
        --primary: #FFB6C1;
        --primary-dark: #FF69B4; 
        --secondary: #FFD1DC; 
        --accent: #DB7093; 
        --light: #FFF5F5; 
        --dark: #4A4A4A; 
        --text: #666; 
        --text-light: #888; 
        --card-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }
    
    /* Typography */
    body {
        font-family: 'Poppins', sans-serif;
        color: var(--dark);
        line-height: 1.6;
        background-color: #FFF9F9;
    }
    
    h1, h2, h3 {
        font-weight: 600;
        margin-bottom: 0.5rem;
    }
    
    /* Profile yanti */
    .profile-header {
        background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        padding: 2rem 0;
        text-align: center;
        color: white;
        position: relative;
        overflow: hidden;
    }
    
    .profile-content {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 0 1rem;
    }
    
    .profile-avatar {
        margin-bottom: 1.5rem;
    }
    
    .avatar-frame {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        border: 4px solid white;
        overflow: hidden;
        margin: 0 auto;
        box-shadow: var(--card-shadow);
    }
    
    .avatar-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .profile-name {
        font-size: 2.2rem;
        margin-bottom: 0.5rem;
        color: white;
    }
    
    .profile-title {
        font-size: 1.1rem;
        margin-bottom: 1rem;
        opacity: 0.9;
    }
    
    .profile-quote {
        font-style: italic;
        max-width: 600px;
        margin: 0 auto 1.5rem;
        opacity: 0.9;
    }
    
    /* Stats */
    .profile-stats {
        display: flex;
        justify-content: center;
        gap: 2rem;
        margin-top: 1.5rem;
    }
    
    .stat-item {
        text-align: center;
    }
    
    .stat-number {
        display: block;
        font-size: 1.5rem;
        font-weight: 600;
        color: white;
    }
    
    .stat-label {
        font-size: 0.9rem;
        opacity: 0.9;
    }
    
    /* Main Content */
    .biodata-sections {
        max-width: 1000px;
        margin: 2rem auto;
        padding: 0 1.5rem;
    }
    
    /* Section Titles */
    .section-title {
        font-size: 1.5rem;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        color: var(--dark);
    }
    
    .title-icon {
        background: var(--primary-dark);
        color: white;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 0.8rem;
        font-size: 1rem;
    }
    
    /* tentang saya */
    .about-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.5rem;
        margin-bottom: 3rem;
    }
    
    @media (max-width: 768px) {
        .about-grid {
            grid-template-columns: 1fr;
        }
    }
    
    .about-card {
        background: white;
        border-radius: 10px;
        padding: 1.5rem;
        box-shadow: var(--card-shadow);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .about-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }
    
    .card-title {
        font-size: 1.2rem;
        margin-bottom: 1rem;
        color: var(--primary-dark);
        position: relative;
        padding-bottom: 0.5rem;
    }
    
    .card-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 40px;
        height: 3px;
        background: var(--primary);
    }
    

    /* pendidikan */
    .timeline {
        position: relative;
        padding-left: 30px;
        margin-bottom: 3rem;
    }
    
    .timeline::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 2px;
        background: linear-gradient(to bottom, var(--primary), var(--primary-dark));
    }
    
    .timeline-item {
        position: relative;
        margin-bottom: 2rem;
    }
    
    .timeline-item::before {
        content: '';
        position: absolute;
        left: -30px;
        top: 5px;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: var(--primary-dark);
        border: 3px solid white;
        box-shadow: 0 0 0 2px var(--primary);
    }
    
    .timeline-content {
        background: white;
        border-radius: 8px;
        padding: 1.5rem;
        box-shadow: var(--card-shadow);
    }
    
    .timeline-period {
        color: var(--primary-dark);
        font-weight: 500;
        margin-bottom: 0.3rem;
    }
    
    .timeline-title {
        font-size: 1.1rem;
        color: var(--dark);
        margin-bottom: 0.3rem;
    }
    
    .timeline-school {
        color: var(--accent);
        font-weight: 500;
        margin-bottom: 0.5rem;
    }
    
    .timeline-description {
        color: var(--text);
        font-size: 0.95rem;
    }
</style>
@endsection

@section('scripts')
<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
@endsection