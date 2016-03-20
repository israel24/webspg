<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class SistemaUno extends Model
{
    
	public $table = "sistemaUnos";
    

	public $fillable = [
	    "titulo",
		"facultad",
		"logo",
		"estado"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "titulo" => "string",
		"facultad" => "string",
		"logo" => "string",
		"estado" => "string"
    ];

	public static $rules = [
	    "titulo" => "required",
		"facultad" => "required"
	];

}
