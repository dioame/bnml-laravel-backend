<?php

namespace App\Annotations\V1\Staff\Controllers\User;

use App\Annotations\V1\Staff\Controllers\Controller;

class GetMembersController extends Controller
{
   /**
     * @OA\Get(
     *      path="/user/members",
     *      tags={"User"},
     *      summary="Get all user members",
     *      description="Get all user members",
     *    @OA\Response(
     *          response="200",
     *          description="OK",
     *          @OA\JsonContent(
    example= {
  "status": "success",
  "description": "OK",
  "data": {
    {
      "id": 9,
      "firstname": "Jadon",
      "middlename": "Erick",
      "lastname": "Kautzer",
      "extensionname": null,
      "birth_date": "1980-03-09",
      "email": "staff9@test.com",
      "mobile": "872.910.0854",
      "address": "769 Hegmann Loaf Apt. 223\nLake Helmermouth, KY 63734-8070",
      "role": null,
      "date_balloted": null,
      "date_of_conferral": null,
      "officer_rank": null,
      "member_type": 1,
      "gender": "male",
      "avatar": null,
      "created_at": "2024-08-12 13:25:57",
      "updated_at": "2024-08-12 13:25:57"
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
