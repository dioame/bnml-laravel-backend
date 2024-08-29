<?php

namespace App\Annotations\V1\Staff\Controllers\Audits;

use App\Annotations\V1\Guest\Controllers\Controller;

class AuditsController extends Controller
{
   /**
     * @OA\Get(
     *      path="/audits",
     *      tags={"Audits"},
     *      summary="Audits",
     *      description=" Audits Trail (logs)",
     *     @OA\Parameter(
     *         name="page",
     *         description="Page number",
     *         in="query",
     *         @OA\Schema(
     *             type="string",
     *             example="1"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="limit",
     *         description="Number of items per page",
     *         in="query",
     *         @OA\Schema(
     *             type="string",
     *             example="10"
     *         )
     *     ),
     *    @OA\Response(
     *          response="200",
     *          description="OK",
     *          @OA\JsonContent(
    example= {}
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
