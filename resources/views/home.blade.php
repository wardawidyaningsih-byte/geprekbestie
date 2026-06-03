<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeprekBestie</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            font-family:'Poppins',sans-serif;
            background:#FFF8F0;
        }

        .navbar{
            background:white;
            box-shadow:0 2px 20px rgba(0,0,0,.08);
        }

        .navbar-brand{
            font-size:32px;
            font-weight:800;
            color:#f97316 !important;
        }

        .hero{
            min-height:90vh;
            background:
            linear-gradient(rgba(0,0,0,.55),rgba(0,0,0,.55)),
            url('https://images.unsplash.com/photo-1562967916-eb82221dfb92?q=80&w=2000');
            background-size:cover;
            background-position:center;
            display:flex;
            align-items:center;
        }

        .hero h1{
            font-size:72px;
            font-weight:800;
            color:white;
        }

        .hero span{
            color:#fb923c;
        }

        .hero p{
            font-size:22px;
            color:#f3f4f6;
        }

        .btn-orange{
            background:#f97316;
            color:white;
            border:none;
            padding:14px 30px;
            border-radius:50px;
            font-weight:bold;
        }

        .btn-orange:hover{
            background:#ea580c;
            color:white;
        }

        .btn-glass{
            background:rgba(255,255,255,.15);
            border:1px solid rgba(255,255,255,.3);
            color:white;
            backdrop-filter:blur(10px);
            padding:14px 30px;
            border-radius:50px;
            text-decoration:none;
        }

        .stats{
            margin-top:-60px;
            position:relative;
            z-index:99;
        }

        .stats-box{
            background:white;
            border-radius:20px;
            padding:25px;
            text-align:center;
            box-shadow:0 10px 25px rgba(0,0,0,.08);
        }

        .stats-box h2{
            color:#f97316;
            font-weight:800;
        }

        .section-title{
            font-size:48px;
            font-weight:800;
            text-align:center;
            margin-bottom:10px;
        }

        .section-sub{
            text-align:center;
            color:gray;
            margin-bottom:50px;
        }

        .card-geprek{
            border:none;
            border-radius:25px;
            overflow:hidden;
            box-shadow:0 10px 30px rgba(0,0,0,.08);
            transition:.3s;
        }

        .card-geprek:hover{
            transform:translateY(-10px);
        }

        .card-geprek img{
            height:250px;
            object-fit:cover;
        }

        .rating{
            background:#FFF4D6;
            color:#B7791F;
            padding:5px 12px;
            border-radius:30px;
            font-weight:bold;
        }

        .maps{
            border-radius:25px;
            overflow:hidden;
            box-shadow:0 10px 25px rgba(0,0,0,.08);
        }

        .about{
            background:white;
            padding:80px 0;
        }

        .about img{
            border-radius:25px;
        }

        footer{
            background:#0f172a;
            color:white;
            text-align:center;
            padding:30px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg py-3">
    <div class="container">
        <a class="navbar-brand" href="#">🍗 GeprekBestie</a>

        <div class="ms-auto">
            <a href="#" class="me-4 text-dark text-decoration-none">Home</a>
            <a href="#stores" class="me-4 text-dark text-decoration-none">Daftar Geprek</a>
            <a href="#maps" class="me-4 text-dark text-decoration-none">Lokasi</a>
            <a href="#about" class="me-4 text-dark text-decoration-none">Tentang</a>

            <a href="/login" class="btn btn-orange">
                Login
            </a>
        </div>
    </div>
</nav>

<section class="hero">
    <div class="container">

        <span class="badge bg-danger p-3 rounded-pill mb-3">
            🔥 Pedas • Gurih • Favorit
        </span>

        <h1>
            Temukan
            <span>Geprek Terbaik</span>
            di Kotamu
        </h1>

        <p class="my-4">
            Cari lokasi, harga, menu, dan informasi ayam geprek favoritmu dengan mudah.
        </p>

        <a href="#stores" class="btn btn-orange me-3">
            🍗 Jelajahi Sekarang
        </a>

        <a href="#maps" class="btn-glass">
            📍 Lihat Lokasi
        </a>

    </div>
</section>

<div class="container stats">
    <div class="row g-4">

        <div class="col-md-3">
            <div class="stats-box">
                <h2>50+</h2>
                <p>Toko Geprek</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="stats-box">
                <h2>200+</h2>
                <p>Menu</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="stats-box">
                <h2>1000+</h2>
                <p>Pengunjung</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="stats-box">
                <h2>4.9</h2>
                <p>Rating</p>
            </div>
        </div>

    </div>
</div>

<section id="stores" class="py-5">
    <div class="container">

        <h2 class="section-title">
            🍗 Daftar Toko Geprek
        </h2>

        <p class="section-sub">
            Temukan ayam geprek favoritmu
        </p>

        <div class="row">

            @foreach($stores as $store)

            <div class="col-md-4 mb-4">
                <div class="card card-geprek">

                    <img src="https://images.unsplash.com/photo-1512058564366-18510be2db19?q=80&w=1200"
                         class="card-img-top">

                    <div class="card-body">

                        <div class="d-flex justify-content-between">

                            <h4>{{ $store->nama_toko }}</h4>

                            <span class="rating">
                                ⭐ 4.8
                            </span>

                        </div>

                        <p class="text-muted">
                            📍 {{ $store->alamat }}
                        </p>

                        <a href="#" class="btn btn-orange w-100">
                            Lihat Detail
                        </a>

                    </div>

                </div>
            </div>

            @endforeach

        </div>

    </div>
</section>

<section id="maps" class="py-5 bg-light">
    <div class="container">

        <h2 class="section-title">
            📍 Lokasi Geprek
        </h2>

        <p class="section-sub">
            Temukan lokasi toko dengan mudah
        </p>

        <div class="maps">

            <iframe
                src="https://maps.google.com/maps?q=pontianak&t=&z=13&ie=UTF8&iwloc=&output=embed"
                width="100%"
                height="500"
                style="border:0;">
            </iframe>

        </div>

    </div>
</section>

<section id="about" class="about">
    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6">
                <img
                    src="https://images.unsplash.com/photo-1544025162-d76694265947?q=80&w=1200"
                    class="img-fluid">
            </div>

            <div class="col-md-6">

                <span style="color:#f97316;font-weight:bold;">
                    TENTANG GEPREKBESTIE
                </span>

                <h2 class="display-4 fw-bold mt-3">
                    Informasi Geprek Terlengkap
                </h2>

                <p class="mt-4 text-secondary">
                    GeprekBestie membantu pengguna menemukan lokasi ayam geprek terbaik,
                    melihat harga, menu, rating, alamat toko, dan akses WhatsApp setelah login.
                </p>

            </div>

        </div>

    </div>
</section>

<footer>
    🍗 GeprekBestie © 2025
</footer>

</body>
</html>