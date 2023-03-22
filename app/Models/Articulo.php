<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Articulo extends Model
{
    //protected $table = "articulos";
    //protected $primaryKey="articulo_id";
    /*protected $fillable=[

        'nombre_articulo',
        'precio',
        'pais_origen',
        'observaciones',
        'seccion'
    ];*/

    use SoftDeletes;

    public function cliente(){

        return $this->belongsTo('App\Models\Cliente');
    }

    public function calificaciones(): MorphMany
    {
        return $this->morphMany(Calificaciones::class, 'calificacion');
    }

}
