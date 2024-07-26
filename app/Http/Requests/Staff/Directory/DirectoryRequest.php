<?php

namespace App\Http\Requests\Staff\Directory;

use App\Http\Requests\BaseRequest;

class DirectoryRequest extends BaseRequest
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
            'file_id' => 'required',
            'file' => 'required|file|max:20480'
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        $code = $this->customCode();
        return [
            'file_id.required' => $code['3008'],
            'photo.required' => $code['3009'],
        ];
    }
}
