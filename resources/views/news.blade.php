@extends('layouts.app')

@section('title', 'Berita Industri - Dunia Sawit | Update Informasi Kelapa Sawit')

@section('content')
    <!-- News Header Hero -->
    <section class="bg-gradient-to-br from-emerald-900 to-emerald-950 text-white py-16 relative overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-10">
            <!-- Subtle background grid pattern -->
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                <defs>
                    <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                        <path d="M 40 0 L 0 0 0 40" fill="none" stroke="white" stroke-width="1" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid)" />
            </svg>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-amber-500/20 text-amber-300 border border-amber-500/30 mb-4">
                Kabar Sawit Terkini
            </span>
            <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight">Portal Berita Industri Sawit</h1>
            <p class="mt-4 text-emerald-200 max-w-2xl mx-auto text-base md:text-lg">
                Dapatkan artikel, liputan khusus, opini ahli, dan update regulasi terbaru seputar dunia perkebunan kelapa sawit nasional dan global.
            </p>
        </div>
    </section>

    <!-- News Grid Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Category Filter Bar (Visual Indicator) -->
            <div class="flex flex-wrap items-center justify-center gap-3 mb-12">
                <span class="px-4 py-2 bg-emerald-800 text-amber-300 rounded-full text-xs font-bold shadow-sm border border-emerald-700 cursor-pointer hover:bg-emerald-900 transition duration-300">Semua Berita</span>
                <span class="px-4 py-2 bg-white text-gray-600 hover:text-emerald-700 hover:bg-emerald-50 rounded-full text-xs font-semibold border border-gray-200 cursor-pointer transition duration-300">Harga TBS</span>
                <span class="px-4 py-2 bg-white text-gray-600 hover:text-emerald-700 hover:bg-emerald-50 rounded-full text-xs font-semibold border border-gray-200 cursor-pointer transition duration-300">Regulasi</span>
                <span class="px-4 py-2 bg-white text-gray-600 hover:text-emerald-700 hover:bg-emerald-50 rounded-full text-xs font-semibold border border-gray-200 cursor-pointer transition duration-300">Teknologi</span>
                <span class="px-4 py-2 bg-white text-gray-600 hover:text-emerald-700 hover:bg-emerald-50 rounded-full text-xs font-semibold border border-gray-200 cursor-pointer transition duration-300">Eksportir & Pasar</span>
            </div>

            <!-- News Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Article 1: TBS Price -->
                <article class="bg-white rounded-3xl border border-gray-100 overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <!-- Thumbnail Image -->
                        <div class="relative h-56 bg-gray-200 overflow-hidden">
                            <img src="{{ asset('images/news-tbs.jpg') }}" alt="Buah Kelapa Sawit Ripe" class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-4 left-4 bg-emerald-800 text-amber-300 text-[10px] uppercase font-bold tracking-wider px-3 py-1 rounded-full border border-emerald-700 shadow-md">
                                Harga TBS
                            </span>
                        </div>
                        
                        <!-- Content -->
                        <div class="p-6">
                            <div class="flex items-center space-x-2 text-xs text-gray-400 mb-3">
                                <span>04 Juli 2026</span>
                                <span>&bull;</span>
                                <span>Oleh Redaksi</span>
                            </div>
                            <h2 class="text-xl font-bold text-gray-900 hover:text-emerald-800 transition-colors duration-200 line-clamp-2">
                                <a href="#">Harga TBS Riau Pekan Ini Naik Tipis, Tembus Rp 2.890 per Kilogram</a>
                            </h2>
                            <p class="text-gray-600 text-sm mt-3 leading-relaxed line-clamp-3">
                                Dinas Perkebunan Provinsi Riau bersama Tim Penetapan Harga kembali merilis harga TBS kelapa sawit untuk sepekan ke depan. Kenaikan didorong oleh penguatan harga CPO global...
                            </p>
                        </div>
                    </div>
                    
                    <div class="p-6 pt-0 border-t border-gray-50 flex items-center justify-between">
                        <a href="#" class="text-sm font-bold text-emerald-800 hover:text-amber-500 transition-colors">
                            Selengkapnya &rarr;
                        </a>
                        <span class="text-xs text-gray-400">Baca 3 Menit</span>
                    </div>
                </article>

                <!-- Article 2: Replanting -->
                <article class="bg-white rounded-3xl border border-gray-100 overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative h-56 bg-gray-200 overflow-hidden">
                            <img src="{{ asset('images/news-nursery.jpg') }}" alt="Pembibitan Kelapa Sawit" class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-4 left-4 bg-emerald-800 text-amber-300 text-[10px] uppercase font-bold tracking-wider px-3 py-1 rounded-full border border-emerald-700 shadow-md">
                                Regulasi
                            </span>
                        </div>
                        
                        <div class="p-6">
                            <div class="flex items-center space-x-2 text-xs text-gray-400 mb-3">
                                <span>02 Juli 2026</span>
                                <span>&bull;</span>
                                <span>Oleh Budi Santoso</span>
                            </div>
                            <h2 class="text-xl font-bold text-gray-900 hover:text-emerald-800 transition-colors duration-200 line-clamp-2">
                                <a href="#">Pemerintah Dorong Akselerasi Replanting Kelapa Sawit Rakyat PSR</a>
                            </h2>
                            <p class="text-gray-600 text-sm mt-3 leading-relaxed line-clamp-3">
                                Program Peremajaan Sawit Rakyat (PSR) terus diakselerasi guna meningkatkan rata-rata produktivitas kelapa sawit swadaya tanpa harus melakukan ekspansi lahan hutan lindung...
                            </p>
                        </div>
                    </div>
                    
                    <div class="p-6 pt-0 border-t border-gray-50 flex items-center justify-between">
                        <a href="#" class="text-sm font-bold text-emerald-800 hover:text-amber-500 transition-colors">
                            Selengkapnya &rarr;
                        </a>
                        <span class="text-xs text-gray-400">Baca 4 Menit</span>
                    </div>
                </article>

                <!-- Article 3: IoT Mill -->
                <article class="bg-white rounded-3xl border border-gray-100 overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative h-56 bg-gray-200 overflow-hidden">
                            <img src="{{ asset('images/news-mill.jpg') }}" alt="Pabrik Kelapa Sawit" class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-4 left-4 bg-emerald-800 text-amber-300 text-[10px] uppercase font-bold tracking-wider px-3 py-1 rounded-full border border-emerald-700 shadow-md">
                                Teknologi
                            </span>
                        </div>
                        
                        <div class="p-6">
                            <div class="flex items-center space-x-2 text-xs text-gray-400 mb-3">
                                <span>01 Juli 2026</span>
                                <span>&bull;</span>
                                <span>Oleh TechnoSawit</span>
                            </div>
                            <h2 class="text-xl font-bold text-gray-900 hover:text-emerald-800 transition-colors duration-200 line-clamp-2">
                                <a href="#">Penerapan Teknologi Digital IoT untuk Efisiensi Pabrik Kelapa Sawit</a>
                            </h2>
                            <p class="text-gray-600 text-sm mt-3 leading-relaxed line-clamp-3">
                                Penerapan Internet of Things (IoT) pada industri pengolahan kelapa sawit mampu meminimalisasi kehilangan kadar asam lemak bebas pada CPO selama proses sterilisasi di pabrik...
                            </p>
                        </div>
                    </div>
                    
                    <div class="p-6 pt-0 border-t border-gray-50 flex items-center justify-between">
                        <a href="#" class="text-sm font-bold text-emerald-800 hover:text-amber-500 transition-colors">
                            Selengkapnya &rarr;
                        </a>
                        <span class="text-xs text-gray-400">Baca 5 Menit</span>
                    </div>
                </article>

                <!-- Article 4: Exports -->
                <article class="bg-white rounded-3xl border border-gray-100 overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative h-56 bg-gray-200 overflow-hidden">
                            <img src="{{ asset('images/news-tbs.jpg') }}" alt="Buah Kelapa Sawit Ripe" class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-4 left-4 bg-emerald-800 text-amber-300 text-[10px] uppercase font-bold tracking-wider px-3 py-1 rounded-full border border-emerald-700 shadow-md">
                                Ekonomi
                            </span>
                        </div>
                        
                        <div class="p-6">
                            <div class="flex items-center space-x-2 text-xs text-gray-400 mb-3">
                                <span>28 Juni 2026</span>
                                <span>&bull;</span>
                                <span>Oleh Redaksi</span>
                            </div>
                            <h2 class="text-xl font-bold text-gray-900 hover:text-emerald-800 transition-colors duration-200 line-clamp-2">
                                <a href="#">Ekspor CPO Indonesia Menguat Menjelang Akhir Kuartal Kedua</a>
                            </h2>
                            <p class="text-gray-600 text-sm mt-3 leading-relaxed line-clamp-3">
                                Laporan Gabungan Pengusaha Kelapa Sawit Indonesia (GAPKI) mencatat kenaikan ekspor CPO dan turunannya ke negara importir utama seperti India dan Tiongkok berkat stabilnya tarif...
                            </p>
                        </div>
                    </div>
                    
                    <div class="p-6 pt-0 border-t border-gray-50 flex items-center justify-between">
                        <a href="#" class="text-sm font-bold text-emerald-800 hover:text-amber-500 transition-colors">
                            Selengkapnya &rarr;
                        </a>
                        <span class="text-xs text-gray-400">Baca 3 Menit</span>
                    </div>
                </article>

                <!-- Article 5: El Nino -->
                <article class="bg-white rounded-3xl border border-gray-100 overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative h-56 bg-gray-200 overflow-hidden">
                            <img src="{{ asset('images/news-nursery.jpg') }}" alt="Pembibitan Kelapa Sawit" class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-4 left-4 bg-emerald-800 text-amber-300 text-[10px] uppercase font-bold tracking-wider px-3 py-1 rounded-full border border-emerald-700 shadow-md">
                                Tips & Trik
                            </span>
                        </div>
                        
                        <div class="p-6">
                            <div class="flex items-center space-x-2 text-xs text-gray-400 mb-3">
                                <span>25 Juni 2026</span>
                                <span>&bull;</span>
                                <span>Oleh Dr. Ir. H. Sudirman</span>
                            </div>
                            <h2 class="text-xl font-bold text-gray-900 hover:text-emerald-800 transition-colors duration-200 line-clamp-2">
                                <a href="#">Tips Menghadapi Dampak El Nino Terhadap Produktivitas Kebun Sawit</a>
                            </h2>
                            <p class="text-gray-600 text-sm mt-3 leading-relaxed line-clamp-3">
                                Menghadapi kemarau panjang akibat dampak El Nino, petani disarankan mengaplikasikan pemupukan secara tepat waktu serta mempertahankan tumpukan pelepah kelapa sawit sebagai mulsa alami...
                            </p>
                        </div>
                    </div>
                    
                    <div class="p-6 pt-0 border-t border-gray-50 flex items-center justify-between">
                        <a href="#" class="text-sm font-bold text-emerald-800 hover:text-amber-500 transition-colors">
                            Selengkapnya &rarr;
                        </a>
                        <span class="text-xs text-gray-400">Baca 6 Menit</span>
                    </div>
                </article>

                <!-- Article 6: ISPO & RSPO -->
                <article class="bg-white rounded-3xl border border-gray-100 overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative h-56 bg-gray-200 overflow-hidden">
                            <img src="{{ asset('images/news-mill.jpg') }}" alt="Pabrik Kelapa Sawit" class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-4 left-4 bg-emerald-800 text-amber-300 text-[10px] uppercase font-bold tracking-wider px-3 py-1 rounded-full border border-emerald-700 shadow-md">
                                Sertifikasi
                            </span>
                        </div>
                        
                        <div class="p-6">
                            <div class="flex items-center space-x-2 text-xs text-gray-400 mb-3">
                                <span>20 Juni 2026</span>
                                <span>&bull;</span>
                                <span>Oleh Aminah S.P.</span>
                            </div>
                            <h2 class="text-xl font-bold text-gray-900 hover:text-emerald-800 transition-colors duration-200 line-clamp-2">
                                <a href="#">Perbandingan Regulasi Sertifikasi ISPO dan RSPO bagi Petani Mandiri</a>
                            </h2>
                            <p class="text-gray-600 text-sm mt-3 leading-relaxed line-clamp-3">
                                Pentingnya sertifikasi kelapa sawit berkelanjutan untuk menembus pasar ekspor Eropa. Ketahui perbedaan syarat kelayakan administrasi serta proses audit sertifikat ISPO dan RSPO...
                            </p>
                        </div>
                    </div>
                    
                    <div class="p-6 pt-0 border-t border-gray-50 flex items-center justify-between">
                        <a href="#" class="text-sm font-bold text-emerald-800 hover:text-amber-500 transition-colors">
                            Selengkapnya &rarr;
                        </a>
                        <span class="text-xs text-gray-400">Baca 4 Menit</span>
                    </div>
                </article>

            </div>

            <!-- Pagination Elements (Static Visual Indicator) -->
            <div class="mt-16 flex justify-center">
                <nav class="relative z-0 inline-flex rounded-2xl shadow-sm -space-x-px" aria-label="Pagination">
                    <a href="#" class="relative inline-flex items-center px-4 py-3 rounded-l-2xl border border-gray-200 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transition duration-150">
                        <span class="sr-only">Sebelumnya</span>
                        &larr;
                    </a>
                    <a href="#" aria-current="page" class="z-10 bg-emerald-850 border-emerald-800 text-emerald-700 relative inline-flex items-center px-4.5 py-3 border text-sm font-bold bg-emerald-50">
                        1
                    </a>
                    <a href="#" class="bg-white border-gray-200 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4.5 py-3 border text-sm font-medium transition duration-150">
                        2
                    </a>
                    <a href="#" class="bg-white border-gray-200 text-gray-500 hover:bg-gray-50 hidden md:inline-flex relative items-center px-4.5 py-3 border text-sm font-medium transition duration-150">
                        3
                    </a>
                    <a href="#" class="relative inline-flex items-center px-4 py-3 rounded-r-2xl border border-gray-200 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transition duration-150">
                        <span class="sr-only">Selanjutnya</span>
                        &rarr;
                    </a>
                </nav>
            </div>
            
        </div>
    </section>
@endsection
