<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.registration');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // Validate form inputs
        $request->validate([
            'profile_picture' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'], // 2MB max size
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'first_name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if ($request->type === 'coach') {
            // Generate a 6-digit OTP
            $otp = rand(100000, 999999);

            // Temporarily save the file with a unique name
            $fileName = uniqid() . '_profile_pic.' . $request->file('profile_picture')->getClientOriginalExtension();
            $profilePicturePath = 'user_profiles/' . $fileName;
            $request->file('profile_picture')->move(public_path('user_profiles'), $fileName);

            // Store OTP and data in session
            session([
                'otp_' . $request->email => $otp,
                'user_data' => array_merge($request->all(), ['profile_picture' => $profilePicturePath]),
                'email' => $request->email,
            ]);

            // Send OTP via email
            Mail::to($request->email)->send(new \App\Mail\SendOtpMail($otp));

            return redirect()->route('verify.otp')->with('email', $request->email);
        }

        // For players, directly store the profile picture
        $fileName = uniqid() . '_profile_pic.' . $request->file('profile_picture')->getClientOriginalExtension();
        $profilePicturePath = 'user_profiles/' . $fileName;
        $request->file('profile_picture')->move(public_path('user_profiles'), $fileName);

        // Create user without email verification
        $user = User::create([
            'profile_picture' => $profilePicturePath,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'type' => $request->type,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => 'Verified'
        ]);

        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }




    public function verifyOtpForm()
    {
        return view('auth.verify-otp');
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required|numeric|digits:6',
        ]);

        $cachedOtp = session('otp_' . $request->email);

        if ($cachedOtp && $cachedOtp == $request->otp) {
            // Remove OTP and retrieve user data from session
            session()->forget('otp_' . $request->email);
            $data = session('user_data');
            session()->forget('user_data');

            // Profile picture path already set during the store function
            $profilePicturePath = $data['profile_picture'];

            // Create the coach user
            $user = User::create([
                'profile_picture' => $profilePicturePath,
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'type' => $data['type'],
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'status' => 'Pending'
            ]);

            return redirect()->route('login');
        }

        return back()->withErrors(['otp' => 'Invalid or expired OTP.']);
    }



}
