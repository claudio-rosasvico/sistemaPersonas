<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaRequest extends FormRequest
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

        'nombre'   =>  'required',
        'apellido'=>  'required',
        'id_localidad' =>  'required',
        'fecha_nac' => '',
        'profesion' =>  '',
        'foto' => '',
        'nombre_foto'   =>  '',
        'twitter'=>  '',
        'facebook'  =>  '',
        'instagram' =>  '',
        'tiktok' =>  '',
        'id_user' =>  'required',

        ];

        return $reglas_validacion;
    }

    public function messages()

    {

        $message = [
            'nombre.required' => 'Debe ingresar Nombre',
            'apellido.required' => 'Debe ingresar Apellido',
            'id_localidad.required' => 'Debe seleccionar Localidad',
            'id_user.required' => 'Falta User',
            'foto.nullable' => 'No es necesaria la foto',
            'foto.image' => 'El elemento debe ser una imagen',
            'foto.mimes' => 'La imagen debe ser de tipo JPEG, PNG, JPG o GIF',
            'foto.max' => 'La imagen no puede ser mayor a 2MB',
        ];

        return $message;
    }
}