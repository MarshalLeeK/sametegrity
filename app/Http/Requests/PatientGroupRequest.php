<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientGroupRequest extends FormRequest
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
            'dni'=>'required|min:3',
            'name'=>'required',
            'lastname'=>'required',
            'eps'=>'required',
            'visitorType'=>'required',
            'group'=>'required',
            'borndate'=>'required',
            'phone'=>'required',
            'email'=>'required'
        ];
    }
}
