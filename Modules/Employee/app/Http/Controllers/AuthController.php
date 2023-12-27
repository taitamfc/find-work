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
use Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Modules\Employee\app\Models\User;
use Modules\Employee\app\Models\UserEmployee;


class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('employee.profile.index');
        } else {
            return view('employee::auth.login');
        }
    }

    public function postLogin(StoreLoginRequest $request)
    {
        $dataUser = $request->only('email', 'password');
        if (Auth::attempt($dataUser, $request->remember)) {
            return redirect()->route('employee.profile.index'); 
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
            return redirect()->route('employee.profile.index');
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
            $user->password = bcrypt($request->password);
            $user->save();

            
            // Lưu tệp tin hình ảnh vào thư mục lưu trữ (ví dụ: public/images)
            $imagePath = $request->file('image')->store('public/images');
            // Lấy tên tệp tin hình ảnh
            $imageName = basename($imagePath);

            $user->userEmployee()->create([
                'name' => $request->cp_name,
                'website' => $request->website,
                'phone' => $request->phone,
                'address' => $request->address,
                'image' => $imageName
            ]);
            DB::commit(); // Hoàn thành giao dịch
            $message = "Đăng ký thành công!";
            return redirect()->route('employee.login')->with('success', $message);
        } catch (\Exception $e) {
            DB::rollback(); // Hoàn tác giao dịch nếu có lỗi
            Log::error('Bug occurred: ' . $e->getMessage());
            return view('employee::auth.register')->with('error', 'Đăng ký bị lỗi!');
        }
    }

    
}