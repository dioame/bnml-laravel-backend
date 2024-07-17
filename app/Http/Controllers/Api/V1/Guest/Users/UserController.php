<?php

namespace App\Http\Controllers\Api\V1\Guest\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\V1\Guest\Signup\SignupService;
use App\Http\Resources\Guest\Users\UserResource;


class UserController extends Controller
{
    public function index(){
        $user = Auth::User();

        $data = new UserResource($user);
        return [
            'status' => __('messages.success'),
            'description' => __('messages.200_ok'),
            'data' => $data,
        ];
    }
}
