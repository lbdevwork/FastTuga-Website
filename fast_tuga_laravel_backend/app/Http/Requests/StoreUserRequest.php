<?php

namespace App\Http\Requests;

use App\Enums\PaymentTypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Validation\Rules\Password;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => [
                'required', 'string', 'max:255',
                Password::min(4)
                    ->mixedCase()
                    ->numbers()
            ],
            'type' => 'required|string|' . new Enum(PaymentTypeEnum::class),
            'blocked' => 'required|integer|digits:1',
            'photo_url' => 'nullable|string|max:255',
            'custom' => 'nullable|json',
        ];
    }
}
