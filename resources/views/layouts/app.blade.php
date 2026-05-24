{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="description" content="Portfolio of Muhammad Ibnu Zaki Munandar - Laravel Developer, SMK RPL Graduate, currently contracted at PT. Digital Inovasi Nusantara">
    <title>@yield('title', 'Porto Zaki | Portfolio')</title>
    
    <!-- Tailwind + Fonts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        
        /* Custom glassmorphism & animations */
        .glass {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 1.5rem;
        }
        
        .dark .glass {
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .dark .gradient-bg {
            background: linear-gradient(135deg, #4f46e5 0%, #9333ea 100%);
        }
        
        .hover-glow {
            transition: all 0.3s ease;
        }
        
        .hover-glow:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px -15px rgba(0,0,0,0.3);
        }
        
        /* Smooth scroll reveal */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        }
        
        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
        
        .dark ::-webkit-scrollbar-track {
            background: #1a1a2e;
        }
        
        .dark ::-webkit-scrollbar-thumb {
            background: #4a4a6a;
        }
        
        /* Smooth dark mode transition */
        * {
            transition: background-color 0.3s ease, border-color 0.2s ease;
        }
    </style>
    
    @stack('styles')
</head>
<body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 overflow-x-hidden">
    
    <!-- Navbar Partial -->
    @include('partials.navbar')
    
    <!-- Main Content -->
    <main>
        @yield('content')
    </main>
    
    <!-- Footer -->
    <footer class="py-8 text-center text-gray-500 dark:text-gray-400 text-sm border-t border-gray-200 dark:border-gray-800">
        <div class="container mx-auto px-6">
            <p>&copy; {{ date('Y') }} Muhammad Ibnu Zaki Munandar. Built with Laravel & TailwindCSS.</p>
        </div>
    </footer>
    
    <!-- Dark Mode & Scroll Reveal Scripts -->
    <script>
        // Dark Mode Toggle
        function initDarkMode() {
            const darkMode = localStorage.getItem('darkMode') === 'true';
            if (darkMode) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
            
            const toggleBtn = document.getElementById('darkModeToggle');
            if (toggleBtn) {
                toggleBtn.addEventListener('click', () => {
                    const isDark = document.documentElement.classList.toggle('dark');
                    localStorage.setItem('darkMode', isDark);
                });
            }
        }
        
        // Mobile Menu Toggle
        function initMobileMenu() {
            const menuBtn = document.getElementById('mobileMenuBtn');
            const mobileMenu = document.getElementById('mobileMenu');
            if (menuBtn && mobileMenu) {
                menuBtn.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        }
        
        // Smooth scroll reveal on scroll
        function initScrollReveal() {
            const reveals = document.querySelectorAll('.reveal');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
            
            reveals.forEach(el => observer.observe(el));
        }
        
        // Close mobile menu on link click
        function closeMobileMenuOnClick() {
            const mobileMenu = document.getElementById('mobileMenu');
            const links = document.querySelectorAll('#mobileMenu a');
            links.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                });
            });
        }
        
        document.addEventListener('DOMContentLoaded', () => {
            initDarkMode();
            initMobileMenu();
            initScrollReveal();
            closeMobileMenuOnClick();
        });
    </script>
    
    @stack('scripts')
</body>
</html>