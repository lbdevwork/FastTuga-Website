<?php

namespace App\Services;

use App\Models\Order;

class OrderService
{

    public function store(array $orderData): Order
    {
        $order = Order::create($orderData);


        return $order;
    }

    public function update(array $orderData, Order $order): Order
    {
        $order->update($orderData);

        return $order;
    }
}
