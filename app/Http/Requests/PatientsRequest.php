<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'dni' => 'required|unique:patients|min:2|numeric',
            'name' => 'required|alpha|min:3',
            'lastname' => 'required|alpha|min:3',
            'tdoc' => 'required',
            'cellphone' => 'required|min:7',
            // 'borndate' => 'required',
            // 'address' => 'required',
            // 'documentplace-country' => 'required',
            // 'documentplace-satate' => 'required',
            // 'documentplace-city' => 'required',
            // 'gender' => 'required',
            // 'borndate' => 'required',
            // 'academiclevel' => 'required',
            // 'job' => 'required',
            // 'live-country' => 'required',
            // 'live-state' => 'required',
            // 'live-city' => 'required',
            // 'civilstate' => 'required',
            // 'address' => 'required',
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $id = $this->route()->parameter(('id'));
            $rules['dni'] = ['required|min:2|numeric|unique:patients,id,' . $id];
        }
    }
}
