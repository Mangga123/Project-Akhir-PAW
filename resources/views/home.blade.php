<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realty - What My Clients Says</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-serif { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="bg-[#F5F5F2]"> <nav class="flex justify-between items-center px-10 py-6 bg-[#F5F5F2]">
        <div class="font-bold text-2xl text-gray-800">Realty</div>
        <div>
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm font-medium text-gray-600 hover:text-black">Kembali ke Dashboard &rarr;</a>
            @else
                <a href="{{ route('login') }}" class="text-sm font-medium text-gray-600 hover:text-black">Login</a>
            @endauth
        </div>
    </nav>

    <section class="w-full py-20 px-6 md:px-16 flex flex-col items-center justify-center min-h-[80vh]">
        
        <div class="max-w-7xl mx-auto w-full">
            
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl text-gray-900 mb-2">
                    What My <br>
                    <span class="text-[#F48C46] font-serif italic font-semibold">Clients Says?</span>
                </h2>
                <p class="text-gray-500 text-sm mt-4 max-w-md mx-auto">
                    Lihat ulasan dari kostumer apartement kami
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <div class="bg-white p-10 border border-gray-200 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] h-full flex flex-col justify-between transition hover:-translate-y-1 duration-300">
                    <p class="text-gray-500 text-lg leading-relaxed mb-8">
                        Apartement yang sangat baik dan bagus, dekat dengan toko dan hiburan
                    </p>
                    <div>
                        <h4 class="text-gray-900 font-bold text-lg font-serif">Mohammad Vizie<br>Hafiyyan Kansihka</h4>
                        <p class="text-gray-400 text-[10px] uppercase tracking-widest mt-1">KG Architects</p>
                    </div>
                </div>

                <div class="bg-white p-10 border border-gray-200 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] h-full flex flex-col justify-between transition hover:-translate-y-1 duration-300">
                    <p class="text-gray-500 text-lg leading-relaxed mb-8">
                        Kamar Studionya lengkapp, ada view buat ke garden yang bikin jadi poin plus
                    </p>
                    <div>
                        <h4 class="text-gray-900 font-bold text-lg font-serif">Angga Prima Ramadhan</h4>
                        <p class="text-gray-400 text-[10px] uppercase tracking-widest mt-1">KG Architects</p>
                    </div>
                </div>

                <div class="bg-white p-10 border border-gray-200 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] h-full flex flex-col justify-between transition hover:-translate-y-1 duration-300">
                    <p class="text-gray-500 text-lg leading-relaxed mb-8">
                        Layananya cepett, terus kamarnya juga worth it buat harganya yang dibawah standar
                    </p>
                    <div>
                        <h4 class="text-gray-900 font-bold text-lg font-serif">Elizabeth</h4>
                        <p class="text-gray-400 text-[10px] uppercase tracking-widest mt-1">KG Architects</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

</body>
</html>

