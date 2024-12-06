<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        // Step 1: Validate email and password
        if (!Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }

        // Step 2: Check user's account status
        $user = Auth::user();

        if ($user->status === 'Pending') {
            Auth::logout(); // Logout the user immediately
            return back()->withErrors([
                'status' => 'Your account is still pending approval. Please wait for up to 3 business days for our team to update your account status.',
            ]);
        }

        if ($user->status === 'Rejected') {
            Auth::logout(); // Logout the user immediately
            return back()->withErrors([
                'status' => 'Your account has been rejected. Please contact our support team for further assistance.',
            ]);
        }

        // Step 3: Allow login if status is verified
        if ($user->status === 'Verified') {
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        // Fallback for unexpected status
        Auth::logout();
        return back()->withErrors([
            'status' => 'Unexpected account status. Please contact support.',
        ]);
    }


    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
