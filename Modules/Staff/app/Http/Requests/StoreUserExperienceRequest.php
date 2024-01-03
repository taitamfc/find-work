<?php

namespace Modules\Staff\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserExperienceRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'numerical' => 'required',
            'company' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'rank_id' => 'required',
            'position' => 'required|string|max:255',
            'job_description' => 'required|string',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function messages(): array
    {
        return [
            'numerical.required' => 'Vui lòng nhập đầy đủ thông tin.',
            'company.required' => 'Vui lòng nhập đầy đủ thông tin.',
            'start_date.required' => 'Vui lòng nhập đầy đủ thông tin.',
            'end_date.required' => 'Vui lòng nhập đầy đủ thông tin.',
            'position.required' => 'Vui lòng nhập đầy đủ thông tin.',
            'job_description.required' => 'Vui lòng nhập đầy đủ thông tin.',
            'end_date.after' => 'Thời gian kết thúc phải sau thời gian bắt đầu.',
        ];
    }
    public function authorize(): bool
    {
        return true;
    }
}
