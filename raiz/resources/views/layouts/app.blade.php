<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        <!-- Configuración de codificación y diseño adaptable para la web -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Token CSRF para la seguridad de las peticiones -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Título dinámico de la página, toma el nombre de la app de la configuración -->
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fuentes externas (Figtree) cargadas desde Bunny -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        {{-- Fin de la sección de fuentes --}}

        <!-- Scripts de Vite para CSS y JavaScript -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{-- Fin de la sección de scripts --}}

    </head>

    <!-- Fondo de la página que ocupa toda la pantalla con una imagen centrada -->
    <body id="infinite-scroll" class="bg-cover bg-center h-screen" style="background-image: url('/img/Fondo-1.jpg');">
        

        
        @include('layouts.navigation') <!-- Inclusión del archivo de navegación -->

        <!-- Contenedor que asegura que el contenido ocupe al menos el alto de la pantalla -->
        <div class="min-h-screen">
            
            <!-- Encabezado de la página, si la variable $header está definida -->
            @if (isset($header))
                <header class="bg-purple-500 bg-opacity-35 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }} <!-- Contenido dinámico del encabezado -->
                    </div>
                </header>
            @endif
            {{-- Fin del encabezado de la página --}}

            <!-- Contenido principal de la página -->
            <main>
                {{ $slot }} <!-- Contenido dinámico inyectado en el layout -->
            </main>
            {{-- Fin del contenido principal de la página --}}
            
        </div>
        {{-- Contenedor que asegura que el contenido ocupe al menos el alto de la pantalla --}}
        
        @include('layouts.foot') <!-- Inclusión del pie de página -->

    </body>

</html>
