<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embogo FC | Official Football Club Portal</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clubPurple: {
                            DEFAULT: '#581c87',
                            dark: '#3b0764',
                            light: '#7e22ce',
                        },
                        clubBlue: {
                            DEFAULT: '#2563eb',
                            dark: '#1e40af',
                            light: '#3b82f6',
                        },
                        clubGold: {
                            DEFAULT: '#b45309',
                            light: '#f59e0b',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom SVG Wavy Pattern Background for Footer */
        .footer-wave-bg {
            background-color: #3b0764;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23581c87' fill-opacity='1' d='M0,192L48,181.3C96,171,192,149,288,160C384,171,480,213,576,213.3C672,213,768,171,864,149.3C960,128,1056,128,1152,149.3C1248,171,1344,213,1392,234.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E"),
                              url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%234c0559' fill-opacity='0.6' d='M0,96L48,112C96,128,192,160,288,165.3C384,171,480,149,576,133.3C672,117,768,107,864,122.7C960,139,1056,181,1152,186.7C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center bottom;
        }
    </style>
</head>
<body class="bg-white text-gray-900 font-sans">

@include('layouts.header')

        <!-- Mobile Menu Dropdown -->
        <div id="mobileMenu" class="hidden md:hidden bg-gray-950 border-t border-purple-900/50 px-4 py-4 space-y-3">
            <a href="#news" class="block text-sm text-white font-medium">News</a>
            <a href="#matches" class="block text-sm text-white font-medium">Fixtures &amp; Results</a>
            <a href="#standings" class="block text-sm text-white font-medium">League Table</a>
            <a href="#kits" class="block text-sm text-white font-medium">Kits</a>
            <a href="#club" class="block text-sm text-white font-medium">Club</a>
            <a href="#contact" class="block text-sm text-amber-400 font-medium">Contact</a>
        </div>
    </header>

    <!-- === MAIN CONTAINER === -->
    <main class="max-w-7xl mx-auto px-4 pt-6 space-y-12 pb-16">
        
        <!-- HERO CAROUSEL BANNER -->
        <section class="bg-gradient-to-tr from-clubPurple-dark via-clubPurple to-clubBlue rounded-3xl overflow-hidden shadow-xl relative border border-purple-500/20">
            <!-- Carousel Container -->
            <div id="heroCarousel" class="relative overflow-hidden">
                
                <!-- Slide 1 -->
                <div class="carousel-slide duration-700 ease-in-out px-6 md:px-12 py-6 grid grid-cols-1 md:grid-cols-12 gap-6 items-center">
                    <div class="md:col-span-7 space-y-4 py-8 z-10">
                        <span class="text-xs font-black tracking-widest uppercase text-gray-950 bg-amber-400 px-3.5 py-1 rounded-full shadow-md">
                            <i class="fa-solid fa-bolt mr-1"></i> Latest News
                        </span>
                        <h1 class="text-2xl md:text-4xl lg:text-5xl font-black text-white leading-tight tracking-tight drop-shadow-md">
                            Ronald Mugisha: Embogo FC Sign Promising Midfielder to Long-Term Deal
                        </h1>
                        <p class="text-purple-100 text-sm md:text-base max-w-xl font-medium">
                            The Buffaloes continue strengthening their squad ahead of the crucial second leg of the Uganda Premier League campaign.
                        </p>
                    </div>
                    <div class="md:col-span-5 flex justify-end items-end h-full relative">
                        <div class="w-full h-80 md:h-96 rounded-2xl bg-gradient-to-t from-clubPurple-dark/80 to-transparent flex items-end justify-center overflow-hidden border border-amber-400/20">
                            <img src="{{ asset('images/bb.jpeg') }}" alt="Player" class="w-full h-full object-cover object-top opacity-90" referrerpolicy="no-referrer">
                            <div class="absolute bottom-6 right-6 bg-gray-950/80 backdrop-blur-md px-4 py-2 rounded-xl border border-amber-400 text-amber-400 text-xs font-bold flex items-center gap-2 shadow-lg">
                                <span class="w-2.5 h-2.5 rounded-full bg-amber-400"></span> #08 Owen mugume
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-slide hidden duration-700 ease-in-out px-6 md:px-12 py-6 grid grid-cols-1 md:grid-cols-12 gap-6 items-center">
                    <div class="md:col-span-7 space-y-4 py-8 z-10">
                        <span class="text-xs font-black tracking-widest uppercase text-gray-950 bg-amber-400 px-3.5 py-1 rounded-full shadow-md">
                            <i class="fa-solid fa-trophy mr-1"></i> Matchday Preview
                        </span>
                        <h1 class="text-2xl md:text-4xl lg:text-5xl font-black text-white leading-tight tracking-tight drop-shadow-md">
                            Embogo FC Ready to Battle KCCA FC at Namboole Stadium
                        </h1>
                        <p class="text-purple-100 text-sm md:text-base max-w-xl font-medium">
                            Fans are geared up in numbers as The Buffaloes seek an important victory on home turf this coming Tuesday afternoon.
                        </p>
                    </div>
                    <div class="md:col-span-5 flex justify-end items-end h-full relative">
                        <div class="w-full h-80 md:h-96 rounded-2xl bg-gradient-to-t from-clubPurple-dark/80 to-transparent flex items-end justify-center overflow-hidden border border-amber-400/20">
                      <img src="{{ asset('images/wo.jpeg') }}" alt="New Kits" class="w-full h-full object-cover object-top opacity-90" referrerpolicy="no-referrer">
                            <div class="absolute bottom-6 right-6 bg-gray-950/80 backdrop-blur-md px-4 py-2 rounded-xl border border-amber-400 text-amber-400 text-xs font-bold flex items-center gap-2 shadow-lg">
                                <span class="w-2.5 h-2.5 rounded-full bg-amber-400"></span> observation
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-slide hidden duration-700 ease-in-out px-6 md:px-12 py-6 grid grid-cols-1 md:grid-cols-12 gap-6 items-center">
                    <div class="md:col-span-7 space-y-4 py-8 z-10">
                        <span class="text-xs font-black tracking-widest uppercase text-gray-950 bg-amber-400 px-3.5 py-1 rounded-full shadow-md">
                            <i class="fa-solid fa-shirt mr-1"></i> Club Merchandise
                        </span>
                        <h1 class="text-2xl md:text-4xl lg:text-5xl font-black text-white leading-tight tracking-tight drop-shadow-md">
                            Get the Official 26/27 Purple &amp; Gold Jersey Today
                        </h1>
                        <p class="text-purple-100 text-sm md:text-base max-w-xl font-medium">
                            Show your support for the pride of Kigezi. Premium home and away kits are now available for quick WhatsApp checkout.
                        </p>
                    </div>
                    <div class="md:col-span-5 flex justify-end items-end h-full relative">
                        <div class="w-full h-80 md:h-96 rounded-2xl bg-gradient-to-t from-clubPurple-dark/80 to-transparent flex items-end justify-center overflow-hidden border border-amber-400/20">
                          <img src="{{ asset('images/so.jpeg') }}" alt="New Kits" class="w-full h-full object-cover object-top opacity-90" referrerpolicy="no-referrer">
                            <div class="absolute bottom-6 right-6 bg-gray-950/80 backdrop-blur-md px-4 py-2 rounded-xl border border-amber-400 text-amber-400 text-xs font-bold flex items-center gap-2 shadow-lg">
                                <span class="w-2.5 h-2.5 rounded-full bg-amber-400"></span> energy
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Carousel Controls (Previous / Next Buttons & Indicators) -->
            <div class="absolute bottom-4 left-6 md:left-12 flex items-center gap-4 z-20">
                <!-- Indicators -->
                <div class="flex items-center gap-2" id="carouselIndicators">
                    <button type="button" class="w-3 h-3 rounded-full bg-amber-400 transition-all" data-slide="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full bg-white/40 hover:bg-white transition-all" data-slide="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full bg-white/40 hover:bg-white transition-all" data-slide="2"></button>
                </div>
            </div>

            <div class="absolute bottom-3 right-6 flex items-center gap-2 z-20">
                <button id="prevSlideBtn" class="w-8 h-8 rounded-full bg-black/40 hover:bg-amber-400 hover:text-gray-950 text-white flex items-center justify-center transition-all border border-white/20">
                    <i class="fa-solid fa-chevron-left text-xs"></i>
                </button>
                <button id="nextSlideBtn" class="w-8 h-8 rounded-full bg-black/40 hover:bg-amber-400 hover:text-gray-950 text-white flex items-center justify-center transition-all border border-white/20">
                    <i class="fa-solid fa-chevron-right text-xs"></i>
                </button>
            </div>
        </section>

        <!-- === MATCHES & LEAGUE TABLE SECTION === -->
        <section id="matches" class="space-y-6 pt-4">
            <div class="flex items-center justify-between">
                <h2 class="text-2xl md:text-3xl font-black tracking-tight text-clubPurple flex items-center gap-2">
                    <span class="w-3 h-8 bg-amber-500 rounded-full"></span> Matches &amp; Standings
                </h2>
                <a href="#fixtures" class="bg-clubBlue hover:bg-clubBlue-dark text-white text-sm font-bold px-5 py-2.5 rounded-full shadow-md transition-all">
                    All Fixtures <i class="fa-solid fa-arrow-right ml-1"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                
                <!-- Left Sub-Grid: Last Result & Next Fixture -->
                <div class="lg:col-span-7 grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <!-- Last Result Card -->
                    <div class="bg-white border border-gray-200 rounded-2xl p-5 shadow-md flex flex-col justify-between space-y-4">
                        <div class="flex justify-between items-center text-xs text-gray-500 font-medium">
                            <span class="text-clubPurple font-bold uppercase tracking-wider">Last Result</span>
                            <span class="bg-amber-100 text-amber-800 px-2 py-0.5 rounded border border-amber-300 font-bold">FT</span>
                        </div>
                        <div class="flex items-center justify-between my-2">
                            <div class="text-center flex-1">
                                <div class="w-12 h-12 mx-auto bg-gradient-to-br from-clubPurple to-clubBlue rounded-full flex items-center font-black justify-center mb-1 text-white shadow">EFC</div>
                                <span class="text-xs font-bold block text-gray-900">Embogo FC</span>
                            </div>
                            <div class="text-amber-700 font-black text-xl px-3 tracking-wider bg-gray-50 py-1.5 rounded-xl border border-gray-200 shadow-inner">2 - 1</div>
                            <div class="text-center flex-1">
                                <div class="w-12 h-12 mx-auto bg-gray-800 rounded-full flex items-center font-black justify-center mb-1 text-white shadow">VIP</div>
                                <span class="text-xs font-bold block text-gray-900">Vipers SC</span>
                            </div>
                        </div>
                        <div class="pt-3 border-t border-gray-100 text-center">
                            <a href="#" class="text-xs text-clubPurple font-bold hover:underline">Match Details &amp; Stats <i class="fa-solid fa-chevron-right text-[10px] ml-1"></i></a>
                        </div>
                    </div>

                    <!-- Next Fixture Card -->
                    <div class="bg-white border border-gray-200 rounded-2xl p-5 shadow-md flex flex-col justify-between space-y-4">
                        <div class="flex justify-between items-center text-xs text-gray-500 font-medium">
                            <span class="text-clubPurple font-bold uppercase tracking-wider">Next Fixture</span>
                            <span class="bg-purple-100 text-clubPurple px-2 py-0.5 rounded border border-purple-200 font-bold">Upcoming</span>
                        </div>
                        <div class="flex items-center justify-between my-2">
                            <div class="text-center flex-1">
                                <div class="w-12 h-12 mx-auto bg-gradient-to-br from-clubPurple to-clubBlue rounded-full flex items-center font-black justify-center mb-1 text-white shadow">EFC</div>
                                <span class="text-xs font-bold block text-gray-900">Embogo FC</span>
                            </div>
                            <div class="text-gray-400 font-black text-sm px-3 tracking-widest">VS</div>
                            <div class="text-center flex-1">
                                <div class="w-12 h-12 mx-auto bg-gray-800 rounded-full flex items-center font-black justify-center mb-1 text-white shadow">KCC</div>
                                <span class="text-xs font-bold block text-gray-900">KCCA FC</span>
                            </div>
                        </div>
                        <div class="pt-3 border-t border-gray-100 flex justify-between items-center text-xs text-gray-500">
                            <span><i class="fa-solid fa-location-dot mr-1 text-clubPurple"></i> Nakivubo</span>
                            <span class="text-gray-900 font-semibold">Sat, 16:00</span>
                        </div>
                    </div>

                </div>

                <!-- Right Sub-Grid: League Table Mini Widget -->
                <div id="standings" class="lg:col-span-5 bg-white border border-gray-200 rounded-2xl p-5 shadow-md">
                    <div class="flex items-center justify-between pb-3 border-b border-gray-100">
                        <h3 class="text-sm font-black text-gray-900 uppercase tracking-wider">League Table</h3>
                        <a href="#" class="text-xs text-clubPurple font-bold hover:underline">Full Table</a>
                    </div>
                    <div class="overflow-x-auto pt-2">
                        <table class="w-full text-xs text-left">
                            <thead>
                                <tr class="text-gray-500 border-b border-gray-100">
                                    <th class="py-2 px-1">#</th>
                                    <th class="py-2 px-2">Team</th>
                                    <th class="py-2 px-1 text-center">P</th>
                                    <th class="py-2 px-1 text-center">W</th>
                                    <th class="py-2 px-1 text-center">D</th>
                                    <th class="py-2 px-1 text-center">L</th>
                                    <th class="py-2 px-1 text-right">Pts</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 font-medium">
                                <tr>
                                    <td class="py-2 px-1 text-gray-500">10</td>
                                    <td class="py-2 px-2 text-gray-900">Police FC</td>
                                    <td class="py-2 px-1 text-center">1</td>
                                    <td class="py-2 px-1 text-center">0</td>
                                    <td class="py-2 px-1 text-center">1</td>
                                    <td class="py-2 px-1 text-center">0</td>
                                    <td class="py-2 px-1 text-right font-bold text-gray-900">1</td>
                                </tr>
                                <tr class="bg-purple-50 border-l-2 border-clubPurple">
                                    <td class="py-2 px-1 text-clubPurple font-bold">11</td>
                                    <td class="py-2 px-2 font-bold text-clubPurple">Embogo FC</td>
                                    <td class="py-2 px-1 text-center">1</td>
                                    <td class="py-2 px-1 text-center">0</td>
                                    <td class="py-2 px-1 text-center">1</td>
                                    <td class="py-2 px-1 text-center">0</td>
                                    <td class="py-2 px-1 text-right font-bold text-clubPurple">1</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-1 text-gray-500">12</td>
                                    <td class="py-2 px-2 text-gray-900">Kitara FC</td>
                                    <td class="py-2 px-1 text-center">1</td>
                                    <td class="py-2 px-1 text-center">0</td>
                                    <td class="py-2 px-1 text-center">1</td>
                                    <td class="py-2 px-1 text-center">0</td>
                                    <td class="py-2 px-1 text-right font-bold text-gray-900">1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </section>

        <!-- === LATEST NEWS FEED SECTION === -->
        <section id="news" class="space-y-6 pt-6">
            <div class="flex items-center justify-between">
                <h2 class="text-2xl md:text-3xl font-black tracking-tight text-clubPurple flex items-center gap-2">
                    <span class="w-3 h-8 bg-amber-500 rounded-full"></span> Latest News
                </h2>
                <a href="#" class="text-xs text-clubPurple font-bold hover:underline">All News <i class="fa-solid fa-arrow-right ml-1"></i></a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                @forelse(collect($posts ?? [])->take(3) as $post)
                    <!-- Dynamic News Article Card -->
                    <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-md flex flex-col justify-between hover:shadow-lg transition-all">
                        <div>
                            <div class="h-48 overflow-hidden relative bg-gray-100 flex items-center justify-center">
                                @php
                                    $media = DB::table('post_media')->where('post_id', $post->id)->first();
                                @endphp

                                @if($media && !empty($media->file_path))
                                    <img src="{{ asset($media->file_path) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                                @else
                                    <img src="https://images.unsplash.com/photo-1508098682722-e99c43a406b2?auto=format&fit=crop&w=600&q=80" alt="Default News Image" class="w-full h-full object-cover">
                                @endif

                                <span class="absolute top-3 left-3 bg-gray-900/80 backdrop-blur text-amber-400 text-[10px] font-bold px-2.5 py-1 rounded-md border border-amber-400/30">
                                    {{ $post->status ?? 'Published' }}
                                </span>
                            </div>
                            <div class="p-5 space-y-2">
                                <span class="text-[11px] text-gray-500"><i class="fa-regular fa-calendar mr-1"></i> {{ \Carbon\Carbon::parse($post->created_at)->format('F j, Y') }}</span>
                                <h3 class="font-black text-gray-900 text-base hover:text-clubPurple transition-colors line-clamp-2">{{ $post->title }}</h3>
                                <p class="text-xs text-gray-600 line-clamp-3">{{ $post->content }}</p>
                            </div>
                        </div>
                        <div class="p-5 pt-0">
                            <a href="#" class="text-xs font-bold text-clubPurple hover:underline flex items-center gap-1">Read Full Article <i class="fa-solid fa-arrow-right text-[10px]"></i></a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-10 bg-gray-50 rounded-2xl border border-dashed border-gray-300">
                        <p class="text-sm text-gray-500 font-medium">No news articles found at the moment. Check back later!</p>
                    </div>
                @endforelse

            </div>
        </section>

        <!-- === NEW KITS PROMO BANNER === -->
        <section id="kits" class="pt-6">
            <div class="bg-gradient-to-r from-clubPurple-dark via-clubPurple to-clubBlue rounded-3xl overflow-hidden shadow-xl px-6 md:px-12 py-10 relative border border-amber-500/30">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center">
                    
                    <!-- Left: Text & WhatsApp Checkout Button -->
                    <div class="md:col-span-6 space-y-4 z-10 text-white">
                        <span class="text-xs font-black tracking-widest uppercase bg-amber-400 text-gray-950 px-3.5 py-1 rounded-full shadow">
                            Official Merchandise
                        </span>
                        <h2 class="text-3xl md:text-4xl font-black tracking-tight drop-shadow">
                            NEW KITS
                        </h2>
                        <p class="text-purple-100 text-sm md:text-base font-medium max-w-md">
                            Official jerseys and match kits for the 26/27 season. Get yours now and support The Buffaloes in style!
                        </p>
                        <div>
                            <a href="https://wa.me/" target="_blank" class="inline-flex items-center gap-2.5 bg-amber-500 hover:bg-amber-400 text-gray-950 font-bold text-sm px-6 py-3 rounded-full shadow-lg border border-white/20 transition-all hover:scale-105">
                                <i class="fa-brands fa-whatsapp text-lg text-gray-950"></i> Buy Now
                            </a>
                        </div>
                    </div>

                    <!-- Right: Kit Jerseys Graphic Showcase -->
                    <div class="md:col-span-6 flex justify-center md:justify-end relative">
                        <div class="flex items-end gap-2 md:gap-4 -mb-10 md:-mb-12">
                            <div class="w-24 md:w-32 bg-purple-950/60 backdrop-blur rounded-t-2xl p-2 border-t border-purple-400/40 shadow-2xl">
                                <img src="{{ asset('images/img1.svg') }}" alt="Home Kit" class="w-full h-32 md:h-44 object-cover rounded-xl opacity-90">
                                <span class="block text-center text-[10px] font-bold text-white mt-1">Home Kit</span>
                            </div>
                            <div class="w-28 md:w-36 bg-amber-600/60 backdrop-blur rounded-t-2xl p-2 border-t border-amber-300 shadow-2xl -translate-y-4">
                                <img src="{{ asset('images/img2.svg') }}" alt="Away Kit" class="w-full h-36 md:h-52 object-cover rounded-xl opacity-90">
                                <span class="block text-center text-[10px] font-bold text-amber-200 mt-1">Away Kit</span>
                            </div>
                            <div class="w-24 md:w-32 bg-slate-800/60 backdrop-blur rounded-t-2xl p-2 border-t border-slate-400/40 shadow-2xl">
                                <img src="{{ asset('images/img3.svg') }}" alt="Third Kit" class="w-full h-32 md:h-44 object-cover rounded-xl opacity-90">
                                <span class="block text-center text-[10px] font-bold text-white mt-1">Third Kit</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <!-- Interactive Scripts for Mobile Menu & Sliding Hero Carousel -->
    <script>
        // Mobile Menu Toggle
        const menuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        if (menuBtn && mobileMenu) {
            menuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Hero Carousel Logic
        const slides = document.querySelectorAll('.carousel-slide');
        const indicators = document.querySelectorAll('#carouselIndicators button');
        const prevBtn = document.getElementById('prevSlideBtn');
        const nextBtn = document.getElementById('nextSlideBtn');
        let currentSlide = 0;
        let slideInterval;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                if (i === index) {
                    slide.classList.remove('hidden');
                } else {
                    slide.classList.add('hidden');
                }
            });

            indicators.forEach((ind, i) => {
                if (i === index) {
                    ind.classList.remove('bg-white/40');
                    ind.classList.add('bg-amber-400', 'w-6');
                } else {
                    ind.classList.remove('bg-amber-400', 'w-6');
                    ind.classList.add('bg-white/40', 'w-3');
                }
            });
            currentSlide = index;
        }

        function nextSlide() {
            let next = (currentSlide + 1) % slides.length;
            showSlide(next);
        }

        function prevSlide() {
            let prev = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(prev);
        }

        if (nextBtn && prevBtn && slides.length > 0) {
            nextBtn.addEventListener('click', () => {
                nextSlide();
                resetInterval();
            });

            prevBtn.addEventListener('click', () => {
                prevSlide();
                resetInterval();
            });

            indicators.forEach((ind, i) => {
                ind.addEventListener('click', () => {
                    showSlide(i);
                    resetInterval();
                });
            });

            function startInterval() {
                slideInterval = setInterval(nextSlide, 4000);
            }

            function resetInterval() {
                clearInterval(slideInterval);
                startInterval();
            }

            startInterval();
        }
    </script>
     
@include('layouts.footer')

</body>
</html>