<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Cliente extends Model
{

    protected $fillable = ["nombre","apellidos"];
    
    public function articulo(){

        return $this->hasOne("App\Models\Articulo");
    }

    public function articulos(){

        return $this->hasMany("App\Models\Articulo");
    }

    public function perfils(){

        return $this->belongsToMany("App\Models\Perfil");
    }

    public function calificaciones(): MorphMany
    {
        return $this->morphMany(Calificaciones::class, 'calificacion');
    }
}
