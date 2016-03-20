<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JustificaionGeneral extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'justificaiongenerals';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['plan_global_id', 'razon_de_ser_la_asignatura', 'por_que_se_ensena_y_por_que_esta_dentro_del_plan_de_estudios', 'en_que_medida_contribuye_a_la_formacion_integral_del_profesional'];

    public function planglobal()
    {
        return $this->belongsTo('App\PlanGlobal');
    }


}
