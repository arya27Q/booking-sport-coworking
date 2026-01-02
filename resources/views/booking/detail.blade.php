@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto">
    <a href="#" class="flex items-center text-gray-500 mb-6 hover:text-purple-600 transition">
        <span class="mr-2">←</span> Kembali ke Daftar Lapangan
    </a>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2 space-y-6">
            
            <div class="bg-white rounded-3xl p-4 shadow-sm border border-gray-100 flex gap-6">
                <img src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?auto=format&fit=crop&q=80&w=400" class="w-40 h-40 object-cover rounded-2xl" alt="Lp Futsal">
                <div class="flex flex-col justify-between py-2">
                    <div>
                        <h2 class="text-2xl font-black text-gray-800 tracking-tight">Badminton Arena Premium</h2>
                        <p class="text-gray-400 text-sm">📍 Kemang Sports Hub</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-yellow-400">★</span>
                        <span class="font-bold text-gray-700">4.7</span>
                        <span class="text-gray-300 text-xs">(245 reviews)</span>
                    </div>
                    <p class="text-purple-600 font-bold text-xl">Rp 120.000 <span class="text-gray-400 text-xs font-normal">/ jam</span></p>
                </div>
            </div>

            <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">
                <h3 class="font-bold text-gray-800 mb-6">Pilih Jam</h3>
                <div class="grid grid-cols-3 md:grid-cols-6 gap-3">
                    @php 
                        $hours = ['14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00'];
                    @endphp
                    @foreach($hours as $hour)
                        <button class="flex flex-col items-center justify-center p-3 rounded-2xl border border-gray-100 hover:border-purple-500 transition-all {{ $hour == '16:00' || $hour == '17:00' ? 'bg-purple-500 text-white border-purple-600 shadow-md' : 'bg-white text-gray-500' }}">
                            <span class="text-xs font-bold">{{ $hour }}</span>
                        </button>
                    @endforeach
                </div>
            </div>

            <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">
                <h3 class="font-bold text-gray-800 mb-6">Tambahan (Opsional)</h3>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-4 rounded-2xl border border-gray-50">
                        <div>
                            <p class="font-bold text-gray-700">Sewa Sepatu</p>
                            <p class="text-xs text-gray-400">Rp 25.000 / pasang</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <button class="w-8 h-8 rounded-lg bg-gray-100 text-gray-500">-</button>
                            <span class="font-bold">0</span>
                            <button class="w-8 h-8 rounded-lg bg-purple-600 text-white">+</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:col-span-1">
            <div class="sticky top-24 bg-white rounded-3xl p-6 shadow-sm border border-gray-100 space-y-6">
                <h3 class="font-bold text-xl text-gray-800">Ringkasan Booking</h3>
                <div class="space-y-3">
                    <div class="flex justify-between text-sm"><span class="text-gray-400">Tanggal</span><span class="font-bold">10 Jan 2026</span></div>
                    <div class="flex justify-between text-sm"><span class="text-gray-400">Layanan (2 jam)</span><span class="font-bold text-purple-600">Rp 240.000</span></div>
                    <hr class="border-dashed">
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-gray-800">Total</span>
                        <span class="text-2xl font-black text-purple-700 tracking-tighter">Rp 240.000</span>
                    </div>
                </div>
                <button class="w-full bg-[#7C3AED] hover:bg-purple-700 text-white font-bold py-4 rounded-2xl transition shadow-lg shadow-purple-100">
                    Lanjut ke Pembayaran
                </button>
            </div>
        </div>
    </div>
</div>
@endsection