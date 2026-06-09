<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->judul }} - Blog Kami</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f6f9; color: #333333; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        
        .navbar-custom { background-color: #2f4358; border-bottom: 3px solid #4CAF50;}
        .related-link:hover { color: #2e7d32;}
        .navbar-custom .navbar-brand { color: #ffffff !important; font-weight: 700; font-size: 1.5rem; }
        .nav-link-custom { color: #cbd5e1 !important; font-weight: 500; margin-left: 20px; text-decoration: none; font-size: 0.95rem; }
        .nav-link-custom:hover { color: #ffffff !important; text-decoration: underline; }
        
        .card-detail-wrapper { background: #ffffff; border-radius: 8px; padding: 35px; box-shadow: 0 2px 4px rgba(0,0,0,0.04); }
        .article-title-large { font-weight: 700; color: #1e283c; font-size: 2.2rem; line-height: 1.3; }
        .meta-text { color: #777777; font-size: 0.85rem; margin-bottom: 20px; }
        .article-content { text-align: justify; line-height: 1.8; color: #222222; font-size: 1.05rem; }
        
        .sidebar-title { font-weight: 700; font-size: 1.1rem; color: #1e283c; border-bottom: 2px solid #1e283c; padding-bottom: 6px; margin-bottom: 15px; text-transform: uppercase; letter-spacing: 0.5px; }
        .related-link { color: #1e283c; text-decoration: none; font-weight: 600; font-size: 0.95rem; display: block; margin-bottom: 4px; }
        .related-link:hover { color: #0d6efd; text-decoration: underline; }
        
        .border-right-custom { border-right: 1px solid #e2e8f0; padding-right: 35px; }
        @media (max-width: 991px) { .border-right-custom { border-right: none; padding-right: 12px; } }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-custom py-3 mb-5 shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">🌐 Blog Kami</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto align-items-center">
                    <a class="nav-link-custom" href="{{ route('home') }}">Beranda</a>
                    <a class="nav-link-custom" href="{{ route('home') }}">Artikel</a>
                    <a class="nav-link-custom" href="{{ route('home') }}">Kategori</a>
                    <a class="nav-link-custom" href="#">Tentang</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            
            <div class="col-lg-8 border-right-custom mb-5">
                <div class="card-detail-wrapper">
                    <span class="badge mb-2" style="background-color:#4CAF50;" style="font-size: 0.8rem; padding: 6px 12px; border-radius: 4px;">{{ $article->kategori->nama_kategori ?? 'Umum' }}</span>
                    <h1 class="article-title-large mb-3">{{ $article->judul }}</h1>
                    
                    <div class="meta-text">
                        Oleh: <strong>{{ $article->penulis ? $article->penulis->nama_depan . ' ' . $article->penulis->nama_belakang : 'Anonim' }}</strong> <span class="mx-1">|</span> Diterbitkan pada: {{ $article->hari_tanggal }}
                    </div>

                    @if($article->gambar)
<div class="mb-4">
    <img src="{{ asset('storage/gambar/' . $article->gambar) }}"
         class="img-fluid rounded shadow-sm w-100"
         style="max-height:450px; object-fit:cover;"
         alt="Gambar">
</div>
@endif  

                    <div class="article-content">
                        {!! nl2br(e($article->isi)) !!} 
                    </div>

                    <div class="mt-5 pt-4 border-top">
                        <a href="{{ route('home') }}" class="btn btn-sm" style="border:1px solid #4CAF50; color:#4CAF50;">← Kembali ke Beranda</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 ps-lg-4">
                <div class="bg-white p-4 rounded shadow-sm mb-4">
                    <div class="sidebar-title">✨ Artikel Terkait</div>
                    
                    @if($relatedArticles->isEmpty())
                        <p class="text-muted small">Tidak ada artikel terkait lainnya dalam kategori ini.</p>
                    @else
                        @foreach($relatedArticles as $rel)
                            <div class="mb-3 pb-3 border-bottom border-light">
                                <a href="{{ route('artikel.detail', $rel->id) }}" class="related-link">{{ $rel->judul }}</a>
                                <small class="text-muted" style="font-size: 0.8rem;">🕒 {{ $rel->hari_tanggal }}</small>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>