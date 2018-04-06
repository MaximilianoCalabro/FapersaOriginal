<?php

namespace fapersa;

use Illuminate\Database\Eloquent\Model;

class fa_inicio extends Model
{
	protected $table='fa_inicio';

	protected $primaryKey='idinicio';

	public $timestamps=false;

	protected $fillable =[
		'video',
		'imagen',
		'titulo',
		'texto',
		'direccion',
		'telefono',
		'correo'

	];

	protected $guarded =[

	];
}
