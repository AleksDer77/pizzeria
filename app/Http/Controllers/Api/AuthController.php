<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\User\LoginUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * @mixin User
     */
    public function login(LoginUserRequest $request)
    {
        if (!Auth::attempt($request->validated())) {
            return response()->json([
                'message' => 'Чет не то',
            ], 403);
        }


        $user = User::whereEmail($request->email)->first();

        $token = $user->createToken($user->email)->plainTextToken;

        return [
            'token' => $token,
        ];
    }
}
