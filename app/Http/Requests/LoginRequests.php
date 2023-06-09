<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequests extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email'=>'required|email',
            'password'=>'required|min:6'
        ];
    }

    public function messages()
    {
        return[
            'email.required'=>'Vui lòng không bỏ trống email',
            'email.email'=>'Vui lòng nhập đúng định dạng email',
            'password.required'=>'Vui lòng không bỏ trống password',
            'password.min'=>'Mật khẩu tối thiếu lớn hơn 5'
        ];
    }
}
