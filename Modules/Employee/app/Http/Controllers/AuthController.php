<?php

namespace Modules\Employee\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;
use Modules\Employee\app\Http\Requests\StoreLoginRequest;
use Modules\Employee\app\Http\Requests\StoreRegisterRequest;
use Modules\Auth\app\Http\Requests\ForgotPasswordRequest;
use Modules\Auth\app\Http\Requests\ResetPasswordRequest;
use Modules\Auth\app\Models\PasswordResetToken;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Modules\Employee\app\Models\User;
use Modules\Employee\app\Models\UserEmployee;
use App\Jobs\SendEmail;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('employee.home');
        } else {
            return view('employee::auth.login');
        }
    }

    public function postLogin(StoreLoginRequest $request)
    {
        $dataUser = $request->only('email', 'password');
        $user = User::where('email',$dataUser['email'])->first();
        if (Auth::attempt($dataUser, $request->remember)) {
            $data = [
                'name' => $user->name,
                'email' => $user->email,
            ];
            SendEmail::dispatch($user,$data,'send_mail');
            return redirect()->route('employee.home'); 
        } else {
            return redirect()->route('employee.login')->with('error', 'Account or password is incorrect');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('employee.login');
    }
    public function register(){
        if (Auth::check()) {
            return redirect()->route('employee.home');
        } else {
            return view('employee::auth.register');
        }
    }
    public function postRegister(StoreRegisterRequest $request)
    {
        DB::beginTransaction();
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->type = "employee";
            $user->status = 1;
            $user->password = bcrypt($request->password);
            $user->save();

            $user->userEmployee()->create([
                'company_name' => $request->company_name,
                'company_website' => $request->company_website,
                'company_phone' => $request->company_phone,
                'company_address' => $request->company_address
            ]);
            $message = "Đăng ký thành công!";
            DB::commit(); // Hoàn thành giao dịch
            return redirect()->route('employee.login')->with('success', $message);
        } catch (\Exception $e) {
            DB::rollback(); // Hoàn tác giao dịch nếu có lỗi
            Log::error('Bug occurred: ' . $e->getMessage());
            return view('employee::auth.register')->with('error', 'Đăng ký bị lỗi!');
        }
    }

    
}