<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Leyendo Horizontes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Listado de libros disponibles") }}
                </div>
            </div>

            <!-- Books Grid -->
            <div class="grid grid-cols-4 gap-4 mt-8">
                @foreach($libros as $libro)
                    <x-book :image="$libro->imagen" :title="$libro->nombre" :author="$libro->autor" :libro="$libro" />
                @endforeach
            </div>

            <!-- Pagination Links -->
            <div class="mt-8">
                {{ $libros->links() }}
            </div>
        </div>
    </div>
</x-app-layout>



