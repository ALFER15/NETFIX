<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-4">
            <!-- Encabezado estilizado con color azul -->
            <h2 class="text-3xl font-extrabold text-blue-700 dark:text-blue-400 tracking-wide">
                Listado de Películas
            </h2>
            <div class="flex space-x-4">
                <!-- Botón "Create" que redirige al formulario de creación -->
                <a href="{{ route('pelicula.create') }}">
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Create
                    </button>
                </a>
                <!-- Botón "Generar Reporte" que redirige a la ruta del reporte PDF -->
                <a href="{{ route('pelicula.reporte') }}">
                    <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">
                        Generar Reporte
                    </button>
                </a>
            </div>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-blue-600 dark:bg-blue-800">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Descripción
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Duración
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Año
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Acción
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peliculas as $pelicula)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="{{ route('pelicula.show', $pelicula->id) }}" class="text-blue-500 hover:underline">
                                {{ $pelicula->Name }}
                            </a>
                        </th>
                        <td class="px-6 py-4">
                            {{ $pelicula->Description }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $pelicula->Duration }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $pelicula->Year }}
                        </td>
                        <td class="px-6 py-4">
                            <!-- Botón "Edit" funcional -->
                            <a href="{{ route('pelicula.update', $pelicula->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $peliculas->links('pagination::tailwind') }}
            </div>
        </div>
    </div>
</x-app-layout>
