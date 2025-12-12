<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Apartemen Sejahtera') }}</title>
    
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/25/25694.png" type="image/png">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-[#E6E4E0] text-gray-700">
    
    <div class="flex h-screen overflow-hidden">
        
        <aside class="w-64 bg-white border-r border-[#D6D4D0] hidden md:flex flex-col shadow-sm z-10">
            <div class="h-16 flex items-center px-6 border-b border-[#E6E4E0]">
                <div class="flex items-center gap-2 text-[#74A88E] font-bold text-xl tracking-tight">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    <span class="text-gray-800">Realty</span>
                </div>
            </div>

            <nav class="flex-1 px-3 py-6 space-y-1 overflow-y-auto">
                
                <a href="{{ url('/') }}" class="flex items-center px-3 py-2.5 mb-6 text-sm font-medium text-white bg-[#74A88E] rounded-lg hover:bg-[#5e8f76] transition-colors shadow-sm group">
                    <svg class="w-5 h-5 mr-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Ke Website Depan
                </a>

                <a href="{{ route('dashboard') }}" class="flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('dashboard') ? 'bg-[#E6E4E0] text-[#74A88E]' : 'text-gray-500 hover:bg-[#E6E4E0] hover:text-[#74A88E]' }}">
                    <svg class="w-5 h-5 mr-3 {{ request()->routeIs('dashboard') ? 'text-[#74A88E]' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    Dashboard
                </a>

                @if(Auth::user()->isAdmin())
                    <div class="pt-5 pb-2">
                        <p class="px-3 text-[10px] font-bold text-gray-400 uppercase tracking-wider">Master Data</p>
                    </div>

                    <a href="{{ route('admin.units.index') }}" class="flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('admin.units.*') ? 'bg-[#E6E4E0] text-[#74A88E]' : 'text-gray-500 hover:bg-[#E6E4E0] hover:text-[#74A88E]' }}">
                        <svg class="w-5 h-5 mr-3 {{ request()->routeIs('admin.units.*') ? 'text-[#74A88E]' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        Unit Apartemen
                    </a>

                    <a href="{{ route('admin.residents.index') }}" class="flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('admin.residents.*') ? 'bg-[#E6E4E0] text-[#74A88E]' : 'text-gray-500 hover:bg-[#E6E4E0] hover:text-[#74A88E]' }}">
                        <svg class="w-5 h-5 mr-3 {{ request()->routeIs('admin.residents.*') ? 'text-[#74A88E]' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        Data Penghuni
                    </a>

                    <div class="pt-5 pb-2">
                        <p class="px-3 text-[10px] font-bold text-gray-400 uppercase tracking-wider">Finance & Service</p>
                    </div>

                    <a href="{{ route('admin.bills.index') }}" class="flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('admin.bills.*') ? 'bg-[#E6E4E0] text-[#74A88E]' : 'text-gray-500 hover:bg-[#E6E4E0] hover:text-[#74A88E]' }}">
                        <svg class="w-5 h-5 mr-3 {{ request()->routeIs('admin.bills.*') ? 'text-[#74A88E]' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        Tagihan
                    </a>

                    <a href="{{ route('admin.complaints.index') }}" class="flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('admin.complaints.*') ? 'bg-[#E6E4E0] text-[#74A88E]' : 'text-gray-500 hover:bg-[#E6E4E0] hover:text-[#74A88E]' }}">
                        <svg class="w-5 h-5 mr-3 {{ request()->routeIs('admin.complaints.*') ? 'text-[#74A88E]' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                        Laporan Masuk
                    </a>

                    <a href="{{ route('admin.complaints.index') }}" class="...">...</a>

                <a href="{{ route('admin.facilities.index') }}" class="flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('admin.facilities.*') ? 'bg-[#E6E4E0] text-[#74A88E]' : 'text-gray-500 hover:bg-[#E6E4E0] hover:text-[#74A88E]' }}">
                    <svg class="w-5 h-5 mr-3 {{ request()->routeIs('admin.facilities.*') ? 'text-[#74A88E]' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Kelola Fasilitas
                </a>

                @endif

                @if(!Auth::user()->isAdmin())
                    <div class="pt-5 pb-2">
                        <p class="px-3 text-[10px] font-bold text-gray-400 uppercase tracking-wider">Layanan Mandiri</p>
                    </div>

                    <a href="{{ route('resident.home') }}" class="flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('resident.home') ? 'bg-[#E6E4E0] text-[#74A88E]' : 'text-gray-500 hover:bg-[#E6E4E0] hover:text-[#74A88E]' }}">
                        <svg class="w-5 h-5 mr-3 {{ request()->routeIs('resident.home') ? 'text-[#74A88E]' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        Home
                    </a>

                    <a href="{{ route('resident.my-unit') }}" class="flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('resident.my-unit') ? 'bg-[#E6E4E0] text-[#74A88E]' : 'text-gray-500 hover:bg-[#E6E4E0] hover:text-[#74A88E]' }}">
                        <svg class="w-5 h-5 mr-3 {{ request()->routeIs('resident.my-unit') ? 'text-[#74A88E]' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path></svg>
                        Unit Hunian
                    </a>

                    <a href="{{ route('resident.bills.index') }}" class="flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('resident.bills.*') ? 'bg-[#E6E4E0] text-[#74A88E]' : 'text-gray-500 hover:bg-[#E6E4E0] hover:text-[#74A88E]' }}">
                        <svg class="w-5 h-5 mr-3 {{ request()->routeIs('resident.bills.*') ? 'text-[#74A88E]' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                        Tagihan 
                    </a>

                    <a href="{{ route('resident.complaints.index') }}" class="flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('resident.complaints.*') ? 'bg-[#E6E4E0] text-[#74A88E]' : 'text-gray-500 hover:bg-[#E6E4E0] hover:text-[#74A88E]' }}">
                        <svg class="w-5 h-5 mr-3 {{ request()->routeIs('resident.complaints.*') ? 'text-[#74A88E]' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path></svg>
                        Lapor Kerusakan
                    </a>

                    <a href="{{ route('resident.complaints.index') }}" class="...">...</a>

                <a href="{{ route('resident.facility.booking') }}" class="flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('resident.facility.*') ? 'bg-[#E6E4E0] text-[#74A88E]' : 'text-gray-500 hover:bg-[#E6E4E0] hover:text-[#74A88E]' }}">
                    <svg class="w-5 h-5 mr-3 {{ request()->routeIs('resident.facility.*') ? 'text-[#74A88E]' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Facility
                </a>

                @endif

            </nav>

            <div class="p-4 border-t border-[#E6E4E0]">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-full bg-[#74A88E] flex items-center justify-center text-white font-bold text-sm">
                        {{ substr(Auth::user()->name, 0, 1) }}
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-900 truncate">{{ Auth::user()->name }}</p>
                        <p class="text-[10px] text-gray-500 truncate">{{ Auth::user()->email }}</p>
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-gray-400 hover:text-red-500 transition" title="Logout">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                        </button>
                    </form>
                </div>
            </div>
        </aside>

        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-[#E6E4E0]">
            <div class="container mx-auto px-6 py-8">
                @if (isset($header))
                    <div class="mb-6">
                        <h2 class="text-2xl font-bold text-gray-800">{{ $header }}</h2>
                    </div>
                @endif

                {{ $slot }}
            </div>
        </main>
    </div>
</body>
</html>