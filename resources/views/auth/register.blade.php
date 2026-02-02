<x-guest-layout>
    <div class="mb-6 text-center">
        <h2 class="text-3xl font-bold text-white tracking-tight">Crear Cuenta</h2>
        <p class="text-sm text-indigo-200 mt-2">Únete a nuestra comunidad social hoy mismo</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-6">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-indigo-100 mb-1">Nombre Completo</label>
            <div class="relative rounded-lg shadow-sm">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-indigo-300" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                    </svg>
                </div>
                <input id="name" class="block w-full pl-10 pr-3 py-3 bg-white/5 border border-white/10 text-white placeholder-indigo-300/50 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent sm:text-sm transition duration-200" 
                    type="text" 
                    name="name" 
                    required 
                    autofocus 
                    autocomplete="name" 
                    placeholder="Juan Pérez" />
            </div>
        </div>

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-indigo-100 mb-1">Correo Electrónico</label>
            <div class="relative rounded-lg shadow-sm">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-indigo-300" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                </div>
                <input id="email" class="block w-full pl-10 pr-3 py-3 bg-white/5 border border-white/10 text-white placeholder-indigo-300/50 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent sm:text-sm transition duration-200" 
                    type="email" 
                    name="email" 
                    required 
                    autocomplete="email" 
                    placeholder="usuario@ejemplo.com" />
            </div>
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-indigo-100 mb-1">Contraseña</label>
            <div class="relative rounded-lg shadow-sm">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-indigo-300" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                </div>
                <input id="password" class="block w-full pl-10 pr-3 py-3 bg-white/5 border border-white/10 text-white placeholder-indigo-300/50 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent sm:text-sm transition duration-200"
                    type="password"
                    name="password"
                    required
                    autocomplete="new-password"
                    placeholder="••••••••" />
            </div>
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-indigo-100 mb-1">Confirmar Contraseña</label>
            <div class="relative rounded-lg shadow-sm">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-indigo-300" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                </div>
                <input id="password_confirmation" class="block w-full pl-10 pr-3 py-3 bg-white/5 border border-white/10 text-white placeholder-indigo-300/50 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent sm:text-sm transition duration-200"
                    type="password"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                    placeholder="••••••••" />
            </div>
        </div>

        <div>
            <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-xl shadow-lg text-sm font-bold text-white bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:ring-offset-gray-900 transition-all duration-200 transform hover:scale-[1.02]">
                Registrarse
            </button>
        </div>
        
        <div class="mt-8">
            <div class="relative">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-white/10"></div>
                </div>
            </div>

            <div class="mt-6 text-center">
                <p class="text-indigo-200 text-sm mb-3">¿Ya tienes una cuenta?</p>
                <a href="{{ route('login') }}" class="inline-block font-bold text-white hover:text-indigo-300 underline-offset-4 hover:underline transition mb-2">
                    Inicia Sesión aquí
                </a>
            </div>
        </div>
    </form>
</x-guest-layout>
