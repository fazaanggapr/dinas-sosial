<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Dinas Sosial</title>
    <link rel="icon" type="image/png" href="https://tse3.mm.bing.net/th/id/OIP.pGnjqUW5JX2oohZ4_J62DQHaFj?rs=1&pid=ImgDetMain&o=7&rm=3">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #e8e8e8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .form-container {
            background-color: #e0e0e0;
            padding: 40px;
            border-radius: 8px;
            width: 100%;
            max-width: 600px;
            /* Lebar untuk desktop */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 35px;
        }

        .logo-section {
            background-color: #8faa7a;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            color: white;
            font-weight: bold;
            font-size: 18px;
        }

        .logo {
            width: 45px;
            height: 45px;
            background-color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .logo img {
            width: 40px;
            height: 40px;
            object-fit: contain;
        }

        .form-title {
            font-size: 28px;
            font-weight: bold;
            color: #333;
            margin-bottom: 35px;
            letter-spacing: 2px;
        }

        .form-content {
            max-width: 400px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .form-group input {
            width: 100%;
            padding: 18px 20px 18px 55px;
            border: none;
            border-radius: 4px;
            background-color: #b8b8b8;
            font-size: 16px;
            color: #333;
            transition: background-color 0.3s ease;
        }

        .form-group input:focus {
            outline: none;
            background-color: #a8a8a8;
        }

        .icon {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
            font-size: 18px;
        }

        .password-toggle {
            position: absolute;
            right: 18px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #666;
            font-size: 18px;
            user-select: none;
        }

        .password-toggle:hover {
            color: #333;
        }

        .form-buttons {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 25px;
        }

        .submit-btn {
            width: 100%;
            padding: 18px;
            border: none;
            border-radius: 4px;
            background-color: #8faa7a;
            color: #333;
            font-size: 16px;
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
            width: 100%;
            padding: 16px;
            border: 2px solid #8faa7a;
            border-radius: 4px;
            background-color: transparent;
            color: #8faa7a;
            font-size: 16px;
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

        .form-footer {
            text-align: center;
            margin-top: 25px;
            font-size: 14px;
            color: #666;
        }

        .form-footer a {
            color: #8faa7a;
            text-decoration: underline;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .form-footer a:hover {
            color: #7d9968;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 10px;
            font-size: 14px;
            color: #555;
        }

        .remember-me input[type="checkbox"] {
            width: 16px;
            height: 16px;
            accent-color: #8faa7a;
            /* Biar warnanya sesuai tema */
            cursor: pointer;
        }


        /* Mobile Responsive */
        @media (max-width: 768px) {
            .form-container {
                max-width: 350px;
                /* Ukuran mobile seperti asli */
                padding: 30px 25px;
            }

            .logo-section {
                padding: 15px;
                font-size: 16px;
                gap: 10px;
            }

            .logo {
                width: 35px;
                height: 35px;
            }

            .logo img {
                width: 30px;
                height: 30px;
            }

            .form-title {
                font-size: 24px;
                margin-bottom: 25px;
            }

            .form-group {
                margin-bottom: 20px;
            }

            .form-group input {
                padding: 15px 20px 15px 50px;
                font-size: 14px;
            }

            .icon {
                left: 15px;
                font-size: 16px;
            }

            .password-toggle {
                right: 15px;
                font-size: 16px;
            }

            .submit-btn {
                padding: 15px;
                font-size: 14px;
            }

            .back-btn {
                padding: 12px;
                font-size: 14px;
            }

            .form-footer {
                font-size: 12px;
                margin-top: 15px;
            }
        }

        @media (max-width: 480px) {
            .form-container {
                width: 100%;
                max-width: 320px;
                padding: 25px 20px;
            }
        }
    </style>
</head>

<body>
    <div class="form-container">
        <div class="header">
            <div class="logo-section">
                <div class="logo">
                    <img
                        src="https://tse3.mm.bing.net/th/id/OIP.pGnjqUW5JX2oohZ4_J62DQHaFj?rs=1&pid=ImgDetMain&o=7&rm=3">
                </div>
                <span>DINAS SOSIAL</span>
            </div>
            <h2 class="form-title">LOGIN</h2>
        </div>

        <div class="form-content">
            {{-- FORM LOGIN BREEZE --}}
            <form method="POST" action="{{ route('login') }}">
                @csrf

                {{-- Email --}}
                <div class="form-group">
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" id="loginEmail" name="email" placeholder="Email" value="{{ old('email') }}"
                        required autofocus>
                    @error('email')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="form-group">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" id="loginPassword" name="password" placeholder="Password" required>
                    <span class="password-toggle" onclick="togglePassword('loginPassword')">
                        <i class="fa-solid fa-eye"></i>
                    </span>
                    @error('password')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                </div>

                {{-- Remember Me --}}
                <div class="remember-me">
                    <label>
                        <input type="checkbox" name="remember">
                        Ingat saya
                    </label>
                </div>

                <div class="form-buttons">
                    <button type="submit" class="submit-btn">MASUK</button>
                </div>

                <div class="form-footer">
                    Belum punya akun? <a href="{{ route('register') }}">Register disini</a> <br>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">Lupa password?</a>
                    @endif
                </div>
            </form>
        </div>
    </div>

    <script>
        function togglePassword(inputId) {
            const input = document.getElementById(inputId);
            const toggle = input.nextElementSibling.querySelector("i");

            if (input.type === "password") {
                input.type = "text";
                toggle.classList.remove("fa-eye");
                toggle.classList.add("fa-eye-slash");
            } else {
                input.type = "password";
                toggle.classList.remove("fa-eye-slash");
                toggle.classList.add("fa-eye");
            }
        }
    </script>
</body>

</html>
