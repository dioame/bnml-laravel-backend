<?php

namespace App\Annotations\V1\Staff\Controllers\Installation;

use App\Annotations\V1\Staff\Controllers\Controller;

class InstallationPoints extends Controller
{
   /**
     * @OA\Get(
     *      path="/installation/points",
     *      tags={"Installation"},
     *      summary="User Installation points",
     *      description=" Installation",
     *    @OA\Response(
     *          response="200",
     *          description="OK",
     *          @OA\JsonContent(
    example= {
  "status": "success",
  "description": "OK",
  "data": {
    {
      "user_id": 11,
      "installation": {
        {
          "id": 1,
          "user_id": 11,
          "installation_id": 1,
          "created_at": "2024-07-21T09:10:07.000000Z",
          "updated_at": "2024-07-21T09:10:07.000000Z"
        },
        {
          "id": 2,
          "user_id": 11,
          "installation_id": 3,
          "created_at": "2024-07-21T09:10:11.000000Z",
          "updated_at": "2024-07-21T09:10:11.000000Z"
        },
        {
          "id": 3,
          "user_id": 11,
          "installation_id": 4,
          "created_at": "2024-07-21T09:10:16.000000Z",
          "updated_at": "2024-07-21T09:10:16.000000Z"
        },
        {
          "id": 4,
          "user_id": 11,
          "installation_id": 7,
          "created_at": "2024-07-21T09:10:18.000000Z",
          "updated_at": "2024-07-21T09:10:18.000000Z"
        }
},
      "points": 8
    },
    {
      "user_id": 2,
      "installation": {
        {
          "id": 5,
          "user_id": 2,
          "installation_id": 7,
          "created_at": "2024-07-21T12:18:10.000000Z",
          "updated_at": "2024-07-21T12:18:10.000000Z"
        },
        {
          "id": 6,
          "user_id": 2,
          "installation_id": 10,
          "created_at": "2024-07-21T12:18:13.000000Z",
          "updated_at": "2024-07-21T12:18:13.000000Z"
        }
},
      "points": 4
    },
    {
      "user_id": 1,
      "installation": {
        {
          "id": 7,
          "user_id": 1,
          "installation_id": 1,
          "created_at": "2024-07-21T12:18:19.000000Z",
          "updated_at": "2024-07-21T12:18:19.000000Z"
        },
        {
          "id": 8,
          "user_id": 1,
          "installation_id": 3,
          "created_at": "2024-07-21T12:18:21.000000Z",
          "updated_at": "2024-07-21T12:18:21.000000Z"
        },
        {
          "id": 9,
          "user_id": 1,
          "installation_id": 5,
          "created_at": "2024-07-21T12:18:25.000000Z",
          "updated_at": "2024-07-21T12:18:25.000000Z"
        },
        {
          "id": 10,
          "user_id": 1,
          "installation_id": 6,
          "created_at": "2024-07-21T12:18:29.000000Z",
          "updated_at": "2024-07-21T12:18:29.000000Z"
        },
        {
          "id": 11,
          "user_id": 1,
          "installation_id": 7,
          "created_at": "2024-07-21T12:18:31.000000Z",
          "updated_at": "2024-07-21T12:18:31.000000Z"
        }
},
      "points": 10
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
