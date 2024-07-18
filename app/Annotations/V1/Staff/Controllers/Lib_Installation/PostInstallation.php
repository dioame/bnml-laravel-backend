<?php

namespace App\Annotations\V1\Staff\Controllers\Lib_Installation;

use App\Annotations\V1\Guest\Controllers\Controller;

class PostInstallation extends Controller
{
   /**
     * @OA\Post(
     *      path="/lib_installation",
     *      tags={"Library Installation"},
     *      summary="Library Installation",
     *      description="Library Installation",
     * @OA\RequestBody(
     *      required=true,
     *      description="",
     *      @OA\MediaType(
     *          mediaType="application/json",
     *          @OA\Schema(
     *              type="object",
     *              @OA\Property(
     *              property="name",
     *              description="name",
     *              title="name",
     *              type="string",
     *              example="name"
     *          ),
     *          @OA\Property(
     *              property="description",
     *              description="description",
     *              title="description",
     *              type="string"
     *          )
     *          )
     *      )
     *     ),
     *    @OA\Response(
     *          response="200",
     *          description="OK",
     *          @OA\JsonContent(
    example= {
  "status": "success",
  "description": "Created"
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
