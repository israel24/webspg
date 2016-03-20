<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'configuracions';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'estado', 'logo', 'facultad', 'organigrama', 'imgenuno', 'imgendos', 'imgentres', 'imgencuatro', 'imgencinco'];

}
