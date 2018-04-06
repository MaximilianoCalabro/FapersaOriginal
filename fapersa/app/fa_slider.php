<?php

namespace fapersa;

use Illuminate\Database\Eloquent\Model;

class fa_slider extends Model
{
	protected $table='fa_slider';

	protected $primaryKey='idslider';

	public $timestamps=false;
    
	protected $fillable =[
		'imagen_slider',
		'titulo_slider',
		'texto_slider'
	];

	protected $guarded =[

	];
}
