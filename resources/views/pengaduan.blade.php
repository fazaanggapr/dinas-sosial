<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Kontak</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            min-height: 100vh;
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

        /* Main Content Container */
        .main-content {
            padding: 40px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 100px);
        }

        .contact-form {
            background-color: #e0e0e0;
            padding: 40px;
            border-radius: 8px;
            width: 100%;
            max-width: 800px;
            /* Lebar untuk desktop */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 40px;
            letter-spacing: 2px;
        }

        .form-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            color: #333;
            margin-bottom: 8px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 4px;
            background-color: #b8b8b8;
            font-size: 14px;
            color: #333;
            resize: vertical;
            transition: background-color 0.3s ease;
        }

        .form-group input[type="file"] {
            padding: 12px;
            background-color: #b8b8b8;
            cursor: pointer;
        }

        .form-group input[type="file"]::-webkit-file-upload-button {
            background-color: #8faa7a;
            border: none;
            padding: 10px 15px;
            border-radius: 3px;
            color: #333;
            font-weight: bold;
            cursor: pointer;
            margin-right: 10px;
        }

        .form-group input[type="file"]::-webkit-file-upload-button:hover {
            background-color: #7d9968;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            background-color: #a8a8a8;
        }

        .form-group textarea {
            min-height: 120px;
            font-family: Arial, sans-serif;
        }

        .form-buttons {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .submit-btn {
            flex: 1;
            padding: 15px;
            border: none;
            border-radius: 4px;
            background-color: #8faa7a;
            color: #333;
            font-size: 14px;
            font-weight: bold;
            letter-spacing: 1px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #7d9968;
        }

        .submit-btn:active {
            background-color: #6b8556;
        }

        .back-btn {
            flex: 1;
            padding: 15px;
            border: 2px solid #8faa7a;
            border-radius: 4px;
            background-color: transparent;
            color: #8faa7a;
            font-size: 14px;
            font-weight: bold;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }

        .back-btn:hover {
            background-color: #8faa7a;
            color: #333;
        }

        .back-btn:active {
            background-color: #7d9968;
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
                font-size: 14px;
            }

            .main-content {
                padding: 20px 15px;
            }

            .contact-form {
                max-width: 400px;
                /* Kembali ke ukuran mobile seperti gambar */
                padding: 30px 20px;
            }

            .form-title {
                font-size: 18px;
                margin-bottom: 30px;
            }

            .form-content {
                grid-template-columns: 1fr;
                /* Single column untuk mobile */
                gap: 0;
            }

            .form-group {
                margin-bottom: 20px;
            }

            .form-buttons {
                flex-direction: column;
            }

            .submit-btn,
            .back-btn {
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            .contact-form {
                padding: 25px 15px;
            }

            .nav-menu a {
                padding: 0.5rem 0.8rem;
                font-size: 13px;
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
                    <a href="{{ url('/profil') }}" onclick="showPage('profil')">Profil</a>
                    <a href="{{ url('/layanan') }}" onclick="showPage('layanan')"> Layanan</a>
                    <a href="{{ url('/dokumentasi') }}" onclick="showPage('dokumentasi')">Dokumentasi</a>
                    <a href="{{ url('/pengaduan') }}" onclick="showPage('pengaduan')" id="pengaduan-link"
                        class="active">Pengaduan</a>
                    <a href="{{ url('/kontak') }}" onclick="showPage('kontak')">Kontak</a>

                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="main-content">
        <div class="contact-form">
            <h2 class="form-title">FORM PENGADUAN</h2>
            <form>
                <div class="form-content">
                    <div class="form-group">
                        <label for="date">*Tanggal</label>
                        <input type="date" id="date" name="date" required>
                    </div>

                    <div class="form-group">
                        <label for="photo">*Unggah Bukti Foto</label>
                        <input type="file" id="photo" name="photo" accept="image/*" required>
                    </div>

                    <div class="form-group full-width">
                        <label for="complaint">*Isi Pengaduan</label>
                        <textarea id="complaint" name="complaint" required placeholder="Jelaskan pengaduan Anda dengan detail..."></textarea>
                    </div>
                </div>

                <div class="form-buttons">
                    <button type="submit" class="submit-btn">KIRIM PENGADUAN</button>

                </div>
            </form>
        </div>
    </div>

    <script>
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();

            const date = document.getElementById('date').value;
            const complaint = document.getElementById('complaint').value;
            const photo = document.getElementById('photo').files[0];

            if (date && complaint && photo) {
                alert('Pengaduan berhasil dikirim!\n\nTanggal: ' + date + '\nPengaduan: ' + complaint +
                    '\nBukti Foto: ' + photo.name);
                this.reset();
            } else {
                alert('Harap isi semua field yang wajib diisi (*)');
            }
        });
    </script>
</body>

</html>
