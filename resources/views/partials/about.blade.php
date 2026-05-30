{{-- resources/views/partials/about.blade.php --}}
<section id="about" class="py-24 px-6">
    <div class="container mx-auto max-w-6xl">
        <div class="text-center mb-16 reveal">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">About <span class="bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">Me</span></h2>
            <div class="w-24 h-1 bg-gradient-to-r from-purple-600 to-pink-600 mx-auto rounded-full"></div>
        </div>
        
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Left Side: Glass card with info -->
            <div class="glass p-8 rounded-2xl reveal">
                <div class="flex items-center space-x-3 mb-6">
                    <i class="fas fa-user-graduate text-3xl text-purple-500"></i>
                    <h3 class="text-2xl font-bold">My Journey</h3>
                </div>
                <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                    {{ $user['about'] }}
                </p>
                
                <div class="bg-purple-600/10 dark:bg-purple-500/10 rounded-xl p-4 mb-6 border-l-4 border-purple-600">
                    <p class="font-semibold text-purple-700 dark:text-purple-300">
                        <i class="fas fa-briefcase mr-2"></i> My Experience
                    </p>
                    <p class="text-gray-700 dark:text-gray-300">{{ $user['experience'] }}</p>
                </div>
                
                <div>
                    <h4 class="font-bold text-lg mb-3 flex items-center"><i class="fas fa-code mr-2 text-purple-500"></i> My Skills</h4>
                    <div class="flex flex-wrap gap-2">
                        @foreach($user['skills'] as $skill)
                            <span class="px-3 py-1 bg-gray-200 dark:bg-gray-700 rounded-full text-sm">{{ $skill }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            
            <!-- Right Side: Stats / Highlights -->
            <div class="grid grid-cols-2 gap-6 reveal">
                <div class="glass p-6 text-center rounded-xl hover-glow transition-all">
                    <i class="fas fa-laptop-code text-4xl text-purple-500 mb-3"></i>
                    <h3 class="text-3xl font-bold">3+</h3>
                    <p class="text-gray-600 dark:text-gray-400">Projects Completed</p>
                </div>
                <div class="glass p-6 text-center rounded-xl hover-glow transition-all">
                    <i class="fas fa-users text-4xl text-purple-500 mb-3"></i>
                    <h3 class="text-3xl font-bold">3+</h3>
                    <p class="text-gray-600 dark:text-gray-400">Websites Developed</p>
                </div>
                <div class="glass p-6 text-center rounded-xl hover-glow transition-all">
                    <i class="fas fa-clock text-4xl text-purple-500 mb-3"></i>
                    <h3 class="text-3xl font-bold">1+</h3>
                    <p class="text-gray-600 dark:text-gray-400">Years of Experience</p>
                </div>
                <div class="glass p-6 text-center rounded-xl hover-glow transition-all">
                    <i class="fas fa-certificate text-4xl text-purple-500 mb-3"></i>
                    <h3 class="text-3xl font-bold">Software Engineer</h3>
                    <p class="text-gray-600 dark:text-gray-400">Junior Web Developer</p>
                </div>
            </div>
        </div>
    </div>
</section>