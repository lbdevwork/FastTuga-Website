<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user_id' => ['required|integer','unique:users,id',],
            'phone' => 'required|string|max:20',
            'points' => 'required|integer',
            'nif' => 'required|string|max:9',
            'default_payment_type' => 'required|string|in:visa,paypal,mbway',
            'default_payment_reference' => 'required|string|max:255',
            'custom' => 'nullable|json',
        ];
    }
}
