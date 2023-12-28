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
                'desired_rank' => 'required',
                'employment_type' => 'required',
                'industry' => 'required',
                'desired_location' => 'required',
                'desired_salary' => 'required|numeric',
                'career_objective' => 'required',
            ];
        }
        
        return $rules;
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}