<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zon Chrysanthemum - Portal EKSA MBMB</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Chrysanthemum Page Specific Styles */
        .chrysanthemum-hero {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), 
                        url('image/chrysanthemum.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            padding: 4rem 2rem;
            text-align: left;
            position: relative;
            min-height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            animation: backgroundMove 20s ease-in-out infinite;
            overflow: hidden;
        }

        @keyframes backgroundMove {
            0%, 100% { background-position: center center; }
            25% { background-position: center top; }
            50% { background-position: center bottom; }
            75% { background-position: center center; }
        }

        .chrysanthemum-hero h1 {
            font-size: 3.5rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
            color: #ff8c00;
            animation: titleSlideIn 1.5s ease-out, titleGlow 3s ease-in-out infinite alternate;
            transform: translateX(-100px);
            opacity: 0;
            animation-fill-mode: forwards;
        }

        .chrysanthemum-hero p {
            font-size: 1.3rem;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.7);
            margin: 0;
            color: #ff8c00;
            animation: subtitleSlideIn 1.8s ease-out 0.5s, subtitleFloat 4s ease-in-out infinite alternate;
            transform: translateX(-100px);
            opacity: 0;
            animation-fill-mode: forwards;
        }

        @keyframes titleSlideIn {
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes titleGlow {
            from { text-shadow: 2px 2px 4px rgba(0,0,0,0.7), 0 0 10px rgba(255,140,0,0.3); }
            to { text-shadow: 2px 2px 4px rgba(0,0,0,0.7), 0 0 20px rgba(255,140,0,0.6); }
        }

        @keyframes subtitleSlideIn {
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes subtitleFloat {
            from { transform: translateY(0); }
            to { transform: translateY(-5px); }
        }

        .secondary-nav {
            background: #f8f9fa;
            border-bottom: 2px solid #e9ecef;
            padding: 1rem 0;
            margin-bottom: 2rem;
        }

        .secondary-nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin: 0;
            padding: 0;
        }

        .secondary-nav a {
            color: #495057;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            transition: all 0.3s ease;
            font-weight: 500;
            position: relative;
            overflow: hidden;
        }

        .secondary-nav a::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .secondary-nav a:hover::before {
            left: 100%;
        }

        .secondary-nav a:hover {
            background: #ff8c00;
            color: white;
            transform: translateY(-2px) scale(1.05);
            box-shadow: 0 5px 15px rgba(255,140,0,0.4);
        }

        .main-layout {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .main-content {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .article-header {
            padding: 2rem;
            border-bottom: 1px solid #e9ecef;
        }

        .article-date {
            color: #6c757d;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .article-title {
            color: #212529;
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .article-subtitle {
            color: #495057;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .article-content {
            padding: 2rem;
        }

        .article-content p {
            line-height: 1.7;
            margin-bottom: 1.5rem;
            color: #495057;
        }

        .jadual-image {
            text-align: center;
            margin: 2rem 0;
        }

        .jadual-image img {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .jadual-image img:hover {
            transform: scale(1.02);
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        }

        .social-share {
            display: flex;
            gap: 1rem;
            margin: 2rem 0;
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 8px;
        }

        .social-share a {
            color: #6c757d;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        .social-share a:hover {
            background: #ff8c00;
            color: white;
        }

        .sidebar {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .sidebar-widget {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .sidebar-widget:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .widget-title {
            background: linear-gradient(135deg, #ff8c00, #ffa500);
            color: white;
            padding: 1rem;
            margin: 0;
            font-size: 1.1rem;
            font-weight: 600;
        }

        .widget-content {
            padding: 1.5rem;
        }

        .search-form {
            display: flex;
            gap: 0.5rem;
        }

        .search-input {
            flex: 1;
            padding: 0.75rem;
            border: 1px solid #ced4da;
            border-radius: 5px;
            font-size: 0.9rem;
        }

        .search-btn {
            background: linear-gradient(135deg, #ff8c00, #ffa500);
            color: white;
            border: none;
            padding: 0.75rem 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .search-btn:hover {
            background: linear-gradient(135deg, #e67e00, #ff8c00);
        }

        .widget-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .widget-list li {
            border-bottom: 1px solid #e9ecef;
        }

        .widget-list li:last-child {
            border-bottom: none;
        }

        .widget-list a {
            display: block;
            padding: 0.75rem 0;
            color: #495057;
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
            padding-left: 0;
        }

        .widget-list a::before {
            content: '→';
            position: absolute;
            left: -20px;
            opacity: 0;
            transition: all 0.3s ease;
            color: #ff8c00;
        }

        .widget-list a:hover {
            color: #ff8c00;
            padding-left: 20px;
            transform: translateX(5px);
        }

        .widget-list a:hover::before {
            opacity: 1;
            left: 0;
        }

        .archive-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .archive-item {
            margin-bottom: 0.5rem;
        }

        .archive-link {
            color: #495057;
            text-decoration: none;
            font-weight: 500;
        }

        .archive-link:hover {
            color: #ff8c00;
        }

        .archive-sub {
            margin-left: 1rem;
            margin-top: 0.5rem;
        }

        .archive-sub .archive-item {
            margin-bottom: 0.25rem;
        }

        .archive-sub .archive-link {
            font-size: 0.9rem;
            font-weight: normal;
        }

        @media (max-width: 768px) {
            .main-layout {
                grid-template-columns: 1fr;
            }
            
            .chrysanthemum-hero h1 {
                font-size: 2.5rem;
            }
            
            .secondary-nav ul {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="chrysanthemum-hero">
        <div class="container">
            <h1>CHRYSANTHEMUM</h1>
            <p>Kumpulan Bunga Banda Hilir</p>
        </div>
    </div>

    <nav class="secondary-nav">
        <div class="container">
            <ul>
                <li><a href="main.php">UTAMA</a></li>
                <li><a href="dasar.php">Dasar EKSA</a></li>
                <li><a href="objektif.php">Objektif EKSA</a></li>
                <li><a href="visi.php">Visi & Misi EKSA</a></li>
                <li><a href="moto.php">Moto EKSA</a></li>
                <li><a href="logo.php">Logo EKSA MBMB</a></li>
                <li><a href="carta.php">Carta Organisasi Induk EKSA</a></li>
                <li><a href="dasar.php">Garis Panduan EKSA-MBMB</a></li>
                <li><a href="main.php">EKSA@MBMB</a></li>
            </ul>
        </div>
    </nav>

    <div class="main-layout">
        <main class="main-content">
            <div class="article-header">
                <div class="article-date">Tuesday, May 14, 2024</div>
                <h1 class="article-title">JADUAL AUDIT EKSA SUK 2024</h1>
                <h2 class="article-subtitle">AUDIT EKSA SUK 2024</h2>
            </div>
            
            <div class="article-content">
                <p>Majlis Bandaraya Melaka Bersejarah (MBMB) akan menghadapi Sesi Pengauditan Pensijilan semula EKSA oleh Jabatan Ketua Menteri Melaka seperti Jadual di bawah:</p>
                
                <div class="jadual-image">
                    <img src="image/jadualChrysanthemum.jpeg" alt="Jadual Audit EKSA SUK 2024" style="width: 100%; max-width: 800px; height: auto; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                </div>

                <div class="social-share">
                    <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
                    <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                    <a href="#"><i class="fas fa-envelope"></i> Email</a>
                    <a href="#"><i class="fas fa-print"></i> Print</a>
                    <a href="main.php"><i class="fas fa-home"></i> Home</a>
                </div>
            </div>
        </main>

        <aside class="sidebar">
            <div class="sidebar-widget">
                <h3 class="widget-title">Carian</h3>
                <div class="widget-content">
                    <form class="search-form">
                        <input type="text" class="search-input" placeholder="Cari...">
                        <button type="submit" class="search-btn">Search</button>
                    </form>
                </div>
            </div>

            <div class="sidebar-widget">
                <h3 class="widget-title">Info Zon</h3>
                <div class="widget-content">
                    <ul class="widget-list">
                        <li><a href="#">Maklumat Terkini</a></li>
                        <li><a href="#">Logo Zon</a></li>
                        <li><a href="#">Carta Organisasi Zon</a></li>
                        <li><a href="#">Carta Perbatuan Zon</a></li>
                        <li><a href="#">Pelan Lantai</a></li>
                        <li><a href="#">Galeri Aktiviti</a></li>
                    </ul>
                </div>
            </div>

            <div class="sidebar-widget">
                <h3 class="widget-title">Aktiviti Zon</h3>
                <div class="widget-content">
                    <ul class="widget-list">
                        <li><a href="#">AKTIVITI LATIHAN (1)</a></li>
                        <li><a href="#">AKTIVITI PROMOSI (1)</a></li>
                    </ul>
                </div>
            </div>

            <div class="sidebar-widget">
                <h3 class="widget-title">Jom EKSA</h3>
                <div class="widget-content">
                    <ul class="archive-list">
                        <li class="archive-item">
                            <a href="#" class="archive-link">▼ 2024 (1)</a>
                            <ul class="archive-sub">
                                <li class="archive-item">
                                    <a href="#" class="archive-link">▼ May 2024 (1)</a>
                                    <ul class="archive-sub">
                                        <li class="archive-item">
                                            <a href="#" class="archive-link">JADUAL AUDIT EKSA SUK 2024</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="archive-item">
                            <a href="#" class="archive-link">► 2023 (1)</a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
