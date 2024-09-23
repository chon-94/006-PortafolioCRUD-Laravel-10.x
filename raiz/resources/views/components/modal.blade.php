@props([
    'name', // Nombre del modal, se utiliza para identificarlo
    'show' => false, // Propiedad para mostrar u ocultar el modal, por defecto es falso
    'maxWidth' => '2xl' // Ancho máximo del modal, por defecto es '2xl'
])

@php
// Mapeo de los diferentes tamaños de ancho máximo a sus respectivas clases de Tailwind
$maxWidth = [
    'sm' => 'sm:max-w-sm',
    'md' => 'sm:max-w-md',
    'lg' => 'sm:max-w-lg',
    'xl' => 'sm:max-w-xl',
    '2xl' => 'sm:max-w-2xl',
][$maxWidth];
@endphp

<div
    x-data="{
        show: @js($show), // Estado que controla la visibilidad del modal
        focusables() {
            // Selector para todos los elementos que pueden recibir foco
            let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])'
            return [...$el.querySelectorAll(selector)]
                // Filtra los elementos que no están deshabilitados
                .filter(el => !el.hasAttribute('disabled'))
        },
        firstFocusable() { return this.focusables()[0] }, // Primer elemento enfocable
        lastFocusable() { return this.focusables().slice(-1)[0] }, // Último elemento enfocable
        nextFocusable() { return this.focusables()[this.nextFocusableIndex()] || this.firstFocusable() }, // Siguiente elemento enfocable
        prevFocusable() { return this.focusables()[this.prevFocusableIndex()] || this.lastFocusable() }, // Elemento enfocable anterior
        nextFocusableIndex() { return (this.focusables().indexOf(document.activeElement) + 1) % (this.focusables().length + 1) }, // Índice del siguiente elemento enfocable
        prevFocusableIndex() { return Math.max(0, this.focusables().indexOf(document.activeElement)) - 1 }, // Índice del elemento enfocable anterior
    }"
    x-init="$watch('show', value => {
        // Observador para manejar el estado 'show'
        if (value) {
            document.body.classList.add('overflow-y-hidden'); // Desactiva el desplazamiento en el cuerpo
            {{ $attributes->has('focusable') ? 'setTimeout(() => firstFocusable().focus(), 100)' : '' }} // Enfoca el primer elemento después de un breve retraso
        } else {
            document.body.classList.remove('overflow-y-hidden'); // Reactiva el desplazamiento en el cuerpo
        }
    })"
    x-on:open-modal.window="$event.detail == '{{ $name }}' ? show = true : null" // Abre el modal
    x-on:close-modal.window="$event.detail == '{{ $name }}' ? show = false : null" // Cierra el modal
    x-on:close.stop="show = false" // Cierra el modal al hacer clic en el fondo
    x-on:keydown.escape.window="show = false" // Cierra el modal al presionar la tecla Escape
    x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()" // Navegación con tab
    x-on:keydown.shift.tab.prevent="prevFocusable().focus()" // Navegación con Shift + Tab
    x-show="show" // Controla la visibilidad del modal
    class="fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50" // Estilo del contenedor principal
    style="display: {{ $show ? 'block' : 'none' }};"
>
    <div
        x-show="show"
        class="fixed inset-0 transform transition-all" // Contenedor del fondo del modal
        x-on:click="show = false" // Cierra el modal al hacer clic en el fondo
        x-transition:enter="ease-out duration-300" // Transición de entrada
        x-transition:enter-start="opacity-0" // Estado inicial de entrada
        x-transition:enter-end="opacity-100" // Estado final de entrada
        x-transition:leave="ease-in duration-200" // Transición de salida
        x-transition:leave-start="opacity-100" // Estado inicial de salida
        x-transition:leave-end="opacity-0" // Estado final de salida
    >
        <div class="absolute inset-0 bg-gray-500 dark:bg-gray-900 opacity-75"></div> <!-- Fondo oscuro del modal -->
    </div>

    <div
        x-show="show"
        class="mb-6 bg-white dark:bg-gray-800 rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full {{ $maxWidth }} sm:mx-auto" // Contenedor del contenido del modal
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    >
        {{ $slot }} <!-- Contenido que se inserta en el modal -->
    </div>
</div>
