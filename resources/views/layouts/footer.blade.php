<!-- === FULL FOOTER WITH WAVY BACKGROUND, GOLD ACCENTS, & PURPLE SHADES === -->
<footer class="relative footer-wave-bg text-white overflow-hidden pt-12 border-t-2 border-amber-500/40">
    
    <!-- Top Split Banner Section (Katrico & Quote with Gold/Purple Accents) -->
    <div class="max-w-7xl mx-auto px-4 pb-12 relative z-25">
        <div class="grid grid-cols-1 md:grid-cols-2 rounded-3xl overflow-hidden shadow-2xl relative border border-amber-400/40">
            <!-- Left half (Gold Yellow) -->
            <div class="bg-amber-400 py-6 px-8 flex items-center justify-center md:justify-start">
                <span class="text-2xl md:text-3xl font-black text-gray-950 tracking-wider">katrico 2017</span>
            </div>
            <!-- Right half (Club Purple) -->
            <div class="bg-clubPurple py-6 px-8 flex items-center justify-center md:justify-end">
                <span class="text-xl md:text-2xl font-black text-amber-300 tracking-wider">"Omukago nigwo mutima"</span>
            </div>

            <!-- Absolutely Positioned Center Character Cutout overlapping top -->
            <div class="absolute left-1/2 -translate-x-1/2 -bottom-2 z-30 hidden md:block pointer-events-none">
                <div class="w-32 h-44 rounded-t-full overflow-hidden shadow-2xl border-4 border-amber-400 bg-white">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0YkExfzQLF1ZsQQXn6_uqXeb2eQurkbbfp8ROFTplZA&s" alt="Player Cutout" class="w-full h-full object-cover object-top">
                </div>
            </div>
        </div>
    </div>

    <!-- Main Footer Content Container -->
    <div class="max-w-7xl mx-auto px-4 pb-12 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-start">
            
            <!-- Col 1: Club Branding (Col span 4) -->
            <div class="md:col-span-4 space-y-4">
                <div class="flex items-center gap-3">
                    <div class="bg-white p-2 rounded-xl shadow flex items-center justify-center w-12 h-12 border border-amber-400 overflow-hidden">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgrkwt8OXBxb9oZiI6G0KfvcqA-1Iu4lKXowhlM7U50Q&s" alt="Embogo FC Logo" class="w-full h-full object-contain">
                    </div>
                    <span class="font-black text-lg tracking-wider text-amber-300 drop-shadow">EMBOGO FC</span>
                </div>
                <p class="text-xs text-purple-100 max-w-xs leading-relaxed font-medium">
                    Embogo FC Football Club. Established in 2011. The Buffaloes - The pride of Kigezi.
                </p>
            </div>

            <!-- Col 2: Quick Links 1 (Col span 3) -->
            <div class="md:col-span-3 space-y-3">
                <h4 class="font-extrabold text-sm uppercase tracking-wider text-amber-300">Quick Links</h4>
                <ul class="space-y-2 text-xs font-medium text-purple-100">
                    <li><a href="{{ url('/') }}#news" class="hover:text-amber-300 transition-colors">News</a></li>
                    <li><a href="{{ url('/') }}#matches" class="hover:text-amber-300 transition-colors">Fixtures &amp; Results</a></li>
                    <li><a href="{{ url('/') }}#standings" class="hover:text-amber-300 transition-colors">League Table</a></li>
                    <li><a href="{{ url('/') }}#club" class="hover:text-amber-300 transition-colors">Club</a></li>
                    <li><a href="{{ url('/') }}#strategic" class="hover:text-amber-300 transition-colors">Strategic Plan</a></li>
                    <li><a href="{{ url('/') }}#contact" class="hover:text-amber-300 transition-colors">Contact</a></li>
                </ul>
            </div>

            <!-- Col 3: Quick Links 2 (Col span 3) -->
            <div class="md:col-span-3 space-y-3">
                <h4 class="font-extrabold text-sm uppercase tracking-wider text-amber-300">Quick Links</h4>
                <ul class="space-y-2 text-xs font-medium text-purple-100">
                    <li><a href="#" class="hover:text-amber-300 transition-colors">BetPawa Big League</a></li>
                    <li><a href="#" class="hover:text-amber-300 transition-colors">FUFA</a></li>
                </ul>
            </div>

            <!-- Col 4: Socials (Col span 2) -->
            <div class="md:col-span-2 space-y-3">
                <h4 class="font-extrabold text-sm uppercase tracking-wider text-amber-300">Follow Our Socials</h4>
                <div class="flex items-center gap-3 text-lg text-white">
                    <a href="#" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center hover:bg-amber-400 hover:text-gray-950 transition-all border border-amber-400/30"><i class="fa-brands fa-twitter text-xs text-amber-300 hover:text-gray-950"></i></a>
                    <a href="#" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center hover:bg-amber-400 hover:text-gray-950 transition-all border border-amber-400/30"><i class="fa-brands fa-facebook-f text-xs text-amber-300 hover:text-gray-950"></i></a>
                    <a href="#" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center hover:bg-amber-400 hover:text-gray-950 transition-all border border-amber-400/30"><i class="fa-brands fa-instagram text-xs text-amber-300 hover:text-gray-950"></i></a>
                    <a href="#" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center hover:bg-amber-400 hover:text-gray-950 transition-all border border-amber-400/30"><i class="fa-brands fa-youtube text-xs text-amber-300 hover:text-gray-950"></i></a>
                </div>
            </div>

        </div>

        <!-- Bottom Copyright & Policies Bar -->
        <div class="pt-8 mt-8 border-t border-purple-500/30 flex flex-col sm:flex-row items-center justify-between text-xs text-purple-200 font-medium">
            <p>&copy; 2026 Embogo FC. All Rights Reserved.</p>
            <div class="flex items-center gap-6 mt-4 sm:mt-0">
                <a href="#" class="hover:text-amber-300 transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-amber-300 transition-colors">Terms and conditions</a>
            </div>
        </div>
    </div>

</footer>