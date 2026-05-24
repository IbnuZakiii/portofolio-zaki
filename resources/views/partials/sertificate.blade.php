{{-- resources/views/partials/sertificate.blade.php --}}
<section id="certificates" class="py-24 px-6 bg-gradient-to-b from-transparent to-purple-50/30 dark:to-purple-900/10">
    <div class="container mx-auto max-w-6xl">
        <div class="text-center mb-16 reveal">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Sertifikat <span class="bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent"> Saya</span></h2>
            <div class="w-24 h-1 bg-gradient-to-r from-purple-600 to-pink-600 mx-auto rounded-full"></div>
            <p class="text-gray-600 dark:text-gray-400 mt-4 max-w-2xl mx-auto">Sertifikasi dan prestasi profesional yang memvalidasi kemampuan saya.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($certificates as $index => $cert)
            <div class="group glass rounded-2xl overflow-hidden hover-glow transition-all duration-300 reveal" style="transition-delay: {{ $index * 0.1 }}s">
                <div class="relative overflow-hidden h-48">
                    <img src="{{ $cert['image'] }}" alt="{{ $cert['title'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-end p-3">
                        <a href="{{ $cert['verify_url'] }}" target="_blank" class="px-3 py-1 bg-white/20 backdrop-blur rounded-lg text-white text-xs hover:bg-white/30 transition">
                            <i class="fas fa-check-circle mr-1"></i> Verify
                        </a>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg font-bold text-gray-800 dark:text-white line-clamp-1">{{ $cert['title'] }}</h3>
                        <span class="text-xs font-semibold px-2 py-1 rounded-full bg-purple-100 dark:bg-purple-900/50 text-purple-700 dark:text-purple-300">{{ $cert['year'] }}</span>
                    </div>
                    <p class="text-sm text-purple-600 dark:text-purple-400 mb-2">
                        <i class="fas fa-building mr-1"></i> {{ $cert['issuer'] }}
                    </p>
                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">{{ $cert['description'] }}</p>
                </div>
                <div class="px-5 pb-5">
                    <a href="{{ $cert['verify_url'] }}" target="_blank" class="inline-flex items-center text-sm text-purple-600 dark:text-purple-400 hover:text-purple-800 dark:hover:text-purple-300 transition">
                        Verifikasi Sertifikat <i class="fas fa-arrow-right ml-1 text-xs"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-12 reveal">
            <a href="#" class="inline-flex items-center space-x-2 px-6 py-3 rounded-full border-2 border-purple-600 text-purple-600 dark:text-purple-400 hover:bg-purple-600 hover:text-white transition-all">
                <span>Lihat Semua Kredensial</span>
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
</style>