<?php

namespace fapersa\Http\Controllers;

use Illuminate\Http\Request;
use fapersa\Fa_inicio;
use fapersa\fa_slider;
use fapersa\fa_fabrica;
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
	public function showfa() //cosulta a la db por cada seccion
	{
		$slider=DB::table('fa_slider')->get();
		$fabrica=DB::table('fa_fabrica')->get();

		return view('/layouts/fabrica',["slider"=>$slider, "fabrica"=>$fabrica]);
	}
}
