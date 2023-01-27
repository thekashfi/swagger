<?php

/**
 * @license Apache 2.0
 */

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

/**
 * Class User.
 *
 * @author  Donii Sergii <doniysa@gmail.com>
 */
class UserApiController extends Controller
{
    /**
     * @OA\Post(
     *     path="/user",
     *     tags={"user"},
     *     summary="Create user",
     *     description="This can only be done by the logged in user.",
     *     operationId="createUser",
     *     @OA\Response(
     *         response="default",
     *         description="successful operation"
     *     ),
     *     @OA\RequestBody(
     *         description="Create user object",
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/User")
     *     )
     * )
     */
    public function user()
    {
        return User::first();
    }

    public function users()
    {
        return User::take(10)->get();
    }
}
