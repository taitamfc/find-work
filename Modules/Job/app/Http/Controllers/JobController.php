<?php

namespace Modules\Job\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Employee\app\Models\Job;
use Modules\Staff\app\Models\UserStaff;
use Modules\Staff\app\Models\UserCv;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::all();
        return view('job::jobs.index',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user_id = Auth::id();
        $job = Job::find($id);
        return view('job::jobs.show',compact(['job','user_id']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
    public function aplication($job_id)
    {
        $userStaffs = UserStaff::all();
        $userCvs = UserCv::all();
        $job = Job::find($job_id);
        $params = [
            'userStaffs' => $userStaffs,
            'userCvs' => $userCvs,
            'job' =>$job
        ];
        return view('job::aplications.index',$params);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
