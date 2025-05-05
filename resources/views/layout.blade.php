<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Profil Syita</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
        <!-- Font Awesome untuk ikon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!-- jQuery untuk animasi -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Tempat untuk style tambahan dari halaman lain -->
        @yield('styles')
        <style>
            /* Styling untuk navigasi */
            .custom-navbar {
                background-color: #8e6bbf !important;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                padding: 15px 0;
                z-index: 1030; /* Pastikan navbar berada di atas elemen lain */
            }
            
            .custom-navbar .navbar-brand {
                font-weight: bold;
                color: white;
                font-size: 24px;
            }
            
            .custom-navbar .nav-link {
                color: white !important;
                font-weight: 500;
                margin: 0 12px;
                padding: 8px 16px;
                border-radius: 25px;
                transition: all 0.3s ease;
                position: relative;
            }
            
            .custom-navbar .nav-link:hover {
                background-color: rgba(255, 255, 255, 0.2);
                transform: translateY(-2px);
            }
            
            .custom-navbar .nav-link.active {
                background-color: white;
                color: #6c5ce7 !important;
            }
            
            .custom-navbar .nav-link i {
                margin-right: 6px;
            }
            
            /* Animasi untuk underline pada hover */
            .custom-navbar .nav-link::after {
                content: '';
                position: absolute;
                width: 0;
                height: 2px;
                bottom: 0;
                left: 50%;
                background-color: white;
                transition: all 0.3s ease;
            }
            
            .custom-navbar .nav-link:hover::after {
                width: 80%;
                left: 10%;
            }
            
            /* Style untuk footer */
            footer {
                background-color: #8e6bbf;
                color: white;
                padding: 20px 0;
                margin-top: 50px;
                text-align: center;
            }
            
            /* Menambahkan efek gradient pada container utama */
            .main-container {
                position: relative;
                min-height: calc(100vh - 150px);
                padding: 30px 0;
                background: linear-gradient(135deg, #f5f7fa 0%, #eef1f5 100%);
                border-radius: 0 0 20px 20px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            }
            
            /* Responsive adjustments */
            @media (max-width: 768px) {
                .custom-navbar .nav-link {
                    margin: 5px 0;
                }
            }
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg custom-navbar sticky-top">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <i class="fas fa-user-circle"></i> Profil Syita
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="/"><i class="fas fa-home"></i> Home</a>
                        <a class="nav-link" href="/biodata"><i class="fas fa-address-card"></i> Biodata</a>
                        <a class="nav-link" href="/hobi"><i class="fas fa-heart"></i> Hobi</a>
                        <a class="nav-link" href="/medsos"><i class="fas fa-share-alt"></i> Media Sosial</a>
                    </div>
                </div>
            </div>
        </nav>
        
        <!-- Container utama -->
        <div class="main-container">
            <div class="container">
                @yield('content')
            </div>
        </div>
        
        <!-- Footer -->
        <footer>
            <div class="container">
                <p>&copy; 2025 Profil Syita. All Rights Reserved.</p>
            </div>
        </footer>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
        
        <script>
            // Script untuk mendeteksi halaman aktif dan memberikan kelas active
            $(document).ready(function() {
                // Get current path and find target link
                var path = window.location.pathname;
                var target = $('.navbar-nav .nav-link[href="'+path+'"]');
                
                // Add active class to target link
                if (path == '/') {
                    $('.navbar-nav .nav-link[href="/"]').addClass('active');
                } else {
                    target.addClass('active');
                }
            });
        </script>
        
        <!-- Tempat untuk script tambahan dari halaman lain -->
        @yield('scripts')
    </body>
</html>