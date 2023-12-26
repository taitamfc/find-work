<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Employee\app\Models\Job;
use Modules\Staff\app\Models\UserStaff;
class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::all();
        return view('website/jobs/index',compact('jobs'));
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
        $job = Job::find($id);
        return view('website/jobs/show',compact('job'));
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
        $job = Job::find($job_id);
        $params = [
            'userStaffs' => $userStaffs,
            'job' =>$job
        ];
        return view('website/aplications/index',$params);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
