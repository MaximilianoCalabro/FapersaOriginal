<?php

namespace fapersa\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InicioFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'video'=>'required|max:250',
            'imagen'=>'required|max:50',
            'titulo'=>'required|max:50',
            'texto'=>'required|max:500',
            'direccion'=>'required|max:250',
            'telefono'=>'required|max:50',
            'correo'=>'required|max:150'
        ];
    }
}
