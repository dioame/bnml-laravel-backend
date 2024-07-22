<?php

namespace App\Http\Requests\Staff\Auth;

use App\Http\Requests\BaseRequest;

class LoginRequest extends BaseRequest
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
            'email' => 'required|email',
            'password' => 'required'
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
            'password.required' => $code['3003'],
        ];
    }
}
