<?php

namespace App\Services;

use App\Models\Customer;
use App\Models\User;

class CustomerService
{

    public function store(array $customerData): Customer
    {

        $user = User::create([
            'name' => $customerData['name'],
            'email' => $customerData['email'],
            'password' => bcrypt($customerData['password']),
            'type' => $customerData['type'],
            'blocked' => 0,
            'photo_url' => $customerData['photo_url'],
        ]);

        $customer = $user->customer()->create([
            'phone' => $customerData['phone'],
            'points' => $customerData['points'],
            'nif' => $customerData['nif'],
            'default_payment_type' => $customerData['default_payment_type'],
            'default_payment_reference' => $customerData['default_payment_reference']
        ]);

        return $customer;
    }

    public function update(array $customerData, Customer $customer): Customer
    {
        $customer->update([
            'phone' => $customerData['phone'],
            'points' => $customerData['points'],
            'nif' => $customerData['nif'],
            'default_payment_type' => $customerData['default_payment_type'],
            'default_payment_reference' => $customerData['default_payment_reference']
        ]);

        $customer->user()->update([
            'name' => $customerData['name'],
            'email' => $customerData['email'],
            'password' => bcrypt($customerData['password']),
            'type' => $customerData['type'],
            'blocked' => $customerData['type'],
            'photo_url' => $customerData['photo_url'],
        ]);

        return $customer;
    }
}
