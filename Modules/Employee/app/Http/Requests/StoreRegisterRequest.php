<?php

namespace Modules\Employee\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'company_name' => 'required',
            'company_phone' => 'required',
            'company_address' => 'required',
            'company_website' => 'required',
            'password' => 'required',
            'repeatpassword'=> 'required',
        ];
    }

    public function messages()
    {
        return  [
            'name.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'email.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'company_name.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'company_phone.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'company_address.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'company_website.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'password.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'repeatpassword.required' => 'Vui lòng nhập đầy đủ thông tin!',
            ];
    }
}