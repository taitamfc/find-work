<?php

namespace Modules\Staff\app\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;
use Modules\Auth\app\Http\Requests\StoreLoginRequest;
use Modules\Auth\app\Http\Requests\StoreRegisterRequest;
use Modules\Auth\app\Http\Requests\ForgotPasswordRequest;
use Modules\Auth\app\Http\Requests\ResetPasswordRequest;
use Modules\Auth\app\Models\PasswordResetToken;
use Mail;
use Illuminate\Support\Str;
use Modules\Staff\app\Models\StaffUser;
use Modules\Staff\app\Models\User;


class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('staff.home'); 
        } else {
            return view('staff::auth.login');
        }
    }

    public function postLogin(StoreLoginRequest $request)
    {
        $dataUser = $request->only('email', 'password');
        if (Auth::attempt($dataUser, $request->remember)) {
            return redirect()->route('staff.home'); 
        } else {
            return redirect()->route('staff.login')->with('error', 'Account or password is incorrect');
        }
    }
    
    public function register($type = ''){
        if (Auth::check()) {
            return redirect()->route('staff.home'); 
        } else {
            return view('staff::auth.register');
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

            $user->userStaff()->create([
                'phone' => $request->phone,
                'birthdate' => $request->birthdate,
            ]);
            $message = "Successfully registered";
            return redirect()->route('staff.login')->with('success', $message);
        } catch (\Exception $e) {
            Log::error('Bug occurred: ' . $e->getMessage());
            return redirect()->back->with('error','Registration failed');
        }
    }
}