<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BeerRequest extends FormRequest
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

                'name' => 'required|min:2|max:100',
                'description' => 'required|min:2|max:255',
                'price' => 'required|numeric'

        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nome',
            'description'=>'descrição',
            'price' => 'preço',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é requisitado.',
            'max' => 'O campo :attribute pode ter no máximo :max caracteres',
            'min' => 'O campo :attribute deve ter no mínimo :min caracteres',
            'numeric'=> 'O campo :attribute deve ser um número'
        ];
    }
}
