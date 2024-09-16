<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required | string | unique:products',
            'description' => 'required | string ',
            'price' => 'required | numeric',
            'category_id' => 'required | numeric',
            'available' => 'required | boolean'

        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'Такое имя уже существует',
        ];
    }
}
