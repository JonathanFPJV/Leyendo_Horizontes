<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'anio',
        'autor',
        'editorial',
        'stock',
        'disponibilidad',
        'imagen',
    ];

    public function prestamos()
    {
        return $this->hasMany(Prestamo::class);
    }
}
