<?php

namespace App\Annotations\V1\Staff\Controllers\Attendance;

use App\Annotations\V1\Guest\Controllers\Controller;

class GetByAttendance extends Controller
{
    /**
     * @OA\Get(
     *      path="/attendance/{id}",
     *      tags={"Attendance"},
     *      summary="Attendance",
     *      description=" Attendance",
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          description="ID of Attendance",
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
      "id": 5,
      "file_id": null,
      "path": "http://bnml-laravel-backend.test/storage/photo/7WPx3nxv98L01YxZYXQkypnzNGBCtM8UIfJAtv8E.png"
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
