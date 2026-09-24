

<?php $__env->startSection('title', 'Profil Sekolah'); ?>

<?php $__env->startSection('content'); ?>

<div class="container py-4">

    
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1">Profil Sekolah</h2>
            <p class="text-muted mb-0">
                Kelola informasi profil sekolah.
            </p>
        </div>

        <?php if(isset($profil)): ?>
            <a href="<?php echo e(route('profil.edit', $profil->id)); ?>"
               class="btn btn-primary">
                Edit Profil
            </a>
        <?php endif; ?>
    </div>

    
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Terjadi kesalahan:</strong>
            <ul class="mb-0 mt-2">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php if($profil): ?>

        <div class="card shadow-sm border-0">

            <div class="card-body">

                
                <div class="text-center mb-4">

                    <?php if($profil->logo): ?>
                        <img
                            src="<?php echo e(asset('storage/' . $profil->logo)); ?>"
                            alt="Logo <?php echo e($profil->nama_sekolah); ?>"
                            style="
                                width: 130px;
                                height: 130px;
                                object-fit: contain;
                                border-radius: 12px;
                            "
                        >
                    <?php else: ?>
                        <div class="text-muted">
                            Logo belum tersedia
                        </div>
                    <?php endif; ?>

                </div>

                
                <div class="row g-4">

                    <div class="col-md-6">
                        <label class="fw-bold">Nama Sekolah</label>
                        <p><?php echo e($profil->nama_sekolah ?? 'SMKN 1 CIJATI'); ?></p>
                    </div>

                    <div class="col-md-6">
                        <label class="fw-bold">NPSN</label>
                        <p><?php echo e($profil->npsn ?? '-'); ?></p>
                    </div>

                    <div class="col-md-6">
                        <label class="fw-bold">Akreditasi</label>
                        <p><?php echo e($profil->akreditasi ?? '-'); ?></p>
                    </div>

                    <div class="col-md-6">
                        <label class="fw-bold">Tahun Berdiri</label>
                        <p><?php echo e($profil->tahun_berdiri ?? '2006'); ?></p>
                    </div>

                    <div class="col-md-6">
                        <label class="fw-bold">Kepala Sekolah</label>
                        <p><?php echo e($profil->kepala_sekolah ?? '-'); ?></p>
                    </div>

                    <div class="col-md-6">
                        <label class="fw-bold">Telepon</label>
                        <p><?php echo e($profil->telepon ?? '-'); ?></p>
                    </div>

                    <div class="col-md-6">
                        <label class="fw-bold">Email</label>
                        <p><?php echo e($profil->email ?? '-'); ?></p>
                    </div>

                    <div class="col-md-12">
                        <label class="fw-bold">Alamat</label>
                        <p><?php echo e($profil->alamat ?? '-'); ?></p>
                    </div>

                    <div class="col-md-6">
                        <label class="fw-bold">Jumlah Siswa</label>
                        <p><?php echo e($profil->jumlah_siswa ?? '700'); ?></p>
                    </div>

                    <div class="col-md-6">
                        <label class="fw-bold">Jumlah Guru</label>
                        <p><?php echo e($profil->jumlah_guru ?? '52'); ?></p>
                    </div>

                    
                    <div class="col-md-12">
                        <label class="fw-bold">Visi</label>

                        <div class="p-3 bg-light rounded">
                            <?php echo e($profil->visi ?? '-'); ?>

                        </div>
                    </div>

                    
                    <div class="col-md-12">
                        <label class="fw-bold">Misi</label>

                        <div class="p-3 bg-light rounded">
                            <?php echo nl2br(e($profil->misi ?? '-')); ?>

                        </div>
                    </div>

                    
                    <div class="col-md-12">
                        <label class="fw-bold">Sejarah</label>

                        <div class="p-3 bg-light rounded">
                            <?php echo nl2br(e($profil->sejarah ?? '-')); ?>

                        </div>
                    </div>

                </div>

            </div>

        </div>

    <?php else: ?>

        
        <div class="card shadow-sm border-0">
            <div class="card-body text-center py-5">

                <h4>Data profil belum tersedia</h4>

                <p class="text-muted">
                    Belum ada data profil sekolah di database.
                </p>

            </div>
        </div>

    <?php endif; ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\web-sekolah-sri\resources\views/profil_tabel.blade.php ENDPATH**/ ?>