<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $galeri->judul }} - SMKN 1 Cijati</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            color: #333;
        }

        .header {
            background-color: #198754;
            color: white;
            text-align: center;
            padding: 45px 20px;
        }

        .header h1 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .container {
            width: 90%;
            max-width: 800px;
            margin: 40px auto;
        }

        .detail-card {
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .detail-card img {
            width: 100%;
            max-height: 450px;
            object-fit: cover;
        }

        .detail-content {
            padding: 30px;
        }

        .detail-content h2 {
            color: #198754;
            font-size: 26px;
            margin-bottom: 12px;
        }

        .kategori {
            display: inline-block;
            margin-bottom: 15px;
            padding: 4px 10px;
            background-color: #e8f5e9;
            color: #198754;
            border-radius: 20px;
            font-size: 12px;
        }

        .detail-content p.deskripsi {
            margin-top: 15px;
            line-height: 1.6;
            color: #555;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 18px;
            background-color: #198754;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        .btn:hover {
            background-color: #146c43;
        }

        .footer {
            margin-top: 50px;
            padding: 25px;
            text-align: center;
            background-color: #198754;
            color: white;
        }
    </style>
</head>

<body>

    <div class="header">
        <h1>SMKN 1 Cijati</h1>
        <p>Detail Galeri</p>
    </div>

    <div class="container">
        <div class="detail-card">

            @if ($galeri->gambar)
                <img src="{{ asset('uploads/galeri/' . $galeri->gambar) }}" alt="{{ $galeri->judul }}">
            @else
                <img src="{{ asset('images/default.jpg') }}" alt="Gambar Galeri">
            @endif

            <div class="detail-content">
                <h2>{{ $galeri->judul }}</h2>

                @if ($galeri->kategori)
                    <span class="kategori">{{ $galeri->kategori }}</span>
                @endif

                @if ($galeri->deskripsi)
                    <p class="deskripsi">{{ $galeri->deskripsi }}</p>
                @endif

                <br>
                <a href="{{ route('galeri.index') }}" class="btn">&larr; Kembali ke Galeri</a>
            </div>

        </div>
    </div>

    <div class="footer">
        <p>&copy; {{ date('Y') }} SMKN 1 Cijati</p>
    </div>

</body>

</html>