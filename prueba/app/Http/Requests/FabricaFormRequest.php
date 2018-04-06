<?php

namespace fapersa\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FabricaFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'imagen_slider'=>'required|max:50',
            'imagen_fondo'=>'required|max:50',
            'titulo_slider'=>'required|max:50',
            'texto_slider'=>'required|max:500',
            'imagen_contacto'=>'required|max:50',
            'direccion'=>'required|max:250',
            'telefono'=>'required|max:50',
            'correo'=>'required|max:150'
        ];
    }
}
