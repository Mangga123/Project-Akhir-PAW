<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Realty</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
    
    <style> 
        body { font-family: 'Montserrat', sans-serif; } 
        .font-serif { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="bg-[#F5F5F2]"> <nav class="w-full px-6 md:px-16 py-6 flex justify-between items-center bg-white border-b border-gray-100">
        <a href="{{ url('/') }}" class="flex items-center gap-2 text-[#A8E6CF] font-bold text-2xl tracking-wide">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            <span>Realty</span>
        </a>
        <a href="{{ url('/') }}" class="text-sm font-medium text-gray-500 hover:text-[#74A88E] transition">
            &larr; Back to Home
        </a>
    </nav>

    <main class="py-16 px-6 md:px-16">
        
        <div class="max-w-6xl mx-auto bg-white shadow-sm flex flex-col md:flex-row min-h-[500px]">
            
            <div class="w-full md:w-1/2 relative min-h-[300px]">
                <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?q=80&w=1000&auto=format&fit=crop" 
                     alt="Interior Design" 
                     class="absolute inset-0 w-full h-full object-cover">
            </div>

            <div class="w-full md:w-1/2 p-12 md:p-16 flex flex-col justify-center items-center text-center">
                
                <h2 class="text-4xl md:text-5xl text-gray-800 mb-1 font-serif">
                    Know More
                </h2>
                <h3 class="text-4xl md:text-5xl text-[#F48C46] font-serif italic mb-8">
                    About Us ?
                </h3>

                <p class="text-gray-500 text-xs md:text-sm leading-relaxed mb-10 max-w-md">
                    At Realty, we believe that every space has a story. Our mission is to bring that story to life through thoughtful and innovative design. With over 20 years of experience, we specialize in creating personalized interiors that reflect our clients' unique tastes and lifestyles.
                </p>

                <a href="{{ route('contact') }}" class="border border-gray-300 px-6 py-2 text-gray-600 text-sm font-medium rounded-sm hover:bg-gray-50 transition flex items-center gap-2 font-serif italic">
                     More About Us &rarr;
                    </a>

            </div>
        </div>

        <div id="team" class="max-w-5xl mx-auto mt-24">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 text-left">
                <div class="bg-white p-8 shadow-sm border-t-4 border-[#A8E6CF]">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 font-serif">Visi Kami</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">
                        Menjadi platform properti nomor satu yang mengutamakan transparansi, kemudahan, dan kepuasan pelanggan dalam setiap transaksi hunian.
                    </p>
                </div>
                <div class="bg-white p-8 shadow-sm border-t-4 border-[#F48C46]">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 font-serif">Misi Kami</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">
                        Menyediakan apartement serta sitem management properti yang lengkap dan terverifikasi, serta memberikan layanan manajemen apartemen yang profesional dan responsif.
                    </p>
                </div>
            </div>
        </div>

    </main>

    <footer class="bg-[#1A1A1A] text-white py-8 text-center text-sm mt-12">
        &copy; 2025 Realty. All rights reserved.
    </footer>

</body>
</html>