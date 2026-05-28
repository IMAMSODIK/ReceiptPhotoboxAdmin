<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Receipt Photobox — Neo Brutalism</title>
    <!-- Google Fonts: monospace + sans serif tebal untuk kesan brutalism -->
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&family=Inter:wght@700;800;900&display=swap"
        rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f7f5f0;
            /* latar belakang agak kertas, biar kotak pop */
            font-family: 'Space Mono', monospace;
        }

        .brutal-box {
            border: 3px solid #000;
            background-color: #fff;
            box-shadow: 6px 6px 0 0 #000;
            transition: all 0.1s ease;
        }

        /* efek hover tambahan brutal (opsional) */
        .brutal-box:hover {
            transform: translate(-2px, -2px);
            box-shadow: 10px 10px 0 0 #000;
        }

        /* Container utama dengan margin atas & kiri-kanan (jarak antar kotak) */
        .page-container {
            max-width: 1280px;
            margin: 2rem 2rem 2rem 2rem;
            /* margin atas 2rem, kiri/kanan 2rem, bawah 2rem */
            background: transparent;
        }

        /* untuk layar kecil tetap ada jarak */
        @media (max-width: 768px) {
            .page-container {
                margin: 1.5rem 1rem 1.5rem 1rem;
            }
        }

        /* ========== TOPBAR HEADER ========== */
        /* konsep: seperti kotak penuh dengan navigasi, jarak antar elemen */
        .topbar {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            padding: 0 1.8rem;
            border: 3px solid #000;
            box-shadow: 6px 6px 0 0 #000;
            margin-bottom: 2.5rem;
            /* jarak antara header dan hero */
        }

        .logo-area {
            display: flex;
            align-items: baseline;
            gap: 0.5rem;
            flex-wrap: wrap;
        }

        .logo-icon {
            width: 100px;
        }

        /* navigasi menu */
        .nav-links {
            display: flex;
            gap: 1.2rem;
            flex-wrap: wrap;
        }

        .nav-links a {
            text-decoration: none;
            font-family: 'Space Mono', monospace;
            font-weight: 700;
            font-size: 1rem;
            color: #000;
            background: #fff;
            padding: 0.5rem 1rem;
            border: 2px solid #000;
            box-shadow: 2px 2px 0 0 #000;
            transition: 0.05s linear;
            text-transform: uppercase;
        }

        .nav-links a:hover {
            background: #000;
            color: #fff;
            box-shadow: none;
            transform: translate(2px, 2px);
        }

        .cta-top {
            background-color: #ff5e5e;
            border: 2px solid #000;
            padding: 0.6rem 1.3rem;
            font-weight: 800;
            font-family: 'Inter', sans-serif;
            font-size: 0.9rem;
            box-shadow: 3px 3px 0 0 #000;
            transition: 0.05s linear;
            cursor: pointer;
            text-transform: uppercase;
        }

        .cta-top:hover {
            background-color: #ff2a2a;
            transform: translate(2px, 2px);
            box-shadow: none;
        }

        /* ========== HERO SECTION ========== */
        /* seperti kotak besar dengan gaya neo brutalism, jarak margin dari topbar sudah ada */
        .hero {
            display: flex;
            flex-wrap: wrap;
            background-color: #ffffff;
            border: 3px solid #000;
            box-shadow: 10px 10px 0 0 #000;
            overflow: hidden;
        }

        /* sisi kiri konten */
        .hero-content {
            flex: 1.2;
            padding: 2.5rem 2rem;
            background-color: #f2f0e6;
            border-right: 3px solid #000;
        }

        .hero-badge {
            display: inline-block;
            background: #000;
            color: #eaff6e;
            font-weight: 800;
            padding: 0.3rem 1rem;
            font-size: 0.75rem;
            letter-spacing: 2px;
            margin-bottom: 1.2rem;
            border: 1px solid #000;
            text-transform: uppercase;
        }

        .hero-title {
            font-family: 'Inter', sans-serif;
            font-weight: 800;
            font-size: 3.5rem;
            line-height: 1.1;
            letter-spacing: -0.02em;
            margin-bottom: 1rem;
            color: #1a1a1a;
            text-transform: uppercase;
        }

        .hero-title span {
            background: #ffde6e;
            padding: 0 0.2rem;
            display: inline-block;
            border: 2px solid #000;
            box-shadow: 3px 3px 0 0 #000;
        }

        .hero-desc {
            font-size: 1rem;
            line-height: 1.5;
            margin-bottom: 2rem;
            font-weight: 500;
            background: #fff;
            padding: 1rem;
            border: 2px solid #000;
            box-shadow: 3px 3px 0 0 #ccc;
            max-width: 90%;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            margin-top: 1rem;
        }

        .btn-primary {
            background: #2b2b2b;
            color: #fff;
            border: 2px solid #000;
            padding: 0.8rem 1.8rem;
            font-family: 'Inter', sans-serif;
            font-weight: 800;
            font-size: 1.1rem;
            text-transform: uppercase;
            box-shadow: 5px 5px 0 0 #000;
            cursor: pointer;
            transition: 0.07s linear;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }

        .btn-primary:hover {
            background: #000;
            transform: translate(2px, 2px);
            box-shadow: 2px 2px 0 0 #000;
        }

        .btn-secondary {
            background: #ffffff;
            color: #000;
            border: 2px solid #000;
            padding: 0.8rem 1.8rem;
            font-family: 'Space Mono', monospace;
            font-weight: 700;
            font-size: 1rem;
            text-transform: uppercase;
            box-shadow: 5px 5px 0 0 #000;
            cursor: pointer;
            transition: 0.07s linear;
            text-decoration: none;
            display: inline-block;
        }

        .btn-secondary:hover {
            background: #000;
            color: white;
            transform: translate(2px, 2px);
            box-shadow: 2px 2px 0 0 #000;
        }

        /* sisi kanan hero — visual kotak foto ala photobox + struk */
        .hero-visual {
            flex: 1;
            background-color: #d7eaff;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        /* mockup "receipt photobox" berupa tumpukan elemen brutal */
        .photobox-stack {
            width: 100%;
            max-width: 280px;
            position: relative;
        }

        .polaroid-card {
            background: #fff3cf;
            border: 3px solid #000;
            box-shadow: 8px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 1rem 1rem 1.8rem 1rem;
            transform: rotate(-2deg);
            transition: transform 0.2s;
        }

        .polaroid-card:hover {
            transform: rotate(0deg);
        }

        .photo-placeholder {
            background: #b0c4de;
            width: 100%;
            aspect-ratio: 1 / 1;
            border: 2px solid #000;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            font-weight: bold;
            color: #1f1f1f;
            margin-bottom: 1rem;
            background-image: repeating-linear-gradient(45deg, #ddd 0px, #ddd 2px, #f0f0f0 2px, #f0f0f0 8px);
        }

        .receipt-tag {
            background: white;
            border: 2px solid #000;
            font-family: monospace;
            font-size: 0.7rem;
            padding: 0.3rem;
            display: flex;
            justify-content: space-between;
            font-weight: bold;
            margin-top: 0.5rem;
        }

        .receipt-strip {
            background: #f9e45b;
            margin-top: 1rem;
            padding: 0.5rem;
            border: 2px solid #000;
            font-family: monospace;
            font-size: 0.7rem;
            text-align: center;
            font-weight: bold;
            text-transform: uppercase;
        }

        .floating-element {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background: #ffb347;
            padding: 0.4rem 0.9rem;
            border: 2px solid #000;
            font-weight: bold;
            font-size: 0.8rem;
            transform: rotate(3deg);
        }

        @media (max-width: 800px) {
            .hero-title {
                font-size: 2.2rem;
            }

            .hero-content {
                border-right: none;
                border-bottom: 3px solid #000;
            }

            .hero {
                flex-direction: column;
            }

            .hero-desc {
                max-width: 100%;
            }

            .topbar {
                flex-direction: column;
                gap: 1rem;
                align-items: stretch;
                text-align: center;
            }

            .nav-links {
                justify-content: center;
            }

            .logo-area {
                justify-content: center;
            }

            .cta-top {
                align-self: center;
            }
        }

        /* tambahan sentuhan brutal: garis miring dan background tekstur */
        .brutal-bg-pattern {
            background-image: radial-gradient(#00000010 1.5px, transparent 1.5px);
            background-size: 12px 12px;
        }

        /* kotak floating receipt tambahan (neo) */
        .receipt-corner {
            margin-top: 1rem;
            font-size: 0.7rem;
            background: #000;
            color: #f9e45b;
            padding: 0.3rem;
            text-align: center;
            border: 1px solid #000;
        }
    </style>
</head>

<body class="brutal-bg-pattern">
    <div class="page-container">
        <!-- TOPBAR HEADER : kotak dengan jarak margin atas dan kiri kanan (sudah ada di container)-->
        <header class="topbar">
            <div class="logo-area">
                <div class="logo-icon">
                    <img src="{{ asset('dashboard_assets/images/brand/logo/logo-white.png') }}" alt=""
                        width="100%">
                </div>
            </div>
            <div class="nav-links">
                <a href="#">home</a>
                <a href="#">fitur</a>
                <a href="#">cara kerja</a>
                <a href="#">galeri</a>
            </div>
            <a href="/login" style="text-decoration: none; color: inherit;">
                <div class="cta-top brutal-box"
                    style="background:#ff5e5e; padding:0.5rem 1rem; box-shadow:4px 4px 0 #000;">
                    Dapatkan Box
                </div>
            </a>
        </header>

        <!-- HERO SECTION : Kotak utama jarak dr topbar sudah margin bottom topbar, margin dalam container -->
        <section class="hero">
            <div class="hero-content">
                <div class="hero-badge">✨ FITUR BARU — SEKARANG DENGAN KERTAS STIKER!</div>

                <h1 class="hero-title">
                    BUAT CAFE LEBIH <span>RAMAI & VIRAL</span><br>
                    DENGAN <span>RECEIPT PHOTOBOX</span>
                </h1>

                <p class="hero-desc">
                    Tambahkan pengalaman unik di cafe, booth, atau store Anda melalui receipt photobox
                    yang dapat dicetak dan dibagikan pelanggan. Jadikan setiap kunjungan lebih berkesan,
                    lebih instagramable, dan mendorong pelanggan untuk datang kembali bersama teman mereka.
                </p>

                <div class="hero-buttons">
                    <a href="/login" style="text-decoration: none; color: inherit;">
                        <button class="btn-primary">Dapatkan Sekarang</button>
                    </a>
                    <button class="btn-secondary">MODEL BOX</button>
                </div>
            </div>

            <div class="hero-visual">
                <div class="photobox-stack">
                    <div class="polaroid-card">
                        <img src="{{ asset('dashboard_assets/images/produk/show_1.jpeg') }}" alt=""
                            width="100%">
                    </div>
                    <div class="floating-element brutal-box" style="background:#71efb6;">
                        #tempel_dimana_aja
                    </div>
                </div>
                <div class="receipt-corner"
                    style="margin-top:1.5rem; width:100%; background:#1e1e1e; border:2px solid #000;">
                    <span style="letter-spacing: 2px;">[ STICKER•PHOTOBOX•CAFE ]</span>
                </div>
                <p
                    style="font-size:0.65rem; margin-top: 1rem; text-align: center; font-weight: bold; border-top: 2px solid black; padding-top: 0.5rem;">
                    ✨ FITUR BARU! Cetak dengan kertas stiker — langsung tempel di laptop, motor, tumbler, atau dimana
                    saja.
                </p>
            </div>
        </section>

        <!-- tambahan section kecil untuk memperkuat jarak dan vibe, optional tapi tetap mempertahankan margin atas dalam container -->
        <div style="margin-top: 2rem; display: flex; gap: 1.5rem; flex-wrap: wrap; justify-content: space-between;">
            <div class="brutal-box" style="flex:1; padding:1rem; background:#f9f3d9; text-align:center;">
                <div style="font-size: 2rem;">📦</div>
                <h3 style="font-family: 'Inter'; margin:0.5rem 0;">Kotak + Struk</h3>
                <p style="font-size:0.75rem;">Desain berani dengan border tebal dan bayangan keras</p>
            </div>
            <div class="brutal-box" style="flex:1; padding:1rem; background:#c9e9ff; text-align:center;">
                <div style="font-size: 2rem;">🧾</div>
                <h3 style="font-family: 'Inter'; margin:0.5rem 0;">Resi Custom</h3>
                <p style="font-size:0.75rem;">Tulis caption, tanggal, dan memo ala struk belanja</p>
            </div>
            <div class="brutal-box" style="flex:1; padding:1rem; background:#ffcc88; text-align:center;">
                <div style="font-size: 2rem;">⚡</div>
                <h3 style="font-family: 'Inter'; margin:0.5rem 0;">Neo-Brutal</h3>
                <p style="font-size:0.75rem;">Tanpa kemewahan palsu. tegas dan fungsional</p>
            </div>
        </div>

        <!-- footer kecil yang konsisten dengan jarak margin -->
        <footer
            style="margin-top: 2.5rem; border-top: 3px solid #000; padding: 1.2rem 0.5rem; text-align: center; font-size: 0.7rem; font-weight: bold;">
            <span>© 2025 RECEIPT PHOTOBOX — brutalist aesthetic • every box like a receipt of memory</span>
        </footer>
    </div>
</body>

</html>
