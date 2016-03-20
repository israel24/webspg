<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autoridad extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'autoridads';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'codigo', 'cargo', 'fecha_Inicio', 'fecha_fin', 'estado'];

}
