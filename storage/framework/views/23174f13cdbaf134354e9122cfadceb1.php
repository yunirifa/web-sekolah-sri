<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Galeri - SMKN 1 Cijati</title>

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
            background-color: #198754;
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

        /* GALERI */
        .galeri-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .card {
            background-color: white;
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
            height: 220px;
            object-fit: cover;
        }

        .card-content {
            padding: 20px;
        }

        .card-content h3 {
            color: #198754;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .card-content .kategori {
            display: inline-block;
            margin-top: 6px;
            padding: 4px 10px;
            background-color: #e8f5e9;
            color: #198754;
            border-radius: 20px;
            font-size: 12px;
        }

        /* TOMBOL */
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
            padding: 25px;
            text-align: center;
            background-color: #198754;
            color: white;
        }

        /* RESPONSIVE */
        @media (max-width: 900px) {
            .galeri-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .galeri-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <div class="header">
        <h1>SMKN 1 Cijati</h1>
        <p>Galeri Sekolah</p>
    </div>


    <!-- CONTENT -->
    <div class="container">

        <div class="judul">
            <h2>Galeri SMKN 1 Cijati</h2>
            <p>
                Dokumentasi berbagai kegiatan yang dilaksanakan
                di SMKN 1 Cijati.
            </p>
        </div>
       <div style="text-align:center; margin-bottom:25px;">
    <a href="<?php echo e(route('galeri.create')); ?>" class="btn">+ Tambah Galeri</a>
</div>

        <div class="galeri-container">

            <?php $__empty_1 = true; $__currentLoopData = $galeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                <div class="card">

                    <?php if($item->gambar): ?>
                        <img
                            src="<?php echo e(asset('uploads/galeri/' . $item->gambar)); ?>"
                            alt="<?php echo e($item->judul); ?>"
                        >
                    <?php else: ?>
                        <img
                            src="<?php echo e(asset('images/default.jpg')); ?>"
                            alt="Gambar Galeri"
                        >
                    <?php endif; ?>

                    <div class="card-content">
                        <h3><?php echo e($item->judul); ?></h3>

                        <?php if($item->kategori): ?>
                            <span class="kategori"><?php echo e($item->kategori); ?></span>
                        <?php endif; ?>

                        <br>

                        <a href="<?php echo e(route('galeri.edit', $item->id)); ?>" class="btn"><form action="<?php echo e(route('galeri.destroy', $item->id)); ?>" method="POST" style="display:inline;" onsubmit="return confirm('Yakin mau hapus foto ini?');">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <button type="submit" class="btn" style="background-color:#dc3545; border:none; cursor:pointer;">
        Hapus
    </button>
</form>
                            Edit
                        </a>
                    </div>

                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <p>Belum ada data galeri.</p>

            <?php endif; ?>

        </div>

    </div>


    <!-- FOOTER -->
    <div class="footer">
        <p>&copy; <?php echo e(date('Y')); ?> SMKN 1 Cijati</p>
    </div>

</body>

</html><?php /**PATH E:\web-sekolah-sri\resources\views/galeri/index.blade.php ENDPATH**/ ?>