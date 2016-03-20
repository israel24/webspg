<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanGlobal extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'planglobals';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['materium_id' ,'nombre_plan_global', 'sigla_plan_global', 'estado', 'codigo'];

    public function materium()
    {
        return $this->belongsTo('App\Materium');
    }

    public function justificaiongeneral()
    {
        return $this->hasMany('App\JustificaionGeneral');
    }

       public function evaluacion()
    {
        return $this->hasMany('App\Evaluacion');
    }
  public function propositosgenerale()
    {
        return $this->hasMany('App\PropositosGenerale');
    }
      public function unidade()
    {
        return $this->hasMany('App\Unidade');
    }
      public function objetivosgenerale()
    {
        return $this->hasMany('App\ObjetivosGenerale');
    }

}
