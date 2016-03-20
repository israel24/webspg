<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'docentes';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'codigo', 'CI', 'direcion', 'telefono', 'estado'];

    public function grupos()
    {
        return $this->belongsToMany('App\Grupo');
    }

}
