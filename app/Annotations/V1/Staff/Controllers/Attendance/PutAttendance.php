<?php

namespace App\Annotations\V1\Staff\Controllers\Attendance;

use App\Annotations\V1\Guest\Controllers\Controller;

class PutAttendance extends Controller
{
    /**
     * @OA\Put(
     *      path="/attendance/{id}",
     *      tags={"Attendance"},
     *      summary="Attendance",
     *      description="Attendance",
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
     *      @OA\RequestBody(
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
     *              example=2
     *          )
     *          )
     *      )
     *     ),
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
