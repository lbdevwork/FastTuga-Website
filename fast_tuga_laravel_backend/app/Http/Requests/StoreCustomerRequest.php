<?php

namespace App\Http\Requests;

use App\Enums\PaymentTypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class StoreCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user_id' => ['required|integer', 'unique:users,id',],
            'phone' => ['required|string|max:20'],
            'points' => ['required|integer'],
            'nif' => ['required|string|max:9'],
            'default_payment_type' => ['required|string|' . new Enum(PaymentTypeEnum::class)],
            'default_payment_reference' => ['required|string|max:255'],
            'custom' => ['nullable|json'],
        ];
    }
}
