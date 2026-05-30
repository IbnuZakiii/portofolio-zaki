{{-- resources/views/partials/sertificate.blade.php --}}
<section id="certificates" class="py-24 px-6 bg-gradient-to-b from-transparent to-purple-50/30 dark:to-purple-900/10">
    <div class="container mx-auto max-w-6xl">
        <div class="text-center mb-16 reveal">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">My <span class="bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">Certificates</span></h2>
            <div class="w-24 h-1 bg-gradient-to-r from-purple-600 to-pink-600 mx-auto rounded-full"></div>
            <p class="text-gray-600 dark:text-gray-400 mt-4 max-w-2xl mx-auto">Certifications and professional achievements that validate my skills.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($certificates as $index => $cert)
            <div class="group glass rounded-2xl overflow-hidden hover-glow transition-all duration-300 reveal flex flex-col h-full" style="transition-delay: {{ $index * 0.1 }}s">
                {{-- AREA GAMBAR YANG DIRAPIHKAN --}}
                <div class="relative w-full bg-gray-200 dark:bg-gray-800 overflow-hidden" style="aspect-ratio: 4 / 3;">
                    <img src="{{ $cert['image'] }}" alt="{{ $cert['title'] }}" class="w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-500">
                    
                    {{-- Badge tahun di pojok kanan atas --}}
                    <span class="absolute top-3 right-3 z-10 text-xs font-bold px-2.5 py-1 rounded-full bg-purple-600/90 text-white shadow-md backdrop-blur-sm">
                        {{ $cert['year'] }}
                    </span>

                    {{-- Overlay verifikasi saat hover --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-end p-3">
                        <a href="{{ $cert['verify_url'] }}" target="_blank" class="px-3 py-1.5 bg-white/20 backdrop-blur-md rounded-lg text-white text-sm font-medium hover:bg-white/30 transition shadow-lg">
                            <i class="fas fa-check-circle mr-1"></i> Verify
                        </a>
                    </div>
                </div>

                {{-- KONTEN CARD --}}
                <div class="p-5 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-gray-800 dark:text-white line-clamp-1 mb-1">{{ $cert['title'] }}</h3>
                    <p class="text-sm text-purple-600 dark:text-purple-400 mb-3 flex items-center gap-1">
                        <i class="fas fa-building text-xs"></i> {{ $cert['issuer'] }}
                    </p>
                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2 mb-4 flex-grow">{{ $cert['description'] }}</p>
                    
                    <div class="mt-auto pt-2">
                        <a href="{{ $cert['verify_url'] }}" target="_blank" class="inline-flex items-center gap-2 text-sm font-medium text-purple-600 dark:text-purple-400 hover:text-purple-800 dark:hover:text-purple-300 transition border-b border-purple-200 dark:border-purple-800 hover:border-purple-600 pb-0.5">
                            Verifikasi Sertifikat <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-12 reveal">
            <a href="#" class="inline-flex items-center gap-2 px-6 py-3 rounded-full border-2 border-purple-600 text-purple-600 dark:text-purple-400 font-semibold hover:bg-purple-600 hover:text-white dark:hover:text-white transition-all duration-300 shadow-md hover:shadow-purple-500/25">
                <span>View All Credentials</span>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<style>
    .line-clamp-1 {
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .glass {
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(2px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
    }
    .dark .glass {
        background: rgba(30, 30, 40, 0.6);
        border-color: rgba(255, 255, 255, 0.1);
    }
    .hover-glow:hover {
        box-shadow: 0 10px 30px -10px rgba(139, 92, 246, 0.4);
        transform: translateY(-4px);
    }
</style>