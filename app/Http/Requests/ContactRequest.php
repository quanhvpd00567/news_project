<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'address' => 'required|max:255',
            'title' => 'required|max:255',
            'content' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'max' => ':attribute không được quá :max ký tự'
        ];
    }

    public function attributes()
    {
        return [
            'full_name' => trans('view.contact.Form.labels.name'),
            'address' => trans('view.contact.Form.labels.address'),
            'title' => trans('view.contact.Form.labels.title'),
            'content' => trans('view.contact.Form.labels.content'),
        ];
    }
}
