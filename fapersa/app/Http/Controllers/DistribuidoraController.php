<?php

namespace fapersa\Http\Controllers;

use Illuminate\Http\Request;
use fapersa\fa_distribuidora;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
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

		if (Input::hasFile ('video')){
			$file=Input::file('video');
			$file->move(public_path().'/img/distribuidora/',$file->getClientOriginalName());
			$distribuidora->video=$file->getClientOriginalName();
		}
		$distribuidora->catalogo=$request->get('catalogo');
		$distribuidora->direccion=$request->get('direccion');
		$distribuidora->telefono=$request->get('telefono');
		$distribuidora->correo=$request->get('correo');

		$distribuidora->save();
		return Redirect::to('distribuidora/configurar_distribuidora');
	}
	public function show($id)
	{
		return view("distribuidora.configurar_distribuidora.show",["distribuidora"=>fa_distribuidora::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("distribuidora.configurar_distribuidora.edit",["distribuidora"=>fa_distribuidora::findOrFail($id)]);	
	}
	public function update(DistribuidoraFormRequest $request, $id)
	{
		$distribuidora=fa_distribuidora::findOrFail($id);

		$distribuidora->catalogo=$request->get('catalogo');
		$distribuidora->direccion=$request->get('direccion');
		$distribuidora->telefono=$request->get('telefono');
		$distribuidora->correo=$request->get('correo');
		if (Input::hasFile ('video')){
			$file=Input::file('video');
			$file->move(public_path().'/img/distribuidora/',$file->getClientOriginalName());
			$distribuidora->video=$file->getClientOriginalName();
		}
		$distribuidora->update();
		return Redirect::to('distribuidora/configurar_distribuidora');
	}
	public function destroy($id)
	{
		$distribuidora=fa_distribuidora::findOrFail($id);
		$distribuidora->delete();
		return Redirect::to('distribuidora/configurar_distribuidora');
	}
}
