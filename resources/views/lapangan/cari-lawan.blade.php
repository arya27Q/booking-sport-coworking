@extends('layouts.app')

@section('content')
<div class="space-y-8 animate-in fade-in duration-700">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
        <div>
            <h2 class="text-3xl font-black text-gray-900 tracking-tighter">Cari Lawan / Open Play</h2>
            <p class="text-gray-500 font-medium">Gabung dengan pemain lain atau buat sesi main barengmu sendiri!</p>
        </div>
        <button class="bg-[#7C3AED] text-white px-6 py-4 rounded-[1.5rem] font-bold shadow-lg shadow-purple-100 hover:bg-purple-700 transition-all flex items-center gap-2 active:scale-95">
            <i data-lucide="plus-circle" class="w-5 h-5"></i> Buat Sesi Main Baru
        </button>
    </div>

    <div class="bg-white p-4 rounded-[2rem] border border-gray-100 shadow-sm flex flex-wrap gap-4">
        <select class="flex-1 min-w-[150px] bg-gray-50 border-none rounded-2xl py-3 px-4 text-sm font-bold text-gray-700 focus:ring-2 focus:ring-[#7C3AED]/20 cursor-pointer">
            <option>Semua Olahraga</option>
            <option>Futsal</option>
            <option>Basketball</option>
        </select>
        <select class="flex-1 min-w-[150px] bg-gray-50 border-none rounded-2xl py-3 px-4 text-sm font-bold text-gray-700 focus:ring-2 focus:ring-[#7C3AED]/20 cursor-pointer">
            <option>Semua Lokasi</option>
            <option>Senayan</option>
            <option>Sudirman</option>
        </select>
        <select class="flex-1 min-w-[150px] bg-gray-50 border-none rounded-2xl py-3 px-4 text-sm font-bold text-gray-700 focus:ring-2 focus:ring-[#7C3AED]/20 cursor-pointer">
            <option>Semua Tanggal</option>
            <option>Hari Ini</option>
            <option>Besok</option>
        </select>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 pb-10">
        
        <div class="bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col">
            <div class="relative h-48 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1763775594018-4a84eeadd83d?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDZ8fGZ1dHNhbHxlbnwwfHwwfHx8MA%3D%3D" class="w-full h-full object-cover">
                <span class="absolute top-4 left-4 bg-blue-600 text-white text-[10px] font-black px-4 py-1.5 rounded-full uppercase tracking-widest">Futsal</span>
                <div class="absolute top-4 right-4 bg-black/50 backdrop-blur-md px-3 py-1.5 rounded-xl text-[11px] font-bold text-white flex items-center gap-1.5">
                    <i data-lucide="users" class="w-3.5 h-3.5"></i> 7/10
                </div>
            </div>
            
            <div class="p-6 space-y-5 flex-grow">
                <div class="space-y-2">
                    <h4 class="font-black text-lg text-gray-800 tracking-tight">Lapangan Futsal A</h4>
                    <p class="text-gray-400 text-xs flex items-center gap-2 font-medium leading-none"><i data-lucide="map-pin" class="w-3.5 h-3.5 text-gray-300"></i> GOR Senayan, Jakarta</p>
                    <p class="text-gray-500 text-xs flex items-center gap-2 font-bold"><i data-lucide="calendar" class="w-3.5 h-3.5 text-[#7C3AED]"></i> 10 Jan, 19:00 - 20:00</p>
                    <p class="text-gray-400 text-xs flex items-center gap-2 font-medium"><i data-lucide="user-check" class="w-3.5 h-3.5 text-gray-300"></i> Oleh Budi Santoso</p>
                    <p class="text-[#7C3AED] font-black text-sm flex items-center gap-2 mt-2"><i data-lucide="banknote" class="w-4 h-4 text-green-500"></i> Rp 50.000 / org</p>
                </div>

                <div class="bg-gray-50 p-3 rounded-xl border border-gray-100">
                    <p class="text-[10px] text-gray-500 leading-relaxed font-semibold italic line-clamp-2">"Main santai, cari 3 orang lagi. Level pemain menengah. Jersey: Baju Hijau vs Kuning"</p>
                </div>

                <div class="space-y-2 pt-1">
                    <div class="flex justify-between text-[10px] font-bold uppercase tracking-wider">
                        <span class="text-gray-400">3 slot tersisa</span>
                        <span class="text-[#7C3AED]">70%</span>
                    </div>
                    <div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden">
                        <div class="h-full bg-[#7C3AED] w-[70%] rounded-full"></div>
                    </div>
                </div>

                <div class="flex gap-2 pt-2">
                    <button class="flex-1 bg-[#7C3AED] text-white py-3 rounded-xl font-black text-xs hover:bg-purple-700 transition-all active:scale-95 uppercase tracking-wider">Gabung Main</button>
                    <button class="w-12 h-12 border border-gray-100 rounded-xl flex items-center justify-center hover:bg-gray-50 transition-colors">
                        <i data-lucide="message-circle" class="w-5 h-5 text-gray-400"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col">
            <div class="relative h-48 overflow-hidden">
                  <img src="https://plus.unsplash.com/premium_photo-1675366166956-8f5786a081b9?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzN8fGZ1dHNhbHxlbnwwfHwwfHx8MA%3D%3D" class="w-full h-full object-cover">
                <span class="absolute top-4 left-4 bg-purple-600 text-white text-[10px] font-black px-4 py-1.5 rounded-full uppercase tracking-widest">Basketball</span>
                <div class="absolute top-4 right-4 bg-black/50 backdrop-blur-md px-3 py-1.5 rounded-xl text-[11px] font-bold text-white flex items-center gap-1.5">
                    <i data-lucide="users" class="w-3.5 h-3.5"></i> 8/10
                </div>
            </div>

            <div class="p-6 space-y-5 flex-grow">
                <div class="space-y-2">
                    <h4 class="font-black text-lg text-gray-800 tracking-tight">Basketball Court Elite</h4>
                    <p class="text-gray-400 text-xs flex items-center gap-2 font-medium leading-none"><i data-lucide="map-pin" class="w-3.5 h-3.5 text-gray-300"></i> Senopati Sports Center</p>
                    <p class="text-gray-500 text-xs flex items-center gap-2 font-bold"><i data-lucide="calendar" class="w-3.5 h-3.5 text-[#7C3AED]"></i> 11 Jan, 18:00 - 19:00</p>
                    <p class="text-gray-400 text-xs flex items-center gap-2 font-medium"><i data-lucide="user-check" class="w-3.5 h-3.5 text-gray-300"></i> Oleh Ahmad Wijaya</p>
                    <p class="text-[#7C3AED] font-black text-sm flex items-center gap-2 mt-2"><i data-lucide="banknote" class="w-4 h-4 text-green-500"></i> Rp 70.000 / org</p>
                </div>

                <div class="bg-gray-50 p-3 rounded-xl border border-gray-100">
                    <p class="text-[10px] text-gray-500 leading-relaxed font-semibold italic line-clamp-2">"3 on 3 basketball, butuh 2 orang lagi! Jersey: Bebas, bawa sendiri"</p>
                </div>

                <div class="space-y-2 pt-1">
                    <div class="flex justify-between text-[10px] font-bold uppercase tracking-wider">
                        <span class="text-gray-400">2 slot tersisa</span>
                        <span class="text-[#7C3AED]">80%</span>
                    </div>
                    <div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden">
                        <div class="h-full bg-[#7C3AED] w-[80%] rounded-full"></div>
                    </div>
                </div>

                <div class="flex gap-2 pt-2">
                    <button class="flex-1 bg-[#7C3AED] text-white py-3 rounded-xl font-black text-xs hover:bg-purple-700 transition-all active:scale-95 uppercase tracking-wider">Gabung Main</button>
                    <button class="w-12 h-12 border border-gray-100 rounded-xl flex items-center justify-center hover:bg-gray-50 transition-colors">
                        <i data-lucide="message-circle" class="w-5 h-5 text-gray-400"></i>
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>

<script> lucide.createIcons(); </script>
@endsection