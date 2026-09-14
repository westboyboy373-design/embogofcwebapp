@php
    $tab = request('tab', 'overview');

    $navItems = [
        'overview' => ['label' => 'Overview',  'icon' => 'grid'],
        'news'     => ['label' => 'News & Media', 'icon' => 'newspaper'],
        'fixtures' => ['label' => 'Fixtures',  'icon' => 'camera'],
        'league'   => ['label' => 'League Table', 'icon' => 'trophy'],
        'kits'     => ['label' => 'Kit Inventory', 'icon' => 'shirt'],
        'users'    => ['label' => 'Admin Users',   'icon' => 'users'],
        'messages' => ['label' => 'Inquiries',  'icon' => 'mail'],
    ];
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Embogo FC Kabale</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js for lightweight mobile sidebar state toggling -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-thumb { background: rgba(147,51,234,0.3); border-radius: 999px; }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 antialiased" x-data="{ sidebarOpen: false }">

    <div class="flex min-h-screen">

        <!-- MOBILE SIDEBAR BACKDROP -->
        <div x-show="sidebarOpen" 
             @click="sidebarOpen = false"
             x-transition.opacity
             class="fixed inset-0 bg-slate-950/80 z-30 lg:hidden backdrop-blur-sm">
        </div>

        <!-- SIDEBAR -->
        <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" 
               class="w-64 shrink-0 bg-slate-900/95 border-r border-purple-500/20 flex flex-col fixed inset-y-0 left-0 z-40 transition-transform duration-300 ease-in-out lg:translate-x-0">
            <div class="flex items-center justify-between px-6 py-6 border-b border-purple-500/10">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 bg-gradient-to-tr from-purple-600 to-blue-500 p-0.5 rounded-lg shrink-0">
                        <div class="w-full h-full bg-slate-950 rounded-[7px] flex items-center justify-center text-amber-400 font-extrabold">EF</div>
                    </div>
                    <div class="min-w-0">
                        <p class="text-sm font-extrabold text-white truncate">Embogo FC</p>
                        <p class="text-[10px] uppercase tracking-wider text-slate-500 font-semibold">Kabale Portal</p>
                    </div>
                </div>
                <!-- Close button for mobile -->
                <button @click="sidebarOpen = false" class="lg:hidden text-slate-400 hover:text-white p-1">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

            <nav class="flex-1 px-3 py-4 space-y-1 overflow-y-auto">
                @foreach($navItems as $key => $item)
                    <a href="{{ route('dashboard', ['tab' => $key]) }}"
                        @click="sidebarOpen = false"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium transition
                        {{ $tab === $key ? 'bg-gradient-to-r from-purple-600/20 to-blue-600/10 text-white border border-purple-500/30' : 'text-slate-400 hover:text-white hover:bg-slate-800/60 border border-transparent' }}">
                        <span class="truncate">{{ $item['label'] }}</span>
                        @php
                            $badgeCount = match($key) {
                                'news'     => isset($posts) ? $posts->count() : 0,
                                'fixtures' => isset($fixturePhotos) ? $fixturePhotos->count() : 0,
                                'league'   => isset($leagueMedia) ? $leagueMedia->count() : 0,
                                'kits'     => isset($kits) ? $kits->count() : 0,
                                'users'    => isset($users) ? $users->count() : 0,
                                'messages' => isset($messages) ? $messages->count() : 0,
                                default    => null,
                            };
                        @endphp
                        @if(!is_null($badgeCount))
                            <span class="ml-auto text-[10px] font-bold px-1.5 py-0.5 rounded-md bg-slate-800 text-slate-400">{{ $badgeCount }}</span>
                        @endif
                    </a>
                @endforeach
            </nav>

            <div class="px-3 py-4 border-t border-purple-500/10">
                <div class="px-3 py-2 mb-2">
                    <p class="text-xs font-semibold text-white truncate">Admin Panel Active</p>
                    <p class="text-[10px] uppercase tracking-wider text-emerald-400">Database Connected</p>
                </div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full text-left px-3 py-2 text-xs font-bold uppercase tracking-wider text-red-400 hover:bg-slate-800 rounded-lg">Log Out</button>
                </form>
            </div>
        </aside>

        <!-- MAIN CONTENT -->
        <div class="flex-1 lg:ml-64 min-h-screen w-full">
            <header class="sticky top-0 z-20 bg-slate-950/80 backdrop-blur-xl border-b border-purple-500/10 px-4 lg:px-8 py-5 flex justify-between items-center">
                <div class="flex items-center gap-3">
                    <!-- Mobile Hamburger Button -->
                    <button @click="sidebarOpen = !sidebarOpen" class="lg:hidden text-slate-300 hover:text-white p-1.5 bg-slate-900 border border-purple-500/30 rounded-xl">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </button>
                    <div>
                        <h1 class="text-base lg:text-xl font-extrabold text-white">{{ $navItems[$tab]['label'] ?? 'Overview' }}</h1>
                        <p class="text-[10px] lg:text-xs text-slate-500 mt-0.5">Direct Blade & Database Architecture</p>
                    </div>
                </div>
                <div class="text-[10px] lg:text-xs bg-purple-900/30 border border-purple-500/30 text-purple-300 px-2.5 lg:px-3 py-1.5 rounded-lg">
                    Server: MariaDB 10.4
                </div>
            </header>

            <main class="relative z-10 p-4 lg:p-8 max-w-6xl mx-auto">

                @if(session('success'))
                    <div class="mb-6 p-3 bg-emerald-500/20 border border-emerald-500/50 text-emerald-300 rounded-xl text-xs font-medium">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="mb-6 p-3 bg-red-500/20 border border-red-500/50 text-red-300 rounded-xl text-xs font-medium">
                        <ul class="list-disc list-inside">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- OVERVIEW TAB --}}
                @if($tab === 'overview')
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
                        <div class="bg-slate-900/90 border border-purple-500/30 rounded-2xl p-5">
                            <p class="text-[10px] uppercase tracking-wider text-slate-500 font-semibold">Total Articles</p>
                            <p class="text-3xl font-extrabold text-white mt-1">{{ isset($posts) ? $posts->count() : 0 }}</p>
                        </div>
                        <div class="bg-slate-900/90 border border-purple-500/30 rounded-2xl p-5">
                            <p class="text-[10px] uppercase tracking-wider text-slate-500 font-semibold">Kit Inventory</p>
                            <p class="text-3xl font-extrabold text-white mt-1">{{ isset($kits) ? $kits->count() : 0 }}</p>
                        </div>
                        <div class="bg-slate-900/90 border border-purple-500/30 rounded-2xl p-5">
                            <p class="text-[10px] uppercase tracking-wider text-slate-500 font-semibold">Fixture Photos</p>
                            <p class="text-3xl font-extrabold text-white mt-1">{{ isset($fixturePhotos) ? $fixturePhotos->count() : 0 }}</p>
                        </div>
                        <div class="bg-slate-900/90 border border-purple-500/30 rounded-2xl p-5">
                            <p class="text-[10px] uppercase tracking-wider text-slate-500 font-semibold">Inquiries</p>
                            <p class="text-3xl font-extrabold text-white mt-1">{{ isset($messages) ? $messages->count() : 0 }}</p>
                        </div>
                    </div>
                @endif

                {{-- NEWS TAB --}}
                @if($tab === 'news')
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        <div class="bg-slate-900/90 border border-purple-500/30 rounded-2xl p-6 h-fit">
                            <h2 class="text-sm font-bold uppercase tracking-wider text-slate-300 mb-4">Post Article</h2>
                            <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                                @csrf
                                <div>
                                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-1">Title</label>
                                    <input type="text" name="title" required class="w-full px-3 py-2 bg-slate-950 border border-purple-500/30 rounded-xl text-white text-sm">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-1">Content</label>
                                    <textarea name="content" rows="4" required class="w-full px-3 py-2 bg-slate-950 border border-purple-500/30 rounded-xl text-white text-sm"></textarea>
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-1">Image Attachment</label>
                                    <input type="file" name="media" class="w-full text-xs text-slate-400">
                                </div>
                                <button type="submit" class="w-full py-2.5 bg-gradient-to-r from-purple-600 to-blue-600 text-white text-xs font-bold uppercase tracking-wider rounded-xl">Publish</button>
                            </form>
                        </div>
                        <div class="lg:col-span-2 bg-slate-900/90 border border-purple-500/30 rounded-2xl p-6">
                            <h2 class="text-sm font-bold uppercase tracking-wider text-slate-300 mb-4">Published Feed</h2>
                            @forelse($posts as $post)
                                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center py-3 border-b border-purple-500/10 gap-3">
                                    <div>
                                        <p class="text-sm font-bold text-white">{{ $post->title }}</p>
                                        <p class="text-xs text-slate-400">{{ Str::limit($post->content, 60) }}</p>
                                    </div>
                                    <form action="{{ route('admin.news.destroy', $post->id) }}" method="POST" class="self-end sm:self-center">
                                        @csrf @method('DELETE')
                                        <button class="text-xs text-red-400 border border-red-500/30 px-2.5 py-1 rounded-lg">Delete</button>
                                    </form>
                                </div>
                            @empty
                                <p class="text-xs text-slate-500">No news articles found.</p>
                            @endforelse
                        </div>
                    </div>
                @endif

                {{-- FIXTURES TAB --}}
                @if($tab === 'fixtures')
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        <div class="bg-slate-900/90 border border-purple-500/30 rounded-2xl p-6 h-fit">
                            <h2 class="text-sm font-bold uppercase tracking-wider text-slate-300 mb-4">Upload Fixture / Result</h2>
                            <form action="{{ route('admin.fixtures.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                                @csrf
                                <div>
                                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-1">Title / Match Details</label>
                                    <input type="text" name="title" required placeholder="e.g. Embogo vs Rival FC" class="w-full px-3 py-2 bg-slate-950 border border-purple-500/30 rounded-xl text-white text-sm">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-1">Type</label>
                                    <select name="type" class="w-full px-3 py-2 bg-slate-950 border border-purple-500/30 rounded-xl text-white text-sm">
                                        <option value="upcoming">Upcoming Fixture</option>
                                        <option value="result">Match Result</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-1">Match Date</label>
                                    <input type="date" name="match_date" class="w-full px-3 py-2 bg-slate-950 border border-purple-500/30 rounded-xl text-white text-sm">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-1">Fixture Image / Flyer</label>
                                    <input type="file" name="media" required class="w-full text-xs text-slate-400">
                                </div>
                                <button type="submit" class="w-full py-2.5 bg-gradient-to-r from-purple-600 to-blue-600 text-white text-xs font-bold uppercase tracking-wider rounded-xl">Upload Fixture</button>
                            </form>
                        </div>
                        <div class="lg:col-span-2 bg-slate-900/90 border border-purple-500/30 rounded-2xl p-6">
                            <h2 class="text-sm font-bold uppercase tracking-wider text-slate-300 mb-4">Existing Fixtures & Results</h2>
                            <div class="space-y-4">
                                @forelse($fixturePhotos as $photo)
                                    <div class="bg-slate-950 border border-purple-500/20 p-4 rounded-xl flex flex-col sm:flex-row justify-between items-start sm:items-center gap-3">
                                        <div>
                                            <p class="text-sm font-bold text-white">{{ $photo->title }}</p>
                                            <p class="text-xs text-purple-400 mt-0.5">Type: <span class="uppercase font-semibold">{{ $photo->type }}</span> | Date: {{ $photo->match_date ?? 'N/A' }}</p>
                                            <p class="text-[10px] text-slate-500 mt-1 truncate max-w-xs">File: {{ $photo->file_path }}</p>
                                        </div>
                                        <form action="{{ route('admin.fixtures.destroy', $photo->id) }}" method="POST" class="self-end sm:self-center">
                                            @csrf @method('DELETE')
                                            <button class="text-xs text-red-400 border border-red-500/30 px-3 py-1.5 rounded-lg hover:bg-red-500/10">Delete</button>
                                        </form>
                                    </div>
                                @empty
                                    <p class="text-sm text-slate-500">No fixture photos found in database.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                @endif

                {{-- LEAGUE TABLE TAB --}}
                @if($tab === 'league')
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        <div class="bg-slate-900/90 border border-purple-500/30 rounded-2xl p-6 h-fit">
                            <h2 class="text-sm font-bold uppercase tracking-wider text-slate-300 mb-4">Upload Standings Image</h2>
                            <form action="{{ route('admin.league.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                                @csrf
                                <div>
                                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-1">Season</label>
                                    <input type="text" name="season" value="2026/2027" class="w-full px-3 py-2 bg-slate-950 border border-purple-500/30 rounded-xl text-white text-sm">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-1">Matchday Info</label>
                                    <input type="text" name="matchday" placeholder="e.g. Matchday Standings" class="w-full px-3 py-2 bg-slate-950 border border-purple-500/30 rounded-xl text-white text-sm">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-1">Table Screenshot / Image</label>
                                    <input type="file" name="media" required class="w-full text-xs text-slate-400">
                                </div>
                                <button type="submit" class="w-full py-2.5 bg-gradient-to-r from-purple-600 to-blue-600 text-white text-xs font-bold uppercase tracking-wider rounded-xl">Upload Standings</button>
                            </form>
                        </div>
                        <div class="lg:col-span-2 bg-slate-900/90 border border-purple-500/30 rounded-2xl p-6">
                            <h2 class="text-sm font-bold uppercase tracking-wider text-slate-300 mb-4">Uploaded League Standings</h2>
                            <div class="space-y-4">
                                @forelse($leagueMedia as $media)
                                    <div class="bg-slate-950 border border-purple-500/20 p-4 rounded-xl flex flex-col sm:flex-row justify-between items-start sm:items-center gap-3">
                                        <div>
                                            <p class="text-sm font-bold text-white">{{ $media->matchday ?? 'Standings' }} (Season: {{ $media->season }})</p>
                                            <p class="text-xs text-emerald-400 mt-0.5">Status: {{ $media->status }}</p>
                                            <p class="text-[10px] text-slate-500 mt-1 truncate max-w-xs">File: {{ $media->file_path }}</p>
                                        </div>
                                        <form action="{{ route('admin.league.destroy', $media->id) }}" method="POST" class="self-end sm:self-center">
                                            @csrf @method('DELETE')
                                            <button class="text-xs text-red-400 border border-red-500/30 px-3 py-1.5 rounded-lg hover:bg-red-500/10">Delete</button>
                                        </form>
                                    </div>
                                @empty
                                    <p class="text-sm text-slate-500">No league table media uploaded yet.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                @endif

                {{-- KITS TAB --}}
                @if($tab === 'kits')
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        <div class="bg-slate-900/90 border border-purple-500/30 rounded-2xl p-6 h-fit">
                            <h2 class="text-sm font-bold uppercase tracking-wider text-slate-300 mb-4">Add Kit Item</h2>
                            <form action="{{ route('admin.kits.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                                @csrf
                                <div>
                                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-1">Kit Name</label>
                                    <input type="text" name="kit_name" required placeholder="e.g. Home Jersey 2026/27" class="w-full px-3 py-2 bg-slate-950 border border-purple-500/30 rounded-xl text-white text-sm">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-1">Classification</label>
                                    <input type="text" name="classification" required placeholder="e.g. Home Kit / Away Kit" class="w-full px-3 py-2 bg-slate-950 border border-purple-500/30 rounded-xl text-white text-sm">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-1">Price (UGX)</label>
                                    <input type="number" name="price_ugx" required placeholder="e.g. 50000" class="w-full px-3 py-2 bg-slate-950 border border-purple-500/30 rounded-xl text-white text-sm">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-1">Kit Image</label>
                                    <input type="file" name="media" accept="image/*" class="w-full text-xs text-slate-400">
                                </div>
                                <button type="submit" class="w-full py-2.5 bg-gradient-to-r from-purple-600 to-blue-600 text-white text-xs font-bold uppercase tracking-wider rounded-xl">Upload Kit / Add Item</button>
                            </form>
                        </div>
                        <div class="lg:col-span-2 bg-slate-900/90 border border-purple-500/30 rounded-2xl p-6">
                            <h2 class="text-sm font-bold uppercase tracking-wider text-slate-300 mb-4">Club Kit Inventory</h2>
                            <div class="space-y-4">
                                @forelse($kits as $kit)
                                    <div class="bg-slate-950 border border-purple-500/20 p-4 rounded-xl flex justify-between items-center">
                                        <div class="flex items-center gap-4">
                                            @if(!empty($kit->image_path))
                                                <img src="{{ asset($kit->image_path) }}" alt="{{ $kit->kit_name }}" class="w-12 h-12 object-cover rounded-lg border border-purple-500/20">
                                            @else
                                                <div class="w-12 h-12 bg-slate-900 rounded-lg border border-purple-500/20 flex items-center justify-center text-[10px] text-slate-500">No Img</div>
                                            @endif
                                            <div>
                                                <p class="text-sm font-bold text-white">{{ $kit->kit_name }}</p>
                                                <p class="text-xs text-purple-400">{{ $kit->classification }}</p>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-sm font-extrabold text-amber-400">UGX {{ number_format($kit->price_ugx) }}</p>
                                            <form action="{{ route('admin.kits.destroy', $kit->id) }}" method="POST" class="mt-2">
                                                @csrf @method('DELETE')
                                                <button class="text-[10px] text-red-400 border border-red-500/30 px-2 py-0.5 rounded">Remove</button>
                                            </form>
                                        </div>
                                    </div>
                                @empty
                                    <p class="text-sm text-slate-500">No kits in inventory.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                @endif

                {{-- USERS TAB --}}
                @if($tab === 'users')
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        <div class="bg-slate-900/90 border border-purple-500/30 rounded-2xl p-6 h-fit">
                            <h2 class="text-sm font-bold uppercase tracking-wider text-slate-300 mb-4">Add System User</h2>
                            <form action="{{ route('admin.users.store') }}" method="POST" class="space-y-4">
                                @csrf
                                <div>
                                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-1">Full Name</label>
                                    <input type="text" name="name" required placeholder="e.g. John Doe" class="w-full px-3 py-2 bg-slate-950 border border-purple-500/30 rounded-xl text-white text-sm">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-1">Email Address</label>
                                    <input type="email" name="email" required placeholder="admin@embogofc.ug" class="w-full px-3 py-2 bg-slate-950 border border-purple-500/30 rounded-xl text-white text-sm">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-1">Password</label>
                                    <input type="password" name="password" required placeholder="******" class="w-full px-3 py-2 bg-slate-950 border border-purple-500/30 rounded-xl text-white text-sm">
                                </div>
                                <button type="submit" class="w-full py-2.5 bg-gradient-to-r from-purple-600 to-blue-600 text-white text-xs font-bold uppercase tracking-wider rounded-xl">Create User</button>
                            </form>
                        </div>
                        <div class="lg:col-span-2 bg-slate-900/90 border border-purple-500/30 rounded-2xl p-6">
                            <h2 class="text-sm font-bold uppercase tracking-wider text-slate-300 mb-4">Registered Admins & Users</h2>
                            <div class="space-y-4">
                                @forelse($users as $userAccount)
                                    <div class="bg-slate-950 border border-purple-500/20 p-4 rounded-xl flex flex-col sm:flex-row justify-between items-start sm:items-center gap-3">
                                        <div>
                                            <p class="text-sm font-bold text-white">{{ $userAccount->name }}</p>
                                            <p class="text-xs text-purple-400 mt-0.5">{{ $userAccount->email }}</p>
                                            <p class="text-[10px] text-slate-500 mt-1">Joined: {{ $userAccount->created_at ?? 'N/A' }}</p>
                                        </div>
                                        @if($userAccount->id != 1)
                                            <form action="{{ route('admin.users.destroy', $userAccount->id) }}" method="POST" class="self-end sm:self-center">
                                                @csrf @method('DELETE')
                                                <button class="text-xs text-red-400 border border-red-500/30 px-3 py-1.5 rounded-lg hover:bg-red-500/10">Revoke</button>
                                            </form>
                                        @else
                                            <span class="text-[10px] bg-purple-900/40 border border-purple-500/30 text-purple-300 px-2.5 py-1 rounded-lg self-end sm:self-center">Primary Admin</span>
                                        @endif
                                    </div>
                                @empty
                                    <p class="text-sm text-slate-500">No users found.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                @endif

                {{-- MESSAGES TAB --}}
                @if($tab === 'messages')
                    <div class="bg-slate-900/90 border border-purple-500/30 rounded-2xl p-6">
                        <h2 class="text-sm font-bold uppercase tracking-wider text-slate-300 mb-4">Contact Form Inquiries</h2>
                        @forelse($messages as $msg)
                            <div class="flex flex-col sm:flex-row justify-between items-start py-4 border-b border-purple-500/10 gap-3">
                                <div>
                                    <p class="text-sm font-bold text-white">{{ $msg->full_name }} <span class="text-xs text-slate-400">({{ $msg->email }})</span></p>
                                    <p class="text-xs font-semibold text-purple-300 mt-0.5">Subject: {{ $msg->subject }}</p>
                                    <p class="text-xs text-slate-300 mt-1">{{ $msg->message }}</p>
                                </div>
                                <form action="{{ route('admin.contact.destroy', $msg->id) }}" method="POST" class="self-end sm:self-start">
                                    @csrf @method('DELETE')
                                    <button class="text-xs text-red-400 border border-red-500/30 px-2.5 py-1 rounded-lg">Clear</button>
                                </form>
                            </div>
                        @empty
                            <p class="text-sm text-slate-500">No inquiries found.</p>
                        @endforelse
                    </div>
                @endif

            </main>
        </div>
    </div>
</body>
</html>