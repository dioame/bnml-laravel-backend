<?php

namespace App\Annotations\V1\Staff\Controllers\User;

use App\Annotations\V1\Guest\Controllers\Controller;

class DeleteUserByIdController extends Controller
{
    /**
     * @OA\Delete(
     *      path="/user/{id}",
     *      tags={"User"},
     *      summary="Delete user account",
     *      description="Delete  user account",
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          description="ID of User",
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
