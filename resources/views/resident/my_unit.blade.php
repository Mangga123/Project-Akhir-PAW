<x-app-layout>
    <div class="max-w-5xl mx-auto mt-4">
        
        <div class="mb-8">
            <h2 class="text-3xl font-serif text-gray-800">Unit Hunian Saya</h2>
            <p class="text-gray-500 mt-2 text-sm">Detail informasi mengenai apartemen yang Anda tempati saat ini.</p>
        </div>

        @php
            $resident = Auth::user()->resident;
        @endphp

        @if($resident && $resident->unit)
            <div class="bg-white rounded-[40px] shadow-sm border border-[#D6D4D0] overflow-hidden flex flex-col md:flex-row">
                
                <div class="md:w-1/2 h-64 md:h-auto relative overflow-hidden">
                    <img src="https://i.pinimg.com/736x/75/0e/e1/750ee1377fdd80c8697ca45ab8ac16bf.jpg" 
                         alt="Interior Kamar" 
                         class="absolute inset-0 w-full h-full object-cover hover:scale-105 transition duration-700 ease-in-out">
                    
                    <div class="absolute top-6 left-6 bg-white/90 backdrop-blur-md px-4 py-2 rounded-full shadow-lg">
                        <span class="text-[#74A88E] font-bold text-xs tracking-wider uppercase">Status: Dihuni</span>
                    </div>
                </div>

                <div class="md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                    
                    <div class="mb-6">
                        <p class="text-gray-400 text-xs font-bold tracking-widest uppercase mb-2">Nomor Unit</p>
                        <h1 class="text-5xl font-serif text-gray-800">
                            {{ $resident->unit->unit_number }}
                        </h1>
                    </div>

                    <div class="grid grid-cols-2 gap-8 mb-8">
                        <div>
                            <p class="text-gray-400 text-xs font-bold tracking-widest uppercase mb-1">Tipe Unit</p>
                            <p class="text-xl font-medium text-gray-700">{{ $resident->unit->type }}</p>
                        </div>
                        <div>
                            <p class="text-gray-400 text-xs font-bold tracking-widest uppercase mb-1">Lokasi Tower</p>
                            <p class="text-xl font-medium text-gray-700">Tower {{ $resident->unit->tower }}</p>
                        </div>
                        <div>
                            <p class="text-gray-400 text-xs font-bold tracking-widest uppercase mb-1">Lantai</p>
                            <p class="text-xl font-medium text-gray-700">Lantai {{ $resident->unit->floor }}</p>
                        </div>
                        <div>
                            <p class="text-gray-400 text-xs font-bold tracking-widest uppercase mb-1">Mulai Huni</p>
                            <p class="text-xl font-medium text-gray-700">{{ \Carbon\Carbon::parse($resident->start_date)->format('d M Y') }}</p>
                        </div>
                    </div>

                    <div class="border-t border-gray-100 pt-6">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-[#F2F0EB] flex items-center justify-center text-[#74A88E]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400 font-bold uppercase">Penghuni Terdaftar</p>
                                <p class="text-lg font-serif text-gray-800">{{ Auth::user()->name }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        @else
            <div class="bg-white rounded-[40px] p-12 text-center border border-[#D6D4D0] shadow-sm">
                <div class="w-20 h-20 bg-[#F2F0EB] rounded-full flex items-center justify-center mx-auto mb-6 text-[#74A88E]">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
                <h3 class="text-2xl font-serif text-gray-800 mb-2">Belum Ada Unit</h3>
                <p class="text-gray-500 max-w-md mx-auto">
                    Data unit hunian Anda belum terhubung. Silakan hubungi admin untuk verifikasi kepemilikan unit.
                </p>
            </div>
        @endif

    </div>
</x-app-layout>