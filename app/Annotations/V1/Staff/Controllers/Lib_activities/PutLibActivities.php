<?php

namespace App\Annotations\V1\Staff\Controllers\Lib_activities;

use App\Annotations\V1\Guest\Controllers\Controller;

class PutLibActivities extends Controller
{
    /**
     * @OA\Put(
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
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(
     *                  type="object",
     *                  @OA\Property(
     *                      property="name",
     *                      description="name",
     *                      title="name",
     *                      type="string",
     *                      example="lib activities update"
     *                  ),
     *                  @OA\Property(
     *                      property="description",
     *                      description="description",
     *                      title="description",
     *                      type="string",
     *                      example="lib description update"
     *                  )
     *              )
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
