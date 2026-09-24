<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $jurusan->nama }} - SMKN 1 Cijati</title>

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

        /* NAVBAR */
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

        /* CONTAINER */
        .container {
            width: 90%;
            max-width: 1000px;
            margin: 50px auto;
        }

        /* DETAIL CARD */
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
            margin-bottom: 10px;
            font-size: 32px;
        }

        .kode {
            display: inline-block;
            background-color: #198754;
            color: white;
            padding: 7px 15px;
            border-radius: 20px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .detail-content h3 {
            margin-top: 20px;
            margin-bottom: 10px;
            color: #198754;
        }

        .detail-content p {
            line-height: 1.8;
            color: #555;
        }

        .back {
            display: inline-block;
            margin-top: 30px;
            padding: 12px 20px;
            background-color: #198754;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        .back:hover {
            background-color: #146c43;
        }

        /* FOOTER */
        .footer {
            margin-top: 50px;
            padding: 25px;
            text-align: center;
            background-color: #198754;
            color: white;
        }

        @media (max-width: 600px) {
            .detail-image {
                height: 250px;
            }

            .detail-content {
                padding: 20px;
            }

            .detail-content h1 {
                font-size: 25px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <div class="navbar">
        <h2>SMKN 1 Cijati</h2>

        <a href="{{ url('/jurusan') }}">
            Kembali
        </a>
    </div>


    <!-- CONTENT -->
    <div class="container">

        <div class="detail-card">

            <!-- GAMBAR -->
            @if ($jurusan->gambar)
                <img
                    src="{{ asset('images/' . $jurusan->gambar) }}"
                    alt="{{ $jurusan->nama }}"
                    class="detail-image"
                >
            @else
                <img
                    src="{{ asset('images/default.jpg') }}"
                    alt="{{ $jurusan->nama }}"
                    class="detail-image"
                >
            @endif


            <!-- DETAIL -->
            <div class="detail-content">

                <h1>{{ $jurusan->nama }}</h1>

                <span class="kode">
                    Program Keahlian SMKN 1 Cijati
                </span>

                <h3>Deskripsi Jurusan</h3>

                <p>
                    {{ $jurusan->deskripsi }}
                </p>

                <a href="{{ url('/jurusan') }}" class="back">
                    ← Kembali ke Daftar Jurusan
                </a>

            </div>

        </div>

    </div>


    <!-- FOOTER -->
    <div class="footer">
        <p>
            &copy; {{ date('Y') }} SMKN 1 Cijati
        </p>
    </div>

</body>
</html>
