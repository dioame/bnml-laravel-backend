<?php

namespace App\Annotations\V1\Staff\Controllers\User;

use App\Annotations\V1\Staff\Controllers\Controller;

class GetOfficersController extends Controller
{
   /**
     * @OA\Get(
     *      path="/user/officers",
     *      tags={"User"},
     *      summary="Get all user officers",
     *      description="Get all user officers",
     *    @OA\Response(
     *          response="200",
     *          description="OK",
     *          @OA\JsonContent(
    example= {
  "status": "success",
  "description": "OK",
  "data": {
    {
      "id": 10,
      "firstname": "Avis",
      "middlename": "Lauryn",
      "lastname": "Wiza",
      "extensionname": null,
      "birth_date": "1976-12-13",
      "email": "staff10@test.com",
      "mobile": "+1 (938) 233-9196",
      "address": "35215 Donavon Corners Suite 094\nRoobton, TN 25447-0385",
      "role": null,
      "date_balloted": null,
      "date_of_conferral": null,
      "officer_rank": 1,
      "member_type": 1,
      "gender": "male",
      "avatar": null,
      "created_at": "2024-08-12 13:25:58",
      "updated_at": "2024-08-12 13:25:58"
}}}
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
