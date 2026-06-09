

<?php $__env->startSection('title', 'Kelola Artikel'); ?>

<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h6 class="fw-semibold mb-0" style="color: #333333;">
        Data Artikel
    </h6>

    <a href="<?php echo e(route('artikel.create')); ?>" class="btn btn-sm btn-success">
        + Tambah Artikel
    </a>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-0">

        <table class="table table-hover mb-0">

            <thead>
                <tr style="background-color: #fafafa;">
                    <th class="px-3 py-2">Gambar</th>
                    <th class="px-3 py-2">Judul</th>
                    <th class="px-3 py-2">Kategori</th>
                    <th class="px-3 py-2">Penulis</th>
                    <th class="px-3 py-2">Tanggal</th>
                    <th class="px-3 py-2">Aksi</th>
                </tr>
            </thead>

            <tbody>

                <?php $__empty_1 = true; $__currentLoopData = $artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                <tr>

                    <td class="px-3 py-2">
                        <img src="<?php echo e(asset('storage/gambar/' . $item->gambar)); ?>"
                             alt="Gambar <?php echo e($item->judul); ?>"
                             style="width:48px;height:48px;object-fit:cover;border-radius:6px;border:1px solid #e9ecef;">
                    </td>

                    <td class="px-3 py-2"
                        style="max-width:200px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;">
                        <?php echo e($item->judul); ?>

                    </td>

                    <td class="px-3 py-2">
                        <?php echo e($item->kategori->nama_kategori); ?>

                    </td>

                    <td class="px-3 py-2">
                        <?php echo e($item->penulis->nama_depan); ?>

                        <?php echo e($item->penulis->nama_belakang); ?>

                    </td>

                    <td class="px-3 py-2">
                        <?php echo e($item->hari_tanggal); ?>

                    </td>

                    <td class="px-3 py-2">

                        <div class="d-flex gap-2">

                            <a href="<?php echo e(route('artikel.edit', $item->id)); ?>"
                               class="btn btn-sm"
                               style="background-color:#e3f2fd;color:#1565c0;">
                                Edit
                            </a>

                            <form action="<?php echo e(route('artikel.destroy', $item->id)); ?>"
                                  method="POST"
                                  onsubmit="return confirm('Hapus artikel ini?')">

                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>

                                <button type="submit"
                                        class="btn btn-sm"
                                        style="background-color:#ffebee;color:#c62828;">
                                    Hapus
                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <tr>
                    <td colspan="6" class="text-center py-4">
                        Belum ada data artikel.
                    </td>
                </tr>

                <?php endif; ?>

            </tbody>

        </table>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\aplikasi-blog\resources\views/artikel/index.blade.php ENDPATH**/ ?>