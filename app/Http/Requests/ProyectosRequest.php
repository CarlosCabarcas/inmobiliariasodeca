<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProyectosRequest extends Request
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
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'caracteristicas' => 'required|string',
            'categoria' => 'required|string',
            'imagen-principal' => 'required',
            'lat' => 'required',
            'lng' => 'required'
        ];
    }
}
