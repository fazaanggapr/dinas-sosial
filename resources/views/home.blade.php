<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinas Sosial Jawa Barat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
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

        .nav-menu a:hover,
        .nav-menu a.active {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .nav-menu a.active {
            background-color: #fff;
            color: #7d8471;
        }

        .hero {
            background: url("/img/banjarkota.go.id-peringatan-hari-disabilitas-internasioanl-tingkat-kota-banjar-tahun-2024-660x330.jpg") no-repeat center center/cover;
            text-align: center;
            min-height: 85vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            color: white;
            /* Biar teks kontras dengan background */
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
            /* overlay gelap */
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            /* teks muncul di atas overlay */
            max-width: 800px;
            margin: 0 auto;
        }



        .hero-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #c6ccd0;
            margin-bottom: 1rem;
            animation: fadeInUp 1s ease-out;
        }

        .hero-subtitle {
            font-size: 1.3rem;
            color: #c6ccd0;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease-out 0.2s both;
        }


        /* Social Media */
        .social-media {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .social-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .instagram {
            background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
        }

        .whatsapp {
            background: linear-gradient(45deg, #25d366, #128c7e);
        }

        .youtube {
            background: linear-gradient(45deg, #ff0000, #cc0000);
        }

        .social-icon:hover {
            transform: translateY(-3px) scale(1.1);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
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

        .logout-link {
            background: none;
            border: none;
            color: inherit;
            font: inherit;
            cursor: pointer;
            padding: 0;
            margin-left: 15px;
            /* biar agak renggang */
        }

        .logout-link:hover {
            text-decoration: underline;
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
                    <img src="https://tse3.mm.bing.net/th/id/OIP.pGnjqUW5JX2oohZ4_J62DQHaFj?rs=1&pid=ImgDetMain&o=7&rm=3"
                        alt="Logo Dinas Sosial" />
                    <div class="header-text">
                        <h1>DINAS SOSIAL</h1>
                    </div>
                </div>
                <nav class="nav-menu">
                    <a href="{{ url('/home') }}" id="home-link" class="active">Home</a>
                    <a href="{{ url('/profil') }}">Profil</a>
                    <a href="{{ url('/layanan') }}">Layanan</a>
                    <a href="{{ url('/dokumentasi') }}">Dokumentasi</a>
                    <a href="{{ url('/pengaduan') }}">Pengaduan</a>
                    <a href="{{ url('/kontak') }}">Kontak</a>

                    <!-- Logout -->
                    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                        @csrf
                        <button type="submit" class="logout-link">
                            Logout
                        </button>
                    </form>
                </nav>
            </div>
        </div>
    </header>


    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">SELAMAT DATANG DINSOS JABAR</h1>
                <p class="hero-subtitle">Dinas Sosial Jawa Barat</p>
            </div>
        </div>
    </section>



    <!-- Social Media Icons -->
    <div class="social-media">
        <a href="#" class="social-icon instagram" title="Instagram @dinsos_jabar">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="#" class="social-icon whatsapp" title="WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
        <a href="#" class="social-icon youtube" title="YouTube @dinsos_jabar">
            <i class="fab fa-youtube"></i>
        </a>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Dinas Sosial Jawa Barat. All rights reserved.</p>
        </div>
    </footer>


    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Active navigation highlighting
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-menu a');

            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    navLinks.forEach(nav => nav.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        });

        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.team-member, .content-section').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'all 0.6s ease-out';
            observer.observe(el);
        });

        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header');
            if (window.scrollY > 100) {
                header.style.boxShadow = '0 4px 20px rgba(0,0,0,0.15)';
            } else {
                header.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
            }
        });
    </script>
</body>

</html>
