<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Unit Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <form action="{{ route('admin.units.store') }}" method="POST">
                        @csrf
                        
                        <!-- Input Nomor Unit -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Nomor Unit</label>
                            <input type="text" name="unit_number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Contoh: 101" required>
                        </div>

                        <!-- Input Tower -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Tower</label>
                            <select name="tower" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="A">Tower A</option>
                                <option value="B">Tower B</option>
                                <option value="C">Tower C</option>
                            </select>
                        </div>

                        <!-- Input Lantai -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Lantai</label>
                            <input type="number" name="floor" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Contoh: 1" required>
                        </div>

                        <!-- Input Tipe -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Tipe Unit</label>
                            <select name="type" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="Studio">Studio</option>
                                <option value="1BR">1 Bedroom</option>
                                <option value="2BR">2 Bedroom</option>
                            </select>
                        </div>

                        <!-- Input Status -->
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Status</label>
                            <select name="status" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="Kosong">Kosong</option>
                                <option value="Terisi">Terisi</option>
                                <option value="Maintenance">Maintenance</option>
                            </select>
                        </div>

                        <!-- Tombol Submit -->
                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Simpan Unit
                            </button>
                            <a href="{{ route('admin.units.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                                Batal
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>