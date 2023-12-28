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
            'cp_name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'website' => 'required',
            'password' => 'required',
            'repeatpassword'=> 'required',
            'image'=> 'required',
        ];
    }

    public function messages()
    {
        return  [
            'name.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'email.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'email.required|unique:users|email' => 'Email đã tồn tại!',
            'cp_name.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'phone.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'address.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'website.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'password.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'repeatpassword.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'image.required' => 'Vui lòng nhập đầy đủ thông tin!',
            ];
    }
}