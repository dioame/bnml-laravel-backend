<?php

namespace App\Annotations\V1\Staff\Controllers\Lib_activities;

use App\Annotations\V1\Guest\Controllers\Controller;

class PostLibActivities extends Controller
{
   /**
     * @OA\Post(
     *      path="/lib_activities",
     *      tags={"Lib Activities"},
     *      summary="library activities",
     *      description="library activities",
     * @OA\RequestBody(
     *      required=true,
     *      description="",
     *      @OA\MediaType(
     *          mediaType="multipart/form-data",
     *          @OA\Schema(
     *              type="object",
     *              @OA\Property(
     *              property="name",
     *              description="name",
     *              title="name",
     *              type="string",
     *              example="lib activities"
     *          ),
     *          @OA\Property(
     *              property="description",
     *              description="description",
     *              title="description",
     *              type="string",
     *              example="lib description"
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
