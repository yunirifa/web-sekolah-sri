<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ekstrakurikuler - SMKN 1 Cijati</title>

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

        /* HEADER */
        .header {
            background: #198754;
            color: white;
            text-align: center;
            padding: 45px 20px;
        }

        .header h1 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .header p {
            font-size: 17px;
        }

        /* CONTAINER */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 40px auto;
        }

        .judul {
            text-align: center;
            margin-bottom: 35px;
        }

        .judul h2 {
            color: #198754;
            font-size: 28px;
            margin-bottom: 10px;
        }

        .judul p {
            color: #666;
        }

        /* CARD */
        .eskul-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
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
            transform: translateY(-7px);
        }

        .card img {
    width: 100%;
    height: 200px;
    object-fit: contain;
    padding: 20px;
    background: #f8f9fa;
}

        .card-content {
            padding: 20px;
        }

        .card-content h3 {
            color: #198754;
            font-size: 21px;
            margin-bottom: 10px;
        }

        .card-content p {
            color: #666;
            line-height: 1.6;
            font-size: 14px;
        }

        .btn {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 18px;
            background-color: #198754;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        .btn:hover {
            background-color: #146c43;
        }

        /* FOOTER */
        .footer {
            margin-top: 50px;
            background: #198754;
            color: white;
            text-align: center;
            padding: 25px;
        }

        /* RESPONSIVE */
        @media (max-width: 900px) {
            .eskul-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .eskul-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <div class="header">
        <h1>SMKN 1 Cijati</h1>
        <p>Ekstrakurikuler</p>
    </div>


    <!-- CONTENT -->
    <div class="container">

        <div class="judul">
            <h2>Ekstrakurikuler SMKN 1 Cijati</h2>

            <p>
                Berbagai kegiatan ekstrakurikuler untuk mengembangkan
                bakat, minat, kreativitas, dan karakter siswa.
            </p>
        </div>


        <div class="eskul-container">

            <!-- PRAMUKA -->
            <div class="card">
                <img src="<?php echo e(asset('images/pramuka.jpg')); ?>" alt="Pramuka">

                <div class="card-content">
                    <h3>Pramuka</h3>

                    <p>
                        Melatih kedisiplinan, kemandirian, kepemimpinan,
                        kerja sama, dan tanggung jawab siswa.
                    </p>

                    <a href="#" class="btn">Lihat Detail</a>
                </div>
            </div>


            <!-- PASKIBRA -->
            <div class="card">
                <img src="<?php echo e(asset('images/paskibra.jpg')); ?>" alt="Paskibra">

                <div class="card-content">
                    <h3>Paskibra</h3>

                    <p>
                        Melatih kedisiplinan, ketangkasan, kekompakan,
                        dan meningkatkan rasa nasionalisme.
                    </p>

                    <a href="#" class="btn">Lihat Detail</a>
                </div>
            </div>


            <!-- CINEMAK -->
            <div class="card">
                <img src="<?php echo e(asset('images/cinemak.jpg')); ?>" alt="Cinemak">

                <div class="card-content">
                    <h3>Cinemak</h3>

                    <p>
                        Mengembangkan kreativitas siswa dalam bidang
                        perfilman, fotografi, videografi, dan konten digital.
                    </p>

                    <a href="#" class="btn">Lihat Detail</a>
                </div>
            </div>


            <!-- PMR -->
            <div class="card">
                <img src="<?php echo e(asset('images/pmr.jpg')); ?>" alt="PMR">

                <div class="card-content">
                    <h3>PMR</h3>

                    <p>
                        Mempelajari kesehatan, pertolongan pertama,
                        kepedulian sosial, dan kegiatan kemanusiaan.
                    </p>

                    <a href="#" class="btn">Lihat Detail</a>
                </div>
            </div>


            <!-- MEARCHING BAND -->
            <div class="card">
                <img src="<?php echo e(asset('images/mearching-band.jpg')); ?>" alt="Mearching Band">

                <div class="card-content">
                    <h3>Mearching Band</h3>

                    <p>
                        Mengembangkan kemampuan bermusik, baris-berbaris,
                        kreativitas, disiplin, dan kekompakan.
                    </p>

                    <a href="#" class="btn">Lihat Detail</a>
                </div>
            </div>


            <!-- VOLI -->
            <div class="card">
                <img src="<?php echo e(asset('images/voli.jpg')); ?>" alt="Voli">

                <div class="card-content">
                    <h3>Voli</h3>

                    <p>
                        Mengembangkan bakat olahraga, kebugaran,
                        kerja sama tim, dan sportivitas siswa.
                    </p>

                    <a href="#" class="btn">Lihat Detail</a>
                </div>
            </div>


            <!-- FUTSAL -->
            <div class="card">
                <img src="<?php echo e(asset('images/futsal.jpg')); ?>" alt="Futsal">

                <div class="card-content">
                    <h3>Futsal</h3>

                    <p>
                        Melatih kemampuan bermain futsal, kerja sama,
                        kedisiplinan, kebugaran, dan sportivitas.
                    </p>

                    <a href="#" class="btn">Lihat Detail</a>
                </div>
            </div>


            <!-- BAHASA JEPANG -->
            <div class="card">
                <img src="<?php echo e(asset('images/bahasa-jepang.jpg')); ?>" alt="Bahasa Jepang">

                <div class="card-content">
                    <h3>Bahasa Jepang</h3>

                    <p>
                        Mempelajari bahasa dan budaya Jepang melalui
                        kegiatan pembelajaran yang menarik dan menyenangkan.
                    </p>

                    <a href="#" class="btn">Lihat Detail</a>
                </div>
            </div>


            <!-- ROHIS -->
            <div class="card">
                <img src="<?php echo e(asset('images/rohis.jpg')); ?>" alt="Rohis">

                <div class="card-content">
                    <h3>Rohis</h3>

                    <p>
                        Meningkatkan pemahaman keagamaan, akhlak,
                        dan kegiatan keislaman siswa di sekolah.
                    </p>

                    <a href="#" class="btn">Lihat Detail</a>
                </div>
            </div>

        </div>

    </div>


    <!-- FOOTER -->
    <div class="footer">
        <p>
            &copy; <?php echo e(date('Y')); ?> SMKN 1 Cijati
        </p>
    </div>

</body>

</html>
<?php /**PATH E:\web-sekolah-sri\resources\views/ekstrakurikuler.blade.php ENDPATH**/ ?>