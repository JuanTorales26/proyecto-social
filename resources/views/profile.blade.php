<x-app-layout>
    <x-slot name="header">
        Mi Perfil
    </x-slot>

    <!-- Cover & Header -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden mb-6">
        <div class="h-48 bg-gradient-to-r from-indigo-500 to-purple-600 relative group">
             <!-- Cover Image -->
             <img src="https://images.unsplash.com/photo-1557683316-973673baf926?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" alt="Cover" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity">
             <button class="absolute bottom-4 right-4 bg-white/20 backdrop-blur-md hover:bg-white/30 text-white rounded-lg px-3 py-1.5 text-xs font-semibold flex items-center gap-2 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                Cambiar Portada
             </button>
        </div>
        <div class="px-6 pb-6 relative">
            <div class="flex flex-col md:flex-row items-center md:items-end -mt-12 md:space-x-8 space-y-4 md:space-y-0">
                <div class="w-32 h-32 md:w-40 md:h-40 rounded-full border-4 border-white shadow-xl overflow-hidden bg-white shrink-0 relative group cursor-pointer">
                    <img src="https://ui-avatars.com/api/?name=Juan+Torales&background=0EA5E9&color=fff&size=256" alt="Profile" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                </div>
                <div class="flex-1 text-center md:text-left mb-2">
                    <div class="flex items-center justify-center md:justify-start gap-2">
                        <h1 class="text-3xl font-bold text-gray-900">Juan Torales</h1>
                        <span class="bg-blue-100 text-blue-600 text-[10px] font-bold px-2 py-0.5 rounded-full uppercase tracking-wide">Pro</span>
                    </div>
                    <p class="text-gray-500 font-medium text-lg mt-1">Desarrollador Full Stack & Diseñador UI/UX</p>
                </div>
                <div class="flex gap-3 mb-2 shrink-0">
                    <button class="px-5 py-2.5 bg-indigo-600 text-white rounded-xl font-semibold shadow-md shadow-indigo-200 hover:bg-indigo-700 hover:shadow-indigo-300 transition-all flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                        Editar Perfil
                    </button>
                    <button class="p-2.5 border border-gray-200 rounded-xl hover:bg-gray-50 text-gray-500 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </button>
                </div>
            </div>
            
            <!-- Tabs/Stats -->
            <div class="mt-8 flex flex-col sm:flex-row justify-between border-t border-gray-100 pt-6">
                <div class="flex gap-8 justify-center sm:justify-start mb-4 sm:mb-0">
                    <div class="text-center sm:text-left cursor-pointer hover:bg-gray-50 rounded-lg p-1 -m-1 px-3 transition-colors">
                        <span class="block font-bold text-gray-900 text-xl">1.2k</span>
                        <span class="text-sm text-gray-500 font-medium">Amigos</span>
                    </div>
                     <div class="text-center sm:text-left cursor-pointer hover:bg-gray-50 rounded-lg p-1 -m-1 px-3 transition-colors">
                        <span class="block font-bold text-gray-900 text-xl">48</span>
                        <span class="text-sm text-gray-500 font-medium">Fotos</span>
                    </div>
                     <div class="text-center sm:text-left cursor-pointer hover:bg-gray-50 rounded-lg p-1 -m-1 px-3 transition-colors">
                        <span class="block font-bold text-gray-900 text-xl">15.4k</span>
                        <span class="text-sm text-gray-500 font-medium">Likes</span>
                    </div>
                </div>
                <div class="flex gap-1 justify-center sm:justify-start bg-gray-50/50 p-1 rounded-xl">
                   <button class="px-4 py-1.5 bg-white text-gray-800 rounded-lg shadow-sm font-semibold text-sm">Post</button>
                   <button class="px-4 py-1.5 text-gray-500 hover:text-gray-700 hover:bg-white/50 rounded-lg font-medium text-sm transition-colors">Información</button>
                   <button class="px-4 py-1.5 text-gray-500 hover:text-gray-700 hover:bg-white/50 rounded-lg font-medium text-sm transition-colors">Amigos</button>
                   <button class="px-4 py-1.5 text-gray-500 hover:text-gray-700 hover:bg-white/50 rounded-lg font-medium text-sm transition-colors">Fotos</button>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Sidebar Info -->
        <div class="space-y-6">
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                <h3 class="font-bold text-gray-900 mb-4 text-lg">Sobre Mí</h3>
                <p class="text-gray-600 text-sm leading-relaxed mb-6">
                    Apasionado por la tecnología y el diseño. Me encanta crear experiencias digitales que ayuden a las personas. Siempre aprendiendo algo nuevo y compartiendo conocimientos. 🚀
                </p>
                <div class="space-y-4">
                    <div class="flex items-center gap-3 text-sm text-gray-600">
                        <div class="w-8 h-8 rounded-lg bg-gray-50 flex items-center justify-center text-gray-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <span class="font-medium">Madrid, España</span>
                    </div>
                     <div class="flex items-center gap-3 text-sm text-gray-600">
                         <div class="w-8 h-8 rounded-lg bg-gray-50 flex items-center justify-center text-gray-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <span class="font-medium">Senior Dev en <span class="text-indigo-600">TechCorp</span></span>
                    </div>
                     <div class="flex items-center gap-3 text-sm text-gray-600">
                         <div class="w-8 h-8 rounded-lg bg-gray-50 flex items-center justify-center text-gray-400">
                             <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                        </div>
                        <a href="#" class="text-indigo-600 font-medium hover:underline">torales.dev</a>
                    </div>
                     <div class="flex items-center gap-3 text-sm text-gray-600">
                         <div class="w-8 h-8 rounded-lg bg-gray-50 flex items-center justify-center text-gray-400">
                             <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <span class="font-medium">Se unió en Enero 2026</span>
                    </div>
                </div>
            </div>
            
            <!-- Photos Preview -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                <div class="flex justify-between items-center mb-4">
                     <h3 class="font-bold text-gray-900">Fotos Recientes</h3>
                     <a href="#" class="text-sm text-indigo-600 font-medium hover:underline">Ver todas</a>
                </div>
                <div class="grid grid-cols-3 gap-2">
                    @for($i=1; $i<=9; $i++)
                        <img src="https://picsum.photos/seed/{{$i+10}}/200/200" class="rounded-lg aspect-square object-cover hover:opacity-90 transition cursor-pointer">
                    @endfor
                </div>
            </div>
        </div>

        <!-- Feed/Content -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Create Post -->
             <div class="bg-white p-4 rounded-2xl shadow-sm border border-gray-100 flex gap-4 items-start">
                 <img src="https://ui-avatars.com/api/?name=Juan+Torales&background=0EA5E9&color=fff&size=256" class="w-10 h-10 rounded-full shadow-sm">
                 <div class="flex-1">
                     <textarea rows="2" placeholder="¿En qué estás pensando?" class="w-full bg-gray-50 border-0 rounded-xl px-4 py-3 focus:ring-1 focus:ring-indigo-500 focus:bg-white transition-all resize-none placeholder-gray-400"></textarea>
                     <div class="flex justify-between items-center mt-3">
                         <div class="flex gap-2">
                             <button class="p-2 text-gray-400 hover:text-green-500 hover:bg-green-50 rounded-lg transition-colors" title="Imagen">
                                 <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                             </button>
                             <button class="p-2 text-gray-400 hover:text-blue-500 hover:bg-blue-50 rounded-lg transition-colors" title="Video">
                                 <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                             </button>
                             <button class="p-2 text-gray-400 hover:text-orange-500 hover:bg-orange-50 rounded-lg transition-colors" title="Sentimiento">
                                 <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                             </button>
                         </div>
                         <button class="px-6 py-2 bg-indigo-600 text-white rounded-lg font-semibold shadow-md shadow-indigo-200 hover:bg-indigo-700 transition transform hover:scale-105">Publicar</button>
                     </div>
                 </div>
             </div>

             <!-- Post 1 -->
             <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                 <!-- Header -->
                 <div class="flex justify-between items-start mb-4">
                    <div class="flex items-center gap-3">
                        <img src="https://ui-avatars.com/api/?name=Juan+Torales&background=0EA5E9&color=fff&size=256" class="w-10 h-10 rounded-full cursor-pointer">
                        <div>
                            <h4 class="font-bold text-gray-900 cursor-pointer hover:underline">Juan Torales</h4>
                            <span class="text-xs text-gray-500 flex items-center gap-1">
                                2 horas <span class="w-0.5 h-0.5 rounded-full bg-gray-400"></span> <svg class="w-3 h-3 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm0-2a6 6 0 100-12 6 6 0 000 12z" clip-rule="evenodd"/></svg>
                            </span>
                        </div>
                    </div>
                    <button class="text-gray-400 hover:bg-gray-50 p-1.5 rounded-full transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                    </button>
                 </div>
                 
                 <!-- Content -->
                 <p class="text-gray-700 mb-4 leading-relaxed">¡Acabo de desplegar una nueva funcionalidad en el Dashboard! Me ha llevado un par de horas ajustar las gráficas, pero creo que el resultado ha merecido la pena. 🚀 #programming #laravel #design</p>
                 <div class="rounded-xl overflow-hidden mb-4 border border-gray-100">
                      <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" class="w-full object-cover hover:scale-105 transition duration-500">
                 </div>
                 
                 <!-- Footer stats -->
                 <div class="flex justify-between text-sm text-gray-500 mb-3 pb-3 border-b border-gray-50">
                     <div class="flex items-center gap-1 hover:underline cursor-pointer">
                         <div class="flex -space-x-1">
                             <div class="w-4 h-4 rounded-full bg-indigo-500 flex items-center justify-center text-white text-[8px] border border-white">👍</div>
                             <div class="w-4 h-4 rounded-full bg-rose-500 flex items-center justify-center text-white text-[8px] border border-white">❤️</div>
                         </div>
                         <span>123</span>
                     </div>
                     <div class="flex gap-3">
                         <span class="hover:underline cursor-pointer">12 comentarios</span>
                         <span class="hover:underline cursor-pointer">3 compartidos</span>
                     </div>
                 </div>

                 <!-- Actions -->
                  <div class="flex items-center justify-between gap-6 pt-1">
                      <button class="flex-1 flex items-center justify-center gap-2 py-2 text-gray-500 hover:bg-gray-50 rounded-lg transition-colors font-medium text-sm group">
                          <svg class="w-5 h-5 group-hover:text-indigo-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2v-6a2 2 0 00-2-2z"></path></svg>
                          <span class="group-hover:text-indigo-600">Me gusta</span>
                      </button>
                      <button class="flex-1 flex items-center justify-center gap-2 py-2 text-gray-500 hover:bg-gray-50 rounded-lg transition-colors font-medium text-sm group">
                          <svg class="w-5 h-5 group-hover:text-blue-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                          <span class="group-hover:text-blue-600">Comentar</span>
                      </button>
                      <button class="flex-1 flex items-center justify-center gap-2 py-2 text-gray-500 hover:bg-gray-50 rounded-lg transition-colors font-medium text-sm group">
                           <svg class="w-5 h-5 group-hover:text-green-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg>
                          <span class="group-hover:text-green-600">Compartir</span>
                      </button>
                  </div>
             </div>
        </div>
    </div>
</x-app-layout>