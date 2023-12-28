<?php

namespace Modules\Staff\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Staff\app\Models\Job;
use Modules\Staff\app\Models\UserJobFavorite;
class UserJobFavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $userJobFavoriteIds = UserJobFavorite::where('user_id', $user->id)->pluck('job_id')->toArray();
        $userJobFavorites = Job::whereIn('id', $userJobFavoriteIds)->get();
        $params = [
            'userJobFavorites' => $userJobFavorites,
        ];
        return view('staff::job-favorite.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function job_favorite($id)
    { 
        $user = auth()->user();
        $item = UserJobFavorite::where('user_id', $user->id)
            ->where('job_id', $id)->first();
        if (!$item) {
            $item = new UserJobFavorite();
            $item->user_id = $user->id;
            $item->job_id = $id;
            $item->save();
            $type = 'add';
        } else {
            $item->delete();
            $type = 'remove';
        }    
        if ($type == 'add') {
            return response()->json(['success' => true, 'message' => 'Công việc được thêm vào mục yêu thích', 'type' => $type], 200);
        } elseif ($type == 'remove') {
            return response()->json(['success' => true, 'message' => 'Việc làm đã bị xóa khỏi mục yêu thích', 'type' => $type], 200);
        }
        return response()->json(['success' => false, 'message' => 'Có lỗi xảy ra'], 500);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('staff::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('staff::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $userFavorite = UserJobFavorite::findOrFail($id);
            $userFavorite->delete();
    
            return redirect()->route('staff.job-favorite')
                ->with('success', 'Xóa ứng tuyển thành công!');
        } catch (\Exception $exception) {
            return redirect()->route('staff.job-favorite')
                ->with('error', 'Đã có lỗi xảy ra khi xóa ứng tuyển.');
        }
    }
}
