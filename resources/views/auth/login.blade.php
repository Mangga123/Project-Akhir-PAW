<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-8 text-center">
            <h2 class="text-2xl font-bold text-white">Selamat Datang User</h2>
            <p class="text-sm text-gray-400 mt-1">Mohon masukan email dan password</p>
        </div>

        <div class="mb-5">
            <label for="email" class="block font-medium text-sm text-gray-300 mb-2">Email</label>
            <input id="email" class="block w-full rounded-lg bg-[#2D3748] border-transparent text-white focus:border-[#A8E6CF] focus:ring-[#A8E6CF] py-3 px-4 placeholder-gray-500" 
                   type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email Anda" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mb-6">
            <label for="password" class="block font-medium text-sm text-gray-300 mb-2">Password</label>
            <input id="password" class="block w-full rounded-lg bg-[#2D3748] border-transparent text-white focus:border-[#A8E6CF] focus:ring-[#A8E6CF] py-3 px-4 placeholder-gray-500"
                            type="password"
                            name="password"
                            required autocomplete="current-password" placeholder="Password Anda" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="block mb-8">
            <label for="remember_me" class="inline-flex items-center cursor-pointer">
                <input id="remember_me" type="checkbox" class="rounded bg-[#2D3748] border-gray-600 text-[#A8E6CF] shadow-sm focus:ring-[#A8E6CF]" name="remember">
                <span class="ms-2 text-sm text-gray-400">{{ __('Ingat password saya!') }}</span>
            </label>
        </div>

        <div class="mt-6">
            <button type="submit" class="w-full bg-[#74A88E] hover:bg-[#5e8f76] text-white font-bold py-3 px-4 rounded-full shadow-lg transition duration-200 text-lg">
                Log in
            </button>
        </div>
    </form>
</x-guest-layout>