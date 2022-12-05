<?php

namespace App\Http\Requests;

use App\Enums\ProductStatusEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class StoreProductRequest extends FormRequest
{

    public function authorize()
    {
        return auth()->user()->type == "EM";
    }

    public function rules()
    {
        return [
            'name' => ['required|string|max:255|unique:product,name'],
            'type' => ['required|' . new Enum(ProductStatusEnum::class)],
            'description' => ['required|string|max:255'],
            'photo_url' => ['required|string|max:255'],
            'price' => ['required|numeric|between:0,999999.99'],
            'custom' => ['nullable|json'],
        ];
    }
}
