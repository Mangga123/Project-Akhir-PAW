<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Konfirmasi Pembayaran') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <!-- Info Tagihan -->
                <div class="mb-6 border-b pb-4">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Rincian Tagihan</h3>
                    <div class="flex justify-between text-sm mb-1">
                        <span class="text-gray-600">Bulan Tagihan:</span>
                        <span class="font-bold">{{ $bill->month }}</span>
                    </div>
                    <div class="flex justify-between text-sm mb-1">
                        <span class="text-gray-600">Total yang harus dibayar:</span>
                        <span class="font-bold text-indigo-600 text-lg">Rp {{ number_format($bill->amount, 0, ',', '.') }}</span>
                    </div>
                </div>

                <!-- Info Rekening -->
                <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mb-6 rounded">
                    <p class="text-sm text-blue-700 font-bold">Silakan transfer ke:</p>
                    <ul class="mt-1 list-disc list-inside text-sm text-blue-600">
                        <li>BCA: <strong>123-456-7890</strong> (a.n Apartemen Sejahtera)</li>
                        <li>Mandiri: <strong>098-765-4321</strong> (a.n Pengelola Gedung)</li>
                    </ul>
                </div>

                <form action="{{ route('resident.payments.store', $bill->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Tanggal Transfer</label>
                        <input type="date" name="payment_date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Bukti Transfer (Gambar)</label>
                        <!-- Input File -->
                        <input type="file" name="proof_image" class="block w-full text-sm text-slate-500
                            file:mr-4 file:py-2 file:px-4
                            file:rounded-full file:border-0
                            file:text-sm file:font-semibold
                            file:bg-blue-50 file:text-blue-700
                            hover:file:bg-blue-100" accept="image/*" required>
                        <p class="text-xs text-gray-500 mt-1 ml-1">Format: JPG, PNG. Max: 2MB.</p>
                    </div>

                    <div class="flex items-center justify-between mt-8">
                        <a href="{{ route('resident.bills.index') }}" class="text-gray-500 hover:text-gray-700 font-bold text-sm">Batal</a>
                        
                        <!-- TOMBOL UKURAN NORMAL (SUDAH DIKECILKAN) -->
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                            Kirim Bukti Bayar 🚀
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>