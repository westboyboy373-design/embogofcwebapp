<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embogo FC Kabale - Executive Command Center</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-900 text-slate-100 flex h-screen overflow-hidden antialiased">

    <!-- AMBIENT BACKGROUND GLOWS (Blue & Purple Theme) -->
    <div class="fixed inset-0 pointer-events-none z-0 overflow-hidden">
        <div class="absolute -top-[10%] -left-[10%] w-[600px] h-[600px] bg-purple-600/10 rounded-full blur-[140px]"></div>
        <div class="absolute top-[20%] right-[5%] w-[500px] h-[500px] bg-blue-600/10 rounded-full blur-[150px]"></div>
    </div>

    <!-- MOBILE BACKDROP OVERLAY -->
    <div id="sidebar-overlay" onclick="toggleSidebar()" class="fixed inset-0 bg-slate-950/70 z-30 hidden md:hidden backdrop-blur-sm transition-opacity"></div>

    <!-- EXECUTIVE SIDEBAR -->
    <aside id="sidebar" class="fixed md:static inset-y-0 left-0 w-72 bg-slate-800/95 md:bg-slate-800/90 backdrop-blur-2xl border-r border-purple-500/20 flex flex-col justify-between z-40 shadow-2xl -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out">
        <div>
            <!-- Brand Header -->
            <div class="p-6 border-b border-purple-500/25 flex items-center justify-between">
                <div class="flex items-center gap-3.5">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-purple-600 to-blue-500 p-0.5 shadow-lg shadow-purple-500/20">
                        <div class="w-full h-full bg-slate-900 rounded-[10px] flex items-center justify-center text-purple-400 font-extrabold text-sm">
                            EFC
                        </div>
                    </div>
                    <div>
                        <h1 class="font-extrabold text-sm tracking-wide bg-gradient-to-r from-white via-slate-200 to-purple-300 bg-clip-text text-transparent">EMBOGO FC</h1>
                        <p class="text-[11px] font-medium text-purple-400 tracking-wider uppercase">Kabale Command</p>
                    </div>
                </div>
                <!-- Close Button for Mobile Drawer -->
                <button onclick="toggleSidebar()" class="md:hidden text-slate-400 hover:text-white p-1 rounded-lg">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

            <!-- Navigation Links -->
            <nav class="p-4 space-y-1.5 text-sm font-medium">
                <button onclick="switchTab('news')" id="nav-news" class="nav-btn w-full flex items-center justify-between px-4 py-3 rounded-xl transition group bg-gradient-to-r from-purple-600 to-blue-600 text-white shadow-lg shadow-purple-600/25">
                    <div class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                        News Hub
                    </div>
                    <span class="text-[10px] bg-white/25 px-2 py-0.5 rounded-full font-bold">{{ isset($posts) ? count($posts) : 0 }}</span>
                </button>
                <button onclick="switchTab('fixtures')" id="nav-fixtures" class="nav-btn w-full flex items-center justify-between px-4 py-3 rounded-xl transition group text-slate-300 hover:text-white hover:bg-slate-700/50">
                    <div class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-purple-400 group-hover:text-purple-300 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        Fixtures & Results
                    </div>
                </button>
                <button onclick="switchTab('table')" id="nav-table" class="nav-btn w-full flex items-center justify-between px-4 py-3 rounded-xl transition group text-slate-300 hover:text-white hover:bg-slate-700/50">
                    <div class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-purple-400 group-hover:text-purple-300 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                        League Table
                    </div>
                </button>
                <button onclick="switchTab('kits')" id="nav-kits" class="nav-btn w-full flex items-center justify-between px-4 py-3 rounded-xl transition group text-slate-300 hover:text-white hover:bg-slate-700/50">
                    <div class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-purple-400 group-hover:text-purple-300 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                        Merch & Kits
                    </div>
                </button>
                <button onclick="switchTab('club')" id="nav-club" class="nav-btn w-full flex items-center justify-between px-4 py-3 rounded-xl transition group text-slate-300 hover:text-white hover:bg-slate-700/50">
                    <div class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-purple-400 group-hover:text-purple-300 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        Club Directory
                    </div>
                </button>
                <button onclick="switchTab('contact')" id="nav-contact" class="nav-btn w-full flex items-center justify-between px-4 py-3 rounded-xl transition group text-slate-300 hover:text-white hover:bg-slate-700/50">
                    <div class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-purple-400 group-hover:text-purple-300 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        Inquiries
                    </div>
                    <span class="text-[10px] bg-blue-500/20 text-blue-300 border border-blue-500/30 px-2 py-0.5 rounded-full font-bold">New</span>
                </button>
            </nav>
        </div>

        <!-- System User & Logout -->
        <div class="p-4 border-t border-purple-500/20">
            <div class="flex items-center gap-3 mb-3 px-2">
                <div class="w-9 h-9 rounded-full bg-purple-600/30 border border-purple-500/40 flex items-center justify-center font-bold text-purple-200 text-xs">EK</div>
                <div class="overflow-hidden">
                    <p class="text-xs font-bold text-white truncate">Kabale Admin</p>
                    <p class="text-[11px] text-slate-300 truncate">admin@embogofc.ug</p>
                </div>
            </div>
            <a href="#" class="w-full flex items-center justify-center gap-2 py-2 px-4 rounded-xl text-xs font-semibold text-rose-300 hover:bg-rose-500/20 border border-rose-500/20 transition">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                Secure Logout
            </a>
        </div>
    </aside>

    <!-- MAIN VIEWPORT CONTAINER -->
    <main class="flex-1 flex flex-col h-screen overflow-y-auto z-10 relative bg-slate-900">
        
        <!-- Header Bar -->
        <header class="h-20 border-b border-purple-500/20 bg-slate-800/80 backdrop-blur-xl px-4 md:px-8 flex items-center justify-between sticky top-0 z-20">
            <div class="flex items-center gap-3 overflow-hidden">
                <!-- Hamburger Toggle Button for Mobile Screens -->
                <button onclick="toggleSidebar()" class="md:hidden p-2 rounded-xl bg-purple-600/20 border border-purple-500/30 text-purple-300 hover:text-white transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
                <div class="overflow-hidden">
                    <h2 id="page-title" class="text-base md:text-xl font-extrabold tracking-tight text-white truncate">News Management</h2>
                    <p id="page-subtitle" class="text-[11px] md:text-xs text-slate-300 mt-0.5 truncate">Publish and manage news articles across club platforms.</p>
                </div>
            </div>
            <div class="hidden sm:flex items-center gap-4">
                <div class="flex items-center gap-2 bg-purple-950/60 border border-purple-500/30 px-3.5 py-1.5 rounded-full text-xs text-purple-200 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    Kabale Base Live
                </div>
            </div>
        </header>

        <!-- Dynamic Panels Section -->
        <div class="p-4 md:p-8 max-w-7xl w-full mx-auto space-y-6">
            
            <!-- NEWS PANEL -->
            <div id="panel-news" class="dashboard-panel space-y-6">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 bg-slate-800 border border-purple-500/20 p-5 rounded-2xl shadow-xl">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-purple-600/20 border border-purple-500/30 flex items-center justify-center text-purple-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-white">Active Publications</h3>
                            <p class="text-xs text-slate-300">Manage headlines and editorial content for Embogo FC.</p>
                        </div>
                    </div>
                    <button onclick="toggleNewsModal()" class="w-full sm:w-auto px-4 py-2.5 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-500 hover:to-purple-500 text-white text-xs font-bold uppercase tracking-wider rounded-xl shadow-lg shadow-purple-600/20 transition flex items-center justify-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg> 
                        New Article
                    </button>
                </div>

                <div class="bg-slate-800 border border-purple-500/20 rounded-2xl overflow-x-auto shadow-2xl">
                    <table class="w-full text-left border-collapse min-w-[600px]">
                        <thead class="bg-slate-700/60 border-b border-purple-500/20 text-[11px] font-bold text-slate-300 uppercase tracking-widest">
                            <tr>
                                <th class="p-5">Headline</th>
                                <th class="p-5">Author</th>
                                <th class="p-5">Publish Date</th>
                                <th class="p-5">Status</th>
                                <th class="p-5 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-purple-500/10 text-sm">
                            @forelse($posts ?? [] as $index => $post)
                            <tr class="hover:bg-slate-700/40 transition">
                                <td class="p-5 font-semibold text-white flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-purple-500/20 flex items-center justify-center text-purple-300 text-xs font-bold">{{ sprintf('%02d', $index + 1) }}</div>
                                    {{ $post->title }}
                                </td>
                                <td class="p-5 text-slate-300 text-xs">{{ $post->author ?? 'Kabale Admin' }}</td>
                                <td class="p-5 text-slate-300 text-xs">{{ \Carbon\Carbon::parse($post->created_at)->format('M d, Y') }}</td>
                                <td class="p-5"><span class="px-3 py-1 bg-blue-500/20 text-blue-300 border border-blue-500/30 rounded-full text-[11px] font-bold">{{ $post->status ?? 'Published' }}</span></td>
                                <td class="p-5 text-right space-x-3 text-xs font-medium">
                                    <form action="{{ route('admin.news.destroy', $post->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this article?')" class="text-rose-300 hover:text-rose-200">Remove</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="p-8 text-center text-slate-400 text-xs">No news articles found in the database. Create your first article above!</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- FIXTURES & RESULTS PANEL (WITH DELETE BUTTONS ADDED) -->
            <div id="panel-fixtures" class="dashboard-panel hidden space-y-6">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 bg-slate-800 border border-purple-500/20 p-5 rounded-2xl shadow-xl">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-purple-600/20 border border-purple-500/30 flex items-center justify-center text-purple-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-white">Match Day Graphics Management</h3>
                            <p class="text-xs text-slate-300">Upload upcoming fixture posters and recent match result graphics.</p>
                        </div>
                    </div>
                    <button onclick="toggleFixtureModal()" class="w-full sm:w-auto px-4 py-2.5 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-500 hover:to-purple-500 text-white text-xs font-bold uppercase tracking-wider rounded-xl shadow-lg transition flex items-center justify-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg> Upload Match Photo
                    </button>
                </div>

                <!-- Upcoming Fixture Graphics Grid -->
                <div class="space-y-4">
                    <h4 class="text-xs font-extrabold uppercase tracking-wider text-purple-400">Upcoming Fixture Posters</h4>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                        @forelse(DB::table('fixture_photos')->where('type', 'upcoming')->orderBy('match_date', 'asc')->get() as $upcoming)
                            <div class="bg-slate-800 border border-purple-500/20 rounded-2xl overflow-hidden shadow-lg p-4 space-y-3 flex flex-col justify-between">
                                <div class="space-y-3">
                                    <div class="aspect-4/3 overflow-hidden rounded-xl bg-slate-900 relative">
                                        <img src="{{ asset($upcoming->file_path) }}" alt="{{ $upcoming->title }}" class="w-full h-full object-cover">
                                        <span class="absolute top-2 left-2 bg-purple-900 text-amber-300 text-[10px] font-black uppercase tracking-wider px-2 py-0.5 rounded">Upcoming</span>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <h5 class="font-bold text-white text-xs truncate">{{ $upcoming->title }}</h5>
                                        @if($upcoming->match_date)
                                            <span class="text-[11px] text-slate-400">{{ \Carbon\Carbon::parse($upcoming->match_date)->format('M j, Y') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="pt-3 border-t border-purple-500/15 flex justify-end">
                                    <form action="{{ route('admin.fixtures.destroy', $upcoming->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this fixture graphic?')" class="px-3 py-1.5 bg-rose-500/10 hover:bg-rose-500/20 border border-rose-500/30 text-rose-300 text-xs font-semibold rounded-lg transition flex items-center gap-1.5">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @empty
                            <div class="col-span-3 text-center py-8 bg-slate-800/50 rounded-2xl border border-dashed border-purple-500/20">
                                <p class="text-xs text-slate-400">No upcoming fixture photos uploaded yet.</p>
                            </div>
                        @endforelse
                    </div>
                </div>

                <!-- Recent Match Results Graphics Grid -->
                <div class="space-y-4 pt-4">
                    <h4 class="text-xs font-extrabold uppercase tracking-wider text-amber-400">Recent Match Results</h4>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                        @forelse(DB::table('fixture_photos')->where('type', 'result')->orderBy('match_date', 'desc')->get() as $result)
                            <div class="bg-slate-800 border border-purple-500/20 rounded-2xl overflow-hidden shadow-lg p-4 space-y-3 flex flex-col justify-between">
                                <div class="space-y-3">
                                    <div class="aspect-4/3 overflow-hidden rounded-xl bg-slate-900 relative">
                                        <img src="{{ asset($result->file_path) }}" alt="{{ $result->title }}" class="w-full h-full object-cover">
                                        <span class="absolute top-2 left-2 bg-amber-500 text-slate-950 text-[10px] font-black uppercase tracking-wider px-2 py-0.5 rounded">Result</span>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <h5 class="font-bold text-white text-xs truncate">{{ $result->title }}</h5>
                                        @if($result->match_date)
                                            <span class="text-[11px] text-slate-400">{{ \Carbon\Carbon::parse($result->match_date)->format('M j, Y') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="pt-3 border-t border-purple-500/15 flex justify-end">
                                    <form action="{{ route('admin.fixtures.destroy', $result->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this result graphic?')" class="px-3 py-1.5 bg-rose-500/10 hover:bg-rose-500/20 border border-rose-500/30 text-rose-300 text-xs font-semibold rounded-lg transition flex items-center gap-1.5">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @empty
                            <div class="col-span-3 text-center py-8 bg-slate-800/50 rounded-2xl border border-dashed border-purple-500/20">
                                <p class="text-xs text-slate-400">No recent match result photos uploaded yet.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>

            <!-- LEAGUE TABLE PANEL -->
            <div id="panel-table" class="dashboard-panel hidden space-y-6">
                <div class="flex justify-between items-center bg-slate-800 border border-purple-500/20 p-5 rounded-2xl shadow-xl">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-purple-600/20 border border-purple-500/30 flex items-center justify-center text-purple-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-white">Standings Matrix</h3>
                            <p class="text-xs text-slate-300">Control club rankings and performance metrics.</p>
                        </div>
                    </div>
                    <button onclick="openModal('Sync Standings Matrix')" class="px-4 py-2.5 bg-gradient-to-r from-blue-600 to-purple-600 text-white text-xs font-bold uppercase tracking-wider rounded-xl shadow-lg transition">Sync Standings</button>
                </div>
                <div class="bg-slate-800 border border-purple-500/20 rounded-2xl p-8 text-sm text-slate-300 font-medium">
                    Embogo FC current position tracker active in regional standings.
                </div>
            </div>

            <!-- KITS PANEL -->
            <div id="panel-kits" class="dashboard-panel hidden space-y-6">
                <div class="flex justify-between items-center bg-slate-800 border border-purple-500/20 p-5 rounded-2xl shadow-xl">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-purple-600/20 border border-purple-500/30 flex items-center justify-center text-purple-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-white">Apparel & Kit Logistics</h3>
                            <p class="text-xs text-slate-300">Manage official Embogo FC team kits and merchandise.</p>
                        </div>
                    </div>
                    <button onclick="openModal('Upload Uniform Asset')" class="px-4 py-2.5 bg-gradient-to-r from-blue-600 to-purple-600 text-white text-xs font-bold uppercase tracking-wider rounded-xl shadow-lg transition">Upload Kit</button>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    <div class="bg-slate-800 border border-purple-500/20 p-6 rounded-2xl text-center space-y-3 shadow-lg">
                        <div class="h-40 bg-slate-900 rounded-xl flex items-center justify-center text-purple-300 font-bold border border-purple-500/20 shadow-inner">Primary Match Kit</div>
                        <button onclick="openModal('Modify Home Kit')" class="text-xs font-bold text-purple-300 hover:text-purple-200">Configure Asset &rarr;</button>
                    </div>
                </div>
            </div>

            <!-- CLUB INFO PANEL -->
            <div id="panel-club" class="dashboard-panel hidden space-y-6">
                <div class="bg-slate-800 border border-purple-500/20 rounded-2xl p-8 space-y-6 shadow-xl">
                    <div class="flex items-center gap-3 border-b border-purple-500/20 pb-4">
                        <div class="w-10 h-10 rounded-xl bg-purple-600/20 border border-purple-500/30 flex items-center justify-center text-purple-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-white">Club Profile Specifications</h3>
                            <p class="text-xs text-slate-300">Official details for Embogo FC Kabale.</p>
                        </div>
                    </div>
                    <div class="space-y-4 max-w-xl">
                        <div>
                            <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Club Name</label>
                            <input type="text" value="Embogo FC Kabale" class="w-full px-4 py-3 bg-slate-900 border border-purple-500/30 rounded-xl text-white text-sm focus:outline-none focus:border-purple-500 transition">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Home Ground</label>
                            <input type="text" value="Kabale Municipal Stadium" class="w-full px-4 py-3 bg-slate-900 border border-purple-500/30 rounded-xl text-white text-sm focus:outline-none focus:border-purple-500 transition">
                        </div>
                        <button onclick="openModal('Save Profile Parameters')" class="px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white text-xs font-bold uppercase tracking-wider rounded-xl shadow-lg transition">Save Profile Parameters</button>
                    </div>
                </div>
            </div>

            <!-- CONTACT PANEL -->
            <div id="panel-contact" class="dashboard-panel hidden space-y-6">
                <div class="bg-slate-800 border border-purple-500/20 rounded-2xl p-8 shadow-xl space-y-6">
                    <div class="flex items-center gap-3 border-b border-purple-500/20 pb-4">
                        <div class="w-10 h-10 rounded-xl bg-blue-600/20 border border-blue-500/30 flex items-center justify-center text-blue-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-white">Incoming Inquiries Queue</h3>
                            <p class="text-xs text-slate-300">Review public contact submissions and fan correspondence.</p>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div class="p-4 bg-slate-900 rounded-xl border border-purple-500/20 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 shadow-inner">
                            <div>
                                <div class="flex items-center gap-2 mb-1">
                                    <span class="text-xs font-bold text-white">fans@embogofc.ug</span>
                                    <span class="text-[10px] bg-blue-500/20 text-blue-300 px-2 py-0.5 rounded-full border border-blue-500/30 font-bold">Fan Inquiry</span>
                                </div>
                                <p class="text-xs text-slate-300">Inquiring about tickets for the upcoming derby match in Kabale.</p>
                            </div>
                            <button onclick="openModal('Reply to Fan Inquiry')" class="px-3 py-1.5 bg-purple-600/30 hover:bg-purple-600 text-purple-200 hover:text-white text-xs font-bold rounded-lg border border-purple-500/40 transition">Reply</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- CREATE ARTICLE MODAL -->
    <div id="news-modal" class="fixed inset-0 bg-slate-950/80 z-50 hidden backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-slate-800 border border-purple-500/30 w-full max-w-lg rounded-2xl shadow-2xl overflow-hidden">
            <div class="p-6 border-b border-purple-500/20 flex items-center justify-between">
                <h3 class="text-base font-bold text-white">Publish New Article with Media</h3>
                <button onclick="toggleNewsModal()" class="text-slate-400 hover:text-white p-1 rounded-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data" class="p-6 space-y-4">
                @csrf
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Headline</label>
                    <input type="text" name="title" required placeholder="e.g., Embogo FC prepares for massive derby..." class="w-full px-4 py-3 bg-slate-900 border border-purple-500/30 rounded-xl text-white text-sm focus:outline-none focus:border-purple-500 transition">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Content Details</label>
                    <textarea name="content" rows="3" required placeholder="Write full article description here..." class="w-full px-4 py-3 bg-slate-900 border border-purple-500/30 rounded-xl text-white text-sm focus:outline-none focus:border-purple-500 transition"></textarea>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Attach Media Asset</label>
                    <input type="file" name="media" accept="image/*" class="w-full px-4 py-2.5 bg-slate-900 border border-purple-500/30 rounded-xl text-slate-300 text-xs file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-purple-600 file:text-white hover:file:bg-purple-500 transition">
                </div>
                <div class="flex justify-end gap-3 pt-4 border-t border-purple-500/20">
                    <button type="button" onclick="toggleNewsModal()" class="px-4 py-2.5 bg-slate-700 hover:bg-slate-600 text-slate-200 text-xs font-bold rounded-xl transition">Cancel</button>
                    <button type="submit" class="px-5 py-2.5 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-500 hover:to-purple-500 text-white text-xs font-bold uppercase tracking-wider rounded-xl shadow-lg transition">Publish Article</button>
                </div>
            </form>
        </div>
    </div>

    <!-- FIXTURE / RESULT PHOTO UPLOAD MODAL -->
    <div id="fixture-modal" class="fixed inset-0 bg-slate-950/80 z-50 hidden backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-slate-800 border border-purple-500/30 w-full max-w-lg rounded-2xl shadow-2xl overflow-hidden">
            <div class="p-6 border-b border-purple-500/20 flex items-center justify-between">
                <h3 class="text-base font-bold text-white">Upload Match Graphic Photo</h3>
                <button onclick="toggleFixtureModal()" class="text-slate-400 hover:text-white p-1 rounded-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <form action="{{ route('admin.fixtures.store') }}" method="POST" enctype="multipart/form-data" class="p-6 space-y-4">
                @csrf
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Match Graphic Title</label>
                    <input type="text" name="title" required placeholder="e.g., Embogo FC vs Mbarara City" class="w-full px-4 py-3 bg-slate-900 border border-purple-500/30 rounded-xl text-white text-sm focus:outline-none focus:border-purple-500 transition">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Category Type</label>
                    <select name="type" required class="w-full px-4 py-3 bg-slate-900 border border-purple-500/30 rounded-xl text-white text-sm focus:outline-none focus:border-purple-500 transition">
                        <option value="upcoming">Upcoming Fixture Poster</option>
                        <option value="result">Recent Match Result</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Match Date</label>
                    <input type="date" name="match_date" class="w-full px-4 py-3 bg-slate-900 border border-purple-500/30 rounded-xl text-white text-sm focus:outline-none focus:border-purple-500 transition">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Upload Photo File</label>
                    <input type="file" name="photo" accept="image/*" required class="w-full px-4 py-2.5 bg-slate-900 border border-purple-500/30 rounded-xl text-slate-300 text-xs file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-purple-600 file:text-white hover:file:bg-purple-500 transition">
                </div>
                <div class="flex justify-end gap-3 pt-4 border-t border-purple-500/20">
                    <button type="button" onclick="toggleFixtureModal()" class="px-4 py-2.5 bg-slate-700 hover:bg-slate-600 text-slate-200 text-xs font-bold rounded-xl transition">Cancel</button>
                    <button type="submit" class="px-5 py-2.5 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-500 hover:to-purple-500 text-white text-xs font-bold uppercase tracking-wider rounded-xl shadow-lg transition">Upload Graphic</button>
                </div>
            </form>
        </div>
    </div>

    <!-- EXECUTIVE SCRIPT CONTROLLER -->
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
        }

        function switchTab(tabId) {
            document.querySelectorAll('.dashboard-panel').forEach(panel => {
                panel.classList.add('hidden');
            });
            document.querySelectorAll('.nav-btn').forEach(btn => {
                btn.className = "nav-btn w-full flex items-center justify-between px-4 py-3 rounded-xl transition group text-slate-300 hover:text-white hover:bg-slate-700/50";
                const svg = btn.querySelector('svg');
                if(svg) svg.className = "w-4 h-4 text-purple-400 group-hover:text-purple-300 transition";
            });

            document.getElementById('panel-' + tabId).classList.remove('hidden');
            
            const activeBtn = document.getElementById('nav-' + tabId);
            activeBtn.className = "nav-btn w-full flex items-center justify-between px-4 py-3 rounded-xl transition group bg-gradient-to-r from-purple-600 to-blue-600 text-white shadow-lg shadow-purple-600/25";
            
            const activeSvg = activeBtn.querySelector('svg');
            if(activeSvg) activeSvg.className = "w-4 h-4 text-white";

            const meta = {
                'news': { title: 'News Management', sub: 'Publish and manage news articles across Embogo FC platforms.' },
                'fixtures': { title: 'Match Day Graphics Management', sub: 'Upload upcoming fixture posters and recent match result graphics.' },
                'table': { title: 'League Table Matrix', sub: 'Control club rankings, metrics, goals, and season differentials.' },
                'kits': { title: 'Apparel & Kit Logistics', sub: 'Manage home, away, and alternate matchday uniform inventories.' },
                'club': { title: 'Club Directory Specifications', sub: 'Core organizational metadata and official team parameters.' },
                'contact': { title: 'Inquiries & Communications', sub: 'Review and dispatch public contact submissions and ticket queries.' }
            };
            document.getElementById('page-title').innerText = meta[tabId].title;
            document.getElementById('page-subtitle').innerText = meta[tabId].sub;

            if (window.innerWidth < 768) {
                toggleSidebar();
            }
        }

        function toggleNewsModal() {
            const modal = document.getElementById('news-modal');
            modal.classList.toggle('hidden');
        }

        function toggleFixtureModal() {
            const modal = document.getElementById('fixture-modal');
            modal.classList.toggle('hidden');
        }

        function openModal(actionName) {
            let modalContainer = document.getElementById('dynamic-action-modal');
            if (!modalContainer) {
                modalContainer = document.createElement('div');
                modalContainer.id = 'dynamic-action-modal';
                modalContainer.className = 'fixed inset-0 bg-slate-950/80 z-50 backdrop-blur-sm flex items-center justify-center p-4';
                modalContainer.innerHTML = `
                    <div class="bg-slate-800 border border-purple-500/30 w-full max-w-md rounded-2xl shadow-2xl overflow-hidden animate-in fade-in zoom-in duration-200">
                        <div class="p-5 border-b border-purple-500/20 flex items-center justify-between">
                            <h3 id="modal-title" class="text-sm font-bold text-white">Action</h3>
                            <button onclick="closeDynamicModal()" class="text-slate-400 hover:text-white p-1 rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                            </button>
                        </div>
                        <form id="dynamic-form" onsubmit="submitDynamicForm(event)" class="p-5 space-y-4">
                            <input type="hidden" id="form-action-type" name="action_type">
                            <div>
                                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2" id="input-label">Data Field</label>
                                <input type="text" id="form-input-value" name="value" required class="w-full px-4 py-2.5 bg-slate-900 border border-purple-500/30 rounded-xl text-white text-sm focus:outline-none focus:border-purple-500 transition" placeholder="Enter details...">
                            </div>
                            <div class="flex justify-end gap-3 pt-3 border-t border-purple-500/20">
                                <button type="button" onclick="closeDynamicModal()" class="px-4 py-2 bg-slate-700 hover:bg-slate-600 text-slate-200 text-xs font-bold rounded-xl transition">Cancel</button>
                                <button type="submit" id="form-submit-btn" class="px-4 py-2 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-500 hover:to-purple-500 text-white text-xs font-bold uppercase tracking-wider rounded-xl shadow-lg transition">Save Changes</button>
                            </div>
                        </form>
                    </div>
                `;
                document.body.appendChild(modalContainer);
            } else {
                modalContainer.classList.remove('hidden');
            }

            document.getElementById('modal-title').innerText = actionName;
            document.getElementById('form-action-type').value = actionName;
            document.getElementById('input-label').innerText = "Parameters for: " + actionName;
        }

        function closeDynamicModal() {
            const modalContainer = document.getElementById('dynamic-action-modal');
            if (modalContainer) {
                modalContainer.classList.add('hidden');
            }
        }

        async function submitDynamicForm(event) {
            event.preventDefault();
            const actionType = document.getElementById('form-action-type').value;
            const inputValue = document.getElementById('form-input-value').value;
            const submitBtn = document.getElementById('form-submit-btn');

            submitBtn.innerText = "Processing...";
            submitBtn.disabled = true;

            try {
                const response = await fetch('/admin/dashboard/action', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({ action: actionType, value: inputValue })
                });

                if (response.ok) {
                    alert("Success! Action '" + actionType + "' executed and saved.");
                    closeDynamicModal();
                    location.reload(); 
                } else {
                    alert("Server error occurred while processing command.");
                }
            } catch (error) {
                console.error('Network Error:', error);
                alert("Network communication error with Kabale Command Server.");
            } finally {
                submitBtn.innerText = "Save Changes";
                submitBtn.disabled = false;
            }
        }
    </script>
</body>
</html>