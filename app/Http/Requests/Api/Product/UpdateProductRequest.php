<?php

namespace App\Http\Requests\Api\Product;

use App\Models\Product;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'        => ['required', 'string', Rule::unique(Product::class)->ignore($this),],
            'description' => 'required | string | max:500',
            'price'       => 'required | numeric',
            'category_id' => 'required | numeric',
            'available'   => 'required | boolean',
        ];
    }
}
