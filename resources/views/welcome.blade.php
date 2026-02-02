<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Proyecto Social</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="p-10 bg-white rounded-xl shadow-lg text-center">
        <h1 class="text-4xl font-bold text-blue-600 mb-4">
            Tailwind CSS 4 funcionando 🚀
        </h1>

        <p class="text-gray-600">
            Laravel {{ Illuminate\Foundation\Application::VERSION }}
        </p>
    </div>

</body>
</html>
