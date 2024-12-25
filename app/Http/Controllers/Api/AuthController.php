<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Register a new user.
     */public function register(Request $request)
{
    // Log when the endpoint is hit
    \Log::info('Register endpoint called.');

    // Log the incoming request data (excluding sensitive fields)
    \Log::info('Request Data:', $request->except('password', 'password_confirmation'));

    // Validation
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed|min:8',
    ]);

    // Log after validation is successful
    \Log::info('Validation successful.');

    // User creation
    $user = User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => bcrypt($validated['password']),
    ]);

    // Log the created user
    \Log::info('User created:', $user->toArray());

    // Token generation
    $token = $user->createToken('authToken')->accessToken;

    // Log the generated token
    \Log::info('Access token generated.');

    // Return response
    return response()->json([
        'user' => $user,
        'access_token' => $token,
    ]);
}


    /**
     * Login an existing user.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Invalid credentials',
            ], 401);
        }

        $user = Auth::user();
        $token = $user->createToken('authToken')->accessToken;

        return response()->json([
            'user' => $user,
            'access_token' => $token,
        ]);
    }

    /**
     * Logout the authenticated user.
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return response()->json([
            'message' => 'Successfully logged out',
        ]);
    }
}
