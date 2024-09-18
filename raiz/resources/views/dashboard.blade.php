<x-app-layout >
    <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="md:flex">

                        <!-- Menú de opciones -->
                        <ul id="menu-list" class="flex-column space-y-4 text-sm font-medium text-gray-500 dark:text-gray-400 md:me-4 mb-4 md:mb-0">

                            <li data-tab="cards">
                                <a href="#" class="inline-flex items-center px-4 py-3 rounded-lg hover:bg-blue-200 hover:text-gray-900 w-full bg-blue-50 text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                        <path fill-rule="evenodd" d="M4.5 5.653c0-1.427 1.529-2.33 2.779-1.643l11.54 6.347c1.295.712 1.295 2.573 0 3.286L7.28 19.99c-1.25.687-2.779-.217-2.779-1.643V5.653Z" clip-rule="evenodd" />
                                    </svg>
                                    Actualizar Carrusel
                                </a>
                            </li>

                            <li data-tab="single-card">
                                <a href="#" class="inline-flex items-center px-4 py-3 rounded-lg hover:bg-blue-200 hover:text-gray-900 w-full bg-blue-50 text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                        <path d="M15 3.75H9v16.5h6V3.75ZM16.5 20.25h3.375c1.035 0 1.875-.84 1.875-1.875V5.625c0-1.036-.84-1.875-1.875-1.875H16.5v16.5ZM4.125 3.75H7.5v16.5H4.125a1.875 1.875 0 0 1-1.875-1.875V5.625c0-1.036.84-1.875 1.875-1.875Z" />
                                    </svg>
                                    Manejar Tres Tarjetas
                                </a>
                            </li>

                            <li data-tab="create-user">
                                <a href="#" class="inline-flex items-center px-4 py-3 rounded-lg hover:bg-blue-200 hover:text-gray-900 w-full bg-blue-50 text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                        <path fill-rule="evenodd" d="M4.5 3.75a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V6.75a3 3 0 0 0-3-3h-15Zm4.125 3a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm-3.873 8.703a4.126 4.126 0 0 1 7.746 0 .75.75 0 0 1-.351.92 7.47 7.47 0 0 1-3.522.877 7.47 7.47 0 0 1-3.522-.877.75.75 0 0 1-.351-.92ZM15 8.25a.75.75 0 0 0 0 1.5h3.75a.75.75 0 0 0 0-1.5H15ZM14.25 12a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H15a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5h3.75a.75.75 0 0 0 0-1.5H15Z" clip-rule="evenodd" />
                                    </svg>
                                    Tarjeta Independiente
                                </a>
                            </li>

                            <li data-tab="future-option">
                                <a class="inline-flex items-center px-4 py-3 text-gray-400 rounded-lg bg-gray-50 cursor-not-allowed w-full dark:bg-gray-800 dark:text-gray-500">
                                    <svg class="w-4 h-4 me-2 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="..." />
                                    </svg>
                                    Opciones Futuras
                                </a>
                            </li>

                            <li data-tab="carousel">
                                <a href="#" class="inline-flex items-center px-4 py-3 rounded-lg hover:bg-blue-200 hover:text-gray-900 w-full bg-blue-700 text-white active">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                                    </svg>
                                    PERFIL
                                </a>
                            </li>

                        </ul>

                        <!-- Contenido asociado a las opciones -->

                        <!-- Contenido asociado a las opciones -->
                        <div id="tab-content" class="p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full">

                            <div id="cards" class="tab-content hidden">
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Actualizar Carrusel
                                </h3>
                                <p>Contenido para actualizar el carrusel...</p>
                            </div>

                            <div id="single-card" class="tab-content hidden">
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Manejar Tres Tarjetas
                                </h3>
                                <p>Contenido para manejar las tres tarjetas...</p>
                            </div>

                            <div id="create-user" class="tab-content hidden">
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Tarjeta Independiente
                                </h3>
                                <p>Contenido para la tarjeta independiente...</p>
                            </div>

                            <div id="future-option" class="tab-content hidden">
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Opciones Futuras</h3>
                                <p>Contenido futuro...</p>
                            </div>

                            <div id="carousel" class="tab-content hidden">
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Crear Usuario</h3>
                                <p>Contenido para crear usuario...</p>
                            </div>

                        </div>
                        
                    </div>


                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            // Seleccionar todos los elementos del menú
                            const menuItems = document.querySelectorAll('#menu-list li');
                            const tabContentItems = document.querySelectorAll('.tab-content');

                            // Añadir evento de clic a cada ítem del menú
                            menuItems.forEach(item => {
                                item.addEventListener('click', function() {
                                    const tabId = this.getAttribute('data-tab');

                                    // Ocultar todo el contenido de las tabs
                                    tabContentItems.forEach(content => {
                                        content.classList.add('hidden');
                                    });

                                    // Mostrar el contenido de la tab seleccionada
                                    document.getElementById(tabId).classList.remove('hidden');

                                    // Opcional: ajustar el estilo activo de los elementos del menú
                                    menuItems.forEach(menuItem => menuItem.querySelector('a').classList.remove(
                                        'bg-blue-700', 'text-white'));
                                    this.querySelector('a').classList.add('bg-blue-700', 'text-white');
                                });
                            });
                        });

                    </script>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
