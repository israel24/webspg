<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObjetivosGenerale extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'objetivosgenerales';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['plan_global_id','objetivos_generales'];
        public function planglobal()
    {
        return $this->belongsTo('App\PlanGlobal');
    }

}
