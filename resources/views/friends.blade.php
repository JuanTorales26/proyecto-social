<x-app-layout>
    <x-slot name="header">
        Mis Amigos
    </x-slot>

    <div class="space-y-6">
        <!-- Add Friend Search / Filters -->
        <div class="bg-white p-4 rounded-2xl shadow-sm border border-gray-100 flex justify-between items-center">
            <h3 class="text-lg font-bold text-gray-800">Todos los Amigos (128)</h3>
            <div class="relative">
                <input type="text" placeholder="Buscar amigo..." class="pl-10 pr-4 py-2 border border-gray-200 rounded-xl text-sm focus:ring-indigo-500 focus:border-indigo-500">
                <svg class="w-4 h-4 text-gray-400 absolute left-3 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
        </div>

        <!-- Friends Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @for ($i = 1; $i <= 8; $i++)
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 flex flex-col items-center text-center transition hover:shadow-md">
                <div class="relative mb-4">
                    <img src="https://ui-avatars.com/api/?name=Amigo+{{$i}}&background=random&size=128" alt="Avatar" class="w-24 h-24 rounded-full object-cover border-4 border-indigo-50">
                    <span class="absolute bottom-1 right-1 w-5 h-5 bg-green-500 border-2 border-white rounded-full"></span>
                </div>
                
                <h4 class="text-lg font-bold text-gray-800">Amigo {{$i}}</h4>
                <p class="text-sm text-gray-500 mb-4">Diseñador UX/UI</p>
                
                <div class="flex gap-2 w-full mt-auto">
                    <button class="flex-1 bg-indigo-50 text-indigo-600 py-2 rounded-lg text-sm font-semibold hover:bg-indigo-100 transition">
                        Perfil
                    </button>
                    <button class="flex-1 bg-gray-50 text-gray-600 py-2 rounded-lg text-sm font-semibold hover:bg-gray-100 transition">
                        Mensaje
                    </button>
                </div>
            </div>
            @endfor
        </div>
    </div>
</x-app-layout>