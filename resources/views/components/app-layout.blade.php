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
    <body class="font-sans antialiased bg-gray-50 text-gray-900">
        <div class="flex h-screen overflow-hidden bg-gray-50">
            <!-- Sidebar -->
            <div id="sidebar-container" class="transition-all duration-300 ease-in-out w-20 lg:w-64 flex flex-col flex-shrink-0 bg-slate-900 h-full relative z-20 shadow-xl">
                <x-sidebar />
                
                <!-- Toggle Button (Mobile/Collapser) -->
                <button id="sidebar-toggle" class="absolute -right-3 top-6 bg-indigo-600 text-white p-1 rounded-full shadow-lg hover:bg-indigo-700 transition-colors z-30 lg:hidden">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
            </div>

            <!-- Main Content -->
            <div class="flex-1 flex flex-col overflow-hidden relative">
                <!-- Header -->
                <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-6 lg:px-10">
                    <div class="flex items-center gap-4">
                        <button id="menu-btn" class="text-gray-500 focus:outline-none hover:bg-gray-100 p-2 rounded-lg transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path></svg>
                        </button>
                        <h2 class="text-xl font-bold text-gray-800">
                             {{ $header ?? 'Dashboard' }} 
                        </h2>
                    </div>

                    <div class="flex items-center gap-4">
                        <button class="p-2 text-gray-400 hover:text-gray-600 relative">
                             <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                             <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full border border-white"></span>
                        </button>
                        
                        <div class="h-8 w-8 rounded-full bg-gradient-to-tr from-indigo-500 to-purple-600 flex items-center justify-center text-white font-bold text-xs ring-2 ring-white shadow-md">
                            JD
                        </div>
                    </div>
                </header>

                <!-- Page Content -->
                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6">
                    {{ $slot }}
                </main>
            </div>
        </div>

    <!-- Script for Sidebar Toggle -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar-container');
            const menuBtn = document.getElementById('menu-btn');
            const sidebarToggle = document.getElementById('sidebar-toggle');
            
            // Function to toggle sidebar visualization (collapsed vs expanded)
            function toggleSidebar() {
                // Check if we are in "expanded" mode
                // We check if it has w-64 or lg:w-64 active in a way that implies expansion
                // A simple way is to toggle a state class or check the width directly
                
                const isExpanded = sidebar.classList.contains('lg:w-64');
                
                if (isExpanded) {
                    // Switch to Collapsed (Mini) Mode
                    sidebar.classList.remove('lg:w-64', 'w-64');
                    sidebar.classList.add('lg:w-20', 'w-20');
                    
                    // Optional: Add specific class for styling children if needed
                    sidebar.classList.add('collapsed');
                } else {
                    // Switch to Expanded Mode
                    sidebar.classList.remove('lg:w-20', 'w-20');
                    sidebar.classList.add('lg:w-64', 'w-64');
                    
                    sidebar.classList.remove('collapsed');
                }
            }
            
            // Allow toggle on both buttons
            if (menuBtn) {
                menuBtn.addEventListener('click', toggleSidebar);
            }
            
            if (sidebarToggle) {
                sidebarToggle.addEventListener('click', toggleSidebar);
            }
        });
    </script>
    </body>
</html>
