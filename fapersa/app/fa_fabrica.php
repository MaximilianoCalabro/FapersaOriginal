<?php

namespace fapersa;

use Illuminate\Database\Eloquent\Model;

class fa_fabrica extends Model
{
    protected $table='fa_fabrica';

	protected $primaryKey='idfabrica';

	public $timestamps=false;

	protected $fillable =[
		'imagen_fondo',
		'imagen_contacto',
		'direccion',
		'telefono',
		'correo'
	];

	protected $guarded =[

	];
}
