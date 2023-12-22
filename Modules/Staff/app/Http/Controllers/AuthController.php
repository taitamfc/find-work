<?php

namespace Modules\Staff\app\Http\Controllers;
use Modules\Staff\app\Models\StaffUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;
use Modules\Auth\app\Http\Requests\StoreLoginRequest;
use Modules\Auth\app\Http\Requests\StoreRegisterRequest;
use Modules\Auth\app\Http\Requests\ForgotPasswordRequest;
use Modules\Auth\app\Http\Requests\ResetPasswordRequest;
use Modules\Auth\app\Models\PasswordResetToken;
use Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('home.index');
        } else {
            return view('auth::login');
        }
    }

    public function postLogin(StoreLoginRequest $request)
    {
        $dataUser = $request->only('email', 'password');
        if (Auth::attempt($dataUser, $request->remember)) {
            return redirect()->route('home.index'); 
        } else {
            return redirect()->route('website.login')->with('error', 'Account or password is incorrect');
        }
    }
    public function Logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('website.login');
    }
    public function register($type = ''){
        if (Auth::check()) {
            // return redirect()->route('website.register',['site_name'=>$this->site_name]);
            return view('auth::register');
        } else {
            return view('auth::register');
        }
    }
    public function postRegister(StoreRegisterRequest $request)
{
    try {
        // Create a new user in the users table
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Create a new staff_user in the staff_user table
        $staffUser = StaffUser::create([
            'user_id' => $user->id,
            'phone' => $request->phone,
            'birthdate' => $request->birthdate,
            // Set other staff_user fields here
        ]);

        $message = "Successfully registered";
        return redirect()->route('website.login')->with('success', $message);
    } catch (\Exception $e) {
        Log::error('Bug occurred: ' . $e->getMessage());
        return view('auth::register')->with('error', 'Registration failed');
    }
}

    function forgot(Request $request)
    {
        return view('auth::forgot');
    }
    public function postForgot(ForgotPasswordRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Email not found');
        }

        // Generate a random token
        $token = strtoupper(Str::random(10));

        // Save the token in the password_reset_tokens table
        // Check if the email already has a token in the password_reset_tokens table
        $existingToken = PasswordResetToken::where('email', $user->email)->first();

        if ($existingToken) {
            // If a token exists, update the existing record
            $existingToken->update(['token' => $token]);
        } else {
            // If no token exists, create a new record
            PasswordResetToken::create([
                'email' => $user->email,
                'token' => $token,
            ]);
        }

        // Data to be passed to the email view
        $data = [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'token' => $token
        ];

        // Send the reset password email
        Mail::send('auth::mail', compact('data'), function ($email) use ($user) {
            $email->subject('Forgot Password');
            $email->to($user->email, $user->name);
        });

        return redirect()->route('website.login')->with('success', 'Please check your email to reset the password');
    }

    public function getReset($token)
    {
        $tokenRecord = PasswordResetToken::where('token', $token)->first();

        if ($tokenRecord) {
            $data = [
                'token' => $token,
            ];

            return view('auth::resetpassword', compact('data'));
        } else {
            return redirect()->route('website.login')->with('error', 'There was a problem. Please try again.');
        }
    }

    public function postReset(ResetPasswordRequest $request)
    {
        $tokenRecord = PasswordResetToken::where('token', $request->token)->first();
        if ($tokenRecord) {
            $user = User::where('email', $tokenRecord->email)->first();
            $user->password = bcrypt($request->password);
            $user->save();

            $tokenRecord->delete(); // Remove the used token
            return redirect()->route('website.login')->with('success', 'Password reset successful.');
        } else {
            return redirect()->route('website.login')->with('error', 'There was a problem. Please try again.');
        }
    }

}