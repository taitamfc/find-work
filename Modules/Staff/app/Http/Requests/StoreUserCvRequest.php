<?php

namespace Modules\Staff\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserCvRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $rules = [];
        if($this->tab == 'personal-information'){
            $rules = [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'birthdate' => 'required',
                'gender' => 'required',
                'city' => 'required',
                'address' => 'required',
                'experience_years' => 'required',
            ];
        } 
        if($this->tab == 'job-information'){
            $rules = [
                'cv_file' => 'required',
                'desired_position' => 'required',
                'rank_id' => 'required',
                'form_work_id' => 'required',
                'career_id' => 'required',
                'desired_location' => 'required',
                'wage_id' => 'required|numeric',
                'career_objective' => 'required',
            ];
        }
        
        return $rules;
    }

    public function messages(): array
    {
        return [
            'cv_file.required' => 'Vui lòng nhập đầy đủ thông tin.',
            'desired_position.required' => 'Vui lòng nhập đầy đủ thông tin.',
            'rank_id.required' => 'Vui lòng nhập đầy đủ thông tin.',
            'form_work_id.required' => 'Vui lòng nhập đầy đủ thông tin.',
            'career_id.required' => 'Vui lòng nhập đầy đủ thông tin.',
            'desired_location.required' => 'Vui lòng nhập đầy đủ thông tin.',
            'wage_id.required' => 'Vui lòng nhập đầy đủ thông tin.',
            'career_objective.required' => 'Vui lòng nhập đầy đủ thông tin.',
            'name.required' => 'Vui lòng nhập đầy đủ thông tin.',
            'email.required' => 'Vui lòng nhập đầy đủ thông tin.',
            'phone.required' => 'Vui lòng nhập đầy đủ thông tin.',
            'address.required' => 'Vui lòng nhập đầy đủ thông tin.',
            'city.required' => 'Vui lòng nhập đầy đủ thông tin.',
            'birthdate.required' => 'Vui lòng nhập đầy đủ thông tin.',
            'gender.required' => 'Vui lòng nhập đầy đủ thông tin.',
            'experience_years.required' => 'Vui lòng nhập đầy đủ thông tin.',
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