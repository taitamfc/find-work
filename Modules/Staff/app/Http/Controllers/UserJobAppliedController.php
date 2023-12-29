<?php

namespace Modules\Staff\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Staff\app\Models\UserJobAplied;
class UserJobAppliedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $userJobApplies = UserJobAplied::where('user_id', $user->id)->get();
        $params = [
            'userJobApplies' => $userJobApplies,
        ];
        return view('staff::job-applied.index', $params);
    }
    // public function showdashboard()
    // {
    //     $user = auth()->user();
    //     $userJobApplies = UserJobAplied::where('user_id', $user->id)->get();
    //     $params = [
    //         'userJobApplies' => $userJobApplies,
    //     ];
    //     return view('staff::index1', $params);
    // }

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
    public function update(Request $request, $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $userJobApplied = UserJobAplied::findOrFail($id);
            $userJobApplied->delete();
    
            return redirect()->route('staff.job-applied')
                ->with('success', 'Xóa ứng tuyển thành công!');
        } catch (\Exception $exception) {
            // Xử lý nếu có lỗi khi xóa
            return redirect()->route('staff.job-applied')
                ->with('error', 'Đã có lỗi xảy ra khi xóa ứng tuyển.');
        }
    }
}
