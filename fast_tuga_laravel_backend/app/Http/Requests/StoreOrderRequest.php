<?php

namespace App\Http\Requests;

use App\Enums\OrderStatusEnum;
use App\Enums\PaymentTypeEnum;
use App\Enums\ProductStatusEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class StoreOrderRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ticket_number' => ['required|numeric|between:1,99|' . Rule::unique('orders')
                ->where('ticket_number', $this->ticket_number)
                ->whereIn('status', ['P', 'R'])],
            'status' => ['required|' . new Enum(OrderStatusEnum::class)],
            'customer_id' => ['nullable|numeric|exists:customers,id'],
            'total_price' => ['required|numeric|between:0,999999.99'],
            'total_paid' => ['required|numeric|between:0,999999.99'],
            'total_paid_with_points' => ['required|numeric|between:0,999999.99'],
            'points_gained' => ['required|numeric'],
            'points_used_to_pay' => ['required|numeric'],
            'payment_type' => ['nullable|' . new Enum(PaymentTypeEnum::class)],
            'payment_reference' => ['nullable|string|max:255'],
            'date' => ['required|after_or_equal:today()'],
            'custom' => ['nullable|json'],
            'delivered_by' => ['required_if:status,D|exists:users,id'],
            'products' => ['required|array'],
            'products.*.order_local_number' => ['required'],
            'products.*.product_id' => ['required|numeric|exists:products,id'],
            'products.*.status' => ['required|' . new Enum(ProductStatusEnum::class)],
            'products.*.price' => ['required|numeric|between:0,999999.99'],
            'products.*.preparation_by' => ['required_if:products.*.status,' . ProductStatusEnum::HotDish . '|exists:users,id'],
            'products.*.notes' => ['nullable'],
            'products.*.custom' => ['nullable|json']
        ];
    }
}
