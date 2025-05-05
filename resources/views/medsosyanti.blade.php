@extends('layoutyanti')

@section('content')
<div class="social-media-container">
    <!-- Profile yanti -->
    <section class="profile-section">
        <div class="profile-pic">
            <img src="/img/ig2.jpg" alt="Yanti's Profile">
        </div>
        <div class="profile-info">
            <h1>Yanti's Social Hub</h1>
            <p class="bio">✨Another me✨</p>
        </div>
    </section>

    <!-- link sosmed -->
    <section class="social-links-section">
        <h2 class="section-title">Connect With Me</h2>
        <div class="social-grid">
            <!-- Instagram -->
            <a href="https://www.instagram.com/yanntiisy?igsh=Mm5kb3I1NDNiemxm" target="_blank" class="social-card instagram">
                <div class="social-icon">
                    <i class="fab fa-instagram"></i>
                </div>
                <div class="social-info">
                    <h3>Instagram</h3>
                    <p>@yanntiisy</p>
                    <span class="followers">1,143 followers</span>
                </div>
                <div class="social-arrow">
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>

            <!-- TikTok -->
            <a href="https://www.tiktok.com/@yntsyy__?_t=ZS-8w6EIPT8bAO&_r=1_" target="_blank" class="social-card tiktok">
                <div class="social-icon">
                    <i class="fab fa-tiktok"></i>
                </div>
                <div class="social-info">
                    <h3>TikTok</h3>
                    <p>@yntsyy_</p>
                    <span class="followers">378 followers</span>
                </div>
                <div class="social-arrow">
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>

            <!-- WhatsApp -->
            <a href="https://wa.me/6281553143025" target="_blank" class="social-card whatsapp">
                <div class="social-icon">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <div class="social-info">
                    <h3>WhatsApp</h3>
                    <p>+62 815-5114-3025</p>
                    <span class="followers">Chat langsung</span>
                </div>
                <div class="social-arrow">
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
        </div>
    </section>

    <!-- postingan -->
    <section class="posts-section">
        <h2 class="section-title">Recent Highlights</h2>
        <div class="posts-grid">
            <div class="post-card">
                <div class="post-image" style="background-image: url('/img/ig4.jpg')">
                    <div class="post-likes">
                        <i class="fas fa-heart"></i> 214
                    </div>
                </div>
                <div class="post-info">
                    <p class="post-date">2 days ago</p>
                    <p class="post-caption">Sunset vibes 🌅</p>
                </div>
            </div>

            <div class="post-card">
                <div class="post-image" style="background-image: url('/img/ig5.jpg')">
                    <div class="post-likes">
                        <i class="fas fa-heart"></i> 221
                    </div>
                </div>
                <div class="post-info">
                    <p class="post-date">5 days ago</p>
                    <p class="post-caption">Coffe Time☕</p>
                </div>
            </div>

            <div class="post-card">
                <div class="post-image" style="background-image: url('/img/ig3.jpg')">
                    <div class="post-likes">
                        <i class="fas fa-heart"></i> 215
                    </div>
                </div>
                <div class="post-info">
                    <p class="post-date">1 week ago</p>
                    <p class="post-caption">Weekend🍪</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('styles')
<style>
    /* Base Styles */
    .social-media-container {
        font-family: 'Poppins', sans-serif;
        color: #5a3d3d;
        line-height: 1.6;
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff5f7; /* Soft pink background */
    }

    /* Profile Section */
    .profile-section {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 30px 20px;
        background: linear-gradient(135deg, #ffd6e0 0%, #ffc0cb 100%);
        border-radius: 20px;
        margin-bottom: 30px;
        box-shadow: 0 10px 20px rgba(255, 182, 193, 0.2);
    }

    .profile-pic {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        overflow: hidden;
        border: 5px solid white;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .profile-pic img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .profile-info h1 {
        font-size: 2rem;
        margin-bottom: 10px;
        color: #d23669;
    }

    .bio {
        font-size: 1rem;
        color: #8b5d5d;
        margin-bottom: 20px;
    }

    .stats {
        display: flex;
        justify-content: center;
        gap: 30px;
    }

    .stat-item {
        text-align: center;
    }

    .number {
        display: block;
        font-size: 1.3rem;
        font-weight: 700;
        color: #d23669;
    }

    .label {
        font-size: 0.8rem;
        color: #8b5d5d;
    }

    /* Section Title */
    .section-title {
        font-size: 1.5rem;
        text-align: center;
        margin: 40px 0 30px;
        color: #d23669;
        position: relative;
    }

    .section-title::after {
        content: '';
        display: block;
        width: 60px;
        height: 3px;
        background: linear-gradient(to right, #ff9a9e, #fad0c4);
        margin: 10px auto;
    }

    /* link sosmed */
    .social-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
        margin-bottom: 40px;
    }

    .social-card {
        display: flex;
        align-items: center;
        background: white;
        padding: 20px;
        border-radius: 15px;
        text-decoration: none;
        color: #5a3d3d;
        box-shadow: 0 5px 15px rgba(255, 182, 193, 0.2);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .social-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(255, 182, 193, 0.3);
    }

    .social-icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        margin-right: 15px;
        color: white;
    }

    .instagram .social-icon {
        background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
    }

    .twitter .social-icon {
        background: #1DA1F2;
    }

    .tiktok .social-icon {
        background: #000000;
    }

    .pinterest .social-icon {
        background: #E60023;
    }
    
    .whatsapp .social-icon {
        background: #25D366; /* Warna hijau WhatsApp */
    }

    .social-info h3 {
        margin: 0 0 5px 0;
        font-size: 1.1rem;
    }

    .social-info p {
        margin: 0;
        font-size: 0.9rem;
        color: #8b5d5d;
    }

    .followers {
        font-size: 0.8rem;
        color: #d23669;
        margin-top: 5px;
        display: block;
    }

    .social-arrow {
        margin-left: auto;
        color: #d23669;
    }

    /* postingan*/
    .posts-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }

    .post-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(255, 182, 193, 0.2);
        transition: transform 0.3s ease;
    }

    .post-card:hover {
        transform: translateY(-5px);
    }

    .post-image {
        height: 200px;
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .post-likes {
        position: absolute;
        bottom: 10px;
        right: 10px;
        background: rgba(255, 255, 255, 0.8);
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 0.8rem;
        color: #d23669;
    }

    .post-info {
        padding: 15px;
    }

    .post-date {
        font-size: 0.7rem;
        color: #8b5d5d;
        margin-bottom: 5px;
    }

    .post-caption {
        margin: 0;
        font-size: 0.9rem;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .profile-info h1 {
            font-size: 1.7rem;
        }

        .stats {
            gap: 20px;
        }

        .social-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 480px) {
        .profile-section {
            padding: 20px 15px;
        }

        .profile-info h1 {
            font-size: 1.5rem;
        }

        .stats {
            gap: 15px;
        }

        .number {
            font-size: 1.1rem;
        }
    }
</style>
@endsection

@section('scripts')
<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
@endsection