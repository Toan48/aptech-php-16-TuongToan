<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCarsRequest extends FormRequest
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
                'required', 'string'
            ],
            'category' => ['required',],
            'price' => ['required', 'numeric'],
            'image' => ['required', 'image'],
            'bodystyle' => ['required', 'string'],
            'engine' =>['required'],
            'transmission' => ['required', 'string', 'max:20'],
            'fuel_style' => ['required'],
            'color' => ['required', 'string'],
            'description' => ['required']
        ];
    }

    public function messages()
    {
        return 
        [
            'name.required' => 'điền vào đi ông nội'
        ];
    }
}
