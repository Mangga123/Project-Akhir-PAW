<x-app-layout>
    <div class="max-w-7xl mx-auto mt-4">
        
        <div class="flex flex-col md:flex-row justify-between items-end mb-8 gap-4">
            <div>
                <h2 class="text-3xl font-bold text-gray-800 tracking-tight">Laporan Masuk</h2>
                <p class="text-gray-500 mt-2 text-base">Daftar keluhan dan permintaan perbaikan dari penghuni.</p>
            </div>
        </div>

        <div class="bg-white rounded-[20px] shadow-sm border border-[#EBE5E0] overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-[#F9F9F7] text-gray-600 text-sm font-bold uppercase tracking-wider border-b border-[#EBE5E0]">
                            <th class="p-6">Tgl & Pelapor</th>
                            <th class="p-6 w-1/3">Detail Masalah</th>
                            <th class="p-6">Foto Bukti</th>
                            <th class="p-6 text-center">Status Saat Ini</th>
                            <th class="p-6 text-center">Update Tindakan</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#F5F0EB]">
                        @forelse ($complaints as $complaint)
                        <tr class="hover:bg-[#FAFAFA] transition duration-200">
                            
                            <td class="p-6 align-top">
                                <div class="flex flex-col gap-1">
                                    <span class="text-xs font-bold tracking-wide text-[#74A88E] uppercase">
                                        {{ $complaint->created_at->format('d M Y') }}
                                    </span>
                                    <p class="font-bold text-gray-800 text-base">{{ $complaint->resident->user->name ?? 'User Hapus' }}</p>
                                    <div class="flex items-center gap-1 mt-1">
                                        <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2.5 py-1 rounded border border-gray-200">
                                            Unit {{ $complaint->resident->unit->unit_number ?? '-' }}
                                        </span>
                                    </div>
                                </div>
                            </td>

                            <td class="p-6 align-top">
                                <h4 class="font-bold text-gray-800 text-base mb-2">{{ $complaint->title }}</h4>
                                <p class="text-sm text-gray-600 leading-relaxed text-justify">{{ $complaint->description }}</p>
                            </td>

                            <td class="p-6 align-top">
                                @if($complaint->image)
                                    <a href="{{ asset('complaints/' . $complaint->image) }}" target="_blank" class="inline-flex items-center gap-2 text-sm font-bold text-[#74A88E] hover:text-[#5e8f76] group bg-[#F2F9F5] px-4 py-2.5 rounded-lg border border-[#CEEAD6] transition-colors hover:bg-[#E6F4EA]">
                                        <svg class="w-5 h-5 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        Lihat Foto
                                    </a>
                                @else
                                    <span class="text-sm text-gray-400 italic flex items-center gap-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path></svg>
                                        Tidak ada
                                    </span>
                                @endif
                            </td>

                            <td class="p-6 align-top text-center">
                                @if($complaint->status == 'Selesai')
                                    <span class="px-4 py-1.5 rounded-full text-xs font-bold bg-[#E6F4EA] text-[#1E4620] border border-[#CEEAD6] inline-flex items-center gap-1.5">
                                        <span class="w-2 h-2 rounded-full bg-[#1E4620]"></span> Selesai
                                    </span>
                                @elseif($complaint->status == 'Proses')
                                    <span class="px-4 py-1.5 rounded-full text-xs font-bold bg-[#EBF5FF] text-[#1E429F] border border-[#B3D7FF] inline-flex items-center gap-1.5">
                                        <span class="w-2 h-2 rounded-full bg-[#1E429F]"></span> Diproses
                                    </span>
                                @else
                                    <span class="px-4 py-1.5 rounded-full text-xs font-bold bg-[#FFF7ED] text-[#9A3412] border border-[#FFEDD5] inline-flex items-center gap-1.5">
                                        <span class="w-2 h-2 rounded-full bg-[#9A3412]"></span> Pending
                                    </span>
                                @endif
                            </td>

                            <td class="p-6 align-top text-center">
                                <form action="{{ route('admin.complaints.update', $complaint->id) }}" method="POST" class="flex flex-col xl:flex-row items-center justify-center gap-3">
                                    @csrf
                                    @method('PUT')
                                    
                                    <div class="relative w-full xl:w-auto">
                                        <select name="status" class="appearance-none w-full xl:w-auto text-sm font-medium border-gray-300 rounded-lg focus:border-[#74A88E] focus:ring-[#74A88E] py-2.5 pl-4 pr-10 bg-white shadow-sm cursor-pointer hover:border-[#74A88E] transition">
                                            <option value="Pending" {{ $complaint->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="Proses" {{ $complaint->status == 'Proses' ? 'selected' : '' }}>Proses</option>
                                            <option value="Selesai" {{ $complaint->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-500">
                                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                        </div>
                                    </div>

                                    <button type="submit" class="w-full xl:w-auto bg-[#74A88E] hover:bg-[#5e8f76] text-white px-4 py-2.5 rounded-lg shadow-sm transition flex items-center justify-center gap-2 text-sm font-bold" title="Simpan Perubahan Status">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        Simpan
                                    </button>
                                </form>
                            </td>

                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="p-16 text-center text-gray-400">
                                <div class="flex flex-col items-center justify-center">
                                    <div class="w-20 h-20 bg-[#F2F0EB] rounded-full flex items-center justify-center mb-4 text-[#74A88E]">
                                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                    </div>
                                    <p class="font-medium text-lg text-gray-500">Belum ada laporan masuk.</p>
                                    <p class="text-sm text-gray-400 mt-1">Semua unit dalam kondisi baik.</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            @if(method_exists($complaints, 'links'))
            <div class="p-4 bg-[#F9F9F7] border-t border-[#EBE5E0]">
                {{ $complaints->links() }}
            </div>
            @endif
        </div>

    </div>
</x-app-layout>