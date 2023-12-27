<?php

namespace Modules\Staff\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Modules\Staff\app\Http\Requests\UpdateUserStaffRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Staff\app\Models\UserStaff;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $item = UserStaff::where('user_id', $user->id)->with('user')->first();
        $params = [
            'item' => $item,
        ];
    
        return view('staff::index', $params);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('staff::create');
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
        return view('staff::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('staff::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserStaffRequest $request, $id)
    {
        // dd($request->hasFile('img'));
        // dd($request->all());
        $staff = UserStaff::findOrFail($id);
        $user = $staff->user;
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        if ($request->hasFile('image')) {
            // Lưu tệp tin hình ảnh vào thư mục lưu trữ (ví dụ: public/images)
            $imagePath = $request->file('image')->store('public/images');

            // Lấy tên tệp tin hình ảnh
            $imageName = basename($imagePath);

            // Lưu tên tệp tin hình ảnh vào trường 'image' của bản ghi UserEmployee
            $user->image = $imageName;
        }
        $staff->update([
            'phone' => $request->input('phone'),
            'birthdate' => $request->input('birthdate'),
            'experience_years' => $request->input('experience_years'),
            'gender' => $request->input('gender'),
            'city' => $request->input('city'),
            'address' => $request->input('address'),
            'outstanding_achievements' => $request->input('outstanding_achievements'),
            'image' => $user->image
        ]);    
        return back()->with('success', 'Thông tin đã được cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}