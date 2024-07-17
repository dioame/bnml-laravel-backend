<?php

namespace App\Annotations\V1\Guest\Controllers;

class AuthController extends Controller
{
    /**
     * Login user
     *
     * @OA\Post(
     *     security={},
     *     path="/login",
     *     tags={"Authentication"},
     *     description="Login user",
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
     *              property="password",
     *              description="Password",
     *              title="Password",
     *              type="string",
     *              description="Password of user",
     *              example="password"
     *          )
     *          )
     *      )
     *     ),
     *    *    @OA\Response(
     *          response="200",
     *          description="OK",
     *          @OA\JsonContent(
    example= {
  "status": "success",
  "description": "OK",
  "token": "4|H1EYBeILvcTsqMTWSkJkXH2HxTSqqN18fOpjYZNWexzulLWYeSshAbqZb9ZsfE1Skjz53pO6AEVrJcLaypseolaOQqWEi3r0KgZm"
}
     *          )
     *      ),
     * 
     *     @OA\Response(
     *          response="401",
     *          description="Unauthorized",
     *          @OA\JsonContent(
     *                  example={
     *                      "status":"error",
     *                      "description":"Unauthorized",
     *                      "errors":{
    {
    "code":3012,
    "message":"Credentials incorrect"
    },
    {
    "code": 3004,
    "message": "Staff inactive"
    }
     *                      }
     *                  },
     *          )
     *      ),
     *     @OA\Response(
     *          response="422",
     *          description="Unprocessable entry",
     *          @OA\JsonContent(
     *                  example= {
     *                         "status": "error",
     *                         "description": "Unprocessable entry",
     *                         "errors": {
     *                              {"field": "email", "code": 3001, "message": "Email required"},
     *                              {"field": "email", "code": 3002, "message": "Email invalid"},
     *                              {"field": "password", "code": 3003, "message": "Password required"}
     *                          }
     *                  },
     *          )
     *      )
     * )
     */


         /**
     * Logout user
     *
     * @OA\Post(
     *     path="/logout",
     *     security={ {"staff": {} }},
     *     tags={"Authentication"},
     *     description="Logout authenticated user",
     *     @OA\Response(
     *          response="200",
     *          description="OK",
     *          @OA\JsonContent(
     *              @OA\Property(
     *                  property="status",
     *                  example="success",
     *              ),
     *              @OA\Property(
     *                  property="description",
     *                  example="OK",
     *              ),
     *          )
     *     ),
     *     @OA\Response(
     *          response="401",
     *          description="Unauthorized",
     *          @OA\JsonContent(
     *                  example= {
     *                         "status": "error",
     *                         "description": "Unauthorized"
     *                  },
     *          )
     *      )
     * )
     */

}
