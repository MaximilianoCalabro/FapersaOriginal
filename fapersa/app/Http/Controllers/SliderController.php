<?php

namespace fapersa\Http\Controllers;

use Illuminate\Http\Request;
use fapersa\fa_slider;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use fapersa\Http\Requests\SliderFormRequest;
use DB;

class SliderController extends Controller
{
    public function __construct()
    {
    
    }
    public function index(Request $request)
    {
    	if ($request)
    	{
    		$query=trim($request->get('searchText'));
    		$slider=DB::table('fa_slider')->get();
    		return view('fabrica.slider.index',["slider"=>$slider,"searchText"=>$query]);
    	}
    }
    public function create()
    {
    	return view ("fabrica.slider.create");
    }
	public function store(SliderFormRequest $request)
	{
		$slider=new fa_slider;

		if (Input::hasFile ('imagen_slider')){
			$file=Input::file('imagen_slider');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$slider->imagen_slider=$file->getClientOriginalName();
		}
		$slider->titulo_slider=$request->get('titulo_slider');
		$slider->texto_slider=$request->get('texto_slider');
		$slider->save();
		return Redirect::to('fabrica/slider');
	}
	public function show($id)
	{
		return view("fabrica.slider.show",["slider"=>fa_slider::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("fabrica.slider.edit",["slider"=>fa_slider::findOrFail($id)]);	
	}
	public function update(SliderFormRequest $request, $id)
	{
		$slider=fa_slider::findOrFail($id);

		if (Input::hasFile ('imagen_slider')){
			$file=Input::file('imagen_slider');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$slider->imagen_slider=$file->getClientOriginalName();
		}
		$slider->titulo_slider=$request->get('titulo_slider');
		$slider->texto_slider=$request->get('texto_slider');
		$slider->update();
		return Redirect::to('fabrica/slider');
	}
	public function destroy($id)
	{
		$slider=fa_slider::findOrFail($id);
		$slider->delete();
		return Redirect::to('fabrica/slider');
	}
}
