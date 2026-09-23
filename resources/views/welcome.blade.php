<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jasa Pembuatan Website Profesional | Nuansa Web</title>
    
    <!-- Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Menggunakan Tailwind CDN agar desain LANGSUNG muncul tanpa perlu npm run dev -->
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
                <a href="#layanan" class="text-sm font-bold text-slate-500 hover:text-brand-600 transition">Layanan Kami</a>
                <a href="#portofolio" class="text-sm font-bold text-slate-500 hover:text-brand-600 transition">Portofolio</a>
            </nav>
            <div class="hidden md:flex">
                <a href="https://wa.me/6281234567890" target="_blank" class="px-6 py-2.5 bg-brand-950 text-white text-sm font-bold rounded-full hover:bg-brand-600 shadow-xl hover:shadow-brand-500/20 transition-all transform hover:-translate-y-0.5">
                    Konsultasi Gratis
                </a>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section (Gradient Dark Mode) -->
        <section id="beranda" class="relative pt-40 pb-24 lg:pt-48 lg:pb-32 bg-brand-950 overflow-hidden">
            <!-- Dekorasi Latar Belakang -->
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
                    <a href="https://wa.me/6281234567890" class="px-8 py-4 text-base bg-brand-600 text-white font-bold rounded-full hover:bg-brand-500 shadow-lg shadow-brand-600/40 transition-all transform hover:-translate-y-1">
                        Mulai Proyek Anda
                    </a>
                    <a href="#layanan" class="px-8 py-4 text-base bg-white/5 text-white font-semibold rounded-full border border-white/10 hover:bg-white/10 backdrop-blur-sm transition-all">
                        Pelajari Layanan
                    </a>
                </div>
            </div>
        </section>

        <!-- Layanan Section -->
        <section id="layanan" class="py-24 bg-slate-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-20">
                    <h2 class="text-brand-600 font-bold tracking-wide uppercase text-sm mb-3">Layanan Spesialis Kami</h2>
                    <h3 class="text-3xl md:text-4xl font-extrabold text-brand-950">Solusi Digital Sesuai Skala Bisnis Anda</h3>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Kartu Layanan 1 -->
                    <div class="bg-white p-10 rounded-3xl shadow-xl shadow-slate-200/50 border border-slate-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 group">
                        <div class="w-16 h-16 bg-brand-50 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-brand-600 transition-colors">
                            <svg class="w-8 h-8 text-brand-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        </div>
                        <h4 class="text-2xl font-bold text-brand-950 mb-4">Company Profile</h4>
                        <p class="text-slate-500 leading-relaxed mb-6">Bangun kredibilitas dan kepercayaan klien dengan profil perusahaan digital yang profesional dan elegan.</p>
                        <ul class="space-y-3 text-sm font-medium text-slate-700">
                            <li class="flex items-center"><svg class="w-5 h-5 text-emerald-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Desain Responsif & Premium</li>
                            <li class="flex items-center"><svg class="w-5 h-5 text-emerald-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Optimasi SEO Dasar</li>
                        </ul>
                    </div>
                    
                    <!-- Kartu Layanan 2 (Sorotan) -->
                    <div class="bg-brand-950 p-10 rounded-3xl shadow-2xl shadow-brand-900/40 border border-brand-800 hover:-translate-y-2 transition-all duration-300 relative overflow-hidden group">
                        <div class="absolute top-0 right-0 bg-gradient-to-r from-blue-500 to-brand-600 text-white text-xs font-bold px-4 py-2 rounded-bl-2xl">PALING DIMINATI</div>
                        <div class="w-16 h-16 bg-white/10 rounded-2xl flex items-center justify-center mb-8 backdrop-blur-sm">
                            <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </div>
                        <h4 class="text-2xl font-bold text-white mb-4">Toko Online</h4>
                        <p class="text-slate-400 leading-relaxed mb-6">Sistem E-Commerce otomatis untuk menjual produk Anda 24/7 dengan aman dan cepat.</p>
                        <ul class="space-y-3 text-sm font-medium text-slate-300">
                            <li class="flex items-center"><svg class="w-5 h-5 text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Payment Gateway Otomatis</li>
                            <li class="flex items-center"><svg class="w-5 h-5 text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Manajemen Produk Interaktif</li>
                        </ul>
                    </div>
                    
                    <!-- Kartu Layanan 3 -->
                    <div class="bg-white p-10 rounded-3xl shadow-xl shadow-slate-200/50 border border-slate-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 group">
                        <div class="w-16 h-16 bg-brand-50 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-brand-600 transition-colors">
                            <svg class="w-8 h-8 text-brand-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                        </div>
                        <h4 class="text-2xl font-bold text-brand-950 mb-4">Custom Web App</h4>
                        <p class="text-slate-500 leading-relaxed mb-6">Sistem informasi manajemen atau aplikasi web khusus untuk mendigitalisasi operasional bisnis Anda.</p>
                        <ul class="space-y-3 text-sm font-medium text-slate-700">
                            <li class="flex items-center"><svg class="w-5 h-5 text-emerald-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Dashboard Analitik Lengkap</li>
                            <li class="flex items-center"><svg class="w-5 h-5 text-emerald-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Database Terpusat & Aman</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer Super Bersih -->
    <footer class="bg-white py-12 border-t border-slate-200 text-center">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-2xl font-extrabold text-brand-950 mb-4">Nuansa<span class="text-brand-600">Web</span></h2>
            <p class="text-slate-500 text-sm max-w-md mx-auto mb-8">Partner digital terpercaya untuk pengembangan bisnis di era modern. Berbasis di Denpasar, Bali.</p>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wider">&copy; {{ date('Y') }} Nuansa Web. Hak Cipta Dilindungi.</p>
        </div>
    </footer>
</body>
</html>