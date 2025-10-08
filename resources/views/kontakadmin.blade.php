<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png"
        href="https://tse3.mm.bing.net/th/id/OIP.pGnjqUW5JX2oohZ4_J62DQHaFj?rs=1&pid=ImgDetMain&o=7&rm=3">
    <title>Data Kontak - Dinas Sosial</title>
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            background: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .card-table {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
            overflow-x: auto;
        }

        .table-container {
            width: 100%;
            overflow-x: unset;
        }

        table th,
        table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #6b775e;
            color: white;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        /* Button Styles */
        .btn {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }

        .btn-red,
        .btn-danger {
            background-color: #dc3545;
            color: white;
        }

        .btn-red:hover,
        .btn-danger:hover {
            background-color: #c82333;
            transform: translateY(-1px);
        }

        .btn-secondary {
            background-color: #6c757d;
            color: white;
        }

        .btn-secondary:hover {
            background-color: #545b62;
        }

        /* Alert Styles */
        .alert {
            padding: 12px 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            font-weight: 500;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .footer {
            margin-top: auto;
            background-color: #7d8471;
            color: white;
            padding: 1rem 0;
            text-align: center;
            font-size: 0.9rem;
        }

        .footer-section a:hover {
            color: white;
        }

        /* Modal Styles */
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

        .modal.show {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background-color: white;
            margin: auto;
            padding: 0;
            border-radius: 8px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            animation: modalFadeIn 0.3s ease;
            max-width: 90%;
            max-height: 90%;
            overflow: hidden;
            position: relative;
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

        .modal-header h3 {
            margin: 0;
            color: #333;
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

        /* Message Modal Styles */
        .message-modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .message-modal-content {
            background-color: white;
            margin: 5% auto;
            padding: 20px;
            border-radius: 8px;
            width: 80%;
            max-width: 600px;
            position: relative;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        .message-close {
            position: absolute;
            right: 15px;
            top: 10px;
            font-size: 24px;
            cursor: pointer;
            color: #999;
        }

        .message-close:hover {
            color: #666;
        }

        #fullMessage {
            max-height: 300px;
            overflow-y: auto;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
            background-color: #f9f9f9;
            white-space: pre-wrap;
            margin-top: 10px;
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

            .modal-content {
                max-width: 95%;
                margin: 10% auto;
            }

            .message-modal-content {
                width: 95%;
                margin: 10% auto;
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
                    <a href="{{ url('/pengaduanadmin') }}">Pengaduan</a>
                    <a href="{{ url('/kontakadmin') }}" class="active">Kontak</a>

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
        <h2>Data Kontak</h2>
        <p>Gunakan menu di atas untuk mengelola data <b>kontak</b>.</p>

        {{-- Alert untuk sukses hapus --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Alert untuk error --}}
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if ($kontaks->count() > 0)
            <div class="card-table">
                <h3>Tabel Data Kontak</h3>
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Pesan</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="kontakTableBody">
                        @foreach ($kontaks as $index => $kontak)
                            <tr data-id="{{ $kontak->id }}">
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $kontak->nama }}</td>
                                <td>{{ $kontak->email }}</td>
                                <td style="max-width: 300px; word-wrap: break-word;">
                                    {{ Str::limit($kontak->pesan, 100) }}
                                    @if (strlen($kontak->pesan) > 100)
                                        <br>
                                        <small>
                                            <button onclick="showFullMessage('{{ addslashes($kontak->pesan) }}')"
                                                style="background: none; border: none; color: #007bff; cursor: pointer; text-decoration: underline; font-size: 12px;">
                                                Lihat selengkapnya
                                            </button>
                                        </small>
                                    @endif
                                </td>
                                <td>{{ $kontak->created_at->format('Y-m-d H:i') }}</td>
                                <td>
                                    <button type="button" class="btn btn-red"
                                        onclick="confirmDelete({{ $kontak->id }}, '{{ addslashes($kontak->nama) }}', '{{ route('kontak.destroy', $kontak->id) }}')">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p>Belum ada data kontak.</p>
        @endif
    </div>

    <!-- Modal untuk menampilkan pesan lengkap -->
    <div id="messageModal" class="message-modal">
        <div class="message-modal-content">
            <span class="message-close" onclick="closeMessageModal()">&times;</span>
            <h3 style="margin-top: 0;">Pesan Lengkap</h3>
            <div id="fullMessage"></div>
        </div>
    </div>

    <!-- Modal Confirmation Delete -->
    <div id="deleteModal" class="modal">
        <div class="modal-content" style="max-width: 400px;">
            <div class="modal-header">
                <h3>Konfirmasi Hapus</h3>
                <button class="close-btn" onclick="closeDeleteModal()">×</button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus pesan dari <strong id="deleteContactName"></strong>?</p>
                <p><small style="color: #666;">Data yang dihapus tidak dapat dikembalikan.</small></p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" onclick="deletePesan()">Ya, Hapus</button>
                <button class="btn btn-secondary" onclick="closeDeleteModal()">Batal</button>
            </div>
        </div>
    </div>

    <!-- Hidden form for delete action -->
    <form id="deleteForm" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Dinas Sosial Jawa Barat. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Global variables
        let deleteId = null;
        let deleteContactName = '';

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

        // Profile dropdown functionality
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

        // Function untuk menampilkan pesan lengkap
        function showFullMessage(message) {
            document.getElementById('fullMessage').innerText = message;
            document.getElementById('messageModal').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        // Function untuk menutup message modal
        function closeMessageModal() {
            document.getElementById('messageModal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Function untuk konfirmasi hapus
        function confirmDelete(id, contactName) {
            deleteId = id;
            deleteContactName = contactName;
            document.getElementById('deleteContactName').textContent = contactName;
            document.getElementById('deleteModal').classList.add('show');
            document.body.style.overflow = 'hidden';
        }

        // Function untuk menutup delete modal
        function closeDeleteModal() {
            document.getElementById('deleteModal').classList.remove('show');
            document.body.style.overflow = 'auto';
            deleteId = null;
            deleteContactName = '';
        }

        let deleteUrl = null;

        function confirmDelete(id, contactName, url) {
            deleteId = id;
            deleteUrl = url; // simpan URL dari Laravel route()
            document.getElementById('deleteContactName').textContent = contactName;
            document.getElementById('deleteModal').classList.add('show');
            document.body.style.overflow = 'hidden';
        }

        function deletePesan() {
            if (deleteUrl) {
                const form = document.getElementById('deleteForm');
                form.action = `/kontakadmin/${deleteId}`;
                form.submit();
            }
        }

        // Function untuk update nomor baris setelah penghapusan (untuk UI feedback)
        function updateRowNumbers() {
            const tableBody = document.getElementById('kontakTableBody');
            const rows = tableBody.querySelectorAll('tr');

            rows.forEach((row, index) => {
                const firstCell = row.cells[0];
                if (firstCell) {
                    firstCell.textContent = index + 1;
                }
            });
        }

        // Event listeners for modal close when clicking outside
        window.addEventListener('click', function(event) {
            const deleteModal = document.getElementById('deleteModal');
            const messageModal = document.getElementById('messageModal');

            // Close delete modal
            if (event.target === deleteModal) {
                closeDeleteModal();
            }

            // Close message modal
            if (event.target === messageModal) {
                closeMessageModal();
            }
        });

        // Keyboard event listeners
        document.addEventListener('keydown', function(event) {
            // Close modals on Escape key
            if (event.key === 'Escape') {
                closeDeleteModal();
                closeMessageModal();
            }
        });

        // Auto-hide alerts after 5 seconds (for existing alerts)
        document.addEventListener('DOMContentLoaded', function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(function(alert) {
                if (alert.style.display !== 'none') {
                    setTimeout(function() {
                        alert.style.display = 'none';
                    }, 5000);
                }
            });
        });
    </script>
</body>

</html>
