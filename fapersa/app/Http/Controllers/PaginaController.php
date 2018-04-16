<?php

namespace fapersa\Http\Controllers;

use Illuminate\Http\Request;
use fapersa\Fa_inicio;
use Illuminate\Support\Facades\Redirect;
use DB;

class PaginaController extends Controller
{
    public function __construct()
    {
		// $this->middleware('auth');
    }
    public function show() //cosulta a la db por cada seccion
	{
		$inicio=DB::table('fa_inicio')->get();

		return view('/inicio',["inicio"=>$inicio]);
	}
}
