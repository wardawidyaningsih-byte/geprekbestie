<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $store->nama_toko }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#FFF8F0;
            font-family:'Poppins',sans-serif;
        }

        .hero{
            height:300px;
            background:#f97316;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .hero h1{
            color:white;
            font-weight:800;
        }

        .card-detail{
            border:none;
            border-radius:20px;
            box-shadow:0 10px 25px rgba(0,0,0,.08);
        }
    </style>
</head>
<body>

<div class="hero">
    <h1>{{ $store->nama_toko }}</h1>
</div>

<div class="container py-5">

    <a href="/" class="btn btn-secondary mb-4">
        ← Kembali
    </a>

    <div class="card card-detail p-4">

        <h3>{{ $store->nama_toko }}</h3>

        <p>
            📍 {{ $store->alamat }}
        </p>

        <hr>

        <h5>Informasi Toko</h5>

        <p>
            Ini adalah halaman detail toko.
        </p>

    </div>

</div>

</body>
</html>