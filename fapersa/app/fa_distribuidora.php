<?php

namespace fapersa;

use Illuminate\Database\Eloquent\Model;

class fa_distribuidora extends Model
{
    protected $table='fa_distribuidora';

	protected $primaryKey='iddistribuidora';

	public $timestamps=false;

	protected $fillable =[
		'video',
		'catalogo',
		'direccion',
		'telefono',
		'correo'
	];

	protected $guarded =[

	];
}
