<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    /**
     * Muestra una lista de libros.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::paginate(12);;

        return view('libros.index', compact('libros'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $libros = Libro::where('nombre', 'LIKE', "%$query%")
                        ->orWhere('autor', 'LIKE', "%$query%")
                        ->get();

        return view('libros.search', compact('libros', 'query'));
    }


    public function show(Libro $libro)
    {
        return view('libros.show', compact('libro'));
    }

    public function solicitud(Libro $libro)
    {
        return view('libros.show', compact('libro'));
    }
}
