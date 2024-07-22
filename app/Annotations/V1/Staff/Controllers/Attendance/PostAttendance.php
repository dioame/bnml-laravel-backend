<?php

namespace App\Annotations\V1\Staff\Controllers\Attendance;

use App\Annotations\V1\Guest\Controllers\Controller;

class PostAttendance extends Controller
{
   /**
     * @OA\Post(
     *      path="/attendance",
     *      tags={"Attendance"},
     *      summary="Attendance",
     *      description="Attendance",
     * @OA\RequestBody(
     *      required=true,
     *      description="",
     *      @OA\MediaType(
     *          mediaType="application/json",
     *          @OA\Schema(
     *              type="object",
     *              @OA\Property(
     *              property="user_id",
     *              description="user_id",
     *              title="user_id",
     *              type="number",
     *              example=1
     *          ),
     *          @OA\Property(
     *              property="activity_id",
     *              description="activity_id",
     *              title="activity_id",
     *              type="number",
     *              example=1
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
