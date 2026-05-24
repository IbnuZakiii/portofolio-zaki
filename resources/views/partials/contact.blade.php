{{-- resources/views/partials/contact.blade.php --}}
<section id="contact" class="py-24 px-6">
    <div class="container mx-auto max-w-6xl">
        <div class="text-center mb-16 reveal">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Ayo <span class="bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">Hubungkan</span></h2>
            <div class="w-24 h-1 bg-gradient-to-r from-purple-600 to-pink-600 mx-auto rounded-full"></div>
            <p class="text-gray-600 dark:text-gray-400 mt-4">Punya proyek yang ingin dikerjakan? Saya sangat ingin berkolaborasi!</p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Contact Info Cards -->
            <div class="space-y-6 reveal">
                <div class="glass p-6 rounded-2xl flex items-center space-x-4 hover-glow">
                    <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900/30 rounded-full flex items-center justify-center text-purple-600">
                        <i class="fas fa-envelope text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold">Email</h3>
                        <a href="mailto:{{ $contact['email'] }}" class="text-gray-600 dark:text-gray-400 hover:text-purple-600">{{ $contact['email'] }}</a>
                    </div>
                </div>
                
                <div class="glass p-6 rounded-2xl flex items-center space-x-4 hover-glow">
                    <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900/30 rounded-full flex items-center justify-center text-purple-600">
                        <i class="fab fa-whatsapp text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold">WhatsApp</h3>
                        <a href="https://wa.me/6281234567890" class="text-gray-600 dark:text-gray-400 hover:text-purple-600">{{ $contact['phone'] }}</a>
                    </div>
                </div>
                
                
                <div class="glass p-6 rounded-2xl flex items-center space-x-4 hover-glow">
                    <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900/30 rounded-full flex items-center justify-center text-purple-600">
                        <i class="fab fa-github text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold">GitHub</h3>
                        <a href="{{ $contact['github'] }}" target="_blank" class="text-gray-600 dark:text-gray-400 hover:text-purple-600">@IbnuZakiii</a>
                    </div>
                </div>
                
                <div class="glass p-6 rounded-2xl flex items-center space-x-4 hover-glow">
                    <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900/30 rounded-full flex items-center justify-center text-purple-600">
                        <i class="fab fa-linkedin text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold">LinkedIn</h3>
                        <a href="{{ $contact['linkedin'] }}" target="_blank" class="text-gray-600 dark:text-gray-400 hover:text-purple-600">Muhammad Ibnu Zaki Munandar</a>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="glass p-8 rounded-2xl reveal">
                <h3 class="text-2xl font-bold mb-6">Kirimi saya pesan</h3>
                
                @if(session('success'))
                    <div class="mb-6 p-4 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-xl flex items-center space-x-2">
                        <i class="fas fa-check-circle"></i>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif
                
                <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium mb-2">Nama Lengkap</label>
                        <input type="text" name="name" id="name" required class="w-full px-4 py-3 bg-white/50 dark:bg-gray-800/50 border border-gray-300 dark:border-gray-700 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition">
                        @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium mb-2">Alamat Email</label>
                        <input type="email" name="email" id="email" required class="w-full px-4 py-3 bg-white/50 dark:bg-gray-800/50 border border-gray-300 dark:border-gray-700 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition">
                        @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-medium mb-2">Pesan</label>
                        <textarea name="message" id="message" rows="5" required class="w-full px-4 py-3 bg-white/50 dark:bg-gray-800/50 border border-gray-300 dark:border-gray-700 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition"></textarea>
                        @error('message') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                    
                    <button type="submit" class="w-full gradient-bg text-white font-semibold py-3 rounded-xl hover:shadow-lg transform hover:scale-[1.02] transition-all duration-300 flex items-center justify-center space-x-2">
                        <i class="fas fa-paper-plane"></i>
                        <span>Kirim Pesan</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>