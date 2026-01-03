@extends('layouts.app')

@section('content')
<div class="flex flex-col lg:flex-row items-start gap-8 animate-in fade-in duration-700">
    
    <aside class="w-full lg:w-72 flex-shrink-0 sticky top-24">
        <div class="bg-white rounded-[2.5rem] p-8 border border-gray-100 shadow-sm">
            <div class="flex items-center justify-between mb-8">
                <h3 class="font-black text-xl text-gray-800 flex items-center gap-2">
                    <i data-lucide="filter" class="w-5 h-5 text-[#7C3AED]"></i> Filter
                </h3>
            </div>

            <div class="space-y-4 mb-8">
                <label class="text-[10px] font-black uppercase tracking-widest text-gray-400">Jenis Olahraga</label>
                <select class="w-full bg-gray-50 border-none rounded-2xl py-3.5 px-4 text-sm font-bold text-gray-700 focus:ring-2 focus:ring-[#7C3AED]/20 transition-all cursor-pointer appearance-none">
                    <option>Semua</option>
                    <option>Futsal</option>
                    <option>Badminton</option>
                    <option>Basketball</option>
                    <option>Tennis</option>
                </select>
            </div>

            <div class="space-y-4 mb-8">
                <label class="text-[10px] font-black uppercase tracking-widest text-gray-400">Harga per Jam</label>
                <input type="range" min="0" max="500000" step="50000" class="w-full h-1.5 bg-gray-100 rounded-lg appearance-none cursor-pointer accent-[#7C3AED]">
                <div class="flex justify-between text-[10px] font-black text-gray-400">
                    <span>Rp 0</span>
                    <span>Rp 500k</span>
                </div>
            </div>

            <div class="space-y-4">
                <label class="text-[10px] font-black uppercase tracking-widest text-gray-400">Fasilitas</label>
                <div class="space-y-3">
                    @foreach(['AC' => 'wind', 'WiFi' => 'wifi', 'Kantin' => 'coffee', 'Parkir Luas' => 'parking-circle'] as $label => $icon)
                    <label class="flex items-center gap-3 cursor-pointer group">
                        <input type="checkbox" class="w-5 h-5 rounded-lg border-gray-200 text-[#7C3AED] focus:ring-[#7C3AED]/20">
                        <span class="flex items-center gap-2 text-sm font-bold text-gray-600 group-hover:text-[#7C3AED] transition-colors">
                            <i data-lucide="{{ $icon }}" class="w-4 h-4 opacity-40"></i> {{ $label }}
                        </span>
                    </label>
                    @endforeach
                </div>
            </div>

            <button class="w-full text-center text-xs font-bold text-[#7C3AED] hover:underline pt-6 mt-6 border-t border-gray-50 uppercase tracking-widest">Reset Filter</button>
        </div>
    </aside>

    <div class="flex-1 space-y-8">
        <div class="flex flex-col md:flex-row justify-between items-center gap-4">
            <div>
                <h2 class="text-3xl font-black text-gray-900 tracking-tighter">Eksplor Venue Senayan</h2>
                <p class="text-gray-500 font-medium">Pilih lapangan terbaik untuk pertandinganmu hari ini</p>
            </div>
            
            <div class="relative group">
                <select class="bg-white border border-gray-100 rounded-2xl py-3 pl-5 pr-12 text-sm font-bold text-gray-700 shadow-sm focus:ring-2 focus:ring-[#7C3AED]/20 appearance-none cursor-pointer">
                    <option>Rekomendasi</option>
                    <option>Harga Terendah</option>
                    <option>Harga Tertinggi</option>
                    <option>Rating Tertinggi</option>
                </select>
                <i data-lucide="chevron-down" class="absolute right-4 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400 pointer-events-none transition-transform group-focus-within:rotate-180"></i>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 pb-20">
            <div class="bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm group hover:shadow-xl transition-all duration-300">
                <div class="relative h-52 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1763775594018-4a84eeadd83d?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDZ8fGZ1dHNhbHxlbnwwfHwwfHx8MA%3D%3D" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1.5 rounded-2xl text-[11px] font-black text-gray-800 shadow-sm flex items-center gap-1">
                        <span class="text-yellow-500">★</span> 4.8 
                    </div>
                </div>
                <div class="p-6 space-y-4">
                    <div>
                        <h4 class="font-bold text-xl text-gray-800 mb-1 leading-tight group-hover:text-[#7C3AED] transition-colors">Lapangan Futsal </h4> 
                        <p class="text-gray-400 text-sm flex items-center gap-1.5 italic mb-3"><i data-lucide="map-pin" class="w-4 h-4 text-gray-300"></i> GOR Senayan, Jakarta</p>
                        <div class="flex flex-wrap gap-2 pt-2">
                            <div class="flex items-center gap-1.5 bg-gray-50 px-3 py-1.5 rounded-xl border border-gray-100/50 uppercase text-[9px] font-black text-gray-500">
                                <i data-lucide="wind" class="w-3 h-3 text-blue-500"></i> Indoor AC
                            </div>
                            <div class="flex items-center gap-1.5 bg-gray-50 px-3 py-1.5 rounded-xl border border-gray-100/50 uppercase text-[9px] font-black text-gray-500">
                                <i data-lucide="shower-head" class="w-3 h-3 text-teal-500"></i> Kamar Mandi
                            </div>
                            <div class="flex items-center gap-1.5 bg-gray-50 px-3 py-1.5 rounded-xl border border-gray-100/50 uppercase text-[9px] font-black text-gray-500">
                                <i data-lucide="parking-circle" class="w-3 h-3 text-gray-400"></i> Parkir Luas
                            </div>
                            <div class="flex items-center gap-1.5 bg-gray-50 px-3 py-1.5 rounded-xl border border-gray-100/50 uppercase text-[9px] font-black text-gray-500">
                                <i data-lucide="wifi" class="w-3 h-3 text-purple-400"></i> Free WiFi
                            </div>
                            <div class="flex items-center gap-1.5 bg-gray-50 px-3 py-1.5 rounded-xl border border-gray-100/50 uppercase text-[9px] font-black text-gray-500">
                                <i data-lucide="utensils" class="w-3 h-3 text-red-400"></i> Food Court
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-50">
                        <p class="text-[#7C3AED] font-black text-lg">Rp 150.000<span class="text-xs font-normal text-gray-400">/jam</span></p> 
                        <a href="{{ route('lapangan.detail') }}" class="bg-[#4F46E5] text-white px-6 py-2.5 rounded-2xl text-sm font-bold transition-all hover:bg-[#3730a3] hover:shadow-indigo-200 hover:-translate-y-0.5 hover- active:scale-95 shadow-lg shadow-indigo-100 uppercase tracking-widest">Booking</a>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm group hover:shadow-xl transition-all duration-300">
                <div class="relative h-52 overflow-hidden">
                    <img src="https://plus.unsplash.com/premium_photo-1675366166956-8f5786a081b9?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzN8fGZ1dHNhbHxlbnwwfHwwfHx8MA%3D%3D" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1.5 rounded-2xl text-[11px] font-black text-gray-800 shadow-sm flex items-center gap-1">
                        <span class="text-yellow-500">★</span> 4.9
                    </div>
                </div>
                <div class="p-6 space-y-4">
                    <div>
                        <h4 class="font-bold text-xl text-gray-800 mb-1 leading-tight group-hover:text-[#7C3AED] transition-colors">Basketball Court Elite</h4> 
                        <p class="text-gray-400 text-sm flex items-center gap-1.5 italic mb-3"><i data-lucide="map-pin" class="w-4 h-4 text-gray-300"></i> Istora, Jakarta</p>
                        <div class="flex flex-wrap gap-2 pt-2">
                            <div class="flex items-center gap-1.5 bg-gray-50 px-3 py-1.5 rounded-xl border border-gray-100/50 uppercase text-[9px] font-black text-gray-500">
                                <i data-lucide="snowflake" class="w-3 h-3 text-blue-400"></i> Indoor AC
                            </div>
                            <div class="flex items-center gap-1.5 bg-gray-50 px-3 py-1.5 rounded-xl border border-gray-100/50 uppercase text-[9px] font-black text-gray-500">
                                <i data-lucide="shower-head" class="w-3 h-3 text-teal-500"></i> Kamar Mandi
                            </div>
                            <div class="flex items-center gap-1.5 bg-gray-50 px-3 py-1.5 rounded-xl border border-gray-100/50 uppercase text-[9px] font-black text-gray-500">
                                <i data-lucide="parking-circle" class="w-3 h-3 text-gray-400"></i> Parkir Luas
                            </div>
                            <div class="flex items-center gap-1.5 bg-gray-50 px-3 py-1.5 rounded-xl border border-gray-100/50 uppercase text-[9px] font-black text-gray-500">
                                <i data-lucide="wifi" class="w-3 h-3 text-purple-400"></i> Free WiFi
                            </div>
                            <div class="flex items-center gap-1.5 bg-gray-50 px-3 py-1.5 rounded-xl border border-gray-100/50 uppercase text-[9px] font-black text-gray-500">
                                <i data-lucide="utensils" class="w-3 h-3 text-red-400"></i> Food Court
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-50">
                        <p class="text-[#7C3AED] font-black text-lg">Rp 200.000<span class="text-xs font-normal text-gray-400">/jam</span></p> 
                        <a href="{{ route('lapangan.detail') }}" class="bg-[#4F46E5] text-white px-6 py-2.5 rounded-2xl text-sm font-bold transition-all hover:bg-[#3730a3] hover:shadow-indigo-200 hover:-translate-y-0.5 active:scale-95 shadow-lg shadow-indigo-100 uppercase tracking-widest">Booking</a>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm group hover:shadow-xl transition-all duration-300">
                <div class="relative h-52 overflow-hidden">
                    <img src="https://cdn.oneesports.gg/cdn-data/2022/12/MLBB_M4_WorldChampion_TennisIndoorSenayan.jpg" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1.5 rounded-2xl text-[11px] font-black text-gray-800 shadow-sm flex items-center gap-1">
                        <span class="text-yellow-500">★</span> 4.7
                    </div>
                </div>
                <div class="p-6 space-y-4">
                    <div>
                        <h4 class="font-bold text-xl text-gray-800 mb-1 leading-tight group-hover:text-[#7C3AED] transition-colors">Senayan Tennis Center</h4> 
                        <p class="text-gray-400 text-sm flex items-center gap-1.5 italic mb-3"><i data-lucide="map-pin" class="w-4 h-4 text-gray-300"></i> Lapangan Tennis Outdoor, Senayan</p>
                        <div class="flex flex-wrap gap-2 pt-2">
                             <div class="flex items-center gap-1.5 bg-gray-50 px-3 py-1.5 rounded-xl border border-gray-100/50 uppercase text-[9px] font-black text-gray-500">
                                <i data-lucide="snowflake" class="w-3 h-3 text-blue-400"></i> Indoor AC
                            </div>
                            <div class="flex items-center gap-1.5 bg-gray-50 px-3 py-1.5 rounded-xl border border-gray-100/50 uppercase text-[9px] font-black text-gray-500">
                                <i data-lucide="shower-head" class="w-3 h-3 text-teal-500"></i> Kamar Mandi
                            </div>
                            <div class="flex items-center gap-1.5 bg-gray-50 px-3 py-1.5 rounded-xl border border-gray-100/50 uppercase text-[9px] font-black text-gray-500">
                                <i data-lucide="parking-circle" class="w-3 h-3 text-gray-400"></i> Parkir Luas
                            </div>
                            <div class="flex items-center gap-1.5 bg-gray-50 px-3 py-1.5 rounded-xl border border-gray-100/50 uppercase text-[9px] font-black text-gray-500">
                                <i data-lucide="wifi" class="w-3 h-3 text-purple-400"></i> Free WiFi
                            </div>
                            <div class="flex items-center gap-1.5 bg-gray-50 px-3 py-1.5 rounded-xl border border-gray-100/50 uppercase text-[9px] font-black text-gray-500">
                                <i data-lucide="utensils" class="w-3 h-3 text-red-400"></i> Food Court
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-50">
                        <p class="text-[#7C3AED] font-black text-lg">Rp 100.000<span class="text-xs font-normal text-gray-400">/jam</span></p> 
                        <a href="{{ route('lapangan.detail') }}" class="bg-[#4F46E5] text-white px-6 py-2.5 rounded-2xl text-sm font-bold transition-all hover:bg-[#3730a3] hover:shadow-indigo-200 hover:-translate-y-0.5 active:scale-95 shadow-lg shadow-indigo-100 uppercase tracking-widest">Booking</a>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm group hover:shadow-xl transition-all duration-300">
                <div class="relative h-52 overflow-hidden">
                    <img src="https://th.bing.com/th/id/OIP.dObfBb9icQZprm72ZortDgHaD4?w=328&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1.5 rounded-2xl text-[11px] font-black text-gray-800 shadow-sm flex items-center gap-1">
                        <span class="text-yellow-500">★</span> 4.8
                    </div>
                </div>
                <div class="p-6 space-y-4">
                    <div>
                        <h4 class="font-bold text-xl text-gray-800 mb-1 leading-tight group-hover:text-[#7C3AED] transition-colors">Badminton Court Istora</h4> 
                        <p class="text-gray-400 text-sm flex items-center gap-1.5 italic mb-3"><i data-lucide="map-pin" class="w-4 h-4 text-gray-300"></i> Gedung Istora Senayan</p>
                        <div class="flex flex-wrap gap-2 pt-2">
                             <div class="flex items-center gap-1.5 bg-gray-50 px-3 py-1.5 rounded-xl border border-gray-100/50 uppercase text-[9px] font-black text-gray-500">
                                <i data-lucide="snowflake" class="w-3 h-3 text-blue-400"></i> Indoor AC
                            </div>
                            <div class="flex items-center gap-1.5 bg-gray-50 px-3 py-1.5 rounded-xl border border-gray-100/50 uppercase text-[9px] font-black text-gray-500">
                                <i data-lucide="shower-head" class="w-3 h-3 text-teal-500"></i> Kamar Mandi
                            </div>
                            <div class="flex items-center gap-1.5 bg-gray-50 px-3 py-1.5 rounded-xl border border-gray-100/50 uppercase text-[9px] font-black text-gray-500">
                                <i data-lucide="parking-circle" class="w-3 h-3 text-gray-400"></i> Parkir Luas
                            </div>
                            <div class="flex items-center gap-1.5 bg-gray-50 px-3 py-1.5 rounded-xl border border-gray-100/50 uppercase text-[9px] font-black text-gray-500">
                                <i data-lucide="wifi" class="w-3 h-3 text-purple-400"></i> Free WiFi
                            </div>
                            <div class="flex items-center gap-1.5 bg-gray-50 px-3 py-1.5 rounded-xl border border-gray-100/50 uppercase text-[9px] font-black text-gray-500">
                                <i data-lucide="utensils" class="w-3 h-3 text-red-400"></i> Food Court
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-50">
                        <p class="text-[#7C3AED] font-black text-lg">Rp 120.000<span class="text-xs font-normal text-gray-400">/jam</span></p> 
                        <a href="{{ route('lapangan.detail') }}" class="bg-[#4F46E5] text-white px-6 py-2.5 rounded-2xl text-sm font-bold transition-all hover:bg-[#3730a3] hover:shadow-indigo-200 hover:-translate-y-0.5 active:scale-95 shadow-lg shadow-indigo-100 uppercase tracking-widest">Booking</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script> lucide.createIcons(); </script>
@endsection