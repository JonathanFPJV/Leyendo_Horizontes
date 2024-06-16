<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class PrestamoController extends Controller
{
    /**
     * Realizar un préstamo de un libro.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestamos = Prestamo::with('libro')
            ->where('user_id', Auth::id())
            ->get();

        return view('prestamos.index', compact('prestamos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'libro_id' => 'required|exists:libros,id',
        ]);

        $prestamo = Prestamo::create([
            'user_id' => Auth::id(),
            'libro_id' => $request->libro_id,
            'fecha_inicio' => now(),
            'fecha_devolucion' => null,
            'devuelto' => false,
        ]);

        return redirect()->route('libros.show', $request->libro_id)->with('success', 'Préstamo realizado con éxito.');
    }
}
