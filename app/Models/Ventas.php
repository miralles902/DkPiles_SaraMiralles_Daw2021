<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    use HasFactory;
    protected $table = 'ventas';
    
    protected $fillable = ['autor', 'titulo', 'cuerpo', 'datos', 'foto', 'url'];
 
    // Relación uno a muchos, un registro puede tener muchas imágenes 
    public function imagenesventas()
    {
        return $this->hasMany('App\Imgventas');
    }
}
