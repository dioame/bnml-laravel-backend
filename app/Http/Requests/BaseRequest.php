<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;

abstract class BaseRequest extends FormRequest
{
    protected $model;

    protected array $errors = [];

    public array $data = [];

    /**
     * @param Validator $validator
     */
    public function failedValidation(Validator $validator)
    {
        foreach ($validator->errors()->get('*') as $key => $fieldError) {

            foreach ($fieldError as $error) {
                $code = array_search($error, $this->customCode());

                $field = explode('.', $key);
                $data = [
                    'field' => $field[0],
                    'code' => $code != false ? $code : 5001,
                    'message' => $error
                ];

                if (count($field) > 1 && !is_numeric($field)) {
                    if(!is_numeric($field['1'])){
                        $data['language'] = $field['1'];
                    }  
                }

                $this->errors[] = $data;
            }
        }

        throw new HttpResponseException(
            response()->json([
                'status' => __('messages.error'),
                'description' => __('messages.422_unprocessable_entry'),
                'errors' => $this->errors,
            ], 422)
        );
    }

    public function error400($message)
    {
        throw new HttpResponseException(response()->json([
            'status' => __('messages.error'),
            'description' => __('messages.400_bad_request'),
            'errors' => [$message]
        ], Response::HTTP_BAD_REQUEST));
    }

    public function error422($message)
    {
        throw new HttpResponseException(response()->json([
            'status' => __('messages.error'),
            'description' => __('messages.422_unprocessable_entry'),
            'errors' => [$message]
        ], Response::HTTP_UNPROCESSABLE_ENTITY));
    }

    public function error404()
    {
        throw new HttpResponseException(response()->json([
            'status' => __('messages.error'),
            'description' => __('messages.404_not_found')
        ], Response::HTTP_NOT_FOUND));
    }

    protected function customCode()
    {
        $namePrefix = request()->route()->uri;

        // $type = 'customer';
        // if(str_contains($namePrefix, 'api/v1/staff')){
        //     $type = "staff";
        // }else if(str_contains($namePrefix, 'api/v1/customer')){
        //     $type = "customer";
        // }else if(str_contains($namePrefix, 'api/v1/subscriber')){
        //     $type = "subscriber";
        // }
        return __('user/errors');
    }
}
