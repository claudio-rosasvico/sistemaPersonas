<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroRequest extends FormRequest
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
        $reglas_validacion = [

        'id_persona' =>  'required',
        'id_categoria' =>  'required',
        'fecha' =>  '',
        'titulo' =>  'required',
        'descripcion' =>  'required',
        'fuente' =>  '',
        'id_user' =>  'required',

        ];

        return $reglas_validacion;
    }

    public function messages()

    {

        $message = [
            'id_persona.required' => 'Debe seleccionar persona',
            'id_categoria.required' => 'Debe seleccionar categoría',
            'titulo.required' => 'Debe colocar título',
            'descripcion.required' => 'Debe colocar descripción',
            'id_user.required' => 'Debe colocar user',
        ];

        return $message;
    }
}