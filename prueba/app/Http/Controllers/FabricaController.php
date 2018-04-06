<?php

namespace fapersa\Http\Controllers;

use Illuminate\Http\Request;
use fapersa\fa_fabrica;
use Illuminate\Support\Facades\Redirect;
use fapersa\Http\Requests\FabricaFormRequest;
use DB;

class FabricaController extends Controller
{
    public function __construct()
    {
    
    }
    public function index(Request $request)
    {
    	if ($request)
    	{
    		$query=trim($request->get('searchText'));
    		$fabrica=DB::table('fa_fabrica')->get();
    		return view('fabrica.configurar_fabrica.index',["fabrica"=>$fabrica,"searchText"=>$query]);
    	}
    }
    public function create()
    {
    	return view ("fabrica.configurar_fabrica.create");
    }
	public function store(FabricaFormRequest $request)
	{
		$fabrica=new fa_fabrica;

		$fabrica->imagen_slider=$request->get('imagen_slider');
		$fabrica->imagen_fondo=$request->get('imagen_fondo');
		$fabrica->titulo_slider=$request->get('titulo_slider');
		$fabrica->texto_slider=$request->get('texto_slider');
		$fabrica->imagen_contacto=$request->get('imagen_contacto');
		$fabrica->direccion=$request->get('direccion');
		$fabrica->telefono=$request->get('telefono');
		$fabrica->correo=$request->get('correo');
		$inicio->save();
		return Redirect::to('fabrica/configurar_fabrica');
	}
	public function show($id)
	{
		return view("fabrica.configurar_fabrica.show",["fabrica"=>fa_fabrica::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("fabrica.configurar_fabrica.edit",["fabrica"=>fa_fabrica::findOrFail($id)]);	
	}
	public function update(FabricaFormRequest $request, $id)
	{
		$fabrica=fa_fabrica::findOrFail($id);

		$fabrica->imagen_slider=$request->get('imagen_slider');
		$fabrica->imagen_fondo=$request->get('imagen_fondo');
		$fabrica->titulo_slider=$request->get('titulo_slider');
		$fabrica->texto_slider=$request->get('texto_slider');
		$fabrica->imagen_contacto=$request->get('imagen_contacto');
		$fabrica->direccion=$request->get('direccion');
		$fabrica->telefono=$request->get('telefono');
		$fabrica->correo=$request->get('correo');
		$fabrica->update();
		return Redirect::to('fabrica.configurar_fabrica');
	}
	public function destroy($id)
	{
		$fabrica=fa_fabrica::findOrFail($id);
		$fabrica->delete();
		return Redirect::to('fabrica.configurar_fabrica');
	}
}
