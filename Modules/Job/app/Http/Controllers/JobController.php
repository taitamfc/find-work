<?php

namespace Modules\Job\app\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

use Modules\Staff\app\Models\UserStaff;
use Modules\Staff\app\Models\UserCv;
use Modules\Job\app\Models\Job;
class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $model = Job::class;
    protected $link_view = "job::jobs.";
    public function index(Request $request)
    {
        $query = $this->model::query();
        if ($request->pagination) {
            $paginate = $request->pagination;
        }else{
            $paginate = 5;
        }
        if ($request->has('searchTypeWork')) {
            $query->where('type_work',$request->searchTypeWork);
        }
        $items = $query->paginate($paginate);
        $param = [
            'items' => $items,
            'request' => $request
        ];
        return view($this->link_view.'index', $param);
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
    public function show(string $slug)
    {
        $user_id = Auth::id();
        // $job = Job::find($id);
        $job = Job::where('slug', $slug)->with('userEmployee')->firstOrFail();
        // $related_jobs = Job::where('')
        // dd($job);
        $params = [
            'job' => $job,
            'user_id' => $user_id,
        ];
        // dd($params);
        return view('job::jobs.show',$params);
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