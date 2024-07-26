<?php

namespace App\Annotations\V1\Guest\Controllers\User;

use App\Annotations\V1\Guest\Controllers\Controller;

class UserController extends Controller
{
   /**
     * @OA\Get(
     *      path="/user",
     *      tags={"User"},
     *      summary="Guest User",
     *      description="Returns user details including first name, middle name, last name, birth date, email, and mobile number.",
     *    @OA\Response(
     *          response="200",
     *          description="OK",
     *          @OA\JsonContent(
    example= {
  "status": "success",
  "description": "OK",
  "data": {
    "id": 11,
    "firstname": "test1",
    "middlename": "test2",
    "lastname": "test3",
    "extensionname": "test3",
    "birth_date": "1990-01-01",
    "email": "test@test.com",
    "mobile": "+639000000000",
    "address": "test address",
    "role": "labor"
  }
}
     *          )
     *      ),
     *     @OA\Response(
     *          response="401",
     *          description="Unauthorized",
     *          @OA\JsonContent(
    example= {
    "status": "error",
    "description": "Unauthorized"
    },
     *          )
     *      ),
     *     @OA\Response(
     *          response="403",
     *          description="Forbidden",
     *          @OA\JsonContent(
     *                  example= {
    "status": "error",
    "description": "Forbidden",
    "errors": {
    {
    "code": 3004,
    "message": "Staff inactive"
    },
    }
    },
     *          )
     *      ),
     * )
     */

}
