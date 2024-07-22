<?php

namespace App\Annotations\V1\Staff\Controllers\FlagTribute;

use App\Annotations\V1\Guest\Controllers\Controller;

class GetByIdFlagTribute extends Controller
{
    /**
     * @OA\Get(
     *      path="/flag-tribute/{id}",
     *      tags={"FlagTribute"},
     *      summary="Flag Tribute",
     *      description="Flag Tribute, get the points of specific user",
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          description="ID of user",
     *          required=true,
     *          @OA\Schema(
     *              type="integer",
     *              format="int64"
     *          )
     *      ),
     *       @OA\Response(
     *          response="200",
     *          description="OK",
     *          @OA\JsonContent(
    example= {
  "status": "success",
  "description": "OK",
  "data": {
    {
      "id": 2,
      "user_id": 4,
      "points": 10,
      "rank": 1,
      "created_at": "2024-07-22 07:00:21",
      "updated_at": "2024-07-22 07:00:21"
    }
}
}

     *          )
     *      ),
     *      @OA\Response(
     *          response="401",
     *          description="Unauthorized",
     *          @OA\JsonContent(
     *              example={
     *                  "status": "error",
     *                  "description": "Unauthorized"
     *              }
     *          )
     *      ),
     *      @OA\Response(
     *          response="403",
     *          description="Forbidden",
     *          @OA\JsonContent(
     *              example={
     *                  "status": "error",
     *                  "description": "Forbidden",
     *                  "errors": {
     *                      {
     *                          "code": 3004,
     *                          "message": "Staff inactive"
     *                      }
     *                  }
     *              }
     *          )
     *      )
     * )
     */


}
