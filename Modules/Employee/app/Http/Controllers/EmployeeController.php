<?php

namespace Modules\Employee\app\Http\Controllers;
use Modules\Employee\app\Models\User;
use Modules\Employee\app\Models\UserEmployee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userEmployees = UserEmployee::whereHas('user', function ($query) {
            $query->where('status', UserEmployee::ACTIVE);
        })->get();
        
        $params = [
            'userEmployees' => $userEmployees,
        ];
        return view('employee::employers.index',$params);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $userEmployee = UserEmployee::where('slug',$id)->firstOrFail();
            $jobs = $userEmployee->jobs;
            $params = [
                'userEmployee' => $userEmployee,
                'jobs' => $jobs,
            ];
            return view('employee::employers.show', $params);
        } catch (ModelNotFoundException $e) {
            Log::error('Item not found: ' . $e->getMessage());
            return redirect()->route( 'home' )->with('error', __('sys.item_not_found'));
        }
    }
}
