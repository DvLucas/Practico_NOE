<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductPost extends FormRequest
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
            'name' => 'required|min:5|max:255',
            'price' => 'required',
            'stock' => 'required',
            'description' => 'required',
            'id_category' => 'required',
            'id_brand' => 'required',
            'image' => 'mimes:jpg,png,jpeg|max:102400',
            'state' => 'required'
        ];
    }
}
