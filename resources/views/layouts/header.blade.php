<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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

        <!-- Center: Navigation Links with Active State Detection -->
        <nav class="hidden md:flex items-center gap-6 lg:gap-8 text-sm font-semibold text-white">
            <a href="{{ route('news') }}" class="{{ request()->routeIs('news') ? 'text-amber-300 border-b-2 border-amber-300 pb-1' : 'hover:text-amber-300' }} transition-colors drop-shadow">News</a>
            
            <a href="{{ route('fixtures') }}" class="{{ request()->routeIs('fixtures') ? 'text-amber-300 border-b-2 border-amber-300 pb-1' : 'hover:text-amber-300' }} transition-colors drop-shadow">Fixtures &amp; Results</a>
            
            <a href="{{ route('league') }}" class="{{ request()->routeIs('league') ? 'text-amber-300 border-b-2 border-amber-300 pb-1' : 'hover:text-amber-300' }} transition-colors drop-shadow">League Table</a>
            
            <a href="{{ route('kits') }}" class="{{ request()->routeIs('kits') ? 'text-amber-300 border-b-2 border-amber-300 pb-1' : 'hover:text-amber-300' }} transition-colors drop-shadow">Kits</a>
            
            <a href="{{ route('club') }}" class="{{ request()->routeIs('club') ? 'text-amber-300 border-b-2 border-amber-300 pb-1' : 'hover:text-amber-300' }} transition-colors drop-shadow">Club</a>
            
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-amber-300 border-b-2 border-amber-300 pb-1' : 'hover:text-amber-300' }} transition-colors drop-shadow">Contact</a>

            <a href="{{ route('login') }}" class="{{ request()->routeIs('login') ? 'text-amber-300 border-b-2 border-amber-300 pb-1' : 'hover:text-amber-300' }} inline-flex items-center gap-1.5 transition-colors">
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
            <button id="mobileMenuBtn" class="md:hidden text-white p-1 focus:outline-none">
                <i class="fa-solid fa-bars text-xl"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu Dropdown with Active Highlighting -->
    <div id="mobileMenu" class="hidden md:hidden bg-gray-950 border-t border-purple-900/50 px-4 py-4 space-y-2">
        <a href="{{ route('news') }}" class="block px-3 py-2 rounded-lg text-sm font-medium {{ request()->routeIs('news') ? 'bg-purple-950 text-amber-300 font-bold border-l-4 border-amber-300' : 'text-white hover:bg-purple-900/30' }}">News</a>
        <a href="{{ route('fixtures') }}" class="block px-3 py-2 rounded-lg text-sm font-medium {{ request()->routeIs('fixtures') ? 'bg-purple-950 text-amber-300 font-bold border-l-4 border-amber-300' : 'text-white hover:bg-purple-900/30' }}">Fixtures &amp; Results</a>
        <a href="{{ route('league') }}" class="block px-3 py-2 rounded-lg text-sm font-medium {{ request()->routeIs('league') ? 'bg-purple-950 text-amber-300 font-bold border-l-4 border-amber-300' : 'text-white hover:bg-purple-900/30' }}">League Table</a>
        <a href="{{ route('kits') }}" class="block px-3 py-2 rounded-lg text-sm font-medium {{ request()->routeIs('kits') ? 'bg-purple-950 text-amber-300 font-bold border-l-4 border-amber-300' : 'text-white hover:bg-purple-900/30' }}">Kits</a>
        <a href="{{ route('club') }}" class="block px-3 py-2 rounded-lg text-sm font-medium {{ request()->routeIs('club') ? 'bg-purple-950 text-amber-300 font-bold border-l-4 border-amber-300' : 'text-white hover:bg-purple-900/30' }}">Club</a>
        <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-lg text-sm font-medium {{ request()->routeIs('contact') ? 'bg-purple-950 text-amber-300 font-bold border-l-4 border-amber-300' : 'text-white hover:bg-purple-900/30' }}">Contact</a>
        <a href="{{ route('login') }}" class="block px-3 py-2 rounded-lg text-sm font-medium {{ request()->routeIs('login') ? 'bg-purple-950 text-amber-300 font-bold border-l-4 border-amber-300' : 'text-white hover:bg-purple-900/30' }}">Admin Panel</a>
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