<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Apartemen - Dokumentasi Proyek</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        ::-webkit-scrollbar-thumb {
            background: #94a3b8;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #64748b;
        }
        
        /* Terminal Window Styles */
        .terminal-window {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        .code-line {
            position: relative;
            padding-left: 1.5rem;
        }
        .code-line::before {
            content: '$';
            position: absolute;
            left: 0;
            color: #10b981; /* emerald-500 */
            font-weight: bold;
        }

        /* Chart Container Constraint */
        .chart-container {
            position: relative;
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            height: 300px;
        }
        @media (min-width: 768px) {
            .chart-container {
                height: 350px;
            }
        }
    </style>
    <!-- Chosen Palette: Slate (Neutral Background) + Indigo (Primary Brand) + Emerald (Success/Code) -->
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased">

    <!-- Application Structure Plan:
         1. Header: Navigation and Project Identity.
         2. Hero Section: Introduction with a mock visualization of the system's value (Dashboard).
         3. Features Grid: Interactive cards detailing the 5 core features.
         4. Tech Stack: Visual representation of technologies used.
         5. Installation Guide: Interactive "Terminal" UI with tabbed steps for setup.
         6. Database Schema: A visual breakdown of tables and relationships.
         7. Access Portal: Credentials and Path listing for easy reference.
    -->

    <!-- Navigation -->
    <nav class="fixed w-full bg-white/90 backdrop-blur-md shadow-sm z-50 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex-shrink-0 flex items-center gap-2 cursor-pointer" onclick="window.scrollTo(0,0)">
                    <span class="text-3xl">🏢</span>
                    <span class="font-bold text-xl tracking-tight text-slate-900">Apartment<span class="text-indigo-600">Sys</span></span>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#features" class="text-slate-600 hover:text-indigo-600 font-medium transition">Fitur</a>
                    <a href="#tech" class="text-slate-600 hover:text-indigo-600 font-medium transition">Teknologi</a>
                    <a href="#installation" class="text-slate-600 hover:text-indigo-600 font-medium transition">Instalasi</a>
                    <a href="#database" class="text-slate-600 hover:text-indigo-600 font-medium transition">Database</a>
                </div>
                <a href="#access" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg font-medium transition shadow-md">
                    Akses Demo
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="pt-32 pb-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center px-3 py-1 rounded-full bg-indigo-100 text-indigo-800 text-sm font-medium mb-6">
                    🚀 Sistem Informasi Berbasis Web
                </div>
                <h1 class="text-4xl sm:text-5xl font-extrabold text-slate-900 leading-tight mb-6">
                    Pengelolaan Apartemen <br>Jadi Lebih <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">Efisien</span>.
                </h1>
                <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                    Solusi lengkap untuk manajemen gedung apartemen. Mulai dari pendataan unit, manajemen penghuni, sistem tagihan otomatis, hingga pelaporan kerusakan fasilitas secara real-time.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#features" class="px-6 py-3 bg-white border-2 border-indigo-100 hover:border-indigo-600 text-indigo-600 font-bold rounded-xl transition duration-200">
                        Pelajari Fitur
                    </a>
                    <a href="#installation" class="px-6 py-3 bg-slate-900 hover:bg-slate-800 text-white font-bold rounded-xl transition duration-200 shadow-lg flex items-center gap-2">
                        <span>💻</span> Mulai Instalasi
                    </a>
                </div>
            </div>
            
            <!-- Visualization & Content Choices: 
                 Hero Viz -> Goal: Show 'Outcome' -> Method: Chart.js Doughnut -> Interaction: Tooltip -> 
                 Justification: Visually demonstrates the kind of data the system manages (Occupancy), making the abstract concept concrete immediately. -->
            <div class="bg-white p-6 rounded-2xl shadow-xl border border-slate-100 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-indigo-500 to-purple-500"></div>
                <div class="flex justify-between items-center mb-6">
                    <h3 class="font-bold text-slate-700">📊 Simulasi Dashboard Admin</h3>
                    <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded">Live Preview</span>
                </div>
                <div class="chart-container">
                    <canvas id="heroChart"></canvas>
                </div>
                <p class="text-center text-sm text-slate-500 mt-4">
                    *Visualisasi data okupansi unit yang dapat dipantau oleh Admin.
                </p>
            </div>
        </div>
    </header>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">✨ Fitur Utama</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Sistem ini dirancang dengan 5 pilar fungsionalitas utama untuk memudahkan operasional harian pengelola dan kenyamanan penghuni.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="group p-8 rounded-2xl bg-slate-50 hover:bg-indigo-50 transition border border-slate-100 hover:border-indigo-200 cursor-default">
                    <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition duration-300">🔐</div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Multi-Role Auth</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Sistem keamanan akses terpisah. <strong>Admin</strong> memiliki kontrol penuh pengelola, sementara <strong>Resident</strong> memiliki akses personal untuk data mereka sendiri.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="group p-8 rounded-2xl bg-slate-50 hover:bg-indigo-50 transition border border-slate-100 hover:border-indigo-200 cursor-default">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition duration-300">🏢</div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Manajemen Unit</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        CRUD lengkap untuk data apartemen. Mendukung berbagai tipe unit (Studio, 1BR, 2BR) dan pelacakan status real-time (Kosong/Terisi).
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="group p-8 rounded-2xl bg-slate-50 hover:bg-indigo-50 transition border border-slate-100 hover:border-indigo-200 cursor-default">
                    <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition duration-300">👥</div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Manajemen Penghuni</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Pendaftaran penghuni baru yang terintegrasi dengan pembuatan akun otomatis. Mengelola data profil dan masa sewa.
                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="group p-8 rounded-2xl bg-slate-50 hover:bg-indigo-50 transition border border-slate-100 hover:border-indigo-200 cursor-default">
                    <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition duration-300">💳</div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Sistem Tagihan</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Siklus keuangan digital. Admin membuat invoice, Penghuni upload bukti bayar, dan Admin melakukan verifikasi/validasi pembayaran.
                    </p>
                </div>

                <!-- Feature 5 -->
                <div class="group p-8 rounded-2xl bg-slate-50 hover:bg-indigo-50 transition border border-slate-100 hover:border-indigo-200 cursor-default">
                    <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition duration-300">🔧</div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Laporan Kerusakan</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Sistem tiket komplain. Penghuni dapat melapor kerusakan fasilitas beserta foto bukti, dan memantau status perbaikan oleh pengelola.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack Section -->
    <section id="tech" class="py-16 bg-slate-900 text-white">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-2xl font-bold mb-8">🛠️ Teknologi & Tools</h2>
            <div class="flex flex-wrap justify-center gap-6 sm:gap-12 opacity-80">
                <div class="flex flex-col items-center gap-2">
                    <span class="text-4xl">🔥</span>
                    <span class="font-semibold">Laravel 10/11</span>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <span class="text-4xl">🐬</span>
                    <span class="font-semibold">MySQL</span>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <span class="text-4xl">🎨</span>
                    <span class="font-semibold">Tailwind CSS</span>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <span class="text-4xl">🖥️</span>
                    <span class="font-semibold">XAMPP</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Installation Section -->
    <section id="installation" class="py-20 bg-slate-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-slate-900 mb-8 text-center">🚀 Panduan Instalasi</h2>
            
            <!-- Interactive Terminal Component -->
            <div class="terminal-window bg-slate-800 rounded-xl overflow-hidden border border-slate-700">
                <!-- Terminal Header with Tabs -->
                <div class="flex bg-slate-900 p-2 items-center gap-2 border-b border-slate-700 overflow-x-auto">
                    <div class="flex gap-1.5 ml-2 mr-4">
                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                    </div>
                    <!-- Tabs -->
                    <button onclick="switchTab('step1')" class="tab-btn px-4 py-1.5 rounded text-xs font-mono transition bg-slate-700 text-white" id="btn-step1">1. Setup</button>
                    <button onclick="switchTab('step2')" class="tab-btn px-4 py-1.5 rounded text-xs font-mono transition text-slate-400 hover:bg-slate-800" id="btn-step2">2. Database</button>
                    <button onclick="switchTab('step3')" class="tab-btn px-4 py-1.5 rounded text-xs font-mono transition text-slate-400 hover:bg-slate-800" id="btn-step3">3. Run</button>
                </div>

                <!-- Terminal Content Areas -->
                <div class="p-6 font-mono text-sm min-h-[200px]">
                    
                    <!-- Step 1 Content -->
                    <div id="step1" class="step-content">
                        <p class="text-slate-400 mb-4"># Mulai dengan meng-clone repository dan install dependensi</p>
                        <div class="group relative bg-slate-900 p-4 rounded-lg mb-3 border border-slate-700 hover:border-slate-600 transition">
                            <p class="code-line text-slate-300">git clone https://github.com/username-kamu/nama-repo.git</p>
                            <p class="code-line text-slate-300">cd nama-repo</p>
                            <button onclick="copyToClipboard(this, 'git clone https://github.com/username-kamu/nama-repo.git\ncd nama-repo')" class="absolute right-3 top-3 opacity-0 group-hover:opacity-100 bg-indigo-600 text-white px-2 py-1 rounded text-xs transition">Copy</button>
                        </div>
                        <div class="group relative bg-slate-900 p-4 rounded-lg mb-3 border border-slate-700 hover:border-slate-600 transition">
                            <p class="code-line text-slate-300">composer install</p>
                            <p class="code-line text-slate-300">npm install && npm run build</p>
                            <button onclick="copyToClipboard(this, 'composer install\nnpm install && npm run build')" class="absolute right-3 top-3 opacity-0 group-hover:opacity-100 bg-indigo-600 text-white px-2 py-1 rounded text-xs transition">Copy</button>
                        </div>
                    </div>

                    <!-- Step 2 Content -->
                    <div id="step2" class="step-content hidden">
                        <p class="text-slate-400 mb-4"># Konfigurasi environment dan database</p>
                        <div class="bg-indigo-900/30 p-3 rounded mb-4 border-l-4 border-indigo-500">
                            <p class="text-indigo-200 text-xs">ℹ️ Pastikan Anda sudah membuat database kosong bernama <strong>projectpaw</strong> di phpMyAdmin sebelum menjalankan migrasi.</p>
                        </div>
                        <div class="group relative bg-slate-900 p-4 rounded-lg mb-3 border border-slate-700 hover:border-slate-600 transition">
                            <p class="code-line text-slate-300">cp .env.example .env</p>
                            <p class="text-slate-500 italic my-1">// Edit .env: DB_DATABASE=projectpaw, DB_PORT=3306 (atau 3307)</p>
                            <p class="code-line text-slate-300">php artisan key:generate</p>
                            <p class="code-line text-slate-300">php artisan migrate:fresh --seed</p>
                            <button onclick="copyToClipboard(this, 'cp .env.example .env\nphp artisan key:generate\nphp artisan migrate:fresh --seed')" class="absolute right-3 top-3 opacity-0 group-hover:opacity-100 bg-indigo-600 text-white px-2 py-1 rounded text-xs transition">Copy</button>
                        </div>
                    </div>

                    <!-- Step 3 Content -->
                    <div id="step3" class="step-content hidden">
                        <p class="text-slate-400 mb-4"># Jalankan server lokal</p>
                        <div class="group relative bg-slate-900 p-4 rounded-lg mb-3 border border-slate-700 hover:border-slate-600 transition">
                            <p class="code-line text-slate-300">php artisan serve</p>
                            <button onclick="copyToClipboard(this, 'php artisan serve')" class="absolute right-3 top-3 opacity-0 group-hover:opacity-100 bg-indigo-600 text-white px-2 py-1 rounded text-xs transition">Copy</button>
                        </div>
                        <div class="mt-4 p-3 bg-green-900/20 border border-green-900/50 rounded text-green-400 text-xs">
                            ✅ Server akan berjalan di: http://127.0.0.1:8000
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Database Schema Section -->
    <section id="database" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-slate-900 mb-10 text-center">🗄️ Struktur Database</h2>
            
            <!-- Visualization Choice: Grid layout of tables. NO Mermaid used.
                 Goal: Organize -> Method: Styled HTML Grid -> Interaction: None needed, pure reference. -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Table: Users -->
                <div class="border border-slate-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
                    <div class="bg-slate-800 text-white px-4 py-2 font-mono font-bold flex items-center gap-2">
                        <span>👤</span> users
                    </div>
                    <div class="p-4 text-sm text-slate-600 space-y-1 font-mono bg-slate-50 h-full">
                        <div class="flex justify-between"><span class="text-indigo-600 font-bold">id</span> <span class="text-slate-400">PK</span></div>
                        <div>email</div>
                        <div>password</div>
                        <div>role_id <span class="text-xs text-slate-400">(FK: roles)</span></div>
                    </div>
                </div>

                <!-- Table: Units -->
                <div class="border border-slate-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
                    <div class="bg-slate-800 text-white px-4 py-2 font-mono font-bold flex items-center gap-2">
                        <span>🏢</span> units
                    </div>
                    <div class="p-4 text-sm text-slate-600 space-y-1 font-mono bg-slate-50 h-full">
                        <div class="flex justify-between"><span class="text-indigo-600 font-bold">id</span> <span class="text-slate-400">PK</span></div>
                        <div>unit_number</div>
                        <div>floor</div>
                        <div>status <span class="text-xs text-slate-400">(enum)</span></div>
                    </div>
                </div>

                <!-- Table: Residents -->
                <div class="border border-slate-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
                    <div class="bg-slate-800 text-white px-4 py-2 font-mono font-bold flex items-center gap-2">
                        <span>🏠</span> residents
                    </div>
                    <div class="p-4 text-sm text-slate-600 space-y-1 font-mono bg-slate-50 h-full">
                        <div class="flex justify-between"><span class="text-indigo-600 font-bold">id</span> <span class="text-slate-400">PK</span></div>
                        <div>user_id <span class="text-xs text-slate-400">(FK)</span></div>
                        <div>unit_id <span class="text-xs text-slate-400">(FK)</span></div>
                        <div>data_detail</div>
                    </div>
                </div>

                <!-- Table: Bills -->
                <div class="border border-slate-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
                    <div class="bg-slate-800 text-white px-4 py-2 font-mono font-bold flex items-center gap-2">
                        <span>💸</span> bills
                    </div>
                    <div class="p-4 text-sm text-slate-600 space-y-1 font-mono bg-slate-50 h-full">
                        <div class="flex justify-between"><span class="text-indigo-600 font-bold">id</span> <span class="text-slate-400">PK</span></div>
                        <div>amount</div>
                        <div>month</div>
                        <div>payment_id <span class="text-xs text-slate-400">(Ref)</span></div>
                    </div>
                </div>

                <!-- Table: Complaints -->
                <div class="border border-slate-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
                    <div class="bg-slate-800 text-white px-4 py-2 font-mono font-bold flex items-center gap-2">
                        <span>📣</span> complaints
                    </div>
                    <div class="p-4 text-sm text-slate-600 space-y-1 font-mono bg-slate-50 h-full">
                        <div class="flex justify-between"><span class="text-indigo-600 font-bold">id</span> <span class="text-slate-400">PK</span></div>
                        <div>title</div>
                        <div>description</div>
                        <div>photo_path</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Access Portal Section -->
    <section id="access" class="py-20 bg-indigo-600 text-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-8">🔑 Akses Demo</h2>
            <p class="mb-8 opacity-90">Gunakan kredensial berikut untuk menguji sistem di lingkungan lokal Anda.</p>
            
            <div class="grid md:grid-cols-2 gap-6 text-left">
                <!-- Admin Card -->
                <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 border border-white/20">
                    <h3 class="text-xl font-bold mb-4 flex items-center gap-2">👑 Super Admin</h3>
                    <div class="space-y-2 font-mono text-sm">
                        <div class="flex justify-between border-b border-white/20 pb-1">
                            <span class="opacity-70">Email:</span>
                            <span class="font-bold">admin@gmail.com</span>
                        </div>
                        <div class="flex justify-between pt-1">
                            <span class="opacity-70">Pass:</span>
                            <span class="font-bold">password</span>
                        </div>
                    </div>
                    <div class="mt-6 pt-4 border-t border-white/10">
                        <p class="text-xs opacity-70 mb-2">Akses URL:</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-black/30 px-2 py-1 rounded text-xs">/admin/dashboard</span>
                            <span class="bg-black/30 px-2 py-1 rounded text-xs">/admin/units</span>
                            <span class="bg-black/30 px-2 py-1 rounded text-xs">/admin/bills</span>
                        </div>
                    </div>
                </div>

                <!-- Resident Card -->
                <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 border border-white/20">
                    <h3 class="text-xl font-bold mb-4 flex items-center gap-2">🏠 Warga (Resident)</h3>
                    <div class="space-y-2 font-mono text-sm">
                        <div class="flex justify-between border-b border-white/20 pb-1">
                            <span class="opacity-70">Email:</span>
                            <span class="font-bold">warga@gmail.com</span>
                        </div>
                        <div class="flex justify-between pt-1">
                            <span class="opacity-70">Pass:</span>
                            <span class="font-bold">password</span>
                        </div>
                    </div>
                    <div class="mt-6 pt-4 border-t border-white/10">
                        <p class="text-xs opacity-70 mb-2">Akses URL:</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-black/30 px-2 py-1 rounded text-xs">/resident/bills</span>
                            <span class="bg-black/30 px-2 py-1 rounded text-xs">/resident/complaints</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-slate-900 text-slate-400 py-8 text-center text-sm border-t border-slate-800">
        <p>&copy; 2025 Kelompok PAW. Apartment Management System Project.</p>
    </footer>

    <script>
        // --- Logic: Terminal Tabs Switching ---
        function switchTab(stepId) {
            // Hide all contents
            document.querySelectorAll('.step-content').forEach(el => el.classList.add('hidden'));
            // Show selected content
            document.getElementById(stepId).classList.remove('hidden');
            
            // Reset buttons styles
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('bg-slate-700', 'text-white');
                btn.classList.add('text-slate-400', 'hover:bg-slate-800');
            });
            
            // Active button style
            const activeBtn = document.getElementById('btn-' + stepId);
            activeBtn.classList.remove('text-slate-400', 'hover:bg-slate-800');
            activeBtn.classList.add('bg-slate-700', 'text-white');
        }

        // --- Logic: Clipboard Copy ---
        function copyToClipboard(button, text) {
            navigator.clipboard.writeText(text).then(() => {
                const originalText = button.innerText;
                button.innerText = 'Copied!';
                button.classList.remove('bg-indigo-600');
                button.classList.add('bg-green-600');
                
                setTimeout(() => {
                    button.innerText = originalText;
                    button.classList.add('bg-indigo-600');
                    button.classList.remove('bg-green-600');
                }, 2000);
            });
        }

        // --- Logic: Hero Chart Visualization ---
        // Displays a mock distribution of Unit Occupancy to visualize system data
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('heroChart').getContext('2d');
            
            // Data simulating 50 Units
            const data = {
                labels: ['Terisi (Occupied)', 'Kosong (Vacant)', 'Maintenance'],
                datasets: [{
                    data: [35, 10, 5], // Mock data reflecting a busy apartment
                    backgroundColor: [
                        '#4f46e5', // Indigo-600
                        '#e2e8f0', // Slate-200
                        '#f43f5e'  // Rose-500
                    ],
                    borderWidth: 0,
                    hoverOffset: 4
                }]
            };

            const config = {
                type: 'doughnut',
                data: data,
                options: {
                    responsive: true,
                    maintainAspectRatio: false, // Critical for Tailwind container control
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                usePointStyle: true,
                                padding: 20,
                                font: {
                                    family: "'ui-sans-serif', 'system-ui', sans-serif",
                                    size: 12
                                }
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    let label = context.label || '';
                                    if (label) {
                                        label += ': ';
                                    }
                                    let value = context.raw;
                                    let total = context.chart._metasets[context.datasetIndex].total;
                                    let percentage = Math.round((value / total) * 100) + '%';
                                    return label + value + ' Units (' + percentage + ')';
                                }
                            }
                        }
                    },
                    cutout: '70%', // Thinner ring for modern look
                }
            };

            new Chart(ctx, config);
        });
    </script>
    <!-- CONFIRMATION: NO SVG graphics used (Unicode/FontAwesome logic applied). NO Mermaid JS used. -->
</body>
</html>
