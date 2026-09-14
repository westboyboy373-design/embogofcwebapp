<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club Background & KATRICO League - Embogo FC</title>
    
    <!-- Tailwind CSS Play CDN (Fixes giant unstyled header/footer) -->
    <script src="https://cdn.tailwindcss.com"></script>
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
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-white text-gray-900 antialiased min-h-screen flex flex-col justify-between">

    <!-- HEADER INCLUDE -->
    @if(view()->exists('layouts.header'))
        @include('layouts.header')
    @else
        @include('header')
    @endif

    <!-- MAIN PAGE CONTENT -->
    <div style="background-color: #ffffff; color: #111827; padding: 2.5rem 1rem; flex: 1; width: 100%;">

        <main style="max-width: 72rem; margin: 0 auto; display: flex; flex-direction: column; gap: 3rem;">

            <!-- Hero Banner Section -->
            <section style="background: linear-gradient(135deg, #3b0764 0%, #581c87 50%, #1e1b4b 100%); border-radius: 2rem; padding: 3.5rem 2rem; border: 1px solid rgba(251, 191, 36, 0.3); box-shadow: 0 20px 40px rgba(88,28,135,0.15); text-align: center; position: relative; overflow: hidden;">
                <div style="position: absolute; top: -50px; right: -50px; width: 200px; height: 200px; background: rgba(251, 191, 36, 0.15); border-radius: 50%; filter: blur(40px);"></div>
                
                <span style="background-color: #fbbf24; color: #030712; font-size: 0.7rem; font-weight: 900; text-transform: uppercase; letter-spacing: 0.15em; padding: 0.4rem 1.25rem; border-radius: 9999px; display: inline-block; margin-bottom: 1rem; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                    KATRICO League • Kabale Roots
                </span>
                
                <h1 style="font-size: 2.75rem; font-weight: 900; color: #ffffff; letter-spacing: -0.025em; margin: 0 0 1rem 0; line-height: 1.2;">
                    Embogo FC <span style="color: #fbbf24;">Katika</span>
                </h1>
                
                <p style="color: #f3e8ff; font-size: 1.05rem; max-width: 44rem; margin: 0 auto; line-height: 1.6;">
                    Discover our history within the prestigious KATRICO League in Kabale, the competitive spirit of the Class of 2017, and our journey as the Buffaloes.
                </p>
            </section>

            <!-- Detailed Club Background Section -->
            <section style="background: #fdfcff; border-radius: 1.75rem; padding: 2.5rem; border: 1px solid rgba(88, 28, 135, 0.15); box-shadow: 0 10px 30px rgba(0,0,0,0.04); display: flex; flex-direction: column; gap: 2rem;">
                
                <div style="border-bottom: 2px solid #f3e8ff; padding-bottom: 1rem;">
                    <h2 style="font-size: 1.75rem; font-weight: 900; color: #581c87; margin: 0 0 0.5rem 0;">Club Background &amp; KATRICO League Connection</h2>
                    <p style="font-size: 0.9rem; color: #6b7280; font-weight: 700; margin: 0;">Our competitive footprint in Kabale and the legendary Class of 2017</p>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2.5rem; align-items: center;">
                    <div style="border-radius: 1.25rem; overflow: hidden; border: 1px solid rgba(88, 28, 135, 0.2); position: relative; min-height: 280px; box-shadow: 0 10px 20px rgba(0,0,0,0.08);">
                        <img src="{{ asset('images/so.jpeg') }}" 
                             alt="Embogo FC Squad Background" 
                             style="width: 100%; height: 100%; object-fit: cover;">
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(55,6,100,0.95), transparent); padding: 1.25rem 1rem; font-size: 0.8rem; color: #fbbf24; font-weight: 800;">
                            Kabale Main Stadium • KATRICO League
                        </div>
                    </div>

                    <div style="display: flex; flex-direction: column; gap: 1.25rem; font-size: 0.95rem; color: #374151; line-height: 1.75;">
                        <p style="margin: 0;">
                            <strong>Embogo FC</strong> is proudly featured on our club portal as a premier competitor within the <strong>KATRICO League</strong> based in <strong>Kabale</strong>. The club's roots run deep through high-energy regional tournaments, culminating in major showdowns like the KATRICO Season III grand finale hosted at the Kabale Main Stadium.
                        </p>
                        <p style="margin: 0;">
                            Known affectionately as <em>"The Buffaloes,"</em> the squad embodies raw strength, tactical unity, and unyielding determination on the pitch. Our digital portal platform brings fans closer to the action with live fixture management, team rosters, and league standings.
                        </p>
                        <p style="margin: 0;">
                            The <strong>Class of 2017</strong> stands out as a core milestone in our club’s heritage, establishing the rigorous training standards, competitive discipline, and brotherhood that continue to define Embogo FC in Kabale today.
                        </p>
                    </div>
                </div>

            </section>

            <!-- Club Photo Gallery Section -->
            <section style="background: #fdfcff; border-radius: 1.75rem; padding: 2.5rem; border: 1px solid rgba(88, 28, 135, 0.15); box-shadow: 0 10px 30px rgba(0,0,0,0.04); display: flex; flex-direction: column; gap: 2rem;">
                
                <div style="border-bottom: 2px solid #f3e8ff; padding-bottom: 1rem; display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; gap: 1rem;">
                    <div>
                        <h2 style="font-size: 1.75rem; font-weight: 900; color: #581c87; margin: 0 0 0.5rem 0;">Club Photo Gallery</h2>
                        <p style="font-size: 0.9rem; color: #6b7280; font-weight: 700; margin: 0;">Kabale matchdays, KATRICO League showdowns, and squad moments</p>
                    </div>
                    <div style="display: flex; gap: 0.5rem;">
                        <span style="background-color: #581c87; color: #ffffff; font-size: 0.75rem; font-weight: 800; padding: 0.4rem 1rem; border-radius: 0.5rem; cursor: pointer;">All Photos</span>
                        <span style="background-color: #f3e8ff; color: #581c87; font-size: 0.75rem; font-weight: 800; padding: 0.4rem 1rem; border-radius: 0.5rem; cursor: pointer;">Squad</span>
                        <span style="background-color: #f3e8ff; color: #581c87; font-size: 0.75rem; font-weight: 800; padding: 0.4rem 1rem; border-radius: 0.5rem; cursor: pointer;">Matches</span>
                    </div>
                </div>

                <!-- Gallery Grid -->
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.5rem;">
                    
                    <!-- Gallery Item 1 -->
                    <div style="background: #ffffff; border-radius: 1.25rem; overflow: hidden; border: 1px solid rgba(88, 28, 135, 0.12); box-shadow: 0 8px 20px rgba(0,0,0,0.04); display: flex; flex-direction: column;">
                        <div style="height: 200px; overflow: hidden; position: relative;">
                            <img src="{{ asset('images/watch.jpeg') }}" alt="Kabale Main Stadium" style="width: 100%; height: 100%; object-fit: cover;">
                            <span style="position: absolute; top: 0.75rem; left: 0.75rem; background-color: #fbbf24; color: #030712; font-size: 0.65rem; font-weight: 900; text-transform: uppercase; padding: 0.3rem 0.7rem; border-radius: 0.4rem;">Kabale Stadium</span>
                        </div>
                        <div style="padding: 1.25rem; display: flex; flex-direction: column; gap: 0.3rem;">
                            <h4 style="font-size: 1rem; font-weight: 900; color: #111827; margin: 0;">KATRICO League Grounds</h4>
                            <p style="font-size: 0.8rem; color: #6b7280; margin: 0;">The electric atmosphere of tournament matchdays in Kabale.</p>
                        </div>
                    </div>

                    <!-- Gallery Item 2 -->
                    <div style="background: #ffffff; border-radius: 1.25rem; overflow: hidden; border: 1px solid rgba(88, 28, 135, 0.12); box-shadow: 0 8px 20px rgba(0,0,0,0.04); display: flex; flex-direction: column;">
                        <div style="height: 200px; overflow: hidden; position: relative;">
                            <img src="{{ asset('images/girls.jpeg') }}" alt="Squad Lineup" style="width: 100%; height: 100%; object-fit: cover;">
                            <span style="position: absolute; top: 0.75rem; left: 0.75rem; background-color: #581c87; color: #ffffff; font-size: 0.65rem; font-weight: 900; text-transform: uppercase; padding: 0.3rem 0.7rem; border-radius: 0.4rem;">Squad Lineup</span>
                        </div>
                        <div style="padding: 1.25rem; display: flex; flex-direction: column; gap: 0.3rem;">
                            <h4 style="font-size: 1rem; font-weight: 900; color: #111827; margin: 0;">Class of 2017 Roster</h4>
                            <p style="font-size: 0.8rem; color: #6b7280; margin: 0;">The players who laid the foundational success for the Buffaloes.</p>
                        </div>
                    </div>

                    <!-- Gallery Item 3 -->
                    <div style="background: #ffffff; border-radius: 1.25rem; overflow: hidden; border: 1px solid rgba(88, 28, 135, 0.12); box-shadow: 0 8px 20px rgba(0,0,0,0.04); display: flex; flex-direction: column;">
                        <div style="height: 200px; overflow: hidden; position: relative;">
                            <img src="{{ asset('images/bum.jpeg') }}" alt="Grand Finale" style="width: 100%; height: 100%; object-fit: cover;">
                            <span style="position: absolute; top: 0.75rem; left: 0.75rem; background-color: #b45309; color: #ffffff; font-size: 0.65rem; font-weight: 900; text-transform: uppercase; padding: 0.3rem 0.7rem; border-radius: 0.4rem;">Grand Finale</span>
                        </div>
                        <div style="padding: 1.25rem; display: flex; flex-direction: column; gap: 0.3rem;">
                            <h4 style="font-size: 1rem; font-weight: 900; color: #111827; margin: 0;">KATRICO Showdown</h4>
                            <p style="font-size: 0.8rem; color: #6b7280; margin: 0;">Celebrating intense competition and memorable tournament runs.</p>
                        </div>
                    </div>

                    <!-- Gallery Item 4 -->
                    <div style="background: #ffffff; border-radius: 1.25rem; overflow: hidden; border: 1px solid rgba(88, 28, 135, 0.12); box-shadow: 0 8px 20px rgba(0,0,0,0.04); display: flex; flex-direction: column;">
                        <div style="height: 200px; overflow: hidden; position: relative;">
                            <img src="{{ asset('images/check.jpeg') }}" alt="Training Session" style="width: 100%; height: 100%; object-fit: cover;">
                            <span style="position: absolute; top: 0.75rem; left: 0.75rem; background-color: #1e40af; color: #ffffff; font-size: 0.65rem; font-weight: 900; text-transform: uppercase; padding: 0.3rem 0.7rem; border-radius: 0.4rem;">Training</span>
                        </div>
                        <div style="padding: 1.25rem; display: flex; flex-direction: column; gap: 0.3rem;">
                            <h4 style="font-size: 1rem; font-weight: 900; color: #111827; margin: 0;">Preparation &amp; Strategy</h4>
                            <p style="font-size: 0.8rem; color: #6b7280; margin: 0;">Drills and tactical planning ahead of league matchdays.</p>
                        </div>
                    </div>

                </div>

            </section>

            <!-- Detailed Campaign Breakdown Grid -->
            <section style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.75rem;">
                
                <div style="background: #ffffff; border-radius: 1.5rem; padding: 2rem; border: 1px solid rgba(88, 28, 135, 0.12); box-shadow: 0 10px 25px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <span style="font-size: 0.7rem; font-weight: 900; color: #581c87; text-transform: uppercase; letter-spacing: 0.05em; background-color: #f3e8ff; padding: 0.3rem 0.75rem; border-radius: 0.5rem; display: inline-block; margin-bottom: 1rem;">League Heritage</span>
                        <h3 style="font-size: 1.25rem; font-weight: 900; color: #111827; margin: 0 0 0.75rem 0; line-height: 1.3;">The KATRICO League Impact</h3>
                        <p style="color: #4b5563; font-size: 0.875rem; line-height: 1.6; margin: 0;">
                            Competing in the Kabale-based KATRICO League has tested Embogo FC against elite regional opponents, sharpening our tactical discipline and elevating our status in local football.
                        </p>
                    </div>
                    <div style="border-top: 1px solid #f3f4f6; margin-top: 1.5rem; padding-top: 1rem; font-size: 0.75rem; color: #6b7280; font-weight: 700;">
                        Milestone: Kabale Competition
                    </div>
                </div>

                <div style="background: #ffffff; border-radius: 1.5rem; padding: 2rem; border: 1px solid rgba(88, 28, 135, 0.12); box-shadow: 0 10px 25px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <span style="font-size: 0.7rem; font-weight: 900; color: #b45309; text-transform: uppercase; letter-spacing: 0.05em; background-color: #fef3c7; padding: 0.3rem 0.75rem; border-radius: 0.5rem; display: inline-block; margin-bottom: 1rem;">Squad Mentality</span>
                        <h3 style="font-size: 1.25rem; font-weight: 900; color: #111827; margin: 0 0 0.75rem 0; line-height: 1.3;">Class of 2017 Foundation</h3>
                        <p style="color: #4b5563; font-size: 0.875rem; line-height: 1.6; margin: 0;">
                            The defining characteristics of the 2017 squad—unbreakable defensive resolve, sharp midfield control, and clinical finishing—continue to power our league campaigns.
                        </p>
                    </div>
                    <div style="border-top: 1px solid #f3f4f6; margin-top: 1.5rem; padding-top: 1rem; font-size: 0.75rem; color: #6b7280; font-weight: 700;">
                        Milestone: Core Identity
                    </div>
                </div>

                <div style="background: #ffffff; border-radius: 1.5rem; padding: 2rem; border: 1px solid rgba(88, 28, 135, 0.12); box-shadow: 0 10px 25px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <span style="font-size: 0.7rem; font-weight: 900; color: #1e40af; text-transform: uppercase; letter-spacing: 0.05em; background-color: #dbeafe; padding: 0.3rem 0.75rem; border-radius: 0.5rem; display: inline-block; margin-bottom: 1rem;">Portal &amp; Community</span>
                        <h3 style="font-size: 1.25rem; font-weight: 900; color: #111827; margin: 0 0 0.75rem 0; line-height: 1.3;">Digital Infrastructure</h3>
                        <p style="color: #4b5563; font-size: 0.875rem; line-height: 1.6; margin: 0;">
                            Our dedicated web portal keeps supporters updated with live match tracking, team rosters, and standings, bridging the gap between the club and our passionate fans.
                        </p>
                    </div>
                    <div style="border-top: 1px solid #f3f4f6; margin-top: 1.5rem; padding-top: 1rem; font-size: 0.75rem; color: #6b7280; font-weight: 700;">
                        Milestone: Club Web Portal
                    </div>
                </div>

            </section>

            <!-- Core Philosophy Banner -->
            <section style="background: linear-gradient(135deg, #3b0764, #581c87); border-radius: 1.75rem; padding: 3rem 2rem; border: 1px solid rgba(251, 191, 36, 0.3); box-shadow: 0 15px 35px rgba(88,28,135,0.15); text-align: center; color: #ffffff;">
                <span style="color: #fbbf24; font-weight: 900; text-transform: uppercase; font-size: 0.75rem; letter-spacing: 0.15em;">Core Club Mantra</span>
                <h3 style="font-size: 2rem; font-weight: 900; margin: 0.75rem 0; letter-spacing: -0.025em;">"Omukago nigwo mutima"</h3>
                <p style="color: #f3e8ff; font-size: 0.95rem; max-width: 36rem; margin: 0 auto; line-height: 1.6;">
                    United by authentic friendship, driven by relentless passion in Kabale. Once a Buffalo of Embogo FC, always a Buffalo.
                </p>
            </section>

        </main>
    </div>

    <!-- FOOTER INCLUDE -->
    @if(view()->exists('layouts.footer'))
        @include('layouts.footer')
    @else
        @include('footer')
    @endif

</body>
</html>