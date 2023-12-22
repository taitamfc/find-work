<?php

namespace Modules\Staff\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Modules\Staff\app\Http\Requests\UpdateUserStaffRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Staff\app\Models\StaffUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $item = StaffUser::where('user_id', $user->id)->with('user')->first();
        $params = [
            'item' => $item,
        ];
    
        return view('staff::index', $params);
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
    public function update(UpdateUserStaffRequest $request, $id)
    {
        $staff = StaffUser::findOrFail($id);
        $user = $staff->user;
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        $staff->update([
            'phone' => $request->input('phone'),
            'birthdate' => $request->input('birthdate'),
            'experience_years' => $request->input('experience_years'),
            'gender' => $request->input('gender'),
            'city' => $request->input('city'),
            'address' => $request->input('address'),
            'outstanding_achievements' => $request->input('outstanding_achievements'),
     
        ]);
        return back()->with('success', 'Thông tin đã được cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
