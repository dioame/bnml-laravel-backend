<?php

namespace App\Annotations\V1\Staff\Controllers\FlagTribute;

use App\Annotations\V1\Guest\Controllers\Controller;

class DeleteFlagTribute extends Controller
{
    /**
     * @OA\Delete(
     *      path="/flag-tribute/{id}",
     *      tags={"FlagTribute"},
     *      summary="Flag Tribute",
     *      description="Flag Tribute, delete the points of a user",
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          description="ID of user id",
     *          required=true,
     *          @OA\Schema(
     *              type="integer",
     *              format="int64"
     *          )
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="OK",
     *          @OA\JsonContent(
     *              example={
     *                  "status": "success",
     *                  "description": "ok"
     *              }
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
