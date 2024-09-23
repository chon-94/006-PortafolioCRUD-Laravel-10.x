<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   
    <head>

        <!-- Configuración de caracteres y diseño adaptable para móviles -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Token CSRF para proteger las peticiones -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Título dinámico de la página, basado en el nombre de la app -->
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fuentes externas (Figtree) cargadas desde Bunny -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        {{-- Fin de la sección de fuentes --}}
        
        <!-- Scripts y estilos gestionados por Vite -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{-- Fin de la sección de scripts --}}

    </head>
    
    <!-- El cuerpo usa una fuente sans-serif y suavizado de fuentes (antialiasing) -->
    <body class="font-sans text-gray-900 antialiased">

        <!-- Contenedor principal centrado vertical y horizontalmente -->
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            
            <!-- Logo o enlace al inicio de la página -->
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    <!-- Logo dinámico de la aplicación con tamaño y color definidos -->
                </a>
            </div>
            {{-- Logo o enlace al inicio de la página --}}

            <!-- Contenedor del contenido principal con un diseño centrado y estilizado -->
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }} <!-- Contenido dinámico que se inyecta aquí según la vista -->
            </div>
            {{-- Contenedor del contenido principal con un diseño centrado y estilizado --}}

        </div>
        {{-- Contenedor principal centrado vertical y horizontalmente --}}
    </body>
    
</html>
