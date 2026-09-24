


<?php $__env->startSection('title', 'Data Guru & Staf'); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Data Guru & Staf</h3>
        <a href="<?php echo e(route('guru.create')); ?>" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i> Tambah Guru
        </a>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(session('success')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Jabatan</th>
                            <th>Mapel</th>
                            <th>Kategori</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($index + 1); ?></td>
                            <td>
                                <?php if($item->foto): ?>
                                    <img src="<?php echo e(asset('uploads/guru/'.$item->foto)); ?>"
                                         alt="<?php echo e($item->nama); ?>"
                                         width="50" height="50"
                                         class="rounded-circle object-fit-cover">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('images/default-avatar.png')); ?>"
                                         alt="Default"
                                         width="50" height="50"
                                         class="rounded-circle">
                                <?php endif; ?>
                            </td>
                            <td><?php echo e($item->nama); ?></td>
                            <td><?php echo e($item->nip ?? '-'); ?></td>
                            <td><?php echo e($item->jabatan); ?></td>
                            <td><?php echo e($item->mapel ?? '-'); ?></td>
                            <td>
                                <span class="badge <?php echo e($item->kategori === 'guru' ? 'bg-primary' : 'bg-secondary'); ?>">
                                    <?php echo e(ucfirst($item->kategori)); ?>

                                </span>
                            </td>
                            <td class="text-center">
                                <a href="<?php echo e(route('guru.edit', $item->id)); ?>" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <form action="<?php echo e(route('guru.destroy', $item->id)); ?>" method="POST" class="d-inline"
                                      onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="8" class="text-center text-muted py-3">
                                Belum ada data guru/staf.
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\web-sekolah-sri\resources\views/guru/index.blade.php ENDPATH**/ ?>