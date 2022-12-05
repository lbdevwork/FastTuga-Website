<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Http\Resources\CustomerResource;
use App\Services\CustomerService;

class CustomerController extends Controller
{
    public function __construct(private CustomerService $customerService)
    {
    }

    public function index()
    {
        return CustomerResource::collection(Customer::all());
    }

    public function store(StoreCustomerRequest $request)
    {
        $this->authorize('create', Customer::class);

        $customer = $this->customerService->store($request->validate());

        return new CustomerResource($customer);
    }

    public function show(Customer $customer)
    {
        return new CustomerResource($customer->load('orders'));
    }

    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $this->authorize('update', Customer::class);

        $this->customerService->update($request->validate(), $customer);

        return new CustomerResource($customer);
    }

    public function destroy(Customer $customer)
    {
        $this->authorize('delete', Customer::class);

        $customer->delete();

        return response(null, 204);
    }
}
