<x-app-layout>
    <x-slot name="header">
        Gráficas y Estadísticas
    </x-slot>

    <div class="space-y-6">
        <!-- Top Stats Row -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 relative overflow-hidden">
                <div class="relative z-10">
                    <p class="text-gray-500 font-medium text-sm">Crecimiento Mensual</p>
                    <h3 class="text-3xl font-bold text-gray-800 mt-1">+12.5%</h3>
                </div>
                <div class="absolute right-0 bottom-0 h-16 w-32 opacity-20 transform translate-x-2 translate-y-2">
                     <!-- Simple CSS Line Chart Background -->
                     <svg viewBox="0 0 100 40" class="w-full h-full text-indigo-600 fill-current">
                         <path d="M0 40 L0 30 L10 25 L20 32 L30 20 L40 22 L50 15 L60 25 L70 10 L80 15 L90 5 L100 0 L100 40 Z"></path>
                     </svg>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 relative overflow-hidden">
                <div class="relative z-10">
                    <p class="text-gray-500 font-medium text-sm">Usuarios Activos</p>
                    <h3 class="text-3xl font-bold text-gray-800 mt-1">45.2k</h3>
                </div>
                 <div class="absolute right-4 top-4 bg-green-100 text-green-600 px-2 py-1 rounded text-xs font-bold">
                    +5.2%
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 relative overflow-hidden">
                <div class="relative z-10">
                    <p class="text-gray-500 font-medium text-sm">Ingresos Estimados</p>
                    <h3 class="text-3xl font-bold text-gray-800 mt-1">$12,450</h3>
                </div>
                 <div class="absolute -right-6 -bottom-6 w-24 h-24 bg-indigo-50 rounded-full"></div>
            </div>
        </div>

        <!-- Main Charts Area -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Line Chart Container -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                <h3 class="font-bold text-gray-800 mb-4 text-lg">Actividad de Usuarios</h3>
                <div class="relative h-72 w-full">
                    <canvas id="userActivityChart"></canvas>
                </div>
            </div>

             <!-- Bar Chart Container -->
            <div class=" bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                <h3 class="font-bold text-gray-800 mb-4 text-lg">Distribución por Dispositivo</h3>
                <div class="relative h-72 w-full">
                    <canvas id="deviceChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Bottom Row -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
             <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 lg:col-span-2">
                 <h3 class="font-bold text-gray-800 mb-4 text-lg">Rendimiento Regional</h3>
                 <div class="h-64 flex items-end justify-between gap-2">
                    @foreach([45, 70, 30, 85, 55, 65, 40, 90, 35, 60, 25, 75] as $height)
                        <div class="w-full bg-indigo-50 rounded-t-lg relative group h-full flex flex-col justify-end">
                            <div class="w-full bg-indigo-500 rounded-t-sm hover:bg-indigo-600 transition-all duration-300 relative" style="height: {{ $height }}%">
                                <div class="opacity-0 group-hover:opacity-100 absolute -top-10 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white text-xs py-1 px-2 rounded transition-opacity duration-200">
                                    {{ $height }}%
                                </div>
                            </div>
                        </div>
                    @endforeach
                 </div>
                 <div class="flex justify-between text-xs text-gray-400 mt-2 font-medium">
                     <span>Ene</span><span>Feb</span><span>Mar</span><span>Abr</span><span>May</span><span>Jun</span>
                     <span>Jul</span><span>Ago</span><span>Sep</span><span>Oct</span><span>Nov</span><span>Dic</span>
                 </div>
             </div>

             <div class="bg-gradient-to-br from-indigo-600 to-purple-700 p-6 rounded-2xl shadow-lg border border-indigo-500 text-white">
                 <h3 class="font-bold text-lg mb-2">Plan Pro</h3>
                 <p class="text-indigo-100 text-sm mb-6">Obtén acceso a estadísticas avanzadas y reportes personalizados.</p>
                 
                 <div class="flex items-center justify-between mb-2">
                     <span class="text-sm font-medium opacity-80">Uso de almacenamiento</span>
                     <span class="text-sm font-bold">75%</span>
                 </div>
                 <div class="w-full bg-black/20 rounded-full h-2 mb-6">
                     <div class="bg-white rounded-full h-2 w-3/4"></div>
                 </div>

                 <button class="w-full py-3 bg-white text-indigo-600 font-bold rounded-xl hover:bg-gray-50 transition shadow-md">
                     Actualizar Ahora
                 </button>
             </div>
        </div>
    </div>

    <!-- Chart.js Integration via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // User Activity Line Chart
            const ctx1 = document.getElementById('userActivityChart').getContext('2d');
            new Chart(ctx1, {
                type: 'line',
                data: {
                    labels: ['Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab', 'Dom'],
                    datasets: [{
                        label: 'Visitantes',
                        data: [120, 190, 150, 250, 220, 300, 280],
                        borderColor: '#4f46e5',
                        backgroundColor: 'rgba(79, 70, 229, 0.1)',
                        tension: 0.4,
                        fill: true
                    }, {
                        label: 'Registros',
                        data: [30, 50, 40, 70, 60, 90, 80],
                        borderColor: '#9333ea',
                        backgroundColor: 'transparent',
                        tension: 0.4,
                        borderDash: [5, 5]
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { position: 'bottom' }
                    },
                    scales: {
                        y: { beginAtZero: true, grid: { borderDash: [2, 4] } },
                        x: { grid: { display: false } }
                    }
                }
            });

            // Device Doughnut Chart
            const ctx2 = document.getElementById('deviceChart').getContext('2d');
            new Chart(ctx2, {
                type: 'doughnut',
                data: {
                    labels: ['Móvil', 'Escritorio', 'Tablet'],
                    datasets: [{
                        data: [300, 150, 50],
                        backgroundColor: [
                            '#4f46e5', // Indigo 600
                            '#a855f7', // Purple 500
                            '#fb7185'  // Rose 400
                        ],
                        hoverOffset: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { position: 'bottom' }
                    }
                }
            });
        });
    </script>
</x-app-layout>
