<x-app-layout>
    <div class="max-w-7xl mx-auto mt-4">
        
        <div class="flex flex-col md:flex-row justify-between items-end mb-8 gap-4">
            <div>
                <h2 class="text-3xl font-bold text-gray-800 tracking-tight">Kelola Data Penghuni</h2>
                <p class="text-gray-500 mt-2 text-sm">Daftar lengkap penghuni apartemen dan status hunian mereka.</p>
            </div>
            
            <a href="{{ route('admin.residents.create') }}" class="flex items-center gap-2 bg-[#74A88E] hover:bg-[#5e8f76] text-white font-bold py-3 px-6 rounded-xl shadow-sm transition transform hover:-translate-y-0.5">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                Tambah Penghuni
            </a>
        </div>

        <div class="bg-white rounded-[20px] shadow-sm border border-[#EBE5E0] overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-[#F9F9F7] text-gray-500 text-xs uppercase tracking-wider border-b border-[#EBE5E0]">
                            <th class="p-6 font-bold">Nama Penghuni</th>
                            <th class="p-6 font-bold">Unit Hunian</th>
                            <th class="p-6 font-bold">Kontak</th>
                            <th class="p-6 font-bold">Mulai Huni</th>
                            <th class="p-6 font-bold text-center">Status</th>
                            <th class="p-6 font-bold text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#F5F0EB]">
                        @forelse ($residents as $resident)
                        <tr class="hover:bg-[#FAFAFA] transition duration-200 group">
                            
                            <td class="p-6">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-[#E6F4EA] flex items-center justify-center text-[#74A88E] font-bold text-sm shadow-sm">
                                        {{ substr($resident->user->name, 0, 1) }}
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-800">{{ $resident->user->name }}</p>
                                        <p class="text-[13px] text-gray-400">{{ $resident->user->email }}</p>
                                    </div>
                                </div>
                            </td>

                            <td class="p-6">
                                <div class="flex flex-col">
                                    <span class="font-bold text-gray-700">Unit {{ $resident->unit->unit_number }}</span>
                                    <span class="text-s text-gray">Tipe: {{ $resident->unit->type }}</span>
                                </div>
                            </td>

                            <td class="p-6">
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                    {{ $resident->user->phone ?? '-' }}
                                </div>
                            </td>

                            <td class="p-6 text-sm text-gray-600">
                                {{ \Carbon\Carbon::parse($resident->start_date)->format('d M Y') }}
                            </td>

                            <td class="p-6 text-center">
                                @if($resident->status == 'Aktif')
                                    <span class="px-3 py-1 rounded-full text-[10px] font-bold bg-[#E6F4EA] text-[#1E4620] border border-[#CEEAD6]">
                                        Aktif
                                    </span>
                                @else
                                    <span class="px-3 py-1 rounded-full text-[10px] font-bold bg-gray-100 text-gray-500 border border-gray-200">
                                        Nonaktif
                                    </span>
                                @endif
                            </td>

                            <td class="p-6 text-center">
                                <div class="flex items-center justify-center gap-3">
                                    <a href="{{ route('admin.residents.edit', $resident->id) }}" class="text-[#D4A373] hover:text-[#B08968] transition" title="Edit Data">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                    </a>

                                    <form action="{{ route('admin.residents.destroy', $resident->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data penghuni ini? Unit akan otomatis menjadi kosong.');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-[#E07A5F] hover:text-[#C05621] transition" title="Hapus Penghuni">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                        </button>
                                    </form>
                                </div>
                            </td>

                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="p-12 text-center text-gray-400">
                                <div class="flex flex-col items-center justify-center">
                                    <div class="w-16 h-16 bg-[#F2F0EB] rounded-full flex items-center justify-center mb-4 text-[#74A88E]">
                                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                    </div>
                                    <p class="font-medium text-gray-500">Belum ada data penghuni.</p>
                                    <p class="text-xs text-gray-400 mt-1">Silakan tambahkan penghuni baru untuk unit yang tersedia.</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            @if(method_exists($residents, 'links'))
            <div class="p-4 bg-[#F9F9F7] border-t border-[#EBE5E0]">
                {{ $residents->links() }}
            </div>
            @endif
        </div>

    </div>
</x-app-layout>