@extends('layout')

@section('content')
<div class="container mt-5 mb-5">
    <div class="card shadow-lg border-0 rounded-lg overflow-hidden">
        <!-- Header dengan gradient ungu -->
        <div class="card-header text-white text-center py-4" style="background: linear-gradient(135deg, #8e6bbf 0%, #5a3d7a 100%);">
            <h2 class="fw-bold mb-0 text-white">Biodata Diri</h2>
        </div>
        
        <div class="card-body p-0">
            <div class="row g-0">
                <!-- Sidebar Profil -->
                <div class="col-lg-4 profile-sidebar">
                    <div class="p-4 text-center h-100 d-flex flex-column" style="background-color: #f9f6fe;">
                        <!-- Foto Profil dengan Border Gradien -->
                        <div class="profile-image mx-auto mb-4 position-relative">
                            <div class="profile-border">
                                <img src="{{ asset('img/foto_biodata.png') }}" alt="Foto Profil" class="img-fluid rounded-circle shadow" style="width: 180px; height: 180px; object-fit: cover; border: 5px solid white;">
                            </div>
                        </div>
                        
                        <h3 class="fw-bold mb-1" style="color: #5a3d7a;">Masyita Ika Sahara</h3>
                        <p class="text-muted mb-4">Mahasiswa S1 Teknik Informatika</p>
                        
                        <!-- Sosial Media Links -->
                        <div class="social-media d-flex justify-content-center gap-2 mb-4">
                            <a href="https://instagram.com/syitashr" class="btn btn-light btn-social">
                                <i class="fab fa-instagram" style="color: #8e6bbf;"></i>
                            </a>
                            <a href="mailto:masyitaika9@gmail.com" class="btn btn-light btn-social">
                                <i class="far fa-envelope" style="color: #8e6bbf;"></i>
                            </a>
                            <a href="wa.me/6281585616615" class="btn btn-light btn-social">
                                <i class="fas fa-phone" style="color: #8e6bbf;"></i>
                            </a>
                        </div>
                        
                        <!-- Kontak -->
                        <div class="quick-contact mt-auto">
                            <div class="card border-0 shadow-sm bg-white">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold mb-3" style="color: #5a3d7a;">
                                        <i class="fas fa-paper-plane me-2" style="color: #8e6bbf;"></i>Kontak Saya
                                    </h5>
                                    <div class="contact-item d-flex align-items-center mb-2">
                                        <div class="icon-box me-3">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div>
                                            <span>masyitaika9@gmail.com</span>
                                        </div>
                                    </div>
                                    <div class="contact-item d-flex align-items-center">
                                        <div class="icon-box me-3">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div>
                                            <span>+6281585616615</span>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 mt-3">
                                        <a href="{{ asset('CV SYITA.pdf') }}" download class="btn btn-light" style="border: 1px solid #d9c2ff; color: #5a3d7a;">
                                            <i class="fas fa-download me-2" style="color: #8e6bbf;"></i>CV
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Konten Utama -->
                <div class="col-lg-8">
                    <div class="p-4">
                        <ul class="nav nav-pills custom-tabs mb-4" id="biodata-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="personal-tab" data-bs-toggle="pill" data-bs-target="#personal" type="button" role="tab" aria-controls="personal" aria-selected="true">
                                    <i class="fas fa-user me-2"></i>Data Pribadi
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="pill" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
                                    <i class="fas fa-map-marker-alt me-2"></i>Alamat
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="education-tab" data-bs-toggle="pill" data-bs-target="#education" type="button" role="tab" aria-controls="education" aria-selected="false">
                                    <i class="fas fa-graduation-cap me-2"></i>Pendidikan
                                </button>
                            </li>
                        </ul>
                        
                        <div class="tab-content" id="biodata-tabContent">
                            <!-- Data Pribadi -->
                            <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                                <div class="bio-card">
                                    <div class="card-title d-flex align-items-center mb-4">
                                        <div class="icon-circle me-3">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <h4 class="mb-0 fw-bold" style="color: #5a3d7a;">Informasi Pribadi</h4>
                                    </div>
                                    
                                    <div class="ps-4 ms-2" style="border-left: 3px solid #e2d1f9;">
                                        <div class="row mb-4">
                                            <div class="col-md-5 fw-bold" style="color: #6a4b8a;">Nama Lengkap</div>
                                            <div class="col-md-7">Masyita Ika Sahara</div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-5 fw-bold" style="color: #6a4b8a;">Tempat, Tanggal Lahir</div>
                                            <div class="col-md-7">Surabaya, 04 Juli 2005</div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-5 fw-bold" style="color: #6a4b8a;">Jenis Kelamin</div>
                                            <div class="col-md-7">Perempuan</div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-5 fw-bold" style="color: #6a4b8a;">Agama</div>
                                            <div class="col-md-7">Islam</div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-5 fw-bold" style="color: #6a4b8a;">Umur</div>
                                            <div class="col-md-7">19 Tahun</div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-5 fw-bold" style="color: #6a4b8a;">Status</div>
                                            <div class="col-md-7">Mahasiswa</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Alamat & Kontak -->
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="bio-card">
                                    <div class="card-title d-flex align-items-center mb-4">
                                        <div class="icon-circle me-3">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <h4 class="mb-0 fw-bold" style="color: #5a3d7a;">Alamat & Kontak</h4>
                                    </div>
                                    
                                    <div class="ps-4 ms-2" style="border-left: 3px solid #e2d1f9;">
                                        <div class="row mb-4">
                                            <div class="col-md-4 fw-bold" style="color: #6a4b8a;">Alamat Lengkap</div>
                                            <div class="col-md-8">Jl. Raganata Perumahan Sawo Indah No. 10 Sawotratap Waru Sidoarjo</div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-4 fw-bold" style="color: #6a4b8a;">Kota</div>
                                            <div class="col-md-8">Sidoarjo</div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-4 fw-bold" style="color: #6a4b8a;">Provinsi</div>
                                            <div class="col-md-8">Jawa Timur</div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-4 fw-bold" style="color: #6a4b8a;">Email</div>
                                            <div class="col-md-8">masyitaika9@gmail.com</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-4 fw-bold" style="color: #6a4b8a;">No. Telepon</div>
                                            <div class="col-md-8">+6281585616615</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Pendidikan -->
                            <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
                                <div class="bio-card">
                                    <div class="card-title d-flex align-items-center mb-4">
                                        <div class="icon-circle me-3">
                                            <i class="fas fa-graduation-cap"></i>
                                        </div>
                                        <h4 class="mb-0 fw-bold" style="color: #5a3d7a;">Riwayat Pendidikan</h4>
                                    </div>
                                    
                                    <div class="timeline">
                                        <!-- UNESA -->
                                        <div class="timeline-item">
                                            <div class="timeline-dot"></div>
                                            <div class="timeline-content">
                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <h5 class="fw-bold mb-0" style="color: #6a4b8a;">Universitas Negeri Surabaya</h5>
                                                    <span class="badge" style="background-color: #e2d1f9; color: #5a3d7a;">2023 - Sekarang</span>
                                                </div>
                                                <p class="text-muted mb-2">S1 Teknik Informatika</p>
                                                <div class="card bg-light border-0 p-3 mt-2">
                                                    <div class="row g-0 align-items-center">
                                                        <div class="col-auto me-3">
                                                            <div style="width: 40px; height: 40px; background-color: #f3e9ff; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                                                <i class="fas fa-university" style="color: #8e6bbf;"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1" style="color: #6a4b8a;">Fakultas Teknik</h6>
                                                            <p class="small text-muted mb-0">Menempuh pendidikan tinggi dengan fokus pada pengembangan keterampilan di bidang teknologi informasi.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- SMAN 10 -->
                                        <div class="timeline-item">
                                            <div class="timeline-dot"></div>
                                            <div class="timeline-content">
                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <h5 class="fw-bold mb-0" style="color: #6a4b8a;">SMAN 10 Surabaya</h5>
                                                    <span class="badge" style="background-color: #e2d1f9; color: #5a3d7a;">2020 - 2023</span>
                                                </div>
                                                <p class="text-muted mb-2">Jurusan MIPA</p>
                                                <div class="card bg-light border-0 p-3 mt-2">
                                                    <div class="row g-0 align-items-center">
                                                        <div class="col-auto me-3">
                                                            <div style="width: 40px; height: 40px; background-color: #f3e9ff; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                                                <i class="fas fa-school" style="color: #8e6bbf;"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1" style="color: #6a4b8a;">Sekolah Menengah Atas</h6>
                                                            <p class="small text-muted mb-0">Menyelesaikan pendidikan menengah atas dengan fokus pada Matematika dan Ilmu Pengetahuan Alam.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Additional space for future additions -->
                                        <div class="timeline-item timeline-placeholder">
                                            <div class="timeline-dot timeline-dot-transparent"></div>
                                        </div>
                                    </div>
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
    /* Color Variables */
    :root {
        --primary-purple: #8e6bbf;
        --dark-purple: #5a3d7a;
        --light-purple: #e2d1f9;
        --lighter-purple: #f9f6fe;
        --hover-purple: #7d5ba6;
    }
    
    /* Card Styling */
    .card {
        border-radius: 15px;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 10px 20px rgba(142, 107, 191, 0.08);
    }
    
    /* Profile Sidebar Styling */
    .profile-sidebar {
        border-right: 1px solid #f0e6ff;
    }
    
    /* Profile Image Styling */
    .profile-image {
        margin-bottom: 1.5rem;
    }
    
    .profile-border {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        padding: 10px;
        background: linear-gradient(135deg, #8e6bbf 0%, #5a3d7a 100%);
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }
    
    .profile-image img:hover {
        transform: scale(1.02);
        transition: transform 0.3s ease;
    }
    
    /* Social Media Buttons */
    .btn-social {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #f0e6ff;
        transition: all 0.3s ease;
    }
    
    .btn-social:hover {
        transform: translateY(-3px);
        background-color: #8e6bbf;
        border-color: #8e6bbf;
    }
    
    .btn-social:hover i {
        color: white !important;
    }
    
    /* Custom Tabs */
    .custom-tabs {
        border-bottom: 1px solid #e2d1f9;
        gap: 10px;
    }
    
    .custom-tabs .nav-link {
        color: #6a4b8a;
        background-color: transparent;
        border: none;
        border-radius: 30px;
        padding: 10px 20px;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .custom-tabs .nav-link.active {
        color: white;
        background: linear-gradient(135deg, #8e6bbf 0%, #5a3d7a 100%);
        box-shadow: 0 4px 10px rgba(142, 107, 191, 0.2);
    }
    
    .custom-tabs .nav-link:hover:not(.active) {
        background-color: #f9f0ff;
    }
    
    /* Bio Card */
    .bio-card {
        padding: 1rem;
    }
    
    /* Icon Circles */
    .icon-circle {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #f9f0ff 0%, #e2d1f9 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .icon-circle i {
        color: #8e6bbf;
        font-size: 1.2rem;
    }
    
    .icon-box {
        width: 36px;
        height: 36px;
        background-color: #f3e9ff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .icon-box i {
        color: #8e6bbf;
    }
    
    /* Timeline Design */
    .timeline {
        position: relative;
        padding-left: 30px;
    }
    
    .timeline::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 2px;
        background-color: #e2d1f9;
    }
    
    .timeline-item {
        position: relative;
        padding-bottom: 30px;
    }
    
    .timeline-dot {
        position: absolute;
        left: -34px;
        top: 5px;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background-color: #8e6bbf;
        border: 3px solid white;
    }
    
    .timeline-dot-transparent {
        background-color: transparent;
        border-color: #e2d1f9;
    }
    
    .timeline-content {
        padding-left: 20px;
    }
    
    .timeline-placeholder {
        padding-bottom: 10px;
    }
    
    /* Quick Contact Card */
    .quick-contact .card {
        border-radius: 15px;
    }
    
    /* Responsive Adjustments */
    @media (max-width: 992px) {
        .profile-sidebar {
            border-right: none;
            border-bottom: 1px solid #f0e6ff;
        }
        
        .quick-contact {
            margin-top: 2rem;
            margin-bottom: 2rem;
        }
    }
    
    @media (max-width: 768px) {
        .timeline {
            padding-left: 20px;
        }
        
        .timeline-dot {
            left: -24px;
            width: 12px;
            height: 12px;
        }
    }

    /* Gunakan font Poppins untuk teks umum */
    body {
        font-family: 'Poppins', sans-serif;
    }

    /* Gunakan font Playfair Display untuk judul */
    h1, h2, h3, h4, h5, h6 {
        font-family: 'Playfair Display', serif;
        font-weight: 700;
    }

    /* Gaya khusus untuk nama */
    .fw-bold {
        font-family: 'Playfair Display', serif;
        font-weight: 700;
        color: var(--dark-purple);
    }
</style>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // Animasi fade in untuk card
        $('.card').addClass('animate__animated animate__fadeIn');
        
        // Animation for tab switching
        $('.nav-link').on('click', function() {
            $('.tab-pane').addClass('animate__animated animate__fadeIn');
        });
    });
</script>
@endsection