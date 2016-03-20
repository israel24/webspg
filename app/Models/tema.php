<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class tema extends Model
{
    
	public $table = "temas";
    

	public $fillable = [
	    "tema",
		"menu"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "tema" => "string",
		"menu" => "string"
    ];

	public static $rules = [
	    
	];

}
