<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-gray-900 bg-black">
        <div class="relative min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-black overflow-hidden selection:bg-indigo-500 selection:text-white">
            
            <!-- Noise Texture Overlay -->
            <div class="absolute inset-0 z-0 opacity-[0.15] mix-blend-overlay pointer-events-none" style="background-image: url('data:image/svg+xml,%3Csvg viewBox=%220 0 200 200%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cfilter id=%22noiseFilter%22%3E%3CfeTurbulence type=%22fractalNoise%22 baseFrequency=%220.65%22 numOctaves=%223%22 stitchTiles=%22stitch%22/%3E%3C/filter%3E%3Crect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23noiseFilter)%22/%3E%3C/svg%3E');"></div>

            <!-- Complex Volumetric Fog / Light System -->
            <div class="absolute inset-0 overflow-hidden pointer-events-none bg-black">
                
                <!-- 1. Deep Atmospheric Base (Indigo/Purple) -->
                <div class="absolute top-[-20%] right-[-10%] w-[100vw] h-[100vh] bg-gradient-to-br from-indigo-900/30 to-purple-900/20 rounded-full blur-[150px] mix-blend-screen opacity-50"></div>

                <!-- 2. The Primary Volumetric Beam (Cyan/Blue) - Animated -->
                <div class="absolute top-[10%] right-[-15%] w-[80vw] h-[80vw] bg-indigo-600/20 rounded-full blur-[180px] mix-blend-screen animate-pulse duration-[8s]"></div>

                <!-- 3. The "Fog" Particles (Lighter Blues) -->
                <div class="absolute top-[30%] right-[-5%] w-[60vw] h-[60vh] bg-blue-500/10 rounded-full blur-[100px] mix-blend-overlay opacity-60"></div>
                
                <!-- 4. The White Hot Core (Intense Light Source) -->
                <div class="absolute top-[40%] right-[-10%] w-[30rem] h-[30rem] bg-white rounded-full blur-[120px] opacity-20 mix-blend-soft-light selection:bg-none"></div>

            </div>

            <div class="relative z-10 mb-8">
                 <a href="/" class="flex flex-col items-center group">
                    <!-- Logo with inner light effect -->
                    <div class="relative p-4 rounded-2xl mb-4 group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-indigo-500/20 blur-xl rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="relative bg-black/40 backdrop-blur-md rounded-2xl border border-white/10 p-4 shadow-2xl">
                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 text-indigo-400 drop-shadow-[0_0_15px_rgba(129,140,248,0.6)]">
                                <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                            </svg>
                        </div>
                    </div>
                    <span class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-100 to-indigo-200 tracking-tight drop-shadow-2xl">
                        SocialApp
                    </span>
                 </a>
            </div>

            <!-- Content Card: Glassmorphism + Interactive Glow -->
            <div class="relative z-10 w-full sm:max-w-md bg-black/40 backdrop-blur-2xl border border-white/5 rounded-3xl shadow-[0_0_40px_-10px_rgba(0,0,0,0.7)] overflow-hidden group hover:shadow-[0_0_50px_-10px_rgba(79,70,229,0.2)] hover:border-white/10 transition-all duration-500">
                
                <!-- Inner Glow Gradient for Card -->
                <div class="absolute top-0 inset-x-0 h-px bg-gradient-to-r from-transparent via-indigo-500/50 to-transparent opacity-50"></div>
                
                <div class="px-8 py-8">
                    {{ $slot }}
                </div>
            </div>

            <div class="mt-10 text-slate-600 text-xs uppercase tracking-widest relative z-10 font-medium">
                &copy; {{ date('Y') }} SocialApp.
            </div>
        </div>
    </body>
</html>
