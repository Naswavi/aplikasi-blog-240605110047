<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel; 
use App\Models\KategoriArtikel; 

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $categories = KategoriArtikel::orderBy('nama_kategori', 'asc')->get();

        if ($request->has('kategori')) {
            $articles = Artikel::with(['penulis', 'kategori'])
                ->where('id_kategori', $request->kategori) 
                ->orderBy('hari_tanggal', 'desc')
                ->take(5)
                ->get();
        } else {
            $articles = Artikel::with(['penulis', 'kategori'])
                ->orderBy('hari_tanggal', 'desc')
                ->take(5)
                ->get();
        }

        return view('home.index', compact('articles', 'categories'));
    }

    public function show($id)
    {
        $article = Artikel::with(['penulis', 'kategori'])->findOrFail($id);
        $categories = KategoriArtikel::orderBy('nama_kategori', 'asc')->get();

        $relatedArticles = Artikel::where('id_kategori', $article->id_kategori)
            ->where('id', '!=', $id)
            ->orderBy('hari_tanggal', 'desc')
            ->take(5)
            ->get();

        return view('home.show', compact('article', 'categories', 'relatedArticles'));
    }
}