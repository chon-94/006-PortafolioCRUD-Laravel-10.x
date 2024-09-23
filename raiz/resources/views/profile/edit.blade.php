<x-app-layout>
    
    <!-- Define un slot para el encabezado del layout -->
    <x-slot name="header"> 
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }} <!-- Título de la página de perfil, traducido para soporte multilingüe -->
        </h2>
    </x-slot>
    {{-- Define un slot para el encabezado del layout --}}

    <!-- Espaciado vertical para separar el contenido -->
    <div class="py-12"> 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6"> <!-- Contenedor centrado y responsivo -->
            
            <!-- Caja para el formulario de información del perfil -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                
                <!-- Contenedor máximo para centrar el formulario --> 
                <div class="max-w-xl"> 
                    @include('profile.partials.update-profile-information-form') <!-- Incluir formulario de actualización de información -->
                </div>
                {{-- Contenedor máximo para centrar el formulario --}}

            </div>
            {{-- Caja para el formulario de información del perfil --}}
            
            <!-- Caja para el formulario de cambio de contraseña -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg"> 
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form') <!-- Incluir formulario de actualización de contraseña -->
                </div>
            </div>
            {{-- Caja para el formulario de cambio de contraseña --}}

            <!-- Caja para el formulario de eliminación de usuario -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg"> 
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form') <!-- Incluir formulario de eliminación de usuario -->
                </div>
            </div>
            {{-- Caja para el formulario de eliminación de usuario --}}

        </div>
    </div>
    {{-- Espaciado vertical para separar el contenido --}}

</x-app-layout>
