<x-app-layout>
    <div class="max-w-5xl mx-auto mt-4">
        
        <div class="mb-8">
            <h2 class="text-3xl font-serif text-gray-800">Reservasi Fasilitas</h2>
            <p class="text-gray-500 mt-2 text-sm">Pilih fasilitas dan waktu yang Anda inginkan.</p>
        </div>

        <div class="bg-white p-6 rounded-[30px] shadow-sm border border-[#EBE5E0] mb-8 flex flex-col md:flex-row justify-between items-center gap-4">
            
            <div class="flex bg-[#F2F0EB] p-1 rounded-2xl">
                <a href="{{ route('resident.facility.booking', ['type' => 'tennis', 'date' => $date]) }}" 
                   class="px-6 py-2 rounded-xl text-sm font-bold transition-all {{ $type == 'tennis' ? 'bg-white text-[#74A88E] shadow-sm' : 'text-gray-400 hover:text-gray-600' }}">
                   🎾 Lapangan Tenis Lapangan no 2
                </a>
                <a href="{{ route('resident.facility.booking', ['type' => 'pool', 'date' => $date]) }}" 
                   class="px-6 py-2 rounded-xl text-sm font-bold transition-all {{ $type == 'pool' ? 'bg-white text-[#74A88E] shadow-sm' : 'text-gray-400 hover:text-gray-600' }}">
                   🏊 Kolam Renang Lapangan no 2
                </a>
            </div>

            <form action="{{ route('resident.facility.booking') }}" method="GET" class="flex items-center gap-2">
                <input type="hidden" name="type" value="{{ $type }}">
                <label class="text-xs font-bold text-gray-400 uppercase">Tanggal:</label>
                <input type="date" name="date" value="{{ $date }}" onchange="this.form.submit()" 
                       class="border-gray-300 rounded-xl text-sm focus:border-[#74A88E] focus:ring-[#74A88E] text-gray-600">
            </form>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
            @for ($hour = 6; $hour <= 21; $hour++)
                @php
                    $isBooked = isset($bookings[$hour]);
                    $myBooking = $isBooked && $bookings[$hour]->user_id == Auth::id();
                    $otherBooking = $isBooked && !$myBooking;
                    
                    // Format Jam (08:00 - 09:00)
                    $timeLabel = sprintf("%02d:00 - %02d:00", $hour, $hour + 1);
                @endphp

                <div class="relative rounded-2xl p-4 border transition-all duration-300 flex flex-col justify-center items-center text-center h-32
                    {{-- KONDISI 1: BOOKING SAYA (HIJAU MUDA) --}}
                    @if($myBooking)
                        bg-[#74A88E] border-[#74A88E] text-white shadow-md
                    
                    {{-- KONDISI 2: BOOKING ORANG LAIN (MERAH AUTUMN) --}}
                    @elseif($otherBooking)
                        bg-[#E07A5F] border-[#E07A5F] text-white cursor-not-allowed opacity-90
                    
                    {{-- KONDISI 3: KOSONG (PUTIH) --}}
                    @else
                        bg-white border-[#EBE5E0] hover:border-[#74A88E] hover:shadow-md cursor-pointer group
                    @endif
                ">
                    
                    <span class="text-xs font-bold mb-2 {{ $isBooked ? 'text-white/80' : 'text-gray-400 group-hover:text-[#74A88E]' }}">
                        {{ $timeLabel }}
                    </span>

                    @if($myBooking)
                        <span class="text-sm font-bold flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Booked
                        </span>
                        <form action="{{ route('resident.facility.destroy', $bookings[$hour]->id) }}" method="POST" class="mt-2">
                            @csrf @method('DELETE')
                            <button class="text-[10px] bg-white/20 hover:bg-white/30 px-2 py-1 rounded text-white transition">Batal</button>
                        </form>

                    @elseif($otherBooking)
                        <span class="text-sm font-bold flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                            Terisi
                        </span>
                        <span class="text-[10px] text-white/70 mt-1">oleh Penghuni Lain</span>

                    @else
                        <form action="{{ route('resident.facility.store') }}" method="POST" class="w-full">
                            @csrf
                            <input type="hidden" name="facility_type" value="{{ $type }}">
                            <input type="hidden" name="date" value="{{ $date }}">
                            <input type="hidden" name="start_hour" value="{{ $hour }}">
                            
                            <button type="submit" class="text-sm font-bold text-gray-600 group-hover:text-[#74A88E] transition">
                                Available
                            </button>
                        </form>
                    @endif

                </div>
            @endfor
        </div>

        <div class="mt-8 flex gap-6 justify-center">
            <div class="flex items-center gap-2">
                <div class="w-4 h-4 rounded bg-white border border-gray-300"></div>
                <span class="text-xs text-gray-500">Tersedia</span>
            </div>
            <div class="flex items-center gap-2">
                <div class="w-4 h-4 rounded bg-[#74A88E]"></div>
                <span class="text-xs text-gray-500">Punya Saya</span>
            </div>
            <div class="flex items-center gap-2">
                <div class="w-4 h-4 rounded bg-[#E07A5F]"></div> <span class="text-xs text-gray-500">Terisi (Orang Lain)</span>
            </div>
        </div>

    </div>
</x-app-layout>