<?php

namespace App\Annotations\V1\Staff\Controllers\User;

use App\Annotations\V1\Staff\Controllers\Controller;

class GetPetitionersController extends Controller
{
   /**
     * @OA\Get(
     *      path="/user/petitioners",
     *      tags={"User"},
     *      summary="Get all user petitioners",
     *      description="Get all user petitioners",
     *    @OA\Response(
     *          response="200",
     *          description="OK",
     *          @OA\JsonContent(
    example= {
  "status": "success",
  "description": "OK",
  "data": {
    {
      "id": 19,
      "firstname": "postUser",
      "middlename": "postUser",
      "lastname": "postUser",
      "extensionname": "test3",
      "birth_date": "1990-01-01",
      "email": "postUser5@test.com",
      "mobile": "+639000000012",
      "address": "test address",
      "role": "labor",
      "date_balloted": null,
      "date_of_conferral": null,
      "officer_rank": null,
      "member_type": 5,
      "gender": "Male",
      "avatar": null,
      "created_at": "2024-08-15 07:40:56",
      "updated_at": "2024-08-15 07:40:56"
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
