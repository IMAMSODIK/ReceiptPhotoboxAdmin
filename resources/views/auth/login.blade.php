<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Corporate Portal | Login with Google</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('login_assets/style.css') }}">
</head>

<body>

    <div class="corporate-container">
        <div class="hero-section">
            <img class="hero-image"
                src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&h=1000&fit=crop"
                alt="Corporate Team Portrait"
                srcset="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&h=800&fit=crop 600w,
                     https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=1200&h=1600&fit=crop 1200w"
                sizes="(max-width: 880px) 100vw, 50vw">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <div class="company-badge">
                    <i class="fas fa-camera-retro"></i>
                    <span>{{ env('APP_NAME') }}</span>
                </div>
                <h2>Buat Booth Photobox Anda Lebih Profesional</h2>
                <p>Gunakan sistem receipt photobox modern untuk memberikan pengalaman yang lebih praktis, hasil yang
                    lebih eksklusif, dan branding yang lebih menarik bagi setiap pelanggan.</p>
            </div>
        </div>

        <div class="login-section">
            <div class="login-header">
                <div class="logo-icon">
                    <i class="fas fa-briefcase"></i>
                    <span>{{ env('APP_NAME') }}</span>
                </div>
                <h1>Masuk ke Akun Anda</h1>
                <p class="greeting">Kelola receipt photobox, transaksi, dan pengalaman pelanggan Anda dalam satu
                    platform.</p>
            </div>

            <button id="googleCorporateBtn" class="google-btn">
                <i class="fab fa-google"></i>
                <span>Lanjutkan dengan Google</span>
                <i class="fas fa-arrow-right" style="font-size: 0.85rem; opacity: 0.7;"></i>
            </button>

            <div class="divider">
                <span>Akses terenkripsi</span>
            </div>

            <div class="info-links">
                <a href="#" id="helpLink"><i class="far fa-question-circle"></i> Bantuan akses</a>
                <a href="#" id="policyLink"><i class="fas fa-lock"></i> Kebijakan perusahaan</a>
            </div>
        </div>
    </div>

    <script src="{{ asset('login_assets/script.js') }}"></script>
</body>

</html>
