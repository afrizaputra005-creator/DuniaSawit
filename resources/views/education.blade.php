@extends('layouts.app')

@section('title', 'Edukasi Budidaya - Dunia Sawit | Panduan Teknis Lengkap')

@section('content')
    <!-- Header Hero Section -->
    <section class="bg-gradient-to-br from-emerald-900 to-emerald-950 text-white py-16 relative overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-10">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                <defs>
                    <pattern id="edu-grid" width="40" height="40" patternUnits="userSpaceOnUse">
                        <path d="M 40 0 L 0 0 0 40" fill="none" stroke="white" stroke-width="1" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#edu-grid)" />
            </svg>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-amber-500/20 text-amber-300 border border-amber-500/30 mb-4">
                Pusat Pembelajaran Agronomi
            </span>
            <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight">Panduan Budidaya Kelapa Sawit</h1>
            <p class="mt-4 text-emerald-200 max-w-2xl mx-auto text-base md:text-lg">
                Panduan praktis dan ilmiah untuk membantu petani kelapa sawit meningkatkan produktivitas hasil panen serta menjaga keberlanjutan lingkungan.
            </p>
        </div>
    </section>

    <!-- Cards Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1: Pembibitan -->
                <div class="bg-white rounded-3xl border border-gray-100 overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <!-- Header image/icon banner -->
                        <div class="h-44 bg-emerald-900 relative flex items-center justify-center">
                            <div class="absolute inset-0 bg-emerald-800/85"></div>
                            <svg class="h-16 w-16 text-amber-400 relative z-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                            </svg>
                        </div>
                        <div class="p-6">
                            <span class="text-xs font-bold text-amber-600 uppercase tracking-wide">Langkah 1: Pembibitan</span>
                            <h3 class="text-xl font-bold text-emerald-950 mt-1 mb-4">Pembibitan Sawit Unggul</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                Kualitas bibit menyumbang hingga 50% keberhasilan produktivitas tanaman kelapa sawit di masa depan. Pastikan Anda memilih kecambah varietas unggul (seperti DxP PPKS, Topaz, atau Socfindo) yang bersertifikat resmi.
                            </p>
                            <ul class="space-y-2 text-xs text-gray-500">
                                <li class="flex items-center"><span class="text-emerald-600 mr-2">✓</span> Pre-Nursery (1-3 bulan) di polybag kecil</li>
                                <li class="flex items-center"><span class="text-emerald-600 mr-2">✓</span> Main-Nursery (3-12 bulan) dengan jarak tanam segitiga</li>
                                <li class="flex items-center"><span class="text-emerald-600 mr-2">✓</span> Penyiraman 2 kali sehari secara konsisten</li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-6 pt-0 border-t border-gray-55/50 mt-6">
                        <span class="inline-flex items-center text-sm font-semibold text-emerald-700 hover:text-amber-500 cursor-pointer transition-colors">
                            Pelajari Detail Teknis &rarr;
                        </span>
                    </div>
                </div>

                <!-- Card 2: Pemupukan -->
                <div class="bg-white rounded-3xl border border-gray-100 overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="h-44 bg-emerald-900 relative flex items-center justify-center">
                            <div class="absolute inset-0 bg-emerald-800/85"></div>
                            <svg class="h-16 w-16 text-amber-400 relative z-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                        </div>
                        <div class="p-6">
                            <span class="text-xs font-bold text-amber-600 uppercase tracking-wide">Langkah 2: Pemeliharaan</span>
                            <h3 class="text-xl font-bold text-emerald-950 mt-1 mb-4">Pemupukan Tepat 4T</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                Sawit membutuhkan pasokan hara makro (N, P, K, Mg, B) yang besar untuk membentuk buah secara optimal. Terapkan prinsip 4T (Tepat Jenis, Tepat Dosis, Tepat Waktu, dan Tepat Cara) untuk mencegah pemborosan pupuk.
                            </p>
                            <ul class="space-y-2 text-xs text-gray-500">
                                <li class="flex items-center"><span class="text-emerald-600 mr-2">✓</span> Tepat Jenis: Urea, Rock Phosphate, KCl, Kieserite</li>
                                <li class="flex items-center"><span class="text-emerald-600 mr-2">✓</span> Tepat Dosis: Disesuaikan dengan hasil analisis daun</li>
                                <li class="flex items-center"><span class="text-emerald-600 mr-2">✓</span> Tepat Cara: Ditaburkan merata pada piringan bersih</li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-6 pt-0 border-t border-gray-55/50 mt-6">
                        <span class="inline-flex items-center text-sm font-semibold text-emerald-700 hover:text-amber-500 cursor-pointer transition-colors">
                            Pelajari Detail Teknis &rarr;
                        </span>
                    </div>
                </div>

                <!-- Card 3: Pengendalian Hama -->
                <div class="bg-white rounded-3xl border border-gray-100 overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="h-44 bg-emerald-900 relative flex items-center justify-center">
                            <div class="absolute inset-0 bg-emerald-800/85"></div>
                            <svg class="h-16 w-16 text-amber-400 relative z-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <div class="p-6">
                            <span class="text-xs font-bold text-amber-600 uppercase tracking-wide">Langkah 3: Perlindungan</span>
                            <h3 class="text-xl font-bold text-emerald-950 mt-1 mb-4">Pengendalian Hama & Penyakit</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                Serangan hama (seperti ulat api, ulat kantong, kumbang tanduk) dan penyakit (seperti busuk pangkal batang Ganoderma) dapat menurunkan hasil produksi TBS secara drastis hingga kematian pohon.
                            </p>
                            <ul class="space-y-2 text-xs text-gray-500">
                                <li class="flex items-center"><span class="text-emerald-600 mr-2">✓</span> Lepaskan Burung Hantu (Tyto alba) untuk hama tikus</li>
                                <li class="flex items-center"><span class="text-emerald-600 mr-2">✓</span> Tanam Turnera Subulata untuk ulat api</li>
                                <li class="flex items-center"><span class="text-emerald-600 mr-2">✓</span> Sanitasi & pembongkaran pohon terserang Ganoderma</li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-6 pt-0 border-t border-gray-55/50 mt-6">
                        <span class="inline-flex items-center text-sm font-semibold text-emerald-700 hover:text-amber-500 cursor-pointer transition-colors">
                            Pelajari Detail Teknis &rarr;
                        </span>
                    </div>
                </div>
            </div>

            <!-- Deep Dive Info Box -->
            <div class="mt-16 bg-white rounded-3xl p-8 border border-gray-100 shadow-lg max-w-4xl mx-auto">
                <h3 class="text-2xl font-bold text-emerald-950 mb-6 flex items-center">
                    <span class="w-8 h-8 rounded-lg bg-amber-500 text-emerald-950 flex items-center justify-center mr-3 text-base font-extrabold">💡</span>
                    Prinsip Keberlanjutan (Sustainability)
                </h3>
                <p class="text-gray-650 text-sm leading-relaxed mb-4">
                    Budidaya kelapa sawit modern tidak hanya fokus pada kuantitas tonase TBS yang tinggi, melainkan juga harus mematuhi regulasi lingkungan demi keberlanjutan ekosistem.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                    <div class="bg-gray-50 p-4.5 rounded-2xl border border-gray-100">
                        <h4 class="font-bold text-sm text-emerald-900 mb-2">1. Pengelolaan Limbah Organik</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">
                            Manfaatkan tandan kosong sawit (tangkos) sebagai mulsa penutup tanah dan sumber pupuk organik K kalium alami di kebun Anda.
                        </p>
                    </div>
                    <div class="bg-gray-50 p-4.5 rounded-2xl border border-gray-100">
                        <h4 class="font-bold text-sm text-emerald-900 mb-2">2. Konservasi Daerah Aliran Sungai (DAS)</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">
                            Jangan melakukan pemupukan atau pembersihan gulma menggunakan herbisida kimia di sempadan sungai untuk mencegah pencemaran air.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
