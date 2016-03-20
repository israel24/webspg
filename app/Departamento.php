<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'departamentos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_departamento', 'descripcion', 'fecha_creacion'];

    public function materium()
    {
        return $this->hasMany('App\Materium');
    }


}
