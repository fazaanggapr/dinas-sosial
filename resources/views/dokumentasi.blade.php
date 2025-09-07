<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumentasi - Dinas Sosial</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fff;
        }

        /* Header Styles - Unified Design */
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
            height: 45px;
            width: 45px;
        }

        .header-text h1 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.2rem;
        }

        .nav-menu {
            display: flex;
            gap: 0;
            align-items: center;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            padding: 0.8rem 1.5rem;
            transition: all 0.3s ease;
            border-radius: 4px;
            font-weight: 500;
            margin: 0 2px;
        }

        .nav-menu a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .nav-menu a.active {
            background-color: #fff;
            color: #7d8471;
            font-weight: 600;
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


        /* Main Content */
        .main-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 30px 20px;
        }

        .page-title {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
            font-size: 2rem;
            font-weight: 700;
        }

        .documentation-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 20px;
        }

        .doc-item {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .doc-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .doc-image {
            width: 100%;
            height: 200px;
            background: linear-gradient(45deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 16px;
            position: relative;
            overflow: hidden;
        }

        .doc-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.3);
        }

        .doc-image span {
            position: relative;
            z-index: 1;
            text-align: center;
            padding: 20px;
            font-weight: 500;
        }

        .doc-content {
            padding: 25px;
        }

        .doc-title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            line-height: 1.4;
            margin-bottom: 12px;
        }

        .doc-description {
            font-size: 14px;
            color: #666;
            line-height: 1.6;
        }

        /* Layanan Page Styles */
        .layanan-container {
            display: grid;
            grid-template-columns: 1fr 2fr 1fr;
            gap: 40px;
            margin-top: 40px;
        }

        .layanan-left {
            text-align: center;
        }

        .layanan-title {
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .layanan-subtitle {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 30px;
        }

        .price-display {
            font-size: 3rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .price-label {
            font-size: 1rem;
            color: #666;
            font-weight: 500;
        }

        .layanan-center {
            text-align: center;
        }

        .dinsos-badge {
            background-color: #7d8471;
            color: white;
            padding: 10px 30px;
            border-radius: 25px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 20px;
        }

        .moto {
            font-size: 1.4rem;
            color: #333;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .service-buttons {
            display: flex;
            flex-direction: column;
            gap: 15px;
            align-items: center;
        }

        .service-btn {
            background-color: #9ca387;
            color: white;
            padding: 12px 40px;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 150px;
        }

        .service-btn:hover {
            background-color: #7d8471;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .layanan-right {
            padding-left: 20px;
        }

        .sekretariat-title {
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .sekretariat-desc {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .service-list {
            list-style: none;
            padding: 0;
        }

        .service-list li {
            color: #666;
            margin-bottom: 8px;
            line-height: 1.5;
        }

        /* Footer Logos */
        .footer-logos {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 60px;
            padding: 30px 0;
        }

        .footer-logos img {
            height: 60px;
            width: auto;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 1rem;
            }

            .nav-menu {
                flex-wrap: wrap;
                justify-content: center;
            }

            .nav-menu a {
                padding: 0.6rem 1rem;
                font-size: 0.9rem;
            }


            .documentation-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .layanan-container {
                grid-template-columns: 1fr;
                gap: 30px;
                text-align: center;
            }

            .layanan-right {
                padding-left: 0;
            }

            .page-title {
                font-size: 1.5rem;
            }
        }

        /* Toggle between Documentation and Layanan */
        .page-content {
            display: none;
        }

        .page-content.active {
            display: block;
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
                <nav class="nav-menu">
                    <a href="{{ url('/home') }}" onclick="showPage('home')">Home</a>
                    <a href="{{ url('/profil') }}" onclick="showPage('profil')">Profil</a>
                    <a href="{{ url('/layanan') }}" onclick="showPage('layanan')">Layanan</a>
                    <a href="{{ url('/dokumentasi') }}" onclick="showPage('dokumentasi')"
                        class="active">Dokumentasi</a>
                    <a href="{{ url('/pengaduan') }}" onclick="showPage('pengaduan')">Pengaduan</a>
                    <a href="{{ url('/kontak') }}" onclick="showPage('kontak')">Kontak</a>
                    <!-- Profile Dropdown -->
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

    <!-- Dokumentasi Page -->
    <div id="dokumentasi-page" class="page-content active">
        <div class="main-container">
            <h1 class="page-title">Dokumentasi Kegiatan</h1>
            <div class="documentation-grid">

                <div class="doc-item">
                    <div class="doc-image">
                        <img src="{{ asset('/img/beritafoto-1528580.jpg') }}"
                            alt="Peringatan HI-UN Tahun 2023 Tingkat Provinsi Jawa Barat">
                    </div>
                    <div class="doc-content">
                        <h3 class="doc-title">Peringatan HI-UN Tahun 2023 Tingkat Provinsi Jawa Barat</h3>
                        <p class="doc-description">Dokumentasi kegiatan peringatan Hari International United Nations
                            tingkat Provinsi Jawa Barat tahun 2023</p>
                    </div>
                </div>

                <div class="doc-item">
                    <div class="doc-image">
                        <img src="{{ asset('/img/beritafoto-1528581.jpg') }}"
                            alt="Dinsos Jabar Terima Penganugrahaan atas Pelayanan publik Kualitas Tinggi">
                    </div>
                    <div class="doc-content">
                        <h3 class="doc-title">Dinsos Jabar Terima Penganugrahaan atas Pelayanan publik Kualitas Tinggi
                        </h3>
                        <p class="doc-description">Penghargaan yang diterima Dinas Sosial Jawa Barat atas komitmen dalam
                            memberikan pelayanan publik berkualitas</p>
                    </div>
                </div>

                <div class="doc-item">
                    <div class="doc-image">
                        <img src="{{ asset('/img/beritafoto-1528582.jpg') }}"
                            alt="Penyerahan Ruang Perpustakaan PPSH/HI dan Penyuluhan Bantuan Al Quran Braille">
                    </div>
                    <div class="doc-content">
                        <h3 class="doc-title">Penyerahan Ruang Perpustakaan PPSH/HI dan Penyuluhan Bantuan Al Quran
                            Braille</h3>
                        <p class="doc-description">Kegiatan penyerahan fasilitas perpustakaan dan bantuan Al Quran
                            Braille untuk penyandang disabilitas</p>
                    </div>
                </div>

                <div class="doc-item">
                    <div class="doc-image">
                        <img src="{{ asset('/img/beritafoto-1528583.jpg') }}"
                            alt="Launching Bazar Ramadan 2022 YAPTD PPSH/HI">
                    </div>
                    <div class="doc-content">
                        <h3 class="doc-title">Launching Bazar Ramadan 2022 YAPTD PPSH/HI</h3>
                        <p class="doc-description">Peluncuran kegiatan bazar Ramadan tahun 2022 yang diselenggarakan
                            oleh YAPTD PPSH/HI</p>
                    </div>
                </div>

                <div class="doc-item">
                    <div class="doc-image">
                        <img src="{{ asset('/img/beritafoto-1528584.jpg') }}"
                            alt="Penyerahan Tahar sekolah kp 244 juta bantuan untuk LKS dan anak Yatim">
                    </div>
                    <div class="doc-content">
                        <h3 class="doc-title">Penyerahan Tahar sekolah kp 244 juta bantuan untuk LKS dan anak Yatim</h3>
                        <p class="doc-description">Program bantuan pendidikan senilai 244 juta rupiah untuk Lembaga
                            Kesejahteraan Sosial dan anak yatim</p>
                    </div>
                </div>

                <div class="doc-item">
                    <div class="doc-image">
                        <img src="{{ asset('/img/beritafoto-1528585.jpg') }}"
                            alt="Penyerahan Bantuan Alat Elektronik Kepada Penyandang Disabilitas">
                    </div>
                    <div class="doc-content">
                        <h3 class="doc-title">Penyerahan Bantuan Alat Elektronik Kepada Penyandang Disabilitas</h3>
                        <p class="doc-description">Program bantuan peralatan elektronik untuk mendukung kemandirian dan
                            aktivitas penyandang disabilitas</p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Layanan Page -->
    <div id="layanan-page" class="page-content">
        <div class="main-container">
            <div class="layanan-container">
                <!-- Left Section -->
                <div class="layanan-left">
                    <h2 class="layanan-title">Layanan Kami</h2>
                    <p class="layanan-subtitle">Bebas Biaya</p>
                    <div class="price-display">Rp 0,-</div>
                    <p class="price-label">GRATIS</p>
                </div>

                <!-- Center Section -->
                <div class="layanan-center">
                    <div class="dinsos-badge">DINSOS</div>
                    <div class="moto">Moto Layanan<br>SEGER DAN SEHAT</div>
                    <div class="service-buttons">
                        <button class="service-btn">Segera</button>
                        <button class="service-btn">Gesit</button>
                        <button class="service-btn">Ramah</button>
                        <button class="service-btn">Sepenuh Hati</button>
                    </div>
                </div>

                <!-- Right Section -->
                <div class="layanan-right">
                    <h2 class="sekretariat-title">Sekretariat</h2>
                    <p class="sekretariat-desc">Layanan yang ada pada Sekretariat yaitu:</p>
                    <ul class="service-list">
                        <li>a. Pelayanan Administrasi Dinas;</li>
                        <li>b. Pelayanan Informasi Publik;</li>
                        <li>c. Pelayanan Rapat.</li>
                    </ul>
                </div>
            </div>

            <div class="footer-logos">
                <img src="https://pelayanansosial.kotabogor.go.id/assets/img/bogor.png" alt="Logo Bogor">
                <img src="https://pelayanansosial.kotabogor.go.id/assets/img/bogor.png" alt="Logo Dinas">
            </div>
        </div>
    </div>

    <script>
        function showPage(pageName) {
            // Hide all pages
            const pages = document.querySelectorAll('.page-content');
            pages.forEach(page => page.classList.remove('active'));

            // Remove active class from all nav links
            const navLinks = document.querySelectorAll('.nav-menu a');
            navLinks.forEach(link => link.classList.remove('active'));

            // Show selected page
            const targetPage = document.getElementById(pageName + '-page');
            if (targetPage) {
                targetPage.classList.add('active');
            }

            // Add active class to clicked nav link
            const targetLink = document.getElementById(pageName + '-link');
            if (targetLink) {
                targetLink.classList.add('active');
            }
        }

        // Handle window resize for mobile responsiveness
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                // Reset any mobile-specific styles if needed
            }
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
