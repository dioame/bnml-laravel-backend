<?php

namespace App\Annotations\V1\Staff\Controllers\User;

use App\Annotations\V1\Staff\Controllers\Controller;

class GetPetitionersController extends Controller
{
   /**
     * @OA\Get(
     *      path="/user/petitioners",
     *      tags={"User"},
     *      summary="Get all user petitioners",
     *      description="Get all user petitioners",
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
