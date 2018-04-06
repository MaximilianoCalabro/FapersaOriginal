<?php

namespace fapersa\Http\Controllers;

use Illuminate\Http\Request;
use fapersa\fa_fabrica;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
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

		$fabrica->direccion=$request->get('direccion');
		$fabrica->telefono=$request->get('telefono');
		$fabrica->correo=$request->get('correo');
		if (Input::hasFile ('imagen_fondo')){
			$file=Input::file('imagen_fondo');
			$file->move(public_path().'/img/fabrica/',$file->getClientOriginalName());
			$fabrica->imagen_fondo=$file->getClientOriginalName();
		}
		if (Input::hasFile ('imagen_contacto')){
			$file=Input::file('imagen_contacto');
			$file->move(public_path().'/img/fabrica/',$file->getClientOriginalName());
			$fabrica->imagen_contacto=$file->getClientOriginalName();
		}
		$fabrica->save();
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

		$fabrica->direccion=$request->get('direccion');
		$fabrica->telefono=$request->get('telefono');
		$fabrica->correo=$request->get('correo');
		if (Input::hasFile ('imagen_fondo')){
			$file=Input::file('imagen_fondo');
			$file->move(public_path().'/img/fabrica/',$file->getClientOriginalName());
			$fabrica->imagen_fondo=$file->getClientOriginalName();
		}
		if (Input::hasFile ('imagen_contacto')){
			$file=Input::file('imagen_contacto');
			$file->move(public_path().'/img/fabrica/',$file->getClientOriginalName());
			$fabrica->imagen_contacto=$file->getClientOriginalName();
		}
		$fabrica->update();
		return Redirect::to('fabrica/configurar_fabrica');
	}
	public function destroy($id)
	{
		$fabrica=fa_fabrica::findOrFail($id);
		$fabrica->delete();
		return Redirect::to('fabrica/configurar_fabrica');
	}
}
