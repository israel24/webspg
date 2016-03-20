<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'areas';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_area', 'estado', 'descripcion', 'codigo', 'fecha_creacion'];
    
    public function subarea()
    {
        return $this->hasMany('App\SubArea');
    }
}
