<?php

namespace Modules\Employee\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Employee\app\Models\Job;
use Illuminate\Support\Facades\Auth;
use Modules\Employee\app\Http\Requests\CreateJobRequest;
use Modules\Employee\app\Http\Requests\UpdateJobRequest;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::all();  
        return view('employee::job.index',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee::job.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateJobRequest $request): RedirectResponse
    {
        try {
            $job = new Job();
            $job->name = $request->name;
            $job->career = $request->career;
            $job->Work_address = $request->Work_address;
            $job->Job_description = $request->Job_description;
            $job->Job_requirements = $request->Job_requirements;
            $job->wage = $request->wage;
            $job->type_work = $request->type_work;
            $job->user_id = Auth::id();

            $job->save();

            $message = "Thêm mới thành công!";
            return redirect()->route('employee.job.index')->with('success', $message);
        } catch (\Exception $e) {
            DB::rollback(); // Hoàn tác giao dịch nếu có lỗi
            Log::error('Lỗi xảy ra: ' . $e->getMessage());
            return redirect()->route('employee.job.create')->with('error', 'Thêm mới bị lỗi!');
        }
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
    public function edit(Request $request,$id)
    {
        $job = Job::findOrFail($request->id);
        return view('employee::job.edit',compact('job'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, $id): RedirectResponse
    {
        try {
            $job = Job::findOrFail($request->id);
            $job->name = $request->name;
            $job->career = $request->career;
            $job->Work_address = $request->Work_address;
            $job->Job_description = $request->Job_description;
            $job->Job_requirements = $request->Job_requirements;
            $job->wage = $request->wage;
            $job->type_work = $request->type_work;
            $job->user_id = Auth::id();

            $job->save();

            $message = "Cập Nhật thành công!";
            return redirect()->route('employee.job.index')->with('success', $message);
        } catch (\Exception $e) {
            DB::rollback(); // Hoàn tác giao dịch nếu có lỗi
            Log::error('Lỗi xảy ra: ' . $e->getMessage());
            return redirect()->route('employee.job.edit')->with('error', 'Cập Nhật bị lỗi!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        try {
            $job =  Job::find($request->id);
            $job->delete();
            $message = "Xóa thành công!";
            return redirect()->route('employee.job.index')->with('success', $message);
        } catch (QueryException $e) {
            Log::error('Bug occurred: ' . $e->getMessage());
            return redirect()->route('employee.job.index')->with('error', 'Xóa thất bại!');
        }
    }
}
