<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditMusicoRequest extends FormRequest
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
        //$nombre = $this->request->get("nombre");

        return [
            //'nombre' => ['required', Rule::unique('musicos')->ignore($nombre,'nombre')],
            'nombre' => 'required|min:2',
            'categoria' => 'required',
            'salario' => 'required|size:4',
            'experiencia' => 'required',
            'descripcion' => 'required|min:10',
            'fecha' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Debes añadir tu nombre',
            'nombre.min' => 'El nombre debe contener al menos 2 caracteres',
            'nombre.unique' => 'Ese nombre ya existe, prueba con otro',
            'categoria.required' => 'Especifica si eres músico de banda o solista',
            'salario.required' => 'Indica un salario',
            'salario.size' => 'El salario debe estar comprendido entre 1000 y 9999',
            'experiencia.required' => 'Indica tu experiencia',
            'descripcion.required' => 'Debes añadir alguna descripción',
            'descripcion.min' => 'Tu descripción debe tener mínimo 10 caracteres',
            'fecha.required' => 'Completa la fecha',
        ];
    }
}
