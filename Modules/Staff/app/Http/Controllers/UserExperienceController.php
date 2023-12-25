<?php

namespace Modules\Staff\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Staff\app\Models\UserExperience;

use Illuminate\Support\Facades\Auth;

class UserExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $items = UserExperience::where('user_id', $user->id)->get(); 
        // dd($items);
        $params = [
            'user' => $user,
            'items' => $items,
        ];
        return view('staff::cv.tabs.experience', $params);

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
    public function store(Request $request): RedirectResponse
    {
        $user = Auth::user();
        $experience = new UserExperience([
            'numerical' => $request->numerical,
            'position' => $request->position,
            'company' => $request->company,
            'level' => $request->level,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'job_description' => $request->job_description,
            'user_id' => $user->id,
            'cv_id' => session('cv_id'),
        ]);
        $experience->save();
        return redirect()->back()->with('success', 'Công việc mới đã được thêm thành công.');
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

        $experience = UserExperience::findOrFail($id);
        $experience->update([
            'user_id' => Auth::id(),
            'cv_id' => session('cv_id'),
            'numerical' => $request->numerical,
            'position' => $request->position,
            'company' => $request->company,
            'level' => $request->level,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'job_description' => $request->job_description,
        ]);
        return redirect()->back()->with('success', 'Công việc đã được cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     */
  /**
 * Remove the specified resource from storage.
 */
public function destroy($id)
{
    $experience = UserExperience::findOrFail($id);
    $experience->delete();
    return redirect()->back()->with('success', 'Công việc đã được xóa thành công.');
}
}
