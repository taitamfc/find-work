<?php

namespace Modules\Employee\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateJobRequest extends FormRequest
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
            'name' => 'required',
            'slug' => 'required',
            'career' => 'required',
            'type_work' => 'required',
            'deadline' => 'required',
            'experience' => 'required',
            'wage_min' => 'required',
            'wage_max' => 'required',
            'gender' => 'required',
            'work_address' => 'required',
            'degree' => 'required',
            'status' => 'required',
            'description' => 'required',
            'requirements' => 'required',
            
        ];
    }

    public function messages()
    {
        return  [
            'name.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'slug.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'career.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'type_work.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'deadline.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'experience.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'wage_min.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'wage_max.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'gender.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'work_address.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'degree.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'status.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'description.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'requirements.required' => 'Vui lòng nhập đầy đủ thông tin!',
            
            ];
    }
}
