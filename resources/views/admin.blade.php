<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Admin Login - Embogo FC Kabale</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 flex items-center justify-center min-h-screen p-4 relative overflow-hidden antialiased">

    <!-- AMBIENT BACKGROUND GLOWS -->
    <div class="fixed inset-0 pointer-events-none z-0 overflow-hidden">
        <div class="absolute -top-[10%] -left-[10%] w-[500px] h-[500px] bg-purple-600/10 rounded-full blur-[140px]"></div>
        <div class="absolute top-[20%] right-[5%] w-[400px] h-[400px] bg-blue-600/10 rounded-full blur-[150px]"></div>
    </div>

    <!-- Login Card -->
    <div class="w-full max-w-md bg-slate-900/90 backdrop-blur-xl border border-purple-500/30 rounded-2xl p-8 shadow-[0_0_50px_-10px_rgba(126,34,206,0.3)] relative z-10">

        <!-- Header -->
        <div class="text-center mb-6">
            <div class="inline-flex items-center justify-center w-14 h-14 bg-gradient-to-tr from-purple-600 to-blue-500 p-0.5 rounded-xl mb-3 shadow-lg shadow-purple-500/20">
                <div class="w-full h-full bg-slate-950 rounded-[10px] flex items-center justify-center text-amber-400">
                    <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                    </svg>
                </div>
            </div>
            <h1 class="text-2xl font-extrabold tracking-tight bg-gradient-to-r from-white via-slate-200 to-purple-300 bg-clip-text text-transparent">Embogo Admin</h1>
            <p class="text-xs text-slate-400 mt-1 uppercase tracking-wider font-medium">Kabale Executive Portal</p>
        </div>

        <!-- Error Alert -->
        @if($loginError)
            <div class="mb-4 p-3 bg-red-500/20 border border-red-500/50 text-red-300 rounded-xl text-xs font-medium">
                {{ $loginError }}
            </div>
        @endif

        <!-- Login Form: posts back to the same /admin route -->
        <form action="{{ route('login.submit') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-1.5">Email Address</label>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus
                    class="w-full px-4 py-3 bg-slate-950 border border-purple-500/30 rounded-xl text-white placeholder-slate-600 focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition text-sm"
                    placeholder="admin@embogofc.ug">
            </div>

            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-1.5">Password</label>
                <input type="password" name="password" required
                    class="w-full px-4 py-3 bg-slate-950 border border-purple-500/30 rounded-xl text-white placeholder-slate-600 focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition text-sm"
                    placeholder="••••••••">
            </div>

            <div class="flex items-center justify-between text-xs pt-1">
                <label class="flex items-center gap-2 cursor-pointer text-slate-300">
                    <input type="checkbox" name="remember" class="w-4 h-4 rounded bg-slate-950 border-purple-500/40 text-purple-600 focus:ring-purple-500">
                    Remember me
                </label>
            </div>

            <button type="submit"
                class="w-full mt-3 py-3 bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-500 hover:to-blue-500 text-white text-xs font-bold uppercase tracking-wider rounded-xl shadow-lg shadow-purple-600/25 transition active:scale-[0.99]">
                Sign In to Command Center
            </button>
        </form>

        <div class="text-center mt-6 pt-4 border-t border-purple-500/20">
            <a href="{{ url('/') }}" class="inline-flex items-center gap-1.5 text-xs text-amber-400 hover:text-amber-300 transition font-medium">
                &larr; Back to Public Website
            </a>
        </div>
    </div>

</body>
</html>