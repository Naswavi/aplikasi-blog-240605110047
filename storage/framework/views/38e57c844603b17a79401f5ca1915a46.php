

<?php $__env->startSection('title', 'Tambah Kategori Artikel'); ?>

<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h6 class="fw-semibold mb-0" style="color: #333333;">
        Tambah Kategori Artikel
    </h6>

    <a href="<?php echo e(route('kategori.index')); ?>"
       class="btn btn-sm"
       style="background-color: #f0f0f0; color: #555555;">
        Kembali
    </a>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-4">

        <form action="<?php echo e(route('kategori.store')); ?>" method="POST">

            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label for="nama_kategori"
                       class="form-label fw-semibold"
                       style="font-size: 13px;">
                    Nama Kategori <span class="text-danger">*</span>
                </label>

                <input type="text"
                       class="form-control <?php $__errorArgs = ['nama_kategori'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                       id="nama_kategori"
                       name="nama_kategori"
                       value="<?php echo e(old('nama_kategori')); ?>"
                       placeholder="Masukkan nama kategori">

                <?php $__errorArgs = ['nama_kategori'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-4">
                <label for="keterangan"
                       class="form-label fw-semibold"
                       style="font-size: 13px;">
                    Keterangan
                </label>

                <textarea class="form-control <?php $__errorArgs = ['keterangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                          id="keterangan"
                          name="keterangan"
                          rows="4"
                          placeholder="Masukkan keterangan kategori (opsional)"><?php echo e(old('keterangan')); ?></textarea>

                <?php $__errorArgs = ['keterangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="d-flex gap-2 justify-content-end">
                <a href="<?php echo e(route('kategori.index')); ?>"
                   class="btn btn-sm"
                   style="background-color: #f0f0f0; color: #555555;">
                    Batal
                </a>

                <button type="submit" class="btn btn-sm btn-success">
                    Simpan Data
                </button>
            </div>

        </form>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\aplikasi-blog\resources\views/kategori/create.blade.php ENDPATH**/ ?>