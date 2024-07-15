<?php

namespace App\Annotations\V1\Guest\Controllers\Signup;

use App\Annotations\V1\Guest\Controllers\Controller;

class SignupController extends Controller
{
   /**
     * Signup
     *
     * @OA\Post(
     *     path="/signup",
     *     tags={"Signup"},
     *     security={ {"guest": {} }},
     * *     @OA\RequestBody(
 *         required=true,
 *         description="User registration information",
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 type="object",
 *                 required={
 *                     "firstname",
 *                     "middlename",
 *                     "lastname",
 *                     "extensionname",
 *                     "birth_date",
 *                     "address",
 *                     "gender",
 *                     "role",
 *                     "email",
 *                     "mobile",
 *                     "password"
 *                 },
 *                 @OA\Property(
 *                     property="firstname",
 *                     type="string",
 *                     description="The first name of the user.",
 *                    example="test1"
 *                 ),
 *                 @OA\Property(
 *                     property="middlename",
 *                     type="string",
 *                     description="The middle name of the user.",
 *                     example="test2"
 *                 ),
 *                 @OA\Property(
 *                     property="lastname",
 *                     type="string",
 *                     description="The last name of the user.",
 *                    example="test3"
 *                 ),
 *                 @OA\Property(
 *                     property="extensionname",
 *                     type="string",
 *                     description="The extension name of the user.",
 *                    example="test3"
 *                 ),
 *                 @OA\Property(
 *                     property="birth_date",
 *                     type="string",
 *                     format="date",
 *                     description="The birth date of the user (YYYY-MM-DD).",
 *                    example="1990-01-01"
 *                 ),
 *                 @OA\Property(
 *                     property="address",
 *                     type="string",
 *                     description="The primary address of the user.",
 *                    example="test address"
 *                 ),
 *                 @OA\Property(
 *                     property="gender",
 *                     type="string",
 *                     description="The gender of the user.",
 *                      enum={"Male","Female"}
 *                 ),
 *                 @OA\Property(
 *                     property="role",
 *                     type="string",
 *                     description="The role or type of the user.",
 *                    example="labor"
 *                 ),
 *                 @OA\Property(
 *                     property="email",
 *                     type="string",
 *                     format="email",
 *                     description="The email address of the user.",
 *                    example="test@test.com"
 *                 ),
 *                 @OA\Property(
 *                     property="mobile",
 *                     type="string",
 *                     description="The mobile number of the user.",
 *                     example="+639000000000"
 *                 ),
 *                 @OA\Property(
 *                     property="password",
 *                     type="string",
 *                     description="The password for the user's account.",
 *                     example="password"
 *                 )
 *             )
 *         )
 *     ),
     *     *     @OA\Response(
     *          response="201",
     *          description="Created",
     *          @OA\JsonContent(
    example= {
        "status": "success",
        "description": "OK",
        "token": "54|coUoP1WfflJWLCCFBSOpE3SKpUOqZ2LBkCTV2ACHEKwiS0nG2r34svO9ObnmQuY8yIKgGcEi2oaDtsF2sHZRn8HbgGNwrfh1EvMY",
        "otp": "561107"
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
     *          response="422",
     *          description="Unprocessable entry",
     *          @OA\JsonContent(
     *                  example= {
  "status": "error",
  "description": "Unprocessable Entry",
  "errors": {
    {
      "field": "email",
      "code": 3043,
      "message": "Email taken"
    },
    {
      "field": "photo",
      "code": 5001,
      "message": "The photo field is required."
    }
  }
},
     *          )
     *      )
     * )
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
