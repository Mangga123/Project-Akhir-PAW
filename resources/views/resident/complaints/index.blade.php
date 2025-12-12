<x-app-layout>
    <div class="max-w-6xl mx-auto mt-4">
        
        <div class="mb-10">
            <h2 class="text-3xl font-serif text-gray-800">Layanan Laporan & Keluhan</h2>
            <p class="text-gray-500 mt-2 text-sm leading-relaxed max-w-xl">
                Sampaikan kendala di unit Anda. Kami siap membantu memperbaiki demi kenyamanan Anda.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <div class="lg:col-span-1">
                <div class="bg-white p-8 rounded-[30px] shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-[#EBE5E0] sticky top-6">
                    
                    <h3 class="text-2xl font-serif text-gray-800 mb-6 flex items-center gap-3">
                        <span class="w-10 h-10 rounded-full bg-[#E6F4EA] flex items-center justify-center text-[#74A88E]">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                        </span>
                        Buat Laporan
                    </h3>
                    
                    <form action="{{ route('resident.complaints.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-5">
                            <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Judul Masalah</label>
                            <input type="text" name="title" 
                                   class="w-full rounded-2xl border-transparent bg-[#F9F9F7] focus:bg-white focus:border-[#74A88E] focus:ring focus:ring-[#74A88E] focus:ring-opacity-20 text-gray-700 py-3 px-4 transition-all duration-300 placeholder-gray-400 font-medium" 
                                   placeholder="Contoh: Keran air bocor" required>
                        </div>

                        <div class="mb-5">
                            <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Deskripsi Detail</label>
                            <textarea name="description" rows="4" 
                                      class="w-full rounded-2xl border-transparent bg-[#F9F9F7] focus:bg-white focus:border-[#74A88E] focus:ring focus:ring-[#74A88E] focus:ring-opacity-20 text-gray-700 py-3 px-4 transition-all duration-300 placeholder-gray-400" 
                                      placeholder="Jelaskan detail kerusakan yang terjadi..." required></textarea>
                        </div>

                        <div class="mb-8">
                            <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Foto Bukti (Opsional)</label>
                            <input type="file" name="image" 
                                   class="block w-full text-xs text-gray-500
                                          file:mr-4 file:py-2.5 file:px-4
                                          file:rounded-full file:border-0
                                          file:text-xs file:font-bold
                                          file:bg-[#F2F0EB] file:text-[#74A88E]
                                          hover:file:bg-[#E6E4E0]
                                          cursor-pointer">
                        </div>

                        <button type="submit" class="w-full bg-[#74A88E] hover:bg-[#5e8f76] text-white font-bold py-3.5 rounded-2xl shadow-sm hover:shadow-md transition duration-300 flex justify-center items-center gap-2 transform hover:-translate-y-0.5 text-sm uppercase tracking-wide">
                            <span>Kirim Laporan</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                        </button>
                    </form>
                </div>
            </div>

            <div class="lg:col-span-2">
                <h3 class="text-2xl font-serif text-gray-800 mb-6 ml-2">Riwayat Laporan Saya</h3>
                
                <div class="space-y-5">
                    @forelse ($complaints as $complaint)
                    <div class="bg-white p-6 rounded-[24px] shadow-sm border border-[#EBE5E0] flex gap-5 items-start hover:border-[#D6D4D0] transition duration-300">
                        
                        <div class="shrink-0">
                            @if($complaint->image)
                                <img src="{{ asset('complaints/' . $complaint->image) }}" class="w-24 h-24 object-cover rounded-2xl border border-gray-100 shadow-inner" alt="Foto">
                            @else
                                <div class="w-24 h-24 bg-[#F9F9F7] rounded-2xl flex flex-col items-center justify-center text-gray-300 border border-gray-100">
                                    <svg class="w-8 h-8 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    <span class="text-[10px]">No Foto</span>
                                </div>
                            @endif
                        </div>

                        <div class="flex-1 min-w-0 py-1">
                            <div class="flex justify-between items-start mb-2">
                                <h4 class="text-xl font-bold text-gray-800 truncate font-serif">{{ $complaint->title }}</h4>
                                
                                @if($complaint->status == 'Selesai')
                                    <span class="px-3 py-1 rounded-full text-[10px] font-bold bg-[#E6F4EA] text-[#1E4620] border border-[#CEEAD6]">Selesai</span>
                                @elseif($complaint->status == 'Proses')
                                    <span class="px-3 py-1 rounded-full text-[10px] font-bold bg-[#EBF5FF] text-[#1E429F] border border-[#B3D7FF]">Diproses</span>
                                @else
                                    <span class="px-3 py-1 rounded-full text-[10px] font-bold bg-[#FFF7ED] text-[#9A3412] border border-[#FFEDD5]">Menunggu</span>
                                @endif
                            </div>
                            
                            <p class="text-sm text-gray-500 leading-relaxed line-clamp-2 mb-3">{{ $complaint->description }}</p>
                            
                            <div class="flex items-center gap-2 text-xs text-gray-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                {{ $complaint->created_at->format('d M Y, H:i') }}
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="text-center py-16 bg-white rounded-[30px] border border-dashed border-[#D6D4D0]">
                        <div class="w-16 h-16 bg-[#F2F0EB] rounded-full flex items-center justify-center mx-auto mb-4 text-[#74A88E]">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <p class="text-gray-500 font-medium">Belum ada laporan kerusakan.</p>
                        <p class="text-xs text-gray-400 mt-1">Unit Anda dalam kondisi prima!</p>
                    </div>
                    @endforelse
                </div>
            </div>

        </div>
    </div>
</x-app-layout>