<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embogo FC Kabale - Match Fixtures & Results</title>

     @include('layouts.header')
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>

    
</head>


<body class="bg-slate-900 text-slate-100 min-h-screen antialiased">

    <div style="background-color: #ffffff; color: #111827; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif; padding: 2.5rem 1rem;">

        <main style="max-width: 72rem; margin: 0 auto; display: flex; flex-direction: column; gap: 3rem;">



            <!-- Hero Banner Section -->
            <section style="background: linear-gradient(135deg, #3b0764 0%, #581c87 50%, #1e1b4b 100%); border-radius: 2rem; padding: 3.5rem 2rem; border: 1px solid rgba(251, 191, 36, 0.3); box-shadow: 0 20px 40px rgba(88,28,135,0.15); text-align: center; position: relative; overflow: hidden;">
                <div style="position: absolute; top: -50px; right: -50px; width: 200px; height: 200px; background: rgba(251, 191, 36, 0.15); border-radius: 50%; filter: blur(40px);"></div>
                
                <span style="background-color: #fbbf24; color: #030712; font-size: 0.7rem; font-weight: 900; text-transform: uppercase; letter-spacing: 0.15em; padding: 0.4rem 1.25rem; border-radius: 9999px; display: inline-block; margin-bottom: 1rem; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                    KATRICO League • 2026 Schedule
                </span>
                
                <h1 style="font-size: 2.75rem; font-weight: 900; color: #ffffff; letter-spacing: -0.025em; margin: 0 0 1rem 0; line-height: 1.2;">
                    Match <span style="color: #fbbf24;">Fixtures &amp; Results</span>
                </h1>
                
                <p style="color: #f3e8ff; font-size: 1.05rem; max-width: 44rem; margin: 0 auto; line-height: 1.6;">
                    Stay updated with upcoming match day posters and recent game outcomes uploaded straight from the Kabale command center[cite: 4].
                </p>
            </section>

            <!-- Upcoming Fixtures Section -->
            <section style="background: #fdfcff; border-radius: 1.75rem; padding: 2rem; border: 1px solid rgba(88, 28, 135, 0.15); box-shadow: 0 10px 30px rgba(0,0,0,0.04); display: flex; flex-direction: column; gap: 1.5rem;">
                
                <div style="border-bottom: 2px solid #f3e8ff; padding-bottom: 1rem;">
                    <h2 style="font-size: 1.5rem; font-weight: 900; color: #581c87; margin: 0 0 0.25rem 0;">Upcoming Fixtures</h2>
                    <p style="font-size: 0.85rem; color: #6b7280; font-weight: 700; margin: 0;">Mark your calendars for the next Buffaloes battles</p>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">
                    
                    @php
                        $upcomingFixtures = [];
                        if (\Illuminate\Support\Facades\Schema::hasTable('fixture_photos')) {
                            $upcomingFixtures = DB::table('fixture_photos')->where('type', 'upcoming')->orderBy('id', 'desc')->get();
                        }
                    @endphp

                    @forelse($upcomingFixtures as $upcoming)
                        <!-- Dynamic Uploaded Fixture Graphic Card -->
                        <div style="background: #f3e8ff; border-radius: 1.25rem; padding: 1.5rem; border: 1px solid rgba(88, 28, 135, 0.15); display: flex; flex-direction: column; gap: 1rem;">
                            <div style="display: flex; justify-content: space-between; align-items: center; font-size: 0.75rem; font-weight: 800; color: #581c87; text-transform: uppercase;">
                                <span>KATRICO League</span>
                                <span style="background: #fbbf24; color: #030712; padding: 0.2rem 0.6rem; border-radius: 4px;">Upcoming</span>
                            </div>

                            @if(!empty($upcoming->file_path))
                                <!-- Match Graphic Poster Preview -->
                                <div style="width: 100%; aspect-ratio: 4/3; border-radius: 0.75rem; overflow: hidden; background: #2e1065; position: relative;">
                                    <img src="{{ asset($upcoming->file_path) }}" alt="{{ $upcoming->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                            @endif
                            
                            <div style="font-weight: 900; color: #581c87; font-size: 1.05rem; text-align: center;">
                                {{ $upcoming->title }}
                            </div>

                            <div style="font-size: 0.8rem; color: #4b5563; font-weight: 600; display: flex; flex-direction: column; gap: 0.25rem; border-top: 1px dashed rgba(88,28,135,0.2); padding-top: 0.75rem;">
                                @if(!empty($upcoming->match_date))
                                    <div>📅 Date: {{ \Carbon\Carbon::parse($upcoming->match_date)->format('l, F j, Y') }}</div>
                                @endif
                                <div>🏟️ Venue: Kabale Municipal Stadium</div>
                            </div>
                        </div>
                    @empty
                        <!-- Fallback Static Card if nothing is uploaded yet -->
                        <div style="background: #f3e8ff; border-radius: 1.25rem; padding: 1.5rem; border: 1px solid rgba(88, 28, 135, 0.15); display: flex; flex-direction: column; gap: 1rem;">
                            <div style="display: flex; justify-content: space-between; align-items: center; font-size: 0.75rem; font-weight: 800; color: #581c87; text-transform: uppercase;">
                                <span>Round 11 • KATRICO League</span>
                                <span style="background: #fbbf24; color: #030712; padding: 0.2rem 0.6rem; border-radius: 4px;">Upcoming</span>
                            </div>
                            
                            <div style="display: flex; justify-content: space-between; align-items: center; text-align: center; padding: 0.5rem 0;">
                                <div style="flex: 1; font-weight: 900; color: #581c87; font-size: 1.05rem;">Embogo FC</div>
                                <div style="font-size: 0.85rem; font-weight: 900; color: #b45309; padding: 0 1rem;">VS</div>
                                <div style="flex: 1; font-weight: 900; color: #111827; font-size: 1.05rem;">Kigezi Warriors</div>
                            </div>

                            <div style="font-size: 0.8rem; color: #4b5563; font-weight: 600; display: flex; flex-direction: column; gap: 0.25rem; border-top: 1px dashed rgba(88,28,135,0.2); padding-top: 0.75rem;">
                                <div>📅 Date: Saturday, September 19, 2026</div>
                                <div>⏰ Time: 4:00 PM EAT</div>
                                <div>🏟️ Venue: Kabale Municipal Stadium</div>
                            </div>
                        </div>
                    @endforelse

                </div>
            </section>

            <!-- Recent Results Section -->
            <section style="background: #fdfcff; border-radius: 1.75rem; padding: 2rem; border: 1px solid rgba(88, 28, 135, 0.15); box-shadow: 0 10px 30px rgba(0,0,0,0.04); display: flex; flex-direction: column; gap: 1.5rem;">
                
                <div style="border-bottom: 2px solid #f3e8ff; padding-bottom: 1rem;">
                    <h2 style="font-size: 1.5rem; font-weight: 900; color: #581c87; margin: 0 0 0.25rem 0;">Recent Results</h2>
                    <p style="font-size: 0.85rem; color: #6b7280; font-weight: 700; margin: 0;">Match outcomes and graphics from previous game weeks</p>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">
                    
                    @php
                        $recentResults = [];
                        if (\Illuminate\Support\Facades\Schema::hasTable('fixture_photos')) {
                            $recentResults = DB::table('fixture_photos')->where('type', 'result')->orderBy('id', 'desc')->get();
                        }
                    @endphp

                    @forelse($recentResults as $result)
                        <!-- Dynamic Uploaded Result Graphic Card -->
                        <div style="background: #ffffff; border-radius: 1.25rem; padding: 1.5rem; border: 1px solid #f3e8ff; display: flex; flex-direction: column; gap: 1rem; box-shadow: 0 2px 8px rgba(0,0,0,0.02);">
                            <div style="display: flex; justify-content: space-between; align-items: center; font-size: 0.75rem; font-weight: 800; color: #6b7280; text-transform: uppercase;">
                                <span>KATRICO League</span>
                                <span style="background: rgba(22, 163, 74, 0.1); color: #16a34a; padding: 0.2rem 0.6rem; border-radius: 9999px;">Result</span>
                            </div>

                            @if(!empty($result->file_path))
                                <!-- Result Graphic Poster Preview -->
                                <div style="width: 100%; aspect-ratio: 4/3; border-radius: 0.75rem; overflow: hidden; background: #1e293b; position: relative;">
                                    <img src="{{ asset($result->file_path) }}" alt="{{ $result->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                            @endif

                            <div style="font-weight: 900; color: #111827; font-size: 1.05rem; text-align: center;">
                                {{ $result->title }}
                            </div>

                            @if(!empty($result->match_date))
                                <div style="font-size: 0.75rem; color: #6b7280; font-weight: 700; text-align: center; border-top: 1px solid #f3e8ff; padding-top: 0.5rem;">
                                    Match Date: {{ \Carbon\Carbon::parse($result->match_date)->format('F j, Y') }}
                                </div>
                            @endif
                        </div>
                    @empty
                        <!-- Fallback Static Result Card if nothing is uploaded yet -->
                        <div style="background: #ffffff; border-radius: 1rem; padding: 1.25rem 1.5rem; border: 1px solid #f3e8ff; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem; box-shadow: 0 2px 8px rgba(0,0,0,0.02); width: 100%;">
                            <div style="font-size: 0.75rem; color: #6b7280; font-weight: 700;">
                                Round 10 • Sep 6, 2026
                            </div>
                            <div style="display: flex; align-items: center; gap: 1rem; font-weight: 900;">
                                <span style="color: #581c87;">Embogo FC</span>
                                <span style="background: #16a34a; color: #ffffff; padding: 0.3rem 0.8rem; border-radius: 0.5rem; font-size: 1rem;">3 - 1</span>
                                <span style="color: #111827;">Rukiga Strikers</span>
                            </div>
                            <div style="font-size: 0.75rem; font-weight: 800; color: #16a34a; background: rgba(22, 163, 74, 0.1); padding: 0.25rem 0.75rem; border-radius: 9999px;">
                                Won
                            </div>
                        </div>
                    @endforelse

                </div>
            </section>

            <!-- Core Philosophy Banner -->
            <section style="background: linear-gradient(135deg, #3b0764, #581c87); border-radius: 1.75rem; padding: 2.5rem 2rem; border: 1px solid rgba(251, 191, 36, 0.3); box-shadow: 0 15px 35px rgba(88,28,135,0.15); text-align: center; color: #ffffff;">
                <span style="color: #fbbf24; font-weight: 900; text-transform: uppercase; font-size: 0.75rem; letter-spacing: 0.15em;">Core Club Mantra</span>
                <h3 style="font-size: 1.75rem; font-weight: 900; margin: 0.5rem 0; letter-spacing: -0.025em;">"Omukago nigwo mutima"</h3>
                <p style="color: #f3e8ff; font-size: 0.9rem; max-width: 34rem; margin: 0 auto; line-height: 1.5;">
                    Every match is a step closer to glory. Stand behind Embogo FC through every fixture of the season!
                </p>
            </section>

        </main>

    </div>

     @include('layouts.footer')

</body>
</html>