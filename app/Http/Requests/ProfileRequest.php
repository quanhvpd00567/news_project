<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'full_name' => 'required|max:255',
            'birth_of_day' => 'required|max:50|date_format:Y/m/d',
        ];
    }
    public function messages()
    {
        return [
            'full_name.required' => 'Full name is not empty',
            'full_name.max' => 'Full name max length is :max character',
        ];
    }
}
