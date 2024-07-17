<?php

namespace App\Annotations\V1\Staff\Controllers\Lib_directory;

use App\Annotations\V1\Guest\Controllers\Controller;

class GetLibDirectory extends Controller
{
   /**
     * @OA\Get(
     *      path="/lib_directory",
     *      tags={"Lib Directory"},
     *      summary="library Directory",
     *      description="library Directory",
     *    @OA\Response(
     *          response="201",
     *          description="OK",
     *          @OA\JsonContent(
    example= {
  "status": "success",
  "description": "OK",
  "data": {
    {
      "id": 1,
      "name": "lib activities",
      "description": "lib description",
      "created_by": 1
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
