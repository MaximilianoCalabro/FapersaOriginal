<?php

namespace fapersa\Http\Controllers;

use Illuminate\Http\Request;
use fapersa\fa_distribuidora;
use Illuminate\Support\Facades\Redirect;
use fapersa\Http\Requests\DistribuidoraFormRequest;
use DB;

class DistribuidoraController extends Controller
{
    public function __construct()
    {
    
    }
    public function index(Request $request)
    {
    	if ($request)
    	{
    		$query=trim($request->get('searchText'));
    		$distribuidora=DB::table('fa_distribuidora')->get();
    		return view('distribuidora.configurar_distribuidora.index',["distribuidora"=>$distribuidora,"searchText"=>$query]);
    	}
    }
    public function create()
    {
    	return view ("distribuidora.configurar_distribuidora.create");
    }
	public function store(DistribuidoraFormRequest $request)
	{
		$distribuidora=new fa_distribuidora;

		$distribuidora->video=$request->get('video');
		$distribuidora->catalogo=$request->get('catalogo');
		$distribuidora->direccion=$request->get('direccion');
		$distribuidora->telefono=$request->get('telefono');
		$distribuidora->correo=$request->get('correo');
		$inicio->save();
		return Redirect::to('distribuidora.configurar_distribuidora');
	}
	public function show($id)
	{
		return view("distribuidora.configurar_fabrica.show",["distribuidora"=>fa_distribuidora::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("distribuidora.configurar_fabrica.edit",["distribuidora"=>fa_distribuidora::findOrFail($id)]);	
	}
	public function update(DistribuidoraFormRequest $request, $id)
	{
		$distribuidora=fa_distribuidora::findOrFail($id);

		$distribuidora->video=$request->get('video');
		$distribuidora->catalogo=$request->get('catalogo');
		$distribuidora->direccion=$request->get('direccion');
		$distribuidora->telefono=$request->get('telefono');
		$distribuidora->correo=$request->get('correo');
		$distribuidora->update();
		return Redirect::to('distribuidora.configurar_distribuidora');
	}
	public function destroy($id)
	{
		$distribuidora=fa_distribuidora::findOrFail($id);
		$distribuidora->delete();
		return Redirect::to('distribuidora.configurar_distribuidora');
	}
}
