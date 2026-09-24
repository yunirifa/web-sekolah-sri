

<?php $__env->startSection('title', 'Beranda'); ?>

<?php $__env->startSection('content'); ?>

    
    <section class="hero-section">
        <div class="container">
            <span class="hero-badge">Sekolah Menengah Kejuruan</span>
            <h1 class="fw-bold">Selamat Datang Di SMKN 1 CIJATI</h1>
            <p>Mencetak generasi unggul, berkarakter, dan siap bersaing di era global.</p>
        </div>
    </section>

    
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100 stat-card p-4">
                        <h3 class="text-primary">
                            <i class="fa-solid fa-eye me-2"></i>Visi
                        </h3>
                        <p class="mb-0"><?php echo e($profil?->visi ?? ''); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="py-4">
        <div class="container">
            <div class="row g-4 text-center">

                <div class="col-md-6">
                    <div class="card stat-card p-4">
                        <i class="fa-solid fa-chalkboard-user fa-2x text-primary mb-2"></i>
                        <h2 class="fw-bold mb-0"><?php echo e($totalGuru ?? 0); ?></h2>
                        <p class="text-muted mb-0">Jumlah Guru</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card stat-card p-4">
                        <i class="fa-solid fa-user-graduate fa-2x text-primary mb-2"></i>
                        <h2 class="fw-bold mb-0"><?php echo e($profil?->jumlah_siswa ?? 0); ?></h2>
                        <p class="text-muted mb-0">Jumlah Siswa</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    
    <section class="py-5">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h3 class="section-title">
                    <i class="fa-solid fa-images me-2 text-primary"></i>Galeri Foto
                </h3>

                <a href="<?php echo e(route('galeri.index')); ?>" class="btn btn-outline-primary btn-sm">
                    Lihat Semua
                </a>
            </div>

            <div class="row g-3">

                <?php $__empty_1 = true; $__currentLoopData = $galeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                    <div class="col-6 col-md-3">
                        <div class="card h-100">

                            <img
                                src="<?php echo e(asset('uploads/galeri/' . $foto->gambar)); ?>"
                                class="card-img-top"
                                alt="<?php echo e($foto->judul); ?>"
                                onerror="this.src='https://placehold.co/400x300?text=Foto+Galeri'"
                            >

                            <div class="card-body p-2">
                                <p class="small mb-0 fw-semibold">
                                    <?php echo e($foto->judul); ?>

                                </p>
                            </div>

                        </div>
                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <p class="text-muted">Belum ada foto galeri.</p>

                <?php endif; ?>

            </div>
        </div>
    </section>

    
    <section class="py-5 bg-white">
        <div class="container">

            <h3 class="section-title">
                <i class="fa-solid fa-trophy me-2 text-primary"></i>Galeri Prestasi
            </h3>

            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card h-100 stat-card">

                        <img
                            src=""
                            class="card-img-top"
                            alt="Prestasi"
                            onerror="this.src='https://placehold.co/400x300?text=Prestasi'"
                        >

                        <div class="card-body">

                            <span class="badge bg-primary mb-2">
                                provinsi
                            </span>

                            <h5 class="card-title">
                                juara karate
                            </h5>

                            <p class="card-text small text-muted mb-0">
                                2026
                            </p>

                        </div>
                    </div>
                </div>

                <p class="text-muted">
                    Belum ada data prestasi.
                </p>

            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\web-sekolah-sri\resources\views/home.blade.php ENDPATH**/ ?>