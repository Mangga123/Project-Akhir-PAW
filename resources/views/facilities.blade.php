<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Facilities - {{ config('app.name', 'Realty') }}</title>
    
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=playfair-display:400,400i,500,600,700|inter:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-[#F9F9F7] text-gray-700">

    <nav class="w-full px-8 md:px-20 py-8 flex justify-between items-center bg-transparent">
        <a href="{{ url('/') }}" class="flex items-center gap-3 text-[#D4A373] font-bold text-3xl tracking-wide hover:text-[#B08968] transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            <span>Realty</span>
        </a>

        <a href="{{ url('/') }}" class="text-lg font-medium text-[#D4A373] hover:text-[#B08968] transition tracking-widest uppercase">
            Back To Home
        </a>
    </nav>

    <main class="container mx-auto px-6 py-10 md:py-20 flex items-center justify-center min-h-[80vh]">
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12 max-w-6xl mx-auto items-center">
            
            <div class="space-y-8 flex flex-col items-center md:items-end">
                <div class="w-80 h-70 md:w-72 md:h-90 rounded-xl overflow-hidden shadow-sm">
                    <img src="https://i.pinimg.com/736x/75/78/6d/75786d78a37435c9402a41f0bf96f4e1.jpg" alt="Facility Image 1" class="w-full h-full object-cover">
                </div>
                <div class="w-80 h-70 md:w-72 md:h-90 rounded-xl overflow-hidden shadow-sm">
                     <img src="https://i.pinimg.com/736x/3a/3b/23/3a3b238008c552e65dbb1aa32bdafa18.jpg" alt="Facility Image 2" class="w-full h-full object-cover">
                </div>
            </div>

            <div class="text-center px-4">
                <h1 class="text-4xl md:text-5xl font-serif text-gray-800 leading-tight mb-2">
                    Comforting Quality
                </h1>
                <h2 class="text-3xl md:text-4xl font-serif italic text-[#D4A373] mb-6">
                    Sports Space
                </h2>
                <p class="text-gray-500 text-sm md:text-base max-w-xs mx-auto leading-relaxed mb-8">
                    Realty memberikan fasilitas yang membuat anda berada di lingkungan sport nyaman
                </p>

                <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm max-w-sm mx-auto">
                    <p class="text-gray-500 text-xs md:text-sm leading-relaxed">
                        Dengan 2 lapangan tenis dan 2 kolam renang, kami memberikan anda kebebasan untuk bergerak serta meng-reserve salah satu dari 2 lapangan tersebut
                    </p>
                </div>
            </div>

            <div class="space-y-8 flex flex-col items-center md:items-start">
                <div class="w-80 h-70 md:w-72 md:h-90 rounded-xl overflow-hidden shadow-sm">
                     <img src="https://i.pinimg.com/1200x/e1/7b/65/e17b651c62338492a43e490fb1dd9dde.jpg" alt="Facility Image 3" class="w-full h-full object-cover">
                </div>
                <div class="w-80 h-70 md:w-72 md:h-90rounded-xl overflow-hidden shadow-sm">
                     <img src="https://i.pinimg.com/1200x/56/41/51/5641512311e5af8cf1d24992f3e90a01.jpg" alt="Facility Image 4" class="w-full h-full object-cover">
                </div>
            </div>

        </div>
    </main>

</body>
</html>