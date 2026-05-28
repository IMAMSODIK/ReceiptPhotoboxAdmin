<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Socialite;

class AuthController extends Controller
{
    public function redirectGoogle()
    {
        try {

            return Socialite::driver('google')->redirect();
        } catch (\Exception $e) {

            return redirect('/login')->with('error', 'Gagal menghubungkan ke Google');
        }
    }

    public function handleGoogleCallback()
    {
        try {

            $googleUser = Socialite::driver('google')->user();

            $user = User::where('email', $googleUser->email)->first();

            if (!$user) {

                $user = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id,
                    'foto' => $googleUser->avatar,
                    'role' => 'tenant',
                    'status' => 1,
                    'password' => bcrypt(rand(100000, 999999))
                ]);
            } else {
                $user->update([
                    'google_id' => $googleUser->id,
                    'foto' => $googleUser->avatar
                ]);
            }

            Auth::login($user);

            return redirect('/dashboard');
        } catch (\Exception $e) {

            return redirect('/login')->with('error', 'Login Google gagal');
        }
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginCheck(Request $r)
    {
        $validator = Validator::make($r->all(), [
            'email' => 'required|string|email',
            'password' => 'required|min:5'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $user = User::where('email', $r->email)->first();

        if (!$user) {
            return response()->json([
                'status' => 'error',
                'message' => 'Pengguna tidak ditemukan'
            ], 401);
        }

        if (password_verify($r->password, $user->password)) {
            Auth::login($user);
            $r->session()->regenerate();

            return response()->json([
                'status' => 'success',
                'message' => 'Login successful',
                'redirect' => redirect()->intended('/dashboard')->getTargetUrl()
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Invalid credentials'
        ], 401);
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login');
    }
}
