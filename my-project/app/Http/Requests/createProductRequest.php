<?php

namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class createProductRequest extends FormRequest
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
            //
            'name' => [
                'required', 
            ],
            'year' => [
                'required', 'numeric',
            ],
            'body_style' => [
                'required', 
            ],
            'engine' => [
                'required',
            ],
            'price' => [
                'required', 'numeric',
            ],
            'transmission' => [
                'required', 
            ],
            'color' => [
                'required', 'string',
            ],
            'categories' => [
                'required',
            ],
            'fuel_style' => [
                'required', 'string',
            ],
            'image' => [
                'required', 'image',
            ],
            'description' => [
                
            ]
        ];
    }
}
