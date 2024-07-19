<?php

namespace App\Annotations\V1\Staff\Controllers\User;

use App\Annotations\V1\Guest\Controllers\Controller;

class UpdateUserController extends Controller
{
    /**
     * @OA\Put(
     *      path="/user",
     *      tags={"User"},
     *      summary="Update user account - auth  information",
     *      description="Update user account - auth information",
     *      @OA\RequestBody(
     *      required=true,
     *      description="",
     *      @OA\MediaType(
     *          mediaType="application/json",
     *          @OA\Schema(
     *              type="object",
     *         @OA\Property(
     *              property="firstname",
     *              description="firstname",
     *              title="firstname",
     *              type="string",
     *              example="firstname update"
     *          ),
     *         @OA\Property(
     *              property="middlename",
     *              description="middlename",
     *              title="middlename",
     *              type="string",
     *              example="middlename update"
     *          ),
     *         @OA\Property(
     *              property="lastname",
     *              description="lastname",
     *              title="lastname",
     *              type="string",
     *              example="lastname update"
     *          ),
     *         @OA\Property(
     *              property="extensionname",
     *              description="extensionname",
     *              title="extensionname",
     *              type="string",
     *              example="extensionname update"
     *          ),
     *         @OA\Property(
     *              property="birth_date",
     *              description="birth_date",
     *              title="birth_date",
     *              type="date",
     *              example="1978-08-25"
     *          ),
     *         @OA\Property(
     *              property="address",
     *              description="address",
     *              title="address",
     *              type="string",
     *              example="address update"
     *          ),
     *         @OA\Property(
     *              property="gender",
     *              description="gender",
     *              title="gender",
     *              type="string",
     *              example="male"
     *          ),
     *         @OA\Property(
     *              property="mobile",
     *              description="mobile",
     *              title="mobile",
     *              type="string",
     *              example="+639091653300"
     *          ),
     *          @OA\Property(
     *              property="role",
     *              description="role",
     *              title="role",
     *              type="string",
     *              example="labor 2"
     *          )
     *          )
     *      )
     *     ),
     *      @OA\Response(
     *          response="200",
     *          description="OK",
     *          @OA\JsonContent(
     *              example={
     *                  "status": "success",
     *                  "description": "ok"
     *              }
     *          )
     *      ),
     *      @OA\Response(
     *          response="401",
     *          description="Unauthorized",
     *          @OA\JsonContent(
     *              example={
     *                  "status": "error",
     *                  "description": "Unauthorized"
     *              }
     *          )
     *      ),
     *      @OA\Response(
     *          response="403",
     *          description="Forbidden",
     *          @OA\JsonContent(
     *              example={
     *                  "status": "error",
     *                  "description": "Forbidden",
     *                  "errors": {
     *                      {
     *                          "code": 3004,
     *                          "message": "Staff inactive"
     *                      }
     *                  }
     *              }
     *          )
     *      )
     * )
     */


}
