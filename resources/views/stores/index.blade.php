<!DOCTYPE html>
<html>
<head>
    <title>GeprekBestie</title>
</head>
<body>

    <h1>Daftar Toko Geprek 🍗</h1>

    @forelse($stores as $store)
        <div style="border:1px solid #ccc; padding:10px; margin:10px;">
            <h3>{{ $store->nama_toko }}</h3>
            <p>{{ $store->alamat }}</p>
        </div>
    @empty
        <p>Belum ada toko.</p>
    @endforelse

</body>
</html>