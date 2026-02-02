<x-app-layout>
    <x-slot name="header">
        Resumen
    </x-slot>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
            <div class="p-3 bg-indigo-50 text-indigo-600 rounded-xl">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-500">Amigos Nuevos</p>
                <h3 class="text-2xl font-bold text-gray-800">1,234</h3>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
            <div class="p-3 bg-purple-50 text-purple-600 rounded-xl">
                 <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-500">Mensajes</p>
                <h3 class="text-2xl font-bold text-gray-800">54</h3>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
             <div class="p-3 bg-pink-50 text-pink-600 rounded-xl">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-500">Likes</p>
                <h3 class="text-2xl font-bold text-gray-800">8.9k</h3>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
             <div class="p-3 bg-orange-50 text-orange-600 rounded-xl">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
            </div>
             <div>
                <p class="text-sm font-medium text-gray-500">Vistas Perfil</p>
                <h3 class="text-2xl font-bold text-gray-800">432</h3>
            </div>
        </div>
    </div>

    <!-- Feed Section -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Main Feed -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Post Creation Component (Simple) -->
            <div class="bg-white rounded-2xl p-4 shadow-sm border border-gray-100">
                <div class="flex items-start gap-4">
                     <div class="h-10 w-10 rounded-full bg-gradient-to-tr from-indigo-500 to-purple-600 flex-shrink-0"></div>
                     <div class="flex-1">
                         <input type="text" placeholder="¿Qué estás pensando, Juan?" class="w-full bg-gray-50 border-0 rounded-xl px-4 py-3 text-gray-700 focus:ring-0 placeholder-gray-400">
                     </div>
                </div>
                <div class="flex justify-between items-center mt-3 pl-14">
                    <div class="flex gap-4 text-gray-400 text-sm font-medium">
                        <button class="flex items-center gap-2 hover:text-indigo-500 transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            Foto
                        </button>
                        <button class="flex items-center gap-2 hover:text-indigo-500 transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Video
                        </button>
                    </div>
                     <button class="bg-indigo-600 text-white px-5 py-2 rounded-lg font-medium text-sm hover:bg-indigo-700 transition">
                        Publicar
                     </button>
                </div>
            </div>

            <!-- Posts Stream -->
            @for ($i = 1; $i <= 3; $i++)
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                 <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-3">
                         <div class="h-10 w-10 rounded-full bg-gray-200 overflow-hidden">
                             <img src="https://ui-avatars.com/api/?name=User+{{$i}}&background=random" alt="Avatar" class="h-full w-full object-cover">
                         </div>
                         <div>
                             <h4 class="font-bold text-gray-800">Usuario Demo {{$i}}</h4>
                             <p class="text-xs text-gray-500">Hace 2 horas</p>
                         </div>
                    </div>
                    <button class="text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                    </button>
                 </div>
                 
                 <p class="text-gray-600 mb-4 leading-relaxed">
                     Esta es una publicación de ejemplo para demostrar el diseño moderno de la interfaz. Tailwind CSS 4 hace que sea muy fácil crear interfaces hermosas y responsivas. ¡Me encanta este nuevo proyecto social! 🚀
                 </p>

                 <!-- Post Image Mockup -->
                 <div class="h-64 bg-gray-100 rounded-xl mb-4 overflow-hidden">
                      <img src="https://picsum.photos/seed/{{$i}}/800/400" alt="Post Image" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                 </div>

                 <div class="flex items-center justify-between pt-4 border-t border-gray-50">
                    <div class="flex gap-6">
                        <button class="flex items-center gap-2 text-gray-500 hover:text-pink-500 transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                            <span class="text-sm font-medium">24 Likes</span>
                        </button>
                         <button class="flex items-center gap-2 text-gray-500 hover:text-indigo-500 transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                            <span class="text-sm font-medium">Comentar</span>
                        </button>
                    </div>
                     <button class="text-gray-400 hover:text-gray-600">
                         <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path></svg>
                     </button>
                 </div>
            </div>
            @endfor
        </div>

        <!-- Right Side Widgets -->
        <div class="space-y-6">
            <!-- Suggested Friends -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h3 class="font-bold text-gray-800 mb-4">Sugerencias para ti</h3>
                <div class="space-y-4">
                    @for ($j = 1; $j <= 4; $j++)
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                             <div class="h-10 w-10 rounded-full bg-gray-100">
                                <img src="https://ui-avatars.com/api/?name=Friend+{{$j}}&background=random" class="rounded-full">
                             </div>
                             <div>
                                 <p class="text-sm font-bold text-gray-800">Amigo {{$j}}</p>
                                 <p class="text-xs text-gray-500">Ingeniero</p>
                             </div>
                        </div>
                        <button class="text-xs font-bold text-indigo-600 hover:bg-indigo-50 px-2 py-1 rounded">
                            Seguir
                        </button>
                    </div>
                    @endfor
                </div>
            </div>

             <!-- Trending Topics -->
             <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h3 class="font-bold text-gray-800 mb-4">Tendencias</h3>
                <div class="space-y-4">
                    <div class="flex items-center gap-3 text-sm">
                        <span class="text-gray-400">#1</span>
                        <div>
                            <p class="font-bold text-gray-800">#LaravelUpdate</p>
                            <p class="text-xs text-gray-500">12.5k posts</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 text-sm">
                        <span class="text-gray-400">#2</span>
                        <div>
                            <p class="font-bold text-gray-800">#TailwindCSS4</p>
                            <p class="text-xs text-gray-500">8.2k posts</p>
                        </div>
                    </div>
                     <div class="flex items-center gap-3 text-sm">
                        <span class="text-gray-400">#3</span>
                        <div>
                            <p class="font-bold text-gray-800">#WebDev</p>
                            <p class="text-xs text-gray-500">5.1k posts</p>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
</x-app-layout>
