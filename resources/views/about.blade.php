@extends('layouts.app')

@section('title', 'Tentang Kami - Dunia Sawit | Portal Informasi & Edukasi Sawit')

@section('content')
    <!-- Header Hero Section -->
    <section class="bg-gradient-to-br from-emerald-900 to-emerald-950 text-white py-16 relative overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-10">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                <defs>
                    <pattern id="about-grid" width="40" height="40" patternUnits="userSpaceOnUse">
                        <path d="M 40 0 L 0 0 0 40" fill="none" stroke="white" stroke-width="1" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#about-grid)" />
            </svg>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-amber-500/20 text-amber-300 border border-amber-500/30 mb-4">
                Mengenal Dunia Sawit
            </span>
            <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight">Tentang Kami</h1>
            <p class="mt-4 text-emerald-200 max-w-2xl mx-auto text-base md:text-lg">
                Komitmen kami dalam mengawal kemajuan industri kelapa sawit nasional melalui keterbukaan data, edukasi berimbang, dan prinsip keberlanjutan.
            </p>
        </div>
    </section>

    <!-- Content Section: Profile -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-12 max-w-6xl mx-auto">
                <!-- Left Column: Visual -->
                <div class="w-full lg:w-1/2 relative">
                    <div class="absolute -top-4 -left-4 w-72 h-72 bg-amber-500/10 rounded-full blur-3xl -z-10"></div>
                    <div class="absolute -bottom-4 -right-4 w-72 h-72 bg-emerald-500/10 rounded-full blur-3xl -z-10"></div>
                    <div class="rounded-3xl overflow-hidden shadow-2xl border-4 border-emerald-50 aspect-video lg:aspect-square">
                        <img src="{{ asset('images/hero-sawit.jpg') }}" alt="Perkebunan Sawit Indonesia" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Right Column: Text Profile -->
                <div class="w-full lg:w-1/2">
                    <span class="text-sm font-bold uppercase tracking-widest text-emerald-700">Profil Organisasi</span>
                    <h2 class="text-3xl font-extrabold text-gray-900 mt-2 mb-6">Dedikasi untuk Kemakmuran Petani Sawit</h2>
                    <div class="w-20 h-1 bg-amber-500 mb-6 rounded-full"></div>
                    <p class="text-gray-650 leading-relaxed text-sm mb-4">
                        Dunia Sawit didirikan sebagai portal media independen yang didedikasikan untuk menjembatani kesenjangan informasi di sektor perkebunan kelapa sawit Indonesia. Kelapa sawit merupakan pilar ekonomi nasional, namun para petani swadaya kerap kali menghadapi tantangan keterbatasan akses data harga dan teknik budidaya.
                    </p>
                    <p class="text-gray-650 leading-relaxed text-sm mb-6">
                        Melalui platform ini, kami menyediakan pembaruan berkala mengenai ketetapan harga TBS, berita regulasi industri, dan panduan agronomi praktis yang disusun oleh pakar pertanian perkebunan kelapa sawit guna membantu meningkatkan rendemen serta hasil produksi panen kelapa sawit.
                    </p>
                    <div class="flex gap-4">
                        <div class="border-l-4 border-emerald-700 pl-4">
                            <h4 class="font-extrabold text-lg text-emerald-950">100%</h4>
                            <p class="text-xs text-gray-500 uppercase tracking-wider">Informasi Independen</p>
                        </div>
                        <div class="border-l-4 border-emerald-700 pl-4">
                            <h4 class="font-extrabold text-lg text-emerald-950">Riau & Sumatra</h4>
                            <p class="text-xs text-gray-500 uppercase tracking-wider">Cakupan Data Utama</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section class="py-20 bg-emerald-950 text-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-80 h-80 bg-amber-500/10 rounded-full blur-3xl -z-10"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-sm font-bold uppercase tracking-widest text-amber-400">Arah & Landasan Kerja</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-white mt-2">Visi & Misi Dunia Sawit</h2>
                <div class="w-24 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 max-w-5xl mx-auto">
                <!-- Vision Card -->
                <div class="bg-emerald-900/50 backdrop-blur-sm border border-emerald-800 rounded-3xl p-8 md:p-10 shadow-lg flex flex-col justify-between">
                    <div>
                        <div class="bg-amber-500 w-12 h-12 rounded-xl flex items-center justify-center text-emerald-950 mb-6 font-bold text-lg">V</div>
                        <h3 class="text-2xl font-bold mb-4">Visi Kami</h3>
                        <p class="text-emerald-100 text-sm leading-relaxed">
                            Menjadi portal rujukan informasi kelapa sawit independen nomor satu di Indonesia yang berkontribusi aktif dalam mewujudkan tata kelola perkebunan rakyat berkelanjutan serta kesejahteraan ekonomi bagi petani sawit swadaya.
                        </p>
                    </div>
                </div>

                <!-- Mission Card -->
                <div class="bg-emerald-900/50 backdrop-blur-sm border border-emerald-800 rounded-3xl p-8 md:p-10 shadow-lg flex flex-col justify-between">
                    <div>
                        <div class="bg-amber-500 w-12 h-12 rounded-xl flex items-center justify-center text-emerald-950 mb-6 font-bold text-lg">M</div>
                        <h3 class="text-2xl font-bold mb-4">Misi Kami</h3>
                        <ul class="space-y-4 text-emerald-100 text-sm leading-relaxed">
                            <li class="flex items-start">
                                <span class="text-amber-400 mr-2.5 font-bold">1.</span>
                                <span>Menyajikan data harga harian Tandan Buah Segar (TBS) secara transparan, berkala, dan akurat berdasarkan penetapan instansi resmi pemerintah.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-amber-400 mr-2.5 font-bold">2.</span>
                                <span>Menyebarluaskan panduan agronomi terbaik berbasis sains praktis guna mengoptimalkan efektivitas budidaya kebun.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-amber-400 mr-2.5 font-bold">3.</span>
                                <span>Mengabarkan berita-berita terpercaya, berimbang, dan objektif mengenai perkembangan industri sawit nasional.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-sm font-bold uppercase tracking-widest text-emerald-700">Nilai Perusahaan</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-2">Nilai-Nilai Utama Kami</h2>
                <div class="w-24 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
                <p class="text-gray-600 mt-4 leading-relaxed">
                    Kami memegang teguh prinsip-prinsip ini dalam setiap informasi dan konten edukasi yang kami sajikan untuk Anda.
                </p>
            </div>

            <!-- Values Grid -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 max-w-6xl mx-auto">
                <!-- Value 1: Integritas -->
                <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-md hover:shadow-lg transition-all duration-300">
                    <div class="bg-emerald-50 text-emerald-700 w-12 h-12 rounded-xl flex items-center justify-center font-bold mb-4">01</div>
                    <h4 class="font-extrabold text-emerald-950 text-lg mb-2">Integritas</h4>
                    <p class="text-gray-500 text-xs leading-relaxed">
                        Menyajikan data harga TBS dan berita secara apa adanya tanpa ada rekayasa, intervensi pihak luar, atau konflik kepentingan.
                    </p>
                </div>

                <!-- Value 2: Keberlanjutan -->
                <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-md hover:shadow-lg transition-all duration-300">
                    <div class="bg-emerald-50 text-emerald-700 w-12 h-12 rounded-xl flex items-center justify-center font-bold mb-4">02</div>
                    <h4 class="font-extrabold text-emerald-950 text-lg mb-2">Keberlanjutan</h4>
                    <p class="text-gray-500 text-xs leading-relaxed">
                        Mendukung pemeliharaan kebun kelapa sawit ramah lingkungan yang mematuhi sertifikasi berkelanjutan ISPO dan RSPO.
                    </p>
                </div>

                <!-- Value 3: Edukasi -->
                <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-md hover:shadow-lg transition-all duration-300">
                    <div class="bg-emerald-50 text-emerald-700 w-12 h-12 rounded-xl flex items-center justify-center font-bold mb-4">03</div>
                    <h4 class="font-extrabold text-emerald-950 text-lg mb-2">Edukasi</h4>
                    <p class="text-gray-500 text-xs leading-relaxed">
                        Menyebarluaskan wawasan agronomi teoretis maupun praktis agar mudah diterapkan oleh petani perkebunan sawit rakyat.
                    </p>
                </div>

                <!-- Value 4: Inovasi -->
                <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-md hover:shadow-lg transition-all duration-300">
                    <div class="bg-emerald-50 text-emerald-700 w-12 h-12 rounded-xl flex items-center justify-center font-bold mb-4">04</div>
                    <h4 class="font-extrabold text-emerald-950 text-lg mb-2">Inovasi</h4>
                    <p class="text-gray-500 text-xs leading-relaxed">
                        Memanfaatkan visualisasi data dan teknologi web terkini untuk mempermudah akses informasi data historis harga TBS.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
