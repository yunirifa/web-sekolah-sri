<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Jurusan - SMKN 1 Cijati</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f7f6;
        }

        .header {
            background: #198754;
            color: white;
            text-align: center;
            padding: 40px 20px;
        }

        .header h1 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .header p {
            font-size: 18px;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 40px auto;
        }

        .judul {
            text-align: center;
            margin-bottom: 30px;
        }

        .judul h2 {
            color: #198754;
            font-size: 28px;
        }

        .judul p {
            margin-top: 10px;
            color: #666;
        }

        .jurusan-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }

        .card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-8px);
        }

        .card img {
    width: 100%;
    height: 180px;
    object-fit: contain;
    padding: 20px;
    background: #f8f9fa;
}

        .card-content {
            padding: 20px;
        }

        .card-content h3 {
            color: #198754;
            margin-bottom: 10px;
            font-size: 21px;
        }

        .card-content p {
            color: #666;
            line-height: 1.6;
            font-size: 14px;
        }

        .footer {
            margin-top: 50px;
            padding: 25px;
            text-align: center;
            background: #198754;
            color: white;
        }

        @media (max-width: 900px) {
            .jurusan-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .jurusan-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- Header -->
    <div class="header">
        <h1>SMKN 1 Cijati</h1>
        <p>Jurusan / Program Keahlian</p>
    </div>

    <!-- Content -->
    <div class="container">

        <div class="judul">
            <h2>Jurusan SMKN 1 Cijati</h2>
            <p>Berikut adalah program keahlian yang tersedia di SMKN 1 Cijati.</p>
        </div>

        <div class="jurusan-container">

            <!-- RPL -->
            <div class="card">
                <img src="{{ asset('images/rpl.jpg') }}" alt="RPL">

                <div class="card-content">
                    <h3>RPL</h3>

                    <p>
                        Rekayasa Perangkat Lunak merupakan jurusan yang
                        mempelajari pemrograman, pembuatan website,
                        aplikasi, database, dan pengembangan perangkat lunak.
                    </p>
                </div>
            </div>

            <!-- TKR -->
            <div class="card">
                <img src="{{ asset('images/tkr.jpg') }}" alt="TKR">

                <div class="card-content">
                    <h3>TKR</h3>

                    <p>
                        Teknik Kendaraan Ringan merupakan jurusan yang
                        mempelajari perawatan, perbaikan, dan sistem kendaraan
                        ringan khususnya mobil.
                    </p>
                </div>
            </div>

            <!-- BD -->
            <div class="card">
                <img src="{{ asset('images/bd.jpg') }}" alt="BD">

                <div class="card-content">
                    <h3>BD</h3>

                    <p>
                        Bisnis Daring mempelajari dunia bisnis,
                        pemasaran, perdagangan online, pengelolaan toko
                        digital, dan strategi pemasaran melalui internet.
                    </p>
                </div>
            </div>

            <!-- APHP -->
            <div class="card">
                <img src="{{ asset('images/aphp.jpg') }}" alt="APHP">

                <div class="card-content">
                    <h3>APHP</h3>

                    <p>
                        Agribisnis Pengolahan Hasil Pertanian mempelajari
                        pengolahan hasil pertanian menjadi produk yang
                        memiliki nilai tambah dan nilai ekonomi.
                    </p>
                </div>
            </div>

        </div>

    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; {{ date('Y') }} SMKN 1 Cijati</p>
    </div>

</body>
</html>
