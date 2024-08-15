<?php

namespace App\Http\Requests\Staff\User;

use App\Http\Requests\BaseRequest;

class PostUserRequest extends BaseRequest
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
            "firstname" => 'required',
            "middlename" => 'required',
            "lastname" => 'required',
            "extensionname" => 'required',
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
            'firstname.required' => $code['30016'],
            'middlename.required' => $code['30017'],
            'lastname.required' => $code['30018'],
            'extensionname.required' => $code['30019'],
            'birth_date.required' => $code['30020'],
            'address.required' => $code['30021'],
            'gender.required' => $code['30022'],
            'mobile.required' => $code['30023'],
            'role.required' => $code['30024'],
        ];
    }
}
