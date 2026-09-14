<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us • Embogo FC</title>
    
    <!-- Tailwind CSS Play CDN -->
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
<body class="bg-slate-50 text-slate-900 antialiased min-h-screen flex flex-col justify-between selection:bg-purple-700 selection:text-white">

    <!-- HEADER INCLUDE -->
    @if(view()->exists('layouts.header'))
        @include('layouts.header')
    @else
        @include('header')
    @endif

    <!-- MAIN PAGE CONTAINER -->
    <main class="flex-1 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 space-y-12">

        <!-- Hero Banner Section -->
        <section class="bg-gradient-to-br from-purple-950 via-purple-900 to-indigo-950 rounded-3xl p-8 sm:p-12 border border-amber-400/20 shadow-2xl text-center relative overflow-hidden">
            <div class="absolute -top-12 -right-12 w-64 h-64 bg-amber-400/10 rounded-full blur-3xl pointer-events-none"></div>
            
            <span class="inline-block bg-amber-400 text-slate-950 text-xs font-black uppercase tracking-widest px-4 py-1.5 rounded-full mb-4 shadow-md">
                Official Support & Inquiries
            </span>
            
            <h1 class="text-3xl sm:text-5xl font-black text-white tracking-tight mb-4">
                Contact <span class="text-amber-400">Embogo FC</span>
            </h1>
            
            <p class="text-purple-200 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed">
                Have questions about our fixtures, match tickets, club membership, or partnership opportunities? Drop us a message and our team will get back to you.
            </p>
        </section>

        <!-- Flash Success Notification -->
        @if(session('success'))
            <div class="bg-emerald-50 border border-emerald-500/30 text-emerald-900 p-5 rounded-2xl font-semibold text-center shadow-sm flex items-center justify-center gap-3 max-w-3xl mx-auto">
                <i class="fa-solid fa-circle-check text-emerald-600 text-lg"></i>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        <!-- Contact Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
            
            <!-- Information Panel (Left Column) -->
            <div class="lg:col-span-1 space-y-6">
                
                <div class="bg-white rounded-3xl p-8 border border-purple-900/10 shadow-sm space-y-6">
                    <h3 class="text-xl font-black text-purple-950">Club Headquarters</h3>
                    
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-900 flex items-center justify-center flex-shrink-0 text-base">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <h4 class="text-xs font-black uppercase tracking-wider text-slate-400 mb-1">Stadium Location</h4>
                            <p class="text-sm font-semibold text-slate-700">Kabale Main Stadium, Kabale, Uganda</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-900 flex items-center justify-center flex-shrink-0 text-base">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div>
                            <h4 class="text-xs font-black uppercase tracking-wider text-slate-400 mb-1">Official Email</h4>
                            <p class="text-sm font-semibold text-slate-700">westboyboy373@gmail.com</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-900 flex items-center justify-center flex-shrink-0 text-base">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <div>
                            <h4 class="text-xs font-black uppercase tracking-wider text-slate-400 mb-1">Office Hours</h4>
                            <p class="text-sm font-semibold text-slate-700">Mon - Fri: 8:00 AM - 5:00 PM</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-purple-900 to-indigo-950 rounded-3xl p-8 text-white text-center space-y-3 shadow-md">
                    <h4 class="text-amber-400 font-black text-base">We Value Our Fans</h4>
                    <p class="text-purple-200 text-xs leading-relaxed">
                        Every message is important to us. Whether you are cheering from the stands or looking to sponsor the club, we look forward to hearing from you.
                    </p>
                </div>

            </div>

            <!-- Form Panel (Right 2 Columns) -->
            <div class="lg:col-span-2 bg-white rounded-3xl p-8 sm:p-10 border border-purple-900/10 shadow-sm">
                <div class="mb-8">
                    <h3 class="text-2xl font-black text-purple-950 tracking-tight">Send Us a Message</h3>
                    <p class="text-sm text-slate-500 mt-1">Fill out the form below and our management team will review your inquiry.</p>
                </div>

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Full Name Input -->
                        <div>
                            <label for="full_name" class="block text-xs font-black uppercase tracking-wider text-slate-700 mb-2">Full Name</label>
                            <input type="text" id="full_name" name="full_name" value="{{ old('full_name') }}" required 
                                   class="w-full bg-white border border-slate-300 rounded-xl px-4 py-3.5 text-sm font-semibold text-slate-900 placeholder-slate-400 focus:outline-none focus:border-purple-800 focus:ring-2 focus:ring-purple-800/20 transition-all"
                                   placeholder="Enter your full name">
                            @error('full_name')
                                <span class="text-rose-600 text-xs font-bold mt-1.5 block">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email Address Input -->
                        <div>
                            <label for="email" class="block text-xs font-black uppercase tracking-wider text-slate-700 mb-2">Email Address</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required 
                                   class="w-full bg-white border border-slate-300 rounded-xl px-4 py-3.5 text-sm font-semibold text-slate-900 placeholder-slate-400 focus:outline-none focus:border-purple-800 focus:ring-2 focus:ring-purple-800/20 transition-all"
                                   placeholder="name@example.com">
                            @error('email')
                                <span class="text-rose-600 text-xs font-bold mt-1.5 block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Subject Input -->
                    <div>
                        <label for="subject" class="block text-xs font-black uppercase tracking-wider text-slate-700 mb-2">Subject</label>
                        <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required 
                               class="w-full bg-white border border-slate-300 rounded-xl px-4 py-3.5 text-sm font-semibold text-slate-900 placeholder-slate-400 focus:outline-none focus:border-purple-800 focus:ring-2 focus:ring-purple-800/20 transition-all"
                               placeholder="What is your inquiry regarding?">
                        @error('subject')
                            <span class="text-rose-600 text-xs font-bold mt-1.5 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Message Textarea -->
                    <div>
                        <label for="message" class="block text-xs font-black uppercase tracking-wider text-slate-700 mb-2">Message</label>
                        <textarea id="message" name="message" rows="5" required 
                                  class="w-full bg-white border border-slate-300 rounded-xl px-4 py-3.5 text-sm font-semibold text-slate-900 placeholder-slate-400 focus:outline-none focus:border-purple-800 focus:ring-2 focus:ring-purple-800/20 transition-all resize-vertical"
                                  placeholder="Write your message here...">{{ old('message') }}</textarea>
                        @error('message')
                            <span class="text-rose-600 text-xs font-bold mt-1.5 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" 
                            class="w-full sm:w-auto bg-purple-900 hover:bg-purple-950 text-white font-black text-sm uppercase tracking-wider px-8 py-4 rounded-xl shadow-lg shadow-purple-900/25 transition-all cursor-pointer flex items-center justify-center gap-2">
                        <span>Send Message</span>
                        <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </form>
            </div>

        </div>

    </main>

    <!-- FOOTER INCLUDE -->
    @if(view()->exists('layouts.footer'))
        @include('layouts.footer')
    @else
        @include('footer')
    @endif

</body>
</html>