<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'evaluacions';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['plan_global_id','evaluacion'];
    
        public function planglobal()
    {
        return $this->belongsTo('App\PlanGlobal');
    }

}
