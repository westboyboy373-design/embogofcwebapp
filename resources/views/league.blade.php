@php
    $leagueTable = \Illuminate\Support\Facades\DB::table('league_table_media')->latest()->first();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KATRICO League Standings - Embogo FC</title>
    
    <!-- Tailwind CSS Play CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clubPurple: '#3b0764',
                        'clubPurple-dark': '#1e1b4b',
                        clubBlue: '#172554',
                        clubGold: '#fbbf24',
                    }
                }
            }
        }
    </script>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-white text-gray-900 font-sans antialiased min-h-screen flex flex-col justify-between">

    <!-- Header Section -->
    @include('layouts.header')

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 py-10 space-y-12 w-full flex-grow">

        <!-- Hero Banner Section -->
        <section class="bg-gradient-to-r from-purple-950 via-purple-900 to-indigo-950 rounded-3xl p-8 sm:p-12 border border-amber-400/30 shadow-xl text-center relative overflow-hidden text-white">
            <div class="absolute -top-12 -right-12 w-48 h-48 bg-amber-400/15 rounded-full blur-2xl"></div>
            
            <span class="bg-amber-400 text-gray-950 text-xs font-black uppercase tracking-widest px-4 py-1.5 rounded-full inline-block mb-4 shadow">
                KATRICO League &bull; 2026 Season Standings
            </span>
            
            <h1 class="text-3xl sm:text-5xl font-black tracking-tight mb-4">
                Official <span class="text-amber-400">League Table</span>
            </h1>
            
            <p class="text-purple-100 text-sm sm:text-base max-w-2xl mx-auto leading-relaxed">
                Track the latest official standings, match performance, and team rankings of Embogo FC and rival teams in the Kabale KATRICO League.
            </p>
        </section>

        <!-- League Standings Image Card Section -->
        <section class="bg-gray-50 rounded-3xl p-6 sm:p-8 border border-purple-900/10 shadow-sm flex flex-col gap-6">
            
            <div class="flex justify-between items-center flex-wrap gap-4 border-b border-purple-100 pb-4">
                <div>
                    <h2 class="text-xl sm:text-2xl font-black text-purple-950">
                        KATRICO League Standings @if($leagueTable && $leagueTable->matchday) - {{ $leagueTable->matchday }} @endif
                    </h2>
                    <p class="text-xs text-gray-500 font-bold uppercase tracking-wider mt-0.5">Kabale Regional Championship Table</p>
                </div>
                <div class="flex gap-4 text-xs font-bold text-gray-700">
                    <span class="flex items-center gap-1.5"><span class="w-2.5 h-2.5 bg-amber-400 rounded-full"></span> Title Contenders</span>
                    <span class="flex items-center gap-1.5"><span class="w-2.5 h-2.5 bg-purple-950 rounded-full"></span> Embogo FC</span>
                </div>
            </div>

            <!-- Dynamic League Table Image Display -->
            <div class="w-full text-center py-2">
                @if($leagueTable && $leagueTable->file_path)
                    <div class="max-w-full overflow-hidden rounded-2xl shadow-md border border-purple-100 bg-white inline-block">
                        <img src="{{ asset($leagueTable->file_path) }}" alt="KATRICO League Standings" class="w-full h-auto block max-h-[800px] object-contain">
                    </div>
                @else
                    <div class="py-16 px-6 bg-purple-950/5 rounded-2xl border-2 border-dashed border-purple-900/20 text-center">
                        <p class="text-lg font-extrabold text-purple-950 mb-1">League Standings Image Coming Soon</p>
                        <p class="text-sm text-gray-500">The admin panel has not uploaded the latest matchday standings table image yet.</p>
                    </div>
                @endif
            </div>

        </section>

        <!-- Core Philosophy Banner -->
        <section class="bg-gradient-to-r from-purple-950 to-purple-900 rounded-3xl p-8 border border-amber-400/30 shadow-lg text-center text-white">
            <span class="text-amber-400 font-black uppercase text-xs tracking-widest">Core Club Mantra</span>
            <h3 class="text-2xl sm:text-3xl font-black my-2 tracking-tight">"Omukago nigwo mutima"</h3>
            <p class="text-purple-200 text-sm max-w-xl mx-auto leading-relaxed">
                Leading the pack with heart and passion. Watch Embogo FC defend the top spot in the Kabale KATRICO League!
            </p>
        </section>

    </main>

    <!-- Footer Section -->
    @include('layouts.footer')

</body>
</html>