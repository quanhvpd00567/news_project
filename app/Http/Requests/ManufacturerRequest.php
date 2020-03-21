<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManufacturerRequest extends FormRequest
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
            'name' => 'required|max:255',
            'name_en' => 'required|max:255',
            'image' => 'required|max:255',
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
            'name' => 'Tên loại hình sản xuất',
            'name_en' => 'Tên loại hình sản xuất (Tiếng anh)',
            'image' => 'Hình ảnh',
        ];
    }
}
