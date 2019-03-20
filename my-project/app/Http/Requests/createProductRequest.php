<?php

namespace App\Http\Requests;

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
                'required', 'size:50'
            ],
            'year' => [
                'required', 'numeric'
            ],
            'body_style' => [
                'required', 'size:20',
            ],
            'engine' => [
                'required', 'size:20'
            ],
            'price' => [
                'required', 'numeric'
            ],
            'transmission' => [
                'required', 'size:50'
            ],
            'color' => [
                'required', 'size: 50', 'string'
            ],
            'categories' => [
                'required'
            ],
            'fuel_style' => [
                'required', 'string', 'size:20'
            ],
            'image' => [
                'required', 'image'
            ],
            'description' => [
                'required'
            ],

        ];
    }
}
