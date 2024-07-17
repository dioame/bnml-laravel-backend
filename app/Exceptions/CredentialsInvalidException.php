<?php

namespace App\Exceptions;

use Exception;

class CredentialsInvalidException extends Exception
{
    /**
     * Report the exception.
     *
     * @return bool|null
     */
    public function report()
    {
        //
    }

    /**
     * @param $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function render($request)
    {
        $namePrefix = $request->route()->getPrefix();

        $type = [
            'user' => 3005
        ];

        // $role = str_contains($namePrefix, 'api/v1/staff') ? 'staff' : 'customer';
        $role = 'user';
        $userType = $type[$role];

        return response()->json([
            'status' => __('messages.error'),
            'description' => __('messages.401_unauthorized'),
            'errors' => [
                [
                    'code' => $userType,
                    'message' => __($role .'/errors.' . $userType)
                ]
            ]
        ], 401);
    }
}
