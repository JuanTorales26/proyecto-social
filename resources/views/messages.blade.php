<x-app-layout>
    <x-slot name="header">
        Mensajes
    </x-slot>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden h-[calc(100vh-12rem)] flex">
        <!-- Sidebar Contacts -->
        <div class="w-1/3 border-r border-gray-100 flex flex-col bg-gray-50/50">
            <div class="p-4 border-b border-gray-100">
                <input type="text" placeholder="Buscar chat..." class="w-full bg-white border border-gray-200 rounded-xl px-4 py-2 text-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            
            <div class="overflow-y-auto flex-1 p-2 space-y-1">
                @for ($i = 1; $i <= 5; $i++)
                <button class="w-full text-left p-3 rounded-xl hover:bg-white hover:shadow-sm transition flex items-center gap-3 {{$i == 1 ? 'bg-white shadow-sm border border-gray-100' : ''}}">
                    <div class="relative">
                        <img src="https://ui-avatars.com/api/?name=User+{{$i}}&background=random" class="w-10 h-10 rounded-full">
                        <span class="absolute -bottom-0.5 -right-0.5 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></span>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex justify-between items-baseline">
                            <h4 class="text-sm font-bold text-gray-900 truncate">Usuario {{$i}}</h4>
                            <span class="text-xs text-gray-400">10:3{{$i}} AM</span>
                        </div>
                        <p class="text-xs text-gray-500 truncate">Hola, ¿cómo va el proyecto?</p>
                    </div>
                </button>
                @endfor
            </div>
        </div>

        <!-- Chat Area -->
        <div class="flex-1 flex flex-col bg-white">
            <!-- Chat Header -->
            <div class="p-4 border-b border-gray-100 flex justify-between items-center bg-white z-10">
                <div class="flex items-center gap-3">
                    <img src="https://ui-avatars.com/api/?name=User+1&background=random" class="w-10 h-10 rounded-full">
                    <div>
                        <h4 class="font-bold text-gray-900">Usuario 1</h4>
                        <span class="flex items-center gap-1.5 text-xs text-green-500 font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                            En línea
                        </span>
                    </div>
                </div>
                <div class="flex gap-2 text-gray-400">
                    <button class="p-2 hover:bg-gray-100 rounded-lg transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    </button>
                    <button class="p-2 hover:bg-gray-100 rounded-lg transition">
                         <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </button>
                    <button class="p-2 hover:bg-gray-100 rounded-lg transition">
                         <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path></svg>
                    </button>
                </div>
            </div>

            <!-- Messages Area -->
            <div class="flex-1 overflow-y-auto p-4 space-y-4 bg-gray-50/30">
                <!-- Received -->
                <div class="flex gap-3">
                    <img src="https://ui-avatars.com/api/?name=User+1&background=random" class="w-8 h-8 rounded-full self-end mb-1">
                    <div class="bg-white border border-gray-100 p-3 rounded-2xl rounded-bl-none shadow-sm max-w-[70%]">
                        <p class="text-sm text-gray-700">Hola Juan, ¿cómo estás?</p>
                        <span class="text-[10px] text-gray-400 mt-1 block">10:30 AM</span>
                    </div>
                </div>

                <!-- Sent -->
                <div class="flex gap-3 flex-row-reverse">
                    <div class="bg-indigo-600 p-3 rounded-2xl rounded-br-none shadow-md max-w-[70%] text-white">
                        <p class="text-sm">¡Hola! Todo bien por aquí, trabajando en el nuevo dashboard.</p>
                        <span class="text-[10px] text-indigo-200 mt-1 block text-right">10:32 AM</span>
                    </div>
                </div>
                
                 <!-- Received -->
                <div class="flex gap-3">
                    <img src="https://ui-avatars.com/api/?name=User+1&background=random" class="w-8 h-8 rounded-full self-end mb-1">
                    <div class="bg-white border border-gray-100 p-3 rounded-2xl rounded-bl-none shadow-sm max-w-[70%]">
                        <p class="text-sm text-gray-700">Genial, me gustaría ver los avances pronto. ¿Tienes algo para mostrar?</p>
                        <span class="text-[10px] text-gray-400 mt-1 block">10:33 AM</span>
                    </div>
                </div>
            </div>

            <!-- Input Area -->
            <div class="p-4 bg-white border-t border-gray-100">
                <div class="flex items-center gap-2">
                    <button class="p-2 text-gray-400 hover:text-indigo-600 hover:bg-gray-100 rounded-full transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path></svg>
                    </button>
                    <input type="text" placeholder="Escribe un mensaje..." class="flex-1 bg-gray-50 border-0 rounded-full px-5 py-3 focus:ring-1 focus:ring-indigo-500 placeholder-gray-400">
                    <button class="p-3 bg-indigo-600 hover:bg-indigo-700 text-white rounded-full shadow-lg shadow-indigo-200 transition transform hover:scale-105">
                         <svg class="w-5 h-5 translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9-2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>