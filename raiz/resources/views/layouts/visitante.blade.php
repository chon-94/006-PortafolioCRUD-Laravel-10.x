<!-- resources/views/layouts/visitante.blade.php -->
<!DOCTYPE html>
<html lang="es">
    <head>
        
        <!-- Configuración de codificación y diseño adaptable para la web -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- Configuración de codificación y diseño adaptable para la web --}}

        <!-- Título de la página para los visitantes -->
        <title>Bienvenido Visitante</title>
        {{-- Título de la página para los visitantes --}}

        <!-- Incluir el archivo de estilos de Tailwind CSS utilizando Vite -->
        @vite('resources/css/app.css')
        {{-- Incluir el archivo de estilos de Tailwind CSS utilizando Vite --}}
        
    </head>
    
    <body id="infinite-scroll" class="bg-cover bg-center h-screen" style="background-image: url('/img/Fondo-0.jpg');">
        <!-- Definir el fondo de la página como una imagen a pantalla completa -->

        <!-- Incluir el componente de la barra de navegación -->
        @include('layouts.navbar')
        {{-- Incluir el componente de la barra de navegación --}}
        
        <!-- Sección donde se inyectará el contenido específico de cada vista -->
        @yield('content')
        {{-- Sección donde se inyectará el contenido específico de cada vista --}}

        <!-- Incluir el componente del pie de página -->
        @include('layouts.foot')
        {{-- Incluir el componente del pie de página --}}

        <!-- Incluir el archivo de JavaScript utilizando Vite -->
        @vite('resources/js/app.js')
        {{-- Incluir el archivo de JavaScript utilizando Vite --}}
        
    </body>
</html>
