@extends('layouts.app')

@section('content')
<div class="space-y-12 animate-in fade-in duration-500 pb-20">
    
    <div class="relative overflow-hidden bg-gradient-to-r from-[#7C3AED] to-[#A855F7] rounded-[2rem] p-6 md:p-8 text-white shadow-xl shadow-purple-200/50">
        <div class="relative z-10 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex gap-5 items-center">
                <div class="w-14 h-14 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center shadow-inner">
                    <i data-lucide="zap" class="w-8 h-8 text-white fill-white/20"></i>
                </div>
                <div class="space-y-1">
                    <h2 class="text-2xl font-bold tracking-tight">Upcoming Match</h2>
                    <p class="text-purple-100 opacity-90 text-sm md:text-base font-medium">Kamu ada main 2 jam lagi di Lapangan Futsal B!</p>
                    <div class="flex flex-wrap items-center gap-4 mt-2 text-xs md:text-sm font-semibold">
                        <span class="flex items-center gap-1.5"><i data-lucide="clock" class="w-4 h-4 text-purple-200"></i> Hari ini, 19:00</span>
                        <span class="flex items-center gap-1.5"><i data-lucide="map-pin" class="w-4 h-4 text-purple-200"></i> GOR Senayan, Jakarta</span>
                    </div>
                </div>
            </div>
            <button class="bg-white text-[#7C3AED] px-8 py-3 rounded-2xl font-bold hover:bg-purple-50 transition-all shadow-lg active:scale-95 whitespace-nowrap">
                Lihat Detail
            </button>
        </div>
        <div class="absolute -right-10 -top-10 w-40 h-40 bg-white/10 rounded-full blur-3xl"></div>
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
        <div class="bg-white p-5 rounded-[2rem] border border-gray-100 shadow-sm flex items-center gap-4 group hover:border-blue-200 transition-all">
            <div class="w-12 h-12 bg-blue-50 text-blue-500 rounded-2xl flex items-center justify-center shadow-sm">
                <i data-lucide="calendar-days" class="w-6 h-6"></i>
            </div>
            <div>
                <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider mb-0.5 leading-tight">Total Main</p>
                <h3 class="text-xl font-extrabold text-gray-800 tracking-tight leading-none">12 kali</h3>
            </div>
        </div>
        <div class="bg-white p-5 rounded-[2rem] border border-gray-100 shadow-sm flex items-center gap-4 group hover:border-green-200 transition-all">
            <div class="w-12 h-12 bg-green-50 text-green-500 rounded-2xl flex items-center justify-center shadow-sm">
                <i data-lucide="clock-4" class="w-6 h-6"></i>
            </div>
            <div>
                <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider mb-0.5 leading-tight">Jam Bermain</p>
                <h3 class="text-xl font-extrabold text-gray-800 tracking-tight leading-none">24 jam</h3>
            </div>
        </div>
        <div class="bg-white p-5 rounded-[2rem] border border-gray-100 shadow-sm flex items-center gap-4 group hover:border-purple-200 transition-all">
            <div class="w-12 h-12 bg-purple-50 text-purple-500 rounded-2xl flex items-center justify-center shadow-sm">
                <i data-lucide="map-pin" class="w-6 h-6"></i>
            </div>
            <div>
                <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider mb-0.5 leading-tight">Lokasi Favorit</p>
                <h3 class="text-xl font-extrabold text-gray-800 tracking-tight leading-none">GOR Senayan</h3>
            </div>
        </div>
        <div class="bg-white p-5 rounded-[2rem] border border-gray-100 shadow-sm flex items-center gap-4 group hover:border-orange-200 transition-all">
            <div class="w-12 h-12 bg-orange-50 text-orange-500 rounded-2xl flex items-center justify-center shadow-sm">
                <i data-lucide="trending-up" class="w-6 h-6"></i>
            </div>
            <div>
                <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider mb-0.5 leading-tight">Poin Member</p>
                <h3 class="text-xl font-extrabold text-gray-800 tracking-tight leading-none">1,250</h3>
            </div>
        </div>
    </div>

    <div>
        <h3 class="text-xl font-black text-gray-800 mb-6 flex items-center gap-2">Promo & Event</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="relative overflow-hidden bg-gradient-to-br from-[#F97316] to-[#EF4444] rounded-[2.5rem] p-7 text-white shadow-lg shadow-orange-100 transition-transform hover:-translate-y-1">
                <span class="absolute top-5 right-7 text-[10px] font-bold bg-black/10 px-3 py-1 rounded-full uppercase">Aktif</span>
                <i data-lucide="gift" class="w-10 h-10 mb-6 text-white opacity-80"></i>
                <h4 class="text-xl font-black mb-2 leading-tight">Diskon 50% Main Sore!</h4>
                <p class="text-xs text-orange-50 opacity-90 leading-relaxed font-medium">Booking jam 14:00 - 17:00 dapat potongan 50%</p>
            </div>
            <div class="relative overflow-hidden bg-[#3B82F6] rounded-[2.5rem] p-7 text-white shadow-lg shadow-blue-100 transition-transform hover:-translate-y-1">
                <span class="absolute top-5 right-7 text-[10px] font-bold bg-black/10 px-3 py-1 rounded-full uppercase">Aktif</span>
                <i data-lucide="ticket-percent" class="w-10 h-10 mb-6 text-white opacity-80"></i>
                <h4 class="text-xl font-black mb-2 leading-tight text-white">Member Baru Gratis 1 Jam</h4>
                <p class="text-xs text-blue-50 opacity-90 leading-relaxed font-medium">Daftar sekarang dan dapatkan voucher gratis</p>
            </div>
            <div class="relative overflow-hidden bg-gradient-to-br from-[#A855F7] to-[#EC4899] rounded-[2.5rem] p-7 text-white shadow-lg shadow-purple-100 transition-transform hover:-translate-y-1">
                <span class="absolute top-5 right-7 text-[10px] font-bold bg-black/10 px-3 py-1 rounded-full uppercase">Aktif</span>
                <i data-lucide="users-2" class="w-10 h-10 mb-6 text-white opacity-80"></i>
                <h4 class="text-xl font-black mb-2 leading-tight">Main Bareng Event</h4>
                <p class="text-xs text-purple-50 opacity-90 leading-relaxed font-medium">Turnamen futsal minggu ini! Hadiah total 10 juta</p>
            </div>
        </div>
    </div>

    <div>
        <div class="flex justify-between items-end mb-6">
            <h3 class="text-2xl font-black text-gray-800 tracking-tight">Rekomendasi Lapangan</h3>
            <a href="#" class="text-[#7C3AED] font-bold text-sm flex items-center gap-1.5 hover:underline group">
                Lihat Semua <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm group hover:shadow-xl transition-all duration-300">
                <div class="relative h-52 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1.5 rounded-2xl text-[11px] font-black text-gray-800 shadow-sm flex items-center gap-1">
                        <span class="text-yellow-500">★</span> 4.8 
                    </div>
                </div>
                <div class="p-6 space-y-4">
                    <h4 class="font-bold text-xl text-gray-800 mb-1 leading-tight">Lapangan Futsal ABC</h4> 
                    <p class="text-gray-400 text-sm flex items-center gap-1.5 italic"><i data-lucide="map-pin" class="w-4 h-4 text-gray-300"></i> GOR Senayan, Jakarta</p>
                    <div class="flex justify-between items-center pt-4">
                        <p class="text-[#7C3AED] font-black text-lg">Rp 150.000<span class="text-xs font-normal text-gray-400">/jam</span></p> 
                        <a href="/booking/detail" class="bg-[#4F46E5] text-white px-6 py-2.5 rounded-2xl text-sm font-bold transition-all active:scale-95 shadow-lg shadow-indigo-100">Booking</a> 
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm group hover:shadow-xl transition-all duration-300">
                <div class="relative h-52 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1504450758481-7338eba7524a?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1.5 rounded-2xl text-[11px] font-black text-gray-800 shadow-sm flex items-center gap-1">
                        <span class="text-yellow-500">★</span> 4.9 
                    </div>
                </div>
                <div class="p-6 space-y-4">
                    <h4 class="font-bold text-xl text-gray-800 mb-1 leading-tight tracking-tight">GBK Arena Basketball</h4> 
                    <p class="text-gray-400 text-sm flex items-center gap-1.5 italic"><i data-lucide="map-pin" class="w-4 h-4 text-gray-300"></i> GBK Arena Lantai 8</p>
                    <div class="flex justify-between items-center pt-4">
                        <p class="text-[#7C3AED] font-black text-lg">Rp 300.000<span class="text-xs font-normal text-gray-400">/jam</span></p> 
                        <a href="/booking/detail" class="bg-[#4F46E5] text-white px-6 py-2.5 rounded-2xl text-sm font-bold transition-all active:scale-95 shadow-lg shadow-indigo-100">Booking</a> 
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm group hover:shadow-xl transition-all duration-300">
                <div class="relative h-52 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1626224583764-f87db24ac4ea?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1.5 rounded-2xl text-[11px] font-black text-gray-800 shadow-sm flex items-center gap-1">
                        <span class="text-yellow-500">★</span> 4.7 
                    </div>
                </div>
                <div class="p-6 space-y-4">
                    <h4 class="font-bold text-xl text-gray-800 mb-1 leading-tight">Istora Badminton Court</h4> 
                    <p class="text-gray-400 text-sm flex items-center gap-1.5 italic"><i data-lucide="map-pin" class="w-4 h-4 text-gray-300"></i> Istora Senayan</p>
                    <div class="flex justify-between items-center pt-4">
                        <p class="text-[#7C3AED] font-black text-lg">Rp 175.000<span class="text-xs font-normal text-gray-400">/jam</span></p> 
                        <a href="/booking/detail" class="bg-[#4F46E5] text-white px-6 py-2.5 rounded-2xl text-sm font-bold transition-all active:scale-95 shadow-lg shadow-indigo-100">Booking</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-8">
        <div class="flex justify-between items-end mb-6 px-1">
            <div>
                <h3 class="text-2xl font-black text-gray-800 tracking-tight">Coworking & Work-Friendly Cafe</h3>
                <p class="text-sm text-gray-400 font-medium">Tempat terbaik untuk produktif di sekitar Senayan</p>
            </div>
            <button class="text-[#7C3AED] font-bold text-sm flex items-center gap-1.5 hover:underline group">
                Cari Tempat Kerja <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-[2.5rem] p-4 border border-gray-100 shadow-sm flex flex-col md:flex-row gap-6 hover:shadow-xl transition-all duration-300">
                <div class="w-full md:w-48 h-48 flex-shrink-0 overflow-hidden rounded-[2rem]">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="flex flex-col justify-between py-2 flex-1">
                    <div>
                        <div class="flex justify-between items-start">
                            <h4 class="font-bold text-xl text-gray-800 mb-1">GoWork Senayan City</h4>
                            <span class="bg-blue-50 text-blue-600 text-[10px] font-bold px-3 py-1 rounded-full uppercase">Professional</span>
                        </div>
                        <p class="text-gray-400 text-sm flex items-center gap-1.5 italic"><i data-lucide="map-pin" class="w-4 h-4 text-gray-300"></i> Panin Tower Lt. 15, Senayan</p>
                        <p class="text-xs text-gray-500 mt-4 line-clamp-2 italic font-medium">"Fasilitas premium dengan hot desk, meeting room, dan internet super kencang."</p>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-[11px] font-bold text-gray-700 italic flex items-center gap-1.5"><i data-lucide="wifi" class="w-3.5 h-3.5 text-blue-500"></i> High Speed WiFi</span>
                        <a href="#" class="text-[#7C3AED] font-bold text-sm hover:underline italic">Lihat Detail →</a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-[2.5rem] p-4 border border-gray-100 shadow-sm flex flex-col md:flex-row gap-6 hover:shadow-xl transition-all duration-300">
                <div class="w-full md:w-48 h-48 flex-shrink-0 overflow-hidden rounded-[2rem]">
                    <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?auto=format&fit=crop&q=80&w=400" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="flex flex-col justify-between py-2 flex-1">
                    <div>
                        <div class="flex justify-between items-start">
                            <h4 class="font-bold text-xl text-gray-800 mb-1 leading-tight">On3 Senayan</h4>
                            <span class="bg-green-50 text-green-600 text-[10px] font-bold px-3 py-1 rounded-full uppercase">Work from Cafe</span>
                        </div>
                        <p class="text-gray-400 text-sm flex items-center gap-1.5 italic"><i data-lucide="map-pin" class="w-4 h-4 text-gray-300"></i> Kompleks GBK Pintu 7</p>
                        <p class="text-xs text-gray-500 mt-4 line-clamp-2 italic font-medium">"Suasana estetik, tenang, dan banyak colokan. Cocok buat fokus nugas."</p>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-[11px] font-bold text-gray-700 italic flex items-center gap-1.5"><i data-lucide="zap" class="w-3.5 h-3.5 text-orange-500 fill-orange-500/20"></i> Many Power Outlets</span>
                        <a href="#" class="text-[#7C3AED] font-bold text-sm hover:underline italic">Lihat Detail →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        lucide.createIcons();
    });
</script>
@endsection