<?php

namespace Modules\Staff\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserExperienceRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'numerical1' => 'required',
            'is_current' => 'required|boolean',
            'company' => 'required|string|max:255',
            'start_date' => 'required',
            'end_date' => 'required',
            'level' => 'required',
            'position' => 'required|string|max:255',
            'job_description' => 'required|string',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}
