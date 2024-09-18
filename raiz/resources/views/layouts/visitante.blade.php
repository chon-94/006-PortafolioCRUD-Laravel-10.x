<!-- resources/views/layouts/visitante.blade.php -->
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bienvenido Visitante</title>
        @vite('resources/css/app.css')
    </head>
    <body id="infinite-scroll" class="bg-cover bg-center h-screen" style="background-image: url('/img/Fondo-0.jpg');"  >
        @include('layouts.navbar')
        @yield('content')
        @include('layouts.foot')
        @vite('resources/js/app.js')
    </body>
</html>
