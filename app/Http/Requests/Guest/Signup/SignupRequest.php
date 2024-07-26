<?php

namespace App\Http\Requests\Guest\Signup;

use App\Http\Requests\BaseRequest;

class SignupRequest extends BaseRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            "firstname" => 'required',
            "lastname" => 'required',
            "birth_date" => 'required',
            "address" => 'required',
            "gender" => 'required',
            "mobile" => 'required',
            "role" => 'required',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        $code = $this->customCode();

        return [
            'email.required' => $code['3001'],
            'email.email' => $code['3002'],
            'email.unique' => $code['3004'],
            'password.required' => $code['3003'],
        ];
    }
}
