<?php

namespace App\Annotations\V1\Staff\Controllers\Lib_directory;

use App\Annotations\V1\Guest\Controllers\Controller;

class GetLibDirectoryByTerm extends Controller
{
    /**
     * @OA\Get(
     *      path="/activity/search/{lib_activity_id}",
     *      tags={"Activities"},
     *      summary="Activities",
     *      description="Activities",
     *      @OA\Parameter(
     *          name="lib_activity_id",
     *          in="path",
     *          description="Lib Activity Id",
     *      ),
     *      @OA\Parameter(
     *          name="term",
     *          in="query",
     *          description="Term of Activities",
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
