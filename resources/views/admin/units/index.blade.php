<x-app-layout>
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Kelola Unit Apartemen</h2>
            <p class="text-sm text-gray-500">Daftar seluruh unit kamar dan statusnya.</p>
        </div>
        <a href="{{ route('admin.units.create') }}" class="bg-[#74A88E] hover:bg-[#5e8f76] text-white px-5 py-2.5 rounded-xl font-medium shadow-sm transition flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
            Tambah Unit Baru
        </a>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-s text-black">
                <thead class="bg-gray-50 text-xs uppercase font-semibold text-gray-500">
                    <tr>
                        <th class="px-6 py-4">Nomor Unit</th>
                        <th class="px-6 py-4">Tower</th>
                        <th class="px-6 py-4">Lantai</th>
                        <th class="px-6 py-4">Tipe</th>
                        <th class="px-6 py-4 text-center">Status</th>
                        <th class="px-6 py-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach ($units as $unit)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 font-bold text-gray-900">
                            Unit {{ $unit->unit_number }}
                        </td>
                        <td class="px-6 py-4">{{ $unit->tower }}</td>
                        <td class="px-6 py-4">{{ $unit->floor }}</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full bg-gray-100 text-gray-600 text-xs font-medium border border-gray-200">
                                {{ $unit->type }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            @if($unit->status == 'Kosong')
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-s font-medium bg-green-100 text-green-800">
                                    <span class="w-1.5 h-1.5 bg-green-500 rounded-full mr-1.5"></span>
                                    Tersedia
                                </span>
                            @elseif($unit->status == 'Terisi')
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-s font-medium bg-blue-100 text-blue-800">
                                    <span class="w-1.5 h-1.5 bg-blue-500 rounded-full mr-1.5"></span>
                                    Terisi
                                </span>
                            @else
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-s font-medium bg-yellow-100 text-yellow-800">
                                    <span class="w-1.5 h-1.5 bg-yellow-500 rounded-full mr-1.5"></span>
                                    Maintenance
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-right flex justify-end gap-3">
                            <a href="{{ route('admin.units.edit', $unit->id) }}" class="text-yellow-500 hover:text-yellow-600 font-medium">Edit</a>
                            <form action="{{ route('admin.units.destroy', $unit->id) }}" method="POST" onsubmit="return confirm('Hapus unit ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-600 font-medium">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <div class="px-6 py-4 border-t border-gray-100">
            {{ $units->links() }}
        </div>
    </div>
</x-app-layout>