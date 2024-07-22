<?php

namespace App\Annotations\V1\Staff\Controllers\FlagTribute;

use App\Annotations\V1\Guest\Controllers\Controller;

class PostFlagTribute extends Controller
{
   /**
     * @OA\Post(
     *      path="/flag-tribute",
     *      tags={"FlagTribute"},
     *      summary="Flag Tribute, Add points of a user every storing a points",
     *      description="Flag Tribute",
     *@OA\RequestBody(
     *          required=true,
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(
     *                  type="object",
     *                  @OA\Property(
     *                      property="user_id",
     *                      description="user id",
     *                      title="user id",
     *                      type="number",
     *                      example=1
     *                  ),
     *                  @OA\Property(
     *                      property="points",
     *                      description="points",
     *                      title="points",
     *                      type="number",
     *                      example=10
     *                  )
     *              )
     *          )
     *      ),
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
