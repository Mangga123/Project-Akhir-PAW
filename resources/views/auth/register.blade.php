<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="text-center mb-8">
            <h2 class="text-2xl font-bold text-white mb-2">Buat Akun Baru</h2>
            <p class="text-gray-400 text-sm">Daftar untuk mengakses sistem manajemen apartemen.</p>
        </div>

        <div class="mb-4">
            <label for="name" class="block font-medium text-sm text-gray-300 mb-2">Nama Lengkap</label>
            <input id="name" class="block w-full rounded-lg bg-[#374151] border-transparent text-white placeholder-gray-500 focus:border-[#A8E6CF] focus:ring-[#A8E6CF] transition py-3 px-4" 
                   type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Nama Anda" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mb-4">
            <label for="email" class="block font-medium text-sm text-gray-300 mb-2">Email Address</label>
            <input id="email" class="block w-full rounded-lg bg-[#374151] border-transparent text-white placeholder-gray-500 focus:border-[#A8E6CF] focus:ring-[#A8E6CF] transition py-3 px-4" 
                   type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="email@example.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mb-4">
            <label for="phone" class="block font-medium text-sm text-gray-300 mb-2">No. Handphone / WhatsApp</label>
            <input id="phone" class="block w-full rounded-lg bg-[#374151] border-transparent text-white placeholder-gray-500 focus:border-[#A8E6CF] focus:ring-[#A8E6CF] transition py-3 px-4" 
                   type="text" name="phone" :value="old('phone')" required placeholder="Contoh: 08123456789" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <div class="mb-4">
            <label for="password" class="block font-medium text-sm text-gray-300 mb-2">Password</label>
            <input id="password" class="block w-full rounded-lg bg-[#374151] border-transparent text-white placeholder-gray-500 focus:border-[#A8E6CF] focus:ring-[#A8E6CF] transition py-3 px-4"
                            type="password"
                            name="password"
                            required autocomplete="new-password" placeholder="Minimal 8 karakter" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mb-6">
            <label for="password_confirmation" class="block font-medium text-sm text-gray-300 mb-2">Konfirmasi Password</label>
            <input id="password_confirmation" class="block w-full rounded-lg bg-[#374151] border-transparent text-white placeholder-gray-500 focus:border-[#A8E6CF] focus:ring-[#A8E6CF] transition py-3 px-4"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" placeholder="Ulangi password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mb-8">
            <div class="flex justify-between items-center mb-2">
                <label for="invite_code" class="block font-medium text-sm text-gray-300">Enter Code</label>
                
                <div class="group relative">
                    <a href="#" class="text-xs text-[#74A88E] hover:text-[#A8E6CF] transition cursor-help underline decoration-dotted underline-offset-2">
                        What's this?
                    </a>
                    <span class="absolute bottom-full right-0 mb-2 w-48 p-3 text-xs text-gray-900 bg-white/90 backdrop-blur-sm rounded-lg shadow-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none z-10 text-center leading-relaxed border border-gray-200">
                        Kode yang didapat kalau sudah melakukan pemesanan apartement.
                        <svg class="absolute text-white/90 h-2 w-full left-0 top-full" x="0px" y="0px" viewBox="0 0 255 255" xml:space="preserve"><polygon class="fill-current" points="0,0 127.5,127.5 255,0"/></svg>
                    </span>
                </div>
            </div>
            
            <input id="invite_code" class="block w-full rounded-lg bg-[#374151] border-transparent text-white placeholder-gray-500 focus:border-[#A8E6CF] focus:ring-[#A8E6CF] transition py-3 px-4"
                   type="text" name="invite_code" placeholder="Kode Undangan (Opsional)" />
        </div>

        <div class="flex flex-col gap-6 mt-2">
            <button type="submit" class="w-full bg-[#74A88E] hover:bg-[#5e8f76] text-white font-bold py-3 px-4 rounded-xl shadow-lg transition duration-200 transform hover:-translate-y-0.5">
                Daftar Sekarang
            </button>

            <div class="text-center">
                <a class="text-gray-400 text-sm hover:text-gray-300 font-medium transition" href="{{ route('login') }}">
                    Sudah punya akun? 
                    <span class="text-[#A8E6CF] hover:text-white font-bold ml-1 transition underline-offset-4 hover:underline">
                        Login
                    </span>
                </a>
            </div>
        </div>
    </form>
</x-guest-layout>