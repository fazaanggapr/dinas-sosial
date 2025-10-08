<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Admin - Dinas Sosial</title>
    <link rel="icon" type="image/png"
        href="https://tse3.mm.bing.net/th/id/OIP.pGnjqUW5JX2oohZ4_J62DQHaFj?rs=1&pid=ImgDetMain&o=7&rm=3">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            background-color: white;
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
            content: "";
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

        /* Navigation Menu */
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

        /* Main Container - sama persis seperti asli */
        .container {
            padding: 20px;
        }

        /* H2 styling - sama persis seperti asli */
        h2 {
            margin-top: 30px;
            color: #333;
            border-bottom: 2px solid #6b775e;
            padding-bottom: 5px;
        }

        /* Welcome section - mempertahankan style asli */
        .welcome-text {
            color: #333;
            margin-bottom: 30px;
        }

        /* Stats Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            border-left: 4px solid #7d8471;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .stat-card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .stat-card-icon {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .stat-card-icon.blue {
            background: #e3f2fd;
            color: #1976d2;
        }

        .stat-card-icon.green {
            background: #e8f5e8;
            color: #388e3c;
        }

        .stat-card-icon.orange {
            background: #fff3e0;
            color: #f57c00;
        }

        .stat-card-icon.red {
            background: #ffebee;
            color: #d32f2f;
        }

        .stat-card h3 {
            font-size: 2rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 5px;
        }

        .stat-card p {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 10px;
        }

        .stat-card-trend {
            font-size: 0.85rem;
            padding: 4px 8px;
            border-radius: 20px;
            font-weight: 500;
        }

        .trend-up {
            background: #e8f5e8;
            color: #388e3c;
        }

        .trend-down {
            background: #ffebee;
            color: #d32f2f;
        }

        /* Chart and Table Container */
        .content-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 30px;
        }

        .chart-container,
        .table-container {
            background: white;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .section-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #f0f0f0;
        }

        .chart-wrapper {
            position: relative;
            height: 300px;
        }

        /* Table Styles */
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .data-table th,
        .data-table td {
            padding: 12px 8px;
            text-align: left;
            border-bottom: 1px solid #f0f0f0;
        }

        .data-table th {
            background: #f8f9fa;
            font-weight: 600;
            color: #333;
            font-size: 0.9rem;
        }

        .data-table td {
            font-size: 0.9rem;
            color: #666;
        }

        .status-badge {
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .status-pending {
            background: #fff3cd;
            color: #856404;
        }

        .status-completed {
            background: #d4edda;
            color: #155724;
        }

        .status-processing {
            background: #cce7ff;
            color: #004085;
        }

        /* Quick Actions */
        .quick-actions {
            background: white;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }

        .actions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-top: 20px;
        }

        .action-btn {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 16px;
            background: #f8f9fa;
            border: 2px solid transparent;
            border-radius: 8px;
            text-decoration: none;
            color: #333;
            transition: all 0.2s ease;
            font-weight: 500;
        }

        .action-btn:hover {
            border-color: #7d8471;
            background: #f0f8f0;
            transform: translateY(-1px);
        }

        .action-icon {
            width: 24px;
            height: 24px;
            color: #7d8471;
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

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .hamburger {
                display: flex;
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

            .content-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .actions-grid {
                grid-template-columns: 1fr;
            }

            .container {
                padding: 20px 15px;
            }

            h2 {
                font-size: 1.2rem;
            }
        }

        @media (max-width: 480px) {
            .stat-card {
                padding: 16px;
            }

            .chart-container,
            .table-container,
            .quick-actions {
                padding: 16px;
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
                    <a href="{{ url('/dashboard') }}" class="active">Dashboard</a>
                    <a href="{{ url('/pengaduanadmin') }}">Pengaduan</a>
                    <a href="{{ url('/kontakadmin') }}">Kontak</a>

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

    <!-- Dashboard Content dengan styling asli -->
    <div class="container">
        <!-- Welcome Section - persis seperti asli -->
        <h2>Selamat Datang di Dashboard Admin</h2>
        <p class="welcome-text">
            Pantau dan kelola pengaduan serta bantuan sosial dengan mudah melalui dashboard ini.
        </p>

        <!-- Stats Cards -->
        <div class="stats-grid">
            {{-- Pengaduan --}}
            <div class="stat-card">
                <div class="stat-card-header">
                    <div class="stat-card-icon green">
                        📋
                    </div>
                </div>
                <h3>{{ $totalPengaduan }}</h3>
                <p>Pengaduan Masuk</p>
                @if ($lastPengaduan)
                    <span class="stat-card-trend trend-up">
                        {{ $lastPengaduan->created_at->diffForHumans() }}
                    </span>
                @else
                    <span class="stat-card-trend">Belum ada data</span>
                @endif
            </div>

            {{-- Pesan --}}
            <div class="stat-card">
                <div class="stat-card-header">
                    <div class="stat-card-icon red">
                        ✉
                    </div>
                </div>
                <h3>{{ $totalPesan }}</h3>
                <p>Total Pesan Masuk</p>
                @if ($lastPesan)
                    <span class="stat-card-trend trend-up">
                        {{ $lastPesan->created_at->diffForHumans() }}
                    </span>
                @else
                    <span class="stat-card-trend">Belum ada data</span>
                @endif
            </div>
        </div>




        <!-- Quick Actions -->
        <div class="quick-actions">
            <h3 class="section-title">Aksi Cepat</h3>
            <div class="actions-grid">

                <a href="{{ url('/pengaduanadmin') }}" class="action-btn">
                    <svg class="action-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Lihat Pengaduan
                </a>

                <a href="{{ url('/kontakadmin') }}" class="action-btn">
                    <svg class="action-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a2 2 0 01-2-2v-6a2 2 0 012-2h2m2-4h4v4m0 0V4m0 4L9 12" />
                    </svg>
                    Kelola Kontak
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Dinas Sosial Jawa Barat. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
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

        // Profile Dropdown
        document.addEventListener('DOMContentLoaded', function() {
            const dropdown = document.querySelector('.profile-dropdown');
            const button = dropdown.querySelector('.profile-btn');
            const menu = dropdown.querySelector('.dropdown-menu');

            button.addEventListener('click', function(e) {
                e.stopPropagation();
                dropdown.classList.toggle('show');
            });

            document.addEventListener('click', function(e) {
                if (!dropdown.contains(e.target)) {
                    dropdown.classList.remove('show');
                }
            });

            menu.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        });
    </script>
</body>

</html>
