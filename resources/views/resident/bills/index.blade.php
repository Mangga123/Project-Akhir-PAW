<x-app-layout>
    <div class="max-w-6xl mx-auto mt-4">
        
        <div class="mb-10">
            <h2 class="text-3xl font-serif text-gray-800">Tagihan Saya</h2>
            <p class="text-gray-500 mt-2 text-sm leading-relaxed max-w-xl">
                Kelola pembayaran hunian Anda dengan nyaman. Semua riwayat tercatat rapi di sini.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            @forelse ($bills as $bill)
            <div class="bg-white rounded-[30px] shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-[#EBE5E0] overflow-hidden flex flex-col transition-all duration-500 hover:-translate-y-1 hover:shadow-[0_20px_40px_rgb(0,0,0,0.06)] group">
                
                <div class="p-8 flex-1">
                    <div class="flex justify-between items-start mb-6">
                        <div>
                            <p class="text-xs font-bold tracking-widest text-[#74A88E] uppercase mb-1">Periode</p>
                            <h3 class="text-2xl font-serif text-gray-900">{{ $bill->month }}</h3>
                        </div>

                        @if($bill->status == 'Lunas')
                            <span class="px-4 py-1.5 rounded-full text-[10px] font-bold bg-[#E6F4EA] text-[#1E4620] tracking-wide border border-[#CEEAD6]">
                                LUNAS
                            </span>
                        @elseif($bill->status == 'Menunggu Konfirmasi')
                            <span class="px-4 py-1.5 rounded-full text-[10px] font-bold bg-[#FFF7ED] text-[#9A3412] tracking-wide border border-[#FFEDD5]">
                                DIPROSES
                            </span>
                        @else
                            <span class="px-4 py-1.5 rounded-full text-[10px] font-bold bg-[#FEF2F2] text-[#991B1B] tracking-wide border border-[#FEE2E2]">
                                BELUM BAYAR
                            </span>
                        @endif
                    </div>

                    <div class="w-full h-px bg-[#F0EBE6] my-6"></div>
                    
                    <div class="space-y-3">
                        <div class="flex justify-between items-center text-sm text-gray-500">
                            <span>Jatuh Tempo</span>
                            <span class="{{ $bill->status == 'Belum Dibayar' ? 'text-[#991B1B] font-medium' : 'text-gray-400' }}">
                                {{ \Carbon\Carbon::parse($bill->due_date)->format('d M Y') }}
                            </span>
                        </div>
                        <div class="flex justify-between items-end">
                            <span class="text-sm text-gray-500">Total Tagihan</span>
                            <span class="text-2xl font-bold text-gray-800">Rp {{ number_format($bill->amount, 0, ',', '.') }}</span>
                        </div>
                    </div>
                </div>

                <div class="p-4 bg-[#F9F8F6] border-t border-[#F0EBE6]">
                    @if($bill->status == 'Belum Dibayar')
                        <a href="{{ route('resident.payments.create', $bill->id) }}" class="flex items-center justify-center w-full bg-[#74A88E] hover:bg-[#5e8f76] text-white font-medium py-3.5 px-4 rounded-2xl shadow-sm transition-all duration-300 gap-2 group-hover:shadow-md hover:scale-[1.02]">
                            <span>Bayar Sekarang</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    @elseif($bill->status == 'Menunggu Konfirmasi')
                        <button disabled class="flex items-center justify-center w-full bg-[#FFF7ED] text-[#9A3412] font-medium py-3.5 px-4 rounded-2xl cursor-not-allowed border border-[#FFEDD5] gap-2 opacity-70">
                            <svg class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                            Verifikasi Admin
                        </button>
                    @else
                        <button disabled class="flex items-center justify-center w-full bg-[#E6F4EA] text-[#1E4620] font-medium py-3.5 px-4 rounded-2xl cursor-default border border-[#CEEAD6] gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Pembayaran Selesai
                        </button>
                    @endif
                </div>
            </div>
            @empty
            <div class="col-span-1 md:col-span-3 flex flex-col items-center justify-center py-20 bg-white rounded-[40px] border-2 border-dashed border-[#D6D4D0] text-center">
                <div class="w-24 h-24 bg-[#F2F0EB] rounded-full flex items-center justify-center mb-6 text-[#74A88E]">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-2xl font-serif text-gray-800 mb-2">Semua Beres!</h3>
                <p class="text-gray-500 max-w-md">Tidak ada tagihan aktif yang perlu dibayar saat ini. Nikmati hari Anda di Realty.</p>
            </div>
            @endforelse

        </div>
    </div>
</x-app-layout>