<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFileRequest extends FormRequest
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
            //

            'name'=>'required|min:3',
            'description'=>'required|min:3',
            'file'=>'required',
            'published_by'=>'required',
            'date'=>'required',
            'route'=>'required',
            'talento_humano'=>'required',
            'administracion'=>'required',
            'nomina'=>'required',
            'psiquiatria'=>'required',
            'sistemas'=>'required',
            'medicos'=>'required'
        ];
    }
}
