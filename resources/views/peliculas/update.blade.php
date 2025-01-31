<x-app-layout>
    <div class="mt-8 flex justify-end">
        <button type="button" class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">
            <a href="{{ route('pelicula-index') }}">Regresar</a>
        </button>
    </div>

    <div class="mt-8">
        <div class="text-4xl font-extrabold text-blue-600 dark:text-white mb-12 mt-12 text-center">Edición de Película</div>
    </div>

    <form action="{{ route('pelicula.put', $LastProduct->id) }}" method="POST" class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg dark:bg-gray-800">
        @csrf
        @method('PUT')
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-semibold text-blue-700 dark:text-white">Nombre</label>
            <input value="{{ $LastProduct->Name }}" type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <div class="mb-6">
            <label for="genre" class="block mb-2 text-sm font-semibold text-blue-700 dark:text-white">Género</label>
            <input value="{{ $LastProduct->Genre }}" type="text" id="genre" name="genre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <div class="mb-6">
            <label for="duration" class="block mb-2 text-sm font-semibold text-blue-700 dark:text-white">Duración</label>
            <input value="{{ $LastProduct->Duration }}" type="text" id="duration" name="duration" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <div class="mb-6">
            <label for="year" class="block mb-2 text-sm font-semibold text-blue-700 dark:text-white">Año</label>
            <input value="{{ $LastProduct->Year }}" type="text" id="year" name="year" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <div class="mb-6">
            <label for="description" class="block mb-2 text-sm font-semibold text-blue-700 dark:text-white">Descripción</label>
            <textarea id="description" name="description" rows="4" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $LastProduct->Description }}</textarea>
        </div>

        <div class="mb-6 text-center">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Guardar</button>
        </div>
    </form>
</x-app-layout>
