<?php

namespace fapersa\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DistribuidoraFormRequest extends FormRequest
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
            'video'=>'',
            'catalogo'=>'',
            'direccion'=>'required|max:250',
            'telefono'=>'required|max:50',
            'correo'=>'required|max:150'
        ];
    }
}
