<?php

namespace Modules\Staff\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Staff\app\Http\Requests\StoreUserSkillRequest;

use Modules\Staff\app\Models\UserSkill;

use Illuminate\Support\Facades\Auth;
class UserSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('staff::index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('staff::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserSkillRequest $request): RedirectResponse
    {
        $user = Auth::user();
        $skill = new UserSkill([
            'user_id' => $user->id,
            'cv_id' => $request->cv_id,
            'numerical' => $request->numerical,
            'special_skill' => $request->special_skill,
            'skill_level' => $request->skill_level,
            'description' => $request->description,
        ]);
        $skill->save();
        return redirect()->route('staff.cv.index')->with('success', 'Thêm mới hồ sơ thành công');
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
        $userSkill = UserSkill::findOrFail($id);
        $userSkill->update([
            'numerical' => $request->numerical,
            'special_skill' => $request->special_skill,
            'skill_level' => $request->skill_level,
            'description' => $request->description,
        ]);
        return redirect()->back()->with('success', 'Thông tin kỹ năng đã được cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $skill = UserSkill::findOrFail($id);
        $skill->delete();
        return redirect()->back()->with('success', 'Xóa thành công.');
    }
}
