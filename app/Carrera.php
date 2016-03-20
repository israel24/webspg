<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'carreras';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'codigo', 'mision', 'vision', 'lema', 'fecha_creacion'];

       public function materias()
    {
        return $this->belongsToMany('App\Materium', 'materia_carrera');
        
    }
}
