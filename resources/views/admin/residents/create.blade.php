<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrasi Penghuni Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            
            <div class="mb-6 flex space-x-4 border-b border-gray-200" x-data="{ tab: 'existing' }">
                </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">

                <h3 class="text-lg font-bold text-gray-800 mb-6 border-b pb-2">Form Data Penghuni</h3>

                <form action="{{ route('admin.residents.store') }}" method="POST">
                    @csrf

                    <div class="mb-8" id="method-selector">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Sumber Data Penghuni</label>
                        <div class="flex gap-4">
                            <label class="flex items-center p-4 border rounded-xl cursor-pointer hover:bg-gray-50 transition w-1/2 has-[:checked]:border-[#74A88E] has-[:checked]:bg-[#F2F9F5]">
                                <input type="radio" name="user_type" value="existing" class="text-[#74A88E] focus:ring-[#74A88E]" checked onclick="toggleUserForm('existing')">
                                <div class="ml-3">
                                    <span class="block text-sm font-bold text-gray-900">Pilih Akun Terdaftar</span>
                                    <span class="block text-xs text-gray-500">User yang sudah register sendiri (misal: Vizie)</span>
                                </div>
                            </label>
                            <label class="flex items-center p-4 border rounded-xl cursor-pointer hover:bg-gray-50 transition w-1/2 has-[:checked]:border-[#74A88E] has-[:checked]:bg-[#F2F9F5]">
                                <input type="radio" name="user_type" value="new" class="text-[#74A88E] focus:ring-[#74A88E]" onclick="toggleUserForm('new')">
                                <div class="ml-3">
                                    <span class="block text-sm font-bold text-gray-900">Buat Akun Baru</span>
                                    <span class="block text-xs text-gray-500">Input manual nama, email, password baru</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="form-existing" class="mb-8 bg-blue-50 p-6 rounded-xl border border-blue-100">
                        <label class="block text-sm font-bold text-blue-800 mb-2">Cari Nama Penghuni</label>
                        <select name="existing_user_id" class="w-full rounded-lg border-gray-300 focus:border-[#74A88E] focus:ring-[#74A88E]">
                            <option value="">-- Pilih User --</option>
                            @foreach(\App\Models\User::where('role_id', 2)->doesntHave('resident')->get() as $u)
                                <option value="{{ $u->id }}">{{ $u->name }} ({{ $u->email }})</option>
                            @endforeach
                        </select>
                        <p class="text-xs text-blue-600 mt-2">*Hanya menampilkan user warga yang belum memiliki unit.</p>
                    </div>

                    <div id="form-new" class="mb-8 hidden space-y-4 bg-gray-50 p-6 rounded-xl border border-gray-200">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Nama Lengkap</label>
                                <input type="text" name="name" class="w-full rounded-lg border-gray-300 focus:border-[#74A88E] focus:ring-[#74A88E]" placeholder="Nama Penghuni">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase mb-1">No. Handphone</label>
                                <input type="text" name="phone" class="w-full rounded-lg border-gray-300 focus:border-[#74A88E] focus:ring-[#74A88E]" placeholder="08...">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Email Login</label>
                                <input type="email" name="email" class="w-full rounded-lg border-gray-300 focus:border-[#74A88E] focus:ring-[#74A88E]" placeholder="email@contoh.com">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Password</label>
                                <input type="password" name="password" class="w-full rounded-lg border-gray-300 focus:border-[#74A88E] focus:ring-[#74A88E]" placeholder="Minimal 8 karakter">
                            </div>
                        </div>
                    </div>

                    <div class="border-t pt-6">
                        <h4 class="text-sm font-bold text-gray-800 mb-4 flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-gray-200 flex items-center justify-center text-xs">2</span>
                            Pilih Unit Hunian
                        </h4>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Unit Apartemen (Kosong)</label>
                                <select name="unit_id" class="w-full rounded-lg border-gray-300 focus:border-[#74A88E] focus:ring-[#74A88E]" required>
                                    <option value="">-- Pilih Unit --</option>
                                    @foreach($units as $unit)
                                        @if($unit->status == 'Kosong')
                                            <option value="{{ $unit->id }}">Unit {{ $unit->unit_number }} ({{ $unit->type }})</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            
                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Mulai Huni</label>
                                <input type="date" name="start_date" class="w-full rounded-lg border-gray-300 focus:border-[#74A88E] focus:ring-[#74A88E]" required>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 flex justify-end gap-3">
                        <a href="{{ route('admin.residents.index') }}" class="px-5 py-2.5 rounded-xl border border-gray-300 text-gray-600 font-medium hover:bg-gray-50">Batal</a>
                        <button type="submit" class="px-5 py-2.5 rounded-xl bg-[#74A88E] text-white font-bold hover:bg-[#5e8f76] shadow-sm">
                            Simpan Data
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script>
        function toggleUserForm(type) {
            const formExisting = document.getElementById('form-existing');
            const formNew = document.getElementById('form-new');
            
            if (type === 'existing') {
                formExisting.classList.remove('hidden');
                formNew.classList.add('hidden');
            } else {
                formExisting.classList.add('hidden');
                formNew.classList.remove('hidden');
            }
        }
    </script>
</x-app-layout>