<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Sistem Manajemen Blog'); ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f4f9;
            font-size: 14px;
        }

        .header {
            background-color: #2C3E50;
            color: #ffffff;
            padding: 12px 20px;
        }

        .header-title {
            font-size: 15px;
            font-weight: 500;
            margin: 0;
        }

        .header-sub {
            font-size: 11px;
            color: #aaaaaa;
            margin: 0;
        }

        .sidebar {
            width: 210px;
            min-height: calc(100vh - 52px);
            background-color: #ffffff;
            border-right: 1px solid #f0f0f0;
            padding: 16px 0;
            flex-shrink: 0;
        }

        .avatar-area {
            padding: 0 14px 16px;
            border-bottom: 1px solid #f0f0f0;
            margin-bottom: 12px;
        }

        .avatar-circle {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #e9ecef;
            margin-bottom: 8px;
        }

        .avatar-greeting {
            font-size: 11px;
            color: #868e96;
            margin: 0;
        }

        .avatar-name {
            font-size: 13px;
            font-weight: 500;
            color: #212529;
            margin: 0;
        }

        .sidebar-label {
            font-size: 10px;
            color: #adb5bd;
            padding: 0 14px 8px;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            font-weight: 600;
        }

        .nav-item {
            padding: 9px 14px;
            font-size: 13px;
            color: #555555;
            border-left: 2px solid transparent;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }

        .nav-item:hover {
            background-color: #f4f4f9;
            color: #333333;
        }

        .nav-item.active {
            background-color: #e8f5e9;
            color: #2e7d32;
            border-left-color: #4CAF50;
            font-weight: 600;
        }

        .sidebar-bottom {
            padding: 12px 14px 0;
            border-top: 1px solid #f0f0f0;
            margin-top: auto;
        }

        .main-content {
            flex: 1;
            padding: 24px;
        }
    </style>
</head>

<body>

    <div class="header d-flex align-items-center">
        <div>
            <p class="header-title">Sistem Manajemen Blog (CMS)</p>
            <p class="header-sub">db_blog</p>
        </div>
    </div>

    <div class="d-flex">

        <div class="sidebar d-flex flex-column">

            <div class="avatar-area">
                <img src="<?php echo e(asset('storage/foto/' . Auth::user()->foto)); ?>"
                     alt="Foto Profil"
                     class="avatar-circle">

                <p class="avatar-greeting">Halo,</p>

                <p class="avatar-name">
                    <?php echo e(Auth::user()->nama_depan); ?>

                    <?php echo e(Auth::user()->nama_belakang); ?>

                </p>
            </div>

            <div class="sidebar-label">Menu Utama</div>

            <a href="<?php echo e(route('dashboard')); ?>"
               class="nav-item <?php echo e(request()->routeIs('dashboard') ? 'active' : ''); ?>">
                Dashboard
            </a>

            <a href="<?php echo e(route('artikel.index')); ?>"
               class="nav-item <?php echo e(request()->routeIs('artikel.*') ? 'active' : ''); ?>">
                Kelola Artikel
            </a>

            <a href="<?php echo e(route('penulis.index')); ?>"
               class="nav-item <?php echo e(request()->routeIs('penulis.*') ? 'active' : ''); ?>">
                Kelola Penulis
            </a>

            <a href="<?php echo e(route('kategori.index')); ?>"
               class="nav-item <?php echo e(request()->routeIs('kategori.*') ? 'active' : ''); ?>">
                Kelola Kategori
            </a>

            <div class="sidebar-bottom mt-auto">
                <form action="<?php echo e(route('logout')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <button type="submit"
                            class="btn btn-sm w-100"
                            style="background-color:#fff0f0; color:#c0392b; border: 1px solid #f5c6c6;">
                        Keluar
                    </button>
                </form>
            </div>

        </div>

        <div class="main-content">

            <?php if(session('sukses')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo e(session('sukses')); ?>


                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>

            <?php if(session('gagal')): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo e(session('gagal')); ?>


                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>

            <?php echo $__env->yieldContent('content'); ?>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html><?php /**PATH C:\xampp\htdocs\aplikasi-blog\resources\views/layouts/app.blade.php ENDPATH**/ ?>