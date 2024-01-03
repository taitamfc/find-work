<?php

namespace Modules\Staff\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Response;
use Modules\Staff\app\Models\UserExperience;
use Modules\Staff\app\Http\Requests\StoreUserExperienceRequest;
use Modules\Staff\app\Http\Requests\UpdateUserExperienceRequest;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;

class UserExperienceController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserExperienceRequest $request): RedirectResponse
    {
        $user = Auth::user();
        $experience = new UserExperience([
            'numerical' => $request->numerical,
            'position' => $request->position,
            'company' => $request->company,
            'rank_id' => $request->rank_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'job_description' => $request->job_description,
            'user_id' => $user->id,
            'cv_id' => $request->cv_id,
            'is_current' => $request->is_current,   
        ]);
        $experience->save();
        return redirect()->back()->with('success', 'Kinh nghiệm đã được thêm thành công.');
    }
    /**
     * Update the specified resource in storage.
     */
        public function update(UpdateUserExperienceRequest $request, $id)
    {
        try {
            $experience = UserExperience::findOrFail($id);
            $experience->update([
                'numerical' => $request->numerical,
                'position' => $request->position,
                'company' => $request->company,
                'rank_id' => $request->rank_id,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'job_description' => $request->job_description,
                'is_current' => $request->is_current ? $request->is_current : 0,
            ]); 

            return response()->json(['success' => true, 'message' => 'Cập nhật thành công!']);
    } catch (QueryException $e) {
        Log::error($e->getMessage()); // Ghi log lỗi

        // Trả về thông báo thất bại dưới dạng JSON
        return response()->json(['success' => false, 'message' => 'Cập nhật thất bại']);
    }
    }

    public function destroy($id)
    {
        $experience = UserExperience::findOrFail($id);
        $experience->delete();
        return redirect()->back()->with('success', 'Công việc đã được xóa thành công.');
    }
    }