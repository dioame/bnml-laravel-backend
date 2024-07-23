<?php

namespace App\Annotations\V1\Staff\Controllers\Directory;

use App\Annotations\V1\Guest\Controllers\Controller;

class GetDirectory extends Controller
{
   /**
     * @OA\Get(
     *      path="/directory",
     *      tags={"Directory"},
     *      summary="Directory",
     *      description=" Directory",
     *     @OA\Parameter(
     *          name="lib_directory_id",
     *          in="query",
     *          description="ID of Lib Directory",
     *          required=true,
     *          @OA\Schema(
     *              type="integer",
     *              format="int64"
     *          )
     *      ),
     *    @OA\Response(
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
    },
    {
      "id": 6,
      "file_id": null,
      "path": "http://bnml-laravel-backend.test/storage/photo/3KraolRfMEMDM3np3ITupVX0zMab9B0wopX6GAh0.png"
    },
    {
      "id": 7,
      "file_id": null,
      "path": "http://bnml-laravel-backend.test/storage/photo/ixvEDgxeKqViC3xNXNoSVCGm4IkKQrGbvXCwIyKx.png"
    }
}
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
