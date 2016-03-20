<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'grupos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['materium_id' ,'docente_id','grupo', 'control_de_plan_global'];


    public function materium()
    {
        return $this->belongsTo('App\Materium');
    }

    public function docente()
    {
        return $this->belongsTo('App\Docente');
    }


}
