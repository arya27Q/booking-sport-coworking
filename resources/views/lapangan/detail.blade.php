<x-layout>
    <div class="flex flex-col lg:flex-row items-start gap-8 animate-in fade-in duration-700">
        <aside class="w-full lg:w-72 flex-shrink-0 sticky top-24">
            <div class="bg-white rounded-[2.5rem] p-8 border border-gray-100 shadow-sm">
                <h3 class="font-black text-xl text-gray-800 flex items-center gap-2 mb-8"><i data-lucide="filter" class="w-5 h-5 text-[#7C3AED]"></i> Filter</h3>
                
                <div class="space-y-4 mb-8">
                    <label class="text-[10px] font-black uppercase text-gray-400">Jenis Olahraga</label>
                    <select id="filterSport" class="w-full bg-gray-50 border-none rounded-2xl py-3.5 px-4 text-sm font-bold text-gray-700 focus:ring-2 focus:ring-[#7C3AED]/20 appearance-none cursor-pointer">
                        <option value="Semua">Semua</option>
                        @foreach(['Futsal', 'Badminton', 'Basketball', 'Tennis', 'Mini Soccer', 'Volleyball', 'Swimming', 'Billiard'] as $sport)
                            <option value="{{ $sport }}">{{ $sport }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="space-y-4 mb-8">
                    <div class="flex justify-between items-center">
                        <label class="text-[10px] font-black uppercase text-gray-400">Harga Maksimal</label>
                        <span id="priceDisplay" class="text-[10px] font-black text-[#7C3AED] bg-[#7C3AED]/10 px-2 py-1 rounded-lg">Rp 500.000</span>
                    </div>
                    <input type="range" id="priceRange" min="0" max="500000" step="10000" value="500000" class="w-full h-1.5 bg-gray-100 rounded-lg appearance-none cursor-pointer accent-[#7C3AED]">
                </div>

                <div class="space-y-4">
                    <label class="text-[10px] font-black uppercase text-gray-400">Fasilitas</label>
                    <div class="space-y-3">
                        @foreach(['AC' => ['wind', 'text-blue-400'], 'WiFi' => ['wifi', 'text-purple-400'], 'Kantin' => ['coffee', 'text-orange-400'], 'Parkir' => ['parking-circle', 'text-emerald-400']] as $label => $info)
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="checkbox" value="{{ $label }}" class="facility-checkbox w-5 h-5 rounded-lg border-gray-200 text-[#7C3AED] focus:ring-[#7C3AED]/20">
                            <span class="flex items-center gap-2 text-sm font-bold text-gray-600 group-hover:text-[#7C3AED]">
                                <i data-lucide="{{ $info[0] }}" class="w-4 h-4 {{ $info[1] }}"></i> {{ $label }}
                            </span>
                        </label>
                        @endforeach
                    </div>
                </div>
                <button id="resetFilter" class="w-full text-center text-xs font-bold text-[#7C3AED] hover:underline pt-6 mt-6 border-t border-gray-50 uppercase">Reset Filter</button>
            </div>
        </aside>

        <div class="flex-1 space-y-8">
            <div class="flex justify-between items-center">
                <h2 class="text-3xl font-black text-gray-900 tracking-tighter uppercase">Venue Jakarta</h2>
                <select id="sortOrder" class="bg-white border border-gray-100 rounded-2xl py-3 px-5 text-sm font-bold shadow-sm focus:ring-2 focus:ring-[#7C3AED]/20 appearance-none cursor-pointer">
                    <option value="rekomendasi">Rekomendasi</option>
                    <option value="rendah">Harga Terendah</option>
                    <option value="tinggi">Harga Tertinggi</option>
                </select>
            </div>

            <div id="venueGrid" class="grid grid-cols-1 md:grid-cols-2 gap-8 pb-20">
                @php
                    $venues = [
                        ['name' => 'Futsal Pro Arena', 'price' => 150000, 'sport' => 'Futsal', 'loc' => 'Sudirman Pusat', 'img' => 'https://images.unsplash.com/photo-1763775594018-4a84eeadd83d?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDZ8fGZ1dHNhbHxlbnwwfHwwfHx8MA%3D%3D', 'fac' => 'AC,Parkir'],
                        ['name' => 'Elite Hoops GBK', 'price' => 200000, 'sport' => 'Basketball', 'loc' => 'Hall Basket Senayan', 'img' => 'https://plus.unsplash.com/premium_photo-1675366166956-8f5786a081b9?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzN8fGZ1dHNhbHxlbnwwfHwwfHx8MA%3D%3D', 'fac' => 'WiFi,Kantin'],
                        ['name' => 'Senayan Turf Arena', 'price' => 450000, 'sport' => 'Mini Soccer', 'loc' => 'ABC Senayan', 'img' => 'https://static.vecteezy.com/system/resources/previews/023/638/627/large_2x/aerial-view-of-the-beautiful-scenery-of-senayan-stadium-with-noise-cloud-background-jakarta-indonesia-august-23-2022-free-photo.JPG', 'fac' => 'Parkir,Kantin'],
                        ['name' => 'GBK Aquatic Center', 'price' => 50000, 'sport' => 'Swimming', 'loc' => 'Stadion Renang GBK', 'img' => 'https://th.bing.com/th/id/OIP.PDMFkrNkHlYIOmSHznZLQwHaEo?w=292&h=182&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3', 'fac' => 'WiFi,Parkir'],
                        ['name' => 'Cue Masters Plaza', 'price' => 80000, 'sport' => 'Billiard', 'loc' => 'Plaza Senayan', 'img' => 'https://s3-media0.fl.yelpcdn.com/bphoto/qgv-O-lS563YJ9NAfrdTHA/o.jpg', 'fac' => 'AC,WiFi,Kantin'],
                        ['name' => 'Istora Smash Hall', 'price' => 120000, 'sport' => 'Badminton', 'loc' => 'Komplek Istora', 'img' => 'https://images.unsplash.com/photo-1626224583764-f87db24ac4ea?auto=format&fit=crop&q=80&w=600', 'fac' => 'Kantin,Parkir'],
                        ['name' => 'Volley Indoor GBK', 'price' => 180000, 'sport' => 'Volleyball', 'loc' => 'Tennis Indoor GBK', 'img' => 'https://images.unsplash.com/photo-1592656670411-2918bb3f725a?w=600', 'fac' => 'WiFi,Parkir'],
                        ['name' => 'Senayan Hard Court', 'price' => 110000, 'sport' => 'Tennis', 'loc' => 'Outdoor Senayan', 'img' => 'https://images.unsplash.com/photo-1595435934249-5df7ed86e1c0?w=600', 'fac' => 'Parkir,AC']
                    ];

                    $iconMap = ['AC' => ['wind', 'text-blue-400'], 'WiFi' => ['wifi', 'text-purple-400'], 'Kantin' => ['coffee', 'text-orange-400'], 'Parkir' => ['parking-circle', 'text-emerald-400']];
                @endphp

                @foreach($venues as $v)
                <div class="venue-card bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm group hover:shadow-xl transition-all" 
                     data-price="{{ $v['price'] }}" data-sport="{{ $v['sport'] }}" data-facilities="{{ $v['fac'] }}" data-rating="4.8">
                    <div class="relative h-52 overflow-hidden">
                        <img src="{{ $v['img'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1.5 rounded-2xl text-[11px] font-black">★ 4.8</div>
                    </div>
                    <div class="p-6 space-y-4">
                        <h4 class="font-bold text-xl text-gray-800">{{ $v['name'] }}</h4> 
                        <p class="text-gray-400 text-sm italic">{{ $v['loc'] }}</p>
                        
                        <div class="flex flex-wrap gap-2">
                            @foreach(explode(',', $v['fac']) as $f)
                                @if(isset($iconMap[$f]))
                                <span class="bg-slate-50 px-2 py-1 rounded-lg text-[9px] font-black text-slate-500 border border-slate-100 uppercase flex items-center gap-1">
                                    <i data-lucide="{{ $iconMap[$f][0] }}" class="w-3 h-3 {{ $iconMap[$f][1] }}"></i> {{ $f }}
                                </span>
                                @endif
                            @endforeach
                        </div>

                        <div class="flex justify-between items-center pt-4 border-t border-gray-50">
                            <p class="text-[#7C3AED] font-black text-lg">Rp {{ number_format($v['price'], 0, ',', '.') }}</p> 
                            <button class="bg-[#4F46E5] text-white px-6 py-2.5 rounded-2xl text-sm font-bold active:scale-95 shadow-lg uppercase tracking-widest">Booking</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            lucide.createIcons();
            const priceRange = document.getElementById('priceRange'), priceDisplay = document.getElementById('priceDisplay'), 
                  filterSport = document.getElementById('filterSport'), sortOrder = document.getElementById('sortOrder'),
                  venueGrid = document.getElementById('venueGrid'), resetBtn = document.getElementById('resetFilter'),
                  checkboxes = document.querySelectorAll('.facility-checkbox');

            const updateUI = () => {
                const cards = Array.from(document.querySelectorAll('.venue-card')), maxPrice = parseInt(priceRange.value),
                      selectedSport = filterSport.value, sortBy = sortOrder.value,
                      selectedFacs = Array.from(checkboxes).filter(cb => cb.checked).map(cb => cb.value);

                cards.forEach(card => {
                    const price = parseInt(card.dataset.price), sport = card.dataset.sport,
                          facs = card.dataset.facilities.split(','),
                          match = price <= maxPrice && (selectedSport === "Semua" || sport === selectedSport) && selectedFacs.every(f => facs.includes(f));
                    card.style.display = match ? 'block' : 'none';
                });

                let visible = cards.filter(c => c.style.display !== 'none');
                visible.sort((a, b) => sortBy === 'rendah' ? a.dataset.price - b.dataset.price : b.dataset.price - a.dataset.price);
                visible.forEach(card => venueGrid.appendChild(card));
            };

            priceRange.addEventListener('input', e => {
                priceDisplay.innerText = `Rp ${parseInt(e.target.value).toLocaleString('id-ID')}`;
                updateUI();
            });
            [filterSport, sortOrder].forEach(el => el.addEventListener('change', updateUI));
            checkboxes.forEach(cb => cb.addEventListener('change', updateUI));
            resetBtn.addEventListener('click', () => { location.reload(); });
        });
    </script>
</x-layout>