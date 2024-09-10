<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf; // Asegúrate de importar correctamente el Facade de DomPDF

class PeliculaController extends Controller
{
    public function index()
    {
        $peliculas = Pelicula::orderBy('id', 'ASC')->paginate(10);
        return view('peliculas.index', compact('peliculas'));
    }

    public function show($pelicula)
    {
        $peliculaDetail = Pelicula::find($pelicula);
        return view('peliculas.show', compact('peliculaDetail'));
    }

    public function create()
    {
        return view('peliculas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'duration' => 'required',
            'year' => 'required|integer',
            'description' => 'required|string',
        ]);

        $pelicula = new Pelicula();
        $pelicula->Name = $request->name;
        $pelicula->Genre = $request->genre;
        $pelicula->Duration = $request->duration;
        $pelicula->Year = $request->year;
        $pelicula->Description = $request->description;
        $pelicula->save();

        return redirect()->route('pelicula-index')->with('success', 'Película creada exitosamente.');
    }

    public function updateView($pelicula)
    {
        $LastProduct = Pelicula::find($pelicula);
        return view('peliculas.update', compact('LastProduct'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'duration' => 'required',
            'year' => 'required|integer',
            'description' => 'required|string',
        ]);

        $productoActualizado = Pelicula::findOrFail($id);
        $productoActualizado->Name = $request->name;
        $productoActualizado->Genre = $request->genre;
        $productoActualizado->Duration = $request->duration;
        $productoActualizado->Year = $request->year;
        $productoActualizado->Description = $request->description;
        $productoActualizado->save();

        return redirect()->route('pelicula.show', $productoActualizado->id)
            ->with('edit', 'Película actualizada exitosamente.');
    }

    public function delete($pelicula)
    {
        $peliculaToDelete = Pelicula::findOrFail($pelicula);
        $peliculaToDelete->delete();
        return redirect()->route('pelicula-index')->with('success', 'La película ha sido eliminada exitosamente.');
    }

    // Método para generar el reporte en PDF
    public function getReport()
    {
        $peliculas = Pelicula::all(); // Obtener todas las películas de la base de datos

        // Cargar la vista 'peliculas.reportes' con los datos de las películas
        $pdf = Pdf::loadView('peliculas.reportes', compact('peliculas'));

        // Generar y devolver el PDF como descarga
        return $pdf->download('reporte_peliculas.pdf');
    }
}
