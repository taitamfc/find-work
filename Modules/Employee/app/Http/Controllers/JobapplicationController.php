<?php

namespace Modules\Employee\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Employee\app\Models\UserJobApply;
use Modules\Employee\app\Models\Job;
use Modules\Staff\app\Models\UserCv;
use Illuminate\Support\Facades\Log;
use Modules\Employee\app\Http\Requests\CvapplyRequest;

class JobapplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cv_apllys_count = UserJobApply::where('user_id', auth()->user()->id)->count();
        $cv_apllys = UserJobApply::where('user_id', auth()->user()->id)->get();
        $count_job = Job::where('user_id', auth()->user()->id)->get()->count();
        $count_cv_appled =  UserJobApply::where('user_id', auth()->user()->id)
        ->where('status', 1)
        ->count();
        $count_not_applly =  UserJobApply::where('user_id', auth()->user()->id)
        ->where('status', 0)
        ->count();
        $param_count = [
            'cv_apllys_count' => $cv_apllys_count,
            'count_cv_appled' => $count_cv_appled,
            'count_not_applly' => $count_not_applly
        ];
        return view('employee::cv-apply.index',compact('cv_apllys','param_count'));
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
    public function store(CvapplyRequest $request)
    {
        try {

            $job = Job::find($request->job_id);
            $cv_apply = new UserJobApply();
            
            $cv_apply->cv_id = $request->cv_id;
            $cv_apply->user_id = $job->user_id;
            $cv_apply->job_id  = $job->id;
            $cv_apply->status = UserJobApply::INACTIVE;
            
            $cv_apply->save();

            $message = "Nộp hồ sơ thành công!";
            return redirect()->route('website.jobs.show',$job->slug)->with('success', $message);
        } catch (\Exception $e) {
            // DB::rollback(); // Hoàn tác giao dịch nếu có lỗi
            Log::error('Lỗi xảy ra: ' . $e->getMessage());
            return redirect()->route('website.jobs.show',$request->$job->slug)->with('error', 'Nộp hồ sơ thất bại!');
        }
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        try {
            $item = UserJobApply::findOrFail($id);
            // if($item->user_id != auth()->id()){
            //     return redirect()->route( 'employee.cv.index' );
            // }
            $params = [
                'item' => $item
            ];
            return view('employee::cv-apply.show',$params);
        } catch (ModelNotFoundException $e) {
            Log::error('Item not found: ' . $e->getMessage());
            return redirect()->route( 'employee.cv.index' )->with('error', __('sys.item_not_found'));
        }
    
        
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
            $cv_apply = UserJobApply::findOrFail($request->id);
           
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
    public function destroy(Request $request, $id)
    {
        try {
            $cv = UserJobApply::find($request->id);
            $cv->forceDelete();
            $message = "Xóa thành công!";
            return redirect()->route('employee.cv.index')->with('success', $message);
        } catch (QueryException $e) {
            Log::error('Bug occurred: ' . $e->getMessage());
            return redirect()->route('employee.cv.index')->with('error', 'Xóa thất bại!');
        }
    }
}
