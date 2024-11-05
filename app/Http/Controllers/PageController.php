<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Method untuk halaman homepage
    public function homepage()
    {
        return view('homepage'); // Ganti 'homepage' dengan nama file view Anda (misalnya homepage.blade.php)
    }

    // Method untuk halaman Tentang Kami
    public function tentangKami()
    {
        return view('tentang'); // Ganti 'tentang' dengan nama file view Anda (misalnya tentang.blade.php)
    }

    // Method untuk halaman Artikel
    public function ArticleUs()
    {
        return view('article'); // Ganti 'artikel' dengan nama file view Anda (misalnya artikel.blade.php)
    }
}
