<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Web Enterprice</title>
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
        .bg-tentang-kami {
            background-image: url('images/dresden2.jpg');
            background-size: cover;
            background-position: center;
            height: 550px;
            position: relative;
        }

        /* Mengatur posisi teks dan gaya tanpa mengubah ukuran dan posisi */
        .bg-tentang-kami h1 {
            position: absolute;
            left: 20%;
            transform: translateX(-50%);
            top: 60%;
            color: white;
            font-size: 2rem;
            text-align: center;
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
                <a href="/" class="hover:text-gray-200 transition-colors duration-300">Home</a>
                <a href="/tentang" class="hover:text-gray-200 transition-colors duration-300">Tentang Kami</a>
                <a href="#layanan-kami" class="hover:text-gray-200 transition-colors duration-300">Layanan Kami</a>
                <a href="/article" class="hover:text-gray-200 transition-colors duration-300">Artikel</a>
                <a href="#hubungi-kami" class="hover:text-gray-200 transition-colors duration-300">Hubungi Kami</a>
            </nav>
            <button type="button" class="ml-auto px-6 py-2 bg-[#1E3A8A] text-white rounded-full hover:bg-blue-700">Daftar Online</button>
            
            <!-- Menu Hamburger untuk Mobile -->
            <div class="md:hidden ml-auto">
                <button id="menu-toggle" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Menu Dropdown untuk Mobile -->
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

    <!-- Bagian Tentang Kami -->
    <div class="bg-tentang-kami">
        <h1 class="text-3xl sm:text-5xl font-bold">Tentang Kami</h1>
    </div>

    <!-- Bagian Profil, Visi, dan Misi -->
    <section id="profil-visi-misi" class="py-10 bg-gray-100">
        <div class="container mx-auto px-4 sm:px-10">
            <h3 class="text-3xl font-bold text-left mb-8">PROFIL</h3>
            <p class="text-justify mb-10 w-full">
                Didirikan pada tahun 2018, kami tumbuh sebagai konsultan pendidikan internasional berpengalaman, terpercaya, dan siap membantu anak-anak muda Indonesia untuk mencapai cita-cita mereka dan sukses di berbagai negara yang dituju.
            </p>
            <div class="flex flex-col sm:flex-row gap-8 justify-center">
                <!-- Kolom Visi -->
                <div class="w-full sm:w-1/2 flex flex-col items-center">
                    <img src="images/visi.png" alt="Visi Image" class="w-full max-w-2xl mb-4">
                    <h4 class="text-2xl font-semibold mb-2 text-center">Visi</h4>
                    <p class="text-justify max-w-2xl">Membangun Sumber Daya Indonesia yang memiliki daya saing tinggi, tangguh, dan siap bersaing secara internasional.</p>
                </div>

                <!-- Kolom Misi -->
                <div class="w-full sm:w-1/2 flex flex-col items-center">
                    <img src="images/misi.png" alt="Misi Image" class="w-full max-w-2xl mb-4">
                    <h4 class="text-2xl font-semibold mb-2 text-center">Misi</h4>
                    <p class="text-justify max-w-2xl">Menyiapkan generasi Indonesia masa depan yang kompetitif, mandiri, dan profesional melalui pendidikan berkualitas.</p>
                </div>
            </div>

            <div class="text-center mt-10">
                <a href="#layanan-kami" class="px-6 py-2 border border-purple-500 text-purple-500 rounded-full hover:bg-purple-500 hover:text-white">Layanan Kami</a>
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
        // JavaScript untuk toggle menu
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>