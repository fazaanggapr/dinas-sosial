<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dinas Sosial - Layanan</title>
  
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #fff;
      color: #333;
    }

    /* Header Styles */
        .header {
            background-color: #7d8471;
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
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
            border-radius: 0;
            font-weight: 500;
        }

        .nav-menu a:hover, .nav-menu a.active {
            background-color: rgba(255,255,255,0.2);
        }

        .nav-menu a.active {
            background-color: #fff;
            color: #7d8471;
        }

    /* HAMBURGER MENU */
    .hamburger {
      display: none;
      flex-direction: column;
      cursor: pointer;
      padding: 5px;
    }

    .hamburger span {
      width: 25px;
      height: 3px;
      background-color: white;
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
    .footer {
      margin-top: 50px;
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
      padding: 20px;
    }

    .footer img {
      height: 40px;
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
            .header-content {
                flex-direction: column;
                gap: 1rem;
            }

            .nav-menu {
                flex-wrap: wrap;
                justify-content: center;
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
                    <img
                    src="https://tse3.mm.bing.net/th/id/OIP.pGnjqUW5JX2oohZ4_J62DQHaFj?rs=1&pid=ImgDetMain&o=7&rm=3"
                    alt="Logo Dinas Sosial"
                    />
                    <div class="header-text">
                        <h1>DINAS SOSIAL</h1>
                    </div>
                </div>
                <nav class="nav-menu">
                    <a href="{{ url('/home') }}" onclick="showPage('home')">Home</a>
                    <a href="{{ url('/profil') }}" onclick="showPage('profil')" >Profil</a>
                    <a href="{{ url('/layanan') }}" onclick="showPage('layanan')" id="layanan-link"
                        class="active">Layanan</a>
                    <a href="{{ url('/dokumentasi') }}" onclick="showPage('dokumentasi')">Dokumentasi</a>
                    <a href="{{ url('/pengaduan') }}" onclick="showPage('pengaduan')">Pengaduan</a>
                    <a href="{{ url('/kontak') }}" onclick="showPage('kontak')">Kontak</a>
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
  <div class="footer">
    <img src="http://fc06.deviantart.net/fs71/i/2013/297/2/e/logo_pemerintah_propinsi_jawa_barat__indonesia_by_si_upoy-d6rnfsy.png" alt="Dinsos Jabar">
    <img src="https://pelayanansosial.kotabogor.go.id/assets/img/bogor.png" alt="Logo Bogor">
  </div>

  <script>
      // Hamburger Menu Toggle
      const hamburger = document.getElementById('hamburger');
      const navLinks = document.getElementById('navLinks');

      hamburger.addEventListener('click', function() {
        hamburger.classList.toggle('active');
        navLinks.classList.toggle('active');
      });

      // Close menu when clicking on a link
      const menuLinks = document.querySelectorAll('.nav-links a');
      menuLinks.forEach(link => {
        link.addEventListener('click', function() {
          hamburger.classList.remove('active');
          navLinks.classList.remove('active');
        });
      });

      // Close menu when clicking outside
      document.addEventListener('click', function(event) {
        const navbar = document.querySelector('.navbar');
        const isClickInsideNavbar = navbar.contains(event.target);
        
        if (!isClickInsideNavbar && navLinks.classList.contains('active')) {
          hamburger.classList.remove('active');
          navLinks.classList.remove('active');
        }
      });

      // Prevent menu from closing when clicking inside the menu
      navLinks.addEventListener('click', function(e) {
        e.stopPropagation();
      });

      // Handle window resize
      window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
          hamburger.classList.remove('active');
          navLinks.classList.remove('active');
        }
      });
    </script>

</body>
</html>