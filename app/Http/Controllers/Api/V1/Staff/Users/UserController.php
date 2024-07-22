<?php

namespace App\Http\Controllers\Api\V1\Staff\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Services\V1\Staff\Users\UserService;
use App\Services\V1\Staff\Users\UserServiceBy;
use App\Services\V1\Staff\Users\UserServiceByEmail;
use App\Services\V1\Staff\Users\UserServiceByTerm;
use App\Services\V1\Staff\Users\UserLoginEmailService;
use App\Http\Resources\Staff\Users\UserCollection;
use App\Http\Resources\Staff\Users\UserResource;
use App\Http\Resources\Staff\Users\UserResourceTerm;
use App\Http\Resources\Staff\Users\UserResourceTermCollection;
use App\Http\Requests\Staff\User\PutUserRequest;



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

    public function update(PutUserRequest $request, UserService $service){
        $result = $service->executeUpdate($request->all());

        return response()->json([
            'status' => __('messages.success'),
            'description' => __('messages.200_ok'),
        ], 200);
    }

    public function destroy(){
        $user = Auth::User();
        $user->delete();

        return response()->json([
            'status' => __('messages.success'),
            'description' => __('messages.200_ok'),
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

    public function loginByEmailPairToken(UserLoginEmailService $service,Request $request){
        $laravel_token = config('app.google_nextjs_laravel_token');
        if($laravel_token == $request->pair_token){
            list($token, $user) = $service->execute($request->all());
            return response()->json([
                'status' => __('messages.success'),
                'description' => __('messages.200_ok'),
                'token' => $token,
            ]);
        }else{
            return response()->json([
                'status' => __('messages.error'),
                'description' => __('messages.401_unauthorized'),
            ],401);
        }      
      
    }

    public function getUserByTerm(UserServiceByTerm $service, Request $request){
        $result = $service->execute($request->term);
        return new UserResourceTermCollection($result);
    }
}
