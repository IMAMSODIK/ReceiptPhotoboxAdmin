<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nun Snap Login</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Space Grotesk', sans-serif;
            background: #ffe45c;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            color: #000;
        }

        .login-card {
            width: 100%;
            max-width: 1000px;
            background: #fff;
            border: 4px solid #000;
            box-shadow: 12px 12px 0 #000;
            display: grid;
            grid-template-columns: 1fr 1fr;
            overflow: hidden;
        }

        .left-side {
            background: #ff5e5e;
            border-right: 4px solid #000;
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
        }

        .badge {
            width: fit-content;
            background: #fff;
            border: 3px solid #000;
            padding: 0.5rem 1rem;
            font-weight: 800;
            box-shadow: 4px 4px 0 #000;
            margin-bottom: 2rem;
        }

        .left-side h1 {
            font-size: 3rem;
            line-height: 1;
            margin-bottom: 1.5rem;
            font-weight: 800;
        }

        .left-side h1 span {
            background: #fff;
            padding: 0 0.4rem;
            border: 3px solid #000;
        }

        .left-side p {
            font-size: 1rem;
            line-height: 1.7;
            font-weight: 600;
            max-width: 450px;
        }

        .sticker {
            position: absolute;
            bottom: 30px;
            right: 30px;
            background: #fff;
            border: 3px solid #000;
            padding: 1rem;
            transform: rotate(-8deg);
            font-weight: 800;
            box-shadow: 5px 5px 0 #000;
        }

        .right-side {
            background: #fff;
            padding: 3rem;
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            margin-bottom: 2rem;
            font-weight: 800;
            font-size: 1.2rem;
        }

        .logo i {
            width: 50px;
            height: 50px;
            background: #000;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
        }

        .right-side h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            line-height: 1.1;
        }

        .right-side p {
            font-size: 0.95rem;
            font-weight: 500;
            line-height: 1.7;
            margin-bottom: 2rem;
        }

        .google-btn {
            width: 100%;
            height: 64px;
            border: 4px solid #000;
            background: #fff;
            box-shadow: 6px 6px 0 #000;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            font-size: 1rem;
            font-weight: 700;
            text-decoration: none;
            color: #000;
            transition: 0.15s ease;
        }

        .google-btn:hover {
            transform: translate(3px, 3px);
            box-shadow: 3px 3px 0 #000;
        }

        .google-btn i {
            font-size: 1.2rem;
        }

        .footer-text {
            margin-top: 2rem;
            font-size: 0.8rem;
            font-weight: 700;
            text-align: center;
            border-top: 3px solid #000;
            padding-top: 1rem;
        }

        @media(max-width: 880px) {
            .login-card {
                grid-template-columns: 1fr;
            }

            .left-side {
                border-right: none;
                border-bottom: 4px solid #000;
            }

            .left-side h1 {
                font-size: 2.2rem;
            }

            .right-side {
                padding: 2rem;
            }
        }
    </style>
</head>

<body>

    <div class="login-card">

        <div class="left-side">

            <div class="badge">
                ✨ FITUR BARU — SEKARANG DENGAN KERTAS STIKER!
            </div>

            <h1>
                BUAT CAFE <br>
                <span>LEBIH RAMAI</span>
            </h1>
        </div>

        <div class="right-side">

            <div class="logo">
                <i class="fas fa-camera-retro"></i>
                <span>{{ env('APP_NAME') }}</span>
            </div>

            <h2>Masuk ke Dashboard Tenant</h2>

            <p>
                Kelola transaksi, receipt photobox, branding tenant,
                dan pengalaman pelanggan dalam satu platform.
            </p>

            <a class="google-btn" href="/auth/google">
                <i class="fab fa-google"></i>
                <span>Lanjutkan dengan Google</span>
            </a>

            <div class="footer-text">
                [ STICKER • PHOTOBOX • CAFE • EXPERIENCE ]
            </div>

        </div>

    </div>

</body>

</html>