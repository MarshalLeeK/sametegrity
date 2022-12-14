<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class loginrequest extends FormRequest
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
            'username' => 'required',
            'password' => 'required'
        ];
    }

    public function getCredentials()
    {
        $username = $this->get('username');
        $password = bcrypt($this->get('password'));

        if ($this->isMail($username)) {
            return array('email' => $username, 'password' => $password);
        }
        return array('username' => $username, 'password' => $password);
    }

    public function isMail($username)
    {

        $factory = $this->container->make(ValidationFactory::class);
        return !$factory->make(['username' => $username], ['username' => 'email'])->fails();
    }
}
