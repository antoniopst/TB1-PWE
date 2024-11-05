<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Membuat header tetap di posisi atas ketika halaman di-scroll */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 10;
        }

        /* Menambahkan margin atas pada body untuk memberi ruang pada header */
        body {
            margin-top: 80px;
        }

        /* Mengatur gambar latar belakang untuk bagian Tentang Kami */
        /* Mengatur gambar latar belakang untuk bagian Tentang Kami */
.bg-tentang-kami {
    background-image: url('images/picgedung.png'); /* Ganti dengan path gambar Anda */
    background-size: cover; /* Memastikan gambar memenuhi area */
    background-position: center; /* Memusatkan gambar */
    height: 100vh; /* Mengatur tinggi menjadi 100% dari tinggi viewport */
    position: relative;
    display: flex;
    align-items: flex-end; /* Mengubah menjadi flex-end untuk menempatkan konten di bawah */
    justify-content: flex-start; /* Mengubah menjadi flex-start untuk menempatkan konten di kiri */
    padding: 90px; /* Menambahkan padding untuk memberi ruang di kiri bawah */
}


        /* Mengatur posisi teks dan gaya tanpa mengubah ukuran dan posisi */
        .cta-container {
            background: linear-gradient(to right, rgba(70, 7, 78, 1), rgba(25, 123, 208, 0.8)); /* Gradien dengan transparansi */
            padding: 1.5rem;
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
            color: white;
            text-align: left; /* Rata kiri */
            margin-left: 90px; /* Menambahkan margin kiri untuk memindahkan kotak ke kanan */
        }

        .cta-container h1 {
            font-size: 1.5rem;
            margin-right: 1rem;
        }

        .cta-container a {
            padding: 0.5rem 2rem; /* Menambah padding untuk memperbesar button */
            border: 1px solid white;
            border-radius: 1.5rem; /* Membuat sudut button lebih bulat */
            text-decoration: none;
            color: white;
            font-weight: bold;
            display: flex;
            align-items: center;
        }
    </style>
</head>
<body class="bg-gray-50">

    <!-- Header -->
    <header class="navbar py-0 bg-gradient-to-r from-[#46074E] to-[#197BD0] h-[80px] shadow-lg fixed w-full">
        <div class="container mx-auto flex items-center h-full px-5 sm:px-10 text-white font-bold">
            <div class="flex items-center">
                <img src="{{ asset('images/inaklug.png') }}" alt="Inaklug Logo" class="h-[50px] mr-3">
                <h1 class="text-2xl">Inaklug</h1>
            </div>
            <nav class="hidden md:flex gap-5 text-sm ml-10">
                <a href="{{ url('/') }}" class="hover:text-gray-200 transition-colors duration-300">Home</a>
                <a href="{{ url('/tentang') }}" class="hover:text-gray-200 transition-colors duration-300">Tentang Kami</a>
                <a href="#layanan-kami" class="hover:text-gray-200 transition-colors duration-300">Layanan Kami</a>
                <a href="{{ url('/article') }}" class="hover:text-gray-200 transition-colors duration-300">Artikel</a>
                <a href="#hubungi-kami" class="hover:text-gray-200 transition-colors duration-300">Hubungi Kami</a>
            </nav>
            <button type="button" class="ml-auto px-6 py-2 bg-[#1E3A8A] text-white rounded-full hover:bg-blue-700">Daftar Online</button>
            
            <div class="md:hidden ml-auto">
                <button id="menu-toggle" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>

        <nav id="mobile-menu" class="hidden md:hidden">
            <div class="flex flex-col bg-gradient-to-r from-[#46074E] to-[#197BD0] text-white text-sm">
                <a href="/" class="py-2 px-5 hover:bg-blue-700 transition-colors duration-300">Home</a>
                <a href="/tentang" class="py-2 px-5 hover:bg-blue-700 transition-colors duration-300">Tentang Kami</a>
                <a href="#layanan-kami" class="py-2 px-5 hover:bg-blue-700 transition-colors duration-300">Layanan Kami</a>
                <a href="/article" class="py-2 px-5 hover:bg-blue-700 transition-colors duration-300">Artikel</a>
                <a href="#hubungi-kami" class="py-2 px-5 hover:bg-blue-700 transition-colors duration-300">Hubungi Kami</a>
            </div>
        </nav>
    </header>

    <!-- Bagian Tentang Kami -->
<div class="bg-tentang-kami">
    <div class="cta-container">
        <h1>INGIN KULIAH DAN BERKARIR<br>DI LUAR NEGERI</h1>
        <a href="#" class="ml-16 px-6 py-3 border border-white rounded text-white text-lg">SELENGKAPNYA <span class="ml-2">&#9660;</span></a>
    </div>
</div>

<!-- Bagian Tentang Kami -->
<section id="tentang-kami" class="py-10 bg-white flex items-center justify-center">
    <div class="container mx-auto px-4 sm:px-10 text-center">
        <h3 class="text-3xl font-bold mb-8">TENTANG KAMI</h3>
        <p class="text-center w-full max-w-2xl mx-auto">
            INAKLUG adalah Konsultan Pendidikan Internasional di Indonesia yang sudah memberangkatkan lebih dari 3000 mahasiswa Indonesia yang ingin kuliah, perjalanan wisata, dan berkarir di negara maju di dunia.
        </p>
    </div>
</section>

<!-- Garis Pemisah antara Tentang Kami dan Layanan Kami -->
<div class="py-10 bg-white">
    <hr class="border-t border-gray-300" />
</div>

<!-- Bagian Layanan Kami -->
<section id="layanan-kami" class="py-10 bg-white">
    <div class="container mx-auto px-4 sm:px-10 text-center">
        <h3 class="text-3xl font-bold mb-8">Layanan Kami</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            
            <!-- Card Studi S1 - Bachelor -->
            <div class="relative overflow-hidden rounded-lg shadow-lg">
                <img src="images/bachelor.png" alt="Studi S1 - Bachelor" class="w-full h-64 object-cover transition-transform duration-300 transform hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-900 to-transparent"></div>
                <div class="absolute inset-0 flex flex-col items-start justify-end p-4">
                    <h4 class="text-white font-semibold text-xl">Studi S1 - Bachelor</h4>
                </div>
            </div>
            
            <!-- Card Studi S2 - Master -->
            <div class="relative overflow-hidden rounded-lg shadow-lg">
                <img src="images/master.png" alt="Studi S2 - Master" class="w-full h-64 object-cover transition-transform duration-300 transform hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-900 to-transparent"></div>
                <div class="absolute inset-0 flex flex-col items-start justify-end p-4">
                    <h4 class="text-white font-semibold text-xl">Studi S2 - Master</h4>
                </div>
            </div>
            
            <!-- Card Studi S3 - Ph.D -->
            <div class="relative overflow-hidden rounded-lg shadow-lg">
                <img src="images/class.jpg" alt="Studi S3 - Ph.D" class="w-full h-64 object-cover transition-transform duration-300 transform hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-900 to-transparent"></div>
                <div class="absolute inset-0 flex flex-col items-start justify-end p-4">
                    <h4 class="text-white font-semibold text-xl">Studi S3 - Ph.D</h4>
                </div>
            </div>
            
            <!-- Card Kursus Bahasa Asing -->
            <div class="relative overflow-hidden rounded-lg shadow-lg">
                <img src="images/kursus.png" alt="Kursus Bahasa Asing" class="w-full h-64 object-cover transition-transform duration-300 transform hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-900 to-transparent"></div>
                <div class="absolute inset-0 flex flex-col items-start justify-end p-4">
                    <h4 class="text-white font-semibold text-xl">Kursus Bahasa Asing</h4>
                </div>
            </div>
            
            <!-- Card Study Tour -->
            <div class="relative overflow-hidden rounded-lg shadow-lg">
                <img src="images/studytour.png" alt="Study Tour" class="w-full h-64 object-cover transition-transform duration-300 transform hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-900 to-transparent"></div>
                <div class="absolute inset-0 flex flex-col items-start justify-end p-4">
                    <h4 class="text-white font-semibold text-xl">Study Tour</h4>
                </div>
            </div>
            
            <!-- Card Ausbildung -->
            <div class="relative overflow-hidden rounded-lg shadow-lg">
                <img src="images/profession.jpg" alt="Ausbildung" class="w-full h-64 object-cover transition-transform duration-300 transform hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-900 to-transparent"></div>
                <div class="absolute inset-0 flex flex-col items-start justify-end p-4">
                    <h4 class="text-white font-semibold text-xl">Ausbildung</h4>
                </div>
            </div>
            
        </div>
    </div>
</section>


<!-- Bagian Mitra Kami -->
<section id="mitra-kami" class="py-10 bg-white">
    <div class="container mx-auto px-4 sm:px-10 text-center">
        <h3 class="text-3xl font-bold mb-8">Mitra Kami</h3>
        <div class="flex flex-wrap justify-center gap-8">
            <!-- Logo Mitra 1 -->
            <div class="bg-white border rounded-lg shadow-md p-4 flex items-center justify-center w-48 h-25"> <!-- Ukuran ditingkatkan -->
                <img src="images/424.jpeg" alt="424 Aviation" class="max-h-full w-full object-contain"> <!-- ditambahkan w-full dan object-contain -->
            </div>
            <!-- Logo Mitra 2 -->
            <div class="bg-white border rounded-lg shadow-md p-4 flex items-center justify-center w-48 h-25"> <!-- Ukuran ditingkatkan -->
                <img src="images/STA.png" alt="St. Andrews College" class="max-h-full w-full object-contain"> <!-- ditambahkan w-full dan object-contain -->
            </div>
            <!-- Logo Mitra 3 -->
            <div class="bg-white border rounded-lg shadow-md p-4 flex items-center justify-center w-48 h-25"> <!-- Ukuran ditingkatkan -->
                <img src="images/HTW.png" alt="HTW Berlin" class="max-h-full w-full object-contain"> <!-- ditambahkan w-full dan object-contain -->
            </div>
            <!-- Logo Mitra 4 -->
            <div class="bg-white border rounded-lg shadow-md p-4 flex items-center justify-center w-48 h-25"> <!-- Ukuran ditingkatkan -->
                <img src="images/SG.png" alt="Study Group" class="max-h-full w-full object-contain"> <!-- ditambahkan w-full dan object-contain -->
            </div>
        </div>
    </div>
</section>


<!-- Bagian Konseling Gratis -->
<section id="konseling-gratis" class="py-10 bg-white">
    <div class="container mx-auto px-4 sm:px-48 text-center">
        <div class="bg-gradient-to-r from-purple-900 to-blue-600 p-6 rounded-lg flex items-center justify-between">
            <div class="text-left">
                <h4 class="text-2xl font-bold mb-2 text-white">GRATIS KONSELING STUDI DI LUAR NEGERI !!!</h4>
                <p class="mb-0 text-white">Konsultasi seputar kuliah / bekerja di Luar Negeri</p>
            </div>
            <a href="#" class="inline-block bg-white text-blue-700 font-bold px-6 py-3 rounded-full hover:bg-gray-100 transition ml-4">
                MULAI KONSULTASI <span class="ml-2">&#9660;</span>
            </a>
        </div>
    </div>
</section>

<!-- Bagian Artikel Terbaru -->
<section id="artikel-terbaru" class="py-10 bg-white">
    <div class="container mx-auto px-4 sm:px-48 text-center">
        <h3 class="text-3xl font-bold mb-8">ARTIKEL TERBARU</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-8">
            <!-- Artikel 1 -->
            <div class="bg-white rounded-lg overflow-hidden">
                <img src="images/artikel1.jpg" alt="Artikel 1" class="w-full h-60 object-cover"> <!-- Gambar diperbesar -->
                <div class="p-4">
                    <p class="text-gray-700 font-semibold">5 Fakta yang Harus Kamu Ketahui Sebelum Studi ke Jerman</p>
                </div>
            </div>
            <!-- Artikel 2 -->
            <div class="bg-white rounded-lg overflow-hidden">
                <img src="images/artikel2.jpg" alt="Artikel 2" class="w-full h-60 object-cover"> <!-- Gambar diperbesar -->
                <div class="p-4">
                    <p class="text-gray-700 font-semibold">Uni Eropa Menghadapi Virus Korona</p>
                </div>
            </div>
            <!-- Artikel 3 -->
            <div class="bg-white rounded-lg overflow-hidden">
                <img src="images/artikel3.jpg" alt="Artikel 3" class="w-full h-60 object-cover"> <!-- Gambar diperbesar -->
                <div class="p-4">
                    <p class="text-gray-700 font-semibold">Belajar Bahasa Jerman Bersama Goethe Institut</p>
                </div>
            </div>
            <!-- Artikel 4 -->
            <div class="bg-white rounded-lg overflow-hidden">
                <img src="images/artikel4.jpg" alt="Artikel 4" class="w-full h-60 object-cover"> <!-- Gambar diperbesar -->
                <div class="p-4">
                    <p class="text-gray-700 font-semibold">Apa Itu Gates Cambridge? Yuk Cari Tahu</p>
                </div>
            </div>
        </div>
        
        <!-- Tombol Artikel Lainnya -->
        <div class="mt-10">
            <a href="{{ url('/article') }}" class="inline-block bg-white border border-purple-500 text-purple-500 font-semibold px-6 py-2 rounded-full hover:bg-purple-500 hover:text-white transition">
                ARTIKEL LAINNYA
            </a>
        </div>
    </div>
</section>

    <!-- Bagian Hubungi Kami -->
    <section id="hubungi-kami" class="py-10">
        <div class="text-center mb-6">
            <h3 class="text-3xl font-bold mb-2">Hubungi Kami</h3>
            <p>Kantor Pusat</p>
            <p>Mula by Galeria Jakarta, Cilandak Town Square, Lt. Basement.</p>
            <p>Phone: 082367634052</p>
        </div>

        <div class="text-center mt-10">
            <button class="px-6 py-2 text-white bg-gradient-to-r from-[#46074E] via-[#46074Ecc] to-[#197BD0] rounded-full hover:from-[#5a0961] hover:to-[#2184e3]">
                Lokasi Kami
            </button>            
            <a href="#kirim-pesan" class="px-6 py-2 border border-purple-500 text-purple-500 rounded-full hover:bg-purple-500 hover:text-white">Kirim Pesan</a>
        </div>

        <div class="separator"></div>
    </section>

        <!-- Footer -->
        <footer class="bg-gradient-to-r from-[#46074E] to-[#197BD0] text-white py-4">
        <div class="container mx-auto text-center">
            <p>Copyright &copy; 2020 - Inaklug Indonesia | Hak cipta dilindungi undang-undang</p>
        </div>
    </footer>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

</body>
</html>