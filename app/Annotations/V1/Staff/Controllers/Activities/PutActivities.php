<?php

namespace App\Annotations\V1\Staff\Controllers\Activities;

use App\Annotations\V1\Guest\Controllers\Controller;

class PutActivities extends Controller
{
    /**
     * @OA\Put(
     *      path="/activities/{id}",
     *      tags={"Activities"},
     *      summary="Activities",
     *      description="Activities",
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          description="ID of Activities",
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
     *              property="lib_activity_id",
     *              description="lib_activity_id",
     *              title="lib_activity_id",
     *              type="number",
     *              example=1
     *          ),
     *          @OA\Property(
     *              property="start_date",
     *              description="start_date",
     *              title="start_date",
     *              type="date",
     *              example="2024-05-15 07:12:02"
     *          ),
     *          @OA\Property(
     *              property="end_date",
     *              description="end_date",
     *              title="end_date",
     *              type="date",
     *              example="2024-07-15 07:12:02"
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
