<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo', 'autor', 'precio', 'nombre_vendedor', 'contacto_vendedor', 'detail', 'image'
    ];
}
