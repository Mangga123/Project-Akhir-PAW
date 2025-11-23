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
        body {
            font-family: 'Montserrat', sans-serif;
        }
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
                <div class="flex items-center gap-2 text-[#A8E6CF] font-bold text-2xl tracking-wide">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span>Realty</span>
                </div>

                <div class="hidden md:flex items-center space-x-12 text-gray-100 text-sm font-medium tracking-wide">
                    <a href="#" class="hover:text-white hover:underline underline-offset-4 decoration-2 transition">Home</a>
                    <a href="#" class="hover:text-white transition">About Us</a>
                    <a href="#" class="hover:text-white transition">Buy</a>
                    <a href="#" class="hover:text-white transition">Contact Us</a>
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
                    
                    <div class="w-full md:flex-1 border-b md:border-b-0 md:border-r border-gray-200 px-6 py-3 relative">
                        <button class="w-full flex items-center justify-between text-gray-700 hover:text-black text-left font-semibold text-sm md:text-base">
                            <span>Buy Apartment</span>
                            <svg class="w-4 h-4 ml-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>

                    <div class="w-full md:flex-1 px-6 py-3 relative">
                        <button class="w-full flex items-center justify-between text-gray-700 hover:text-black text-left font-semibold text-sm md:text-base">
                            <span>Category</span>
                            <svg class="w-4 h-4 ml-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>
                    
                    <div class="p-1 hidden md:block">
                        <button class="bg-[#A8E6CF] hover:bg-[#8cdfc0] text-white p-3 rounded-full transition shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="absolute bottom-12 w-full px-10 hidden md:flex justify-center items-center gap-4 text-xs text-white/90">
                    <span class="font-bold tracking-wide mr-2">Latest Listings:</span>
                    
                    <a href="#" class="flex items-center gap-2 bg-white/10 hover:bg-white/20 px-4 py-2 rounded-full backdrop-blur-md border border-white/10 transition">
                        <span class="w-2 h-2 rounded-full bg-[#A8E6CF]"></span>
                        Modern Family Home
                    </a>
                    
                    <a href="#" class="flex items-center gap-2 bg-white/10 hover:bg-white/20 px-4 py-2 rounded-full backdrop-blur-md border border-white/10 transition">
                        <span class="w-2 h-2 rounded-full bg-[#A8E6CF]"></span>
                        Chic Downtown Condo
                    </a>
                    
                    <a href="#" class="flex items-center gap-2 bg-white/10 hover:bg-white/20 px-4 py-2 rounded-full backdrop-blur-md border border-white/10 transition">
                        <span class="w-2 h-2 rounded-full bg-[#A8E6CF]"></span>
                        Cottage Near Mountains
                    </a>
                </div>

            </div>
        </section>

        <section class="relative w-full bg-white py-20 px-6 md:px-16">
            
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
                                <img src="https://i.pinimg.com/736x/a4/10/56/a41056cdfd827a6adfdac0f4467bf8af.jpg" class="w-full h-full object-cover transition transform group-hover:scale-105 duration-500" alt="Tower A">
                                <span class="absolute top-4 left-4 bg-gray-900/50 text-white text-[10px] px-3 py-1 rounded-full backdrop-blur-sm">For Rent</span>
                            </div>
                            <div class="text-xs text-gray-500 mb-1 flex gap-4">
                                <span>4 Beds</span> <span>2 Bath</span> <span>1203 Sqft.</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">TOWER A</h3>
                            <p class="text-sm text-gray-500 mb-3">456 Maple Street, Denver, CO 80202</p>
                            <p class="text-[#6FCF97] font-bold text-lg">????$</p>
                        </div>

                        <div class="group cursor-pointer">
                            <div class="relative overflow-hidden rounded-xl h-64 w-full mb-4">
                                <img src="https://i.pinimg.com/736x/85/b1/8b/85b18b02b5833937ce742174cb5e1e76.jpg" class="w-full h-full object-cover transition transform group-hover:scale-105 duration-500" alt="Tower B">
                                <span class="absolute top-4 left-4 bg-gray-900/50 text-white text-[10px] px-3 py-1 rounded-full backdrop-blur-sm">For Rent</span>
                            </div>
                            <div class="text-xs text-gray-500 mb-1 flex gap-4">
                                <span>4 Beds</span> <span>2 Bath</span> <span>1203 Sqft.</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">TOWER B</h3>
                            <p class="text-sm text-gray-500 mb-3">789 Pine Avenue, Denver, CO 80203</p>
                            <p class="text-[#6FCF97] font-bold text-lg">???$</p>
                        </div>

                        <div class="group cursor-pointer">
                            <div class="relative overflow-hidden rounded-xl h-64 w-full mb-4">
                                <img src="https://i.pinimg.com/736x/b9/c1/d4/b9c1d461a1672cc1fb17aa4974adb9cd.jpg" class="w-full h-full object-cover transition transform group-hover:scale-105 duration-500" alt="Tower C">
                                <span class="absolute top-4 left-4 bg-gray-900/50 text-white text-[10px] px-3 py-1 rounded-full backdrop-blur-sm">For Rent</span>
                            </div>
                            <div class="text-xs text-gray-500 mb-1 flex gap-4">
                                <span>4 Beds</span> <span>2 Bath</span> <span>1203 Sqft.</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">TOWER C</h3>
                            <p class="text-sm text-gray-500 mb-3">123 Oak Lane, Boulder, CO 80302</p>
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
                                <img src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover transition transform group-hover:scale-105 duration-500" alt="Studio">
                                <span class="absolute top-4 left-4 bg-gray-900/50 text-white text-[10px] px-3 py-1 rounded-full backdrop-blur-sm">For Rent</span>
                            </div>
                            <div class="text-xs text-gray-500 mb-1 flex gap-4">
                                <span>4 Beds</span> <span>2 Bath</span> <span>1203 Sqft.</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">STUDIO</h3>
                            <p class="text-sm text-gray-500 mb-3">101 Aspen Drive, Aspen, CO 81611</p>
                            <p class="text-[#6FCF97] font-bold text-lg">???$</p>
                        </div>

                        <div class="group cursor-pointer">
                            <div class="relative overflow-hidden rounded-xl h-64 w-full mb-4">
                                <img src="https://images.unsplash.com/photo-1581209410127-8211e90da024?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full h-full object-cover transition transform group-hover:scale-105 duration-500" alt="One Bedroom">
                                <span class="absolute top-4 left-4 bg-gray-900/50 text-white text-[10px] px-3 py-1 rounded-full backdrop-blur-sm">For Rent</span>
                            </div>
                            <div class="text-xs text-gray-500 mb-1 flex gap-4">
                                <span>4 Beds</span> <span>2 Bath</span> <span>1203 Sqft.</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">ONE BEDROOM</h3>
                            <p class="text-sm text-gray-500 mb-3">789 Elm Street, Fort Collins, CO 80521</p>
                            <p class="text-[#6FCF97] font-bold text-lg">????$</p>
                        </div>

                        <div class="group cursor-pointer">
                            <div class="relative overflow-hidden rounded-xl h-64 w-full mb-4">
                                <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover transition transform group-hover:scale-105 duration-500" alt="Two Bedroom">
                                <span class="absolute top-4 left-4 bg-gray-900/50 text-white text-[10px] px-3 py-1 rounded-full backdrop-blur-sm">For Rent</span>
                            </div>
                            <div class="text-xs text-gray-500 mb-1 flex gap-4">  
                                <span>4 Beds</span> <span>2 Bath</span> <span>1203 Sqft.</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">TWO BEDROOM</h3>
                            <p class="text-sm text-gray-500 mb-3">345 Cedar Road, Colorado Springs, CO 80907</p>
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
                            <a href="#" class="inline-flex items-center gap-2 px-5 py-2 rounded-full border border-gray-300 text-gray-800 text-xs font-semibold hover:bg-gray-900 hover:text-white transition duration-300">
                                Learn More About Us
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>

                        <div class="relative w-full h-[400px] lg:h-[480px] rounded-2xl overflow-hidden group shadow-md">
                            <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?q=80&w=800&auto=format&fit=crop" alt="Couple Laughing" class="w-full h-full object-cover transition duration-700 group-hover:scale-105">
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
                                    Read More <span class="text-base">&rsaquo;</span>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="flex flex-col gap-6 lg:pt-12"> <div class="relative w-full h-[300px] lg:h-[320px] rounded-2xl overflow-hidden group shadow-md">
                            <img src="https://images.unsplash.com/photo-1639664701039-f747268e2243?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Moving Boxes Interior" class="w-full h-full object-cover transition duration-700 group-hover:scale-105">
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
                                    Get Started <span class="text-base">&rsaquo;</span>
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
                                    Read More <span class="text-base">&rsaquo;</span>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        </section>
        
    </main>
</body>
</html>