{{-- resources/views/partials/navbar.blade.php --}}
<nav class="fixed w-full top-0 z-50 glass shadow-lg backdrop-blur-md transition-all duration-300">
    <div class="container mx-auto px-4 sm:px-6 py-3 sm:py-4 flex justify-between items-center">
        <!-- Logo Area: Avatar + Text -->
        <div class="flex items-center space-x-2 sm:space-x-3">
            <a href="#home" class="block transition-transform duration-300 hover:scale-105" id="profileAvatarLink">
                <img src="{{ asset('images/poto.jpg') }}" 
                     alt="Profile Photo" 
                     class="w-10 h-10 sm:w-12 sm:h-12 rounded-full object-cover border-2 border-purple-500 shadow-lg hover:shadow-purple-500/30 transition-all duration-300 cursor-pointer dark:border-cyan-400 dark:hover:shadow-cyan-400/40">
            </a>
            <div class="hidden sm:block">
                <span class="text-sm sm:text-base font-semibold text-gray-800 dark:text-transparent dark:bg-gradient-to-r dark:from-cyan-300 dark:to-purple-400 dark:bg-clip-text">Muhammad Ibnu Zaki Munandar</span>
                <span class="text-xs text-purple-600 dark:text-cyan-300 block leading-tight">Web Developer</span>
            </div>
        </div>
        
        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-6 lg:space-x-8 items-center">
            <a href="#home" class="relative text-gray-700 dark:text-gray-200 hover:text-purple-600 dark:hover:text-cyan-300 transition-colors duration-300 after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[2px] after:bg-purple-600 dark:after:bg-gradient-to-r dark:after:from-cyan-400 dark:after:to-purple-500 after:transition-all after:duration-300 hover:after:w-full">Home</a>
            <a href="#about" class="relative text-gray-700 dark:text-gray-200 hover:text-purple-600 dark:hover:text-cyan-300 transition-colors duration-300 after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[2px] after:bg-purple-600 dark:after:bg-gradient-to-r dark:after:from-cyan-400 dark:after:to-purple-500 after:transition-all after:duration-300 hover:after:w-full">About</a>
            <a href="#projects" class="relative text-gray-700 dark:text-gray-200 hover:text-purple-600 dark:hover:text-cyan-300 transition-colors duration-300 after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[2px] after:bg-purple-600 dark:after:bg-gradient-to-r dark:after:from-cyan-400 dark:after:to-purple-500 after:transition-all after:duration-300 hover:after:w-full">Projects</a>
            <a href="#contact" class="relative text-gray-700 dark:text-gray-200 hover:text-purple-600 dark:hover:text-cyan-300 transition-colors duration-300 after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[2px] after:bg-purple-600 dark:after:bg-gradient-to-r dark:after:from-cyan-400 dark:after:to-purple-500 after:transition-all after:duration-300 hover:after:w-full">Contact</a>
            
            <!-- Dark Mode Toggle Button dengan gaya modern -->
            <button id="darkModeToggle" class="p-2 rounded-full bg-gray-200 dark:bg-gray-800 transition-all duration-300 hover:scale-110">
                <i class="fas fa-moon dark:hidden text-gray-700"></i>
                <i class="fas fa-sun hidden dark:inline-block text-yellow-400"></i>
            </button>
        </div>
        
        <!-- Mobile Menu Button + Dark Mode -->
        <div class="md:hidden flex items-center space-x-3">
            <button id="darkModeToggleMobile" class="p-2 rounded-full bg-gray-200 dark:bg-gray-800 transition-all duration-300">
                <i class="fas fa-moon dark:hidden text-gray-700"></i>
                <i class="fas fa-sun hidden dark:inline-block text-yellow-400"></i>
            </button>
            <button id="mobileMenuBtn" class="text-2xl focus:outline-none text-gray-800 dark:text-cyan-300">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>
    
    <!-- Mobile Dropdown Menu -->
    <div id="mobileMenu" class="hidden md:hidden glass border-t border-gray-200 dark:border-gray-800 transition-all">
        <div class="flex flex-col space-y-4 px-6 py-5">
            <a href="#home" class="text-gray-700 dark:text-gray-200 hover:text-purple-600 dark:hover:text-cyan-300 transition-colors">Home</a>
            <a href="#about" class="text-gray-700 dark:text-gray-200 hover:text-purple-600 dark:hover:text-cyan-300 transition-colors">About</a>
            <a href="#projects" class="text-gray-700 dark:text-gray-200 hover:text-purple-600 dark:hover:text-cyan-300 transition-colors">Projects</a>
            <a href="#contact" class="text-gray-700 dark:text-gray-200 hover:text-purple-600 dark:hover:text-cyan-300 transition-colors">Contact</a>
        </div>
    </div>
</nav>

<!-- Modal for Profile Picture Preview -->
<div id="imageModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/80 backdrop-blur-sm" onclick="closeModal()">
    <div class="relative max-w-3xl mx-4" onclick="event.stopPropagation()">
        <img id="modalImage" src="" alt="Profile Photo Preview" class="w-full h-auto rounded-2xl shadow-2xl border-4 border-white/20 dark:border-cyan-400/30">
        <button onclick="closeModal()" class="absolute top-2 right-2 text-white bg-black/50 rounded-full p-2 hover:bg-black/70 transition dark:bg-gray-800/80 dark:hover:bg-cyan-600">
            <i class="fas fa-times text-xl"></i>
        </button>
    </div>
</div>

<script>
    // Modal functionality
    const avatarLink = document.getElementById('profileAvatarLink');
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    
    if (avatarLink) {
        avatarLink.addEventListener('click', function(e) {
            e.preventDefault();
            const imgSrc = this.querySelector('img').src;
            modalImage.src = imgSrc;
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        });
    }
    
    function closeModal() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = '';
    }
    
    // Close modal on ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal && !modal.classList.contains('hidden')) {
            closeModal();
        }
    });
    
    // Sync mobile dark mode toggle with main
    const mainToggle = document.getElementById('darkModeToggle');
    const mobileToggle = document.getElementById('darkModeToggleMobile');
    if (mainToggle && mobileToggle) {
        mobileToggle.addEventListener('click', () => {
            mainToggle.click();
        });
    }
</script>