<x-guest-layout>
    <!-- Header -->
    <div class="mb-8 text-center">
        <h2 class="text-3xl font-bold text-white tracking-tight">
            Bienvenido
        </h2>
        <p class="mt-2 text-slate-400 text-sm">
            Ingresa a tu cuenta para continuar
        </p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <!-- Email Address -->
        <div class="relative group">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-indigo-300/50 group-focus-within:text-indigo-400 transition-colors" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                </svg>
            </div>
            <input id="email" 
                   class="block w-full pl-10 pr-3 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-transparent focus:bg-white/10 transition-all shadow-lg shadow-indigo-500/5 backdrop-blur-sm sm:text-sm" 
                   type="email" 
                   name="email" 
                   :value="old('email')" 
                   required 
                   autofocus 
                   autocomplete="username" 
                   placeholder="Correo electrónico" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-rose-500 text-xs" />
        </div>

        <!-- Password -->
        <div class="relative group">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-indigo-300/50 group-focus-within:text-indigo-400 transition-colors" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
            </div>
            <input id="password" 
                   class="block w-full pl-10 pr-3 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-transparent focus:bg-white/10 transition-all shadow-lg shadow-indigo-500/5 backdrop-blur-sm sm:text-sm"
                   type="password"
                   name="password"
                   required
                   autocomplete="current-password"
                   placeholder="Contraseña" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-rose-500 text-xs" />
        </div>

        <!-- Remember & Forgot -->
        <div class="flex items-center justify-between text-sm">
            <label for="remember_me" class="inline-flex items-center cursor-pointer group">
                <input id="remember_me" type="checkbox" class="rounded border-slate-700 bg-slate-900 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-slate-400 group-hover:text-slate-300 transition-colors">Recordarme</span>
            </label>
            
            @if (Route::has('password.request'))
                <a class="font-medium text-indigo-500 hover:text-indigo-400 hover:underline transition-colors" href="{{ route('password.request') }}">
                    ¿Olvidaste tu contraseña?
                </a>
            @endif
        </div>

        <!-- Submit Button -->
        <button type="submit" class="w-full flex justify-center py-2.5 px-4 border border-transparent rounded-lg shadow-sm text-sm font-semibold text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:ring-offset-slate-800 transition-all">
            Iniciar Sesión
        </button>

        <!-- Divider -->
        <div class="relative flex py-2 items-center">
            <div class="flex-grow border-t border-slate-700"></div>
            <span class="flex-shrink-0 mx-4 text-slate-500 text-xs uppercase tracking-wider">O continúa con</span>
            <div class="flex-grow border-t border-slate-700"></div>
        </div>

        <!-- Social Buttons -->
        <div class="grid grid-cols-2 gap-3">
            <button type="button" class="flex items-center justify-center gap-2 py-2 px-4 rounded-lg bg-slate-700 hover:bg-slate-600 border border-slate-600 text-slate-200 transition-all">
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                <span class="text-sm font-medium">Facebook</span>
            </button>
            <button type="button" class="flex items-center justify-center gap-2 py-2 px-4 rounded-lg bg-slate-700 hover:bg-slate-600 border border-slate-600 text-slate-200 transition-all">
                 <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.133 0 12.48 0 5.867 0 .533 5.333.533 12S5.867 24 12.48 24c3.44 0 6.373-1.133 8.52-3.293 2.213-2.213 2.9-5.467 2.9-7.92 0-.827-.08-1.507-.227-2.187h-11.2z"/></svg>
                <span class="text-sm font-medium">Google</span>
            </button>
        </div>

        <!-- Footer -->
        <p class="text-center text-sm text-slate-500 mt-6">
            ¿No tienes cuenta?
            <a href="{{ route('register') }}" class="font-medium text-indigo-500 hover:text-indigo-400 transition-colors">
                Regístrate
            </a>
        </p>
    </form>
</x-guest-layout>
