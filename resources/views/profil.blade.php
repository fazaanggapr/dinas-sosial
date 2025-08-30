<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dinas Sosial - Profil</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
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



        /* Content Sections */
        .content-section {
            padding: 3rem 0;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        .section-title {
            font-size: 1.8rem;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 2rem;
            font-weight: 600;
        }

        .visi-misi {
            max-width: 900px;
            margin: 0 auto;
        }

        .visi,
        .misi {
            margin-bottom: 2rem;
        }

        .visi h3,
        .misi h3 {
            font-size: 1.3rem;
            color: #7d8471;
            margin-bottom: 1rem;
            text-align: center;
            font-weight: 600;
        }

        .visi p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }

        .misi-list {
            list-style: none;
            counter-reset: misi-counter;
        }

        .misi-list li {
            counter-increment: misi-counter;
            margin-bottom: 1rem;
            padding-left: 3rem;
            position: relative;
            font-size: 1rem;
            line-height: 1.7;
            color: #555;
        }

        .misi-list li::before {
            content: counter(misi-counter);
            position: absolute;
            left: 0;
            top: 0;
            background: #7d8471;
            color: white;
            width: 2rem;
            height: 2rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 0.9rem;
        }

        /* Team Section */
        .team-section {
            background: #f8f9fa;
            padding: 3rem 0;
            margin: 2rem 0;
            border-radius: 10px;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1000px;
            margin: 0 auto;
        }

        .team-member {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
        }

        .team-member:hover {
            transform: translateY(-5px);
        }

        .member-name {
            font-size: 1.2rem;
            font-weight: 700;
            color: #7d8471;
            margin-bottom: 0.5rem;
        }

        .member-description {
            color: #666;
            line-height: 1.6;
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

        /* Footer */
        .footer {
            background-color: #7d8471;
            color: white;
            padding: 2rem 0;
            text-align: center;
            margin-top: 3rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
            color: #fff;
        }

        .footer-section p,
        .footer-section a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            line-height: 1.6;
        }

        .footer-section a:hover {
            color: white;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            padding-top: 1rem;
            margin-top: 2rem;
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
                    <a href="{{ url('/home') }}" onclick="showPage('home')">Home</a>
                    <a href="{{ url('/profil') }}" onclick="showPage('profil')" id="profil-link"
                        class="active">Profil</a>
                    <a href="{{ url('/layanan') }}" onclick="showPage('layanan')">Layanan</a>
                    <a href="{{ url('/dokumentasi') }}" onclick="showPage('dokumentasi')">Dokumentasi</a>
                    <a href="{{ url('/pengaduan') }}" onclick="showPage('pengaduan')">Pengaduan</a>
                    <a href="{{ url('/kontak') }}" onclick="showPage('kontak')">Kontak</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <!-- Visi Misi Section -->
    <section class="content-section">
        <div class="container">
            <h2 class="section-title">Visi & Misi Kelompok II</h2>
            <div class="visi-misi">
                <div class="visi">
                    <h3>Visi :</h3>
                    <p>Menjadi kelompok pelajar yang membanggakan dengan menjunjung tinggi sikap sopan santun, semangat
                        belajar, serta keterampilan yang unggul dalam berbagai bidang.</p>
                </div>

                <div class="misi">
                    <h3>Misi :</h3>
                    <ol class="misi-list">
                        <li>Menanamkan sikap saling menghargai, sopan dalam bertutur kata dan bertindak di lingkungan
                            sekolah maupun luar.</li>
                        <li>Mengembangkan keterampilan individu maupun kelompok dalam bidang akademik dan non-akademik.
                        </li>
                        <li>Meningkatkan semangat belajar secara konsisten agar menjadi pelajar yang berprestasi dan
                            membanggakan.</li>
                        <li>Menumbuhkan rasa tanggung jawab dan kekompakan antar anggota kelompok.</li>
                        <li>Berkontribusi positif dalam setiap kegiatan kelas maupun sekolah dengan penuh dedikasi dan
                            etika.</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <h2 class="section-title">Anggota Kelompok</h2>
            <div class="team-grid">
                <div class="team-member">
                    <div class="member-name">Daryel</div>
                    <div class="member-description">Ahli matematika yang cerdas dan teliti, menjadi andalan kelompok
                        dalam pemecahan tugas logis.</div>
                </div>

                <div class="team-member">
                    <div class="member-name">Rahma</div>
                    <div class="member-description">Pemikir kreatif dan penuh semangat, selalu menjadi pendorong tim
                        untuk tetap aktif dan berinisiatif.</div>
                </div>

                <div class="team-member">
                    <div class="member-name">Hakim</div>
                    <div class="member-description">Tenang, bijak, dan tegas; menjaga kekompakan tim dan rasa keadilan
                        dalam kelompok.</div>
                </div>

                <div class="team-member">
                    <div class="member-name">Faza</div>
                    <div class="member-description">Rajin dan bertanggung jawab, selalu siap menyelesaikan tugas dengan
                        sepenuh hati.</div>
                </div>

                <div class="team-member">
                    <div class="member-name">Bryan</div>
                    <div class="member-description">Ceria dan suportif, menjaga kekompakan tim dengan energi positifnya.
                    </div>
                </div>
            </div>
        </div>
    </section>

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
