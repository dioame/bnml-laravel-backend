<?php

namespace App\Annotations\V1\Staff\Controllers\Directory;

use App\Annotations\V1\Guest\Controllers\Controller;

class PostDirectory extends Controller
{
   /**
     * @OA\Post(
     *      path="/directory",
     *      tags={"Directory"},
     *      summary="directory",
     *      description="directory",
     * @OA\RequestBody(
     *      required=true,
     *      description="",
     *      @OA\MediaType(
     *          mediaType="multipart/form-data",
     *          @OA\Schema(
     *              type="object",
     *          @OA\Property(
     *              property="file_id",
     *              description="file_id",
     *              title="file_id",
     *              type="number",
     *              example=1
     *          ),
     * @OA\Property(
     *              property="name",
     *              description="name",
     *              title="name",
     *              type="string",
     *              example="name"
     *          ),
     * @OA\Property(
     *              property="description",
     *              description="description",
     *              title="description",
     *              type="string",
     *              example="description"
     *          ),
     *          @OA\Property(
     *              property="file",
     *              description="file",
     *              title="photo",
     *              type="file"
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
