<?php

namespace App\Annotations\V1\Staff\Controllers\User;

use App\Annotations\V1\Guest\Controllers\Controller;

class UserController extends Controller
{
   /**
     * @OA\Get(
     *      path="/user",
     *      tags={"User"},
     *      summary="Staff user details",
     *      description="Returns user details including first name, middle name, last name, birth date, email, and mobile number.",
     *    @OA\Response(
     *          response="200",
     *          description="OK",
     *          @OA\JsonContent(
    example= {
  "data": {
    "id": 1,
    "firstname": "Tiara",
    "middlename": "Domenico",
    "lastname": "Feil",
    "extensionname": null,
    "birth_date": "1979-02-20",
    "email": "staff1@test.com",
    "mobile": "(253) 531-6153",
    "address": "77865 Ellen Cove\nLake Baby, MO 75322-0370",
    "role": null,
    "date_balloted": null,
    "date_of_conferral": null,
    "officer_rank": null,
    "member_type": 5,
    "gender": "male",
    "avatar": null,
    "created_at": "2024-08-12 13:25:54",
    "updated_at": "2024-08-12 13:25:54"
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


     /**
     * @OA\Get(
     *      path="/user/{id}",
     *      tags={"User"},
     *      summary="Staff user details by id",
     *      description="Returns user details including first name, middle name, last name, birth date, email, and mobile number.",
     *  *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         description="ID of the user",
 *         required=true,
 *     ),
     *    @OA\Response(
     *          response="200",
     *          description="OK",
     *          @OA\JsonContent(
    example= {
  "data": {
    "id": 1,
    "firstname": "Tiara",
    "middlename": "Domenico",
    "lastname": "Feil",
    "extensionname": null,
    "birth_date": "1979-02-20",
    "email": "staff1@test.com",
    "mobile": "(253) 531-6153",
    "address": "77865 Ellen Cove\nLake Baby, MO 75322-0370",
    "role": null,
    "date_balloted": null,
    "date_of_conferral": null,
    "officer_rank": null,
    "member_type": 5,
    "gender": "male",
    "avatar": null,
    "created_at": "2024-08-12 13:25:54",
    "updated_at": "2024-08-12 13:25:54"
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


       /**
     * @OA\Get(
     *      path="/user/email/{email_address}",
     *      tags={"User"},
     *      summary="Staff user details by email",
     *      description="Returns user details including first name, middle name, last name, birth date, email, and mobile number.",
     *      @OA\Parameter(
 *         name="email_address",
 *         in="path",
 *         description="Email of the user",
 *         required=true,
 *     ),
     *    @OA\Response(
     *          response="200",
     *          description="OK",
     *          @OA\JsonContent(
    example= {
  "status": "success",
  "description": "OK",
  "data": {
    "first_name": "test1",
    "middle_name": "test2",
    "last_name": "test3",
    "birth_date": "1990-01-01",
    "email": "test@test.com",
    "mobile": "09000000000"
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

      /**
     * @OA\Post(
     *      path="/user/login/pairing",
     *      tags={"User"},
     *      security={},
     *      summary="Post Login email pair token",
     *      description="Post Login email pair token",
*     @OA\RequestBody(
     *      required=true,
     *      description="User credentials",
     *      @OA\MediaType(
     *          mediaType="multipart/form-data",
     *          @OA\Schema(
     *              type="object",
     *              @OA\Property(
     *              property="email",
     *              description="Email",
     *              title="Email",
     *              type="string",
     *              description="Email of user",
     *              example="staff1@test.com"
     *          ),
     *          @OA\Property(
     *              property="pair_token",
     *              description="Pair Token",
     *              title="Pair Token",
     *              type="string",
     *              description="Pair Token of user",
     *          )
     *          )
     *      )
     *     ),
     *    @OA\Response(
     *          response="200",
     *          description="OK",
     *          @OA\JsonContent(
            example= {
                "status":  "success",
                "description": "OK",
                "token": "4|H1EYBeILvcTsqMTWSkJkXH2HxTSqqN18fOpjYZNWexzulLWYeSshAbqZb9ZsfE1Skjz53pO6AEVrJcLaypseolaOQqWEi3r0KgZm"
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


       /**
     * @OA\GET(
     *      path="/user/search",
     *      tags={"User"},
     *      summary="Search Term",
     *      description="Search Term",
     *      @OA\Parameter(
    *         name="term",
    *         in="query",
         *         description="Term",
     *         required=false,
    *         description="Term",
        *         @OA\Schema(
     *             type="string"
     *         )
    *     ),
     *    @OA\Response(
     *          response="200",
     *          description="OK",
     *          @OA\JsonContent(
            example= {
                "status":  "success",
                "description": "OK",
                "data":{ {
      "id": 1,
      "name": "Gino Liza Kirlin",
      "created_at": "2024-07-17 03:26:57",
      "updated_at": "2024-07-17 03:26:57"
    },
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
