<?php

namespace Modules\Employee\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Employee\app\Models\UserEmployee;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Modules\Employee\app\Http\Requests\UpdateProfileEmployeeRequest;
use Illuminate\Support\Str;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function dashboard()
     {
         return view('employee::profile.dashboard');
     }
    
    public function index()
    {
        $user = Auth::user();
        $user_employee = UserEmployee::where('user_id',$user->id)->first();
        return view('employee::profile.index',compact(['user_employee','user']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('employee::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('employee::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfileEmployeeRequest $request, $id): RedirectResponse
    {
        DB::beginTransaction();
        try {
            // Lấy đối tượng người dùng hiện tại
            $user = User::findOrFail($id);
            $user->name = $request->name;
            $user->email = $request->email;
            
            // Kiểm tra và cập nhật mật khẩu nếu được cung cấp
            if ($request->password != '') {
                $user->password = bcrypt($request->password);
            }
            
            $user->save();

            // Cập nhật thông tin người đăng nhập liên quan (UserEmployee)
            $userEmployee = UserEmployee::where('user_id', $user->id)->first();
            if (!$userEmployee) {
                $userEmployee = new UserEmployee();
                $userEmployee->user_id = $user->id;
            }
            $userEmployee->name = $request->name;
            $userEmployee->phone = $request->phone;
            $userEmployee->address = $request->address;
            $userEmployee->website = $request->website;

            $request->slug = $request->slug ? $request->slug : $request->name;
            $slug = $maybe_slug = Str::slug($request->slug);
            $next = 2;
            while (UserEmployee::where('slug', $slug)->where('user_id','!=',$userEmployee->user_id)->first()) {
                $slug = "{$maybe_slug}-{$next}";
                $next++;
            }
            $userEmployee->slug = $slug;

            // Kiểm tra xem đã có tệp tin hình ảnh được tải lên chưa
            if ($request->hasFile('image')) {
                // Lưu tệp tin hình ảnh vào thư mục lưu trữ (ví dụ: public/images)
                $imagePath = $request->file('image')->store('public/images');

                // Lấy tên tệp tin hình ảnh
                $imageName = basename($imagePath);

                // Lưu tên tệp tin hình ảnh vào trường 'image' của bản ghi UserEmployee
                $userEmployee->image = $imageName;
            }
            $userEmployee->save();

            DB::commit(); // Hoàn thành giao dịch

            $message = "Cập nhật thành công!";
            return redirect()->route('employee.profile.index')->with('success', $message);
        } catch (\Exception $e) {
            DB::rollback(); // Hoàn tác giao dịch nếu có lỗi
            Log::error('Lỗi xảy ra: ' . $e->getMessage());
            return redirect()->route('employee.profile.index')->with('error', 'Cập Nhật bị lỗi!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
