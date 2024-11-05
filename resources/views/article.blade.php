<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
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

        /* Background gradient overlay */
        .bg-tentang-kami {
            background-image: 
                linear-gradient(to right, rgba(70, 7, 78, 0.7), rgba(25, 123, 208, 0.1)), 
                url('images/as.png'); 
            background-size: cover;
            background-position: center;
            height: 95vh;
            position: relative;
            display: flex;
            align-items: flex-end;
            justify-content: flex-start;
            padding: 90px;
            color: white;
        }

        
        .cta-container h1 {
            font-size: 2rem;
            margin-left: 90px;
            color: white;
            font-weight: bold;
        }

        
        .cta-container h2.tips {
            font-size: 1.5rem; 
            font-weight: normal; 
            margin-left: 90px;
            color: white;
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
                <a href="#home" class="py-2 px-5 hover:bg-blue-700 transition-colors duration-300">Home</a>
                <a href="#tentang-kami" class="py-2 px-5 hover:bg-blue-700 transition-colors duration-300">Tentang Kami</a>
                <a href="#layanan-kami" class="py-2 px-5 hover:bg-blue-700 transition-colors duration-300">Layanan Kami</a>
                <a href="#artikel" class="py-2 px-5 hover:bg-blue-700 transition-colors duration-300">Artikel</a>
                <a href="#hubungi-kami" class="py-2 px-5 hover:bg-blue-700 transition-colors duration-300">Hubungi Kami</a>
            </div>
        </nav>
    </header>

    
    <div class="bg-tentang-kami">
        <div class="cta-container">
            <h2 class="tips">TIPS</h2> 
            <h1>Penting! Cara Mudah agar Bisa Kuliah di<br>Luar Negeri dengan Beasiswa</h1>
        </div>
    </div>


<!-- Bagian Artikel Samping -->
<section id="artikel-terbaru" class="py-10 bg-white">
    <div class="container mx-auto px-4 sm:px-48 text-center">
        
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-8">
        <!-- Artikel Samping 1 -->
        <div class="bg-white rounded-lg overflow-hidden">
            <img src="images/tupai.png" alt="Artikel 1" class="w-full h-60 object-cover"> <!-- Gambar diperbesar -->
            <div class="p-4">
                <p class="text-gray-700 font-semibold text-left">Penting! Cara Mudah agar Bisa Kuliah di Luar<br>Negeri dengan Beasiswa</p>
            </div>
        </div>
        <!-- Artikel Samping 2 -->
        <div class="bg-white rounded-lg overflow-hidden">
            <img src="images/becak.png" alt="Artikel 2" class="w-full h-60 object-cover"> <!-- Gambar diperbesar -->
            <div class="p-4">
                <p class="text-gray-700 font-semibold text-left">Penting! Cara Mudah agar Bisa Kuliah di Luar<br>Negeri dengan Beasiswa</p>
            </div>
        </div>
    </div>


    <!-- Garis Pemisah antara Tentang Kami dan Layanan Kami -->
<div class="py-10 bg-white">
    <hr class="border-t border-gray-300" />
</div>

<!-- Bagian Artikel Terbaru -->
<section id="artikel-terbaru" class="py-10 bg-white">
    <div class="container mx-auto px-4 sm:px-10">
        <h3 class="text-xl font-bold mb-8 text-left">ARTIKEL TERBARU</h3> 
        <div class="grid grid-cols-1 gap-0"> 
            <!-- Artikel 1 -->
            <div class="grid grid-cols-2 items-center bg-white rounded-lg overflow-hidden p-2"> 
                <img src="images/chinagraph.png" alt="Artikel 1" class="w-full h-72 object-contain">
                <div class="p-2">
                    <h4 class="text-lg font-semibold text-gray-800 text-left">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h4>
                    <p class="text-sm text-gray-500 text-left">Selasa, 18 Feb 2020 12:01 WIB</p>
                </div>
            </div>
            <!-- Artikel 2 -->
            <div class="grid grid-cols-2 items-center bg-white rounded-lg overflow-hidden p-2"> 
                <img src="images/coconut.png" alt="Artikel 2" class="w-full h-72 object-contain">
                <div class="p-2">
                    <h4 class="text-lg font-semibold text-gray-800 text-left">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h4>
                    <p class="text-sm text-gray-500 text-left">Selasa, 18 Feb 2020 12:01 WIB</p>
                </div>
            </div>
            <!-- Artikel 3 -->
            <div class="grid grid-cols-2 items-center bg-white rounded-lg overflow-hidden p-2"> 
                <img src="images/pantai.png" alt="Artikel 3" class="w-full h-72 object-contain">
                <div class="p-2">
                    <h4 class="text-lg font-semibold text-gray-800 text-left">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h4>
                    <p class="text-sm text-gray-500 text-left">Selasa, 18 Feb 2020 12:01 WIB</p>
                </div>
            </div>
            <!-- Artikel 4 -->
            <div class="grid grid-cols-2 items-center bg-white rounded-lg overflow-hidden p-2"> 
                <img src="images/kastil.png" alt="Artikel 4" class="w-full h-72 object-contain">
                <div class="p-2">
                    <h4 class="text-lg font-semibold text-gray-800 text-left">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h4>
                    <p class="text-sm text-gray-500 text-left">Selasa, 18 Feb 2020 12:01 WIB</p>
                </div>
            </div>
            <!-- Artikel 5 -->
            <div class="grid grid-cols-2 items-center bg-white rounded-lg overflow-hidden p-2"> 
                <img src="images/chinatown.png" alt="Artikel 5" class="w-full h-72 object-contain">
                <div class="p-2">
                    <h4 class="text-lg font-semibold text-gray-800 text-left">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h4>
                    <p class="text-sm text-gray-500 text-left">Selasa, 18 Feb 2020 12:01 WIB</p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Pagination -->
<div class="flex justify-center items-center mt-10 space-x-4">
    <button class="text-gray-500 hover:text-gray-700 text-xl">&larr;</button> 
    <div class="w-12 h-12 flex items-center justify-center rounded-full bg-gradient-to-r from-[#46074E] to-[#197BD0] text-white py-4 font-semibold">1</div> <!-- Tombol 1 dengan gradien baru -->
    <div class="w-12 h-12 flex items-center justify-center rounded-full bg-gray-300 text-gray-600">2</div>
    <div class="w-12 h-12 flex items-center justify-center rounded-full bg-gray-300 text-gray-600">3</div>
    <div class="w-12 h-12 flex items-center justify-center rounded-full bg-gray-300 text-gray-600">4</div>
    <div class="w-12 h-12 flex items-center justify-center rounded-full bg-gray-300 text-gray-600">5</div>
    <button class="text-gray-500 hover:text-gray-700 text-xl">&rarr;</button> 
</div>


<!-- Garis Pemisah antara Tentang Kami dan Layanan Kami -->
<div class="py-10 bg-white">
    <hr class="border-t border-gray-300" />
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