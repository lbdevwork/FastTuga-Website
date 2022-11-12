<?php

namespace App\Services;

use App\Models\Order;

class OrderService
{

    public function store(array $data): Order
    {
        // criar o ticket number 0-99
        // guardar os produtos
        // calcular o preço total 

        $totalPrice = 0;

        $orderData = [
            'ticket_number' => 0,
            'status' => "P",
            'customer_id' => $data["customer_id"] ?? null,
            'total_price' => $totalPrice,
            'total_paid' => $data["customer_id"],
            'total_paid_with_points' => $data["total_paid_with_points"],
            'points_gained' => $totalPrice / 10,
            'points_used_to_pay' => $data["points_used_to_pay"],
            'payment_type' => $data["payment_type"],
            'payment_reference' => $data["payment_reference"],
            'date' => now(),
            'custom' => null
        ];

        $order = Order::create($orderData);

        return $order;
    }

    public function update(array $data, Order $order): Order
    {
        // se o pedido é entregue
        // se o pedido é cancelado: devolver o dinheiro e os pontos se for o caso 

        $order->update($data);

        return $order;
    }
}
