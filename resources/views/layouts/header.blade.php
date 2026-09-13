<!-- === HEADER / NAVIGATION BAR === -->
<header class="bg-gradient-to-r from-clubPurple via-clubPurple-dark to-clubBlue sticky top-0 z-50 shadow-lg border-b border-amber-500/30">
    <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">
        
        <!-- Left: Club Logo Crest -->
        <a href="{{ url('/') }}" class="flex items-center gap-3">
            <div class="bg-white p-2.5 rounded-2xl shadow-xl border-2 border-clubGold -mb-10 z-20 flex items-center justify-center w-24 h-24 overflow-hidden">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgrkwt8OXBxb9oZiI6G0KfvcqA-1Iu4lKXowhlM7U50Q&s" 
                     alt="Embogo FC Logo" 
                     class="w-full h-full object-contain" />
            </div>
            <div class="text-center hidden sm:block">
                <span class="block font-black text-amber-300 text-xs tracking-tighter">EMBOGO FC</span>
                <span class="block text-[8px] uppercase tracking-widest text-purple-200 font-extrabold">The Buffaloes</span>
            </div>
        </a>

        <!-- Center: Navigation Links -->
        <nav class="hidden md:flex items-center gap-6 lg:gap-8 text-sm font-semibold text-white">
        <a href="{{ url('/news') }}" class="hover:text-amber-300 transition-colors drop-shadow">News</a>
            <a href="{{ url('/fixtures') }}" class="hover:text-amber-300 transition-colors drop-shadow">Fixtures &amp; Results</a>
            <a href="{{ url('/league') }}" class="hover:text-amber-300 transition-colors drop-shadow">League Table</a>
            <a href="{{ url('/kits') }}" class="hover:text-amber-300 transition-colors drop-shadow">Kits</a>
            <a href="{{ url('/club') }}" class="hover:text-amber-300 transition-colors drop-shadow">Club</a>
            <a href="{{ url('/contact') }}" class="text-amber-300 border-b-2 border-amber-300 pb-1 transition-colors">Contact</a>

          

<a href="{{ url('/admin') }}" class="inline-flex items-center gap-1.5 text-amber-300 border-b-2 border-amber-300 pb-1 transition-colors">
    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.654 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
    </svg>
    admin
</a>

        </nav>

        <!-- Right: Social Media Icons & Mobile Toggle -->
        <div class="flex items-center gap-4 text-white text-lg">
            <div class="hidden lg:flex items-center gap-3.5">
                <a href="#" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center hover:bg-amber-400 hover:text-gray-950 transition-all"><i class="fa-brands fa-twitter text-sm"></i></a>
                <a href="#" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center hover:bg-amber-400 hover:text-gray-950 transition-all"><i class="fa-brands fa-facebook-f text-sm"></i></a>
                <a href="#" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center hover:bg-amber-400 hover:text-gray-950 transition-all"><i class="fa-brands fa-instagram text-sm"></i></a>
                <a href="#" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center hover:bg-amber-400 hover:text-gray-950 transition-all"><i class="fa-brands fa-youtube text-sm"></i></a>
            </div>
            <!-- Mobile Menu Button -->
            <button id="mobileMenuBtn" class="md:hidden text-white p-1">
                <i class="fa-solid fa-bars text-xl"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu Dropdown -->
    <div id="mobileMenu" class="hidden md:hidden bg-gray-950 border-t border-purple-900/50 px-4 py-4 space-y-3">
        <a href="{{ url('/') }}#news" class="block text-sm text-white font-medium">News</a>
        <a href="{{ url('/') }}#matches" class="block text-sm text-white font-medium">Fixtures &amp; Results</a>
        <a href="{{ url('/') }}#standings" class="block text-sm text-white font-medium">League Table</a>
        <a href="{{ url('/') }}#kits" class="block text-sm text-white font-medium">Kits</a>
        <a href="{{ url('/') }}#club" class="block text-sm text-white font-medium">Club</a>
        <a href="{{ url('/') }}#contact" class="block text-sm text-amber-400 font-medium">Contact</a>
    </div>
</header>

<!-- Header Script for Mobile Menu Dropdown -->
<script>
    const menuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }
</script>