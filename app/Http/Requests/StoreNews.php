<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNews extends FormRequest
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
            'title' => 'required|unique:news',
            'summary' => 'required',
            'content' => 'required',
            'hot' => 'required',
            'categoryNewsId' => 'required',
            'images' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'images.required' => 'Please upload at least 1 image for a product'
        ];
    }
}