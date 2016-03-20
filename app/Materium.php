<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materium extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'materias';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['departamento_id' ,'nombre_materia', 'sigla_materia', 'codigo', 'fecha_creacion'];

    public function departamento()
    {
        return $this->belongsTo('App\Departamento');
    }
    public function planglobal()
    {
        return $this->hasMany('App\PlanGlobal');
    }
    public function grupo()
    {
        return $this->hasMany('App\Grupo');
    }

    public function carreras()
    {
        return $this->belongsToMany('App\Carrera', 'materia_carrera');
        
    }

    public function subareas()
    {
        return $this->belongsToMany('App\Carrera', 'materia_sub_area');
        
    }
}
