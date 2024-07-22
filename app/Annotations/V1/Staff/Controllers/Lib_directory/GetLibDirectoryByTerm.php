<?php

namespace App\Annotations\V1\Staff\Controllers\Lib_directory;

use App\Annotations\V1\Guest\Controllers\Controller;

class GetLibDirectoryByTerm extends Controller
{
    /**
     * @OA\Get(
     *      path="/lib_directory/search",
     *      tags={"Lib Directory"},
     *      summary="library Directory",
     *      description="library Directory",
     *      @OA\Parameter(
     *          name="term",
     *          in="query",
     *          description="Term of lib Directory",
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
