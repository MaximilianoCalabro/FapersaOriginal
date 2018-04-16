<?php

namespace fapersa\Http\Controllers;

use Illuminate\Http\Request;
use fapersa\Fa_inicio;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use fapersa\Http\Requests\InicioFormRequest;
use DB;

class InicioController extends Controller
{
    public function __construct()
    {
    
    }
    public function index(Request $request)
    {
    	if ($request)
    	{
    		$query=trim($request->get('searchText'));
    		$inicio=DB::table('fa_inicio')->get();
    		return view('inicio.configurar_inicio.index',["inicio"=>$inicio,"searchText"=>$query]);
    	}
    }
    public function create()
    {
    	return view ("inicio/configurar_inicio.create");
    }
	public function store(InicioFormRequest $request)
	{
		$inicio=new Fa_inicio;

		$inicio->titulo=$request->get('titulo');
		$inicio->texto=$request->get('texto');
		$inicio->direccion=$request->get('direccion');
		$inicio->telefono=$request->get('telefono');
		$inicio->correo=$request->get('correo');
		if (Input::hasFile ('video')){
			$file=Input::file('video');
			$file->move(public_path().'/img/inicio/',$file->getClientOriginalName());
			$inicio->video=$file->getClientOriginalName();
		}
		if (Input::hasFile ('imagen_inicio')){
			$file2=Input::file('imagen_inicio');
			$file2->move(public_path().'/img/inicio/',$file2->getClientOriginalName());
			$inicio->imagen=$file2->getClientOriginalName();
		}
		$inicio->save();
		return Redirect::to('inicio/configurar_inicio');
	}
	public function show($id)
	{
		return view("inicio.configurar_inicio.show",["inicio"=>Fa_inicio::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("inicio.configurar_inicio.edit",["inicio"=>Fa_inicio::findOrFail($id)]);	
	}
	public function update(InicioFormRequest $request, $id)
	{
		$inicio=Fa_inicio::findOrFail($id);
		error_log('MAMAMAMAMAMAAAMA');
		$inicio->titulo=$request->get('titulo');
		$inicio->texto=$request->get('texto');
		$inicio->direccion=$request->get('direccion');
		$inicio->telefono=$request->get('telefono');
		$inicio->correo=$request->get('correo');
		if (Input::hasFile ('video')){
			$file=Input::file('video');
			$file->move(public_path().'/img/inicio/',$file->getClientOriginalName());
			$inicio->video=$file->getClientOriginalName();
		}
		if (Input::hasFile ('imagen_inicio')){
			$file2=Input::file('imagen_inicio');
			$file2->move(public_path().'/img/inicio/',$file2->getClientOriginalName());
			$inicio->imagen=$file2->getClientOriginalName();
		}
		$inicio->update();
		return Redirect::to('inicio/configurar_inicio');
	}
	public function destroy($id)
	{
		$inicio=Fa_inicio::findOrFail($id);
		$inicio->delete();
		return Redirect::to('inicio/configurar_inicio');
	}
}
