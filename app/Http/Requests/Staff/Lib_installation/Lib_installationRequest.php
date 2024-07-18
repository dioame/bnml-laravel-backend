<?php

namespace App\Http\Requests\Staff\Lib_installation;

use App\Http\Requests\BaseRequest;

class Lib_installationRequest extends BaseRequest
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
            'name.required' => $code['3006'],
            'description.required' => $code['3007'],
        ];
    }
}
