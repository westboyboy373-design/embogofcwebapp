<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Admin Login</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 text-slate-100 flex items-center justify-center min-h-screen p-4">

    <!-- Login Card -->
    <div class="w-full max-w-md bg-slate-900 border border-purple-500/30 rounded-2xl p-8 shadow-[0_0_40px_-10px_rgba(126,34,206,0.3)]">
        
        <!-- Header & Admin Icon -->
        <div class="text-center mb-6">
            <div class="inline-flex items-center justify-center w-14 h-14 bg-amber-500/10 border border-amber-500/30 text-amber-400 rounded-xl mb-3 shadow-inner">
                <!-- User Icon -->
                <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                </svg>
            </div>
            <h1 class="text-2xl font-bold tracking-tight text-white">Admin Portal</h1>
            <p class="text-sm text-slate-400 mt-1">Sign in with your credentials</p>
        </div>

        <!-- Login Form -->
        <form action="#" method="POST" class="space-y-4">
            
            <!-- Email -->
            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-1">Email</label>
                <input type="email" required 
                    class="w-full px-4 py-2.5 bg-slate-950 border border-slate-800 rounded-lg text-white placeholder-slate-600 focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400 transition"
                    placeholder="admin@example.com">
            </div>

            <!-- Password -->
            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-1">Password</label>
                <input type="password" required 
                    class="w-full px-4 py-2.5 bg-slate-950 border border-slate-800 rounded-lg text-white placeholder-slate-600 focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400 transition"
                    placeholder="••••••••">
            </div>

            <!-- Remember & Forgot -->
            <div class="flex items-center justify-between text-xs pt-1">
                <label class="flex items-center gap-2 cursor-pointer text-slate-300">
                    <input type="checkbox" class="w-4 h-4 rounded bg-slate-950 border-slate-800 text-amber-500 focus:ring-amber-400">
                    Remember me
                </label>
                <a href="#" class="text-amber-400 hover:underline">Forgot password?</a>
            </div>

            <!-- Purple to Blue Button with Gold Accent -->
            <button type="submit" 
                class="w-full mt-2 py-3 bg-gradient-to-r from-purple-700 to-blue-600 hover:from-purple-600 hover:to-blue-500 text-white font-semibold rounded-lg shadow-lg shadow-purple-900/40 transition active:scale-[0.99]">
                Sign In
            </button>
        </form>

        <!-- Back Link -->
        <div class="text-center mt-6 pt-4 border-t border-slate-800">
            <a href="{{ url('/') }}" class="inline-flex items-center gap-1.5 text-xs text-amber-400 hover:underline">
                &larr; Back to Home
            </a>
        </div>
    </div>

</body>
</html>