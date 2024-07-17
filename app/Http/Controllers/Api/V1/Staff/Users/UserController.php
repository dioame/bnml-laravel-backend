<?php

namespace App\Http\Controllers\Api\V1\Staff\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\V1\Staff\Users\UserService;
use App\Services\V1\Staff\Users\UserServiceBy;
use App\Services\V1\Staff\Users\UserServiceByEmail;
use App\Http\Resources\Staff\Users\UserCollection;
use App\Http\Resources\Staff\Users\UserResource;


class UserController extends Controller
{
    public function index(UserService $service){
        $result = $service->execute();

        return new UserCollection($result);
    }

    public function show(UserServiceBy $service, $id){
        $result = $service->execute($id);
        return new UserResource($result);

        return response()->json([
            'status' => __('messages.success'),
            'description' => __('messages.200_ok'),
            'data' => $result ? new UserResource($result) : []
        ], 200);
    }

    public function getUserByEmail(UserServiceByEmail $service, $email_address){
        $result = $service->execute($email_address);
        return response()->json([
            'status' => __('messages.success'),
            'description' => __('messages.200_ok'),
            'data' => $result ? new UserResource($result) : []
        ], 200);

    }
}
