<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrasi Penghuni Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <form action="{{ route('admin.residents.store') }}" method="POST">
                        @csrf
                        
                        <!-- BAGIAN 1: DATA AKUN LOGIN -->
                        <div class="mb-6 bg-blue-50 p-4 rounded-lg border border-blue-100">
                            <h3 class="text-lg font-bold mb-4 text-blue-700 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                1. Buat Akun Login
                            </h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2">Nama Lengkap</label>
                                    <input type="text" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Contoh: Budi Santoso" required>
                                </div>
                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2">No. Handphone</label>
                                    <input type="text" name="phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="0812..." required>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2">Alamat Email (Untuk Login)</label>
                                    <input type="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="email@contoh.com" required>
                                </div>
                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                                    <input type="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Minimal 8 karakter" required>
                                </div>
                            </div>
                        </div>

                        <hr class="mb-6 border-gray-300">

                        <!-- BAGIAN 2: DATA HUNIAN -->
                        <div class="mb-6">
                            <h3 class="text-lg font-bold mb-4 text-gray-700 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                2. Data Hunian
                            </h3>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Pilih Unit Apartemen (Hanya Unit Kosong)</label>
                                <select name="unit_id" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                                    <option value="">-- Pilih Unit --</option>
                                    @foreach($units as $unit)
                                        <option value="{{ $unit->id }}">
                                            Unit {{ $unit->unit_number }} - {{ $unit->tower }} ({{ $unit->type }})
                                        </option>
                                    @endforeach
                                </select>
                                @if($units->isEmpty())
                                    <p class="text-red-500 text-xs mt-1">*Tidak ada unit kosong tersedia.</p>
                                @endif
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2">Tanggal Mulai Huni</label>
                                    <input type="date" name="start_date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                                </div>
                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2">Status Penghuni</label>
                                    <select name="status" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                        <option value="Aktif">Aktif</option>
                                        <option value="Nonaktif">Non-Aktif</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- TOMBOL SIMPAN & BATAL (DIPISAH KIRI-KANAN) -->
                        <div class="flex items-center justify-between mt-8">
                            <a href="{{ route('admin.residents.index') }}" class="text-gray-500 hover:text-gray-700 font-bold text-sm">
                                Batal
                            </a>
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded shadow-lg focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                                Simpan Data & Buat Akun
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>