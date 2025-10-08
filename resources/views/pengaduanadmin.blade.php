<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="https://tse3.mm.bing.net/th/id/OIP.pGnjqUW5JX2oohZ4_J62DQHaFj?rs=1&pid=ImgDetMain&o=7&rm=3">
    <title>Data Pengaduan - Dinas Sosial</title>
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

        .nav-menu {
            display: flex;
            gap: 0;
            align-items: center;
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

        .container {
            padding: 20px;
        }

        h2 {
            margin-top: 30px;
            color: #333;
            border-bottom: 2px solid #6b775e;
            padding-bottom: 5px;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            padding: 20px;
            background-color: #f8f9fa;
        }



        /* Table Container with better responsiveness */
        .table-container {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .table-header {
            padding: 20px;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
        }

        .table-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: #333;
        }

        .table-actions {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .search-box {
            padding: 8px 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            min-width: 200px;
        }

        /* Responsive Table */
        .table-wrapper {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
            min-width: 1000px;
            /* Minimum width for horizontal scroll */
        }

        table th,
        table td {
            border: 1px solid #ddd;
            padding: 12px 8px;
            text-align: left;
            vertical-align: top;
            word-wrap: break-word;
        }

        table th {
            background-color: #7d8471;
            color: white;
            font-weight: 600;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        table tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        table tr:hover {
            background-color: #e8f4f8;
        }

        /* Column specific widths */
        .col-no {
            width: 60px;
            text-align: center;
        }

        .col-date {
            width: 100px;
        }

        .col-nik {
            width: 140px;
        }

        .col-name {
            width: 150px;
        }

        .col-phone {
            width: 120px;
        }

        .col-email {
            width: 180px;
        }

        .col-address {
            width: 200px;
        }

        .col-complaint {
            width: 250px;
            max-width: 250px;
        }

        .col-photo {
            width: 100px;
            text-align: center;
        }

        .col-action {
            width: 80px;
            text-align: center;
        }

        .complaint-text {
            max-width: 250px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            cursor: pointer;
            position: relative;
        }

        .complaint-text:hover {
            background-color: #f0f0f0;
        }

        .complaint-tooltip {
            position: absolute;
            background: #333;
            color: white;
            padding: 8px 12px;
            border-radius: 4px;
            font-size: 12px;
            max-width: 300px;
            word-wrap: break-word;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            top: 100%;
            left: 0;
            margin-top: 5px;
        }

        .complaint-text:hover .complaint-tooltip {
            opacity: 1;
            visibility: visible;
        }

        /* Buttons */
        .btn {
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 12px;
            font-weight: 500;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            text-align: center;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-1px);
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
        }

        .btn-danger:hover {
            background-color: #c82333;
            transform: translateY(-1px);
        }

        .btn-secondary {
            background-color: #6c757d;
            color: white;
        }

        .btn-success {
            background-color: #28a745;
            color: white;
        }

        /* Pagination */
        .pagination-wrapper {
            padding: 20px;
            border-top: 1px solid #eee;
            display: flex;
            justify-content: between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .pagination-info {
            color: #666;
            font-size: 14px;
        }

        .pagination {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
            gap: 5px;
        }

        .pagination li {
            display: block;
        }

        .pagination a,
        .pagination span {
            display: block;
            padding: 8px 12px;
            text-decoration: none;
            border: 1px solid #ddd;
            color: #333;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .pagination a:hover {
            background-color: #e9ecef;
            border-color: #adb5bd;
        }

        .pagination .active span {
            background-color: #7d8471;
            border-color: #7d8471;
            color: white;
        }

        .pagination .disabled span {
            color: #6c757d;
            cursor: not-allowed;
            background-color: #fff;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #666;
        }

        .empty-state svg {
            width: 64px;
            height: 64px;
            margin-bottom: 20px;
            opacity: 0.5;
        }

        /* Modals */
        .modal {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(2px);
        }

        .modal-content {
            background-color: white;
            margin: 5% auto;
            padding: 0;
            border-radius: 8px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            animation: modalFadeIn 0.3s ease;
            max-width: 90%;
            max-height: 90%;
            overflow: hidden;
        }

        @keyframes modalFadeIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .modal-header {
            background: #f8f9fa;
            padding: 20px;
            border-bottom: 1px solid #ddd;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-body {
            padding: 20px;
            text-align: center;
            max-height: 70vh;
            overflow-y: auto;
        }

        .modal-footer {
            background: #f8f9fa;
            padding: 15px 20px;
            border-top: 1px solid #ddd;
            text-align: center;
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        .close-btn {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #666;
            padding: 0;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: background-color 0.3s ease;
        }

        .close-btn:hover {
            background-color: #e9ecef;
        }

        /* Photo modal specific */
        #modalPhoto {
            max-width: 100%;
            max-height: 60vh;
            object-fit: contain;
            border-radius: 4px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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


            .header-content {
                position: relative;
            }

            .table-header {
                flex-direction: column;
                align-items: stretch;
            }

            .table-actions {
                justify-content: stretch;
            }

            .search-box {
                min-width: auto;
                width: 100%;
            }

            .pagination-wrapper {
                flex-direction: column;
                text-align: center;
            }

            .pagination {
                justify-content: center;
                flex-wrap: wrap;
            }

            .modal-content {
                margin: 10% auto;
                width: 95%;
            }

            .container {
                padding: 0 15px;
            }

            .main-content {
                padding: 15px;
            }
        }

        @media (max-width: 480px) {
            .header-text h1 {
                font-size: 1.2rem;
            }

            .logo-section img {
                height: 35px;
                width: 35px;
            }

            table {
                font-size: 12px;
            }

            table th,
            table td {
                padding: 8px 6px;
            }

            .btn {
                padding: 6px 10px;
                font-size: 11px;
            }
        }

        /* Loading State */
        .loading {
            text-align: center;
            padding: 40px;
            color: #666;
        }

        .loading::after {
            content: '';
            width: 20px;
            height: 20px;
            border: 2px solid #f3f3f3;
            border-top: 2px solid #7d8471;
            border-radius: 50%;
            display: inline-block;
            animation: spin 1s linear infinite;
            margin-left: 10px;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
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
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                    <a href="{{ url('/pengaduanadmin') }}" class="active">Pengaduan</a>
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

    <div class="container">
        <h2>Data Pengaduan</h2>
        <p>
            Gunakan menu di atas untuk mengelola data
            <b>pengaduan</b>.
        </p>
    </div>

    {{-- Alert untuk sukses hapus --}}
        @if (session('success'))
            <div class="alert alert-success"
                style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                {{ session('success') }}
            </div>
        @endif

        {{-- Alert untuk error --}}
        @if (session('error'))
            <div class="alert alert-danger"
                style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                {{ session('error') }}
            </div>
        @endif

    <!-- Main Content -->

    <main class="main-content">

        <!-- Table Container -->
        <div class="table-container">
            <div class="table-header">
                <div class="table-title">Tabel Data Pengaduan</div>
                <div class="table-actions">
                    <input type="text" class="search-box" placeholder="Cari pengaduan..." id="searchInput">
                </div>
            </div>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th class="col-no">No</th>
                            <th class="col-date">Tanggal</th>
                            <th class="col-nik">NIK</th>
                            <th class="col-name">Nama Lengkap</th>
                            <th class="col-phone">Nomor Telepon</th>
                            <th class="col-email">Email</th>
                            <th class="col-address">Alamat</th>
                            <th class="col-complaint">Isi Pengaduan</th>
                            <th class="col-photo">Bukti Foto</th>
                            <th class="col-action">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pengaduans as $i => $p)
                            <tr>
                                <td class="col-no">{{ $i + 1 }}</td>
                                <td class="col-date">{{ \Carbon\Carbon::parse($p->tanggal)->format('d/m/Y') }}</td>
                                <td class="col-nik">{{ $p->nik }}</td>
                                <td class="col-name">{{ $p->nama_lengkap }}</td>
                                <td class="col-phone">{{ $p->nomor_telepon }}</td>
                                <td class="col-email">{{ $p->email }}</td>
                                <td class="col-address">{{ $p->alamat }}</td>
                                <td class="col-complaint">
                                    <div class="complaint-text" title="{{ $p->isi_pengaduan }}">
                                        {{ $p->isi_pengaduan }}
                                        <div class="complaint-tooltip">{{ $p->isi_pengaduan }}</div>
                                    </div>
                                </td>
                                <td class="col-photo">
                                    @if ($p->bukti_foto)
                                        <button class="btn btn-primary"
                                            onclick="showPhoto('{{ asset('storage/' . $p->bukti_foto) }}', '{{ $p->isi_pengaduan }}')">
                                            Lihat Foto
                                        </button>
                                    @else
                                        <span style="color: #999;">Tidak ada</span>
                                    @endif
                                </td>
                                <td class="col-action">
                                    <button class="btn btn-danger"
                                        onclick="confirmDelete({{ $p->id }})">Hapus</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10">
                                    <div class="empty-state">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                                        </svg>
                                        <h3>Belum ada pengaduan</h3>
                                        <p>Belum ada pengaduan yang masuk ke sistem</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
            </div>
            </table>
        </div>

        <!-- Pagination -->
        <div class="pagination-wrapper">
            <div class="pagination-info">
                Menampilkan 1 sampai 10 dari 25 pengaduan
            </div>
            <nav>
                <ul class="pagination">
                    <li class="disabled"><span>« Sebelumnya</span></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">Selanjutnya »</a></li>
                </ul>
            </nav>
        </div>
    </main>

    <!-- Modal Photo Viewer -->
    <div id="photoModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Bukti Foto Pengaduan</h4>
                <button class="close-btn" onclick="closePhotoModal()">×</button>
            </div>
            <div class="modal-body">
                <img id="modalPhoto" src="" alt="Bukti Foto">
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" onclick="downloadPhoto()">Download</button>
                <button class="btn btn-secondary" onclick="closePhotoModal()">Tutup</button>
            </div>
        </div>
    </div>

    <!-- Modal Confirmation Delete -->
    <div id="deleteModal" class="modal">
        <div class="modal-content" style="max-width: 400px;">
            <div class="modal-header">
                <h3>Konfirmasi Hapus</h3>
                <button class="close-btn" onclick="closeModal()">×</button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus pengaduan ini?</p>
                <p><small style="color: #666;">Data yang dihapus tidak dapat dikembalikan.</small></p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" onclick="deletePengaduan()">Ya, Hapus</button>
                <button class="btn btn-secondary" onclick="closeModal()">Batal</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Dinas Sosial Jawa Barat. All rights reserved.</p>
        </div>
    </footer>

<!-- Form Delete Hidden -->
<form id="deleteForm" method="POST" style="display:none;">
    @csrf
    @method('DELETE')
</form>

    <script>
        let deleteId = null;
        let currentPhotoUrl = null;

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

        // Search functionality
        document.getElementById('searchInput').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const tableRows = document.querySelectorAll('tbody tr');

            tableRows.forEach(row => {
                const text = row.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // Function untuk menampilkan foto dalam modal
        function showPhoto(photoUrl, description) {
            currentPhotoUrl = photoUrl;
            document.getElementById('modalPhoto').src = photoUrl;
            document.getElementById('photoModal').style.display = 'block';
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        }

        // Function untuk menutup modal foto
        function closePhotoModal() {
            document.getElementById('photoModal').style.display = 'none';
            document.body.style.overflow = 'auto'; // Restore scrolling
            currentPhotoUrl = null;
        }

        // Function untuk download foto
        function downloadPhoto() {
            if (currentPhotoUrl) {
                const link = document.createElement('a');
                link.href = currentPhotoUrl;
                link.download = 'bukti_foto_pengaduan.jpg';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            }
        }

        // Function untuk konfirmasi hapus
        function confirmDelete(id) {
            deleteId = id;
            document.getElementById('deleteModal').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            document.getElementById('deleteModal').style.display = 'none';
            document.body.style.overflow = 'auto';
            deleteId = null;
        }

        function deletePengaduan() {
            if (deleteId) {
                const form = document.getElementById('deleteForm');
                form.action = `/pengaduan/${deleteId}`;
                form.submit();
            }
        }

        // Profile dropdown functionality
        document.addEventListener('DOMContentLoaded', function() {
            const dropdown = document.querySelector('.profile-dropdown');
            if (dropdown) {
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
            }
        });

        // Event listeners for modal close
        window.onclick = function(event) {
            const deleteModal = document.getElementById('deleteModal');
            const photoModal = document.getElementById('photoModal');

            if (event.target === deleteModal) {
                closeModal();
            }
            if (event.target === photoModal) {
                closePhotoModal();
            }
        }

        // Keyboard navigation
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closePhotoModal();
                closeModal();
            }
        });

        // Hapus alert setelah beberapa detik
        setTimeout(function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(function(alert) {
                alert.style.display = 'none';
            });
        }, 5000);


        // Table responsive enhancements
        function initTableResponsive() {
            const tableWrapper = document.querySelector('.table-wrapper');
            const table = tableWrapper.querySelector('table');

            // Add scroll indicators
            function updateScrollIndicators() {
                const isScrolledLeft = tableWrapper.scrollLeft <= 0;
                const isScrolledRight = tableWrapper.scrollLeft >= (table.offsetWidth - tableWrapper.offsetWidth);

                tableWrapper.classList.toggle('scrolled-left', !isScrolledLeft);
                tableWrapper.classList.toggle('scrolled-right', !isScrolledRight);
            }

            tableWrapper.addEventListener('scroll', updateScrollIndicators);
            window.addEventListener('resize', updateScrollIndicators);
            updateScrollIndicators();
        }

        // Initialize table responsive features
        document.addEventListener('DOMContentLoaded', initTableResponsive);

        // Pagination functionality (example)
        function goToPage(page) {
            // Add your pagination logic here
            console.log('Going to page:', page);
            // You can use AJAX to load new data or redirect to new URL with page parameter
        }

        // Loading state management
        function showLoading() {
            const tbody = document.querySelector('tbody');
            tbody.innerHTML = '<tr><td colspan="10" class="loading">Memuat data...</td></tr>';
        }

        function hideLoading() {
            // Restore table content
        }

        // Utility function for formatting dates
        function formatDate(dateString) {
            const date = new Date(dateString);
            return date.toLocaleDateString('id-ID', {
                day: '2-digit',
                month: '2-digit',
                year: 'numeric'
            });
        }

        // Utility function for truncating text
        function truncateText(text, maxLength) {
            if (text.length <= maxLength) return text;
            return text.substr(0, maxLength) + '...';
        }

        // Print functionality (bonus feature)
        function printTable() {
            const printWindow = window.open('', '_blank');
            const tableHTML = document.querySelector('.table-container').outerHTML;

            printWindow.document.write(`
                <html>
                <head>
                    <title>Data Pengaduan - Cetak</title>
                    <style>
                        body { font-family: Arial, sans-serif; margin: 20px; }
                        table { width: 100%; border-collapse: collapse; font-size: 12px; }
                        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
                        th { background-color: #f0f0f0; font-weight: bold; }
                        .table-header, .pagination-wrapper { display: none; }
                        .col-action, .col-photo { display: none; }
                    </style>
                </head>
                <body>
                    <h2>Data Pengaduan Masyarakat</h2>
                    <p>Dicetak pada: ${new Date().toLocaleString('id-ID')}</p>
                    ${tableHTML}
                </body>
                </html>
            `);

            printWindow.document.close();
            printWindow.print();
        }

        // Export to CSV functionality (bonus feature)
        function exportToCSV() {
            const table = document.querySelector('table');
            const rows = table.querySelectorAll('tr');
            let csvContent = '';

            rows.forEach((row, index) => {
                if (index === 0) {
                    // Header row - exclude action columns
                    const headers = ['No', 'Tanggal', 'NIK', 'Nama Lengkap', 'Nomor Telepon', 'Email', 'Alamat',
                        'Isi Pengaduan'
                    ];
                    csvContent += headers.join(',') + '\n';
                } else {
                    const cells = row.querySelectorAll('td');
                    if (cells.length > 0) {
                        const rowData = [];
                        for (let i = 0; i < 8; i++) { // Only first 8 columns
                            if (cells[i]) {
                                let cellText = cells[i].textContent.trim();
                                cellText = cellText.replace(/"/g, '""'); // Escape quotes
                                rowData.push(`"${cellText}"`);
                            }
                        }
                        csvContent += rowData.join(',') + '\n';
                    }
                }
            });

            const blob = new Blob([csvContent], {
                type: 'text/csv;charset=utf-8;'
            });
            const link = document.createElement('a');
            const url = URL.createObjectURL(blob);
            link.setAttribute('href', url);
            link.setAttribute('download', `data_pengaduan_${new Date().toISOString().split('T')[0]}.csv`);
            link.style.visibility = 'hidden';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
    </script>
</body>

</html>
