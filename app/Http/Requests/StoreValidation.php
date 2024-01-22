<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * 
     * Debe retornar verdadero para que se apliquen las reglas sobre el controlador donde fue invocado, de lo contrario generara error
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|min:3',
            'descripcion'=>'required',
            'categoria'=>'required'
        ];
    }

    public function messages() : array {
        return [
            'name.required'=>'El nombre es obligatorio',
            'descripcion.required.r'=>'La descripción es obligatoria',
            'categoria.required'=>'La categoría es obligatoria'
        ];
    }
}
