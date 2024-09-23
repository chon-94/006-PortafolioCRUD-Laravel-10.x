<!-- resources/views/layouts/foot.blade.php -->

<!-- Pie de página con fondo oscuro y ligeramente transparente, con esquinas redondeadas y sombra -->
<footer class="bg-gray-800 bg-opacity-85 rounded-lg shadow m-1">
    
    <!-- Contenedor centralizado y con un margen en la parte superior e inferior -->
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">

        <!-- Sección centralizada que incluye el logo o el nombre del sitio -->
        <div class="sm:flex sm:items-center sm:justify-center">
            
            <!-- Enlace al inicio del sitio, con el logo o texto del nombre del sitio -->
            <a href="{{ url('/') }}" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">LOGO</span>
            </a>
            {{-- Enlace al inicio del sitio, con el logo o texto del nombre del sitio --}}

        </div>
        {{-- Sección centralizada que incluye el logo o el nombre del sitio --}}

        <!-- Línea divisoria para separar la parte superior del pie de la inferior -->
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-9" />
        {{-- Línea divisoria para separar la parte superior del pie de la inferior --}}

        <!-- Texto de derechos reservados, centrado y con estilo de texto gris -->
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">
            &copy; 2024 Mi Sitio. Todos los derechos reservados.
        </span>
        {{-- Texto de derechos reservados, centrado y con estilo de texto gris --}}

    </div>
    {{-- Contenedor centralizado y con un margen en la parte superior e inferior --}}
    
</footer>
