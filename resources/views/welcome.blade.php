<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jasa Pembuatan Website Profesional & E-Commerce | Nuansa Web</title>
    
    <!-- Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            500: '#3b82f6',
                            600: '#2563eb',
                            900: '#1e3a8a',
                            950: '#0f172a',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans antialiased text-slate-600 bg-slate-50">

    <!-- Navbar (Glassmorphism) -->
    <header class="fixed w-full z-50 bg-white/80 backdrop-blur-md border-b border-slate-200/50 shadow-sm transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-20">
            <div class="flex items-center gap-2">
                <div class="w-10 h-10 bg-gradient-to-br from-brand-500 to-brand-600 rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg shadow-brand-500/30">N</div>
                <span class="text-2xl font-extrabold text-brand-950 tracking-tight">Nuansa<span class="text-brand-600">Web</span></span>
            </div>
            <nav class="hidden md:flex space-x-10">
                <a href="#beranda" class="text-sm font-bold text-slate-800 hover:text-brand-600 transition">Beranda</a>
                <a href="#layanan" class="text-sm font-bold text-slate-500 hover:text-brand-600 transition">Layanan</a>
                <a href="#harga" class="text-sm font-bold text-slate-500 hover:text-brand-600 transition">Paket & Harga</a>
            </nav>
            <div class="hidden md:flex">
                <a href="https://wa.me/6281234567890" target="_blank" class="px-6 py-2.5 bg-brand-950 text-white text-sm font-bold rounded-full hover:bg-brand-600 shadow-xl hover:shadow-brand-500/20 transition-all transform hover:-translate-y-0.5">
                    Konsultasi Gratis
                </a>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section id="beranda" class="relative pt-40 pb-24 lg:pt-48 lg:pb-32 bg-brand-950 overflow-hidden">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[1000px] h-[500px] bg-brand-600/30 rounded-full blur-[120px] opacity-50"></div>
            
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white z-10">
                <span class="inline-flex items-center gap-2 py-1.5 px-4 rounded-full bg-white/10 border border-white/20 text-brand-100 font-semibold text-xs tracking-wide uppercase mb-8 backdrop-blur-sm">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    Solusi Digital B2B & UMKM
                </span>
                
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tight leading-tight mb-8">
                    Tingkatkan Bisnis Anda <br class="hidden md:block"/> dengan <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-emerald-400">Website Premium.</span>
                </h1>
                
                <p class="mt-4 text-lg md:text-xl text-slate-300 max-w-2xl mx-auto mb-12 leading-relaxed">
                    Kami merancang website modern yang cepat, elegan, dan dioptimasi penuh untuk SEO. Jadikan pengunjung website Anda sebagai pelanggan setia.
                </p>
                
                <div class="flex flex-col sm:flex-row justify-center gap-5">
                    <a href="#harga" class="px-8 py-4 text-base bg-brand-600 text-white font-bold rounded-full hover:bg-brand-500 shadow-lg shadow-brand-600/40 transition-all transform hover:-translate-y-1">
                        Lihat Paket Kami
                    </a>
                    <a href="https://wa.me/6281234567890" class="px-8 py-4 text-base bg-white/5 text-white font-semibold rounded-full border border-white/10 hover:bg-white/10 backdrop-blur-sm transition-all">
                        Hubungi Tim Teknis
                    </a>
                </div>
            </div>
        </section>

        <!-- Layanan Section -->
        <section id="layanan" class="py-24 bg-slate-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-20">
                    <h2 class="text-brand-600 font-bold tracking-wide uppercase text-sm mb-3">Layanan Spesialis Kami</h2>
                    <h3 class="text-3xl md:text-4xl font-extrabold text-brand-950">Fokus Pada Skala Bisnis Anda</h3>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Kartu Layanan 1 -->
                    <div class="bg-white p-10 rounded-3xl shadow-xl shadow-slate-200/50 border border-slate-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 group">
                        <div class="w-16 h-16 bg-brand-50 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-brand-600 transition-colors">
                            <svg class="w-8 h-8 text-brand-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        </div>
                        <h4 class="text-2xl font-bold text-brand-950 mb-4">Company Profile</h4>
                        <p class="text-slate-500 leading-relaxed mb-6">Bangun kredibilitas dan kepercayaan klien dengan profil perusahaan digital yang profesional dan elegan.</p>
                    </div>
                    
                    <!-- Kartu Layanan 2 -->
                    <div class="bg-white p-10 rounded-3xl shadow-xl shadow-slate-200/50 border border-slate-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 group">
                        <div class="w-16 h-16 bg-brand-50 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-brand-600 transition-colors">
                            <svg class="w-8 h-8 text-brand-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </div>
                        <h4 class="text-2xl font-bold text-brand-950 mb-4">Toko Online</h4>
                        <p class="text-slate-500 leading-relaxed mb-6">Sistem E-Commerce otomatis untuk menjual produk Anda 24/7 dengan sistem pembayaran yang aman dan cepat.</p>
                    </div>
                    
                    <!-- Kartu Layanan 3 -->
                    <div class="bg-white p-10 rounded-3xl shadow-xl shadow-slate-200/50 border border-slate-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 group">
                        <div class="w-16 h-16 bg-brand-50 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-brand-600 transition-colors">
                            <svg class="w-8 h-8 text-brand-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                        </div>
                        <h4 class="text-2xl font-bold text-brand-950 mb-4">Custom Web App</h4>
                        <p class="text-slate-500 leading-relaxed mb-6">Sistem informasi manajemen berbasis web khusus untuk mendigitalisasi operasional bisnis Anda dengan aman.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="harga" class="py-24 bg-white border-t border-slate-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-20">
                    <h2 class="text-brand-600 font-bold tracking-wide uppercase text-sm mb-3">Transparan & Terjangkau</h2>
                    <h3 class="text-3xl md:text-4xl font-extrabold text-brand-950">Pilih Paket Sesuai Kebutuhan Anda</h3>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-center">
                    <!-- Basic: Website Bisnis -->
                    <div class="bg-slate-50 rounded-3xl p-8 border border-slate-200 hover:border-brand-300 hover:shadow-xl transition-all duration-300">
                        <h4 class="text-xl font-bold text-brand-950 mb-2">Company Profile</h4>
                        <p class="text-slate-500 text-sm mb-6">Cocok untuk profil perusahaan, portfolio, atau landing page jasa.</p>
                        <div class="mb-8">
                            <span class="text-3xl font-extrabold text-brand-950">Rp 1.499<span class="text-lg text-slate-500 font-normal">.000</span></span>
                        </div>
                        <ul class="space-y-4 mb-8 text-sm text-slate-600 font-medium">
                            <li class="flex items-start"><svg class="w-5 h-5 text-emerald-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Desain Premium & Responsif Mobile</li>
                            <li class="flex items-start"><svg class="w-5 h-5 text-emerald-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Maksimal 5 Halaman Konten</li>
                            <li class="flex items-start"><svg class="w-5 h-5 text-emerald-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Optimasi SEO On-Page Dasar</li>
                            <li class="flex items-start"><svg class="w-5 h-5 text-emerald-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Integrasi Tombol WhatsApp</li>
                            <li class="flex items-start"><svg class="w-5 h-5 text-emerald-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Gratis Domain & Hosting (1 Tahun)</li>
                        </ul>
                        <a href="https://wa.me/6281234567890?text=Halo%20Nuansa%20Web,%20saya%20tertarik%20dengan%20Paket%20Company%20Profile" class="block w-full py-3.5 px-4 bg-white text-brand-600 border-2 border-brand-100 font-bold text-center rounded-xl hover:bg-brand-50 hover:border-brand-200 transition-colors">
                            Pilih Paket
                        </a>
                    </div>

                    <!-- Pro: Toko Online (Highlight) -->
                    <div class="bg-brand-950 rounded-3xl p-8 border border-brand-800 shadow-2xl shadow-brand-900/40 relative transform lg:-translate-y-4">
                        <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-gradient-to-r from-blue-500 to-emerald-400 text-white text-xs font-bold px-4 py-1.5 rounded-full shadow-lg">
                            PALING DIMINATI
                        </div>
                        <h4 class="text-xl font-bold text-white mb-2">E-Commerce / Toko Online</h4>
                        <p class="text-slate-400 text-sm mb-6">Sistem terpusat untuk berjualan secara mandiri dan otomatis.</p>
                        <div class="mb-8">
                            <span class="text-3xl font-extrabold text-white">Rp 3.499<span class="text-lg text-slate-400 font-normal">.000</span></span>
                        </div>
                        <ul class="space-y-4 mb-8 text-sm text-slate-300 font-medium">
                            <li class="flex items-start"><svg class="w-5 h-5 text-blue-400 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Semua Fitur Company Profile</li>
                            <li class="flex items-start"><svg class="w-5 h-5 text-blue-400 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Katalog Produk & Keranjang Belanja</li>
                            <li class="flex items-start"><svg class="w-5 h-5 text-blue-400 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Integrasi Payment Gateway (Otomatis)</li>
                            <li class="flex items-start"><svg class="w-5 h-5 text-blue-400 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Perhitungan Ongkos Kirim Dinamis</li>
                            <li class="flex items-start"><svg class="w-5 h-5 text-blue-400 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Dashboard Manajemen Admin Lengkap</li>
                        </ul>
                        <a href="https://wa.me/6281234567890?text=Halo%20Nuansa%20Web,%20saya%20tertarik%20dengan%20Paket%20E-Commerce" class="block w-full py-3.5 px-4 bg-brand-600 text-white font-bold text-center rounded-xl hover:bg-brand-500 shadow-lg shadow-brand-600/30 transition-all">
                            Pilih Paket Pro
                        </a>
                    </div>

                    <!-- Custom: Web App -->
                    <div class="bg-slate-50 rounded-3xl p-8 border border-slate-200 hover:border-brand-300 hover:shadow-xl transition-all duration-300">
                        <h4 class="text-xl font-bold text-brand-950 mb-2">Custom Web Application</h4>
                        <p class="text-slate-500 text-sm mb-6">Sistem booking, web transportasi, atau aplikasi operasional spesifik.</p>
                        <div class="mb-8">
                            <span class="text-sm text-slate-500 font-semibold uppercase tracking-wider block mb-1">Mulai Dari</span>
                            <span class="text-3xl font-extrabold text-brand-950">Rp 5.999<span class="text-lg text-slate-500 font-normal">.000</span></span>
                        </div>
                        <ul class="space-y-4 mb-8 text-sm text-slate-600 font-medium">
                            <li class="flex items-start"><svg class="w-5 h-5 text-emerald-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Arsitektur Database Khusus (MySQL)</li>
                            <li class="flex items-start"><svg class="w-5 h-5 text-emerald-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Integrasi API Pihak Ketiga</li>
                            <li class="flex items-start"><svg class="w-5 h-5 text-emerald-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Keamanan Tingkat Lanjut (Laravel)</li>
                            <li class="flex items-start"><svg class="w-5 h-5 text-emerald-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Laporan & Analitik Interaktif</li>
                            <li class="flex items-start"><svg class="w-5 h-5 text-emerald-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Dedicated Technical Support</li>
                        </ul>
                        <a href="https://wa.me/6281234567890?text=Halo%20Nuansa%20Web,%20saya%20ingin%20konsultasi%20untuk%20Custom%20Web%20App" class="block w-full py-3.5 px-4 bg-white text-brand-600 border-2 border-brand-100 font-bold text-center rounded-xl hover:bg-brand-50 hover:border-brand-200 transition-colors">
                            Konsultasi Gratis
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Professional Mega Footer -->
    <footer class="bg-brand-950 pt-20 pb-10 border-t border-brand-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                <!-- Branding -->
                <div class="lg:col-span-1">
                    <div class="flex items-center gap-2 mb-6">
                        <div class="w-8 h-8 bg-gradient-to-br from-brand-500 to-brand-600 rounded-lg flex items-center justify-center text-white font-bold text-lg shadow-md shadow-brand-500/20">N</div>
                        <span class="text-2xl font-extrabold text-white tracking-tight">Nuansa<span class="text-brand-500">Web</span></span>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6">
                        Partner teknologi andalan untuk mengakselerasi digitalisasi bisnis Anda. Kami merancang website premium yang berorientasi pada kecepatan, keamanan, dan konversi.
                    </p>
                    <!-- Social Icons -->
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-slate-400 hover:bg-brand-600 hover:text-white transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-slate-400 hover:bg-brand-600 hover:text-white transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Links 1 -->
                <div>
                    <h4 class="text-white font-bold mb-6 tracking-wide text-sm uppercase">Menu Utama</h4>
                    <ul class="space-y-3">
                        <li><a href="#beranda" class="text-sm text-slate-400 hover:text-brand-400 transition-colors">Beranda</a></li>
                        <li><a href="#layanan" class="text-sm text-slate-400 hover:text-brand-400 transition-colors">Layanan Kami</a></li>
                        <li><a href="#harga" class="text-sm text-slate-400 hover:text-brand-400 transition-colors">Paket & Harga</a></li>
                        <li><a href="#" class="text-sm text-slate-400 hover:text-brand-400 transition-colors">Portofolio</a></li>
                    </ul>
                </div>

                <!-- Links 2 -->
                <div>
                    <h4 class="text-white font-bold mb-6 tracking-wide text-sm uppercase">Spesialisasi</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-sm text-slate-400 hover:text-brand-400 transition-colors">Pembuatan Company Profile</a></li>
                        <li><a href="#" class="text-sm text-slate-400 hover:text-brand-400 transition-colors">Pengembangan E-Commerce</a></li>
                        <li><a href="#" class="text-sm text-slate-400 hover:text-brand-400 transition-colors">Custom Web / Booking App</a></li>
                        <li><a href="#" class="text-sm text-slate-400 hover:text-brand-400 transition-colors">Maintenance & SEO Optimasi</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-white font-bold mb-6 tracking-wide text-sm uppercase">Hubungi Kami</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-brand-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span class="text-sm text-slate-400 leading-relaxed">Denpasar, Bali<br>Indonesia</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-brand-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <a href="mailto:hello@nuansaweb.com" class="text-sm text-slate-400 hover:text-brand-400 transition-colors">hello@nuansaweb.com</a>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-brand-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <a href="https://wa.me/6281234567890" class="text-sm text-slate-400 hover:text-brand-400 transition-colors">+62 812-3456-7890</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="pt-8 border-t border-brand-900/50 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-slate-500 text-xs font-medium">&copy; {{ date('Y') }} Nuansa Web. Hak Cipta Dilindungi.</p>
                <div class="flex space-x-6 text-xs text-slate-500 font-medium">
                    <a href="#" class="hover:text-slate-300 transition-colors">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-slate-300 transition-colors">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>