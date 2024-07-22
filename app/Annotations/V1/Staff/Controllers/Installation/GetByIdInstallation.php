<?php

namespace App\Annotations\V1\Staff\Controllers\Lib_Installation;

use App\Annotations\V1\Guest\Controllers\Controller;

class GetByIdInstallation extends Controller
{
    /**
     * @OA\Get(
     *      path="/installation/{id}",
     *      tags={"Installation"},
     *      summary="Installation",
     *      description=" Installation",
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
