<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Realty - High Quality Environment</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        html { scroll-behavior: smooth; } /* Tambahkan baris ini agar scroll-nya mulus */
        body { font-family: 'Montserrat', sans-serif; }
    </style>
    </style>
</head>
<body class="antialiased text-gray-800 bg-gray-50">

    <main class="w-full overflow-x-hidden">

        <section class="relative w-full h-screen min-h-[800px]">
            
            <div class="absolute inset-0 w-full h-full">
                <img src="https://images.unsplash.com/photo-1600585152220-90363fe7e115?q=80&w=1920&auto=format&fit=crop" 
                     alt="Couple Moving In" 
                     class="w-full h-full object-cover object-center">
                
                <div class="absolute inset-0 bg-black/30"></div>
            </div>

           <nav class="absolute top-0 left-0 w-full z-20 px-6 md:px-16 py-8 flex justify-between items-center">
                
                <div class="flex flex-col items-start gap-1">
                    <div class="flex items-center gap-2 text-[#A8E6CF] font-bold text-2xl tracking-wide">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span>Realty</span>
                    </div>

                    <a href="{{ route('login') }}" class="text-sm font-bold text-white border-2 border-white hover:bg-white hover:text-black px-4 py-1 rounded-full transition ml-1">
                Admin Login &rarr;
                    </a>
                </div>

                <div class="hidden md:flex items-center space-x-12 text-gray-100 text-sm font-medium tracking-wide">
                    <a href="#" class="hover:text-white hover:underline underline-offset-4 decoration-2 transition">Home</a>
                    <a href="{{ route('about') }}" class="hover:text-white transition">About Us</a>
                    <a href="#buy" class="hover:text-white transition">Buy</a>
                    <a href="{{ route('contact') }}" class="hover:text-white transition">Contact Us</a>
                </div>
                
                <div class="md:hidden text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </div>
            </nav>

            <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-4 pt-10">
                
                <p class="text-white text-[10px] md:text-xs font-semibold uppercase tracking-[0.3em] mb-5 opacity-90">
                    Welcome to one of the best real estate agency
                </p>

                <h1 class="text-white text-5xl md:text-7xl font-bold leading-tight mb-12 drop-shadow-xl">
                    HIGH QUALITY<br>ENVIRONMENT
                </h1>

                <div class="bg-white rounded-full w-full max-w-4xl flex flex-col md:flex-row items-center p-2 shadow-2xl">
                    
                  
                    
                    <div class="p-1 hidden md:block">
                                <path stroke-linecap="round"  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="absolute bottom-12 w-full px-10 hidden md:flex justify-center items-center gap-4 text-xs text-white/90">
                    <span class="font-bold tracking-wide mr-2">Anggota Realty Kami:</span>
                    
                    <a href="#" class="flex items-center gap-2 bg-white/10 hover:bg-white/20 px-4 py-2 rounded-full backdrop-blur-md border border-white/10 transition">
                        <span class="w-2 h-2 rounded-full bg-[#A8E6CF]"></span>
                        MOHAMMAD VIZIE HAFIYYAN KANISHKA
                    </a>
                    
                    <a href="#" class="flex items-center gap-2 bg-white/10 hover:bg-white/20 px-4 py-2 rounded-full backdrop-blur-md border border-white/10 transition">
                        <span class="w-2 h-2 rounded-full bg-[#A8E6CF]"></span>
                        ANGGA PRIMA RAMADHAN
                    </a>
                    
                    <a href="#" class="flex items-center gap-2 bg-white/10 hover:bg-white/20 px-4 py-2 rounded-full backdrop-blur-md border border-white/10 transition">
                        <span class="w-2 h-2 rounded-full bg-[#A8E6CF]"></span>
                        Isi Nama Ya Janlupa
                    </a>
                </div>

            </div>
        </section>


        <section id="buy" class="relative w-full bg-white py-20 px-6 md:px-16">
            
            <div class="absolute top-10 left-0 opacity-10 pointer-events-none">
                <svg width="300" height="300" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#A8E6CF" d="M44.7,-76.4C58.9,-69.2,71.8,-59.1,81.6,-46.6C91.4,-34.1,98.1,-19.2,95.8,-5.3C93.5,8.6,82.2,21.5,71.6,32.6C61,43.7,51.1,52.9,40.4,60.8C29.7,68.7,18.2,75.3,5.8,77.2C-6.6,79.1,-19.8,76.3,-32.2,70.3C-44.6,64.3,-56.1,55.1,-65.3,43.7C-74.5,32.3,-81.4,18.7,-82.9,4.6C-84.4,-9.5,-80.5,-24.1,-72.5,-36.4C-64.5,-48.7,-52.4,-58.7,-39.6,-66.5C-26.8,-74.3,-13.4,-79.9,0.8,-81.2C15,-82.5,30,-79.5,44.7,-76.4Z" transform="translate(100 100)" />
                </svg>
            </div>

            <div class="max-w-7xl mx-auto">

                <div class="mb-24">
                    <h2 class="text-center text-3xl md:text-4xl font-bold text-gray-900 mb-12 tracking-wide uppercase">
                        Tipe Studio
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        
                        <div class="group cursor-pointer">
                            <div class="relative overflow-hidden rounded-xl h-64 w-full mb-4">
                                <img src="https://i.pinimg.com/736x/98/35/3d/98353d71f395306b117f14c6b5a70adf.jpg" class="w-full h-full object-cover transition transform group-hover:scale-105 duration-500" alt="Tower A">
                                <span class="absolute top-4 left-4 bg-gray-900/50 text-white text-[10px] px-3 py-1 rounded-full backdrop-blur-sm">For Rent</span>
                            </div>
                            <div class="text-xs text-gray-500 mb-1 flex gap-4">
                                <span>Green enviroment</span> <span>19 floor</span> <span>1203 Sqft.</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">TOWER A</h3>
                            <p class="text-sm text-gray-500 mb-3">456 Soehat, Graya, CO 422</p>
                            <p class="text-[#6FCF97] font-bold text-lg">????$</p>
                        </div>

                        <div class="group cursor-pointer">
                            <div class="relative overflow-hidden rounded-xl h-64 w-full mb-4">
                                <img src="https://i.pinimg.com/736x/26/56/8d/26568d52cbbc0b5cafe4c7087a02e20c.jpg" class="w-full h-full object-cover transition transform group-hover:scale-105 duration-500" alt="Tower B">
                                <span class="absolute top-4 left-4 bg-gray-900/50 text-white text-[10px] px-3 py-1 rounded-full backdrop-blur-sm">For Rent</span>
                            </div>
                            <div class="text-xs text-gray-500 mb-1 flex gap-4">
                                <span>4 garden</span> <span>23 floor </span> <span>1239 Sqft.</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">TOWER B</h3>
                            <p class="text-sm text-gray-500 mb-3">789 Sigura Gura, Bendungan, CO 80203</p>
                            <p class="text-[#6FCF97] font-bold text-lg">???$</p>
                        </div>

                        <div class="group cursor-pointer">
                            <div class="relative overflow-hidden rounded-xl h-64 w-full mb-4">
                                <img src="https://i.pinimg.com/1200x/fb/00/08/fb00086c7b7f7064d8e2d60321248b68.jpg" class="w-full h-full object-cover transition transform group-hover:scale-105 duration-500" alt="Tower C">
                                <span class="absolute top-4 left-4 bg-gray-900/50 text-white text-[10px] px-3 py-1 rounded-full backdrop-blur-sm">For Rent</span>
                            </div>
                            <div class="text-xs text-gray-500 mb-1 flex gap-4">
                                <span>2 garden and close to city</span> <span>4 gate</span> <span>1203 Sqft.</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">TOWER C</h3>
                            <p class="text-sm text-gray-500 mb-3">123 FILKOM, VETERAN, CO 21</p>
                            <p class="text-[#6FCF97] font-bold text-lg">????$</p>
                        </div>

                    </div>
                </div>

                <div>
                    <h2 class="text-center text-3xl md:text-4xl font-bold text-gray-900 mb-12 tracking-wide uppercase">
                        Tipe Unit
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        
                        <div class="group cursor-pointer">
                            <div class="relative overflow-hidden rounded-xl h-64 w-full mb-4">
                                <img src="https://i.pinimg.com/1200x/ab/f3/0e/abf30e1a16b5fd4441d749c0778d7a2e.jpg" class="w-full h-full object-cover transition transform group-hover:scale-105 duration-500" alt="Studio">
                                <span class="absolute top-4 left-4 bg-gray-900/50 text-white text-[10px] px-3 py-1 rounded-full backdrop-blur-sm">For Rent</span>
                            </div>
                            <div class="text-xs text-gray-500 mb-1 flex gap-4">
                                <span>4 Beds</span> <span>2 Bath</span> <span>1203 Sqft.</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">STUDIO</h3>
                            <p class="text-sm text-gray-500 mb-3">1 Elite room with fully cozy</p>
                            <p class="text-[#6FCF97] font-bold text-lg">???$</p>
                        </div>

                        <div class="group cursor-pointer">
                            <div class="relative overflow-hidden rounded-xl h-64 w-full mb-4">
                                <img src="https://i.pinimg.com/1200x/77/1c/a2/771ca2589506100159dfe138142677ff.jpg" class="w-full h-full object-cover transition transform group-hover:scale-105 duration-500" alt="One Bedroom">
                                <span class="absolute top-4 left-4 bg-gray-900/50 text-white text-[10px] px-3 py-1 rounded-full backdrop-blur-sm">For Rent</span>
                            </div>
                            <div class="text-xs text-gray-500 mb-1 flex gap-4">
                                <span>4 Beds</span> <span>2 Bath</span> <span>1203 Sqft.</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">ONE BEDROOM</h3>
                            <p class="text-sm text-gray-500 mb-3">Best for personal enviroment</p>
                            <p class="text-[#6FCF97] font-bold text-lg">????$</p>
                        </div>

                        <div class="group cursor-pointer">
                            <div class="relative overflow-hidden rounded-xl h-64 w-full mb-4">
                                <img src="https://i.pinimg.com/1200x/b6/be/83/b6be83496e8eba760237d329c3b5cb68.jpg" class="w-full h-full object-cover transition transform group-hover:scale-105 duration-500" alt="Two Bedroom">
                                <span class="absolute top-4 left-4 bg-gray-900/50 text-white text-[10px] px-3 py-1 rounded-full backdrop-blur-sm">For Rent</span>
                            </div>
                            <div class="text-xs text-gray-500 mb-1 flex gap-4">
                                <span>4 Beds</span> <span>2 Bath</span> <span>1203 Sqft.</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">TWO BEDROOM</h3>
                            <p class="text-sm text-gray-500 mb-3">For comfortability with another and larger room</p>
                            <p class="text-[#6FCF97] font-bold text-lg">???$</p>
                        </div>

                    </div>
                </div>

            </div>
        </section>






        <section class="w-full bg-[#F2F9F5] py-24 px-6 md:px-16">
            
            <div class="max-w-7xl mx-auto">
                
                <h2 class="text-3xl md:text-4xl font-medium text-gray-900 mb-16 tracking-wide">
                    Kenapa Lingkungan Kami?
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-4 border-t border-b border-gray-200 divide-y md:divide-y-0 md:divide-x divide-gray-200">
                    
                    <div class="py-10 md:pr-8 flex flex-col items-start">
                        <div class="w-14 h-14 bg-[#74A88E] rounded-full flex items-center justify-center text-white mb-6 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Easy To Find</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">
                            Apartement Realty kami sangat strategis untuk kemanapun anda inginkan.
                        </p>
                    </div>

                    <div class="py-10 md:px-8 flex flex-col items-start">
                        <div class="w-14 h-14 bg-[#74A88E] rounded-full flex items-center justify-center text-white mb-6 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Affordable Prices</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">
                            Dengan fasilitas dan penempatan yang strategis, kami menawarkan harga yang menarik.
                        </p>
                    </div>

                    <div class="py-10 md:px-8 flex flex-col items-start">
                        <div class="w-14 h-14 bg-[#74A88E] rounded-full flex items-center justify-center text-white mb-6 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Quickly Process</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">
                            Memberikan layanan yang kami jamin bisa memuaskan anda.
                        </p>
                    </div>

                    <div class="py-10 md:pl-8 flex flex-col items-start">
                        <div class="w-14 h-14 bg-[#74A88E] rounded-full flex items-center justify-center text-white mb-6 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Happy Customers</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">
                            Lingkungan yang baik dan nyaman hanya untuk anda dalam melakukan produktivitas sehari hari.
                        </p>
                    </div>

                </div>
            </div>
        </section>









<section class="w-full bg-white py-16 px-6 md:px-16"> <div class="max-w-6xl mx-auto">

                <div class="flex flex-col items-center text-center mb-12"> <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#74A88E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="mb-4">
                        <path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"></path>
                        <path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"></path>
                    </svg>
                    
                    <h2 class="text-2xl md:text-4xl font-medium text-gray-900 leading-snug max-w-3xl">
                        Ketenangan datang dari lingkungan nyaman<br class="hidden md:block"> dan baik
                    </h2>
                    
                    <p class="mt-4 font-bold text-gray-900 text-sm">
                        Realty <span class="font-normal text-gray-500 ml-1">Malang, 2025</span>
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8"> <div class="flex flex-col gap-8">
                        
                        <div class="pt-2 lg:pr-8">
                            <p class="text-gray-600 text-base mb-6 leading-relaxed">
                                Jelajah kisah dari perjuangan kami membangun lingkungan tenang
                            </p>
                            <a href="{{ route('about') }}" class="inline-flex items-center gap-2 px-5 py-2 rounded-full border border-gray-300 text-gray-800 text-xs font-semibold hover:bg-gray-900 hover:text-white transition duration-300">
                             Learn More About Us
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                  </svg>
                                </a>
                        </div>

                        <div class="relative w-full h-[400px] lg:h-[480px] rounded-2xl overflow-hidden group shadow-md">
                            <img src="https://i.pinimg.com/736x/fb/99/85/fb99852a13b4910cf8377397eabf7eb1.jpg" alt="Couple Laughing" class="w-full h-full object-cover transition duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                            
                            <div class="absolute bottom-0 left-0 p-6 w-full">
                                <div class="w-10 h-10 rounded-full bg-[#10B981] flex items-center justify-center text-white mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                                <h3 class="text-white text-xl md:text-2xl font-medium mb-2">Expert Advice And<br>Guidance</h3>
                                <p class="text-gray-300 text-xs md:text-sm mb-4 leading-relaxed max-w-xs">
                                    Siap membantu anda memilih yang terbaik demi ruangan yang nyaman.
                                </p>
                                <a href="#" class="text-white font-semibold text-xs flex items-center gap-2 hover:gap-3 transition-all">
                               
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="flex flex-col gap-6 lg:pt-12"> <div class="relative w-full h-[300px] lg:h-[320px] rounded-2xl overflow-hidden group shadow-md">
                            <img src="{{ asset('images/IMG_0705.jpg') }}" alt="Couple Laughing" class="w-full h-full object-cover transition duration-700 group-hover:scale-105">

                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                            
                            <div class="absolute bottom-0 left-0 p-6 w-full">
                                <div class="w-10 h-10 rounded-full bg-[#10B981] flex items-center justify-center text-white mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </div>
                                <h3 class="text-white text-xl font-medium mb-2">Discover Your Dream<br>Room</h3>
                                <p class="text-gray-300 text-xs mb-4 leading-relaxed">
                                    Membuat kamar anda menjadi lebih sesuai dengan kebutuhan anda.
                                </p>
                                <a href="#" class="text-white font-semibold text-xs flex items-center gap-2 hover:gap-3 transition-all">
                            
                                </a>
                            </div>
                        </div>

                        <div class="relative w-full h-[300px] lg:h-[320px] rounded-2xl overflow-hidden group shadow-md">
                            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=800&auto=format&fit=crop" alt="Carrying Boxes" class="w-full h-full object-cover transition duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                            
                            <div class="absolute bottom-0 left-0 p-6 w-full">
                                <div class="w-10 h-10 rounded-full bg-[#10B981] flex items-center justify-center text-white mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </div>
                                <h3 class="text-white text-xl font-medium mb-2">Comprehensive<br>Management Services</h3>
                                <p class="text-gray-300 text-xs mb-4 leading-relaxed">
                                    Sistem yang dijamin membuat anda tidak menunggu lama.
                                </p>
                                <a href="#" class="text-white font-semibold text-xs flex items-center gap-2 hover:gap-3 transition-all">
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>






        <section class="w-full bg-white px-4 md:px-8 pb-16 mt-32">
            
            <div class="max-w-5xl mx-auto">
                
                <div class="relative bg-[#74A88E] rounded-[24px] py-8 px-6 md:py-12 md:px-10 text-center overflow-hidden shadow-md flex flex-col justify-center items-center">
                    
                    <div class="absolute -right-4 -bottom-12 opacity-20 pointer-events-none">
                        <svg width="250" height="250" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"></path>
                            <path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"></path>
                        </svg>
                    </div>

                    <div class="relative z-10 max-w-2xl mx-auto">
                        <h2 class="text-2xl md:text-3xl font-medium text-white mb-2 leading-tight">
                            Let's Simply Begin With Realty
                        </h2>
                        <p class="text-white/90 text-[10px] md:text-xs mb-6 font-light max-w-md mx-auto leading-relaxed">
                            Mari mulai bersama kami, REALTY.
                        </p>
                        
                        <div class="flex flex-col sm:flex-row gap-3 justify-center items-center">
                            <a href="#" class="bg-[#C1F0D0] text-[#2D5B43] px-5 py-2 rounded-full font-semibold hover:bg-white transition flex items-center gap-2 shadow-sm text-[10px] md:text-xs">
                                Get In Touch
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap justify-center md:justify-between items-center gap-6 md:gap-10 mt-10 px-4 md:px-8 opacity-50">
                    <span class="text-2xl md:text-3xl font-serif text-gray-300">VIZIE</span>
                    <span class="text-2xl md:text-3xl font-sans font-bold text-gray-300">PROJECT</span>
                    <span class="text-2xl md:text-3xl font-light text-gray-300">ANGGA</span>
                    <span class="text-xl md:text-2xl font-mono font-bold text-gray-300 tracking-widest">Isi nama kalian ini oi</span>
                </div>

            </div>
        </section>

        <footer class="bg-[#1A1A1A] text-white pt-16 pb-8 px-6 md:px-16">
            <div class="max-w-5xl mx-auto"> <div class="flex flex-col md:flex-row justify-between items-start mb-10">
                    <div class="flex items-center gap-2 text-[#A8E6CF] font-bold text-xl mb-6 md:mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        Realty
                    </div>
                    
                    <div class="flex gap-3">
                        <a href="#" class="w-8 h-8 bg-white/10 rounded-full flex items-center justify-center hover:bg-[#A8E6CF] hover:text-[#1A1A1A] transition">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                        <a href="#" class="w-8 h-8 bg-white/10 rounded-full flex items-center justify-center hover:bg-[#A8E6CF] hover:text-[#1A1A1A] transition">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 border-t border-white/10 pt-8 mb-8">
                    <div>
                        <h4 class="text-sm font-medium text-white mb-4">Contact Us</h4>
                        <ul class="space-y-2 text-[10px] md:text-xs text-gray-400">
                            <li>123 FILKOM MALANG</li>
                            <li>+1923891</li>
                            <li>info@yourinfo.com</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-sm font-medium text-white mb-4">Quick Links</h4>
                        <ul class="space-y-2 text-[10px] md:text-xs text-gray-400">
                            <li><a href="#" class="hover:text-[#A8E6CF] transition">Home</a></li>
                            <li><a href="#" class="hover:text-[#A8E6CF] transition">About Us</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-sm font-medium text-white mb-4">Categories</h4>
                        <ul class="space-y-2 text-[10px] md:text-xs text-gray-400">
                            <li><a href="#" class="hover:text-[#A8E6CF] transition">To Purchase</a></li>
                            <li><a href="#" class="hover:text-[#A8E6CF] transition">For Rental</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-sm font-medium text-white mb-4">Help</h4>
                        <ul class="space-y-2 text-[10px] md:text-xs text-gray-400">
                            <li><a href="#" class="hover:text-[#A8E6CF] transition">Privacy</a></li>
                            <li><a href="#" class="hover:text-[#A8E6CF] transition">FAQs</a></li>
                        </ul>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row justify-between items-center text-[10px] text-gray-500 border-t border-white/10 pt-4">
                    <p>&copy; 2025 Realty by Vizie hafiyyan.</p>
                    <p>Designed by figma vizie<a href="#" class="text-white hover:underline"></a></p>
                </div>

            </div>
        </footer>



    </main>
</body>
</html>