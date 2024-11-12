<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GroupsRequest extends FormRequest
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
            'idProfessional'=>'required|min:3',
            'nameProfessional'=>'required',
            'outcome'=>'required',
            'outpatientGroup'=>'required',
            'campus'=>'required',
            'lounge'=>'required',
            'date'=>'required',
            'time'=>'required',
            'description'=>'required'
        ];
    }
}
