<?php

namespace App\Http\Controllers\Api\V1\Guest\Signup;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Requests\Guest\Signup\SignupRequest;
use App\Services\V1\Guest\Signup\SignupService;
// use App\Http\Requests\Guest\Photo\PhotoRequest;
// use App\Services\V1\Guest\Signup\SignUpOtpService;
// use App\Services\V1\Guest\Auth\OtpService;

class SignupController extends Controller
{
    public function store(SignupRequest $request, SignupService $service) // OtpService $otp_service 
    {

        list($token, $user) = $service->execute($request->all());
        // $otp_request = $user->tokens()->latest()->first();

        // $otp_status = $otp_service->execute($otp_request->otp, $user->mobile, $user);
        return response()->json([
            'status' => __('messages.success'),
            'description' => __('messages.200_ok'),
            'token' => $token,
        ], 201);
    }

    // public function store_photo(PhotoRequest $request, PostSignupService $service){
    //     $result = $service->execute_photo($request->all());

    //     if(is_null($result)){
    //         return response()->json([
    //             'status' => __('messages.error'),
    //             'description' => __('messages.404_not_found'),
    //             'errors' => [
    //                 'code' => 3105,
    //                 'message' => __('user/errors.3105')
    //             ]
    //         ], 422);
    //     }

    //     return response()->json([
    //         'status' => __('messages.success'),
    //         'description' => __('messages.200_ok')
    //     ], 201);
    // }
}
