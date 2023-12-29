<?php

namespace Modules\Employee\app\Http\Controllers;
use Modules\Employee\app\Models\User;
use Modules\Employee\app\Models\UserEmployee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userEmployees = UserEmployee::all();
        
        $params = [
            'userEmployees' => $userEmployees,
        ];
        return view('employee::employer/index',$params);
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
        $userEmployee = UserEmployee::with(['user'])->find($id);
        $jobs = $userEmployee->jobs;
        $params = [
            'userEmployee' => $userEmployee,
            // 'jobs' => $jobs,
        ];
        return view('employee::employer.show', $params);
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
