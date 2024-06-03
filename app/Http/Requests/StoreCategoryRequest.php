<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'nama_category' =>
            'string|required|regex:/^[a-zA-Z]+$/u|unique:category|min:3|max:50'
        ];
    }

    public function messages()
    {
        return [
            'nama_category.string' => 'Nama Category Wajib Diisi',
            'nama_category.required' => 'Nama Category Wajib Diisi',
            'nama_category.unique' => 'Nama Category Telah Ada',
            'nama_category.regex' => 'Nama Category Tidak Boleh Karakter',
            'nama_category.min' => 'Nama Category Kurang Dari 3 Karakter',
            'nama_category.max' => 'Nama Category Melebihi Dari 50 Karakter',
        ];
    }
}
