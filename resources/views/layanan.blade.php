<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="https://tse3.mm.bing.net/th/id/OIP.pGnjqUW5JX2oohZ4_J62DQHaFj?rs=1&pid=ImgDetMain&o=7&rm=3">
    <title>Layanan - Dinas Sosial</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fff;
            color: #333;
        }

        /* Header Styles */
        .header {
            background-color: #7d8471;
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-section {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .logo-section img {
            height: 40px;
            width: 40px;
        }

        .logo {
            width: 50px;
            height: 50px;
            background: #fff;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .logo::before {
            content: '';
            width: 30px;
            height: 30px;
            background: linear-gradient(45deg, #e74c3c, #3498db, #f39c12);
            border-radius: 4px;
        }

        .header-text h1 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.2rem;
        }

        /* Mobile Hamburger Menu */
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            padding: 5px;
            z-index: 1002;
        }

        .hamburger span {
            width: 25px;
            height: 3px;
            background: white;
            margin: 3px 0;
            transition: 0.3s;
        }

        .hamburger.active span:nth-child(1) {
            transform: rotate(-45deg) translate(-5px, 6px);
        }

        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active span:nth-child(3) {
            transform: rotate(45deg) translate(-5px, -6px);
        }

        .nav-menu {
            display: flex;
            gap: 0;
            align-items: center;
            position: relative;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            padding: 0.8rem 1.5rem;
            transition: all 0.3s ease;
            border-radius: 0;
            font-weight: 500;
        }

        .nav-menu a:hover,
        .nav-menu a.active {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .nav-menu a.active {
            background-color: #fff;
            color: #7d8471;
        }

        /* Profile Dropdown Styles */
        .profile-dropdown {
            position: relative;
            margin-left: 1rem;
        }

        .profile-btn {
            background: none;
            border: none;
            color: white;
            cursor: pointer;
            padding: 0.8rem 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            border-radius: 8px;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .profile-btn:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .profile-btn:focus {
            outline: none;
        }

        .profile-icon {
            width: 20px;
            height: 20px;
        }

        .dropdown-arrow {
            width: 16px;
            height: 16px;
            transition: transform 0.3s ease;
        }

        /* Show dropdown on click - using :focus-within */
        .profile-dropdown:focus-within .dropdown-menu,
        .profile-dropdown.show .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .profile-dropdown:focus-within .dropdown-arrow,
        .profile-dropdown.show .dropdown-arrow {
            transform: rotate(180deg);
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            right: 0;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            min-width: 180px;
            overflow: hidden;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s ease;
            z-index: 1000;
            margin-top: 0.5rem;
        }

        .dropdown-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.875rem 1.25rem;
            color: #4a5568;
            text-decoration: none;
            transition: all 0.2s ease;
            background: none;
            border: none;
            width: 100%;
            text-align: left;
            font-size: 0.95rem;
            font-weight: 500;
            cursor: pointer;
        }

        .dropdown-item:hover {
            background-color: #f7fafc;
            color: #7d8471;
        }

        .dropdown-icon {
            width: 18px;
            height: 18px;
            flex-shrink: 0;
        }

        .dropdown-form {
            margin: 0;
            padding: 0;
        }

        .logout-item {
            border-top: 1px solid #e2e8f0;
            color: #e53e3e;
            font-family: inherit;
        }

        .logout-item:hover {
            background-color: #fed7d7;
            color: #c53030;
        }

        /* MAIN CONTENT */
        .main-content {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            padding: 30px;
            flex-wrap: wrap;
        }

        .content-section {
            flex: 1;
            margin: 20px;
            text-align: center;
            min-width: 250px;
        }

        .content-section.left h2 {
            margin-bottom: 20px;
        }

        .price {
            font-size: 40px;
            font-weight: bold;
            margin: 10px 0;
        }

        .center-section {
            text-align: center;
        }

        .dinsos-badge {
            background-color: #7d8471;
            color: black;
            font-weight: bold;
            padding: 10px 30px;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 20px;
        }

        .service-item {
            background-color: #7d8471;
            color: black;
            padding: 8px;
            margin: 10px auto;
            border-radius: 20px;
            width: 120px;
            font-weight: bold;
        }

        .right-section {
            text-align: left;
        }

        .right-section h2 {
            margin-bottom: 15px;
        }

        .right-section p {
            margin-bottom: 10px;
            line-height: 1.5;
        }

        /* FOOTER */
        .footer-top {
            margin-top: 50px;
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            padding: 20px;
        }

        .footer-top img {
            height: 40px;
        }

        .footer {
            margin-top: auto;
            background-color: #7d8471;
            color: white;
            padding: 1rem 0;
            text-align: center;
            font-size: 0.9rem;
            /* bisa disesuaikan */
        }

        .footer-section a:hover {
            color: white;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .hamburger {
                display: flex;
            }

            .header-content {
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
            }

            .nav-menu {
                position: fixed;
                top: 0;
                right: -100%;
                height: 100vh;
                width: 280px;
                background-color: #7d8471;
                flex-direction: column;
                justify-content: flex-start;
                align-items: stretch;
                padding-top: 80px;
                transition: right 0.3s ease;
                box-shadow: -2px 0 10px rgba(0, 0, 0, 0.1);
                z-index: 1000;
            }

            .nav-menu.active {
                right: 0;
            }

            .nav-menu a {
                padding: 1rem 2rem;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
                width: 100%;
                text-align: left;
            }

            .hero-title {
                font-size: 2rem;
            }

            .hero-subtitle {
                font-size: 1.1rem;
            }

            .team-grid {
                grid-template-columns: 1fr;
            }

            .misi-list li {
                padding-left: 2.5rem;
            }

            .misi-list li::before {
                width: 1.5rem;
                height: 1.5rem;
                font-size: 0.8rem;
            }
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo-section">
                    <img src="https://tse3.mm.bing.net/th/id/OIP.pGnjqUW5JX2oohZ4_J62DQHaFj?rs=1&pid=ImgDetMain&o=7&rm=3"
                        alt="Logo Dinas Sosial" />
                    <div class="header-text">
                        <h1>DINAS SOSIAL</h1>
                    </div>
                </div>

                <!-- Mobile Hamburger -->
                <div class="hamburger" id="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <nav class="nav-menu" id="navMenu">
                    <a href="{{ url('/home') }}" onclick="showPage('home')">Home</a>
                    <a href="{{ url('/profil') }}" onclick="showPage('profil')">Profil</a>
                    <a href="{{ url('/layanan') }}" onclick="showPage('layanan')" class="active">Layanan</a>
                    <a href="{{ url('/pengaduan') }}" onclick="showPage('pengaduan')">Pengaduan</a>
                    <a href="{{ url('/kontak') }}" onclick="showPage('kontak')">Kontak</a>
                    <div class="profile-dropdown">
                        <button class="profile-btn" id="profileButton">
                            <svg class="profile-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                            </svg>
                            <svg class="dropdown-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path d="M7 10l5 5 5-5z" />
                            </svg>
                        </button>
                        <div class="dropdown-menu" id="profileDropdown">

                            <form method="POST" action="{{ route('logout') }}" class="dropdown-form">
                                @csrf
                                <button type="submit" class="dropdown-item logout-item">
                                    <svg class="dropdown-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path
                                            d="M10.09 15.59L11.5 17l5-5-5-5-1.41 1.41L12.67 11H3v2h9.67l-2.58 2.59zM19 3H5c-1.11 0-2 .9-2 2v4h2V5h14v14H5v-4H3v4c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z" />
                                    </svg>
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <div class="main-content">
        <!-- Kiri -->
        <div class="content-section left">
            <h2>Layanan Kami <br>Bebas Biaya</h2>
            <div class="price">Rp 0,</div>
            <div>GRATIS</div>
        </div>

        <!-- Tengah -->
        <div class="content-section center-section">
            <div class="dinsos-badge">DINSOS</div>
            <h3>MOTO LAYANAN <br>SEGER DAN SEHAT</h3>
            <div class="service-item">Segera</div>
            <div class="service-item">Gesit</div>
            <div class="service-item">Ramah</div>
            <div class="service-item">Sepenuh Hati</div>
        </div>

        <!-- Kanan -->
        <div class="content-section right-section">
            <h2>Sekretariat</h2>
            <p>Layanan yang ada pada Sekretariat yaitu:</p>
            <p>
                a. Pelayanan Administrasi Dinas;<br>
                b. Pelayanan Informasi Publik;<br>
                c. Pelayanan Rapat.
            </p>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="footer-top">
        <img src="http://fc06.deviantart.net/fs71/i/2013/297/2/e/logo_pemerintah_propinsi_jawa_barat__indonesia_by_si_upoy-d6rnfsy.png"
            alt="Dinsos Jabar">
        <img src="https://pelayanansosial.kotabogor.go.id/assets/img/bogor.png" alt="Logo Bogor">

    </div>
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Dinas Sosial Jawa Barat. All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const hamburger = document.getElementById('hamburger');
            const navMenu = document.getElementById('navMenu');

            hamburger.addEventListener('click', function() {
                hamburger.classList.toggle('active');
                navMenu.classList.toggle('active');
            });

            // Close mobile menu when clicking outside
            document.addEventListener('click', function(e) {
                if (!hamburger.contains(e.target) && !navMenu.contains(e.target)) {
                    hamburger.classList.remove('active');
                    navMenu.classList.remove('active');
                }
            });

            // Close mobile menu when window is resized to desktop
            window.addEventListener('resize', function() {
                if (window.innerWidth > 768) {
                    hamburger.classList.remove('active');
                    navMenu.classList.remove('active');
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const dropdown = document.querySelector('.profile-dropdown');
            const button = dropdown.querySelector('.profile-btn');
            const menu = dropdown.querySelector('.dropdown-menu');

            // Toggle dropdown on button click
            button.addEventListener('click', function(e) {
                e.stopPropagation();
                dropdown.classList.toggle('show');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!dropdown.contains(e.target)) {
                    dropdown.classList.remove('show');
                }
            });

            // Keep dropdown open when clicking inside menu
            menu.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        });
    </script>

</body>

</html>
