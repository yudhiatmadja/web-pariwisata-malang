<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>



    <title>Pariwisata Malang</title>
</head>
<body>


    <header class="bg-white shadow-lg">
        <nav class="container mx-auto flex items-center justify-between p-6">
            <a href="#" class="text-2xl font-bold text-green-600 ">Pariwisata Malang</a>
            <div class="hidden md:flex space-x-6">
                <a href="#" class="text-gray-700 hover:text-green-600 hover:font-semibold">Beranda</a>
                <a href="#destinasi" class="text-gray-700 hover:text-green-600 hover:font-semibold">Destinasi</a>
                <a href="#galeri" class="text-gray-700 hover:text-green-600 hover:font-semibold">Galeri</a>
                <a href="#kontak" class="text-gray-700 hover:text-green-600 hover:font-semibold">Kontak</a>
            </div>
            <button class="md:hidden flex items-center text-gray-700">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                </svg>
            </button>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="bg-cover bg-center h-screen text-white" style="background-image: url('/images/balkot.png');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 animate__animated animate__fadeIn animate__delay-1s">Selamat Datang di Pariwisata Malang</h1>
                <p class="text-lg mb-6 animate__animated animate__fadeIn animate__delay-2s">Jelajahi keindahan alam dan budaya Malang yang menakjubkan</p>
                <a href="#destinasi" class="bg-green-600 hover:bg-green-700 text-white py-3 px-6 rounded-lg animate__animated animate__fadeIn animate__delay-3s">Lihat Destinasi</a>
            </div>
        </div>
    </section>




    <!-- Destinasi Section -->
    <section id="destinasi" class="container mx-auto py-16">
        <h2 class="text-3xl font-bold text-center mb-12 fade-up">Destinasi Terbaik</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-lg">
                <img src="{{ url('images/bromo.jpg') }}" alt="Mountain" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-3">Gunung Bromo</h3>
                    <p class="text-gray-600">Nikmati keindahan matahari terbit dari puncak Gunung Bromo yang memukau.</p>
                </div>

                    <a href="https://maps.app.goo.gl/cM1hqe52WXdGLSeu6" target="_blank" class="bg-green-700  rounded-md text-white font-semibold py-1 px-6 ms-6 mb-2">lihat peta</a>
            </div>
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-lg">
                <img src="{{ url('images/bromo.jpg') }}" alt="Mountain" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-3">Gunung Bromo</h3>
                    <p class="text-gray-600">Nikmati keindahan matahari terbit dari puncak Gunung Bromo yang memukau.</p>
                </div>
                    <a href="https://maps.app.goo.gl/cM1hqe52WXdGLSeu6" target="_blank" class="bg-green-700  rounded-md text-white font-semibold py-1 px-6 ms-6 mx-auto">lihat peta</a>
            </div>
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-lg">
                <img src="{{ url('images/bromo.jpg') }}" alt="Mountain" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-3">Gunung Bromo</h3>
                    <p class="text-gray-600">Nikmati keindahan matahari terbit dari puncak Gunung Bromo yang memukau.</p>
                </div>
                    <a href="https://maps.app.goo.gl/cM1hqe52WXdGLSeu6" target="_blank" class="bg-green-700  rounded-md text-white font-semibold py-1 px-6 ms-6 mx-auto">lihat peta</a>
            </div>

        </div>
    </section>



    <!-- Galeri Section -->
    <section id="galeri" class="bg-green-600 py-16">
        <h2 class="text-3xl font-bold text-center text-white mb-12">Galeri Foto</h2>
        <div class="container mx-auto grid md:grid-cols-4 gap-4">
            <div class="relative group">
                <img src="{{url('/images/dreamland.jpg')}}" alt="Nature" class="w-full h-full object-cover rounded-lg">
                <div class="absolute inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-lg font-bold">Dream Land</span>
                </div>
            </div>
            <div class="relative group">
                <img src="{{url('/images/paralayang.jpg')}}" alt="Landscape" class="w-full h-full object-cover rounded-lg">
                <div class="absolute inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-lg font-bold">Paralayang</span>
                </div>
            </div>
            <div class="relative group">
                <img src="{{url('/images/rumahwarna.jpg')}}" alt="City" class="w-full h-full object-cover rounded-lg">
                <div class="absolute inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-lg font-bold">Rumah Warna</span>
                </div>
            </div>
            <div class="relative group">
                <img src="{{url('/images/masjidumm.jpg')}}" alt="Forest" class="w-full h-full object-cover rounded-lg">
                <div class="absolute inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-lg font-bold">Masjid UMM</span>
                </div>
            </div>
        </div>

    </section>

    <!-- Kontak Section -->
    <section id="kontak" class="container mx-auto py-16">
        <h2 class="text-3xl font-bold text-center mb-12">Kontak Kami</h2>
        <form class="max-w-lg mx-auto">
            <div class="mb-6">
                <label for="name" class="block text-gray-700">Nama</label>
                <input type="text" id="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-green-600" placeholder="Nama Anda">
            </div>
            <div class="mb-6">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-green-600" placeholder="Email Anda">
            </div>
            <div class="mb-6">
                <label for="message" class="block text-gray-700">Pesan</label>
                <textarea id="message" rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-green-600" placeholder="Pesan Anda"></textarea>
            </div>
            <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white py-3 rounded-lg">Kirim Pesan</button>
        </form>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 py-6">
        <div class="container mx-auto text-center text-white">
            <p>&copy; 2024 Sigmalogy Studio. All Rights Reserved.</p>
        </div>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
        document.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            link.classList.add('bg-green-700');
            setTimeout(() => link.classList.remove('bg-green-700'), 300);
        });
    });

    document.addEventListener('DOMContentLoaded', () => {

        gsap.from(".fade-up", { opacity: 0, y: 50, duration: 1, stagger: 0.3 });

        document.querySelectorAll('.card').forEach(card => {
            card.addEventListener('mouseover', () => {
                gsap.to(card, { scale: 1.05, duration: 0.3 });
            });
            card.addEventListener('mouseout', () => {
                gsap.to(card, { scale: 1, duration: 0.3 });
            });
        });
    });
    </script>

</body>
</html>
