<?php

namespace App\Annotations\V1\Staff\Controllers\Meetings;

use App\Annotations\V1\Staff\Controllers\Controller;

class GetStatedMeeting extends Controller
{
   /**
     * @OA\Get(
     *      path="/meeting/stated-meeting/points",
     *      tags={"Meeting"},
     *      summary="Stated Meeting points",
     *      description=" Stated Meeting points",
     *    @OA\Response(
     *          response="200",
     *          description="OK",
     *          @OA\JsonContent(
    example= {
  "status": "success",
  "description": "OK",
  "data": {
    {
      "user_id": 1,
      "activities": {
        {
          "id": 1,
          "lib_activity_id": 1,
          "start_date": "2024-01-15",
          "end_date": "2024-01-15",
          "created_at": "2024-07-18T15:21:46.000000Z",
          "updated_at": "2024-07-18T15:21:46.000000Z",
          "deleted_at": null,
          "month": "January"
        },
        {
          "id": 2,
          "lib_activity_id": 1,
          "start_date": "2024-02-15",
          "end_date": "2024-02-15",
          "created_at": "2024-07-18T15:22:09.000000Z",
          "updated_at": "2024-07-18T15:22:09.000000Z",
          "deleted_at": null,
          "month": "February"
        },
        {
          "id": 4,
          "lib_activity_id": 1,
          "start_date": "2024-03-15",
          "end_date": "2024-03-15",
          "created_at": "2024-07-18T15:22:36.000000Z",
          "updated_at": "2024-07-18T15:22:36.000000Z",
          "deleted_at": null,
          "month": "March"
        },
        {
          "id": 5,
          "lib_activity_id": 1,
          "start_date": "2024-04-15",
          "end_date": "2024-04-15",
          "created_at": "2024-07-18T15:22:45.000000Z",
          "updated_at": "2024-07-18T15:22:45.000000Z",
          "deleted_at": null,
          "month": "April"
        }
},
      "points": 20
    },
    {
      "user_id": 2,
      "activities": {
        {
          "id": 1,
          "lib_activity_id": 1,
          "start_date": "2024-01-15",
          "end_date": "2024-01-15",
          "created_at": "2024-07-18T15:21:46.000000Z",
          "updated_at": "2024-07-18T15:21:46.000000Z",
          "deleted_at": null,
          "month": "January"
        }
},
      "points": 5
    },
    {
      "user_id": 3,
      "activities": {
        {
          "id": 1,
          "lib_activity_id": 1,
          "start_date": "2024-01-15",
          "end_date": "2024-01-15",
          "created_at": "2024-07-18T15:21:46.000000Z",
          "updated_at": "2024-07-18T15:21:46.000000Z",
          "deleted_at": null,
          "month": "January"
        },
        {
          "id": 4,
          "lib_activity_id": 1,
          "start_date": "2024-03-15",
          "end_date": "2024-03-15",
          "created_at": "2024-07-18T15:22:36.000000Z",
          "updated_at": "2024-07-18T15:22:36.000000Z",
          "deleted_at": null,
          "month": "March"
        },
        {
          "id": 5,
          "lib_activity_id": 1,
          "start_date": "2024-04-15",
          "end_date": "2024-04-15",
          "created_at": "2024-07-18T15:22:45.000000Z",
          "updated_at": "2024-07-18T15:22:45.000000Z",
          "deleted_at": null,
          "month": "April"
        }
},
      "points": 15
    },
    {
      "user_id": 4,
      "activities": {
        {
          "id": 1,
          "lib_activity_id": 1,
          "start_date": "2024-01-15",
          "end_date": "2024-01-15",
          "created_at": "2024-07-18T15:21:46.000000Z",
          "updated_at": "2024-07-18T15:21:46.000000Z",
          "deleted_at": null,
          "month": "January"
        }
},
      "points": 5
    },
    {
      "user_id": 5,
      "activities": {
        {
          "id": 1,
          "lib_activity_id": 1,
          "start_date": "2024-01-15",
          "end_date": "2024-01-15",
          "created_at": "2024-07-18T15:21:46.000000Z",
          "updated_at": "2024-07-18T15:21:46.000000Z",
          "deleted_at": null,
          "month": "January"
        }
},
      "points": 5
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
