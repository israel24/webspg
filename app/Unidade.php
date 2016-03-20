<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'unidades';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['plan_global_id','nombre_de_la_unidad', 'duracion_de_la_unidad_en_periodos_academicos', 'objetivo_de_la_unidad', 'contenido_de_la_unidad', 'tecnicas_predominantes_propuestas_para_la_unidad', 'evaluacion_de_la_unidad', 'bibliografia_especifica_de_la_unidad'];


  public function planglobal()
    {
        return $this->belongsTo('App\PlanGlobal');
    }
}
