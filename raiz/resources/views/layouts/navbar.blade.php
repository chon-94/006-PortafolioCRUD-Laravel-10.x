<!-- Barra de navegación fija en la parte superior -->
<nav class="bg-gray-800 bg-opacity-75 border-gray-200 p-4 fixed top-0 left-0 w-full z-50">

    <!-- Contenedor principal que ajusta el contenido de la barra de navegación -->
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          
        <!-- Logo del sitio y enlace al carrusel -->
        <a href="#carousel" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="/img/logo-0.png" class="h-8" alt="Logo del sitio" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">logo</span>
        </a>
        {{-- Logo del sitio y enlace al carrusel --}}

        <!-- Menú de usuario con botón de acceso -->
        <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            
            <!-- Botón para abrir el menú de usuario -->
            <button type="button" class="flex text-sm rounded-full md:me-0 focus:ring-4 focus:ring-gray-300" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                <span class="sr-only">
                    Abrir menú de usuario
                </span>
                Acceso
            </button>
            {{-- Botón para abrir el menú de usuario --}}

            <!-- Menú desplegable para el usuario -->
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                <div class="px-4 py-3">
                    
                    <!-- Si el usuario está autenticado, muestra el nombre y el correo -->
                    @auth
                        <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                        <span class="block text-sm text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                    @else
                    {{-- Si el usuario está autenticado, muestra el nombre y el correo --}}

                    <!-- Si no está autenticado, muestra 'Invitado' -->
                    <span class="block text-sm text-gray-900 dark:text-white">Invitado</span>
                    <span class="block text-sm text-gray-500 truncate dark:text-gray-400">No has iniciado sesión</span>                    
                        @endauth
                    {{-- Si no está autenticado, muestra 'Invitado' --}}

                </div>

                <!-- Opciones de menú según el estado de autenticación -->
                <ul class="py-2" aria-labelledby="user-menu-button">
                    
                    @auth
                    <!-- Opción para ir al dashboard si está autenticado -->
                    <li>
                        <a href="{{ url('/dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                    </li>
                    {{-- Opción para ir al dashboard si está autenticado --}}
                    
                    <!-- Opción para cerrar sesión -->
                    <li>
                        <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Cerrar sesión
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    </li>
                    {{-- Opción para cerrar sesión --}}

                    @else
                    <!-- Opción para iniciar sesión si no está autenticado -->
                    <li>
                        <a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Iniciar sesión</a>
                    </li>
                    {{-- Opción para iniciar sesión si no está autenticado --}}

                    <!-- Opción para registrarse si está disponible -->
                    @if (Route::has('register'))
                    <li>
                        <a href="{{ route('register') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Registrarse</a>
                    </li>
                    @endif
                    {{-- Opción para registrarse si está disponible --}}

                    @endauth
                </ul>
                {{-- Opciones de menú según el estado de autenticación --}}

            </div>
            {{-- Menú desplegable para el usuario --}}

            <!-- Botón de menú para pantallas pequeñas -->
            <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
                <span class="sr-only">
                    Abrir menú principal
                </span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            {{-- Botón de menú para pantallas pequeñas --}}

        </div>
        {{-- Menú de usuario con botón de acceso --}}

        <!-- Menú de navegación principal (oculto en móviles) -->
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="#card" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Experiencia</a>
                </li>
                <li>
                    <a href="#contac" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contacto</a>
                </li>
                <li>
                    <a href="#abt" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                </li>
            </ul>
        </div>
        {{-- Menú de navegación principal (oculto en móviles) --}}

    </div>
    {{-- Contenedor principal que ajusta el contenido de la barra de navegación --}}

</nav>
{{-- Barra de navegación fija en la parte superior --}}
