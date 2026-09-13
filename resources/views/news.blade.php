@include('layouts.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Official News Portal & Press Room - Embogo FC</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom Tailwind Configuration & Theme Colors -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clubPurple: '#581c87',
                        'clubPurple-dark': '#3b0764',
                        clubBlue: '#1e3a8a',
                        clubGold: '#fbbf24',
                    }
                }
            }
        }
    </script>

</head>

<body class="bg-gray-50 text-gray-900 font-sans antialiased min-h-screen flex flex-col justify-between selection:bg-amber-400 selection:text-gray-950">

    <!-- Main Content Container -->
    <main class="max-w-7xl mx-auto px-4 py-12 space-y-20 w-full">
        
        <!-- Page Header Section -->
        <div class="text-center max-w-3xl mx-auto space-y-4">
            <span class="bg-clubPurple/10 text-clubPurple text-xs font-black uppercase tracking-widest px-4 py-1.5 rounded-full border border-clubPurple/20 inline-block">
                The Buffaloes Chronicle • Official Press Room
            </span>
            <h1 class="text-4xl md:text-6xl font-black text-gray-900 tracking-tight">
                Club News &amp; In-Depth Analyses
            </h1>
            <p class="text-gray-600 text-base md:text-lg leading-relaxed font-medium">
                Your primary destination for exclusive player interviews, technical match reports, tactical breakdowns, and official board announcements.
            </p>
        </div>

        <!-- Featured Headline Hero Article (Expanded Layout) -->
        <section class="bg-white rounded-3xl overflow-hidden shadow-2xl border border-clubPurple/10 grid grid-cols-1 lg:grid-cols-12 gap-0 group">
            <!-- Article Image & Overlay -->
            <div class="lg:col-span-7 relative aspect-video lg:aspect-auto overflow-hidden bg-clubPurple-dark">
                <img src="https://images.unsplash.com/photo-1508098682722-e99c43a406b2?auto=format&fit=crop&q=80&w=1200" 
                     alt="Featured News" 
                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 opacity-90">
                <div class="absolute top-6 left-6 flex items-center gap-2">
                    <span class="bg-amber-400 text-gray-950 text-xs font-black uppercase tracking-wider px-4 py-2 rounded-xl shadow-lg border border-amber-300">
                        Breaking News
                    </span>
                    <span class="bg-clubPurple text-white text-xs font-bold px-3 py-2 rounded-xl shadow-lg backdrop-blur-md bg-opacity-90">
                        Official Statement
                    </span>
                </div>
            </div>

            <!-- Article Details -->
            <div class="lg:col-span-5 p-8 md:p-12 flex flex-col justify-between space-y-6 bg-gradient-to-br from-white via-purple-50/20 to-purple-100/30">
                <div class="space-y-4">
                    <div class="flex items-center gap-4 text-xs text-gray-500 font-semibold">
                        <span class="flex items-center gap-1.5 text-clubPurple"><i class="fa-regular fa-calendar"></i> October 24, 2026</span>
                        <span>•</span>
                        <span class="flex items-center gap-1.5 text-clubPurple"><i class="fa-regular fa-clock"></i> 6 min read</span>
                    </div>
                    <h2 class="text-2xl md:text-4xl font-black text-gray-900 group-hover:text-clubPurple transition-colors leading-snug">
                        Embogo FC Announces Groundbreaking Strategic Partnership &amp; Academy Expansion
                    </h2>
                    <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                        Kampala, Uganda — In an unprecedented move to secure long-term sporting dominance, Embogo FC management has finalized multi-tier operational frameworks aimed at upgrading training infrastructure and expanding our grassroots scouting network across the country.
                    </p>
                    <div class="flex flex-wrap gap-2 pt-2">
                        <span class="text-[11px] font-bold bg-purple-100 text-clubPurple px-3 py-1 rounded-lg">#BoardUpdate</span>
                        <span class="text-[11px] font-bold bg-purple-100 text-clubPurple px-3 py-1 rounded-lg">#Infrastructure</span>
                        <span class="text-[11px] font-bold bg-purple-100 text-clubPurple px-3 py-1 rounded-lg">#TheBuffaloes</span>
                    </div>
                </div>
                
                <div class="pt-6 border-t border-purple-100 flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-full bg-clubPurple text-amber-400 font-black flex items-center justify-center text-xs shadow">
                            EF
                        </div>
                        <div class="text-xs">
                            <p class="font-bold text-gray-900">Embogo Media Bureau</p>
                            <p class="text-gray-500">Communications Office</p>
                        </div>
                    </div>
                    <span class="inline-flex items-center gap-2 text-xs font-black text-clubPurple">
                        Featured Story
                    </span>
                </div>
            </div>
        </section>

        <!-- Category Grid & Interactive Sections -->
        <section class="space-y-10">
            
            <!-- Filters Header -->
            <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-6 border-b border-gray-200 pb-6">
                <div>
                    <h3 class="text-2xl md:text-3xl font-black text-gray-900 tracking-tight">Latest Publications</h3>
                    <p class="text-sm text-gray-500 font-medium">Click category buttons below to filter articles instantly.</p>
                </div>
                <div class="flex flex-wrap gap-2" id="filter-buttons">
                    <button onclick="filterArticles('all')" id="btn-all" class="filter-btn text-xs font-black px-5 py-2.5 rounded-xl bg-clubPurple text-white shadow-md transition-all">All Stories</button>
                    <button onclick="filterArticles('match')" id="btn-match" class="filter-btn text-xs font-bold px-5 py-2.5 rounded-xl bg-white text-gray-700 hover:bg-clubPurple hover:text-white border border-gray-200 transition-all">Match Reports</button>
                    <button onclick="filterArticles('tactical')" id="btn-tactical" class="filter-btn text-xs font-bold px-5 py-2.5 rounded-xl bg-white text-gray-700 hover:bg-clubPurple hover:text-white border border-gray-200 transition-all">Tactical Analysis</button>
                    <button onclick="filterArticles('community')" id="btn-community" class="filter-btn text-xs font-bold px-5 py-2.5 rounded-xl bg-white text-gray-700 hover:bg-clubPurple hover:text-white border border-gray-200 transition-all">Community &amp; Youth</button>
                </div>
            </div>

            <!-- News Grid Cards (Purely Dynamic Posts from Database with a limit of 30) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="articles-grid">
                
                @forelse(collect($posts ?? [])->take(30) as $post)
                    @php
                        $media = DB::table('post_media')->where('post_id', $post->id)->first();
                    @endphp
                    <article data-category="{{ $post->category ?? 'match' }}" class="news-card bg-white rounded-3xl overflow-hidden shadow-xl border border-gray-100 flex flex-col justify-between group hover:shadow-2xl hover:-translate-y-1.5 transition-all duration-300">
                        <div>
                            <div class="aspect-video overflow-hidden bg-gray-100 relative">
                                @if($media)
                                    <img src="{{ asset($media->file_path) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                @else
                                    <img src="https://images.unsplash.com/photo-1508098682722-e99c43a406b2?auto=format&fit=crop&q=80&w=800" alt="Default News Image" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                @endif
                                <div class="absolute top-3 left-3">
                                    <span class="bg-clubPurple text-white text-[10px] font-black uppercase tracking-wider px-3 py-1.5 rounded-lg shadow">{{ $post->status ?? 'Published' }}</span>
                                </div>
                            </div>
                            <div class="p-6 space-y-3">
                                <div class="text-xs text-gray-400 font-semibold flex items-center gap-2">
                                    <i class="fa-regular fa-calendar text-clubPurple"></i> {{ \Carbon\Carbon::parse($post->created_at)->format('F j, Y') }}
                                    <span>•</span>
                                    <span>3 min read</span>
                                </div>
                                <h4 class="text-xl font-black text-gray-900 group-hover:text-clubPurple transition-colors leading-snug">
                                    {{ $post->title }}
                                </h4>
                                <p class="text-gray-600 text-xs md:text-sm leading-relaxed line-clamp-3">
                                    {{ $post->content }}
                                </p>
                            </div>
                        </div>
                        <div class="p-6 pt-0 flex items-center justify-between border-t border-gray-50 mt-4">
                            <span class="text-[11px] font-bold text-gray-400">Club Bureau</span>
                            <span class="text-[11px] font-bold text-clubPurple">Story Bulletin</span>
                        </div>
                    </article>
                @empty
                    <div class="col-span-3 text-center py-16 bg-white rounded-3xl border border-dashed border-gray-300 shadow-sm space-y-3">
                        <div class="w-12 h-12 mx-auto rounded-full bg-purple-50 text-clubPurple flex items-center justify-center text-lg">
                            <i class="fa-solid fa-newspaper"></i>
                        </div>
                        <h4 class="text-lg font-black text-gray-900">No Published Articles Yet</h4>
                        <p class="text-sm text-gray-500 max-w-md mx-auto">Check back soon for the latest match reports, press statements, and club updates published from the admin panel.</p>
                    </div>
                @endforelse

            </div>
        </section>

        <!-- Newsletter Subscription Box -->
        <section class="bg-gradient-to-r from-clubPurple-dark via-clubPurple to-clubBlue rounded-3xl p-8 md:p-14 text-white shadow-2xl relative overflow-hidden border border-amber-400/30">
            <div class="absolute -right-16 -bottom-16 w-64 h-64 bg-amber-400/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-7 space-y-3">
                    <span class="text-amber-300 font-black tracking-widest uppercase text-xs">The Buffaloes Inner Circle</span>
                    <h3 class="text-3xl md:text-4xl font-black text-white tracking-tight">Never Miss a Matchday Update</h3>
                    <p class="text-purple-100 text-sm md:text-base font-medium max-w-xl">
                        Subscribe to get direct press releases, starting lineup announcements, ticket release schedules, and exclusive tactical analyses delivered straight to your inbox.
                    </p>
                </div>
                <div class="lg:col-span-5">
                    <form class="flex flex-col sm:flex-row gap-3">
                        <input type="email" placeholder="Enter your email address..." required 
                               class="bg-white/10 border border-white/20 text-white placeholder-purple-200 text-sm px-5 py-3.5 rounded-2xl focus:outline-none focus:border-amber-400 flex-grow backdrop-blur-md">
                        <button type="submit" class="bg-amber-400 hover:bg-amber-300 text-gray-950 font-black px-6 py-3.5 rounded-2xl shadow-xl transition-all uppercase text-xs tracking-wider whitespace-nowrap">
                            Subscribe
                        </button>
                    </form>
                    <p class="text-[11px] text-purple-200 mt-2 font-medium">We respect your privacy. Unsubscribe at any time.</p>
                </div>
            </div>
        </section>

        <!-- Club Motto Banner Callout -->
        <section class="bg-white rounded-3xl p-8 md:p-12 text-center shadow-xl border border-purple-500/10 space-y-4">
            <span class="text-clubPurple font-black tracking-widest uppercase text-xs">Embogo FC Philosophy</span>
            <h3 class="text-3xl md:text-4xl font-black text-gray-900">"Omukago nigwo mutima"</h3>
            <p class="text-gray-600 text-sm md:text-base font-medium max-w-2xl mx-auto">
                United by passion, driven by excellence. Follow our journey as we dominate the pitch and build a lasting legacy across Ugandan football.
            </p>
            <div class="pt-2">
                <a href="#contact" class="inline-block bg-clubPurple hover:bg-clubPurple-dark text-white font-black px-8 py-3.5 rounded-2xl shadow-lg transition-all uppercase text-xs tracking-wider">
                    Get in Touch With Us
                </a>
            </div>
        </section>

    </main>

    <!-- JavaScript for Interactive Category Filtering -->
    <script>
        function filterArticles(category) {
            // Update active states on buttons
            const buttons = document.querySelectorAll('.filter-btn');
            buttons.forEach(btn => {
                btn.classList.remove('bg-clubPurple', 'text-white', 'shadow-md');
                btn.classList.add('bg-white', 'text-gray-700', 'border', 'border-gray-200');
            });

            const activeBtn = document.getElementById('btn-' + category);
            if(activeBtn) {
                activeBtn.classList.remove('bg-white', 'text-gray-700', 'border', 'border-gray-200');
                activeBtn.classList.add('bg-clubPurple', 'text-white', 'shadow-md');
            }

            // Show/Hide Articles based on category
            const cards = document.querySelectorAll('.news-card');
            cards.forEach(card => {
                if (category === 'all' || card.getAttribute('data-category') === category) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>
    
</body>
</html>