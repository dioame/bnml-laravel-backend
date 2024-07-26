<?php

namespace App\Annotations\V1\Guest\Controllers\Installation;

use App\Annotations\V1\Guest\Controllers\Controller;

class InstallationPoints extends Controller
{
   /**
     * @OA\Get(
     *      path="/installation/points",
     *      tags={"Installation"},
     *      summary="My Installation points",
     *      description=" Installation",
     *    @OA\Response(
     *          response="200",
     *          description="OK",
     *          @OA\JsonContent(
    example= {
  "status": "success",
  "description": "OK",
  "data": {
    "installation": {
      {
        "id": 1,
        "user": 11,
        "installation_id": 1,
        "created_at": "2024-07-21T09:10:07.000000Z",
        "updated_at": "2024-07-21T09:10:07.000000Z"
      },
      {
        "id": 2,
        "user": 11,
        "installation_id": 3,
        "created_at": "2024-07-21T09:10:11.000000Z",
        "updated_at": "2024-07-21T09:10:11.000000Z"
      },
      {
        "id": 3,
        "user": 11,
        "installation_id": 4,
        "created_at": "2024-07-21T09:10:16.000000Z",
        "updated_at": "2024-07-21T09:10:16.000000Z"
      },
      {
        "id": 4,
        "user": 11,
        "installation_id": 7,
        "created_at": "2024-07-21T09:10:18.000000Z",
        "updated_at": "2024-07-21T09:10:18.000000Z"
      }
},
    "points": 8
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
