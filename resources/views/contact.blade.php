<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Realty</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
    
    <style> 
        body { font-family: 'Montserrat', sans-serif; } 
        .font-serif { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="bg-[#F5F5F2]"> <nav class="w-full px-6 md:px-16 py-6 flex justify-between items-center bg-white border-b border-gray-100 sticky top-0 z-50">
        <a href="{{ url('/') }}" class="flex items-center gap-2 text-[#A8E6CF] font-bold text-2xl tracking-wide">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            <span>Realty</span>
        </a>
        <a href="{{ url('/') }}" class="text-sm font-medium text-gray-500 hover:text-[#74A88E] transition flex items-center gap-2">
            &larr; Back to Home
        </a>
    </nav>

    <section class="text-center pt-20 pb-12 px-6">
        <h1 class="text-4xl md:text-5xl font-serif text-gray-900 mb-4">Get in Touch</h1>
        <p class="text-gray-500 max-w-xl mx-auto leading-relaxed">
            Punya pertanyaan tentang properti impian Anda? Tim ahli kami siap membantu Anda menemukan solusi terbaik.
        </p>
    </section>

    <section class="pb-24 px-6 md:px-16">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">

            <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition duration-300 border border-gray-100 flex flex-col items-center text-center group">
                <div class="w-24 h-24 rounded-full overflow-hidden mb-6 border-4 border-[#F2F9F5] group-hover:border-[#A8E6CF] transition">
                    <img src="https://i.pinimg.com/736x/e5/32/d3/e532d30a87358e28265ebaaca4aec41d.jpg" alt="Vizie" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-1 font-serif">Vizie Hafiyyan</h3>
                <p class="text-[#74A88E] text-xs font-semibold uppercase tracking-wider mb-6">Senior Consultant</p>
                
                <div class="space-y-3 w-full">
                    <a href="#" class="block w-full py-2 rounded-full bg-[#74A88E] text-white text-sm font-medium hover:bg-[#5e8f76] transition">
                        WhatsApp Vizie
                    </a>
                    <a href="#" class="block w-full py-2 rounded-full border border-gray-200 text-gray-600 text-sm font-medium hover:border-[#74A88E] hover:text-[#74A88E] transition">
                        Email Me
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition duration-300 border border-gray-100 flex flex-col items-center text-center group">
                <div class="w-24 h-24 rounded-full overflow-hidden mb-6 border-4 border-[#F2F9F5] group-hover:border-[#A8E6CF] transition">
                    <img src="https://i.pinimg.com/1200x/25/67/c9/2567c96602a022ef63f6377923b099e3.jpg" alt="Angga" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-1 font-serif">Angga Prima</h3>
                <p class="text-[#74A88E] text-xs font-semibold uppercase tracking-wider mb-6">Property Specialist</p>
                
                <div class="space-y-3 w-full">
                    <a href="#" class="block w-full py-2 rounded-full bg-[#74A88E] text-white text-sm font-medium hover:bg-[#5e8f76] transition">
                        WhatsApp Angga
                    </a>
                    <a href="#" class="block w-full py-2 rounded-full border border-gray-200 text-gray-600 text-sm font-medium hover:border-[#74A88E] hover:text-[#74A88E] transition">
                        Email Me
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition duration-300 border border-gray-100 flex flex-col items-center text-center group">
                <div class="w-24 h-24 rounded-full overflow-hidden mb-6 border-4 border-[#F2F9F5] group-hover:border-[#A8E6CF] transition">
                    <img src="---" alt="Elizabeth" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-1 font-serif">Elziabeth</h3>
                <p class="text-[#74A88E] text-xs font-semibold uppercase tracking-wider mb-6">Client Relations</p>
                
                <div class="space-y-3 w-full">
                    <a href="#" class="block w-full py-2 rounded-full bg-[#74A88E] text-white text-sm font-medium hover:bg-[#5e8f76] transition">
                        WhatsApp Elizabeth
                    </a>
                    <a href="#" class="block w-full py-2 rounded-full border border-gray-200 text-gray-600 text-sm font-medium hover:border-[#74A88E] hover:text-[#74A88E] transition">
                        Email Me
                    </a>
                </div>
            </div>

        </div>
    </section>

    <footer class="bg-[#1A1A1A] text-white py-8 text-center text-xs">
        &copy; 2025 Realty. All rights reserved.
    </footer>

</body>
</html>