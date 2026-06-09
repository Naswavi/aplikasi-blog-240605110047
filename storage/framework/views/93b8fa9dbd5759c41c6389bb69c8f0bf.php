<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Publik - UAS Pemrograman Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f6f9; color: #333333; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .navbar-custom {background-color: #2f4358; border-bottom: 3px solid #4CAF50;}
        .navbar-custom .navbar-brand { color: #ffffff !important; font-weight: 700; font-size: 1.5rem; }
        .nav-link-custom { color: #cbd5e1 !important; font-weight: 500; margin-left: 20px; text-decoration: none; font-size: 0.95rem; transition: 0.2s; }
        .nav-link-custom:hover, .nav-link-custom.active {color: #ffffff !important; border-bottom: 2px solid #4CAF50;}
        .btn-login { border: 1px solid #ffffff; color: #ffffff; border-radius: 4px; padding: 5px 16px; font-size: 0.9rem; text-decoration: none; margin-left: 20px; transition: 0.2s; }
        .btn-login:hover { background-color: #ffffff; color: #1e283c; font-weight: bold; }
        .card-artikel-wrapper { background: #ffffff; border-radius: 8px; padding: 25px; box-shadow: 0 2px 4px rgba(0,0,0,0.04); }
        .article-title { font-weight: 700; color: #1e283c; text-decoration: none; font-size: 1.6rem; transition: 0.2s; }
        .article-title:hover {color: #4CAF50;}
        .meta-text { color: #777777; font-size: 0.85rem; margin-bottom: 15px; }
        .article-text { text-align: justify; line-height: 1.7; color: #4b5563; font-size: 1rem; }
        .sidebar-title { font-weight: 700; font-size: 1.1rem; color: #1e283c; border-bottom: 2px solid #1e283c; padding-bottom: 6px; margin-bottom: 15px; letter-spacing: 0.5px; }
        .sidebar-link {color: #4b5563; text-decoration: none; display: block; padding: 8px 0; font-size: 0.95rem; border-bottom: 1px dashed #e2e8f0; transition: all 0.2s ease; }
        .sidebar-link:hover {color: #2e7d32; padding-left: 5px; }
        .sidebar-link.active {font-weight: bold; color: #2e7d32; border-left: 4px solid #4CAF50; background-color: #dff0d8; padding-left: 10px; }
        .border-right-custom { border-right: 1px solid #e2e8f0; padding-right: 35px; }
        @media (max-width: 991px) { .border-right-custom { border-right: none; padding-right: 12px; } }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-custom py-3 mb-5 shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>">🌐 Blog Kami</a>
            <button class="navbar-toggler text-white border-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto align-items-center">
                    <a class="nav-link-custom active" href="<?php echo e(route('home')); ?>">Beranda</a>
                    <a class="nav-link-custom" href="<?php echo e(route('home')); ?>">Artikel</a>
                    <a class="nav-link-custom" href="<?php echo e(route('home')); ?>">Kategori</a>
                    <a class="nav-link-custom" href="#">Tentang</a>
                    <a href="<?php echo e(route('login')); ?>" class="btn-login">Login Penulis (CMS)</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            
            <div class="col-lg-8 border-right-custom">
                <div class="card-artikel-wrapper mb-4">
                    <h4 class="fw-bold mb-4 text-secondary" style="font-size: 1.1rem; letter-spacing: 0.5px;">
                        <?php echo e(request()->has('kategori') ? '📌 ARTIKEL BERDASARKAN KATEGORI' : '📰 ARTIKEL TERBARU'); ?>

                    </h4>

                    <?php if($articles->isEmpty()): ?>
                        <div class="alert alert-light border text-muted">Belum ada artikel yang diterbitkan pada kategori ini.</div>
                    <?php else: ?>
                        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $art): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="mb-5">
                                <h2 class="mb-2">
                                    <a href="<?php echo e(route('artikel.detail', $art->id)); ?>" class="article-title"><?php echo e($art->judul); ?></a>
                                </h2>
                                
                                <div class="meta-text">
                                    Oleh: <strong><?php echo e($art->penulis->nama ?? 'Anonim'); ?></strong> 
                                    <span class="mx-1">|</span> Kategori: <span class="text-primary fw-bold"><?php echo e($art->kategori->nama_kategori ?? 'Umum'); ?></span> 
                                    <span class="mx-1">|</span> <?php echo e($art->hari_tanggal); ?>

                                </div>

                                <?php if($art->gambar): ?>
<div class="mb-3">
    <img src="<?php echo e(asset('storage/gambar/' . $art->gambar)); ?>"
     class="img-fluid rounded"
     alt="Gambar">
</div>
<?php endif; ?>  

                                <p class="article-text">
                                    <?php echo e(Str::limit(strip_tags($art->isi), 350, '...')); ?>

                                </p>
                                
                                <div class="mt-2">
    <a href="<?php echo e(route('artikel.detail', $art->id)); ?>"
       class="text-decoration-none fw-bold"
       style="font-size:0.95rem; color:#4CAF50;">
        Baca Selengkapnya →
    </a>
</div> 
                            </div>
                            <hr class="text-muted my-4">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-lg-4 ps-lg-4">
                <div class="bg-white p-4 rounded shadow-sm mb-4">
                    <div class="sidebar-title">📁 Kategori Artikel</div>
                    <a href="<?php echo e(route('home')); ?>" class="sidebar-link <?php echo e(!request()->has('kategori') ? 'active' : ''); ?>">
                        Semua Kategori
                    </a>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('home', ['kategori' => $cat->id])); ?>" 
                           class="sidebar-link <?php echo e(request('kategori') == $cat->id ? 'active' : ''); ?>">
                            <?php echo e($cat->nama_kategori); ?>

                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <div class="mt-4 text-muted small text-center">
                    © 2026 <strong>Blog Kami</strong>. Seluruh hak cipta dilindungi.
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> <?php /**PATH C:\xampp\htdocs\aplikasi-blog\resources\views/home/index.blade.php ENDPATH**/ ?>