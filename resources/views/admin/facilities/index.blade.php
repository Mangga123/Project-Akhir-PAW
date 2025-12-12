<x-app-layout>
    <div class="max-w-6xl mx-auto mt-4">
        
        <div class="mb-8">
            <h2 class="text-3xl font-serif text-gray-800">Kelola Jadwal Fasilitas</h2>
            <p class="text-gray-500 mt-2 text-sm">Atur jadwal, batalkan reservasi, atau tetapkan maintenance.</p>
        </div>

        <div class="bg-white p-6 rounded-[30px] shadow-sm border border-[#EBE5E0] mb-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="flex bg-[#F2F0EB] p-1 rounded-2xl">
                <a href="{{ route('admin.facilities.index', ['type' => 'tennis', 'date' => $date]) }}" 
                   class="px-6 py-2 rounded-xl text-sm font-bold transition-all {{ $type == 'tennis' ? 'bg-white text-[#74A88E] shadow-sm' : 'text-gray-400 hover:text-gray-600' }}">
                   🎾 Lapangan Tenis No 2
                </a>
                <a href="{{ route('admin.facilities.index', ['type' => 'pool', 'date' => $date]) }}" 
                   class="px-6 py-2 rounded-xl text-sm font-bold transition-all {{ $type == 'pool' ? 'bg-white text-[#74A88E] shadow-sm' : 'text-gray-400 hover:text-gray-600' }}">
                   🏊 Kolam Renang No 2
                </a>
            </div>

            <form action="{{ route('admin.facilities.index') }}" method="GET" class="flex items-center gap-2">
                <input type="hidden" name="type" value="{{ $type }}">
                <label class="text-xs font-bold text-gray-400 uppercase">Tanggal:</label>
                <input type="date" name="date" value="{{ $date }}" onchange="this.form.submit()" 
                       class="border-gray-300 rounded-xl text-sm focus:border-[#74A88E] focus:ring-[#74A88E] text-gray-600">
            </form>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
            @for ($hour = 6; $hour <= 21; $hour++)
                @php
                    $booking = $bookings[$hour] ?? null;
                    $isBooked = $booking !== null;
                    $isMaintenance = $isBooked && $booking->user->isAdmin(); // Cek apakah yang booking admin
                    
                    $timeLabel = sprintf("%02d:00 - %02d:00", $hour, $hour + 1);
                @endphp

                <div class="relative rounded-2xl p-3 border transition-all duration-300 flex flex-col justify-between text-center h-40
                    {{-- KONDISI 1: MAINTENANCE (Admin) --}}
                    @if($isMaintenance)
                        bg-[#E07A5F] border-[#E07A5F] text-white
                    {{-- KONDISI 2: BOOKING WARGA --}}
                    @elseif($isBooked)
                        bg-[#74A88E] border-[#74A88E] text-white
                    {{-- KONDISI 3: KOSONG --}}
                    @else
                        bg-white border-[#EBE5E0] hover:border-gray-300
                    @endif
                ">
                    
                    <span class="text-xs font-bold mb-1 block {{ $isBooked ? 'text-white/80' : 'text-gray-400' }}">
                        {{ $timeLabel }}
                    </span>

                    @if($isMaintenance)
                        <div class="flex-1 flex flex-col justify-center items-center">
                            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                            <span class="text-xs font-bold uppercase tracking-wide">Maintenance</span>
                        </div>
                        <form action="{{ route('admin.facilities.destroy', $booking->id) }}" method="POST">
                            @csrf @method('DELETE')
                            <button class="w-full bg-white/20 hover:bg-white/30 text-white text-[10px] font-bold py-1.5 rounded-lg transition">
                                Selesai
                            </button>
                        </form>

                    @elseif($isBooked)
                        <div class="flex-1 flex flex-col justify-center items-center">
                            <svg class="w-5 h-5 mb-1 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            <span class="text-xs font-semibold truncate w-full px-1">{{ $booking->user->name }}</span>
                            <span class="text-[10px] text-white/70">Warga</span>
                        </div>
                        <form action="{{ route('admin.facilities.destroy', $booking->id) }}" method="POST">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Batalkan booking ini?')" class="w-full bg-red-600/80 hover:bg-red-600 text-white text-[10px] font-bold py-1.5 rounded-lg transition">
                                Hapus
                            </button>
                        </form>

                    @else
                        <div class="flex-1 flex flex-col justify-center items-center">
                            <span class="text-xs text-gray-400">Kosong</span>
                        </div>
                        <form action="{{ route('admin.facilities.maintenance') }}" method="POST">
                            @csrf
                            <input type="hidden" name="facility_type" value="{{ $type }}">
                            <input type="hidden" name="date" value="{{ $date }}">
                            <input type="hidden" name="start_hour" value="{{ $hour }}">
                            
                            <button type="submit" class="w-full bg-gray-100 hover:bg-gray-200 text-gray-500 text-[10px] font-bold py-1.5 rounded-lg transition border border-gray-200">
                                Maintenance
                            </button>
                        </form>
                    @endif

                </div>
            @endfor
        </div>
        
        <div class="mt-8 flex justify-center gap-6 text-xs text-gray-500">
            <div class="flex items-center gap-2"><span class="w-3 h-3 rounded-full bg-[#74A88E]"></span> Booking Warga</div>
            <div class="flex items-center gap-2"><span class="w-3 h-3 rounded-full bg-[#E07A5F]"></span> Sedang Maintenance</div>
            <div class="flex items-center gap-2"><span class="w-3 h-3 rounded-full bg-white border border-gray-300"></span> Kosong</div>
        </div>

    </div>
</x-app-layout>