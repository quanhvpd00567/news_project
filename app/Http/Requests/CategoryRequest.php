<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class CategoryRequest extends FormRequest {

    public function authorize()
    {
        return true;
    }

    public function rules(){
        return [
            'category_name' => 'required|unique:categories|max:255',
        ];
    }
    public function messages(){
        return [
            'category_name.required' => 'Category name is not empty',
            'category_name.unique' => 'Category name is unique',
            'category_name.max' => 'Category name max length is :max',
        ];
    }
}
