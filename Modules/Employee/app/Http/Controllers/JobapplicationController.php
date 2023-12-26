<?php

namespace Modules\Employee\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Employee\app\Models\JobapplicationModel;
use Modules\Staff\app\Models\UserCv;
use Illuminate\Support\Facades\Log;

class JobapplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cv_apllys = JobapplicationModel::all();
        return view('employee::cv-apply.index',compact('cv_apllys'));
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
        try {
            $cv_apply = new JobapplicationModel();

            $cv_apply->status = 0;
            $cv_apply->status = 0;
            $cv_apply->status = 0;

            $cv_apply->save();

            $message = "Thêm mới thành công!";
            return redirect()->route('employee.cv.index')->with('success', $message);
        } catch (\Exception $e) {
            DB::rollback(); // Hoàn tác giao dịch nếu có lỗi
            Log::error('Lỗi xảy ra: ' . $e->getMessage());
            return redirect()->route('employee.cv.create')->with('error', 'Thêm mới bị lỗi!');
        }
    }

    /**
     * Show the specified resource.
     */
    public function show($id,$cv_applyID)
    {
        $item = UserCv::findOrFail($id);
        $cv_apply = JobapplicationModel::findOrFail($cv_applyID);
        $params = [
            'item' => $item,
            'cv_apply' =>$cv_apply
        ];
    
        return view('employee::cv-apply.show',$params);
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
    public function update(Request $request, $id): RedirectResponse
    {
        try {
            $cv_apply = JobapplicationModel::findOrFail($request->id);
           
            $cv_apply->status = $request->status;

            $cv_apply->save();

            $message = "Cập Nhật thành công!";
            return redirect()->route('employee.cv.index')->with('success', $message);
        } catch (\Exception $e) {
            DB::rollback(); // Hoàn tác giao dịch nếu có lỗi
            Log::error('Lỗi xảy ra: ' . $e->getMessage());
            return redirect()->route('employee.cv.show')->with('error', 'Cập Nhật bị lỗi!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,$id)
    {
        try {
            $cv =  JobapplicationModel::find($request->id);
            $cv->delete();
            $message = "Xóa thành công!";
            return redirect()->route('employee.cv.index')->with('success', $message);
        } catch (QueryException $e) {
            Log::error('Bug occurred: ' . $e->getMessage());
            return redirect()->route('employee.cv.index')->with('error', 'Xóa thất bại!');
        }
    }
}
