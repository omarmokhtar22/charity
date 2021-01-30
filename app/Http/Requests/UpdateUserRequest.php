<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email'=> 'required|email|unique:users,email,'.$this->user->id,
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'ادخل اسم المستخدم',
            'password.required' => 'ادخل كلمة المرور',
            'email.required' => 'ادخل البريد الالكتروني',
            'email.unique' => 'الايميل المدخل موجود مسبقا',
            'email.email' => 'يجب ادخال صيغة بريد الكترونى صحيحه',
        ];
    }
}
