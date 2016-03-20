<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sistemapg extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sistemapgs';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_de_facultad', 'descripcion'];

}
