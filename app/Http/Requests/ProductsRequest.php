<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
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
        return
        [
            // 'logo'                   => 'required_without:id',
            'name'                      => 'required|unique:products,name,'.$this->id,
            'sub_category_id'           => 'required',
            'price'                     => 'required',
        ];
    }
}
