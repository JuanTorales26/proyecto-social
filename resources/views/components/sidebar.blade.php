<aside class="flex flex-col h-full w-full overflow-hidden text-slate-300">
    <!-- Logo Area -->
    <div class="h-16 flex items-center justify-start px-6 border-b border-white/10 flex-shrink-0 transition-all duration-300 logo-area">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-3 overflow-hidden">
            <div class="w-8 h-8 rounded-lg bg-indigo-600 flex items-center justify-center text-white flex-shrink-0 shadow-lg shadow-indigo-500/20">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
            </div>
            <span class="text-xl font-bold text-white tracking-wide sidebar-text opacity-100 transition-opacity duration-3000 delay-100">SocialApp</span>
        </a>
    </div>

    <!-- Nav Links -->
    <nav class="mt-6 flex flex-col gap-1 px-3 flex-1 overflow-y-auto">
        <p class="px-4 text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2 sidebar-text">Menú</p>
        
        <!-- Dashboard -->
        <a href="{{ route('dashboard') }}" 
           class="flex items-center gap-3 px-3 py-2.5 rounded-lg group transition-all duration-200 {{ request()->routeIs('dashboard') ? 'bg-indigo-600 text-white shadow-md shadow-indigo-900/20' : 'hover:bg-white/5 hover:text-white' }}">
            <svg class="w-5 h-5 flex-shrink-0 {{ request()->routeIs('dashboard') ? 'text-white' : 'text-slate-400 group-hover:text-indigo-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
            </svg>
            <span class="font-medium whitespace-nowrap sidebar-text">Dashboard</span>
            
            @if(request()->routeIs('dashboard'))
                <span class="ml-auto w-1.5 h-1.5 rounded-full bg-white/50 sidebar-text"></span>
            @endif
        </a>

        <!-- Charts -->
        <a href="{{ route('charts') }}" 
           class="flex items-center gap-3 px-3 py-2.5 rounded-lg group transition-all duration-200 {{ request()->routeIs('charts') ? 'bg-indigo-600 text-white shadow-md shadow-indigo-900/20' : 'hover:bg-white/5 hover:text-white' }}">
                <svg class="w-5 h-5 flex-shrink-0 {{ request()->routeIs('charts') ? 'text-white' : 'text-slate-400 group-hover:text-indigo-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>
                </svg>
            <span class="font-medium whitespace-nowrap sidebar-text">Gráficas</span>
        </a>

        <!-- Tables -->
        <a href="{{ route('tables') }}" 
           class="flex items-center gap-3 px-3 py-2.5 rounded-lg group transition-all duration-200 {{ request()->routeIs('tables') ? 'bg-indigo-600 text-white shadow-md shadow-indigo-900/20' : 'hover:bg-white/5 hover:text-white' }}">
                <svg class="w-5 h-5 flex-shrink-0 {{ request()->routeIs('tables') ? 'text-white' : 'text-slate-400 group-hover:text-indigo-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                </svg>
            <span class="font-medium whitespace-nowrap sidebar-text">Tablas</span>
        </a>

        <div class="my-4 border-t border-white/5 sidebar-text"></div>
        <p class="px-4 text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2 sidebar-text">Social</p>
        
        <!-- Amigos -->
        <a href="{{ route('friends') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg group transition-all duration-200 {{ request()->routeIs('friends') ? 'bg-indigo-600 text-white shadow-md shadow-indigo-900/20' : 'hover:bg-white/5 hover:text-white' }}">
            <svg class="w-5 h-5 flex-shrink-0 {{ request()->routeIs('friends') ? 'text-white' : 'text-slate-400 group-hover:text-amber-400' }} transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
            <span class="font-medium whitespace-nowrap sidebar-text">Amigos</span>
            <span class="ml-auto bg-slate-800 text-slate-400 text-xs py-0.5 px-2 rounded-full sidebar-text">12</span>
        </a>

        <!-- Mensajes -->
        <a href="{{ route('messages') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg group transition-all duration-200 {{ request()->routeIs('messages') ? 'bg-indigo-600 text-white shadow-md shadow-indigo-900/20' : 'hover:bg-white/5 hover:text-white' }}">
            <svg class="w-5 h-5 flex-shrink-0 {{ request()->routeIs('messages') ? 'text-white' : 'text-slate-400 group-hover:text-emerald-400' }} transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
            </svg>
            <span class="font-medium whitespace-nowrap sidebar-text">Mensajes</span>
            <span class="ml-auto bg-rose-500 text-white text-xs py-0.5 px-2 rounded-full sidebar-text">3</span>
        </a>

        <div class="my-4 border-t border-white/5 sidebar-text"></div>
        <p class="px-4 text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2 sidebar-text">Cuenta</p>

        <!-- Perfil -->
        <a href="{{ route('profile') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg group transition-all duration-200 {{ request()->routeIs('profile') ? 'bg-indigo-600 text-white shadow-md shadow-indigo-900/20' : 'hover:bg-white/5 hover:text-white' }}">
            <svg class="w-5 h-5 flex-shrink-0 {{ request()->routeIs('profile') ? 'text-white' : 'text-slate-400 group-hover:text-purple-400' }} transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
            </svg>
            <span class="font-medium whitespace-nowrap sidebar-text">Mi Perfil</span>
        </a>
    </nav>

    <!-- User Profile / Footer -->
    <div class="mt-auto border-t border-white/5 p-4">
        <div class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-full bg-gradient-to-tr from-indigo-500 to-purple-500 flex items-center justify-center text-white font-bold text-sm shadow-md ring-2 ring-white/10 shrink-0">
                JD
            </div>
            <div class="overflow-hidden sidebar-text">
                <p class="text-sm font-semibold text-white truncate">Juan Torales</p>
                <p class="text-xs text-slate-400 truncate">juan@example.com</p>
            </div>
            
            <form method="POST" action="{{ route('logout') }}" class="ml-auto sidebar-text">
                @csrf
                <button type="submit" class="text-slate-400 hover:text-white transition-colors p-1.5 hover:bg-white/10 rounded-md" title="Salir">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                </button>
            </form>
        </div>
    </div>
</aside>
