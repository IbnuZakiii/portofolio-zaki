{{-- resources/views/partials/hero.blade.php --}}
<section id="home" class="min-h-screen flex items-center justify-center relative overflow-hidden pt-20">
    <!-- Animated Gradient Background -->
    <div class="absolute inset-0 -z-10 opacity-30">
        <div class="absolute top-0 -left-4 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
        <div class="absolute top-0 -right-4 w-72 h-72 bg-pink-300 rounded-full mix-blend-multiply filter blur-xl animate-pulse delay-1000"></div>
        <div class="absolute -bottom-8 left-20 w-72 h-72 bg-indigo-300 rounded-full mix-blend-multiply filter blur-xl animate-pulse delay-500"></div>
    </div>
    
    <div class="container mx-auto px-6 text-center reveal">
        <div class="inline-block px-4 py-2 rounded-full glass text-sm font-semibold mb-6">
            <i class="fas fa-code mr-2 text-purple-500"></i> Web Developer & Software Engineer
        </div>
        
        <h1 class="text-5xl md:text-7xl font-extrabold mb-6 bg-gradient-to-r from-purple-600 via-pink-600 to-indigo-600 bg-clip-text text-transparent animate-gradient">
            {{ $user['name'] }}
        </h1>
        
        <p class="text-xl md:text-2xl text-gray-600 dark:text-gray-300 mb-4">{{ $user['title'] }}</p>
        <p class="text-lg text-gray-500 dark:text-gray-400 max-w-2xl mx-auto mb-8">{{ $user['short_bio'] }}</p>
        
        <div class="flex flex-wrap justify-center gap-4">
            <a href="#contact" class="px-8 py-3 rounded-full gradient-bg text-white font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                <i class="fas fa-paper-plane mr-2"></i> Contact Me
            </a>
            <a href="#projects" class="px-8 py-3 rounded-full border-2 border-purple-600 text-purple-600 dark:text-purple-400 font-semibold hover:bg-purple-600 hover:text-white transition-all duration-300">
                <i class="fas fa-eye mr-2"></i> View Projects
            </a>
        </div>
        
        <!-- Social Quick Links -->
        <div class="flex justify-center space-x-6 mt-12">
            <a href="{{ $contact['github'] }}" target="_blank" class="text-2xl text-gray-600 dark:text-gray-400 hover:text-purple-600 transition-colors">
                <i class="fab fa-github"></i>
            </a>
            <a href="{{ $contact['linkedin'] }}" target="_blank" class="text-2xl text-gray-600 dark:text-gray-400 hover:text-purple-600 transition-colors">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="mailto:{{ $contact['email'] }}" class="text-2xl text-gray-600 dark:text-gray-400 hover:text-purple-600 transition-colors">
                <i class="fas fa-envelope"></i>
            </a>
        </div>
    </div>
    
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <a href="#about" class="text-gray-500 hover:text-purple-600 transition-colors">
            <i class="fas fa-chevron-down text-2xl"></i>
        </a>
    </div>
</section>

<style>
    @keyframes gradient {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }
    .animate-gradient {
        background-size: 200% 200%;
        animation: gradient 3s ease infinite;
    }
</style>