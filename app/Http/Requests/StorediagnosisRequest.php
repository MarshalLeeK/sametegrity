<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorediagnosisRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'code' => 'required|unique:diagnoses,code|min:4|max:6',
            'description' => 'required|min:4'
        ];
    }

    //Modificación de atributos.
    public function attributes()
    {
        return [
            'code' => 'Código del diagnóstico'
        ];
    }

    //Modificación mensajes de error.
    public function messages()
    {
        return [];
    }
}
