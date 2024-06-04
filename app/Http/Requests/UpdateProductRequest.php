<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama_product' => [
                'required',
                'regex:/^[a-zA-Z]+$/u',
                'min:3',
                'max:50',
                Rule::unique('product')
                    ->where('category_id', $this->category_id)
                    ->ignore($this->product->id),
            ],
            'category_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama_product.string' => 'Nama Product Wajib Diisi',
            'nama_product.required' => 'Nama Product Wajib Diisi',
            'nama_product.unique' => 'Nama Product Telah Ada',
            'nama_product.regex' => 'Nama Category Tidak Boleh Karakter',
            'nama_product.min' => 'Nama Product Kurang Dari Yang Ditentukan',
            'nama_product.max' => 'Nama Product Melebihi Dari Yang Ditentukan',
            'category_id.required' => 'Nama Category Wajib Diisi',
        ];
    }
}
