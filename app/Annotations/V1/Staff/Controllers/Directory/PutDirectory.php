<?php

namespace App\Annotations\V1\Staff\Controllers\Directory;

use App\Annotations\V1\Guest\Controllers\Controller;

class PutDirectory extends Controller
{
    /**
     * @OA\Post(
     *      path="/directory/{id}/update",
     *      tags={"Directory"},
     *      summary="Directory",
     *      description="Directory",
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          description="ID of lib Directory",
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
     *          mediaType="multipart/form-data",
     *          @OA\Schema(
     *              type="object",
     *              @OA\Property(
     *              property="file_id",
     *              description="file_id",
     *              title="file_id",
     *              type="number",
     *              example="1"
     *          ),
     *          @OA\Property(
     *              property="file",
     *              description="file",
     *              title="photo",
     *              type="file"
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
