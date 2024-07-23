<?php

namespace App\Annotations\V1\Staff\Controllers\User;

use App\Annotations\V1\Staff\Controllers\Controller;

class GetOfficersController extends Controller
{
   /**
     * @OA\Get(
     *      path="/user/officers",
     *      tags={"User"},
     *      summary="Get all user officers",
     *      description="Get all user officers",
     *    @OA\Response(
     *          response="200",
     *          description="OK",
     *          @OA\JsonContent(
    example= {}
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
