<?php

namespace Modules\Staff\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserSkillRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'numerical' => 'required',
            'special_skill' => 'required',
            // 'skill_level' => 'required',
            'description' => 'required',
        ];
    }
    /**
     * Determine if the user is authorized to make this request.
     */
    public function messages(): array
    {
        return [
            'numerical.required' => 'Vui lòng nhập đầy đủ thông tin.',
            'special_skill.required' => 'Vui lòng nhập đầy đủ thông tin.',
            'description.required' => 'Vui lòng nhập đầy đủ thông tin.',
        ];
    }
    public function authorize(): bool
    {
        return true;
    }
}
