<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 p-6">
            <h2 class="text-3xl font-extrabold text-blue-700 dark:text-blue-400 mb-6 tracking-wide">Detalles de la Película</h2>

            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-blue-600 dark:bg-blue-800">
                    <tr>
                        <th scope="col" class="px-6 py-3">Campo</th>
                        <th scope="col" class="px-6 py-3">Detalles</th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-800">
                    <tr class="border-b dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Nombre</td>
                        <td class="px-6 py-4">{{ $peliculaDetail->Name }}</td>
                    </tr>
                    <tr class="border-b dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Género</td>
                        <td class="px-6 py-4">{{ $peliculaDetail->Genre }}</td>
                    </tr>
                    <tr class="border-b dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Duración</td>
                        <td class="px-6 py-4">{{ $peliculaDetail->Duration }}</td>
                    </tr>
                    <tr class="border-b dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Año</td>
                        <td class="px-6 py-4">{{ $peliculaDetail->Year }}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Descripción</td>
                        <td class="px-6 py-4">{{ $peliculaDetail->Description }}</td>
                    </tr>
                </tbody>
            </table>

            <div class="mt-6 flex justify-between">
                <!-- Botón para regresar -->
                <a href="{{ route('pelicula-index') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Regresar
                </a>

                <!-- Botón para editar el registro -->
                <a href="{{ route('pelicula.update', $peliculaDetail->id) }}" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">
                    Editar
                </a>

                <!-- Formulario para eliminar el registro -->
                <form action="{{ route('pelicula.delete', $peliculaDetail->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este registro?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-500 dark:hover:bg-red-600 focus:outline-none dark:focus:ring-red-800">
                        Eliminar
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
