<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Atur sesuai kebutuhan autentikasi
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'product_name' => 'sometimes|required|string|max:150',
            'category' => 'sometimes|required|string|max:100',
            'price' => 'sometimes|required|numeric',
            'discount' => 'nullable|numeric',
        ];
    }
}
