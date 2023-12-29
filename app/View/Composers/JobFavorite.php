<?php
 
namespace App\View\Composers;
 
use App\Repositories\UserRepository;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Modules\Staff\app\Models\UserJobFavorite;
 
class JobFavorite
{
    /**
     * Create a new profile composer.
     */
    public function __construct() {}
 
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $items = [];
        if( Auth::user() ){
            $items = UserJobFavorite::where( 'user_id', Auth::id())->pluck('job_id')->toArray();
        }
        $view->with('cr_user_favorites', $items);
        
    }
}