<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Illuminate\Support\Facades\Log;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        try {
            return Socialite::driver('google')->redirect();
        } catch (Exception $e) {
            Log::error('Google redirect error: ' . $e->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to redirect to Google',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            
            if (!$googleUser || !$googleUser->email) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Failed to get user information from Google'
                ], 400);
            }

            $existingUser = User::where('email', $googleUser->email)->first();
            
            if ($existingUser) {
                $existingUser->update([
                    'google_id' => $googleUser->id,
                    'email_verified_at' => now(), 
                ]);
                
                $user = $existingUser;
            } else {
                $slug = explode('-', $googleUser->name)[0];
                $user = User::create([
                    'name' => $googleUser->name,
                    'slug' => $slug,
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id,
                    'email_verified_at' => now(),
                    'photo' => $googleUser->avatar ?? null,
                    'password' => bcrypt($googleUser->id),
                    'role' => 'user', 
                ]);
            }

            Auth::login($user);

            if ($user->role === 'admin') {
                return redirect('/dashboard'); 
            } else {
                return redirect('/'); 
            }

        } catch (Exception $e) {
            Log::error('Google callback error: ' . $e->getMessage(), [
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return response()->json([
                'status' => 'error',
                'message' => 'Authentication failed',
                'error' => $e->getMessage(),
                'details' => app()->environment('local') ? [
                    'file' => $e->getFile(),
                    'line' => $e->getLine()
                ] : null
            ], 500);
        }
    }

}