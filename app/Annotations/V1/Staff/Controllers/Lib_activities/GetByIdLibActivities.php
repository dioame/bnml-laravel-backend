<?php

namespace App\Annotations\V1\Staff\Controllers\Lib_activities;

use App\Annotations\V1\Guest\Controllers\Controller;

class GetByIdLibActivities extends Controller
{
    /**
     * @OA\Get(
     *      path="/lib_activities/{id}",
     *      tags={"Lib Activities"},
     *      summary="library activities",
     *      description="library activities",
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          description="ID of lib activities",
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
      "id": 1,
      "name": "lib activities",
      "description": "lib description",
      "created_by": 1
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
