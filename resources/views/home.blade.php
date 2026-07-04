@extends('layouts.app')

@section('title', 'Beranda - Dunia Sawit | Informasi Harga TBS & Edukasi Kelapa Sawit')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-emerald-950 text-white overflow-hidden">
        <!-- Leaf, Fruit, and Ken Burns Animations Styles -->
        <style>
            .palm-leaf {
                position: absolute;
                top: -60px;
                pointer-events: none;
                animation: fall-leaves linear infinite;
                z-index: 1;
            }
            .palm-fruit {
                position: absolute;
                top: -60px;
                pointer-events: none;
                animation: fall-fruits linear infinite;
                z-index: 1;
            }
            .hero-ken-burns {
                animation: ken-burns 25s ease-in-out infinite alternate;
            }
            @keyframes fall-leaves {
                0% {
                    transform: translateY(-50px) rotate(0deg) translateX(0px);
                    opacity: 0;
                }
                15% {
                    opacity: 0.5;
                }
                85% {
                    opacity: 0.5;
                }
                100% {
                    transform: translateY(110vh) rotate(360deg) translateX(80px);
                    opacity: 0;
                }
            }
            @keyframes fall-fruits {
                0% {
                    transform: translateY(-50px) rotate(0deg) translateX(0px) scale(0.8);
                    opacity: 0;
                }
                15% {
                    opacity: 0.75;
                }
                85% {
                    opacity: 0.75;
                }
                100% {
                    transform: translateY(110vh) rotate(720deg) translateX(-50px) scale(1.1);
                    opacity: 0;
                }
            }
            @keyframes ken-burns {
                0% {
                    transform: scale(1.03) translate(0px, 0px);
                }
                100% {
                    transform: scale(1.15) translate(-15px, 8px);
                }
            }
        </style>

        <!-- Falling Palm Leaves & Fruits Animation Elements -->
        <div class="absolute inset-0 z-10 overflow-hidden pointer-events-none">
            <!-- SVG Gradient definition for Ripe Oil Palm Fruits -->
            <svg width="0" height="0" class="absolute">
                <defs>
                    <radialGradient id="palmFruitGrad" cx="35%" cy="35%" r="65%">
                        <stop offset="0%" stop-color="#fde047"/> <!-- yellow-300 -->
                        <stop offset="35%" stop-color="#f97316"/> <!-- orange-500 -->
                        <stop offset="85%" stop-color="#b91c1c"/> <!-- red-700 -->
                        <stop offset="100%" stop-color="#451a03"/> <!-- orange-950/brown -->
                    </radialGradient>
                </defs>
            </svg>

            <!-- Leaf 1 -->
            <div class="palm-leaf" style="left: 6%; width: 26px; height: 26px; animation-duration: 14s; animation-delay: 0s;">
                <svg class="text-emerald-400 opacity-60" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17 8C8 10 5 16 5 21C7 21 11 19 14 16C17 13 18 10 18 10C18 10 19 8 17 8Z"/>
                </svg>
            </div>
            <!-- Fruit 1 (Ripe Palm Fruit) -->
            <div class="palm-fruit" style="left: 16%; width: 20px; height: 26px; animation-duration: 11s; animation-delay: 1s;">
                <svg viewBox="0 0 22 28" fill="url(#palmFruitGrad)">
                    <path d="M11 2C6 2 2 7 2 15C2 21 6 26 11 26C16 26 20 21 20 15C20 7 16 2 11 2Z"/>
                </svg>
            </div>
            <!-- Leaf 2 -->
            <div class="palm-leaf" style="left: 28%; width: 34px; height: 34px; animation-duration: 18s; animation-delay: 3s;">
                <svg class="text-emerald-300 opacity-40" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17 8C8 10 5 16 5 21C7 21 11 19 14 16C17 13 18 10 18 10C18 10 19 8 17 8Z"/>
                </svg>
            </div>
            <!-- Fruit 2 (Ripe Palm Fruit) -->
            <div class="palm-fruit" style="left: 40%; width: 24px; height: 30px; animation-duration: 15s; animation-delay: 5s;">
                <svg viewBox="0 0 22 28" fill="url(#palmFruitGrad)">
                    <path d="M11 2C6 2 2 7 2 15C2 21 6 26 11 26C16 26 20 21 20 15C20 7 16 2 11 2Z"/>
                </svg>
            </div>
            <!-- Leaf 3 -->
            <div class="palm-leaf" style="left: 52%; width: 22px; height: 22px; animation-duration: 12s; animation-delay: 6s;">
                <svg class="text-emerald-500 opacity-50" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17 8C8 10 5 16 5 21C7 21 11 19 14 16C17 13 18 10 18 10C18 10 19 8 17 8Z"/>
                </svg>
            </div>
            <!-- Fruit 3 (Ripe Palm Fruit) -->
            <div class="palm-fruit" style="left: 60%; width: 18px; height: 24px; animation-duration: 13s; animation-delay: 2.5s;">
                <svg viewBox="0 0 22 28" fill="url(#palmFruitGrad)">
                    <path d="M11 2C6 2 2 7 2 15C2 21 6 26 11 26C16 26 20 21 20 15C20 7 16 2 11 2Z"/>
                </svg>
            </div>
            <!-- Leaf 4 -->
            <div class="palm-leaf" style="left: 68%; width: 38px; height: 38px; animation-duration: 22s; animation-delay: 1.5s;">
                <svg class="text-emerald-250 opacity-30" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17 8C8 10 5 16 5 21C7 21 11 19 14 16C17 13 18 10 18 10C18 10 19 8 17 8Z"/>
                </svg>
            </div>
            <!-- Fruit 4 (Ripe Palm Fruit) -->
            <div class="palm-fruit" style="left: 78%; width: 22px; height: 28px; animation-duration: 14s; animation-delay: 7s;">
                <svg viewBox="0 0 22 28" fill="url(#palmFruitGrad)">
                    <path d="M11 2C6 2 2 7 2 15C2 21 6 26 11 26C16 26 20 21 20 15C20 7 16 2 11 2Z"/>
                </svg>
            </div>
            <!-- Leaf 5 -->
            <div class="palm-leaf" style="left: 84%; width: 30px; height: 30px; animation-duration: 16s; animation-delay: 9s;">
                <svg class="text-emerald-400 opacity-55" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17 8C8 10 5 16 5 21C7 21 11 19 14 16C17 13 18 10 18 10C18 10 19 8 17 8Z"/>
                </svg>
            </div>
            <!-- Fruit 5 (Ripe Palm Fruit) -->
            <div class="palm-fruit" style="left: 90%; width: 20px; height: 26px; animation-duration: 10s; animation-delay: 4.5s;">
                <svg viewBox="0 0 22 28" fill="url(#palmFruitGrad)">
                    <path d="M11 2C6 2 2 7 2 15C2 21 6 26 11 26C16 26 20 21 20 15C20 7 16 2 11 2Z"/>
                </svg>
            </div>
            <!-- Leaf 6 -->
            <div class="palm-leaf" style="left: 95%; width: 24px; height: 24px; animation-duration: 13s; animation-delay: 4s;">
                <svg class="text-emerald-300 opacity-60" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17 8C8 10 5 16 5 21C7 21 11 19 14 16C17 13 18 10 18 10C18 10 19 8 17 8Z"/>
                </svg>
            </div>
        </div>

        <!-- Hero Background Image with Overlay -->
        <div class="absolute inset-0 z-0 overflow-hidden">
            <img src="{{ asset('images/hero-sawit.jpg') }}" alt="Perkebunan Kelapa Sawit" class="w-full h-full object-cover object-center opacity-30 hero-ken-burns">
            <div class="absolute inset-0 bg-gradient-to-r from-emerald-950 via-emerald-900/90 to-transparent"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32 flex flex-col md:flex-row items-center justify-between gap-12">
            <!-- Hero Text Content -->
            <div class="max-w-2xl text-center md:text-left">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-amber-500/20 text-amber-300 border border-amber-500/30 mb-6">
                    <span class="w-2 h-2 rounded-full bg-amber-400 mr-2 animate-ping"></span> Portal Informasi Sawit Terlengkap
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight">
                    Membangun Masa Depan <span class="bg-gradient-to-r from-amber-400 to-yellow-300 bg-clip-text text-transparent">Sawit Indonesia</span> yang Berkelanjutan
                </h1>
                <p class="mt-6 text-lg text-gray-300 leading-relaxed max-w-xl">
                    Selamat datang di <strong>Dunia Sawit</strong>, platform edukasi dan pusat data kelapa sawit independen. Kami menyediakan informasi harga TBS harian teraktual, berita terpercaya, serta panduan praktis untuk mengoptimalkan hasil kebun kelapa sawit Anda.
                </p>
                <div class="mt-10 flex flex-wrap justify-center md:justify-start gap-4">
                    <a href="{{ route('prices') }}" class="px-8 py-4 bg-amber-500 hover:bg-amber-600 text-emerald-950 font-bold rounded-xl shadow-lg hover:shadow-amber-500/20 transform hover:-translate-y-0.5 transition-all duration-300">
                        Cek Harga TBS Riau
                    </a>
                    <a href="{{ route('education') }}" class="px-8 py-4 bg-transparent hover:bg-white/10 text-white font-semibold rounded-xl border border-white/30 hover:border-white transition-all duration-300">
                        Pelajari Budidaya
                    </a>
                </div>
            </div>

            <!-- Quick Info Box (Floating Badge Cards) -->
            <div class="w-full max-w-md bg-white/10 backdrop-blur-md rounded-3xl p-6 border border-white/10 shadow-2xl">
                <h3 class="text-white font-bold text-xl mb-4 border-b border-white/10 pb-3 flex items-center">
                    <svg class="h-6 w-6 text-amber-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Sekilas Info Sawit
                </h3>
                <div class="space-y-4">
                    <div class="flex items-start space-x-3 bg-emerald-950/40 p-3.5 rounded-2xl border border-emerald-800/50">
                        <span class="text-amber-400 text-lg font-bold">1.</span>
                        <p class="text-sm text-gray-200">
                            <strong>Harga TBS Naik:</strong> Wilayah Riau mencatat kenaikan rata-rata Rp 45/Kg pekan ini.
                        </p>
                    </div>
                    <div class="flex items-start space-x-3 bg-emerald-950/40 p-3.5 rounded-2xl border border-emerald-800/50">
                        <span class="text-amber-400 text-lg font-bold">2.</span>
                        <p class="text-sm text-gray-200">
                            <strong>Musim Pemupukan:</strong> Pastikan Anda menggunakan metode 4T menjelang musim penghujan.
                        </p>
                    </div>
                    <div class="flex items-start space-x-3 bg-emerald-950/40 p-3.5 rounded-2xl border border-emerald-800/50">
                        <span class="text-amber-400 text-lg font-bold">3.</span>
                        <p class="text-sm text-gray-200">
                            <strong>Sertifikasi ISPO:</strong> Pemerintah memperketat regulasi sertifikasi bagi petani mandiri per 2026.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services / Navigation Cards Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-sm font-bold uppercase tracking-widest text-emerald-700">Layanan Informasi</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-2">
                    Layanan & Navigasi Portal
                </h2>
                <div class="w-24 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
                <p class="text-gray-600 mt-4 leading-relaxed">
                    Kami membagi portal informasi Dunia Sawit ke dalam halaman-halaman khusus agar Anda dapat dengan mudah mencari informasi yang dibutuhkan secara cepat dan terarah.
                </p>
            </div>

            <!-- Two Columns Layout for Prices and Education -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <!-- Card 1: Harga TBS -->
                <div class="bg-gradient-to-br from-emerald-50 to-emerald-100/50 border border-emerald-100 rounded-3xl p-8 shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="bg-emerald-900 w-14 h-14 rounded-2xl flex items-center justify-center text-amber-400 mb-6 shadow-md">
                            <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-emerald-950 mb-3">Informasi Harga TBS Harian</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Pantau harga harian Tandan Buah Segar (TBS) Provinsi Riau. Data yang kami sediakan terperinci berdasarkan umur ekonomis kelapa sawit (3 tahun sampai dengan 10 tahun ke atas) yang merujuk pada penetapan Dinas Perkebunan.
                        </p>
                    </div>
                    <a href="{{ route('prices') }}" class="inline-flex items-center justify-center px-6 py-3.5 bg-emerald-900 hover:bg-emerald-800 text-white font-bold rounded-xl transition duration-300">
                        Lihat Tabel Harga TBS
                        <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>

                <!-- Card 2: Edukasi Budidaya -->
                <div class="bg-gradient-to-br from-amber-50 to-amber-100/50 border border-amber-100 rounded-3xl p-8 shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="bg-amber-500 w-14 h-14 rounded-2xl flex items-center justify-center text-emerald-950 mb-6 shadow-md">
                            <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-emerald-950 mb-3">Edukasi Budidaya Sawit</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Akses materi pembelajaran agronomis praktis secara gratis. Temukan panduan budidaya sawit terbaik, mulai dari pemilihan kecambah unggul, pemupukan terpadu metode 4T, hingga strategi proteksi dari serangan hama mematikan.
                        </p>
                    </div>
                    <a href="{{ route('education') }}" class="inline-flex items-center justify-center px-6 py-3.5 bg-amber-500 hover:bg-amber-600 text-emerald-950 font-bold rounded-xl transition duration-300">
                        Buka Panduan Edukasi
                        <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- News Teaser / CTA Section -->
    <section class="bg-gradient-to-br from-emerald-900 to-emerald-950 py-16 text-white text-center relative overflow-hidden">
        <div class="absolute -top-16 -left-16 w-64 h-64 bg-amber-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-16 -right-16 w-64 h-64 bg-emerald-500/10 rounded-full blur-3xl"></div>
        
        <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold">Ingin Mendapatkan Info Sawit Terkini Langsung?</h2>
            <p class="mt-4 text-emerald-200 max-w-xl mx-auto leading-relaxed">
                Akses berita terkini, regulasi industri sawit, dan artikel mendalam secara gratis melalui halaman berita kami.
            </p>
            <div class="mt-8">
                <a href="{{ route('news') }}" class="inline-flex items-center px-8 py-4 bg-amber-500 hover:bg-amber-600 text-emerald-950 font-bold rounded-xl shadow-lg hover:shadow-amber-500/20 transform hover:-translate-y-0.5 transition-all duration-300">
                    Lihat Berita Industri
                    <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
@endsection
