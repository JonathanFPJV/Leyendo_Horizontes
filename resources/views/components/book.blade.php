@php
    $defaultImage = 'https://www.nicepng.com/png/detail/954-9546445_books-icon-png-iconos-de-libros-png.png';
    $image = $image ?: $defaultImage;
@endphp

<div class="max-w-sm rounded overflow-hidden shadow-lg bg-white dark:bg-gray-800">
    <img class="w-full" src="{{ $image }}" alt="Book image">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2 text-gray-800 dark:text-gray-200">Título: {{ $title }}</div>
        <p class="text-gray-700 dark:text-gray-400 text-base">
            Autor: {{ $author }}
        </p>
    </div>
</div>


