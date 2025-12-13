<x-app-layout>
    <div class="max-w-7xl mx-auto mt-4">
        
        <div class="flex flex-col md:flex-row justify-between items-end mb-8 gap-4">
            <div>
                <h2 class="text-3xl font-bold text-gray-800 tracking-tight">Kelola Tagihan Bulanan</h2>
                <p class="text-gray-500 mt-2 text-sm">Pantau status pembayaran dan kelola tagihan penghuni.</p>
            </div>
            
            <a href="{{ route('admin.bills.create') }}" class="flex items-center gap-2 bg-[#74A88E] hover:bg-[#5e8f76] text-white font-bold py-3 px-6 rounded-xl shadow-sm transition transform hover:-translate-y-0.5">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Buat Tagihan Baru
            </a>
        </div>

        <div class="bg-white rounded-[20px] shadow-sm border border-[#EBE5E0] overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-[#F9F9F7] text-gray-500 text-xs uppercase tracking-wider border-b border-[#EBE5E0]">
                            <th class="p-6 font-bold">Unit & Penghuni</th>
                            <th class="p-6 font-bold">Periode</th>
                            <th class="p-6 font-bold">Total</th>
                            <th class="p-6 font-bold text-center">Status</th>
                            <th class="p-6 font-bold">Bukti Bayar</th>
                            <th class="p-6 font-bold text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#F5F0EB]">
                        @forelse ($bills as $bill)
                        <tr class="hover:bg-[#FAFAFA] transition duration-200">
                            
                            <td class="p-6">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-[#E6F4EA] flex items-center justify-center text-[#74A88E] font-bold text-xs">
                                        {{ $bill->resident->unit->unit_number ?? '?' }}
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-800">Unit {{ $bill->resident->unit->unit_number ?? '-' }}</p>
                                        <p class="text-xs text-gray-500">{{ $bill->resident->user->name ?? 'Tidak Diketahui' }}</p>
                                    </div>
                                </div>
                            </td>

                            <td class="p-6">
                                <span class="text-sm font-medium text-gray-700">{{ $bill->month }}</span>
                                <p class="text-[13px] text-gray-400 mt-1">Jatuh Tempo: {{ \Carbon\Carbon::parse($bill->due_date)->format('d M Y') }}</p>
                            </td>

                            <td class="p-6">
                                <span class="text-lg font-bold text-gray-800">Rp {{ number_format($bill->amount, 0, ',', '.') }}</span>
                            </td>

                            <td class="p-6 text-center">
                                @if($bill->status == 'Lunas')
                                    <span class="px-3 py-1 rounded-full text-[13px] font-bold bg-[#E6F4EA] text-[#1E4620] border border-[#CEEAD6]">
                                        Lunas
                                    </span>
                                @elseif($bill->status == 'Menunggu Konfirmasi')
                                    <span class="px-3 py-1 rounded-full text-[10px] font-bold bg-[#FFF7ED] text-[#9A3412] border border-[#FFEDD5]">
                                        Verifikasi
                                    </span>
                                @else
                                    <span class="px-3 py-1 rounded-full text-[10px] font-bold bg-[#FEF2F2] text-[#991B1B] border border-[#FEE2E2]">
                                        Belum Bayar
                                    </span>
                                @endif
                            </td>

                            <td class="p-6">
                                @if($bill->payment)
                                    <div class="flex flex-col items-start gap-1">
                                        <a href="{{ asset('storage/' . $bill->payment->proof_image) }}" target="_blank" class="flex items-center gap-1 text-xs font-bold text-[#74A88E] hover:underline hover:text-[#5e8f76]">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                            Lihat Foto
                                        </a>
                                        <span class="text-[10px] text-gray-400">Tgl: {{ $bill->payment->payment_date }}</span>
                                        
                                        @if($bill->status == 'Menunggu Konfirmasi')
                                            <form action="{{ route('admin.bills.confirm', $bill->id) }}" method="POST" class="mt-2">
                                                @csrf
                                                <button type="submit" class="bg-[#74A88E] text-white px-3 py-1 rounded text-[10px] font-bold hover:bg-[#5e8f76] transition shadow-sm">
                                                    ✔ Terima
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                @else
                                    <span class="text-xs text-gray-400 italic">- Belum upload -</span>
                                @endif
                            </td>

                            <td class="p-6 text-center">
                                <form action="{{ route('admin.bills.destroy', $bill->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus tagihan ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-400 hover:text-red-600 font-bold text-xs transition flex items-center justify-center gap-1 mx-auto">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                        Hapus
                                    </button>
                                </form>
                            </td>

                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="p-12 text-center text-gray-400">
                                <div class="flex flex-col items-center justify-center">
                                    <svg class="w-12 h-12 mb-3 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                                    <p>Belum ada data tagihan.</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            @if(method_exists($bills, 'links'))
            <div class="p-4 bg-[#F9F9F7] border-t border-[#EBE5E0]">
                {{ $bills->links() }}
            </div>
            @endif
        </div>

    </div>
</x-app-layout>