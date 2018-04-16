<?php

namespace fapersa;

use Illuminate\Database\Eloquent\Model;

class Fa_inicio extends Model
{
	protected $table='fa_inicio';

	protected $primaryKey='idinicio';

	public $timestamps=false;

	protected $fillable =[
		'video',
		'imagen',
		'titulo',
		'texto',
		'texto2',
		'direccion',
		'telefono',
		'correo'

	];

	protected $guarded =[

	];
}
