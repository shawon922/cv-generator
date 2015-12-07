<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegistrationRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|min:6|max:100',
            'last_name' => 'required|min:6|max:100',
            'username' => 'required|min:6|max:60|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ];
    }
}
