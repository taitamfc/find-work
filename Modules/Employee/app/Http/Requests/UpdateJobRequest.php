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
            'career_ids' => 'required',
            'formwork_id' => 'required',
            'deadline' => 'required',
            'experience' => 'required',
            'wage_id' => 'required',
            'gender' => 'required',
            'work_address' => 'required',
            'degree_id' => 'required',
            'description' => 'required',
            'requirements' => 'required',
            'rank_id' => 'required',
            'number_day' => 'required',
            'start_day' => 'required',
            'jobpackage_id' => 'required',
            'price' => 'required',
            'end_day' => 'required',
            'start_hour' => 'required',
            'end_hour' => 'required',
            
        ];
    }

    public function messages()
    {
        return  [
            'name.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'career_ids.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'formwork_id.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'deadline.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'experience.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'wage_id.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'gender.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'work_address.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'degree_id.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'description.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'requirements.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'rank_id.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'number_day.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'start_day.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'jobpackage_id.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'price.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'end_day.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'start_hour.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'end_hour.required' => 'Vui lòng nhập đầy đủ thông tin!',
            
            ];
    }
}
