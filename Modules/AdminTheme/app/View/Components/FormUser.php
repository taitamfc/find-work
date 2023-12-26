<?php

namespace Modules\AdminTheme\app\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use App\Models\User;
class FormUser extends Component
{
    protected $type;
    protected $user_id;
    /**
     * Create a new component instance.
     */
    public function __construct($type = '',$user_id = null)
    {
        $this->type = $type;
        $this->user_id = $user_id;
    }

    /**
     * Get the view/contents that represent the component.
     */
    public function render(): View|string
    {
        $query = User::query(true);
        if($this->type){
            $query->where('type',$this->type);
        }
        $items = $query->get();
        $params = [
            'user_id'   => $this->user_id,
            'items'     => $items,
        ];
        return view('admintheme::components.form-user',$params);
    }
}
