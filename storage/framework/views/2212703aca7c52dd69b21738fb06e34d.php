

<?php $__env->startSection('title', 'Tambah Artikel'); ?>

<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h6 class="fw-semibold mb-0" style="color: #333333;">
        Tambah Artikel
    </h6>

    <a href="<?php echo e(route('artikel.index')); ?>"
       class="btn btn-sm"
       style="background-color: #f0f0f0; color: #555555;">
        Kembali
    </a>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-4">

        <form action="<?php echo e(route('artikel.store')); ?>"
              method="POST"
              enctype="multipart/form-data">

            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label for="judul"
                       class="form-label fw-semibold"
                       style="font-size: 13px;">
                    Judul <span class="text-danger">*</span>
                </label>

                <input type="text"
                       class="form-control <?php $__errorArgs = ['judul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                       id="judul"
                       name="judul"
                       value="<?php echo e(old('judul')); ?>"
                       placeholder="Masukkan judul artikel">

                <?php $__errorArgs = ['judul'];
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

            <div class="mb-3">
                <label for="id_kategori"
                       class="form-label fw-semibold"
                       style="font-size: 13px;">
                    Kategori <span class="text-danger">*</span>
                </label>

                <select class="form-select <?php $__errorArgs = ['id_kategori'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        id="id_kategori"
                        name="id_kategori">

                    <option value="">Pilih Kategori</option>

                    <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"
                            <?php echo e(old('id_kategori') == $item->id ? 'selected' : ''); ?>>
                            <?php echo e($item->nama_kategori); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>

                <?php $__errorArgs = ['id_kategori'];
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

            <div class="mb-3">
                <label for="isi"
                       class="form-label fw-semibold"
                       style="font-size: 13px;">
                    Isi Artikel <span class="text-danger">*</span>
                </label>

                <textarea class="form-control <?php $__errorArgs = ['isi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                          id="isi"
                          name="isi"
                          rows="6"
                          placeholder="Masukkan isi artikel"><?php echo e(old('isi')); ?></textarea>

                <?php $__errorArgs = ['isi'];
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
                <label for="gambar"
                       class="form-label fw-semibold"
                       style="font-size: 13px;">
                    Gambar <span class="text-danger">*</span>
                </label>

                <input type="file"
                       class="form-control <?php $__errorArgs = ['gambar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                       id="gambar"
                       name="gambar"
                       accept="image/jpg,image/jpeg,image/png">

                <div class="form-text" style="font-size: 12px;">
                    Format yang diizinkan: JPG, JPEG, PNG. Ukuran maksimal 2 MB.
                </div>

                <?php $__errorArgs = ['gambar'];
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
                <a href="<?php echo e(route('artikel.index')); ?>"
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
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\aplikasi-blog\resources\views/artikel/create.blade.php ENDPATH**/ ?>