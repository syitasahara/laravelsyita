@extends('layout')

@section('content')
<div class="container mt-4">
    <!-- Profil -->
    <div class="card shadow-sm border-0 mb-5" style="background: linear-gradient(135deg, #f9f0ff 0%, #f3e9ff 100%); border-radius: 20px; overflow: hidden;">
        <div class="row g-0 align-items-center">
            <!-- Foto Profil -->
            <div class="col-md-4 text-center p-4">
                <div class="mx-auto mb-3" style="width: 180px; height: 180px; border-radius: 50%; overflow: hidden; border: 5px solid white; box-shadow: 0 4px 15px rgba(142, 107, 191, 0.3);">
                    <img src="{{ asset('img/foto_profil.png') }}" alt="Foto Profil" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>
            
            <!-- Info Profil -->
            <div class="col-md-8 p-4">
                <h1 class="text-dark fw-bold mb-2" style="color: #5a3d7a; font-size: 2.5rem;">MASYITA IKA SAHARA</h1>
                <p class="text-muted fs-5 mb-3">Mahasiswa S1 Prodi Teknik Informatika</p>
                
                <!-- Info Kontak -->
                <div class="d-flex flex-column flex-md-row flex-wrap gap-3 mb-4">
                    <div class="d-flex align-items-center">
                        <div class="icon-circle me-2" style="background-color: #8e6bbf;">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <span class="text-secondary">Waru, Sidoarjo Jawa Timur</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="icon-circle me-2" style="background-color: #8e6bbf;">
                            <i class="fas fa-envelope text-white"></i>
                        </div>
                        <span class="text-secondary">masyitaika9@gmail.com</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="icon-circle me-2" style="background-color: #8e6bbf;">
                            <i class="fas fa-phone text-white"></i>
                        </div>
                        <span class="text-secondary">+6281585616615</span>
                    </div>
                </div>
                <div class="d-flex flex-wrap gap-3">
                    <a href="mailto:masyitaika9@gmail.com" class="btn btn-primary px-4 py-2" style="background-color: #8e6bbf; border-color: #8e6bbf; border-radius: 50px;">
                        <i class="fas fa-envelope me-2"></i>Email Me
                    </a>
                    <a href="{{ asset('CV SYITA.pdf') }}" download class="btn btn-outline-primary px-4 py-2" style="border-color: #8e6bbf; color: #8e6bbf; border-radius: 50px;">
                        <i class="fas fa-download me-2"></i>Download CV
                    </a>
                    <div class="social-links">
                        <a href="https://www.instagram.com/syitashr" target="_blank" class="btn btn-icon" style="background-color: #c6a8e5; border-radius: 50%; width: 40px; height: 40px; display: inline-flex; align-items: center; justify-content: center;">
                            <i class="fab fa-instagram text-white"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Konten Utama -->
    <div class="row">
        <!-- Tentang Saya (Bagian Kiri) -->
        <div class="col-lg-8">
            <!-- Tentang Saya -->
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body p-4">
                    <div class="section-header mb-4">
                        <div class="section-icon" style="background-color: #f3e9ff;">
                            <i class="fas fa-user" style="color: #8e6bbf;"></i>
                        </div>
                        <h2 class="section-title" style="color: #5a3d7a;">Tentang Saya</h2>
                    </div>
                    <div class="ps-4 ms-2" style="border-left: 3px solid #e2d1f9;">
                        <p class="text-secondary mb-3" style="line-height: 1.8;">
                            Lulusan MIPA SMAN 10 Surabaya pada tahun 2023. Mahasiswa aktif S1 Teknik Informatika 
                            Universitas Negeri Surabaya yang bersemangat dan berorientasi pada hasil, dengan kemampuan 
                            menyelesaikan tugas secara teliti dan ulet.
                        </p>
                        <p class="text-secondary mb-3" style="line-height: 1.8;">
                            Saya merupakan pribadi yang mudah tertarik mempelajari hal baru, memiliki sifat pekerja keras, 
                            disiplin dan rajin, serta mampu bekerja dalam tim. Saya juga memiliki pengalaman bekerja sama 
                            dalam tim yang beragam dan manajemen waktu yang efektif.
                        </p>
                        <p class="text-secondary" style="line-height: 1.8;">
                            Aktif dalam organisasi dan beberapa kepanitiaan dengan kontribusi yang positif. Memiliki ketertarikan 
                            pada bidang Administrasi terutama pada Administrasi Kesekretariatan dan bidang sosial.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Pendidikan -->
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body p-4">
                    <div class="section-header mb-4">
                        <div class="section-icon" style="background-color: #f3e9ff;">
                            <i class="fas fa-graduation-cap" style="color: #8e6bbf;"></i>
                        </div>
                        <h2 class="section-title" style="color: #5a3d7a;">Pendidikan</h2>
                    </div>
                    <div class="ps-4">
                        <div class="timeline">
                            <div class="timeline-item mb-4">
                                <div class="timeline-badge" style="background-color: #8e6bbf;"></div>
                                <div class="timeline-content p-3" style="background-color: #f9f5ff; border-radius: 10px;">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h5 class="fw-bold mb-0" style="color: #6a4b8a;">Universitas Negeri Surabaya</h5>
                                        <span class="badge rounded-pill" style="background-color: #e2d1f9; color: #5a3d7a;">2023 - Sekarang</span>
                                    </div>
                                    <p class="text-muted mb-1">S1 Teknik Informatika</p>
                                    <p class="text-secondary small mb-0">Fakultas Teknik</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-badge" style="background-color: #8e6bbf;"></div>
                                <div class="timeline-content p-3" style="background-color: #f9f5ff; border-radius: 10px;">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h5 class="fw-bold mb-0" style="color: #6a4b8a;">SMAN 10 Surabaya</h5>
                                        <span class="badge rounded-pill" style="background-color: #e2d1f9; color: #5a3d7a;">2020 - 2023</span>
                                    </div>
                                    <p class="text-muted mb-1">Jurusan MIPA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Keamampuan dan Skill (Kolom kanan) -->
        <div class="col-lg-4">
            <!-- Skills -->
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body p-4">
                    <div class="section-header mb-4">
                        <div class="section-icon" style="background-color: #f3e9ff;">
                            <i class="fas fa-code" style="color: #8e6bbf;"></i>
                        </div>
                        <h2 class="section-title" style="color: #5a3d7a;">Kemampuan</h2>
                    </div>
                    <div class="ps-4">
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="text-dark">Microsoft Office</span>
                                <span class="text-muted">90%</span>
                            </div>
                            <div class="progress" style="height: 8px; border-radius: 4px;">
                                <div class="progress-bar" role="progressbar" style="width: 90%; background-color: #8e6bbf;"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="text-dark">Kerja Tim</span>
                                <span class="text-muted">80%</span>
                            </div>
                            <div class="progress" style="height: 8px; border-radius: 4px;">
                                <div class="progress-bar" role="progressbar" style="width: 80%; background-color: #8e6bbf;"></div>
                            </div>
                        </div>
                        
                        <!-- Skill Item -->
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="text-dark">Manajemen Waktu</span>
                                <span class="text-muted">85%</span>
                            </div>
                            <div class="progress" style="height: 8px; border-radius: 4px;">
                                <div class="progress-bar" role="progressbar" style="width: 85%; background-color: #8e6bbf;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Fakta singkat -->
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <div class="section-header mb-4">
                        <div class="section-icon" style="background-color: #f3e9ff;">
                            <i class="fas fa-star" style="color: #8e6bbf;"></i>
                        </div>
                        <h2 class="section-title" style="color: #5a3d7a;">Fakta Saya</h2>
                    </div>
                    <div class="ps-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="fact-icon me-3" style="background-color: #f3e9ff; color: #8e6bbf;">
                                <i class="fas fa-birthday-cake"></i>
                            </div>
                            <div>
                                <h6 class="mb-0" style="color: #6a4b8a;">Tanggal Lahir</h6>
                                <p class="text-muted mb-0">4 Juli 2005</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="fact-icon me-3" style="background-color: #f3e9ff; color: #8e6bbf;">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div>
                                <h6 class="mb-0" style="color: #6a4b8a;">Minat</h6>
                                <p class="text-muted mb-0">Teknologi, Administrasi, dan Sosial</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Kenali Lebih Lanjut mengarah ke biodata--}}
            <div class="text-center mt-4">
                <a href="/biodata" class="btn btn-primary px-4 py-2" style="background-color: #8e6bbf; border-color: #8e6bbf; border-radius: 50px;">
                    <i class="fas fa-arrow-right me-2"></i>Kenali Lebih Lanjut
                </a>
            </div>
        </div>
    </div>
</div>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    h1, h2, h3, h4, h5, h6 {
        font-weight: 600;
    }

    p, span, a, li {
        font-weight: 400;
    }

    .fw-bold {
        font-weight: 700 !important;
    }

    .card {
        border-radius: 15px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
    }
    
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(142, 107, 191, 0.15);
    }
    
    .btn-primary:hover {
        background-color: #7d5ba6 !important;
        border-color: #7d5ba6 !important;
    }
    
    .btn-outline-primary:hover {
        background-color: #8e6bbf !important;
        color: white !important;
    }
    
    .section-header {
        display: flex;
        align-items: center;
    }
    
    .section-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
    }
    
    .section-title {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 0;
    }
    
    .icon-circle {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .timeline {
        position: relative;
        padding-left: 30px;
    }
    
    .timeline::before {
        content: '';
        position: absolute;
        left: 7px;
        top: 0;
        bottom: 0;
        width: 2px;
        background-color: #e2d1f9;
    }
    
    .timeline-item {
        position: relative;
        margin-bottom: 20px;
    }
    
    .timeline-badge {
        position: absolute;
        left: -30px;
        top: 15px;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background-color: #8e6bbf;
        z-index: 1;
    }
    
    .fact-icon {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.9rem;
    }
    
    @media (max-width: 768px) {
        .section-title {
            font-size: 1.3rem;
        }
        
        .card-body {
            padding: 1.5rem;
        }
    }
</style>
@endsection