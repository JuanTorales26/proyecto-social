<x-app-layout>
    <x-slot name="header">
        Gestión de Datos
    </x-slot>

    <div class="space-y-6">
        <!-- Table Header & Filters -->
        <div class="flex flex-col sm:flex-row justify-between items-center gap-4 bg-white p-4 rounded-2xl shadow-sm border border-gray-100">
            <div class="relative w-full sm:w-80">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                </div>
                <input type="text" placeholder="Buscar registros..." class="block w-full pl-10 pr-3 py-2 border border-gray-200 rounded-xl leading-5 bg-gray-50 text-gray-900 placeholder-gray-400 focus:outline-none focus:bg-white focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition sm:text-sm">
            </div>

            <div class="flex gap-2">
                <button class="flex items-center gap-2 px-4 py-2 bg-white border border-gray-200 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                     <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path></svg>
                     Filtrar
                </button>
                <button class="flex items-center gap-2 px-4 py-2 bg-indigo-600 border border-transparent rounded-lg text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-md">
                     <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                     Nuevo Registro
                </button>
            </div>
        </div>

        <!-- Main Data Table -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                Usuario
                            </th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                Rol
                            </th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                Estado
                            </th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                Última Actividad
                            </th>
                            <th scope="col" class="px-6 py-4 text-right text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @php
                            $users = [
                                ['name' => 'Juan Pérez', 'email' => 'juan@example.com', 'role' => 'Admin', 'status' => 'Activo', 'date' => 'Hace 2 min', 'avatar' => 'JP'],
                                ['name' => 'María García', 'email' => 'maria@example.com', 'role' => 'Editor', 'status' => 'Activo', 'date' => 'Hace 1 hora', 'avatar' => 'MG'],
                                ['name' => 'Carlos López', 'email' => 'carlos@example.com', 'role' => 'Usuario', 'status' => 'Inactivo', 'date' => 'Ayer', 'avatar' => 'CL'],
                                ['name' => 'Ana Rodríguez', 'email' => 'ana@example.com', 'role' => 'Usuario', 'status' => 'Pendiente', 'date' => 'Hace 3 días', 'avatar' => 'AR'],
                                ['name' => 'Pedro Sánchez', 'email' => 'pedro@example.com', 'role' => 'Editor', 'status' => 'Activo', 'date' => 'Hace 5 min', 'avatar' => 'PS'],
                            ];
                        @endphp

                        @foreach($users as $user)
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <div class="h-10 w-10 rounded-full bg-gradient-to-tr from-indigo-400 to-purple-500 flex items-center justify-center text-white font-bold text-sm">
                                            {{ $user['avatar'] }}
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">{{ $user['name'] }}</div>
                                        <div class="text-sm text-gray-500">{{ $user['email'] }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full 
                                    {{ $user['role'] === 'Admin' ? 'bg-purple-100 text-purple-800' : 
                                       ($user['role'] === 'Editor' ? 'bg-blue-100 text-blue-800' : 'bg-gray-100 text-gray-800') }}">
                                    {{ $user['role'] }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($user['status'] === 'Activo')
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        <span class="h-1.5 w-1.5 rounded-full bg-green-500"></span>
                                        Activo
                                    </span>
                                @elseif($user['status'] === 'Inactivo')
                                     <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                        <span class="h-1.5 w-1.5 rounded-full bg-red-500"></span>
                                        Inactivo
                                    </span>
                                @else
                                     <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                        <span class="h-1.5 w-1.5 rounded-full bg-yellow-500"></span>
                                        Pendiente
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $user['date'] }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Editar</a>
                                <a href="#" class="text-red-600 hover:text-red-900">Borrar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination Mockup -->
            <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                    <div>
                        <p class="text-sm text-gray-700">
                            Mostrando <span class="font-medium">1</span> a <span class="font-medium">5</span> de <span class="font-medium">20</span> resultados
                        </p>
                    </div>
                    <div>
                        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Anterior</span>
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" aria-current="page" class="z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                1
                            </a>
                            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                2
                            </a>
                            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                3
                            </a>
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Siguiente</span>
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
