<?php

namespace App\Annotations\V1\Staff\Controllers\Lib_directory;

use App\Annotations\V1\Guest\Controllers\Controller;

class PostLibDirectory extends Controller
{
   /**
     * @OA\Post(
     *      path="/lib_directory",
     *      tags={"Lib Directory"},
     *      summary="library directory",
     *      description="library directory",
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
     *              example="lib directory"
     *          ),
     *          @OA\Property(
     *              property="description",
     *              description="description",
     *              title="description",
     *              type="string",
     *              example="lib directory"
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
