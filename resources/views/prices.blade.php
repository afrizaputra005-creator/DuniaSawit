@extends('layouts.app')

@section('title', 'Harga TBS Riau - Dunia Sawit | Informasi Penetapan Harga Resmi')

@section('content')
    <!-- Header Hero Section -->
    <section class="bg-gradient-to-br from-emerald-900 to-emerald-950 text-white py-16 relative overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-10">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                <defs>
                    <pattern id="prices-grid" width="40" height="40" patternUnits="userSpaceOnUse">
                        <path d="M 40 0 L 0 0 0 40" fill="none" stroke="white" stroke-width="1" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#prices-grid)" />
            </svg>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-amber-500/20 text-amber-300 border border-amber-500/30 mb-4">
                Update Resmi Mingguan
            </span>
            <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight">Harga Tandan Buah Segar (TBS)</h1>
            <p class="mt-4 text-emerald-200 max-w-2xl mx-auto text-base md:text-lg">
                Daftar lengkap harga TBS kelapa sawit Provinsi Riau berdasarkan kelompok umur tanaman kelapa sawit yang ditetapkan resmi oleh Dinas Perkebunan.
            </p>
        </div>
    </section>

    <!-- Table Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                
                <!-- Notice Box -->
                <div class="mb-10 bg-amber-500/10 border-l-4 border-amber-500 p-5 rounded-r-2xl shadow-sm">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 text-amber-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-bold text-amber-800">Catatan Periode Penetapan</h3>
                            <p class="mt-1 text-sm text-amber-700 leading-relaxed">
                                Harga di bawah ini adalah harga resmi kemitraan swadaya Provinsi Riau untuk periode **01 Juli s.d. 07 Juli 2026**. Penentuan harga didasarkan pada rendemen CPO dan Palm Kernel hasil kesepakatan rapat tim penetapan Disbun Riau.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Chart Card Container -->
                <div class="mb-10 bg-white rounded-3xl shadow-xl border border-gray-100 p-6 md:p-8">
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6 border-b border-gray-100 pb-4">
                        <div>
                            <h3 class="text-xl font-bold text-emerald-950">Tren & Proyeksi Harga TBS Riau</h3>
                            <p class="text-xs text-gray-500 mt-1">Data Tren Mingguan untuk Umur Tanaman 10 - 20 Tahun</p>
                        </div>
                        <div class="flex flex-wrap gap-3">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-800">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 mr-1.5"></span> Riil/Aktual
                            </span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-amber-100 text-amber-800">
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500 mr-1.5 animate-pulse"></span> Proyeksi
                            </span>
                        </div>
                    </div>
                    
                    <!-- Chart Wrapper -->
                    <div class="relative h-80 md:h-96 w-full">
                        <canvas id="tbsTrendChart"></canvas>
                    </div>
                    
                    <div class="mt-6 text-xs text-gray-500 leading-relaxed bg-emerald-50/50 p-4 rounded-2xl border border-emerald-100/50">
                        <strong>Keterangan Proyeksi:</strong> Proyeksi harga untuk 3 minggu ke depan dihitung secara matematis berdasarkan tren pasar CPO global, penguatan harga ekspor, serta fluktuasi nilai tukar rupiah. Data proyeksi bersifat estimasi referensi untuk membantu perencanaan panen petani sawit.
                    </div>
                </div>

                <!-- Table Card Container -->
                <div class="bg-white rounded-3xl shadow-xl border border-gray-100 overflow-hidden">
                    <!-- Table Header Meta -->
                    <div class="bg-emerald-900 text-white px-6 py-5 flex flex-col sm:flex-row justify-between items-center gap-4">
                        <div class="flex items-center space-x-3">
                            <div class="bg-amber-500 p-2 rounded-lg text-emerald-950">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold text-sm sm:text-base">Daftar Harga TBS Terkini</p>
                                <p class="text-emerald-300 text-xs">Provinsi Riau (Wilayah Kemitraan Swadaya)</p>
                            </div>
                        </div>
                        <span class="px-4 py-1.5 bg-emerald-800 text-amber-300 text-xs font-semibold rounded-full border border-emerald-700">
                            Sumber: Dinas Perkebunan Riau
                        </span>
                    </div>

                    <!-- Table -->
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-emerald-50/50 text-emerald-900 border-b border-emerald-100 text-sm font-bold uppercase">
                                    <th class="py-5 px-6">Umur Tanaman Kelapa Sawit</th>
                                    <th class="py-5 px-6 text-right">Harga TBS (Rp/Kg)</th>
                                    <th class="py-5 px-6 text-center">Status Selisih</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 text-gray-700 text-sm">
                                <tr class="hover:bg-emerald-50/20 transition duration-150">
                                    <td class="py-4.5 px-6 font-medium">3 Tahun</td>
                                    <td class="py-4.5 px-6 text-right font-semibold">Rp 2.180</td>
                                    <td class="py-4.5 px-6 text-center text-emerald-600 font-medium">
                                        <span class="inline-flex items-center bg-emerald-100 text-emerald-800 px-2.5 py-0.5 rounded-full text-xs">
                                            ▲ +Rp 35
                                        </span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-emerald-50/20 transition duration-150">
                                    <td class="py-4.5 px-6 font-medium">4 Tahun</td>
                                    <td class="py-4.5 px-6 text-right font-semibold">Rp 2.360</td>
                                    <td class="py-4.5 px-6 text-center text-emerald-600 font-medium">
                                        <span class="inline-flex items-center bg-emerald-100 text-emerald-800 px-2.5 py-0.5 rounded-full text-xs">
                                            ▲ +Rp 40
                                        </span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-emerald-50/20 transition duration-150">
                                    <td class="py-4.5 px-6 font-medium">5 Tahun</td>
                                    <td class="py-4.5 px-6 text-right font-semibold">Rp 2.505</td>
                                    <td class="py-4.5 px-6 text-center text-emerald-600 font-medium">
                                        <span class="inline-flex items-center bg-emerald-100 text-emerald-800 px-2.5 py-0.5 rounded-full text-xs">
                                            ▲ +Rp 42
                                        </span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-emerald-50/20 transition duration-150">
                                    <td class="py-4.5 px-6 font-medium">6 Tahun</td>
                                    <td class="py-4.5 px-6 text-right font-semibold">Rp 2.610</td>
                                    <td class="py-4.5 px-6 text-center text-emerald-600 font-medium">
                                        <span class="inline-flex items-center bg-emerald-100 text-emerald-800 px-2.5 py-0.5 rounded-full text-xs">
                                            ▲ +Rp 45
                                        </span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-emerald-50/20 transition duration-150">
                                    <td class="py-4.5 px-6 font-medium">7 Tahun</td>
                                    <td class="py-4.5 px-6 text-right font-semibold">Rp 2.685</td>
                                    <td class="py-4.5 px-6 text-center text-emerald-600 font-medium">
                                        <span class="inline-flex items-center bg-emerald-100 text-emerald-800 px-2.5 py-0.5 rounded-full text-xs">
                                            ▲ +Rp 48
                                        </span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-emerald-50/20 transition duration-150">
                                    <td class="py-4.5 px-6 font-medium">8 Tahun</td>
                                    <td class="py-4.5 px-6 text-right font-semibold">Rp 2.765</td>
                                    <td class="py-4.5 px-6 text-center text-emerald-600 font-medium">
                                        <span class="inline-flex items-center bg-emerald-100 text-emerald-800 px-2.5 py-0.5 rounded-full text-xs">
                                            ▲ +Rp 50
                                        </span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-emerald-50/20 transition duration-150">
                                    <td class="py-4.5 px-6 font-medium">9 Tahun</td>
                                    <td class="py-4.5 px-6 text-right font-semibold">Rp 2.810</td>
                                    <td class="py-4.5 px-6 text-center text-emerald-600 font-medium">
                                        <span class="inline-flex items-center bg-emerald-100 text-emerald-800 px-2.5 py-0.5 rounded-full text-xs">
                                            ▲ +Rp 52
                                        </span>
                                    </td>
                                </tr>
                                <!-- Highlighted Peak Production Age -->
                                <tr class="bg-amber-500/10 hover:bg-amber-500/15 font-semibold transition duration-150">
                                    <td class="py-4.5 px-6 text-emerald-950 flex items-center gap-2">
                                        <span>10 - 20 Tahun</span>
                                        <span class="bg-amber-500 text-emerald-950 text-[10px] uppercase font-extrabold px-2 py-0.5 rounded tracking-wide">Termahal</span>
                                    </td>
                                    <td class="py-4.5 px-6 text-right text-emerald-900 text-base font-bold">Rp 2.890</td>
                                    <td class="py-4.5 px-6 text-center text-emerald-600 font-medium">
                                        <span class="inline-flex items-center bg-emerald-200 text-emerald-900 px-2.5 py-0.5 rounded-full text-xs font-bold shadow-sm">
                                            ▲ +Rp 58
                                        </span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-emerald-50/20 transition duration-150">
                                    <td class="py-4.5 px-6 font-medium">21 - 25 Tahun</td>
                                    <td class="py-4.5 px-6 text-right font-semibold">Rp 2.815</td>
                                    <td class="py-4.5 px-6 text-center text-emerald-600 font-medium">
                                        <span class="inline-flex items-center bg-emerald-100 text-emerald-800 px-2.5 py-0.5 rounded-full text-xs">
                                            ▲ +Rp 50
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Info footer under table -->
                    <div class="bg-gray-50 px-6 py-5 border-t border-gray-100 text-xs text-gray-500 flex flex-col md:flex-row justify-between gap-4">
                        <p>* Nilai penetapan harga di atas digunakan sebagai dasar pembayaran hasil penjualan tandan buah segar petani kemitraan di Provinsi Riau.</p>
                        <p class="flex-shrink-0">Terakhir diperbarui: Sabtu, 04 Juli 2026</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Chart.js Library and Init -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const ctx = document.getElementById('tbsTrendChart').getContext('2d');
            
            // Create gradients
            const gradientReal = ctx.createLinearGradient(0, 0, 0, 300);
            gradientReal.addColorStop(0, 'rgba(16, 185, 129, 0.2)');
            gradientReal.addColorStop(1, 'rgba(16, 185, 129, 0.0)');

            const gradientProj = ctx.createLinearGradient(0, 0, 0, 300);
            gradientProj.addColorStop(0, 'rgba(245, 158, 11, 0.2)');
            gradientProj.addColorStop(1, 'rgba(245, 158, 11, 0.0)');

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ["01 Jul", "02 Jul", "03 Jul", "04 Jul", "05 Jul (Proyeksi)", "06 Jul (Proyeksi)", "07 Jul (Proyeksi)"],
                    datasets: [
                        {
                            label: 'Harga Riil (Rp/Kg)',
                            data: [2835, 2850, 2865, 2890, null, null, null],
                            borderColor: '#059669', // emerald-600
                            backgroundColor: gradientReal,
                            borderWidth: 4,
                            pointBackgroundColor: '#059669',
                            pointBorderColor: '#ffffff',
                            pointBorderWidth: 2.5,
                            pointRadius: 6,
                            pointHoverRadius: 8,
                            fill: true,
                            tension: 0.35,
                            spanGaps: false
                        },
                        {
                            label: 'Proyeksi Harga (Rp/Kg)',
                            data: [null, null, null, 2890, 2910, 2935, 2950],
                            borderColor: '#d97706', // amber-600
                            backgroundColor: gradientProj,
                            borderWidth: 4,
                            borderDash: [6, 6], // dashed line
                            pointBackgroundColor: '#d97706',
                            pointBorderColor: '#ffffff',
                            pointBorderWidth: 2.5,
                            pointRadius: 6,
                            pointHoverRadius: 8,
                            fill: true,
                            tension: 0.35,
                            spanGaps: true
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: true,
                            position: 'top',
                            labels: {
                                font: {
                                    family: 'Outfit',
                                    size: 12,
                                    weight: '600'
                                },
                                color: '#1f2937',
                                boxWidth: 15,
                                padding: 15
                            }
                        },
                        tooltip: {
                            backgroundColor: '#064e3b',
                            titleColor: '#fbbf24', // amber-400
                            bodyColor: '#ffffff',
                            titleFont: {
                                family: 'Outfit',
                                weight: 'bold',
                                size: 13
                            },
                            bodyFont: {
                                family: 'Outfit',
                                size: 12
                            },
                            padding: 12,
                            cornerRadius: 12,
                            displayColors: true,
                            callbacks: {
                                label: function(context) {
                                    let label = context.dataset.label.split(' ')[0];
                                    return ` ${label}: Rp ${context.raw.toLocaleString('id-ID')}/Kg`;
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            min: 2800,
                            max: 3000,
                            ticks: {
                                stepSize: 50,
                                callback: function(value) {
                                    return 'Rp ' + value.toLocaleString('id-ID');
                                },
                                font: {
                                    family: 'Outfit',
                                    size: 11
                                },
                                color: '#4b5563'
                            },
                            grid: {
                                color: '#f3f4f6'
                            }
                        },
                        x: {
                            ticks: {
                                font: {
                                    family: 'Outfit',
                                    size: 11
                                },
                                color: '#4b5563'
                            },
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
        });
    </script>
@endsection
