<?php

namespace App\Http\Controllers;
use Modules\Employee\app\Models\User;
use Modules\Employee\app\Models\UserEmployee;
use Illuminate\Http\Request;

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
        return view('website/employer/index',$params);
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
        $userEmployee = UserEmployee::with('user')->find($id);
        // dd($userEmployee);
        // dd($userEmployee);
        $params = [
            'userEmployee' => $userEmployee,
        ];
    
        return view('website.employer.show', $params);
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
