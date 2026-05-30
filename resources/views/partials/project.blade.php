{{-- resources/views/partials/project.blade.php --}}
<section id="projects" class="py-24 px-6 bg-gradient-to-b from-transparent to-purple-50/30 dark:to-purple-900/10">
    <div class="container mx-auto max-w-6xl">
        <div class="text-center mb-16 reveal">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">My <span class="bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">Projects</span></h2>
            <div class="w-24 h-1 bg-gradient-to-r from-purple-600 to-pink-600 mx-auto rounded-full"></div>
                <p class="text-gray-600 dark:text-gray-400 mt-4 max-w-2xl mx-auto">A few of my best works that showcase my skills and interests.</p>
            </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $index => $project)
            <div class="group glass rounded-2xl overflow-hidden hover-glow transition-all duration-300 reveal" style="transition-delay: {{ $index * 0.1 }}s">
                <div class="relative overflow-hidden h-56">
                    <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-center p-4">
                        <div class="flex space-x-3">
                            <a href="{{ $project['demo_url'] }}" target="_blank" class="px-3 py-2 bg-white/20 backdrop-blur rounded-lg text-white text-sm hover:bg-white/30 transition">
                                <i class="fas fa-external-link-alt mr-1"></i> Demo
                            </a>
                            <a href="{{ $project['code_url'] }}" target="_blank" class="px-3 py-2 bg-white/20 backdrop-blur rounded-lg text-white text-sm hover:bg-white/30 transition">
                                <i class="fab fa-github mr-1"></i> Code
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">{{ $project['title'] }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-2">{{ $project['description'] }}</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach($project['tech'] as $tech)
                            <span class="text-xs px-2 py-1 bg-purple-100 dark:bg-purple-900/50 text-purple-700 dark:text-purple-300 rounded-full">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-12 reveal">
            <a href="#" class="inline-flex items-center space-x-2 px-6 py-3 rounded-full border-2 border-purple-600 text-purple-600 dark:text-purple-400 hover:bg-purple-600 hover:text-white transition-all">
                <span>View All Projects</span>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>