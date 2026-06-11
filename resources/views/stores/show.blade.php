<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $store->nama_toko }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body{
            font-family:'Poppins',sans-serif;
            background:#FFF8F0;
        }

        .hero{
            height:400px;
            background:
            linear-gradient(rgba(0,0,0,.45),rgba(0,0,0,.45)),
            url('https://images.unsplash.com/photo-1512058564366-18510be2db19?q=80&w=1200');
            background-size:cover;
            background-position:center;
            display:flex;
            justify-content:center;
            align-items:center;
            text-align:center;
        }

        .hero-content h1{
            color:white;
            font-size:60px;
            font-weight:800;
        }

        .hero-content p{
            color:white;
            font-size:18px;
        }

        .detail-card{
            margin-top:-70px;
            border:none;
            border-radius:25px;
            padding:35px;
            background:white;
            box-shadow:0 15px 30px rgba(0,0,0,.1);
        }

        .rating{
            background:#FFF4D6;
            color:#B7791F;
            padding:8px 15px;
            border-radius:30px;
            font-weight:700;
        }

        .info-box{
            background:#f8fafc;
            border-radius:15px;
            padding:20px;
            height:100%;
        }

        .btn-orange{
            background:#f97316;
            color:white;
            border:none;
            border-radius:50px;
            padding:12px 25px;
            font-weight:600;
        }

        .btn-orange:hover{
            background:#ea580c;
            color:white;
        }

        .btn-success{
            border-radius:50px;
            padding:12px 25px;
            font-weight:600;
        }

        footer{
            background:#111827;
            color:white;
            text-align:center;
            padding:25px;
            margin-top:80px;
        }
    </style>
</head>
<body>

<div class="hero">
    <div class="hero-content">
        <h1>{{ $store->nama_toko }}</h1>
        <p>Ayam Geprek Favorit Bengkalis</p>
    </div>
</div>

<div class="container">

    <div class="detail-card">

        <a href="{{ route('home') }}" class="btn btn-secondary mb-4">
            ← Kembali
        </a>

        <div class="d-flex justify-content-between align-items-center mb-3">

            <h2>{{ $store->nama_toko }}</h2>

            <span class="rating">
                ⭐ 4.8
            </span>

        </div>

        <p class="text-muted fs-5">
            📍 {{ $store->alamat }}
        </p>

        <div class="row mt-4">

            <div class="col-md-6 mb-3">

                <div class="info-box">

                    <h4>🍗 Tentang Toko</h4>

                    <p>
                        {{ $store->nama_toko }}
                        merupakan salah satu tempat ayam geprek favorit
                        di Bengkalis dengan cita rasa pedas, gurih,
                        dan harga yang terjangkau.
                    </p>

                </div>

            </div>

            <div class="col-md-6 mb-3">

                <div class="info-box">

                    <h4>📌 Informasi</h4>

                    <p><strong>Alamat:</strong> {{ $store->alamat }}</p>
                    <p><strong>Rating:</strong> 4.8 / 5.0</p>
                    <p><strong>Status:</strong> Buka</p>

                </div>

            </div>

        </div>

        <div class="mt-4 d-flex gap-3">

            <a href="#" class="btn btn-success">
                💬 WhatsApp
            </a>

            <a href="#" class="btn btn-orange">
                📍 Lihat Lokasi
            </a>

        </div>

    </div>

</div>

<footer>
    🍗 GeprekBestie © 2026
</footer>

</body>
</html>