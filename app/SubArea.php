<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubArea extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'subareas';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['area_id','nombre_subarea', 'descripcion', 'estado', 'fecha_creacion'];
    public function area()
    {
        return $this->belongsTo('App\Area');
    }
    
       public function materias()
    {
        return $this->belongsToMany('App\Materium', 'materia_sub_area');
        
    }

}
