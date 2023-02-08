<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientsRequest extends FormRequest
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
            // 'dni' => 'required', 'unique:patients,dni' . !isset($this->id) ? null : $this->id,
            'name' => 'required|min:3',
            'lastname' => 'required|min:3',
            'borndate' => 'required'
        ];
    }
}
