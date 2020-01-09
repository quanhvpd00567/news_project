<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' => 'required|unique:users|email|max:255',
            'password' => 'required|max:30|min:8',
            'password_confirm' => 'required|max:30|min:8|same:password',
            'birth_of_day' => 'required|max:50|date_format:Y/m/d',
        ];
    }
    public function messages()
    {
        return [
            'full_name.required' => 'Full name is not empty',
            'full_name.max' => 'Full name max length is :max character',
            'email.required' => 'Email is not empty',
            'email.max' => 'Email max length is :max character',
            'email.unique' => 'Email is exists',
            'password.required' => 'Password is not empty',
            'password.max' => 'Password max length is :max character',
            'password.min' => 'Password min length is :min character',
            'password_confirm.min' => 'Password confirm min length is :min character',
            'password_confirm.max' => 'Password max length is :max character',
            'password_confirm.required' => 'Password confirm is not empty',
        ];
    }
}
