<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

class UserApiController extends Controller
{
    public function user()
    {
        return User::first();
    }

    public function users()
    {
        return User::take(10)->get();
    }
}
