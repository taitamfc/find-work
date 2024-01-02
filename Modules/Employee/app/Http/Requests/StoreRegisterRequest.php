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
            'name' => 'required|max:100',
            'email' => 'required|unique:users|email',
            'cp_name' => 'required|max:100',
            'phone' => 'required',
            'address' => 'required',
            'website' => 'required',
            'password' => 'required',
            'repeatpassword'=> 'required|same:password',
            'image'=> 'required',
        ];
    }

    public function messages()
    {
        return  [
            'name.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'name.max' => 'Tên không được vượt quá 100 ký tự!',
            'email.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'email.unique' => 'Email đã tồn tại!',
            'email.email' => 'Email không hợp lệ!',
            'cp_name.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'cp_name.max' => 'Tên không được vượt quá 100 ký tự!',
            'phone.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'address.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'website.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'password.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'repeatpassword.required' => 'Vui lòng nhập đầy đủ thông tin!',
            'repeatpassword.same' => 'Mật khẩu không khớp!',
            'image.required' => 'Vui lòng nhập đầy đủ thông tin!',
        ];
    }
}