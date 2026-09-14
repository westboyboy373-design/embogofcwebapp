<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'Embogo FC') }}</title>

    <meta
        name="description"
        content="Official Embogo FC website — fixtures, news, league standings, club updates and merchandise."
    >

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Tailwind Configuration -->
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
                        },
                    },

                    boxShadow: {
                        'club': '0 20px 50px rgba(59, 7, 100, 0.15)',
                        'club-lg': '0 25px 70px rgba(59, 7, 100, 0.20)',
                    }
                }
            }
        }
    </script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            overflow-x: hidden;
        }

        .hero-gradient {
            background:
                linear-gradient(
                    90deg,
                    rgba(59, 7, 100, 0.96) 0%,
                    rgba(88, 28, 135, 0.84) 45%,
                    rgba(37, 99, 235, 0.40) 100%
                );
        }

        .section-kicker {
            letter-spacing: .18em;
        }

        .glass {
            background: rgba(255, 255, 255, .10);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border: 1px solid rgba(255, 255, 255, .15);
        }

        .news-card,
        .quick-card,
        .match-card,
        .value-card {
            transition:
                transform .25s ease,
                box-shadow .25s ease,
                border-color .25s ease;
        }

        .news-card:hover,
        .quick-card:hover,
        .match-card:hover,
        .value-card:hover {
            transform: translateY(-6px);
        }

        .hero-slide {
            display: none;
        }

        .hero-slide.active {
            display: block;
        }

        .carousel-dot.active {
            width: 34px;
        }

        .carousel-dot {
            transition: all .25s ease;
        }

        .image-overlay {
            background:
                linear-gradient(
                    to top,
                    rgba(15, 23, 42, .92),
                    rgba(15, 23, 42, .35),
                    transparent
                );
        }

        .gold-line {
            background: linear-gradient(
                90deg,
                #f59e0b,
                #b45309,
                transparent
            );
        }

        .purple-line {
            background: linear-gradient(
                90deg,
                #7e22ce,
                #581c87,
                transparent
            );
        }

        .focus-ring:focus-visible {
            outline: 3px solid #f59e0b;
            outline-offset: 3px;
        }

        /* Lucide icon defaults */
        [data-lucide] {
            width: 19px;
            height: 19px;
            stroke-width: 1.8;
            flex-shrink: 0;
        }

        .icon-box [data-lucide] {
            width: 21px;
            height: 21px;
            stroke-width: 1.8;
        }

        .icon-small [data-lucide] {
            width: 16px;
            height: 16px;
            stroke-width: 1.9;
        }

        .icon-large [data-lucide] {
            width: 25px;
            height: 25px;
            stroke-width: 1.7;
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                scroll-behavior: auto !important;
                transition-duration: .01ms !important;
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
            }
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-900">

    @include('layouts.header')


    <!-- =========================================================
         HERO SECTION
    ========================================================== -->

    <main>

        <section
            id="home"
            class="relative min-h-[680px] overflow-hidden bg-clubPurple-dark"
            aria-label="Embogo FC highlights"
        >

            <!-- Slide 1 -->
            <div
                class="hero-slide active relative min-h-[680px]"
                data-slide="0"
            >

                <img
                    src="{{ asset('images/bb.jpeg') }}"
                    alt="Embogo FC football action"
                    class="absolute inset-0 h-full w-full object-cover"
                    loading="eager"
                    decoding="async"
                >

                <div class="hero-gradient absolute inset-0"></div>

                <div class="absolute inset-0 bg-black/20"></div>

                <div class="relative mx-auto flex min-h-[680px] max-w-7xl items-center px-5 py-20 sm:px-8 lg:px-10">

                    <div class="max-w-3xl text-white">

                        <div class="mb-6 inline-flex items-center gap-3 rounded-full border border-white/20 bg-white/10 px-4 py-2 text-sm font-semibold backdrop-blur-md">

                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-clubGold-light text-clubPurple-dark shadow-sm">
                                <i data-lucide="zap" class="icon-small" aria-hidden="true"></i>
                            </span>

                            <span class="uppercase tracking-[.16em]">
                                Welcome to Embogo FC
                            </span>

                        </div>

                        <h1 class="text-5xl font-black leading-[1.05] tracking-tight sm:text-6xl lg:text-8xl">
                            More Than
                            <span class="block text-clubGold-light">
                                Football.
                            </span>
                        </h1>

                        <p class="mt-7 max-w-2xl text-lg leading-8 text-white/85 sm:text-xl">
                            Follow Embogo FC for the latest club news, match updates,
                            league standings, team moments and everything happening
                            around the club.
                        </p>

                        <div class="mt-9 flex flex-col gap-4 sm:flex-row">

                            <a
                                href="{{ route('fixtures') }}"
                                class="focus-ring inline-flex items-center justify-center gap-3 rounded-xl bg-clubGold-light px-7 py-4 font-bold text-clubPurple-dark shadow-lg transition hover:bg-white"
                            >
                                <i data-lucide="circle-play" aria-hidden="true"></i>
                                Match Centre
                                <i data-lucide="arrow-right" class="icon-small" aria-hidden="true"></i>
                            </a>

                            <a
                                href="{{ route('news') }}"
                                class="focus-ring inline-flex items-center justify-center gap-3 rounded-xl border border-white/30 bg-white/10 px-7 py-4 font-bold text-white backdrop-blur-md transition hover:bg-white hover:text-clubPurple-dark"
                            >
                                <i data-lucide="newspaper" aria-hidden="true"></i>
                                Latest News
                            </a>

                        </div>

                        <!-- Hero Stats -->
                        <div class="mt-12 grid max-w-xl grid-cols-3 gap-3 sm:gap-5">

                            <div class="glass rounded-2xl p-4">
                                <div class="text-2xl font-black sm:text-3xl">
                                    FC
                                </div>
                                <div class="mt-1 text-xs font-semibold uppercase tracking-wider text-white/60">
                                    Our Identity
                                </div>
                            </div>

                            <div class="glass rounded-2xl p-4">
                                <div class="text-2xl font-black sm:text-3xl">
                                    01
                                </div>
                                <div class="mt-1 text-xs font-semibold uppercase tracking-wider text-white/60">
                                    Club
                                </div>
                            </div>

                            <div class="glass rounded-2xl p-4">
                                <div class="text-2xl font-black sm:text-3xl">
                                    100%
                                </div>
                                <div class="mt-1 text-xs font-semibold uppercase tracking-wider text-white/60">
                                    Passion
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- Slide 2 -->
            <div
                class="hero-slide relative min-h-[680px]"
                data-slide="1"
            >

                <img
                    src="https://images.unsplash.com/photo-1579952363873-27f3bade9f55?auto=format&fit=crop&w=2200&q=85"
                    alt="Football players competing on a football pitch"
                    class="absolute inset-0 h-full w-full object-cover"
                    loading="lazy"
                    decoding="async"
                >

                <div class="hero-gradient absolute inset-0"></div>

                <div class="relative mx-auto flex min-h-[680px] max-w-7xl items-center px-5 py-20 sm:px-8 lg:px-10">

                    <div class="max-w-3xl text-white">

                        <div class="mb-6 inline-flex items-center gap-3 rounded-full border border-white/20 bg-white/10 px-4 py-2 text-sm font-semibold backdrop-blur-md">

                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-clubGold-light text-clubPurple-dark shadow-sm">
                                <i data-lucide="trophy" class="icon-small" aria-hidden="true"></i>
                            </span>

                            <span class="uppercase tracking-[.16em]">
                                One Club. One Ambition.
                            </span>

                        </div>

                        <h2 class="text-5xl font-black leading-[1.05] tracking-tight sm:text-6xl lg:text-8xl">
                            Chase The
                            <span class="block text-clubGold-light">
                                Glory.
                            </span>
                        </h2>

                        <p class="mt-7 max-w-2xl text-lg leading-8 text-white/85 sm:text-xl">
                            Every training session, every match and every supporter
                            contributes to the journey. Stand with Embogo FC.
                        </p>

                        <div class="mt-9 flex flex-col gap-4 sm:flex-row">

                            <a
                                href="{{ route('club') }}"
                                class="focus-ring inline-flex items-center justify-center gap-3 rounded-xl bg-white px-7 py-4 font-bold text-clubPurple-dark transition hover:bg-clubGold-light"
                            >
                                <i data-lucide="shield" aria-hidden="true"></i>
                                Discover The Club
                            </a>

                            <a
                                href="{{ route('kits') }}"
                                class="focus-ring inline-flex items-center justify-center gap-3 rounded-xl border border-white/30 bg-white/10 px-7 py-4 font-bold text-white backdrop-blur-md transition hover:bg-white hover:text-clubPurple-dark"
                            >
                                <i data-lucide="shirt" aria-hidden="true"></i>
                                Club Kits
                            </a>

                        </div>

                    </div>

                </div>

            </div>


            <!-- Carousel Controls -->
            <div class="absolute bottom-9 left-1/2 z-20 flex -translate-x-1/2 items-center gap-3">

                <button
                    type="button"
                    id="prevSlide"
                    aria-label="Previous slide"
                    class="focus-ring flex h-11 w-11 items-center justify-center rounded-full border border-white/20 bg-black/20 text-white backdrop-blur-md transition hover:bg-white hover:text-clubPurple-dark"
                >
                    <i data-lucide="chevron-left" aria-hidden="true"></i>
                </button>

                <div
                    id="carouselDots"
                    class="flex items-center gap-2"
                    aria-label="Hero slides"
                >
                    <button
                        type="button"
                        class="carousel-dot active h-2 w-7 rounded-full bg-clubGold-light"
                        data-slide-to="0"
                        aria-label="Go to slide 1"
                    ></button>

                    <button
                        type="button"
                        class="carousel-dot h-2 w-7 rounded-full bg-white/40"
                        data-slide-to="1"
                        aria-label="Go to slide 2"
                    ></button>
                </div>

                <button
                    type="button"
                    id="nextSlide"
                    aria-label="Next slide"
                    class="focus-ring flex h-11 w-11 items-center justify-center rounded-full border border-white/20 bg-black/20 text-white backdrop-blur-md transition hover:bg-white hover:text-clubPurple-dark"
                >
                    <i data-lucide="chevron-right" aria-hidden="true"></i>
                </button>

            </div>

        </section>


        <!-- =========================================================
             QUICK ACCESS
        ========================================================== -->

        <section class="relative z-20 -mt-8 px-5 sm:px-8 lg:px-10">

            <div class="mx-auto grid max-w-7xl grid-cols-2 gap-3 sm:grid-cols-4">

                <a
                    href="{{ route('fixtures') }}"
                    class="quick-card focus-ring rounded-2xl border border-slate-200 bg-white p-5 shadow-club hover:border-clubPurple-light"
                >
                    <div class="icon-box mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-purple-100 text-clubPurple">
                        <i data-lucide="calendar-days" aria-hidden="true"></i>
                    </div>

                    <h3 class="font-extrabold text-slate-900">
                        Fixtures
                    </h3>

                    <p class="mt-1 text-sm text-slate-500">
                        Follow match updates
                    </p>
                </a>


                <a
                    href="{{ route('league') }}"
                    class="quick-card focus-ring rounded-2xl border border-slate-200 bg-white p-5 shadow-club hover:border-clubBlue"
                >
                    <div class="icon-box mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-100 text-clubBlue">
                        <i data-lucide="bar-chart-3" aria-hidden="true"></i>
                    </div>

                    <h3 class="font-extrabold text-slate-900">
                        Standings
                    </h3>

                    <p class="mt-1 text-sm text-slate-500">
                        Check league position
                    </p>
                </a>


                <a
                    href="{{ route('news') }}"
                    class="quick-card focus-ring rounded-2xl border border-slate-200 bg-white p-5 shadow-club hover:border-clubGold"
                >
                    <div class="icon-box mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-amber-100 text-clubGold">
                        <i data-lucide="newspaper" aria-hidden="true"></i>
                    </div>

                    <h3 class="font-extrabold text-slate-900">
                        Club News
                    </h3>

                    <p class="mt-1 text-sm text-slate-500">
                        Latest Embogo updates
                    </p>
                </a>


                <a
                    href="{{ route('kits') }}"
                    class="quick-card focus-ring rounded-2xl border border-slate-200 bg-white p-5 shadow-club hover:border-green-500"
                >
                    <div class="icon-box mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-green-100 text-green-700">
                        <i data-lucide="shirt" aria-hidden="true"></i>
                    </div>

                    <h3 class="font-extrabold text-slate-900">
                        Club Kits
                    </h3>

                    <p class="mt-1 text-sm text-slate-500">
                        Represent the club
                    </p>
                </a>

            </div>

        </section>


        <!-- =========================================================
             MATCH CENTRE
        ========================================================== -->

        <section
            id="matches"
            class="mx-auto max-w-7xl px-5 py-24 sm:px-8 lg:px-10"
        >

            <div class="mb-12 flex flex-col justify-between gap-5 md:flex-row md:items-end">

                <div>

                    <div class="mb-4 flex items-center gap-3 text-sm font-bold uppercase text-clubPurple section-kicker">
                        <span class="h-px w-10 bg-clubGold-light"></span>
                        Match Centre
                    </div>

                    <h2 class="text-4xl font-black tracking-tight text-slate-950 sm:text-5xl">
                        The Game
                        <span class="text-clubPurple">
                            Starts Here.
                        </span>
                    </h2>

                    <p class="mt-4 max-w-2xl text-slate-500">
                        Stay connected with Embogo FC fixtures, match visuals
                        and league information.
                    </p>

                </div>

                <div class="inline-flex items-center gap-2 self-start rounded-full bg-green-50 px-4 py-2 text-sm font-bold text-green-700 md:self-auto">
                    <span class="h-2 w-2 animate-pulse rounded-full bg-green-500"></span>
                    Club Updates
                </div>

            </div>


            @php
                $dbFixtures = collect();

                if (\Illuminate\Support\Facades\Schema::hasTable('fixture_photos')) {
                    $dbFixtures = DB::table('fixture_photos')
                        ->latest('id')
                        ->take(2)
                        ->get();
                }

                $leagueTable = null;

                if (\Illuminate\Support\Facades\Schema::hasTable('league_table_media')) {
                    $leagueTable = DB::table('league_table_media')
                        ->latest('id')
                        ->first();
                }
            @endphp


            <div class="grid gap-8 lg:grid-cols-3">

                <!-- Fixtures -->
                <div class="lg:col-span-2">

                    <div class="mb-5 flex items-center justify-between">

                        <h3 class="flex items-center gap-3 text-xl font-black">
                            <span class="icon-box flex h-10 w-10 items-center justify-center rounded-xl bg-purple-100 text-clubPurple">
                                <i data-lucide="circle-dot" aria-hidden="true"></i>
                            </span>
                            Latest Fixtures
                        </h3>

                        <a href="{{ route('fixtures') }}" class="text-sm font-bold text-clubPurple hover:underline">
                            View All Fixtures &rarr;
                        </a>

                    </div>


                    @if($dbFixtures->count())

                        <div class="grid gap-6 sm:grid-cols-2">

                            @foreach($dbFixtures as $fixture)

                                <article class="match-card overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm hover:border-clubPurple-light hover:shadow-club">

                                    <div class="relative aspect-[16/10] overflow-hidden bg-slate-100">

                                        <img
                                            src="{{ asset($fixture->file_path) }}"
                                            alt="Embogo FC fixture"
                                            class="h-full w-full object-cover transition duration-500 hover:scale-105"
                                            loading="lazy"
                                            decoding="async"
                                        >

                                        <div class="absolute left-4 top-4">

                                            <span class="inline-flex items-center gap-2 rounded-full bg-white/95 px-3 py-1.5 text-xs font-black text-clubPurple shadow">

                                                <i
                                                    data-lucide="calendar-check"
                                                    class="icon-small"
                                                    aria-hidden="true"
                                                ></i>

                                                FIXTURE

                                            </span>

                                        </div>

                                    </div>

                                    <div class="p-6">

                                        <div class="flex items-center justify-between gap-4">

                                            <div>
                                                <p class="text-xs font-bold uppercase tracking-wider text-slate-400">
                                                    Match Information
                                                </p>

                                                <h4 class="mt-2 text-lg font-black text-slate-900">
                                                    Embogo FC
                                                </h4>
                                            </div>

                                            <div class="icon-box flex h-12 w-12 items-center justify-center rounded-full bg-purple-50 text-clubPurple">
                                                <i data-lucide="shield" aria-hidden="true"></i>
                                            </div>

                                        </div>

                                        <div class="mt-5 h-1 rounded-full purple-line"></div>

                                        <p class="mt-4 text-sm leading-6 text-slate-500">
                                            Check the latest fixture information
                                            and follow the club's upcoming action.
                                        </p>

                                    </div>

                                </article>

                            @endforeach

                        </div>

                    @else

                        <div class="rounded-3xl border border-dashed border-slate-300 bg-white p-10 text-center">

                            <div class="icon-box mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-purple-100 text-clubPurple">
                                <i data-lucide="calendar-x-2" class="icon-large" aria-hidden="true"></i>
                            </div>

                            <h3 class="mt-5 text-xl font-black">
                                No Fixtures Available
                            </h3>

                            <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-slate-500">
                                Fixture information will appear here once it has
                                been published by the club.
                            </p>

                        </div>

                    @endif

                </div>


                <!-- League Table -->
                <div id="standings">

                    <div class="mb-5 flex items-center justify-between">

                        <h3 class="flex items-center gap-3 text-xl font-black">
                            <span class="icon-box flex h-10 w-10 items-center justify-center rounded-xl bg-blue-100 text-clubBlue">
                                <i data-lucide="list-ordered" aria-hidden="true"></i>
                            </span>
                            League Table
                        </h3>

                        <a href="{{ route('league') }}" class="text-sm font-bold text-clubBlue hover:underline">
                            Full Table &rarr;
                        </a>

                    </div>


                    <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">

                        @if($leagueTable)

                            <div class="relative overflow-hidden">

                                <img
                                    src="{{ asset($leagueTable->file_path) }}"
                                    alt="Latest league table"
                                    class="w-full object-contain"
                                    loading="lazy"
                                    decoding="async"
                                >

                            </div>

                            <div class="border-t border-slate-100 p-5">

                                <div class="flex items-center gap-3 text-sm font-semibold text-slate-600">

                                    <span class="icon-box flex h-9 w-9 items-center justify-center rounded-lg bg-blue-50 text-clubBlue">
                                        <i data-lucide="trending-up" class="icon-small" aria-hidden="true"></i>
                                    </span>

                                    Latest published league information

                                </div>

                            </div>

                        @else

                            <div class="p-10 text-center">

                                <div class="icon-box mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-blue-100 text-clubBlue">
                                    <i data-lucide="list-ordered" class="icon-large" aria-hidden="true"></i>
                                </div>

                                <h3 class="mt-5 text-xl font-black">
                                    Standings Coming Soon
                                </h3>

                                <p class="mt-2 text-sm leading-6 text-slate-500">
                                    The latest league table will appear here
                                    once published.
                                </p>

                            </div>

                        @endif

                    </div>

                </div>

            </div>

        </section>


        <!-- =========================================================
             NEWS
        ========================================================== -->

        <section
            id="news"
            class="bg-white py-24"
        >

            <div class="mx-auto max-w-7xl px-5 sm:px-8 lg:px-10">

                <div class="mb-12 flex flex-col justify-between gap-5 md:flex-row md:items-end">

                    <div>

                        <div class="mb-4 flex items-center gap-3 text-sm font-bold uppercase text-clubBlue section-kicker">
                            <span class="h-px w-10 bg-clubGold-light"></span>
                            From The Club
                        </div>

                        <h2 class="text-4xl font-black tracking-tight text-slate-950 sm:text-5xl">
                            Latest
                            <span class="text-clubPurple">
                                News.
                            </span>
                        </h2>

                        <p class="mt-4 max-w-2xl text-slate-500">
                            News, announcements and stories from around Embogo FC.
                        </p>

                    </div>

                    <a
                        href="{{ route('news') }}"
                        class="focus-ring inline-flex items-center gap-2 self-start rounded-xl border border-slate-200 px-5 py-3 text-sm font-bold text-slate-700 transition hover:border-clubPurple hover:text-clubPurple"
                    >
                        View All News
                        <i data-lucide="arrow-right" class="icon-small" aria-hidden="true"></i>
                    </a>

                </div>


                @php
                    $dbPosts = collect();
                    $postMedia = collect();

                    $hasNewsTable = \Illuminate\Support\Facades\Schema::hasTable('news_posts');
                    $hasPostMediaTable = \Illuminate\Support\Facades\Schema::hasTable('post_media');

                    if ($hasNewsTable) {
                        $dbPosts = DB::table('news_posts')
                            ->where('status', 'Published')
                            ->latest('created_at')
                            ->take(3)
                            ->get();

                        if ($hasPostMediaTable && $dbPosts->count()) {
                            $postIds = $dbPosts->pluck('id');

                            $postMedia = DB::table('post_media')
                                ->whereIn('post_id', $postIds)
                                ->get()
                                ->keyBy('post_id');
                        }
                    }
                @endphp


                @if($dbPosts->count())

                    <div class="grid gap-7 md:grid-cols-2 lg:grid-cols-3">

                        @foreach($dbPosts as $post)

                            @php
                                $media = $postMedia->get($post->id);
                                $image = $media && !empty($media->file_path)
                                    ? asset($media->file_path)
                                    : asset('images/bb.jpeg');
                            @endphp

                            <article class="news-card group overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm hover:border-purple-200 hover:shadow-club">

                                <!-- Image -->
                                <div class="relative aspect-[16/10] overflow-hidden bg-slate-100">

                                    <img
                                        src="{{ $image }}"
                                        alt="{{ $post->title }}"
                                        class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                                        loading="lazy"
                                        decoding="async"
                                    >

                                    <div class="image-overlay absolute inset-0"></div>

                                    <!-- Status -->
                                    <div class="absolute left-5 top-5">

                                        <span class="inline-flex items-center gap-2 rounded-full bg-white/95 px-3 py-1.5 text-xs font-black text-clubPurple shadow">

                                            <span class="h-1.5 w-1.5 rounded-full bg-green-500"></span>

                                            {{ $post->status }}

                                        </span>

                                    </div>

                                    <!-- Date -->
                                    <div class="absolute bottom-5 left-5 text-white">

                                        <div class="flex items-center gap-2 text-xs font-semibold text-white/80">

                                            <i
                                                data-lucide="calendar"
                                                class="icon-small"
                                                aria-hidden="true"
                                            ></i>

                                            {{ \Carbon\Carbon::parse($post->created_at)->format('d M Y') }}

                                        </div>

                                    </div>

                                </div>


                                <!-- Content -->
                                <div class="p-6">

                                    <div class="flex items-center gap-4 text-xs font-semibold text-slate-400">

                                        <span class="inline-flex items-center gap-1.5">
                                            <i
                                                data-lucide="clock-3"
                                                class="icon-small"
                                                aria-hidden="true"
                                            ></i>
                                            Club Update
                                        </span>

                                        @if(!empty($post->author))

                                            <span class="h-1 w-1 rounded-full bg-slate-300"></span>

                                            <span class="inline-flex items-center gap-1.5">
                                                <i
                                                    data-lucide="user-round"
                                                    class="icon-small"
                                                    aria-hidden="true"
                                                ></i>
                                                {{ $post->author }}
                                            </span>

                                        @endif

                                    </div>


                                    <h3 class="mt-4 text-xl font-black leading-tight text-slate-900 transition group-hover:text-clubPurple">

                                        {{ $post->title }}

                                    </h3>


                                    <p class="mt-3 line-clamp-3 text-sm leading-6 text-slate-500">

                                        {{ \Illuminate\Support\Str::limit(strip_tags($post->content), 145) }}

                                    </p>


                                    <div class="mt-6 flex items-center justify-between border-t border-slate-100 pt-5">

                                        <a href="{{ route('news') }}" class="text-sm font-extrabold text-clubPurple hover:underline">
                                            Read Story
                                        </a>

                                        <span class="flex h-9 w-9 items-center justify-center rounded-full bg-purple-50 text-clubPurple transition group-hover:bg-clubPurple group-hover:text-white">

                                            <i
                                                data-lucide="arrow-up-right"
                                                class="icon-small"
                                                aria-hidden="true"
                                            ></i>

                                        </span>

                                    </div>

                                </div>

                            </article>

                        @endforeach

                    </div>

                @else

                    <div class="rounded-3xl border border-dashed border-slate-300 bg-slate-50 p-12 text-center">

                        <div class="icon-box mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-purple-100 text-clubPurple">
                            <i data-lucide="newspaper" class="icon-large" aria-hidden="true"></i>
                        </div>

                        <h3 class="mt-5 text-xl font-black">
                            No News Yet
                        </h3>

                        <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-slate-500">
                            New Embogo FC stories and announcements will appear
                            here when they are published.
                        </p>

                    </div>

                @endif

            </div>

        </section>


        <!-- =========================================================
             CLUB VALUES
        ========================================================== -->

        <section
            id="about"
            class="relative overflow-hidden bg-slate-50 py-24"
        >

            <!-- Decorative elements -->
            <div class="absolute -right-40 -top-40 h-96 w-96 rounded-full bg-purple-100 blur-3xl"></div>
            <div class="absolute -bottom-40 -left-40 h-96 w-96 rounded-full bg-blue-100 blur-3xl"></div>


            <div class="relative mx-auto max-w-7xl px-5 sm:px-8 lg:px-10">

                <div class="grid items-center gap-14 lg:grid-cols-2">

                    <!-- Text -->
                    <div>

                        <div class="mb-4 flex items-center gap-3 text-sm font-bold uppercase text-clubPurple section-kicker">
                            <span class="h-px w-10 bg-clubGold-light"></span>
                            Our Identity
                        </div>

                        <h2 class="text-4xl font-black leading-tight tracking-tight text-slate-950 sm:text-5xl">

                            Built On
                            <span class="text-clubPurple">
                                Passion.
                            </span>

                            <br>

                            Driven By
                            <span class="text-clubBlue">
                                Purpose.
                            </span>

                        </h2>

                        <p class="mt-6 max-w-xl text-base leading-8 text-slate-600">
                            Embogo FC is more than a football team. It is a community
                            built around ambition, discipline, teamwork and the love
                            of the beautiful game.
                        </p>


                        <div class="mt-8 flex flex-wrap gap-3">

                            <a href="{{ route('club') }}" class="inline-flex items-center gap-2 rounded-full bg-purple-100 px-4 py-2 text-sm font-bold text-clubPurple hover:bg-purple-200 transition">
                                <i data-lucide="users-round" class="icon-small" aria-hidden="true"></i>
                                Community Profile
                            </a>

                            <a href="{{ route('club') }}" class="inline-flex items-center gap-2 rounded-full bg-blue-100 px-4 py-2 text-sm font-bold text-clubBlue hover:bg-blue-200 transition">
                                <i data-lucide="handshake" class="icon-small" aria-hidden="true"></i>
                                The Club
                            </a>

                        </div>

                    </div>


                    <!-- Values -->
                    <div class="grid gap-5 sm:grid-cols-2">

                        <div class="value-card rounded-3xl border border-slate-200 bg-white p-7 shadow-sm">

                            <div class="icon-box flex h-14 w-14 items-center justify-center rounded-2xl bg-purple-100 text-clubPurple">
                                <i data-lucide="shield-check" class="icon-large" aria-hidden="true"></i>
                            </div>

                            <h3 class="mt-6 text-xl font-black">
                                Discipline
                            </h3>

                            <p class="mt-3 text-sm leading-6 text-slate-500">
                                We believe consistency and discipline create
                                the foundation for success.
                            </p>

                        </div>


                        <div class="value-card rounded-3xl border border-slate-200 bg-white p-7 shadow-sm sm:translate-y-7">

                            <div class="icon-box flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-100 text-clubBlue">
                                <i data-lucide="users-round" class="icon-large" aria-hidden="true"></i>
                            </div>

                            <h3 class="mt-6 text-xl font-black">
                                Teamwork
                            </h3>

                            <p class="mt-3 text-sm leading-6 text-slate-500">
                                Football is a team game. We grow and compete
                                together.
                            </p>

                        </div>


                        <div class="value-card rounded-3xl border border-slate-200 bg-white p-7 shadow-sm">

                            <div class="icon-box flex h-14 w-14 items-center justify-center rounded-2xl bg-amber-100 text-clubGold">
                                <i data-lucide="flame" class="icon-large" aria-hidden="true"></i>
                            </div>

                            <h3 class="mt-6 text-xl font-black">
                                Passion
                            </h3>

                            <p class="mt-3 text-sm leading-6 text-slate-500">
                                Every match is played with energy, pride
                                and commitment.
                            </p>

                        </div>


                        <div class="value-card rounded-3xl border border-slate-200 bg-white p-7 shadow-sm sm:translate-y-7">

                            <div class="icon-box flex h-14 w-14 items-center justify-center rounded-2xl bg-green-100 text-green-700">
                                <i data-lucide="trending-up" class="icon-large" aria-hidden="true"></i>
                            </div>

                            <h3 class="mt-6 text-xl font-black">
                                Growth
                            </h3>

                            <p class="mt-3 text-sm leading-6 text-slate-500">
                                We continuously develop our players, team
                                and wider football community.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- =========================================================
             KIT PROMO
        ========================================================== -->

        <section
            id="kits"
            class="relative overflow-hidden bg-clubPurple-dark py-20"
        >

            <div class="absolute inset-0 opacity-20">

                <div class="absolute -left-32 -top-32 h-80 w-80 rounded-full bg-clubGold-light blur-3xl"></div>

                <div class="absolute -bottom-32 -right-32 h-80 w-80 rounded-full bg-clubBlue-light blur-3xl"></div>

            </div>


            <div class="relative mx-auto max-w-7xl px-5 sm:px-8 lg:px-10">

                <div class="overflow-hidden rounded-[2rem] border border-white/10 bg-white/5 p-8 backdrop-blur-md sm:p-12">

                    <div class="grid items-center gap-10 lg:grid-cols-[1fr_auto]">

                        <div class="max-w-3xl text-white">

                            <div class="mb-5 inline-flex items-center gap-2 rounded-full bg-clubGold-light px-4 py-2 text-xs font-black uppercase tracking-wider text-clubPurple-dark">

                                <i data-lucide="shirt" class="icon-small" aria-hidden="true"></i>

                                Club Merchandise

                            </div>

                            <h2 class="text-4xl font-black tracking-tight sm:text-5xl">

                                Wear The
                                <span class="text-clubGold-light">
                                    Embogo Colours.
                                </span>

                            </h2>

                            <p class="mt-5 max-w-2xl text-base leading-7 text-white/70 sm:text-lg">
                                Represent the club wherever you go. Get information
                                about the latest Embogo FC kits and merchandise.
                            </p>

                        </div>


                        <a
                            href="{{ route('kits') }}"
                            class="focus-ring inline-flex items-center justify-center gap-3 rounded-xl bg-clubGold-light px-7 py-4 font-black text-clubPurple-dark shadow-xl transition hover:bg-white"
                        >

                            <i data-lucide="shopping-bag" aria-hidden="true"></i>

                            Get Your Kit

                            <i data-lucide="arrow-right" class="icon-small" aria-hidden="true"></i>

                        </a>

                    </div>

                </div>

            </div>

        </section>



         
    </main>


    <!-- =========================================================
         FOOTER INCLUSION
    ========================================================== -->
 


    <!-- =========================================================
         LUCIDE ICON INITIALIZATION
    ========================================================== -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            if (typeof lucide !== 'undefined') {
                lucide.createIcons({
                    attrs: {
                        'stroke-width': 1.8
                    }
                });
            }

        });
    </script>


    <!-- =========================================================
         CAROUSEL JAVASCRIPT
    ========================================================== -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const slides = document.querySelectorAll('.hero-slide');
            const dots = document.querySelectorAll('.carousel-dot');
            const previousButton = document.getElementById('prevSlide');
            const nextButton = document.getElementById('nextSlide');

            let currentSlide = 0;
            let autoplay;

            if (!slides.length) {
                return;
            }

            function showSlide(index) {

                if (index >= slides.length) {
                    currentSlide = 0;
                } else if (index < 0) {
                    currentSlide = slides.length - 1;
                } else {
                    currentSlide = index;
                }

                slides.forEach((slide, i) => {
                    slide.classList.toggle(
                        'active',
                        i === currentSlide
                    );
                });

                dots.forEach((dot, i) => {

                    dot.classList.toggle(
                        'active',
                        i === currentSlide
                    );

                    if (i === currentSlide) {
                        dot.classList.remove('bg-white/40');
                        dot.classList.add('bg-clubGold-light');
                    } else {
                        dot.classList.remove('bg-clubGold-light');
                        dot.classList.add('bg-white/40');
                    }

                });
            }


            function nextSlide() {
                showSlide(currentSlide + 1);
            }


            function previousSlide() {
                showSlide(currentSlide - 1);
            }


            function startAutoplay() {

                stopAutoplay();

                autoplay = setInterval(() => {
                    nextSlide();
                }, 6000);

            }


            function stopAutoplay() {

                if (autoplay) {
                    clearInterval(autoplay);
                }

            }


            if (nextButton) {

                nextButton.addEventListener('click', function () {
                    nextSlide();
                    startAutoplay();
                });

            }


            if (previousButton) {

                previousButton.addEventListener('click', function () {
                    previousSlide();
                    startAutoplay();
                });

            }


            dots.forEach((dot, index) => {

                dot.addEventListener('click', function () {
                    showSlide(index);
                    startAutoplay();
                });

            });


            const hero = document.querySelector('#home');

            if (hero) {

                hero.addEventListener('mouseenter', stopAutoplay);

                hero.addEventListener('mouseleave', startAutoplay);

                hero.addEventListener('focusin', stopAutoplay);

                hero.addEventListener('focusout', stopAutoplay);

            }


            /*
             * Keyboard support
             */
            document.addEventListener('keydown', function (event) {

                if (event.key === 'ArrowLeft') {
                    previousSlide();
                    startAutoplay();
                }

                if (event.key === 'ArrowRight') {
                    nextSlide();
                    startAutoplay();
                }

            });


            showSlide(0);
            startAutoplay();

        });
    </script>

     @include('layouts.footer')

</body>

</html>