<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Profil Yanti</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <style>
            :root {
                --soft-pink: #FFD1DC;
                --soft-pink-hover: #FFB6C1;
                --soft-pink-active: #FF9AAC;
                --dark-pink: #FF6B8B;
            }
            
            body {
                background-color: #FFF5F7;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            
            .navbar {
                background-color: var(--soft-pink) !important;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
                padding: 12px 0;
            }
            
            .navbar-brand {
                font-weight: 700;
                color: #FF6B8B !important;
                font-size: 1.5rem;
            }
            
            .navbar-nav {
                width: 100%;
                display: flex;
                justify-content: center;
                gap: 20px;
            }
            
            .nav-link {
                color: #FF6B8B !important;
                font-weight: 600;
                font-size: 1.1rem;
                padding: 10px 20px !important;
                border-radius: 25px;
                transition: all 0.3s ease;
                position: relative;
            }
            
            .nav-link:hover {
                background-color: var(--soft-pink-hover);
                transform: translateY(-2px);
            }
            
            .nav-link.active {
                background-color: var(--soft-pink-active);
                color: white !important;
            }
            
            .nav-link::after {
                content: '';
                position: absolute;
                width: 0;
                height: 2px;
                bottom: 0;
                left: 50%;
                background-color: var(--dark-pink);
                transition: all 0.3s ease;
            }
            
            .nav-link:hover::after {
                width: 80%;
                left: 10%;
            }
            
            .navbar-toggler {
                border-color: var(--dark-pink);
            }
            
            .navbar-toggler-icon {
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 107, 139, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
            }
            
            /*animasi navigasi */
            @keyframes fadeInDown {
                from {
                    opacity: 0;
                    transform: translateY(-10px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            
            .nav-item {
                animation: fadeInDown 0.5s ease forwards;
            }
            
            .nav-item:nth-child(1) { animation-delay: 0.1s; }
            .nav-item:nth-child(2) { animation-delay: 0.2s; }
            .nav-item:nth-child(3) { animation-delay: 0.3s; }
            .nav-item:nth-child(4) { animation-delay: 0.4s; }
            
            .container {
                padding-top: 2rem;
            }
            
            /* Responsive adjustments */
            @media (max-width: 992px) {
                .navbar-collapse {
                    background-color: #FFF5F7;
                    padding: 15px;
                    border-radius: 10px;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                    margin-top: 10px;
                }
            }
        </style>
        <!-- style tambahan -->
        @yield('styles')
    </head>
    <body>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/yanti">
                    <i class="fas fa-heart"></i> Yanti
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" 
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="/yanti">
                            <i class="fas fa-home"></i> Home
                        </a>
                        <a class="nav-link" href="/biodatayanti">
                            <i class="fas fa-user"></i> Biodata
                        </a>
                        <a class="nav-link" href="/makananyanti">
                            <i class="fas fa-utensils"></i> Makanan
                        </a>
                        <a class="nav-link" href="/medsosyanti">
                            <i class="fas fa-share-alt"></i> Media Sosial
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container">
            @yield('content')
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
        
        <script>
            $(document).ready(function() {
                var path = window.location.pathname;
                
                $('.navbar-nav .nav-link').each(function() {
                    if (this.getAttribute('href') === path) {
                        $(this).addClass('active');
                    }
                });
                
                $('.nav-link').hover(
                    function() {
                        $(this).find('i').addClass('fa-bounce');
                    },
                    function() {
                        $(this).find('i').removeClass('fa-bounce');
                    }
                );
            });
        </script>
        
        @yield('scripts')
    </body>
</html>