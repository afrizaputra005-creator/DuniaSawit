<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dunia Sawit - Informasi Industri & Edukasi Kelapa Sawit')</title>
    <!-- Meta SEO -->
    <meta name="description" content="Portal informasi kelapa sawit terlengkap di Indonesia. Dapatkan update harga TBS harian, panduan edukasi pembibitan dan pemupukan, serta berita industri sawit terbaru.">
    <meta name="keywords" content="Dunia Sawit, Kelapa Sawit, Harga TBS, Edukasi Sawit, Berita Sawit, Riau">
    <meta name="author" content="Dunia Sawit">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/DuniaSawit.PNG') }}">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS & Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 flex flex-col min-h-screen">

    <!-- Header / Navbar -->
    <header class="bg-emerald-900 text-white sticky top-0 z-50 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo & Branding -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                        <img src="{{ asset('images/DuniaSawit.PNG') }}" alt="Logo Dunia Sawit" class="h-10 w-10 rounded-full object-cover" style="height: 40px; width: 40px; max-height: 40px; max-width: 40px; border-radius: 50%; object-fit: cover; display: block;">
                        <span class="font-extrabold text-2xl tracking-wider bg-gradient-to-r from-white to-amber-300 bg-clip-text text-transparent">DUNIA SAWIT</span>
                    </a>
                </div>

                <!-- Desktop Navigation Menu -->
                <nav class="hidden md:flex space-x-1 items-center">
                    <a href="{{ route('home') }}" class="px-4 py-2 rounded-lg text-sm font-medium hover:bg-emerald-800 hover:text-amber-300 transition-all duration-300 {{ Route::currentRouteName() == 'home' ? 'text-amber-400 bg-emerald-800' : 'text-gray-100' }}">Beranda</a>
                    <a href="{{ route('prices') }}" class="px-4 py-2 rounded-lg text-sm font-medium hover:bg-emerald-800 hover:text-amber-300 transition-all duration-300 {{ Route::currentRouteName() == 'prices' ? 'text-amber-400 bg-emerald-800' : 'text-gray-100' }}">Harga TBS</a>
                    <a href="{{ route('education') }}" class="px-4 py-2 rounded-lg text-sm font-medium hover:bg-emerald-800 hover:text-amber-300 transition-all duration-300 {{ Route::currentRouteName() == 'education' ? 'text-amber-400 bg-emerald-800' : 'text-gray-100' }}">Edukasi</a>
                    <a href="{{ route('news') }}" class="px-4 py-2 rounded-lg text-sm font-medium hover:bg-emerald-800 hover:text-amber-300 transition-all duration-300 {{ Route::currentRouteName() == 'news' ? 'text-amber-400 bg-emerald-800' : 'text-gray-100' }}">Berita</a>
                </nav>

                <!-- Mobile Menu Button -->
                <div class="flex md:hidden">
                    <button id="mobile-menu-btn" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-emerald-100 hover:text-white hover:bg-emerald-800 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-amber-500 transition duration-300" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Buka menu utama</span>
                        <svg class="block h-6 w-6" id="menu-open-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="hidden h-6 w-6" id="menu-close-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div class="hidden md:hidden bg-emerald-950 border-t border-emerald-800" id="mobile-menu">
            <div class="px-2 pt-2 pb-4 space-y-1 sm:px-3">
                <a href="{{ route('home') }}" class="block px-3 py-2.5 rounded-md text-base font-medium text-white hover:bg-emerald-800 hover:text-amber-300 transition duration-300 {{ Route::currentRouteName() == 'home' ? 'bg-emerald-800 text-amber-400' : '' }}">Beranda</a>
                <a href="{{ route('prices') }}" class="block px-3 py-2.5 rounded-md text-base font-medium text-white hover:bg-emerald-800 hover:text-amber-300 transition duration-300 {{ Route::currentRouteName() == 'prices' ? 'bg-emerald-800 text-amber-400' : '' }}">Harga TBS</a>
                <a href="{{ route('education') }}" class="block px-3 py-2.5 rounded-md text-base font-medium text-white hover:bg-emerald-800 hover:text-amber-300 transition duration-300 {{ Route::currentRouteName() == 'education' ? 'bg-emerald-800 text-amber-400' : '' }}">Edukasi</a>
                <a href="{{ route('news') }}" class="block px-3 py-2.5 rounded-md text-base font-medium text-white hover:bg-emerald-800 hover:text-amber-300 transition duration-300 {{ Route::currentRouteName() == 'news' ? 'bg-emerald-800 text-amber-400' : '' }}">Berita</a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer id="footer" class="bg-emerald-950 text-gray-300 border-t-4 border-amber-500 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
                <!-- Column 1: About -->
                <div>
                    <div class="flex items-center space-x-3 mb-6">
                        <img src="{{ asset('images/DuniaSawit.PNG') }}" alt="Logo Dunia Sawit" class="h-8 w-8 rounded-full object-cover" style="height: 32px; width: 32px; max-height: 32px; max-width: 32px; border-radius: 50%; object-fit: cover; display: block;">
                        <span class="font-extrabold text-xl tracking-wider text-white">DUNIA SAWIT</span>
                    </div>
                    <p class="text-sm leading-relaxed text-gray-400">
                        Dunia Sawit berkomitmen menjadi portal informasi independen terpercaya, menyediakan data harga TBS harian, panduan budidaya terbaik, serta perkembangan berita terkini demi kemajuan industri kelapa sawit nasional dan kesejahteraan petani kelapa sawit Indonesia.
                    </p>
                </div>

                <!-- Column 2: Quick Links -->
                <div class="md:pl-12">
                    <h3 class="text-white font-bold text-lg mb-6 border-b border-emerald-800 pb-2">Tautan Cepat</h3>
                    <ul class="space-y-3 text-sm">
                        <li>
                            <a href="{{ route('home') }}" class="hover:text-amber-400 transition-colors duration-200 flex items-center">
                                <span class="text-amber-500 mr-2">›</span> Beranda
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('prices') }}" class="hover:text-amber-400 transition-colors duration-200 flex items-center">
                                <span class="text-amber-500 mr-2">›</span> Harga TBS Riau
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('education') }}" class="hover:text-amber-400 transition-colors duration-200 flex items-center">
                                <span class="text-amber-500 mr-2">›</span> Panduan Edukasi
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('news') }}" class="hover:text-amber-400 transition-colors duration-200 flex items-center">
                                <span class="text-amber-500 mr-2">›</span> Berita Industri
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Column 3: Contact & Location -->
                <div>
                    <h3 class="text-white font-bold text-lg mb-6 border-b border-emerald-800 pb-2">Hubungi Kami</h3>
                    <ul class="space-y-4 text-sm text-gray-400">
                        <li class="flex items-start space-x-3">
                            <svg class="h-5 w-5 text-amber-500 flex-shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Gedung Graha Sawit, Lantai 4, Pekanbaru, Riau, Indonesia</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="h-5 w-5 text-amber-500 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span>+62 761 123456</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="h-5 w-5 text-amber-500 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span>info@duniasawit.co.id</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-emerald-900 pt-8 mt-8 flex flex-col md:flex-row justify-between items-center text-xs text-gray-500">
                <p>&copy; {{ date('Y') }} Dunia Sawit. Hak Cipta Dilindungi.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-amber-400 transition-colors duration-200">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-amber-400 transition-colors duration-200">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Interactive script for Mobile Menu -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const openIcon = document.getElementById('menu-open-icon');
            const closeIcon = document.getElementById('menu-close-icon');

            if (menuBtn && mobileMenu) {
                menuBtn.addEventListener('click', () => {
                    const isExpanded = menuBtn.getAttribute('aria-expanded') === 'true';
                    menuBtn.setAttribute('aria-expanded', !isExpanded);
                    mobileMenu.classList.toggle('hidden');
                    
                    // Toggle icons
                    openIcon.classList.toggle('hidden');
                    closeIcon.classList.toggle('hidden');
                });
                
                // Close menu when clicking on a navigation anchor link in mobile menu
                const mobileLinks = mobileMenu.querySelectorAll('.mobile-link');
                mobileLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        mobileMenu.classList.add('hidden');
                        openIcon.classList.remove('hidden');
                        closeIcon.classList.add('hidden');
                        menuBtn.setAttribute('aria-expanded', 'false');
                    });
                });
            }
        });
    </script>
</body>
</html>
