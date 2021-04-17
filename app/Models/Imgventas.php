<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imgventas extends Model
{
    use HasFactory;
    protected $table = 'img_ventas';

    protected $fillable = ['nombre', 'formato', 'ventas_id'];
 
    // Relación inversa pertenece a ventas
    public function venta()
    {
    	return $this->belongsTo('App\Ventas');
    }
}
