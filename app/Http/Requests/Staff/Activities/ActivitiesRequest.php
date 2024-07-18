<?php

namespace App\Http\Requests\Staff\Activities;

use App\Http\Requests\BaseRequest;

class ActivitiesRequest extends BaseRequest
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
            'lib_activity_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        $code = $this->customCode();
        return [
            'lib_activities_id.required' => $code['30010'],
            'start_date.required' => $code['30011'],
            'end_date.required' => $code['30012'],
        ];
    }
}
