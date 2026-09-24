<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $eskul->nama_eskul }} - SMKN 1 Cijati</title>

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

        .navbar {
            background-color: #198754;
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h2 {
            color: white;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            background-color: #146c43;
            padding: 10px 18px;
            border-radius: 6px;
        }

        .navbar a:hover {
            background-color: #0f5132;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: 50px auto;
        }

        .detail-card {
            background-color: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .detail-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .detail-content {
            padding: 35px;
        }

        .detail-content h1 {
            color: #198754;
            font-size: 32px;
            margin-bottom: 15px;
        }

        .label {
            display: inline-block;
            background-color: #198754;
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 14px;
            margin-bottom: 25px;
        }

        .detail-content h3 {
            color: #198754;
            margin-bottom: 10px;
        }

        .detail-content p {
            color: #555;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            margin-top: 10px;
            padding: 12px 20px;
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

        @media (max-width: 600px) {
            .navbar {
                padding: 15px 5%;
            }

            .navbar h2 {
                font-size: 20px;
            }

            .detail-image {
                height: 250px;
            }

            .detail-content {
                padding: 20px;
            }

            .detail-content h1 {
                font-size: 26px;
            }
        }
    </style>
</head>

<body>

    <div class="navbar">
        <h2>SMKN 1 Cijati</h2>
        <a href="{{ route('ekstrakurikuler.index') }}">← Kembali</a>
    </div>

    <div class="container">

        <div class="detail-card">

            @if ($eskul->gambar)
                <img
                    src="{{ asset('images/' . $eskul->gambar) }}"
                    alt="{{ $eskul->nama_eskul }}"
                    class="detail-image"
                >
            @else
                <img
                    src="{{ asset('images/default.jpg') }}"
                    alt="{{ $eskul->nama_eskul }}"
                    class="detail-image"
                >
            @endif

            <div class="detail-content">

                <h1>{{ $eskul->nama_eskul }}</h1>

                <span class="label">Ekstrakurikuler SMKN 1 Cijati</span>

                <h3>Tentang Ekstrakurikuler</h3>

                <p>{{ $eskul->deskripsi }}</p>

                <a href="{{ route('ekstrakurikuler.index') }}" class="btn">
                    ← Kembali ke Daftar Eskul
                </a>

            </div>

        </div>

    </div>

    <div class="footer">
        <p>&copy; {{ date('Y') }} SMKN 1 Cijati</p>
    </div>

</body>

</html>