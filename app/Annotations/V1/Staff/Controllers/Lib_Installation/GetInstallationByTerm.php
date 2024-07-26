<?php

namespace App\Annotations\V1\Staff\Controllers\Lib_Installation;

use App\Annotations\V1\Staff\Controllers\Controller;

class GetInstallationByTerm extends Controller
{
    /**
     * @OA\Get(
     *      path="/lib_installation/search",
     *      tags={"Library Installation"},
     *      summary="Installation",
     *      description="Lib Installation",
     *      @OA\Parameter(
     *          name="term",
     *          in="query",
     *          description="Term of Lib Installation",
     *          required=true,
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
