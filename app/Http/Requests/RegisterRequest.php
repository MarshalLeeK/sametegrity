<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'=>'required|min:3',
            'lastname'=>'required|min:3',
            'dni'=>'required|unique:users,dni',
            'privilegeSet'=>'required',
            'email'=>'unique:users,email',
            'username'=>'required|unique:users,username',
            'password'=>'required|min:6',
            'password_confirmation'=>'required|same:password',
        ];
    }

    public function attributes()
    {
        return[
            'password'=>'Contraseña',
            'password_confirmation'=>'Confirmación Contraseña'
        ];
    }
}
