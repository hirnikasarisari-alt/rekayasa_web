<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Company Profile</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #fdf7fa;
            color: #444;
        }

        /* Navbar */
        nav {
            background: white;
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 3px 15px rgba(0,0,0,0.08);
        }

        .logo {
            color: #d85b91;
            font-size: 22px;
            font-weight: bold;
        }

        nav a {
            text-decoration: none;
            color: #666;
            margin-left: 25px;
        }

        nav a:hover {
            color: #d85b91;
        }

        /* Hero */
        .hero {
            min-height: 420px;
            padding: 70px 8%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: linear-gradient(135deg, #ffe4f0, #e3f2ff);
        }

        .hero-text {
            max-width: 550px;
        }

        .hero h1 {
            font-size: 42px;
            color: #d85b91;
            margin-bottom: 18px;
        }

        .hero p {
            font-size: 17px;
            line-height: 1.7;
            color: #666;
            margin-bottom: 25px;
        }

        .button {
            display: inline-block;
            background: #d85b91;
            color: white;
            padding: 13px 25px;
            border-radius: 12px;
            text-decoration: none;
        }

        .button:hover {
            background: #c84d83;
        }

        .hero-icon {
            font-size: 130px;
        }

        /* Tentang */
        .section {
            padding: 60px 8%;
            text-align: center;
        }

        .section h2 {
            color: #d85b91;
            margin-bottom: 15px;
            font-size: 30px;
        }

        .section > p {
            max-width: 700px;
            margin: auto;
            line-height: 1.7;
            color: #666;
        }

        /* Layanan */
        .services {
            display: flex;
            justify-content: center;
            gap: 25px;
            margin-top: 35px;
            flex-wrap: wrap;
        }

        .card {
            width: 250px;
            background: white;
            padding: 30px 20px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        .card-icon {
            font-size: 45px;
            margin-bottom: 15px;
        }

        .card h3 {
            color: #555;
            margin-bottom: 10px;
        }

        .card p {
            color: #777;
            line-height: 1.5;
            font-size: 14px;
        }

        /* Kontak */
        .contact {
            background: #fff0f6;
        }

        .contact p {
            margin: 8px 0;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            background: white;
            color: #888;
            font-size: 14px;
        }

        @media (max-width: 700px) {
            .hero {
                text-align: center;
                flex-direction: column;
                gap: 30px;
            }

            .hero h1 {
                font-size: 32px;
            }

            .hero-icon {
                font-size: 80px;
            }

            nav {
                flex-direction: column;
                gap: 15px;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav>
        <div class="logo">Rekayasa Web</div>

        <div>
            <a href="/">Tugas</a>
            <a href="/login">Login</a>
            <a href="/home">Home</a>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero">

        <div class="hero-text">
            <h1>Selamat datang di halaman home tugas Hirnika</h1>

            <p>
               Hai ini halaman tugas saya untuk matakuliah rekayasa web,selamat datang!
            </p>

            <a href="#tentang" class="button">
                Selengkapnya
            </a>
        </div>

        <div class="hero-icon">
            💻✨
        </div>

    </section>

    <!-- Tentang -->
    <section class="section" id="tentang">

        <h2>Tentang Website ini</h2>

        <p>
            Website ini dibuat sebagai tugas mata kuliah Rekayasa Web semester 3.
        </p>

    </section>

    <!-- Footer -->
    <footer>
        © 2026 Rekayasa Web semester 3.
    </footer>

</body>
</html>