<?php

namespace App\Annotations\V1\Staff\Controllers\SummaryPoints;

use App\Annotations\V1\Staff\Controllers\Controller;

class GetUserSummaryPoints extends Controller
{
   /**
     * @OA\Get(
     *      path="/overall-summary/points",
     *      tags={"SUMMARY POINTS"},
     *      summary="SUMMARY points",
     *      description=" SUMMARY points",
     *    @OA\Response(
     *          response="200",
     *          description="OK",
     *          @OA\JsonContent(
    example= 	
{
  "status": "success",
  "description": "OK",
  "data": {
    {
      "id": 1,
      "name": "Marianna F Kohler",
      "stated_meeting_points": 20,
      "special_meeting_points": 3,
      "flag_tribute_points": 0,
      "installation_points": 10,
      "total_points": 33
    },
    {
      "id": 2,
      "name": "Monty R Konopelski",
      "stated_meeting_points": 5,
      "special_meeting_points": 6,
      "flag_tribute_points": 0,
      "installation_points": 4,
      "total_points": 15
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
