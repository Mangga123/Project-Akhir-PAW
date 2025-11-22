<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kelola Data Penghuni') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-bold text-gray-800">Daftar Penghuni Aktif</h3>
                        
                        <!-- TOMBOL UBAH JADI BIRU (Blue) AGAR KELIHATAN -->
                        <a href="{{ route('admin.residents.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow-lg transition duration-150 ease-in-out">
                            + Tambah Penghuni
                        </a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full table-auto border-collapse border border-gray-200">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="border px-4 py-2 text-left text-gray-600">Nama Penghuni</th>
                                    <th class="border px-4 py-2 text-left text-gray-600">Unit</th>
                                    <th class="border px-4 py-2 text-left text-gray-600">No. HP</th>
                                    <th class="border px-4 py-2 text-left text-gray-600">Mulai Huni</th>
                                    <th class="border px-4 py-2 text-left text-gray-600">Status</th>
                                    <th class="border px-4 py-2 text-center text-gray-600">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($residents as $resident)
                                    <tr class="hover:bg-gray-50">
                                        <td class="border px-4 py-2 font-bold text-gray-800">{{ $resident->user->name ?? 'User Terhapus' }}</td>
                                        
                                        <td class="border px-4 py-2 text-gray-700">
                                            Unit {{ $resident->unit->unit_number }} 
                                            <span class="text-xs text-gray-500">({{ $resident->unit->type }})</span>
                                        </td>
                                        
                                        <td class="border px-4 py-2 text-gray-700">{{ $resident->user->phone ?? '-' }}</td>
                                        <td class="border px-4 py-2 text-gray-700">{{ \Carbon\Carbon::parse($resident->start_date)->format('d M Y') }}</td>
                                        
                                        <td class="border px-4 py-2">
                                            @if($resident->status == 'Aktif')
                                                <span class="bg-green-100 text-green-800 text-xs font-bold px-2.5 py-0.5 rounded">Aktif</span>
                                            @else
                                                <span class="bg-gray-100 text-gray-800 text-xs font-bold px-2.5 py-0.5 rounded">Non-Aktif</span>
                                            @endif
                                        </td>
                                        
                                        <td class="border px-4 py-2 text-center">
                                            <div class="flex justify-center space-x-2">
                                                <a href="{{ route('admin.residents.edit', $resident->id) }}" class="text-yellow-600 hover:text-yellow-800 font-bold text-sm">Edit</a>
                                                
                                                <form action="{{ route('admin.residents.destroy', $resident->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data penghuni ini?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-800 font-bold text-sm">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        {{ $residents->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>