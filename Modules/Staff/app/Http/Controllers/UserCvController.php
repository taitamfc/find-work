<?php

namespace Modules\Staff\app\Http\Controllers;
use App\Http\Controllers\Controller;
use Modules\Staff\app\Http\Requests\StoreUserCvRequest;
use Modules\Staff\app\Http\Requests\UpdateUserCvRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Staff\app\Models\UserCv;
use Modules\Staff\app\Models\UserExperience;
use Illuminate\Support\Facades\Auth;
use Modules\Staff\app\Models\StaffUser;
use Illuminate\Support\Facades\Log;
class UserCvController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //  public function index()
    // {
    //     $user = Auth::user();
    //     $item = UserCv::where('user_id', $user->id)->first(); 
    //     // dd($item);
    //     $params = [
    //         'user' => $user,
    //         'item' => $item,
    //     ];
    //     return view('staff::cv.information', $params);
    // }

    public function index()
    {
        $user = Auth::user();
        $items = UserCv::where('user_id', $user->id)->get(); 
        // dd($item);
        $params = [
            'user' => $user,
            'items' => $items,
        ];
        return view('staff::cv.index', $params);
    }
    
    /**
     * Show the form for creating a new resource.
     */
// UserCvController.php
public function create(Request $request)
{
    $user   = Auth::user();
    $saved = UserCv::create([
        'user_id' => $user->id
    ]);
    return redirect()->route('staff.cv.edit',$saved->id)->with('success', 'Hồ sơ được cập nhật thành công');

    
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request->all());
        $cv_id = session()->get('cv_id', 0);
        $user = Auth::user();
        $request->merge(['user_id' => $user->id]);
        $tab  = $request->tab;
        switch ($tab) {
            case 'personal-information':
                $saved = UserCv::savePersonalInformation($request,$cv_id);
                session(['cv_id' => $saved->id]);
                return redirect()->route('staff.cv.create',['tab'=>'job-information']);
                break;
            case 'job-information':
                $saved = UserCv::saveJobInformation($request,$cv_id);
                session(['cv_id' => $saved->id]);
                return redirect()->route('staff.cv.create',['tab'=>'experience']);
                break;
            case 'experience':
                $saved = UserExperience::saveExperienceInformation($request,$cv_id);
                session(['cv_id' => $saved->id]);
                return redirect()->route('staff.cv.create',['tab'=>'education']);
                break;
            // case 'education':
            //     $data = $request->all();
            //     $data['user_id'] = $user->id;
            //     $saved = UserCv::savePersonalInformation($data,$cv_id);
            //     session(['cv_id' => $saved]);
            //     return redirect()->route('staff.cv.create',['tab'=>'skill']);
            //     break;
            // case 'skill':
            //     $data = $request->all();
            //     $data['user_id'] = $user->id;
            //     $saved = UserCv::savePersonalInformation($data,$cv_id);
            //     session(['cv_id' => $saved]);
            //     return redirect()->route('staff.cv.create',['tab'=>'skill']);
            //     break;
            default:
                # code...
                break;
        }
    
        $data = $request->all();
        $data['user_id'] = $user->id;
        try {
            UserCv::create($data);
            return redirect()->route('staff.cv.index')->with('success', 'Hồ sơ được tạo thành công');
        } catch (\Exception $e) {
            Log::error('Exception while creating profile: ' . $e->getMessage());
            dd($e);
            return redirect()->back()->withInput()->with('error', 'Không tạo được hồ sơ');
        }
    }
    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        $item = UserCv::findOrFail($id);
        
        $params = [
            'item' => $item,
        ];
    
        return view('staff::cv.show', $params);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,$id)
    {
        $user   = Auth::user();
        $item = UserCv::findOrFail($id);
        $tab    = $request->tab ? $request->tab : 'personal-information';
        $item   = StaffUser::where('user_id', $user->id)->first();
        $userExperiences = UserExperience::where('user_id', $user->id)->where('cv_id',$id)->get();
        $params = [
            'user' => $user,
            'item' => $item,
            'tab' => $tab,
            'userExperiences' => $userExperiences,
        ];
        return view('staff::cv.edit', $params);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserCvRequest $request, $id)
    {
        $userCv = UserCv::findOrFail($id);
    
        $data = $request->all();
    
        $userCv->update($data);
    
        return redirect()->route('staff.cv.edit',$id)->with('success', 'Hồ sơ được cập nhật thành công');
    }
    /**
     * Remove the specified resource from storage.
     */
  /**
 * Remove the specified resource from storage.
 */
public function destroy($id)
{
    $userCv = UserCv::findOrFail($id);
    $userCv->delete();

    return redirect()->route('staff.cv.index')->with('success', 'Profile deleted successfully');
}

}