<?php

/**
 * @license Apache 2.0
 */

namespace App\Virtual\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

class UserApiController extends Controller
{
    /**
     * @OA\GET(
     *     path="/user",
     *     tags={"user"},
     *     summary="Get a single user",
     *     description="get a single user record json info.",
     *     operationId="getUser",
     *     @OA\Response(
     *         response=200,
     *         description="Successfully get the user record"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="User Not Found"
     *     )
     * )
     */
    public function user()
    {
    }

    /**
     * @OA\GET(
     *     path="/users",
     *     tags={"user"},
     *     summary="Get 10 users",
     *     description="get 10 users info as json array of users.",
     *     operationId="getUsers",
     *     @OA\Response(
     *         response=200,
     *         description="Successfully get array list of users"
     *     )
     * )
     */
    public function users()
    {
    }
}
