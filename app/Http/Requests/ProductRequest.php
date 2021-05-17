<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
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

        if (isset($this->product->id)) {
            $ignoreNameRule = 'required|string|unique:products,name,' . $this->product->id;
        } else {
            $ignoreNameRule = 'required|string|unique:products';
        }
        return [
            'name' => $ignoreNameRule,
            'model' => 'required',
            'size' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'amount' => 'required|numeric'
        ];
    }
}
