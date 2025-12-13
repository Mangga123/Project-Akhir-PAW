<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="text-center mb-10">
            <h2 class="text-2xl font-bold text-white mb-2">Welcome Back!</h2>
            <p class="text-gray-400 text-sm">Silakan masuk untuk mengelola apartemen.</p>
        </div>

        <div class="mb-5">
            <label for="email" class="block font-medium text-sm text-gray-300 mb-2">Email Address</label>
            <input id="email" class="block w-full rounded-lg bg-[#374151] border-transparent text-white placeholder-gray-500 focus:border-[#A8E6CF] focus:ring-[#A8E6CF] transition py-3 px-4" 
                   type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="admin@example.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mb-6">
            <label for="password" class="block font-medium text-sm text-gray-300 mb-2">Password</label>
            <input id="password" class="block w-full rounded-lg bg-[#374151] border-transparent text-white placeholder-gray-500 focus:border-[#A8E6CF] focus:ring-[#A8E6CF] transition py-3 px-4"
                            type="password"
                            name="password"
                            required autocomplete="current-password" placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="block mb-8">
            <label for="remember_me" class="inline-flex items-center cursor-pointer">
                <input id="remember_me" type="checkbox" class="rounded bg-[#374151] border-gray-600 text-[#A8E6CF] shadow-sm focus:ring-[#A8E6CF] focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-400 hover:text-gray-300 transition">{{ __('Ingat saya') }}</span>
            </label>
        </div>

        <div class="flex flex-col gap-6 mt-4">
            
            <button type="submit" class="w-full bg-[#74A88E] hover:bg-[#5e8f76] text-white font-bold py-3 px-4 rounded-xl shadow-lg transition duration-200 transform hover:-translate-y-0.5">
                Masuk Sekarang
            </button>

            <div class="text-center">
                <span class="text-gray-400 text-sm">Belum punya akun?</span>
                <a href="{{ route('register') }}" class="text-[#A8E6CF] hover:text-white font-bold text-sm ml-1 transition underline-offset-4 hover:underline">
                    Register
                </a>
            </div>

        </div>
    </form>
</x-guest-layout>