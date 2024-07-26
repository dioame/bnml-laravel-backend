<?php

namespace App\Http\Requests\Staff\FlagTribute;

use App\Http\Requests\BaseRequest;
use Illuminate\Validation\Validator;
use App\Models\FlagTribute;


class PutFlagTributeRequest extends BaseRequest
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
            'points' => 'required'
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        $code = $this->customCode();
        return [
            'points.required' => $code['30025'],
        ];
    }

    // public function withValidator(Validator $validator)
    // {
    //     $validator->after(function ($validator) {
    //         $user_id = $this->input('user_id');


    //         $exist = FlagTribute::where('user_id', $user_id)->exists();

    //         if($exist){
    //             $this->error422([
    //                 'code' => 3038,
    //                 'message' => __('user/errors.3038')
    //             ]);
    //         }

    //     });
    // }

}
