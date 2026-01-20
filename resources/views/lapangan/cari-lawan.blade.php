<x-layout>
    <div class="space-y-8 animate-in fade-in duration-700">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
            <div>
                <h2 class="text-3xl font-black text-gray-900 tracking-tighter uppercase">Cari Lawan / Open Play</h2>
                <p class="text-gray-500 font-medium">Gabung komunitas atau buat sesi main barengmu sendiri!</p>
            </div>
            <button class="bg-[#7C3AED] text-white px-6 py-4 rounded-[1.5rem] font-bold shadow-lg shadow-purple-100 hover:bg-purple-700 transition-all flex items-center gap-2 active:scale-95 uppercase text-xs tracking-widest">
                <i data-lucide="plus-circle" class="w-5 h-5"></i> Buat Sesi Baru
            </button>
        </div>

        <div class="bg-white p-4 rounded-[2rem] border border-gray-100 shadow-sm flex flex-wrap gap-4">
            <select id="filterSportOpen" class="flex-1 min-w-[150px] bg-gray-50 border-none rounded-2xl py-3 px-4 text-sm font-bold text-gray-700 focus:ring-2 focus:ring-[#7C3AED]/20 cursor-pointer appearance-none">
                <option value="Semua">Semua Olahraga</option>
                <option value="Futsal">Futsal</option>
                <option value="Basketball">Basketball</option>
                <option value="Badminton">Badminton</option>
                <option value="Tennis">Tennis</option>
                <option value="Mini Soccer">Mini Soccer</option>
                <option value="Billiard">Billiard</option>
                <option value="Volleyball">Volleyball</option>
            </select>
            <select id="filterLocOpen" class="flex-1 min-w-[150px] bg-gray-50 border-none rounded-2xl py-3 px-4 text-sm font-bold text-gray-700 focus:ring-2 focus:ring-[#7C3AED]/20 cursor-pointer appearance-none">
                <option value="Semua">Semua Lokasi</option>
                <option value="Senayan">Senayan</option>
                <option value="Sudirman">Sudirman</option>
                <option value="Kuningan">Kuningan</option>
            </select>
            <select id="filterDateOpen" class="flex-1 min-w-[150px] bg-gray-50 border-none rounded-2xl py-3 px-4 text-sm font-bold text-gray-700 focus:ring-2 focus:ring-[#7C3AED]/20 cursor-pointer appearance-none">
                <option value="Semua">Semua Tanggal</option>
                <option value="Hari Ini">Hari Ini</option>
                <option value="Besok">Besok</option>
            </select>
        </div>

        <div id="openPlayGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 pb-10">
            
            <div class="session-card bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group" data-sport="Futsal" data-loc="Senayan" data-date="Hari Ini">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?w=600" class="w-full h-full object-cover group-hover:scale-110 duration-500">
                    <span class="absolute top-4 left-4 bg-blue-600 text-white text-[9px] font-black px-4 py-1.5 rounded-full uppercase tracking-widest">Futsal</span>
                    <div class="absolute top-4 right-4 bg-black/50 backdrop-blur-md px-3 py-1.5 rounded-xl text-[11px] font-bold text-white flex items-center gap-1.5">
                        <i data-lucide="users" class="w-3.5 h-3.5"></i> 7/10
                    </div>
                </div>
                <div class="p-6 space-y-5 flex-grow">
                    <div class="space-y-2">
                        <h4 class="font-black text-lg text-gray-800 tracking-tight">Senayan Futsal Arena</h4>
                        <p class="text-gray-400 text-xs flex items-center gap-2"><i data-lucide="map-pin" class="w-3.5 h-3.5 text-blue-500"></i> GOR Senayan</p>
                        <p class="text-gray-500 text-xs flex items-center gap-2 font-bold"><i data-lucide="calendar" class="w-3.5 h-3.5 text-[#7C3AED]"></i> Hari Ini, 19:00</p>
                        <div class="flex gap-2 pt-1">
                            <i data-lucide="wind" class="w-4 h-4 text-blue-400/70"></i>
                            <i data-lucide="parking-circle" class="w-4 h-4 text-slate-400/70"></i>
                        </div>
                    </div>
                    <div class="bg-gray-50 p-3 rounded-xl border border-gray-100"><p class="text-[10px] text-gray-500 italic">"Main santai fun match, butuh 3 orang lagi!"</p></div>
                    <button class="w-full bg-[#7C3AED] text-white py-3.5 rounded-xl font-black text-[10px] hover:bg-purple-700 uppercase">Join Rp 45k</button>
                </div>
            </div>

            <div class="session-card bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group" data-sport="Basketball" data-loc="Senayan" data-date="Besok">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1504450758481-7338eba7524a?w=600" class="w-full h-full object-cover group-hover:scale-110 duration-500">
                    <span class="absolute top-4 left-4 bg-purple-600 text-white text-[9px] font-black px-4 py-1.5 rounded-full uppercase tracking-widest">Basketball</span>
                    <div class="absolute top-4 right-4 bg-black/50 backdrop-blur-md px-3 py-1.5 rounded-xl text-[11px] font-bold text-white flex items-center gap-1.5">
                        <i data-lucide="users" class="w-3.5 h-3.5"></i> 12/15
                    </div>
                </div>
                <div class="p-6 space-y-5 flex-grow">
                    <div class="space-y-2">
                        <h4 class="font-black text-lg text-gray-800 tracking-tight">Elite Hoops GBK</h4>
                        <p class="text-gray-400 text-xs flex items-center gap-2"><i data-lucide="map-pin" class="w-3.5 h-3.5 text-orange-500"></i> Istora Senayan</p>
                        <p class="text-gray-500 text-xs flex items-center gap-2 font-bold"><i data-lucide="calendar" class="w-3.5 h-3.5 text-[#7C3AED]"></i> Besok, 08:00</p>
                        <div class="flex gap-2 pt-1">
                            <i data-lucide="wifi" class="w-4 h-4 text-purple-400/70"></i>
                            <i data-lucide="coffee" class="w-4 h-4 text-orange-400/70"></i>
                        </div>
                    </div>
                    <div class="bg-gray-50 p-3 rounded-xl border border-gray-100"><p class="text-[10px] text-gray-500 italic">"Open play 3on3. Bawa jersey putih!"</p></div>
                    <button class="w-full bg-[#7C3AED] text-white py-3.5 rounded-xl font-black text-[10px] hover:bg-purple-700 uppercase">Join Rp 60k</button>
                </div>
            </div>

            <div class="session-card bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group" data-sport="Badminton" data-loc="Kuningan" data-date="Hari Ini">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1626224580175-1087e502c300?w=600" class="w-full h-full object-cover group-hover:scale-110 duration-500">
                    <span class="absolute top-4 left-4 bg-teal-600 text-white text-[9px] font-black px-4 py-1.5 rounded-full uppercase tracking-widest">Badminton</span>
                    <div class="absolute top-4 right-4 bg-black/50 backdrop-blur-md px-3 py-1.5 rounded-xl text-[11px] font-bold text-white flex items-center gap-1.5">
                        <i data-lucide="users" class="w-3.5 h-3.5"></i> 3/4
                    </div>
                </div>
                <div class="p-6 space-y-5 flex-grow">
                    <div class="space-y-2">
                        <h4 class="font-black text-lg text-gray-800 tracking-tight">Istora Smash Hall</h4>
                        <p class="text-gray-400 text-xs flex items-center gap-2"><i data-lucide="map-pin" class="w-3.5 h-3.5 text-teal-500"></i> GOR Kuningan</p>
                        <p class="text-gray-500 text-xs flex items-center gap-2 font-bold"><i data-lucide="calendar" class="w-3.5 h-3.5 text-[#7C3AED]"></i> Hari Ini, 20:00</p>
                        <div class="flex gap-2 pt-1"><i data-lucide="coffee" class="w-4 h-4 text-orange-400/70"></i></div>
                    </div>
                    <div class="bg-gray-50 p-3 rounded-xl border border-gray-100"><p class="text-[10px] text-gray-500 italic">"Ganda putra, cock sudah disediakan."</p></div>
                    <button class="w-full bg-[#7C3AED] text-white py-3.5 rounded-xl font-black text-[10px] hover:bg-purple-700 uppercase">Join Rp 35k</button>
                </div>
            </div>

            <div class="session-card bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group" data-sport="Tennis" data-loc="Senayan" data-date="Besok">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1595435934249-5df7ed86e1c0?w=600" class="w-full h-full object-cover group-hover:scale-110 duration-500">
                    <span class="absolute top-4 left-4 bg-lime-600 text-white text-[9px] font-black px-4 py-1.5 rounded-full uppercase tracking-widest">Tennis</span>
                    <div class="absolute top-4 right-4 bg-black/50 backdrop-blur-md px-3 py-1.5 rounded-xl text-[11px] font-bold text-white flex items-center gap-1.5">
                        <i data-lucide="users" class="w-3.5 h-3.5"></i> 1/2
                    </div>
                </div>
                <div class="p-6 space-y-5 flex-grow">
                    <div class="space-y-2">
                        <h4 class="font-black text-lg text-gray-800 tracking-tight">Senayan Hard Court</h4>
                        <p class="text-gray-400 text-xs flex items-center gap-2"><i data-lucide="map-pin" class="w-3.5 h-3.5 text-lime-600"></i> Lap. Tennis 2 GBK</p>
                        <p class="text-gray-500 text-xs flex items-center gap-2 font-bold"><i data-lucide="calendar" class="w-3.5 h-3.5 text-[#7C3AED]"></i> Besok, 07:00</p>
                        <div class="flex gap-2 pt-1"><i data-lucide="sun" class="w-4 h-4 text-yellow-500/70"></i></div>
                    </div>
                    <div class="bg-gray-50 p-3 rounded-xl border border-gray-100"><p class="text-[10px] text-gray-500 italic">"Single match, level beginner aja ya."</p></div>
                    <button class="w-full bg-[#7C3AED] text-white py-3.5 rounded-xl font-black text-[10px] hover:bg-purple-700 uppercase">Join Rp 100k</button>
                </div>
            </div>

            <div class="session-card bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group" data-sport="Mini Soccer" data-loc="Sudirman" data-date="Hari Ini">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1529900748604-07564a03e7a6?w=600" class="w-full h-full object-cover group-hover:scale-110 duration-500">
                    <span class="absolute top-4 left-4 bg-emerald-600 text-white text-[9px] font-black px-4 py-1.5 rounded-full uppercase tracking-widest">Mini Soccer</span>
                    <div class="absolute top-4 right-4 bg-black/50 backdrop-blur-md px-3 py-1.5 rounded-xl text-[11px] font-bold text-white flex items-center gap-1.5">
                        <i data-lucide="users" class="w-3.5 h-3.5"></i> 18/22
                    </div>
                </div>
                <div class="p-6 space-y-5 flex-grow">
                    <div class="space-y-2">
                        <h4 class="font-black text-lg text-gray-800 tracking-tight">Sudirman Turf Arena</h4>
                        <p class="text-gray-400 text-xs flex items-center gap-2"><i data-lucide="map-pin" class="w-3.5 h-3.5 text-emerald-500"></i> Kav. Sudirman</p>
                        <p class="text-gray-500 text-xs flex items-center gap-2 font-bold"><i data-lucide="calendar" class="w-3.5 h-3.5 text-[#7C3AED]"></i> Hari Ini, 21:00</p>
                        <div class="flex gap-2 pt-1"><i data-lucide="parking-circle" class="w-4 h-4 text-slate-400/70"></i></div>
                    </div>
                    <div class="bg-gray-50 p-3 rounded-xl border border-gray-100"><p class="text-[10px] text-gray-500 italic">"Night soccer, butuh kiper!"</p></div>
                    <button class="w-full bg-[#7C3AED] text-white py-3.5 rounded-xl font-black text-[10px] hover:bg-purple-700 uppercase">Join Rp 75k</button>
                </div>
            </div>

            <div class="session-card bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group" data-sport="Billiard" data-loc="Sudirman" data-date="Hari Ini">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1544191946-f6d0a7935402?w=600" class="w-full h-full object-cover group-hover:scale-110 duration-500">
                    <span class="absolute top-4 left-4 bg-red-600 text-white text-[9px] font-black px-4 py-1.5 rounded-full uppercase tracking-widest">Billiard</span>
                    <div class="absolute top-4 right-4 bg-black/50 backdrop-blur-md px-3 py-1.5 rounded-xl text-[11px] font-bold text-white flex items-center gap-1.5">
                        <i data-lucide="users" class="w-3.5 h-3.5"></i> 2/4
                    </div>
                </div>
                <div class="p-6 space-y-5 flex-grow">
                    <div class="space-y-2">
                        <h4 class="font-black text-lg text-gray-800 tracking-tight">Cue Masters Billiard</h4>
                        <p class="text-gray-400 text-xs flex items-center gap-2"><i data-lucide="map-pin" class="w-3.5 h-3.5 text-red-500"></i> Plaza Sudirman</p>
                        <p class="text-gray-500 text-xs flex items-center gap-2 font-bold"><i data-lucide="calendar" class="w-3.5 h-3.5 text-[#7C3AED]"></i> Hari Ini, 17:00</p>
                        <div class="flex gap-2 pt-1"><i data-lucide="wind" class="w-4 h-4 text-blue-400/70"></i><i data-lucide="coffee" class="w-4 h-4 text-orange-400/70"></i></div>
                    </div>
                    <div class="bg-gray-50 p-3 rounded-xl border border-gray-100"><p class="text-[10px] text-gray-500 italic">"Latihan bareng, main santai 9-ball."</p></div>
                    <button class="w-full bg-[#7C3AED] text-white py-3.5 rounded-xl font-black text-[10px] hover:bg-purple-700 uppercase">Join Rp 25k</button>
                </div>
            </div>

            <div class="session-card bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group" data-sport="Volleyball" data-loc="Kuningan" data-date="Besok">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1592656670411-2918bb3f725a?w=600" class="w-full h-full object-cover group-hover:scale-110 duration-500">
                    <span class="absolute top-4 left-4 bg-orange-600 text-white text-[9px] font-black px-4 py-1.5 rounded-full uppercase tracking-widest">Volleyball</span>
                    <div class="absolute top-4 right-4 bg-black/50 backdrop-blur-md px-3 py-1.5 rounded-xl text-[11px] font-bold text-white flex items-center gap-1.5">
                        <i data-lucide="users" class="w-3.5 h-3.5"></i> 10/12
                    </div>
                </div>
                <div class="p-6 space-y-5 flex-grow">
                    <div class="space-y-2">
                        <h4 class="font-black text-lg text-gray-800 tracking-tight">Volley Indoor GBK</h4>
                        <p class="text-gray-400 text-xs flex items-center gap-2"><i data-lucide="map-pin" class="w-3.5 h-3.5 text-orange-500"></i> Tennis Indoor GBK</p>
                        <p class="text-gray-500 text-xs flex items-center gap-2 font-bold"><i data-lucide="calendar" class="w-3.5 h-3.5 text-[#7C3AED]"></i> Besok, 16:00</p>
                        <div class="flex gap-2 pt-1"><i data-lucide="wind" class="w-4 h-4 text-blue-400/70"></i></div>
                    </div>
                    <div class="bg-gray-50 p-3 rounded-xl border border-gray-100"><p class="text-[10px] text-gray-500 italic">"Kurang 2 orang buat spiker/tosser."</p></div>
                    <button class="w-full bg-[#7C3AED] text-white py-3.5 rounded-xl font-black text-[10px] hover:bg-purple-700 uppercase">Join Rp 40k</button>
                </div>
            </div>

            <div class="session-card bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group" data-sport="Swimming" data-loc="Senayan" data-date="Hari Ini">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1530541930197-ff16ac917b0e?w=600" class="w-full h-full object-cover group-hover:scale-110 duration-500">
                    <span class="absolute top-4 left-4 bg-sky-500 text-white text-[9px] font-black px-4 py-1.5 rounded-full uppercase tracking-widest">Swimming</span>
                    <div class="absolute top-4 right-4 bg-black/50 backdrop-blur-md px-3 py-1.5 rounded-xl text-[11px] font-bold text-white flex items-center gap-1.5">
                        <i data-lucide="users" class="w-3.5 h-3.5"></i> 5/20
                    </div>
                </div>
                <div class="p-6 space-y-5 flex-grow">
                    <div class="space-y-2">
                        <h4 class="font-black text-lg text-gray-800 tracking-tight">GBK Aquatic Center</h4>
                        <p class="text-gray-400 text-xs flex items-center gap-2"><i data-lucide="map-pin" class="w-3.5 h-3.5 text-sky-500"></i> GBK Senayan</p>
                        <p class="text-gray-500 text-xs flex items-center gap-2 font-bold"><i data-lucide="calendar" class="w-3.5 h-3.5 text-[#7C3AED]"></i> Hari Ini, 15:00</p>
                        <div class="flex gap-2 pt-1"><i data-lucide="thermometer" class="w-4 h-4 text-orange-500/70"></i></div>
                    </div>
                    <div class="bg-gray-50 p-3 rounded-xl border border-gray-100"><p class="text-[10px] text-gray-500 italic">"Latihan renang bareng komunitas."</p></div>
                    <button class="w-full bg-[#7C3AED] text-white py-3.5 rounded-xl font-black text-[10px] hover:bg-purple-700 uppercase">Join Rp 50k</button>
                </div>
            </div>

        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            lucide.createIcons();
            const filterSport = document.getElementById('filterSportOpen'),
                  filterLoc = document.getElementById('filterLocOpen'),
                  filterDate = document.getElementById('filterDateOpen'),
                  cards = document.querySelectorAll('.session-card');

            const applyFilters = () => {
                const sport = filterSport.value, loc = filterLoc.value, date = filterDate.value;
                cards.forEach(card => {
                    const sMatch = sport === "Semua" || card.dataset.sport === sport,
                          lMatch = loc === "Semua" || card.dataset.loc === loc,
                          dMatch = date === "Semua" || card.dataset.date === date;
                    card.style.display = (sMatch && lMatch && dMatch) ? 'flex' : 'none';
                });
            };
            [filterSport, filterLoc, filterDate].forEach(f => f.addEventListener('change', applyFilters));
        });
    </script>
</x-layout>