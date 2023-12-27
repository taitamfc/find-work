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
use App\Models\Career;
use App\Models\Level;
use App\Models\Rank;
use App\Models\Wage;
use App\Models\FormWork;
use App\Models\JobPackage;


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
        $careers = Career::where('status',Career::ACTIVE)->get();
        $degrees = Level::where('status',Level::ACTIVE)->get();
        $ranks = Rank::where('status',Rank::ACTIVE)->get();
        $formworks = FormWork::where('status',FormWork::ACTIVE)->get();
        $wages = Wage::where('status',Wage::ACTIVE)->get();
        $job_packages = JobPackage::where('status',JobPackage::ACTIVE)->get();
        return view('employee::job.create_copy',compact(['careers','degrees','ranks','formworks','wages','job_packages']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateJobRequest $request): RedirectResponse
    {
        try {
            $job = new Job();
            $job->name = $request->name;
            $job->slug = $request->slug;
            $job->career = $request->career;
            $job->type_work = $request->type_work;
            $job->deadline = $request->deadline;
            $job->start_day = $request->start_day;
            $job->experience = $request->experience;
            $job->wage = $request->wage;
            $job->gender = $request->gender;
            $job->rank = $request->rank;
            $job->job_package = $request->job_package;
            $job->price = $request->price;
            $job->number_day = $request->number_day;
            $job->work_address = $request->work_address;
            $job->degree = $request->degree;
            $job->description = $request->description;
            $job->requirements = $request->requirements;
            $job->user_id = Auth::id();
            
            $job->status = 1;

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
    public function show(Request $request,$id)
    {
        $careers = Career::where('status',Career::ACTIVE)->get();
        $degrees = Level::where('status',Level::ACTIVE)->get();
        $ranks = Rank::where('status',Rank::ACTIVE)->get();
        $formworks = FormWork::where('status',FormWork::ACTIVE)->get();
        $wages = Wage::where('status',Wage::ACTIVE)->get();
        $job_packages = JobPackage::where('status',JobPackage::ACTIVE)->get();
        $job = Job::findOrFail($request->id);
        return view('employee::job.show',compact(['job','careers','degrees','ranks','formworks','wages','job_packages']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,$id)
    {
        // $job = Job::findOrFail($request->id);
        // return view('employee::job.edit',compact('job'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, $id): RedirectResponse
    {
        try {
            $job = Job::findOrFail($request->id);
            $job->name = $request->name;
            $job->slug = $request->slug;
            $job->career = $request->career;
            $job->type_work = $request->type_work;
            $job->deadline = $request->deadline;
            $job->start_day = $request->start_day;
            $job->experience = $request->experience;
            $job->wage = $request->wage;
            $job->gender = $request->gender;
            $job->rank = $request->rank;
            $job->job_package = $request->job_package;
            $job->price = $request->price;
            $job->number_day = $request->number_day;
            $job->work_address = $request->work_address;
            $job->degree = $request->degree;
            $job->description = $request->description;
            $job->requirements = $request->requirements;
            $job->status = 1;
            $job->user_id = Auth::id();

            $job->save();

            $message = "Cập Nhật thành công!";
            return redirect()->route('employee.job.index')->with('success', $message);
        } catch (\Exception $e) {
            DB::rollback(); // Hoàn tác giao dịch nếu có lỗi
            Log::error('Lỗi xảy ra: ' . $e->getMessage());
            return redirect()->route('employee.job.show')->with('error', 'Cập Nhật bị lỗi!');
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
