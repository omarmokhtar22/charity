<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NumberRequest extends FormRequest
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
            'field_1' => 'required|string',
            'field_2' => 'required|string',
            'field_3' => 'required|string',
            'field_4' => 'required|string',

            'value_1' => 'required|numeric',
            'value_2' => 'required|numeric',
            'value_3' => 'required|numeric',
            'value_4' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'field_1.required' => 'برجاء ادخال الاسم',
            'field_1.string' => 'يرجى ادخال اسم نصى صحيح',
            'value_1.required' => 'برجاء ادخال القيمة',
            'value_1.numeric' => 'برجاء ادخال رقم',

            'field_2.required' => 'برجاء ادخال الاسم',
            'field_2.string' => 'يرجى ادخال اسم نصى صحيح',
            'value_2.required' => 'برجاء ادخال القيمة',
            'value_2.numeric' => 'برجاء ادخال رقم',

            'field_3.required' => 'برجاء ادخال الاسم',
            'field_3.string' => 'يرجى ادخال اسم نصى صحيح',
            'value_3.required' => 'برجاء ادخال القيمة',
            'value_3.numeric' => 'برجاء ادخال رقم',

            'field_4.required' => 'برجاء ادخال الاسم',
            'field_4.string' => 'يرجى ادخال اسم نصى صحيح',
            'value_4.required' => 'برجاء ادخال القيمة',
            'value_4.numeric' => 'برجاء ادخال رقم',
        ];
    }
}
