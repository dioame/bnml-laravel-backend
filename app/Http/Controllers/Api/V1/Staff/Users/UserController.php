<?php

namespace App\Http\Controllers\Api\V1\Staff\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\V1\Staff\Users\UserService;
use App\Services\V1\Staff\Users\UserServiceBy;
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
    }
}
