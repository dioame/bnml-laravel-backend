<?php

namespace App\Http\Controllers\Api\V1\Staff\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Staff\Auth\LoginRequest;
use App\Models\User;
use App\Services\V1\Staff\Auth\LoginService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\V1\Staff\User\GetUserByEmail;



class AuthController extends Controller
{
    public function login(LoginRequest $request, LoginService $service) // OtpService $otp_service
    {
        list($token, $user) = $service->execute($request->validated());
        // $otp_request = $user->tokens()->latest()->first();

        // $otp_status = $otp_service->execute($otp_request->otp, $user->mobile, $user);

        return response()->json([
            'status' => __('messages.success'),
            'description' => __('messages.200_ok'),
            'token' => $token,
        ]);
    }

    public function logout()
    {
        auth('sanctum')->user()->currentAccessToken()->delete();

        return response()->json([
            'status' => __('messages.success'),
            'description' => __('messages.200_ok')]);
    }

   
}
