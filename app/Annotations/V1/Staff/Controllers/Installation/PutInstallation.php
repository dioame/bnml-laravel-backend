<?php

namespace App\Annotations\V1\Staff\Controllers\Installation;

use App\Annotations\V1\Guest\Controllers\Controller;

class PutInstallation extends Controller
{
    /**
     * @OA\Put(
     *      path="/installation/{id}",
     *      tags={"Installation"},
     *      summary="Installation",
     *      description="Installation",
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          description="ID of Installation",
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
     *              property="lib_installation_id",
     *              description="lib_installation_id",
     *              title="lib_installation_id",
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
