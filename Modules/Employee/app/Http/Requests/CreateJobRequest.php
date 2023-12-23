<?php

namespace Modules\Employee\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateJobRequest extends FormRequest
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
            'career' => 'required',
            'Work_address' => 'required',
            'Job_description' => 'required',
            'Job_requirements' => 'required',
            'wage' => 'required',
            'type_work' => 'required',
        ];
    }

    public function messages()
    {
        return  [
            'name.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'career.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'Work_address.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'Job_description.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'Job_requirements.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'wage.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'type_work.required' => 'Vui lòng nhập đầy đủ thông tin!',
            ];
    }


}
