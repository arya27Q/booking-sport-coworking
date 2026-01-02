<!DOCTYPE html>
<html lang="en" x-data="{ sidebarOpen: false }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Booking - Professional</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style> 
        body { font-family: 'Inter', sans-serif; -webkit-font-smoothing: antialiased; }
        .sidebar-gradient { background: linear-gradient(180deg, #7C3AED 0%, #6D28D9 100%); }
        .wallet-card { background: linear-gradient(135deg, #9061F9 0%, #7C3AED 100%); }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-[#F8FAFC]">

    <div class="flex min-h-screen">
        
        <div x-show="sidebarOpen" 
             x-transition:enter="transition opacity-ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition opacity-ease-in duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click="sidebarOpen = false"
             class="fixed inset-0 bg-black/50 backdrop-blur-sm z-[55] md:hidden" x-cloak>
        </div>

        <aside 
            :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full md:translate-x-0'"
            class="sidebar-gradient fixed md:sticky top-0 left-0 w-72 text-white flex flex-col h-screen shadow-2xl z-[60] transition-transform duration-300 ease-in-out">
            
            <div class="p-6 flex-grow overflow-y-auto">
                <div class="flex items-center justify-between mb-8">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 rounded-full bg-white/20 border border-white/30 flex items-center justify-center text-xl font-bold shadow-lg">Y</div>
                        <div>
                            <h4 class="font-bold text-[16px] leading-tight text-white">yudhistira</h4>
                            <span class="inline-block mt-1 text-[10px] bg-[#FBBF24] text-[#78350F] px-3 py-1 rounded-full font-extrabold uppercase tracking-tight shadow-sm">Gold Member</span>
                        </div>
                    </div>
                    <button @click="sidebarOpen = false" class="md:hidden p-2 hover:bg-white/10 rounded-xl transition">
                        <i data-lucide="x" class="w-6 h-6"></i>
                    </button>
                </div>

                <div class="wallet-card rounded-[2rem] p-5 mb-10 border border-white/10 shadow-xl relative overflow-hidden group">
                    <div class="relative z-10">
                        <p class="text-[10px] text-purple-100 font-bold uppercase tracking-widest mb-1 opacity-80">Saldo E-Wallet</p>
                        <div class="flex justify-between items-center">
                            <p class="text-xl font-bold tracking-tight">Rp 0</p>
                            <button class="bg-white/20 hover:bg-white/40 w-8 h-8 rounded-xl flex items-center justify-center transition-all cursor-pointer">
                                <i data-lucide="plus" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </div>
                    <div class="absolute -right-4 -bottom-4 w-20 h-20 bg-white/10 rounded-full blur-2xl"></div>
                </div>

                <nav class="space-y-9">
                    <div>
                        <p class="text-[11px] text-purple-200/50 font-black tracking-[0.2em] uppercase mb-4 px-1">Main</p>
                      <ul class="space-y-2">
                        <li>
                            <a href="/" 
                                class="flex items-center gap-3 p-3 rounded-2xl transition-all shadow-sm {{ request()->is('/') ? 'bg-white/10 font-semibold text-white' : 'text-purple-100/80 hover:bg-white/5 hover:text-white' }}">
                                <i data-lucide="layout-dashboard" class="w-5 h-5"></i> Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="/booking/detail" 
                                class="flex items-center gap-3 p-3 rounded-2xl transition-all {{ request()->is('booking/detail*') ? 'bg-white/10 font-semibold text-white' : 'text-purple-100/80 hover:bg-white/5 hover:text-white' }}">
                                <i data-lucide="search" class="w-5 h-5"></i> Cari Lapangan
                            </a>
                        </li>
                         <li>
                            <a href="/open-play" 
                                class="flex items-center gap-3 p-3 rounded-2xl transition-all {{ request()->is('open-play*') ? 'bg-white/10 font-semibold text-white' : 'text-purple-100/80 hover:bg-white/5 hover:text-white' }}">
                                <i data-lucide="users" class="w-5 h-5"></i> Cari Lawan
                            </a>
                        </li>
                    </ul>
                </div>

                    <div>
                        <p class="text-[11px] text-purple-200/50 font-black tracking-[0.2em] uppercase mb-4 px-1">Activity</p>
                        <ul class="space-y-2">
                            <li><a href="#" class="flex items-center gap-3 p-3 rounded-2xl text-purple-100/80 hover:bg-white/5 hover:text-white transition-all"><i data-lucide="clock" class="w-5 h-5 text-white/80"></i> Booking Saya</a></li>
                            <li><a href="#" class="flex items-center gap-3 p-3 rounded-2xl text-purple-100/80 hover:bg-white/5 hover:text-white transition-all"><i data-lucide="heart" class="w-5 h-5 text-white/80"></i> Favorit</a></li>
                        </ul>
                    </div>

                    <div>
                        <p class="text-[11px] text-purple-200/50 font-black tracking-[0.2em] uppercase mb-4 px-1">Account</p>
                        <ul class="space-y-2">
                            <li><a href="#" class="flex items-center gap-3 p-3 rounded-2xl text-purple-100/80 hover:bg-white/5 hover:text-white transition-all"><i data-lucide="wallet" class="w-5 h-5 text-white/80"></i> Saldo & Transaksi</a></li>
                            <li><a href="#" class="flex items-center gap-3 p-3 rounded-2xl text-purple-100/80 hover:bg-white/5 hover:text-white transition-all"><i data-lucide="settings" class="w-5 h-5 text-white/80"></i> Pengaturan Profil</a></li>
                            <li><a href="#" class="flex items-center gap-3 p-3 rounded-2xl text-red-200 hover:bg-red-500/20 transition-all mt-4"><i data-lucide="log-out" class="w-5 h-5 text-red-300"></i> Logout</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </aside>

        <main class="flex-1 flex flex-col min-w-0">
            <header class="bg-white/80 backdrop-blur-md border-b border-gray-100 px-4 md:px-8 py-5 flex items-center justify-between sticky top-0 z-40">
                <div class="flex items-center gap-4 flex-1">
                    <button @click="sidebarOpen = true" class="md:hidden p-2 text-gray-500 hover:bg-gray-100 rounded-xl transition">
                        <i data-lucide="menu"></i>
                    </button>
                    
                    <div class="relative w-full max-w-md hidden sm:block">
                        <i data-lucide="search" class="absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400"></i>
                        <input type="text" placeholder="Cari lapangan, lokasi, atau olahraga..." class="w-full bg-gray-50 border-none rounded-2xl pl-12 pr-4 py-3 text-sm focus:ring-2 focus:ring-purple-500/20 transition-all outline-none">
                    </div>
                </div>
                
                <div class="flex items-center gap-3 md:gap-6">
                    <button class="relative text-gray-400 hover:text-purple-600 transition-all">
                        <i data-lucide="bell" class="w-6 h-6"></i>
                        <span class="absolute -top-1 -right-1 bg-[#EF4444] text-white text-[9px] w-4 h-4 rounded-full flex items-center justify-center font-bold border-2 border-white">3</span>
                    </button>
                    <div class="w-10 h-10 rounded-2xl bg-[#7C3AED] text-white flex items-center justify-center font-bold shadow-lg shadow-purple-200 cursor-pointer">Y</div>
                </div>
            </header>

            <section class="p-6 md:p-10 flex-grow">
                @yield('content')
            </section>

          <footer class="bg-white border-t border-gray-100 pt-16 pb-8 px-8 mt-10">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
            
            <div class="space-y-6">
                <div>
                    <h3 class="text-2xl font-black text-[#7C3AED] tracking-tighter">SportBooking.</h3>
                    <p class="text-xs text-gray-400 mt-1 uppercase tracking-[0.2em] font-bold">Premium Experience</p>
                </div>
                <p class="text-sm text-gray-500 leading-relaxed">
                    Platform booking lapangan olahraga dan coworking space nomor satu di Indonesia. Kami menghadirkan kemudahan berolahraga di ujung jari Anda.
                </p>
                <div class="flex gap-4">
                    <a href="#" class="w-10 h-10 rounded-xl bg-gray-50 flex items-center justify-center text-gray-400 hover:bg-[#7C3AED] hover:text-white transition-all shadow-sm">
                        <i data-lucide="instagram" class="w-5 h-5"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-xl bg-gray-50 flex items-center justify-center text-gray-400 hover:bg-[#7C3AED] hover:text-white transition-all shadow-sm">
                        <i data-lucide="facebook" class="w-5 h-5"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-xl bg-gray-50 flex items-center justify-center text-gray-400 hover:bg-[#7C3AED] hover:text-white transition-all shadow-sm">
                        <i data-lucide="twitter" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>

            <div>
                <h4 class="text-sm font-bold text-gray-900 uppercase tracking-widest mb-6">Layanan Kami</h4>
                <ul class="space-y-4">
                    <li><a href="#" class="text-sm text-gray-500 hover:text-[#7C3AED] transition-all flex items-center gap-2 font-medium">Cari Lapangan</a></li>
                    <li><a href="#" class="text-sm text-gray-500 hover:text-[#7C3AED] transition-all flex items-center gap-2 font-medium">Open Play (Cari Lawan)</a></li>
                    <li><a href="#" class="text-sm text-gray-500 hover:text-[#7C3AED] transition-all flex items-center gap-2 font-medium">Sewa Perlengkapan</a></li>
                    <li><a href="#" class="text-sm text-gray-500 hover:text-[#7C3AED] transition-all flex items-center gap-2 font-medium">Membership Gold</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-sm font-bold text-gray-900 uppercase tracking-widest mb-6">Dukungan</h4>
                <ul class="space-y-4">
                    <li><a href="#" class="text-sm text-gray-500 hover:text-[#7C3AED] transition-all font-medium">Help Center</a></li>
                    <li><a href="#" class="text-sm text-gray-500 hover:text-[#7C3AED] transition-all font-medium">Cara Booking</a></li>
                    <li><a href="#" class="text-sm text-gray-500 hover:text-[#7C3AED] transition-all font-medium">Ketentuan Pengembalian</a></li>
                    <li><a href="#" class="text-sm text-gray-500 hover:text-[#7C3AED] transition-all font-medium">Kontak Kami</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-sm font-bold text-gray-900 uppercase tracking-widest mb-6">Aplikasi Mobile</h4>
                <p class="text-sm text-gray-500 mb-6 font-medium">Dapatkan pengalaman booking lebih cepat melalui aplikasi mobile kami.</p>
                <div class="space-y-3">
                    <div class="flex items-center gap-3 bg-gray-900 text-white p-3 rounded-2xl cursor-pointer hover:bg-gray-800 transition-all border border-gray-700">
                        <i data-lucide="play" class="w-6 h-6 fill-white"></i>
                        <div>
                            <p class="text-[10px] uppercase opacity-60 leading-none">Get it on</p>
                            <p class="text-sm font-bold leading-none mt-1">Google Play</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 bg-gray-900 text-white p-3 rounded-2xl cursor-pointer hover:bg-gray-800 transition-all border border-gray-700">
                        <i data-lucide="apple" class="w-6 h-6 fill-white"></i>
                        <div>
                            <p class="text-[10px] uppercase opacity-60 leading-none">Download on the</p>
                            <p class="text-sm font-bold leading-none mt-1">App Store</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-8 border-t border-gray-100 flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="text-sm text-gray-400 font-medium">
                &copy; 2026 <span class="text-[#7C3AED] font-black tracking-tight">SportBooking.</span> Hub Lapangan Terpercaya.
            </div>
            <div class="flex gap-8">
                <a href="#" class="text-xs font-bold text-gray-400 uppercase tracking-widest hover:text-[#7C3AED] transition-all">Privacy Policy</a>
                <a href="#" class="text-xs font-bold text-gray-400 uppercase tracking-widest hover:text-[#7C3AED] transition-all">Terms of Service</a>
                <a href="#" class="text-xs font-bold text-gray-400 uppercase tracking-widest hover:text-[#7C3AED] transition-all">Cookies</a>
            </div>
        </div>
    </div>
</footer>
        </main>
    </div>

    <script> lucide.createIcons(); </script>
</body>
</html>