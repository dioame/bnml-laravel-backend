<?php

namespace App\Annotations\V1\Staff\Controllers\Attendance;

use App\Annotations\V1\Guest\Controllers\Controller;

class GetByAttendance extends Controller
{
    /**
     * @OA\Get(
     *      path="/attendance/activity/{id}",
     *      tags={"Attendance"},
     *      summary="Attendance",
     *      description=" Attendance",
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          description="Activity Id of Attendance",
     *          required=true,
     *      ),
     *       @OA\Response(
     *          response="200",
     *          description="OK",
     *          @OA\JsonContent(
    example= {
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
