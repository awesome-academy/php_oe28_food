<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|unique:products|string',
            'category_id' => 'required|integer',
            'image' => 'image|mimes:jpg,jpeg,png|required',
            'detail' => 'required|string',
            'price' => 'required|integer|max:100',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Name',
            'category_id' => 'Category',
            'image' => 'Image',
            'detail' => 'Detail',
            'price' => 'Price',
        ];
    }
}
