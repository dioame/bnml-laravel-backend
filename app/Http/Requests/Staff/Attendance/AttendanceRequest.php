<?php

namespace App\Http\Requests\Staff\Attendance;

use App\Http\Requests\BaseRequest;

class AttendanceRequest extends BaseRequest
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
            'user_id' => 'required',
            'activity_id' => 'required'
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        $code = $this->customCode();
        return [
            'user_id.required' => $code['30013'],
            'activity_id.required' => $code['30015'],
        ];
    }
}
