<?php

namespace App\Http\Requests\Staff\Lib_activities;

use App\Http\Requests\BaseRequest;

class LibActivitiesRequest extends BaseRequest
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
            'name' => 'required',
            'description' => 'required'
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        $code = $this->customCode();
        return [
            'email.required' => $code['3006'],
            'password.required' => $code['3007'],
        ];
    }
}
