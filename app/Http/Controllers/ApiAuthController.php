<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Google\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ApiAuthController extends Controller
{
    public function googleLogin(Request $request)
    {
        $request->validate([
            'id_token' => 'required|string'
        ]);

        $client = new Client([
            'client_id' => config('services.google.client_id')
        ]);

        $payload = $client->verifyIdToken(
            $request->id_token
        );

        if (!$payload) {
            return response()->json([
                'success' => false,
                'message' => 'Google token tidak valid'
            ], 401);
        }

        $email = $payload['email'];

        $user = User::where(
            'email',
            $email
        )->first();

        if (!$user) {

            $user = User::create([
                'id' => (string) Str::uuid(),
                'name' => $payload['name'],
                'email' => $email,
                'google_id' => $payload['sub'],
                'avatar' => $payload['picture'] ?? null,
                'password' => Hash::make(
                    Str::random(40)
                ),
                'role' => 'tenant',
                'status' => true,
                'email_verified_at' => now(),
            ]);

        } else {

            $user->update([
                'google_id' => $payload['sub'],
                'avatar' => $payload['picture'] ?? null,
            ]);
        }

        if (!$user->status) {

            return response()->json([
                'success' => false,
                'message' => 'Akun tidak aktif'
            ], 403);
        }

        $token = $user
            ->createToken('mobile')
            ->plainTextToken;

        return response()->json([
            'success' => true,
            'token' => $token,
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'role' => $user->role,
                'avatar' => $user->avatar,
            ]
        ]);
    }

    public function me(Request $request)
    {
        return response()->json([
            'success' => true,
            'user' => $request->user()
        ]);
    }

    public function logout(Request $request)
    {
        $request
            ->user()
            ->currentAccessToken()
            ->delete();

        return response()->json([
            'success' => true
        ]);
    }
}
