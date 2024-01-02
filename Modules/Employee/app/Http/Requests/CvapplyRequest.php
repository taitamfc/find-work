<?php

namespace Modules\Employee\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CvapplyRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'cv_id' => 'required',
        ];
    }

    public function messages()
    {
        return  [
                'cv_id.required' => 'Bạn chưa chọn Hồ sơ, nếu chưa có vui lòng thêm mới hồ sơ!',                         
            ];
    }
}
