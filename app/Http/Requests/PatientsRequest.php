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
//
            'dni'=>'required',
            'name'=>'required|min:3',
            'lastname'=>'required|min:3',
            'borndate'=>'required',
            'z_xOne'=>'required'
        ];
    }
}

/** 
 * 'fk_borncity',
*'fk_range', 
*'fk_eps', 
*'dni',
*'name',
*'lastname',
*'gender', 
*'borndate',
*'age',
*'civilsate',
*'academiclevel',
*'occupation',
*'address',
*'city',
*'zone',
*'country',
*'phone',
*'cellphone',
*'email',
*'emailfa',
*'documenttype',
*'documentplace', 
*'z_xOne'
*/