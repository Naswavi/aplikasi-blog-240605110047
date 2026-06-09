

<?php $__env->startSection('title', 'Kelola Penulis'); ?>

<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h6 class="fw-semibold mb-0" style="color: #333333;">
        Data Penulis
    </h6>

    <a href="<?php echo e(route('penulis.create')); ?>" class="btn btn-sm btn-success">
        + Tambah Penulis
    </a>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-0">

        <table class="table table-hover mb-0">

            <thead>
                <tr style="background-color: #fafafa;">
                    <th class="px-3 py-2"
                        style="font-size: 11px; color: #666666; text-transform: uppercase; letter-spacing: 0.05em;">
                        Foto
                    </th>

                    <th class="px-3 py-2"
                        style="font-size: 11px; color: #666666; text-transform: uppercase; letter-spacing: 0.05em;">
                        Nama
                    </th>

                    <th class="px-3 py-2"
                        style="font-size: 11px; color: #666666; text-transform: uppercase; letter-spacing: 0.05em;">
                        Username
                    </th>

                    <th class="px-3 py-2"
                        style="font-size: 11px; color: #666666; text-transform: uppercase; letter-spacing: 0.05em;">
                        Aksi
                    </th>
                </tr>
            </thead>

            <tbody>

                <?php $__empty_1 = true; $__currentLoopData = $penulis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                    <tr>

                        <td class="px-3 py-2">
                            <img src="<?php echo e(asset('storage/foto/' . $item->foto)); ?>"
                                 alt="Foto <?php echo e($item->nama_depan); ?>"
                                 style="width: 40px; height: 40px; object-fit: cover; border-radius: 6px; border: 1px solid #e9ecef;">
                        </td>

                        <td class="px-3 py-2" style="font-size: 13px;">
                            <?php echo e($item->nama_depan); ?> <?php echo e($item->nama_belakang); ?>

                        </td>

                        <td class="px-3 py-2" style="font-size: 13px; color: #666666;">
                            <?php echo e($item->user_name); ?>

                        </td>

                        <td class="px-3 py-2">
                            <div class="d-flex gap-2">

                                <a href="<?php echo e(route('penulis.edit', $item->id)); ?>"
                                   class="btn btn-sm"
                                   style="background-color: #e3f2fd; color: #1565c0; font-size: 12px;">
                                    Edit
                                </a>

                                <form action="<?php echo e(route('penulis.destroy', $item->id)); ?>"
                                      method="POST"
                                      onsubmit="return confirm('Hapus penulis ini?')">

                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>

                                    <button type="submit"
                                            class="btn btn-sm"
                                            style="background-color: #ffebee; color: #c62828; font-size: 12px;">
                                        Hapus
                                    </button>

                                </form>

                            </div>
                        </td>

                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <tr>
                        <td colspan="4"
                            class="px-3 py-4 text-center"
                            style="font-size: 13px; color: #999999; font-style: italic;">
                            Belum ada data penulis.
                        </td>
                    </tr>

                <?php endif; ?>

            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\aplikasi-blog\resources\views/penulis/index.blade.php ENDPATH**/ ?>