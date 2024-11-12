<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeadquarterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
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
            'nit'=>'required|min:3',
    'campusName'=>'required',
    'department'=>'required',
    'city'=>'required',
    'neighborhood'=>'required',
    'addres'=>'required',
    'date'=>'required',
    'phoneHeadquarter'=>'required',
    'emailHeadquarter'=>'required'
        ];
    }
}
